<?php

add_theme_support( 'menus' ); 
add_filter( 'nav_menu_css_class', 'parent_nav_class', 10, 2 );

function is_under($title) {
  global $post;
  
  if (get_the_title($post->ID) == $title) {
    return true;
  }
  
  $ancestors = $post->ancestors;
  
  foreach ($ancestors as $id) {
    if (get_the_title($id) == $title) {
      return true;
    }
  }
  
  return false;
}

function get_attachments($post_id) {
  $args = array( 'post_type' => 'attachment', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post_id ); 
  $attachments = get_posts($args);
  
  $result = array();

  if ($attachments) {
  	foreach ( $attachments as $attachment ) {
  	  array_push($result, 
  	    array("title" => apply_filters( 'the_title' ,  $attachment->post_title), 
  	          "link" => wp_get_attachment_link( $attachment->ID, '', false, false, 'Download'),
  	          "rawUrl" => wp_get_attachment_url($attachment->ID),
  	          "target" => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true)
  	    )
  	  );
  	}
	}
	
	return $result;
}

function get_subpages() {
  global $post;
  
  $args = array( 'post_type' => 'page', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
  return get_posts($args);
}

/****************** Resources **********************/
function get_resources_page_id() {
  $args = array('name' => 'resources', 'post_type' => 'page', 'showposts' => 1);
  $resources_pages = get_posts($args);
  
  if(!$resources_pages) {
    return -1;
  }
  
  return $resources_pages[0]->ID;
}

function get_resources($footer_only) {
  $result = array();
  $resource_page_id = get_resources_page_id();
  
  if ($resource_page_id == -1) {
    return $result;
  }
  
  $args = array( 'post_type' => 'page', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $resource_page_id ); 
  $resources = get_posts($args);
  
  if ($resources) {
    foreach ($resources as $resource_page) {
      $include_in_footer = get_field("in_footer", $resource_page->ID);
      
      if (!$footer_only or $include_in_footer) {
        array_push($result,
    	    array("title" => $resource_page->post_title, 
    	          "image" => get_field("image", $resource_page->ID),
    	          "resource" => get_field("resource", $resource_page->ID))
          );
      }
    }
  }
  
  return $result;
}

function parent_nav_class( $classes = array(), $menu_item = false ) {
    $menu_item_post_id = url_to_postid($menu_item->url);
    if ( is_ancestor($menu_item_post_id) ) {
        $classes[] = 'current-menu-item';
    }
    return $classes;
}

function is_ancestor($post_id) {
    global $wp_query;
    $ancestors = $wp_query->post->ancestors;
    return in_array($post_id, $ancestors);
}

?>

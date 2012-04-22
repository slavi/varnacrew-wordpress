<?php

add_theme_support( 'menus' ); 

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

function get_resources() {
  $args = array(
    'name' => 'resources',
    'post_type' => 'page',
    'showposts' => 1
  );
  
  $resource_pages = get_posts($args);
  
  if( $resource_pages ) {
    return get_attachments($resource_pages[0]->ID);
  } else {
    return array();
  }
  
}

function get_subpages() {
  global $post;
  
  $args = array( 'post_type' => 'page', 'numberposts' => -1, 'post_status' => null, 'post_parent' => $post->ID ); 
  return get_posts($args);
}

?>

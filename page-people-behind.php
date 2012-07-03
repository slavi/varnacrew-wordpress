<?php 
/*
Template Name: People Behind Page
*/
?>

<?php get_header(); ?>
	
<?php 
    $people_behind = get_subpages();
?>

<a href="javascript:;" title="" class="left carousel-arrow people"></a>
<a href="javascript:;" title="" class="right carousel-arrow people"></a>

<!-- 3D Carousel -->
<ul class="team-images">
 <?php
   	foreach ( $people_behind as $person_page ) {
   	  echo "<li><img src='" . get_field("image", $person_page->ID) . "'><p>" . $person_page->post_title . "</p></li>";
   	}
 ?>
</ul>
<ul class="team-texts">
 <?php
   	foreach ( $people_behind as $person_page ) {
   	  echo "<li>" . $person_page->post_content . "</li>";
   	}
 ?>
</ul>

<?php get_footer(); ?>

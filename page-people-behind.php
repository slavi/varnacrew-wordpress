<?php 
/*
Template Name: People Behind Page
*/
?>

<?php get_header(); ?>

  <?php 
      $people_behind = get_subpages();
      
      if ($people_behind) {
        echo "<table>";
      	foreach ( $people_behind as $person_page ) {
      	  echo "</tr><td><img src='" . get_field("image", $person_page->ID) . "'><br />" . $person_page->post_title . "</td><td><p>" . $person_page->post_content ."</p></td></tr>";
      	}
        echo "</table>";
      }
  ?>
<?php get_footer(); ?>

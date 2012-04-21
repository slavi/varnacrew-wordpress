<?php 
/*
Template Name: People Behind Page
*/
?>

<?php get_header(); ?>

  <?php 
      $subpages = get_subpages();
      
      if ($subpages) {
        echo "<table>";
      	foreach ( $subpages as $subpage ) {
      	  echo "</tr><td>" . $subpage->post_title . "</td><td><p>" . $subpage->post_content ."</p></td></tr>";
      	}
        echo "</table>";
      }
  ?>
<?php get_footer(); ?>

<?php 
/*
Template Name: Resources Page
*/
?>

<?php get_header(); ?>

  <?php 
      $attachments = get_attachments($post->ID);
      
      if ($attachments) {
        echo "<table>";
      	foreach ( $attachments as $attachment ) {
      	  echo "</tr><td>" . $attachment["title"] . "</td><td>" . $attachment["link"] . "</td></tr>";
      	}
        echo "</table>";
      }
  ?>
<?php get_footer(); ?>

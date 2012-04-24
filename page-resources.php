<?php 
/*
Template Name: Resources Page
*/
?>

<?php get_header(); ?>

  <?php 
  	$resources = get_resources(false);
      
      if ($resources) {
        echo "<table style='width: 100%'>";
      	foreach ( $resources as $resource ) {
      	  echo 
      	  "</tr>" . 
      	    "<td><img src='" . $resource["image"] . "' /></td>" . 
      	    "<td>" . $resource["title"] . "</td>" . 
      	    "<td><a href='" . $resource["resource"] . "'>Download</a></td>" .
      	  "</tr>";
      	}
        echo "</table>";
      }
  ?>
<?php get_footer(); ?>

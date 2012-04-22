<?php 
/*
Template Name: Tiles Page
*/
?>

<?php 
      $subpages = get_subpages();
      
      if ($subpages) {
      	foreach ( $subpages as $subpage ) 
			echo file_get_contents(get_permalink($subpage->ID)) . "<br/>";			      	
      }
?>

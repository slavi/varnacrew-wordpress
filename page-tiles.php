<?php 
/*
Template Name: Tiles Page
*/
?>

<?php 
      $subpages = get_subpages();
      
      if ($subpages) {
		for ($i = 0; $i < sizeof($subpages); ++$i ) {
			$subpage =  $subpages[$i];
			echo "<div class='cbox small " . ($i % 2 == 0 ? "" : "second") . "'>";
			echo "<div class='iwrapper'>";
			echo file_get_contents(get_permalink($subpage->ID));			      	
			echo "</div>";
	        echo "<div class='shadow right'></div>";
	        echo "<div class='shadow bottom'></div>";
	    	echo "</div>";
			if ($i % 2)
				echo "<div class='clear'></div>";
		}
      }
?>

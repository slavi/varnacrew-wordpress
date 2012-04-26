<?php 
/*
Template Name: Gallery Page
*/
?>

<?php 
	// uses nextgen gallery builtin function for displaying random images
	// nggDisplayRandomImages(7);
	
	// if we need more control, use this:
	$max_images = 7;
	$pictures = nggdb::get_random_images($max_images);		
	echo "<table><tr>";
	foreach ($pictures as $pic) {
		$thumbcode = $pic->get_thumbcode();
		echo "<td><a href='".$pic->imageURL."'".$thumbcode."><img src='".$pic->thumbURL."'/></a></td>";
	}
	echo "</tr></table>";
?>

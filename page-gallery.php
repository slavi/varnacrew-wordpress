<?php 
/*
Template Name: Gallery Page
*/
?>

<h3 class='box-title'>Photos</h3>
<div class='photos-home'>

<?php 
	// uses nextgen gallery builtin function for displaying random images
	// nggDisplayRandomImages(7);
	
	// if we need more control, use this:
	$max_images = 7;
	$pictures = nggdb::get_random_images($max_images);		
	
	$big_pic = $pictures[0];
	
	echo "<div class='big'>";
	echo_image($big_pic, 244, 172);
	echo "</div>";
	
	echo "<ul>";
	for ($i = 1; $i < sizeof($pictures); ++$i) {
		$pic = $pictures[$i];
		echo "<li class='".($i % 2 == 0 ? "second" : "")."'>";
		echo_image($pic, 65, 61);
		echo "</li>";
	}
	echo "</ul>";
	
	function echo_image($pic, $width, $height) {
		echo "<a href='" . $pic->imageURL . "'" . $pic->get_thumbcode() . ">";
		echo "	<img src='" . $pic->imageURL . "' width='" . $width . "' height='" . $height . "'/>";
		echo "</a>";
	}
?>

</div>

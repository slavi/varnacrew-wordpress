<?php 
/*
Template Name: Alumnus Page
*/
?>

<h3 class="box-title">Featured Alumni</h3>
<div class="featured-home">

<?php 
	$subpages = get_subpages();

	$featured_alumnus = array();
	
	foreach ($subpages as $subpage) {
		if (get_field("is_featured", $subpage->ID)) {
			$featured_alumnus[] = $subpage;
		}
	}
      
	if (!$featured_alumnus) $featured_alumnus = $subpages;
	
	$alumni = $featured_alumnus[rand(0, sizeof($featured_alumnus) - 1)];	

	$image_width = 175;
	$image_height = 207;
	$max_text_length = 360;
	$people_behind_page_link =  get_permalink( get_page_by_path( 'people-behind' ) );
		
	echo "<a class='member-thumb'>";
	echo wp_get_attachment_image(get_field("image", $alumni->ID), array($image_width, $image_height));
	echo "</a>"; 
	echo "<h3 class='name'>";
	echo "	<a href='" . $people_behind_page_link . "' title='" . $alumni->post_title . "'>" . $alumni->post_title . "</a>"; 
	echo "</h3>";
	echo "<p>" . substr($alumni->post_content, 0, $max_text_length) ."</p>";      	    
?>
	<a href="<?php echo $people_behind_page_link; ?>" title="More" class="more">More</a>
</div>

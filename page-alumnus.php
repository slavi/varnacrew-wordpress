<?php 
/*
Template Name: Alumnus Page
*/
?>

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
			
    echo "<table>";
	echo "<tr><td>" . $alumni->post_title . "</td></tr>";
	echo "<tr><td>" .  wp_get_attachment_link(get_field("image", $alumni->ID), "thumbnail") . "</td></tr>"; 
	echo "</tr><td><p>" . $alumni->post_content 			."</p></td></tr>";      	
    echo "</table>";
      
?>

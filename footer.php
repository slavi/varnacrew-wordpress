Useful
<hr />
  <?php
    $resources = get_resources(true);
    
    if ($resources) {
      echo "<table><tr>";
    	foreach ( $resources as $resource ) {
    	  echo 
      	    "<td><img src='" . $resource["image"] . "'></td>" .
      	    "<td><a href='" . $resource["resource"] . "'>" . $resource["title"] . "</a></td>";
    	}
      echo "</tr></table>";
    }
  ?>

		<?php wp_footer(); ?>
	
	</body>
</html>

Useful
<hr />
  <?php
    $resources = get_resources();
    
    if ($resources) {
      echo "<table>";
    	foreach ( $resources as $resource ) {
    	  echo "</tr><td>" . $resource["title"] . "</td><td>" . $resource["link"] . "</td></tr>";
    	}
      echo "</table>";
    }
  ?>

		<?php wp_footer(); ?>
	
	</body>
</html>

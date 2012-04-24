<?php 
/*
Template Name: Get Social Page
*/
?>

<div id="fb-root"></div>
<script type="text/javascript">
// <![CDATA[
 (function(d, s, id) {   var js, fjs = d.getElementsByTagName(s)[0];   if (d.getElementById(id)) return;   js = d.createElement(s); js.id = id;   js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";   fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));
// ]]>
</script>

<div style="width: 400px;">
	
	<div class="social-link-wrapper">
  	<?php 
      $attachments = get_attachments($post->ID);
      if ($attachments) {
      	foreach ( $attachments as $attachment ) {
		  echo "<a class='social-link' href='" . $attachment["target"] . "' target='_blank'>"; 
		  echo "<img src='" . $attachment["rawUrl"] . "' alt='" . $attachment["title"] . "'/>";
		  echo "</a>";
      	}
        echo "</table>";
      }
  	?>
	</div>

	<div class="fb-like-box-header">facebook</div>
	<div class="fb-like-box" data-href="http://www.facebook.com/facebook" 
	 		data-width="400" data-height="180" data-show-faces="true" 		 
			data-stream="false" data-header="false" data-border-color="#fff">
	</div>

</div>

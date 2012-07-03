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

<h3 class="box-title">Join us</h3>
<div class="join-home">
	<ul class="clearfix">		
  	<?php 
      $attachments = get_attachments($post->ID);
      if ($attachments) {
      	foreach ( $attachments as $attachment ) {
		  echo "<li><a class='" . $attachment["title"] . "' href='" . $attachment["target"] . "' target='_blank'>"; 
		  echo "<img src='" . $attachment["rawUrl"] . "' alt='" . $attachment["title"] . "'/>";
		  echo "</a></li>";
      	}
      }
  	?>
	</ul>

	<div class="share">
		<div class="fb-like-box-header">Aleksander Foundation</div>
		<div class="fb-like-box" data-href="https://www.facebook.com/AleksanderFoundation" 
	 			data-width="400" data-height="193" data-show-faces="true" 		 
				data-stream="false" data-header="false" data-border-color="#fff">
			</div>
	</div>

</div>

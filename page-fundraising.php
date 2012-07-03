<?php 
/*
Template Name: Fundraising Page
*/

get_header(); 
?>

<!-- Left column -->
<div class="column grid_1">
	<div class="left-picture"><img class="fundraising" width="166" height="148" alt="" /></div>
</div>

<!-- Middle column -->
<div class="column grid_2">
	<div class="program-main">
	  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content();?>
		<?php endwhile; ?>
    </div>
</div>

<!-- Right column -->
<div class="column grid_3">
	<a href="http://www.justgiving.com/aleksanderfoundation/donate" title="Donate online" class="donate-online">Donate online</a>
</div>

<?php get_footer(); ?>
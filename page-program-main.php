<?php 
/*
Template Name: Main Program Page
*/

if (is_under("Academic Runs")) {
	$menu_title = 'Past Academic Runs:';
	$menu_name = 'Runs';
	$image_path = 'program-runs';
}

if (is_under("Alumni Reunions")) {
	$menu_title = 'Past Alumni Reunions:';
	$menu_name = 'Reunions';
	$image_class = 'program-reunions';
}

if (is_under("Competitions")) {
	$menu_title = 'Past Competitions:';
	$menu_name = 'Competitions';
	$image_class = 'program-competitions';
}

if (is_under("LSE Summer School")) {
	$menu_title = 'Past LSE Summer Schools:';
	$menu_name = 'LSE';
	$image_class = 'program-lse';
}

if (is_under("Public Lectures")) {
	$menu_title = 'Past Public Lectures:';
	$menu_name = 'Lectures';
	$image_class = 'program-lectures';
}

if (is_under("Seminars")) {
	$menu_title = 'Past Seminars:';
	$menu_name = 'Seminars';
	$image_class = 'program-seminars';
}

if (is_under("Workshops")) {
	$menu_title = 'Past Workshops:';
	$menu_name = 'Workshops';
	$image_class = 'program-workshops';
}

get_header(); 

?>

<!-- Left column -->
<div class="column grid_1">
	<div class="left-picture"><img class="<?php echo $image_class; ?>" width="166" height="148" alt="" /></div>
</div>

<!-- Middle column -->
<div class="column grid_2">
	<div class="program-main">
	  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title();?></h1>
			<?php the_content();?>
		<?php endwhile; ?>
    </div>
</div>

<!-- Right column -->
<div class="column grid_3">
	<h4 class="summer-school"><?php echo $menu_title; ?></h4>
	<?php wp_nav_menu( array('menu' => $menu_name, 'container' => false, 'menu_class' => 'school-list')); ?>
</div>

<?php get_footer(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
	</head>
	
	<div <?php body_class(); ?>>
	
		<div style="header">
			<?php wp_nav_menu( array('menu' => 'Main', 'container' => false, )); ?>
			<!-- Nav level 2 -->
			<?php if (is_under("Programs")) wp_nav_menu( array('menu' => 'Programs', 'container' => false, )); ?>
			<?php if (is_under("Resources")) wp_nav_menu( array('menu' => 'Resources', 'container' => false, )); ?>
			<?php if (is_under("Fundraising")) wp_nav_menu( array('menu' => 'Fundraising', 'container' => false, )); ?>
			<?php if (is_under("People Behind")) wp_nav_menu( array('menu' => 'People Behind', 'container' => false, )); ?>
			<!-- Nav level 3 -->
			<?php if (is_under("Workshops")) wp_nav_menu( array('menu' => 'Workshops', 'container' => false, )); ?>
			<?php if (is_under("Seminars")) wp_nav_menu( array('menu' => 'Seminars', 'container' => false, )); ?>
		</div>

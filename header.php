<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta content="text/html; charset=UTF-8" http-equiv="Content-Type"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta content="" name="description"/>
  <meta content="" name="keywords"/>
  <meta content="" name="Author"/>
  <meta content="" name="Copyright"/>
  <meta content="BG" http-equiv="Content-Language"/>
  <meta content="" name="geo.placename"/>
  <meta content="" name="geo.position"/>
  <meta content="index,follow" name="robots"/>

  <link href="/images/other/favicon.ico" rel="Shortcut Icon" />

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  
  <script src="<?php bloginfo('template_url'); ?>/scripts/jquery-1.7.2.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/scripts/jquery.carousel-0.9.8.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/scripts/jquery.roundabout.min.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/scripts/jquery.roundabout-shapes.min.js" type="text/javascript"></script>

  <script src="<?php bloginfo('template_url'); ?>/scripts/css_browser_selector.js" type="text/javascript"></script>
  <script src="<?php bloginfo('template_url'); ?>/scripts/main.js" type="text/javascript"></script>

  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="header">
		  
		  <div class="wrapper">
		    
      <h1><a href="javascript:;" title="The Alexander Foundation">The Alexander Foundation</a></h1>

			<?php wp_nav_menu( array('menu' => 'Main', 'container' => false, 'menu_class' => 'navigation')); ?>
			
      <p class="info">The primary goal of the foundation is to promote and support the development of the Bulgarian university education through a number of initiatives including the organisation and sponsorship of conferences.</p>
			</div>
		</div>
		
		<div class="wrapper">
    
      <!-- CONTENT - Start -->
      <div class="content clearfix">
  			<!-- Nav level 2 -->
  			<?php if (is_under("Programs")) wp_nav_menu( array('menu' => 'Programs', 'container' => false, 'menu_class' => 'tabs' )); ?>
  			<?php if (is_under("Resources")) wp_nav_menu( array('menu' => 'Resources', 'container' => false,'menu_class' => 'tabs' )); ?>
  			<?php if (is_under("Fundraising")) wp_nav_menu( array('menu' => 'Fundraising', 'container' => false, 'menu_class' => 'tabs'  )); ?>
  			<?php if (is_under("People Behind")) wp_nav_menu( array('menu' => 'People Behind', 'container' => false, 'menu_class' => 'tabs' )); ?>
		<!-- Carousel -->
		<?php if ($post->post_name != "home") { ?>
		<div class="cbox inner">
			<div class="iwrapper clearfix">
		<?php } ?>

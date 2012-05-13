<?php 
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>

<?php
	echo file_get_contents(get_permalink(get_page_by_path("home/program-selector"))) . "<br/>";
	echo file_get_contents(get_permalink(get_page_by_path("home/tiles"))) . "<br/>";
?>

<?php get_footer(); ?>

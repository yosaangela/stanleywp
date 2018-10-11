
<?php
/**
 * Template Name: Homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StanleyWP
 */

get_header(); ?>


	<?php include get_stylesheet_directory() . '/includes/homepage/banner.php'; ?>
	<?php include get_stylesheet_directory() . '/includes/homepage/projects.php'; ?>

	<!--
		Now, imagine you have 15 of includes here, and you want to change order of sections
		because client is an asshole and just wants tht to be changed. You can just,
		swipe and change position of includes.
		You see, it is easier to maintain and manipulate. yaaaa,,
		good 
	-->

	

<?php
get_footer();
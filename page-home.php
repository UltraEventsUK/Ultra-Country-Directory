<?php
/**
  * Template Name: Home
  *
*/

get_header();
?>
	<video autoplay muted loop id="hp_bg_video">
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/assets/video/mma-web.m4v" type="video/mp4">
	</video>
	<main id="primary" class="site-main">

		<h1>Welcome to Ultra White Collar Boxing</h1>
		<span class="sub">CHOOSE YOUR COUNTRY</span>	

		<div class="site_links">
			<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/australia.png" alt="UWCB Australia"></a>
			<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/canada.png" alt="UWCB Canada"></a>
			<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/poland.png" alt="UWCB Poland"></a>
			<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/united-kingdom.png" alt="UWCB United Kingdom"></a>
			<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/united-states.png" alt="UWCB United States"></a>
		</div>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();

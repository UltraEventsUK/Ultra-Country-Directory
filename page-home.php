<?php
/**
  * Template Name: Home
  *
*/
get_header();
?>
	<div id="hp_bg_video">
		<video autoplay muted loop id="vid">
			<!-- Source files are loaded via JS in the script tags below -->
		</video>
	</div>

	<main id="primary" class="site-main">

		<h1>Welcome to Ultra White Collar Boxing</h1>
		<span class="sub">CHOOSE YOUR COUNTRY</span>	

		<div class="site_links">
			<a href="https://www.ultrawhitecollarboxing.com.au"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/australia.png" alt="UWCB Australia"></a>
			<a href="<?php echo site_url(); ?>/ca"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/canada.png" alt="UWCB Canada"></a>
			<a href="https://www.ultrawhitecollarboxing.pl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/poland.png" alt="UWCB Poland"></a>
			<a href="https://www.ultrawhitecollarboxing.co.uk"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/united-kingdom.png" alt="UWCB United Kingdom"></a>
			<a href="https://www.ultrawhitecollarboxing.com"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flags/united-states.png" alt="UWCB United States"></a>
		</div>

	</main><!-- #main -->

	<script>
		var w = window.matchMedia("(max-width: 450px)");
		var vid = document.getElementById("vid");
		var source = document.createElement("source");
		source.id = "hvid";
		source.setAttribute("type", "video/mp4");
		vid.appendChild(source);
		
		if (w.matches) {
			vid.pause();
			source.removeAttribute("src");
			source.setAttribute("src", "https://background-videos.s3.eu-west-1.amazonaws.com/uwcb-mobile-web.m4v");
			vid.load();
			vid.play();
		} else {
			vid.pause();
			source.removeAttribute("src");
			source.setAttribute("src", "https://background-videos.s3.eu-west-1.amazonaws.com/uwcb-desktop-web.m4v");
			vid.load();
			vid.play();
		}

		window.addEventListener("resize", function(){
			var w = window.matchMedia("(max-width: 450px)");
			var vid = document.getElementById("vid");
			var source = document.getElementById("hvid");
			
			if (w.matches) {
				vid.pause();
				source.src = "https://background-videos.s3.eu-west-1.amazonaws.com/uwcb-mobile-web.m4v";
				vid.load();
				vid.play();
			} else {
				vid.pause();
				source.src = "https://background-videos.s3.eu-west-1.amazonaws.com/uwcb-desktop-web.m4v";
				vid.load();
				vid.play();
			}
		});
	</script>

<?php
// get_sidebar();
get_footer();

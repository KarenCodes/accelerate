<?php
/**
 * The template for 404
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>
	
		<div class="site-content">
			
				<div class='fourohfour-hero'>
					<h2>Uh oh, something went wrong...</h2>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg">
					<h2>Who called our competition?</h2>
					
					
					<a class="button" href="<?php echo home_url(); ?>">Take me home!</a>
					<h3>The page you requested was not found.</h3>
				<p>It happens.</p> 
				<p>Hit the button above to get to our Home page or click on the menu at the top and let's get you back on track with the professionals at Accelerate.</p>
				</div>
				
			
		</div>	
	
<?php get_footer(); ?>
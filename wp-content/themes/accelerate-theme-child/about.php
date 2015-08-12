<?php
/*
 * Template Name: About Template
 * Description: Page template to display About page and custom post type Services 
 * underneath the page content
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="about-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='about-page-hero'>
				<!-- display page content over background image -->
				<?php the_content(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .about-page -->
<section class="services">
	<div class="site-content">
		<div class="about-header">
 		<h4>OUR SERVICES</h4>
 		<p>We take pride in our clients and the content we create for them. </br>Here's a brief overview of our offered services.</p>
 		</div>
 		<ul class="about-our-services">
		<?php query_posts('post_type=our_services'); ?>
			<?php while ( have_posts() ) : the_post(); 	
				$image = get_field("image"); 
				$size="medium";
				$align = get_field("image_align");
			?>
			<li class="clearfix">
				<figure>
					<div class="image-service <?php echo $align ?>">
						<?php if($image) { ?>
							<?php echo wp_get_attachment_image( $image, $size ); ?>
						<?php } ?>
					</div>
					<h4><?php the_title(); ?></h4>
					<?php the_content(); ?>
				</figure>
				
			</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
		<hr>
		<div class="about-footer">
			Interested in working with us? <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
		</div>
		<hr>
	</div>
</section>

<?php get_footer(); ?>
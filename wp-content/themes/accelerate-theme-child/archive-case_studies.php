<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="case-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

			<?php 
			/* Get custom fields */
			$services = get_field("services");
			$client = get_field("client");
			$image_1 = get_field("image_1");
			$size = "full";	
			?>	
			<div class="clearfix">
				<aside class="case-study-sidebar">
					<a href="<?php echo the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<h5><?php echo $services; ?></h5>
					<h4>Client: <?php echo $client; ?></h4>
					<?php the_excerpt(); ?>
					<a href="<?php echo the_permalink(); ?>">View Project &gt;</a>
				</aside>
				<div class="case-study-images">
					<?php if($image_1) { ?>
						<a href="<?php echo the_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, $size ); ?></a>
					<?php } ?>
				</div>
			</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>
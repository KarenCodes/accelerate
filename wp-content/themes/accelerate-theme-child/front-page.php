<?php
/**
 * The template for displaying the homepage
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

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .container -->
</section><!-- .home-page -->
<section class="featured-work">
	<div class="site-content">
 		<h4>Featured Work</h4>
 		<ul class="homepage-featured-work">
		<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
			<?php while ( have_posts() ) : the_post(); 	
				$image_1 = get_field("image_1"); 
				$size="medium"
			?>
			<li>
				<figure>
				<?php if($image_1) { ?>
					<a href="<?php the_permalink(); ?>">
					<?php echo wp_get_attachment_image( $image_1, $size ); ?>
					</a>
				<?php } ?>
				</figure>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>
</section>
<section class="our-services">
	<div class="site-content">
 		<h4>Our Services</h4>
 		<ul class="homepage-our-services">
		<?php query_posts('posts_per_page=4&post_type=our_services'); ?>
			<?php while ( have_posts() ) : the_post(); 	
				$image = get_field("image"); 
				$size="medium"
			?>
			<li>
				<figure>
				<?php if($image) { ?>
					<a href="<?php the_permalink(); ?>">
					<?php echo wp_get_attachment_image( $image, $size ); ?>
					</a>
				<?php } ?>
				</figure>
				<h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
			</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</ul>
	</div>
</section>
<section class="recent-posts">
	<div class="site-content">
 		<div class="blog-post">
 			<h4>From the Blog</h4>
			<?php query_posts('posts_per_page=1'); ?>
			<?php while ( have_posts() ) : the_post(); ?>
 				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="read-more-link">Read More <span>&rsaquo;</span></a>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
		</div>
		<?php if ( is_active_sidebar( 'homepage-tweet' ) ) : ?>
		<div id="secondary" class="widget-area home-twitter-feed" role="complementary">
			<?php dynamic_sidebar( 'homepage-tweet' ); ?>
			<a href="http://twitter.com" class="twitter-follow">Follow Us <span>&rsaquo;</span></a>
		</div>
<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
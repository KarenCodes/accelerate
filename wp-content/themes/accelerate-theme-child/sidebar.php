<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
			<aside class="sidebar">
	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>	
			<?php endif; ?>

				<div class="post-author">
					
					<div class="intro-text">

						<a href="<?php echo home_url(); ?>">Accelerate</a> is a strategy and maketing agency aimed at making our clients visible and building their businesses. 
					</div>
				</div>

				<div class="widget widget_mailchimp">
					<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
						<div id="secondary" class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'blog-sidebar' ); ?>
						</div>
					<?php endif; ?>
				</div>
			
				<div class="widget widget_search-form">
					<form role="search" method="get" class="search-form" action="">
						<input type="text" class="input" placeholder="search" value="" name="s">
						<input type="button" class="input-btn" value="">
					</form>
				</div>

				<div class="widget widget_categories">
					<h3 class="widget-title">Categories</h3>		
					<ul>
						<li><a href="">Books </a></li>
						<li><a href="">My Notes</a></li>
						<li><a href="">Photos</a></li>
						<li><a href="">Videos</a></li>
						<li><a href="">Quotes</a></li>
					</ul>
				</div>

				<div class="widget widget_archives">
					<h3 class="widget-title">Archives</h3>		
					<ul>
						<li><a href="">September 2014</a></li>
						<li><a href="">August 2014</a></li>
						<li><a href="">July 2014</a></li>
						<li><a href="">June 2014</a></li>
						<li><a href="">May 2014</a></li>
					</ul>
				</div>

				<div class="widget widget_events">
					<h3 class="widget-title">Events</h3>		
					<ul>
						<li><a href=""><img src="upload/Event-1.jpg" alt=""></a></li>
						<li><a href=""><img src="upload/Event-2.jpg" alt=""></a></li>
						<li><a href=""><img src="upload/Event-3.jpg" alt=""></a></li>
					</ul>
				</div>
	
</aside>
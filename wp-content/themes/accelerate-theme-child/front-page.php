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
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/contact-me/') ?>">Let's Get Started!</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<div class="intro-section">
	<section class="intro">
		<h2>Hi! I'm Lisa of LS Codes</h2>
		<p>I love creating websites that truly express your vision. Need a static page coded with HTML & CSS? A WordPress site that you can amend at your whim? Help defining your brand? Or just a bit of assistance updating your site? I can help. Would you like to see what I can do?
		</p>
	</section>
</div>

<!-- maybe take away site-content & flex for mobile instead display block -->
	<section class="featured-work">
		<div class="site-content">
			<h4>Case Studies</h4>

			<p>A few examples of work I've done.</p>

			<div class="homepage-featured-work-row">
			<?php query_posts('posts_per_page=6&post_type=case_studies'); ?> <!-- more-->
				<?php while ( have_posts() ) : the_post();
		#			$image_1 = get_field("image_1");
					$logo = get_field("logo");
					$size = "thumbnail";
					$services = get_field("services")
				?>
				<div class="individual-featured-work">
					<figure><a href="<?php the_permalink(); ?>">
						<?php echo wp_get_attachment_image($logo, $size); ?></a>
					</figure>

					<h3 class="individual-work-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php echo $services; ?></p>
				</div>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>
		</div>
	</section>

	<section class="testimonial">
		<h4>Gossip</h4>
		<p>"I have truly enjoyed working with Lisa.  She is a great listener and really works to figure out what the customer is visualizing.  She is quick to respond, communicates well, and understands how to put a beautiful website together that will draw attention to your products or services."  <strong>Jill Machovsky</p>
	</section>

	<section class="cta">
		<a class="button" href="<?php echo site_url('/contact-me/') ?>">Let's Get Started!</a>
	</section>



<!--	<section class="recent-posts">
		<div class="site-content">
			<div class="blog-post">
				<h4>From the Blog</h4>
					<?php query_posts('posts_per_page=1'); ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?>
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
			</div>
			<div class="twitter-widget">
				<h4>Recent Tweet</h4>
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
					<div id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-2' ); ?>
					</div>
				<?php endif; ?>
				<a class="follow-us-link" target="_blank" href="https://twitter.com/Skillcrush">Follow Us ></a>
			</div>

		</div>
	</section>  -->

<?php get_footer(); ?>

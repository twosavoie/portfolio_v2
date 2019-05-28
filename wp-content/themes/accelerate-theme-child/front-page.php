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
		<p>I love creating website that truly express your vision of your business. I spend the time to get to know what is important to you. And then process that into a website. Maybe put the story part in there too?
		</p>
	</section>
</div>

<!-- maybe take away site-content & flex for mobile instead display block -->
	<section class="featured-work">
		<div class="site-content">
			<h4>Case Studies</h4>
			<p>Website design and development, Website redisign, Branding, Tech support...</p>

			<div class="homepage-featured-work-row">
			<?php query_posts('posts_per_page=6&post_type=case_studies'); ?> <!-- more-->
				<?php while ( have_posts() ) : the_post();
					$image_1 = get_field("image_1");
					$size = "medium";
				?>
				<div class="individual-featured-work">
					<figure><a href="<?php the_permalink(); ?>">
						<?php echo wp_get_attachment_image($image_1, $size); ?></a>
					</figure>

					<h3 class="individual-work-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?> <!-- maybe not? -->
				</div>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>



		</div>
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

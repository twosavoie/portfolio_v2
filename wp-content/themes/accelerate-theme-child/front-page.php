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
				<a class="button" href="<?php echo site_url('/blog/') ?>">View Our Work</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<section class="featured-work">
		<div class="site-content">
			<h4>Featured Work</h4>

			<div class="homepage-featured-work-row">
			<?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
				<?php while ( have_posts() ) : the_post();
					$image_1 = get_field("image_1");
					$size = "medium";
				?>
				<div class="individual-featured-work">
					<figure><a href="<?php the_permalink(); ?>">
						<?php echo wp_get_attachment_image($image_1, $size); ?></a>
					</figure>

					<h3 class="individual-work-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<?php endwhile; ?>
			<?php wp_reset_query(); ?>
		</div>

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
						<?php endwhile; ?>
					<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
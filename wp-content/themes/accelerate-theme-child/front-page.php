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
		<div class="main-content-header" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<a class="button" href="<?php echo site_url('/contact-me/') ?>">Let's Get Started!</a>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->
<div class="intro-section">
	<section class="intro">
		<h2>Hi! I'm Lisa of LS Codes</h2>
		<p>I love creating websites that truly express your vision. Need a WordPress site that you can amend at your whim? A static page coded with HTML & CSS? Help defining your brand? Or just a bit of assistance updating your site? I can help. Would you like to see what I can do?
		</p>
	</section>
</div>

<!-- maybe take away site-content & flex for mobile instead display block -->
	<section class="featured-work">
		<div class="site-content">
			<h4>Case Studies</h4>

			<p>A few examples of work I've done. Please click on any project to learn more.</p>

			<div class="homepage-featured-work-row">
			<?php query_posts('posts_per_page=9&post_type=case_studies'); ?> <!-- more-->
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
		<h4>Said about me</h4>
		<p>"Lisa Savoie constructed our non-profit's website, managed the launch, and provided documentation/training to ensure that my staff is equipped to maintain the website long-term. Throughout this process, Lisa exceeded our expectations. She is knowledgeable, yet also capable of communicating clearly with non-technical staff. She works efficiently; this project was completed well ahead of our anticipated launch date. She communicates clearly and regularly. Importantly, her work product is extremely high quality. But, perhaps even more importantly, the process itself was seamless and dare I say it... enjoyable!" -  <strong>Heather Finnegan, Executive Director, The Community's Foundation</strong></p>
	</section>

	<section class="homepage-cta cta">
		<div class="cta-blue">
			<a class="button" href="<?php echo site_url('/contact-me/') ?>">Let's Get Started!</a>
		</div>
	</section>


<?php get_footer(); ?>

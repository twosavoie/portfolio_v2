<?php
/**
 * The template for displaying the services page
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="about-page about-hero-content">
    <div class="main-content" role="main">


			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
  </div><!-- #primary -->

<section class="services-list">
  <div class="about-services">
		<h5>I became a freelance developer because I love creating websites truly suited to my clients priorities.</h5>
			<div class="half-width">
      	<p class="left-side">I know that putting your business in the hands of a developer is stressful. Will they understand what is important to you? Be respectful of your budget? Leave you confused with jargon?</p>
			</div>
			<div class="half-width">
				<p>I am a Service-First developer. I spend the time getting to know you, your needs, and your competition. I focus on how your website can draw attention to what makes you unique.</p>
			</div>
  	</div>

<!-- remove permalinks if not creating single pages for posts -->
  <div id="primary" class="site-content">
		<div class="main-content" role="main">
      <?php query_posts('posts_per_page()&post_type=services_offered'); ?>
			<?php while ( have_posts() ) : the_post();
        $icon_1 = get_field("icon_1");
				$price = get_field("price");

      ?>

      <article class="services-offered clearfix">
        <div class="services-offered-images">
<!--          <a href="<?php the_permalink(); ?>"> -->
            <?php if($icon_1) {
              echo wp_get_attachment_image( $icon_1 );
            } ?>
          </a>
        </div>
        <aside class="services-offered-sidebar">
          <h2>
<!--						<a href="<?php the_permalink(); ?>"> -->
					<?php the_title(); ?></a></h2>
					<h4><?php echo $price; ?></h4>
<!--					<?php the_excerpt(); ?> -->
					<?php the_content(); ?>

        </aside>

      </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

</section>

<section class="services-list">
	<div class="about-services">
		<p></p>
	</div>
</section>

<section class="contact-link-section clearfix" >
  <div class="cta">
    <h4>Interested in working with me?</h4>
    <a class="button" href="<?php echo site_url('/contact-me/') ?>">Let's Get Started!</a>
  </div>
</section>

<?php get_footer(); ?>

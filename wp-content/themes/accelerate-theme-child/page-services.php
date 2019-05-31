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
    <h5>Services</h5>
      <p>I offer the following service packages. Your project will be unique...Services are grouped into packages to give you an idea of what a project will cost. Each project is unique, customized to your vision. Following our initial interview, I can provide you with a proposed estimate which will be xxxxx after the design phase  </p>
  </div>

<!-- remove permalinks if not creating single pages for posts -->
  <div id="primary" class="site-content">
		<div class="main-content" role="main">
      <?php query_posts('posts_per_page()&post_type=services_offered'); ?>
			<?php while ( have_posts() ) : the_post();
        $icon_1 = get_field("icon_1");

      ?>

      <article class="services-offered clearfix">
        <div class="services-offered-images">
          <a href="<?php the_permalink(); ?>">
            <?php if($icon_1) {
              echo wp_get_attachment_image( $icon_1 );
            } ?>
          </a>
        </div>
        <aside class="services-offered-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <?php the_excerpt(); ?>

        </aside>

      </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

</section>

<section class="contact-link-section clearfix" >
  <div class="cta">
    <h4>Interested in working with me?</h4>
    <a class="button" href="<?php echo site_url('/contact-me/') ?>">Contact Me</a>
  </div>
</section>

<?php get_footer(); ?>

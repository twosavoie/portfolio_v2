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
    <h5>Service Packages</h5>
      <p>Packages can give you an idea of what a project can cost. However, each project is unique and customized for you. Following our initial interview, I'll provide you with an estimate which will be refined into a bid after the design phase.</p>
			<p>All the websites I build are designed to look great on every screen size. I rigorously test each site so you can be confident that every link works and the styling is right on multiple browsers. All prices do not include the purchase of themes or plugins you might want.</p>
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

<section class="contact-link-section clearfix" >
  <div class="cta">
    <h4>Interested in working with me?</h4>
    <a class="button" href="<?php echo site_url('/contact-me/') ?>">Let's Get Started!</a>
  </div>
</section>

<?php get_footer(); ?>

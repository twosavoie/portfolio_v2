<?php
/**
 * The template for displaying archive of case studies
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
        $work_image_4 = get_field("work_image_4");
        $size = "full";
        $services = get_field('services');
      ?>


      <article class="case-study-archive clearfix">
        <aside class="case-study-sidebar">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h5><?php echo $services; ?></h5>
          <?php the_excerpt(); ?>
          <p class="view-project"><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
        </aside>
        <div class="case-study-images-archive">
          <a href="<?php the_permalink(); ?>">
            <?php if($work_image_4) {
              echo wp_get_attachment_image( $work_image_4, $size );
            } ?>
          </a>
        </div>
      </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

<?php
/*
Template name: Single Project Template
*/

get_header();

?>


<section id="portfolio-projects">
      <div class="container blog">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
        <div class="project-image">
          <div class="img" style="background: url('<?php the_post_thumbnail_url( 'medium' ); ?>'); background-size: cover !important; background-position: center center !important;"></div>
        </div>

        <div class="content-area">
          <div class="inside">
            <p><?php the_content(); ?></p>
            <?php dynamic_sidebar('left-sidebar'); ?>
          </div>
          <div class="right-widgets">
            <div class="widget-box">
              <?php dynamic_sidebar( 'right-sidebar' ); ?>
            </div>
          </div>
        </div>

      </div>
      <?php endwhile; ?>
          <?php else : ?>
            <div>
              <h1>Blogs coming soon</h1>
            </div>
          <?php endif; ?>
    </section>

<?php get_footer(); ?>
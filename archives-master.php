<?php /* Template Name: archives-master */ ?>

<?php get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
      <h1 class="page-title">Master Archives</h1>

      <span class="entry-content">
        Browse by year and month:
          <?php the_widget( 'WP_Widget_Archives', 'dropdown=1' ); ?><br />

        Browse by category:
          <?php the_widget( 'WP_Widget_Categories', 'dropdown=1' ); ?><br /><br />

        Browse by tag:
          <span class="tag-cloud">
            <?php wp_tag_cloud( array(
              'number' => 0,
              'unit' => 'em',
              'smallest' => 0.5,
              'largest' => 4,
              'order' => 'RAND'
              ) ); ?>
          </span>
      </span>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

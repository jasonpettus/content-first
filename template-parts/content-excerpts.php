<?php
/**
 * Template part for displaying only the excerpts of posts
 * Created as a new template part for content_first theme
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Content_First
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-excerpt-header">
    <a href="<?php the_permalink(); ?>">
      <?php the_title( '<span class="entry-excerpt-title">', '</span>' ); ?>
    </a>
  </header><!-- .entry-header -->

  <div class="entry-excerpt-content">
    <?php echo get_the_excerpt(); ?>
    <?php content_first_posted_on(); ?>
  </div><!-- .entry-content -->

</article><!-- #post-## -->

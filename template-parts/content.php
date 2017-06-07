<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Content_First
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <?php the_title( '<span class="entry-title">', '</span>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'content-first' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'content-first' ),
				'after'  => '</div>',
			) );
		?>

		<div class="author-box">
		   <div class="author-pic"><?php echo get_avatar( get_the_author_meta('email'), '100' ); ?></div>
		   <div class="author-bio"><?php the_author_meta( "user_description" ); ?></div>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
    <?php content_first_posted_on(); ?>
		<?php content_first_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Content_First
 */

?>

	</div><!-- #content -->

  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-footer__left">
      <p>Copyright 2007-<?php echo date('Y'); ?>, Chicago Center for Literature and Photography. All rights reserved.</p>
      <p>Contact: <a href="mailto:cclapcenter@gmail.com">cclapcenter@gmail.com</a></p>
      <p>
        <a href="http://www.twitter.com/cclapcenter">
          <img src="http://jasonpettus.wpengine.com/wp-content/uploads/2017/05/icontwitter-e1494349871932.jpg"></a>
        <a href="http://www.instagram.com/cclapcenter">
          <img src="http://jasonpettus.wpengine.com/wp-content/uploads/2017/05/iconinstagram.jpg"></a>
        <a href="<?php bloginfo('rss2_url'); ?>">
          <img src="http://jasonpettus.wpengine.com/wp-content/uploads/2017/05/iconrss-e1494350167784.jpg"></a>
        <a href="http://cclapcenter.com/?feed=json">
          <img src="http://cclapcenter.com/wp-content/uploads/2017/05/jsonfeed.jpg"></a>
        <a href="mailto:cclapcenter@gmail.com">
          <img src="http://jasonpettus.wpengine.com/wp-content/uploads/2017/05/iconemail-e1494350228275.jpg"></a>
      </p>
    </div>

    <div class="site-footer__right">
      <p><a href="<?php echo get_page_link( get_page(3733) ); ?>">How to submit your work for publication or review</a></p>
      <p><a href="<?php echo get_page_link( get_page(3729) ); ?>">FTC disclosure and ethics policy</a></p>
      <p><a href="<?php echo get_page_link( get_page(3731) ); ?>">For developers</a></p>
    </div>
  </footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>

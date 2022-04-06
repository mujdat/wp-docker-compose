<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ds-wp-theme
 */
?>

<footer id="colophon" class="p-5 site-footer">
  <div class="site-info">
    <a href="<?php echo esc_url(
      __('https://wordpress.org/', 'ds-wp-theme')
    ); ?>">
      <?php printf(esc_html__('Powered by %s', 'ds-wp-theme'), 'WordPress'); ?>
    </a>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

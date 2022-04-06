<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ds-wp-theme
 */
?>
<div class="container py-16 mx-auto">
  <article class="px-4 mx-auto prose max-w-prose xl:px-0"
          id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php
      if (is_singular()):
        the_title('<h1 class="entry-title">', '</h1>');
      else:
        the_title(
          '<h2 class="entry-title"><a href="' .
            esc_url(get_permalink()) .
            '" rel="bookmark">',
          '</a></h2>'
        );
      endif;

      if ('post' === get_post_type()): ?>
        <div class="entry-meta">
          <?php
          ds_wp_theme_posted_on();
          ds_wp_theme_posted_by();
          ?>
        </div><!-- .entry-meta -->
      <?php endif;
      ?>
    </header><!-- .entry-header -->

    <?php ds_wp_theme_post_thumbnail(); ?>

    <div class="entry-content">
      <?php
      the_content(
        sprintf(
          wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __(
              'Continue reading<span class="screen-reader-text"> "%s"</span>',
              'ds-wp-theme'
            ),
            [
              'span' => [
                'class' => [],
              ],
            ]
          ),
          wp_kses_post(get_the_title())
        )
      );

      wp_link_pages([
        'before' =>
          '<div class="page-links">' . esc_html__('Pages:', 'ds-wp-theme'),
        'after' => '</div>',
      ]);
      ?>
    </div><!-- .entry-content -->
  </article><!-- #post-<?php the_ID(); ?> -->
</div>

<?php

/* Template Name: Modules Page */
get_header(); ?>

<main class="w-full text-grey-800">
  <?php while (have_posts()):
    the_post();
    $context = Timber::get_context();
    $context['page'] = new Timber\Post();
    $context['layout'] = get_field('modules');
    Timber::render('module-loader.twig', $context);
  endwhile; ?>
</main>

<?php get_footer(); ?>

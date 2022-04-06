<?php
// TODO: Register custom block category, change "DS" to project name
function ds_wp_theme_custom_block_category($categories, $post)
{
  return array_merge($categories, [
    [
      'slug' => 'ds-blocks',
      'title' => __('DS Blocks', 'DS-blocks'),
    ],
  ]);
}
add_filter('block_categories', 'ds_wp_theme_custom_block_category', 10, 2);

add_action('acf/init', 'acf_blocks_init');
function acf_blocks_init()
{
  // Check function exists.
  if (function_exists('acf_register_block_type')) {
    // FAQ Block
    acf_register_block_type([
      'name' => 'faq-block',
      'title' => __('FAQ'),
      'description' => __('A simple FAQ block'),
      'render_callback' => 'faq_block_cb',
      'category' => 'ds-blocks',
      'mode' => 'edit',
    ]);
  }
}

/**
 *  This is the callback that displays the FAQ Block Block.
 *
 * @param   array  $block      The block settings and attributes.
 * @param   string $content    The block content (emtpy string).
 * @param   bool   $is_preview True during AJAX preview.
 */
function faq_block_cb($block, $content = '', $is_preview = false)
{
  $context = Timber::context();

  // Store block values.
  $context['block'] = $block;

  // Store field values.
  $context['fields'] = get_fields();

  // Store $is_preview value.
  $context['is_preview'] = $is_preview;

  // Render the block.
  Timber::render('acfBlocks/faq.twig', $context);
}

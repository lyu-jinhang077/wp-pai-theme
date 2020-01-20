<?php
/**
 * setup.php
 * 
 * @package pai
 * @author PAI
 * @version 1.0.0
 */

add_theme_support('menus');

function pai_acf_init() {
  acf_add_options_page(array(
    'page_title'    => __('Theme Settings'),
    'menu_title'    => __('Theme Settings'),
    'menu_slug'     => 'theme-settings',
  ));
}
add_action('acf/init', 'pai_acf_init');

// enqueue scripts
function pai_enqueue_scripts() {
  $path = get_template_directory_uri();
  wp_enqueue_script('jquery');
  wp_enqueue_script('bs-js', $path . '/assets/js/bootstrap.min.js', array('jquery'), '4.4.1');
  wp_enqueue_style('bs-css', $path . '/assets/css/bootstrap.min.css', false, '4.4.1');
  wp_enqueue_style('fa-css', $path . '/assets/css/fa-all.min.css', false, '5.11.2');

  wp_enqueue_style('theme-css', $path . '/dev/dist/theme.css', false);
  wp_enqueue_script('theme-js', $path . '/dev/dist/theme.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'pai_enqueue_scripts');

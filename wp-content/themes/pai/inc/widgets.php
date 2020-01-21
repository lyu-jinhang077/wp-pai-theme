<?php
/**
 * register widgets
 * 
 * @package pai
 * @author PAI
 */
add_action('widgets_init', function() {
  register_sidebar(array(
    'name' => __('Footer Bottom Links'),
    'id' => 'footer-bottom-links',
    'description' => 'Footer bottom links',
    'before_title' => '<h4 class="d-none">',
    'after_title' => '</h4>'
  ));
});
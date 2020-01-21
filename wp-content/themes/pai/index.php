<?php
/**
 * template main index file
 * 
 * @package pai
 * @author PAI
 */
get_header();
?>

<?php
  while (have_posts()) {
    the_post();
    the_content();
  }
?>

<?php
get_footer();
?>

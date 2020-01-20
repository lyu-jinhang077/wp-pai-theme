<?php
/**
 * template main index file
 * 
 * @package pai
 * @author PAI
 */
get_header();
?>

<div class="container pt-5">
<?php
  while (have_posts()) {
    the_post();
    the_content();
  }
?>
</div>

<?php
get_footer();
?>

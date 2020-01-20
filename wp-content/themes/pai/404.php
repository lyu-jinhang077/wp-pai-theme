<?php
/**
 * 404 Page
 * 
 * @package pai
 * @author PAI
 */
get_header();
?>

<div class="container text-center py-4">
  <h1>Hmmm... page not found</h1>
  <img src="<?php echo get_template_directory_uri() . '/assets/images/404.jpg' ?>">
  <a class="link pai-bc-primary text-white btn mt-5" href="<?php echo home_url() ?>" >Go to Homepage</a>
</div>

<?php
get_footer();
?>
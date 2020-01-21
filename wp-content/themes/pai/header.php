<?php
/**
 * Header
 * 
 * @package pai
 * @author PAI
 */
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php the_title(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="PAI Wordpress Theme">
  <meta scale
  <?php
  wp_head();
  pai_global_styles();
  ?>
</head>
<body <?php body_class('pai-theme'); ?> >
  <header>
    <?php
      get_template_part('partials/partial', 'navbar');
    ?>
  </header>
  <div class="maincontent">

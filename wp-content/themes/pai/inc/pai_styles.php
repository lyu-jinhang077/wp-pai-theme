<?php
/**
 * pai_styles.php
 * 
 * @package pai
 * @author PAI
 * @version 1.0.0
 */
function pai_global_styles() {
  $colors = get_field('colors', 'options');
  $sizes = get_field('sizes', 'option');
  ?>
  <style>
    body.pai-theme {
      color: <?= $colors['text'] ?>;
      background-color: <?= $colors['background'] ?>;
      font-size: <?= $sizes['default'] ?>px;
    }
    @media (max-width: 1024px) {
      body.pai-theme {
        font-size: <?= $sizes['default_tablet'] ?>px;
      }
    }
    @media (max-width: 767px) {
      body.pai-theme {
        font-size: <?= $sizes['default_mobile'] ?>px;
      }
    }
    .pai-c-primary {
      color: <?= $colors['primary'] ?> !important;
    }
    .pai-c-secondary {
      color: <?= $colors['secondary'] ?> !important;
    }
    .pai-bc-primary {
      background-color: <?= $colors['primary'] ?> !important;
    }
    .pai-bc-secondary {
      background-color: <?= $colors['secondary'] ?> !important;
    }

    footer {
      background-color: <?= $colors['primary'] ?>;
    }
    h1,
    h2,
    h3,
    h4,
    a {
      color: <?= $colors['secondary'] ?>;
    }

    <?php
      for ($i = 1; $i <= 5; $i++) {
        printf('
          h%d {
            font-size: %fem;
          }
        ', $i, $sizes['h' . $i]);
      }

      the_field('custom_css', 'option');
    ?>
  </style>
  <?php
}
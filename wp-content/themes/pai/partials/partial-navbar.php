<?php
$logo = get_field('site_logo', 'option');
?>
<div class="container py-2">
  <div class="d-flex justify-content-between align-items-center">
    <a href="<?php echo home_url(); ?>" ><img height="40" class="logo" src="<?php echo $logo; ?>"></a>
    <nav class="main-nav d-none d-md-block" >
      <?php
        wp_nav_menu(array(
          'menu' => 'Primary Menu'
        ));
      ?>
    </nav>
    <i class="btn-mobnav fa fa-bars d-block d-md-none fs-22" ></i>
  </div>
</div>

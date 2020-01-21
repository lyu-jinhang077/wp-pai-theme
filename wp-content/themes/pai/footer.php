<?php
/**
 * Footer
 * 
 * @package pai
 * @author PAI
 */
?>

  </div> <!-- close maincontent -->

  <footer>
    <div class="container">
      <div class="bottom-links d-block d-md-flex justify-content-between text-center">
        <?php
          dynamic_sidebar('footer-bottom-links');
        ?>
      </div>
    </div>
    <?php
    wp_footer();
    ?>
  </footer>
  <div class="mobnav-backdrop"></div>
  <div class="mobnav sidebar">
    <div class="p-3 text-right" >
      <i class="fa fa-times fs-22 btn-close-mobnav"></i>
    </div>
    <?php
      wp_nav_menu(array('menu' => 'Primary Menu'));
    ?>
  </div>
</body>
</html>
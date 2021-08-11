<!-- cart fixed -->
<div class="fixed-cart" id="fixed-cart">
  <a href="#"><img src="<?php bloginfo('template_url'); ?>/images/cart.png" alt=""></a>
</div>

<!-- ========== Footer  section Open  ====================== -->
<section class="footer__section">
  <div class="container">
    <div class="row footer__part">
      <div class="col-md-4">
        <div class="footer-logo">

          <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_theme_mod('second_logo'); ?>" class="img-fluid"/>
          </a>
          <span id="c_second_logo"></span></div>
      </div>
      <div class="col-md-4">
        <div class="footer__nav">
          <?php
          wp_nav_menu(array(
              'menu' => 'Footer Menu',
              'container' => 'ul',
              'container_class' => 'list-unstyled components',
              'menu_class' => '',
              'theme_location' => 'main-menu')
          );
          ?>
        </div>
      </div>
      <div class="col-md-4">
        <!--        <ul class="address">-->
        <!--          <li> 21 230 9200</li>-->
        <!--          <li>info@montalva.pt</li>-->
        <!--          <li>Av. Olivença Aptd. 97, </li>-->
        <!--          <li>2870-108 Montijo</li>-->
        <!--        </ul>-->


        <p class="address"> <?php echo get_theme_mod('dc_footer_text') ?></p>

        <ul class="social-icon">
          <?php
          $facebook_link = get_theme_mod('dc_fb');
          $instagram_link = get_theme_mod('dc_instagram');
          $linkedin_link = get_theme_mod('dc_linkedin');
          $youtube_link = get_theme_mod('dc_youtube');
          ?>
          <?php if ($facebook_link): ?>
            <li><span id="c_fb"></span><a href="<?php echo $facebook_link; ?>"><i class="fab fa-facebook"></i></a></li>
          <?php endif; ?>

          <?php if ($instagram_link): ?>
            <li><a href="<?php echo $instagram_link; ?>"><i
                    class="fab fa-instagram"></i></a></li>
          <?php endif; ?>

          <?php if ($linkedin_link): ?>
            <li><a href="<?php echo $linkedin_link; ?>"><i
                    class="fab fa-linkedin"></i></a></li>
          <?php endif; ?>

          <?php if ($youtube_link): ?>
            <li><a href="<?php echo $youtube_link; ?>"><i
                    class="fab fa-youtube"></i></a></li>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </div>
</section>
<!-- ========== Footer section Close  ====================== -->

<?php wp_footer(); ?>


</body>
</html>

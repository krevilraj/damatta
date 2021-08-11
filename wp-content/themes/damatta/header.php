<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Damatta
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="icon" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon-32x32.png">
    <link  rel="apple-touch-icon" type="image/png" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="profile" href="https://gmpg.org/xfn/11"/>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<!-- top header section Open -->
<section class="topbar fixed-top menu-logo scroll-menu">
  <div class="container-fluid topbar__main">
    <div class="topbar__menu">
      <a class="mynav" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
         aria-controls="offcanvasExample">
        <span></span>
        <span></span>
        <span></span>
      </a>
      <a class="mynav" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"> <h3>menu</h3></a>
      <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header open__side__nav">
          <div class="open__nav">
            <div class="nav__bar">
              <span></span>
              <span></span>
              <span></span>

            </div>
            <h4>menu</h4>
          </div>

          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
        </div>
        <div class="offcanvas-body nav">
          <!-- Sidebar -->
          <style>
              .menu-item-has-children {
                  position: relative;
              }
              .menu-item-has-children > span.arrow {
                  display: inline-block;
                  position: absolute;
                  right: 0;
                  top: 0;
                  z-index: 9999999999;
                  color: #fff;
                  font-size: 16px;
              }
              span.arrow {
                  display: none;
                  padding: 0 20px;
              }

          </style>


          <?php
          wp_nav_menu(array(
            'theme_location' => 'Damatta_main_menu',
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
            'depth' => 2,
            'before' => '<span class="arrow"><i class="fas fa-chevron-down icon-ani"></i></span>',
            'walker' => new Nav_Walker_Nav_Menu()
          ));
          ?>
<!--          <ul>-->
<!--            <li class="active"><a href="index.php" class="active">HOMEPAGE</a></li>-->
<!--            <li><a href="about.php">A Damatta</a></li>-->
<!--            <li><a href="os-nossos-presuntos.php">Os nossos presuntos</a></li>-->
<!--            <li><a href="receitas.php">Receitas</a></li>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--            <li class="menu-item-has-children menu-item-41"><span class="dropdown-nav arrow" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-chevron-down icon-ani"></i></span><a href="produtos.php">Produtos</a>-->
<!--              <ul class="sub-menu product-show">-->
<!--                <li><a href="fatiados.php">Fatiados</a></li>-->
<!--                <li><a href="#">Presuntos</a></li>-->
<!--                <li><a href="#">Fumados</a></li>-->
<!--              </ul>-->
<!--            </li>-->
<!---->
<!---->
<!--            <li><a href="#">Media</a></li>-->
<!--            <li><a href="#">Contactos</a></li>-->
<!--          </ul>-->
          <!-- /#sidebar-wrapper -->
          <div class="social-media">
            <ul class="social-icon">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="topbar__logo">

      <?php if (has_custom_logo()): ?>
        <?php the_custom_logo(); ?>
      <?php else: ?>
        <p class="site-title"><?php bloginfo('title'); ?></p>
        <span><?php bloginfo('description'); ?></span>
      <?php endif; ?>
    </div>

    <div class="topbar__right">
      <div class="right__cart"><a href="#"><img src="images/cart.png" alt="" class="img-fluid">Loja</a></div>
      <div class="right__language">PT</div>
    </div>
  </div>
</section>
<!-- top header section Close  -->


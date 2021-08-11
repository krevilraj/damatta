<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lojaizidoro
 */

get_header();
?>
  <!-- Banner section open  -->

  <section class="receitas-banner">
    <div class="banner-wrapper">
      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="d-block w-100" alt="damatta">
      <div class="overlay"></div>
      <div class="banner-caption ">
        <h3><?php the_title() ?></h3>
        <?php the_content(); ?>
      </div>
    </div>
    <!--        down arrow animation Open -->
    <div id="wrapper">
      <div id="wrapper-inner">
        <div id="scroll-down">
                 <span class="arrow-down">
                     <!-- css generated icon -->
                 </span>
          <span id="scroll-title">
                    </span>
        </div>
      </div>
    </div>
    <!--        down arrow animation Close  -->
  </section>
  <!-- Banner section close -->


  <!-- As nossas receitas open  -->
  <section class="receitas product">
    <div class="container">

      <?php
      $taxonomy = 'recipe_category';
      $terms = get_terms($taxonomy);

      if ($terms && !is_wp_error($terms)) :
        ?>
        <div id="product__tab-desktop">
          <div id="product__tab__inn">

            <?php $i = 0;
            foreach ($terms as $term) { ?>
              <a href="#" class="product__tab__name <?php if ($i == 0) echo 'active'; ?>" "<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
              <?php $i++;
            } ?>

          </div>
        </div>

        <div id="product__tab-mobile">
          <div id="product__tab__inn">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php $i = 0;
                foreach ($terms as $term) { ?>
                  <a href="#"
                     class="product__tab__name <?php if ($i == 0) echo 'active'; ?>"><?php echo $term->name; ?></a>
                  <?php $i++;
                } ?>
              </div>
            </div>

          </div>
        </div>


        <div class="row">

          <div class="col-md-4 col-12 entradas">
            <div class="product__item">
              <img src="<?php bloginfo('template_url'); ?>/images/receitas-1.png" alt="" class="img-fluid">
              <div class="product__overlay">
                <div class="ovelay__content">
                  <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
                  <a href="receitas-individual.php">Saber Mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 entradas massas">
            <div class="product__item">
              <img src="<?php bloginfo('template_url'); ?>/images/receitas-2.png" alt="" class="img-fluid">
              <div class="product__overlay">
                <div class="ovelay__content">
                  <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
                  <a href="receitas-individual.php">Saber Mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 entradas massas">
            <div class="product__item">
              <img src="<?php bloginfo('template_url'); ?>/images/receitas-3.png" alt="" class="img-fluid">
              <div class="product__overlay">
                <div class="ovelay__content">
                  <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
                  <a href="receitas-individual.php">Saber Mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 entradas saladas">
            <div class="product__item">
              <img src="<?php bloginfo('template_url'); ?>/images/receitas-4.png" alt="" class="img-fluid">
              <div class="product__overlay">
                <div class="ovelay__content">
                  <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
                  <a href="receitas-individual.php">Saber Mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 entradas">
            <div class="product__item">
              <img src="<?php bloginfo('template_url'); ?>/images/receitas-5.png" alt="" class="img-fluid">
              <div class="product__overlay">
                <div class="ovelay__content">
                  <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
                  <a href="receitas-individual.php">Saber Mais</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 entradas massas">
            <div class="product__item">
              <img src="<?php bloginfo('template_url'); ?>/images/receitas.png" alt="" class="img-fluid">
              <div class="product__overlay">
                <div class="ovelay__content">
                  <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
                  <a href="receitas-individual.php">Saber Mais</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <!-- As nossas receitas Close   -->


<?php get_footer(); ?>
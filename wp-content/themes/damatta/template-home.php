<?php

/*
Template Name: Home Page
*/
get_header();
?>


<!-- hero section open  -->
<section class="hero">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php $loop = new WP_Query(array('post_type' => 'slider','posts_per_page' => -1)); $i=0; ?>
      <?php while ($loop->have_posts()) : $loop->the_post(); ?>
      <div class="carousel-item <?php if($i==0) echo 'active';$i++;?>" style="background-image:url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>);">

        <div class="overlay"></div>
        <div class="carousel-caption ">
          <?php the_content();?>
        </div>
      </div>
      <?php endwhile; wp_reset_query(); ?>
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<!-- hero section close -->


<!-- os nossos open -->
<section class="body__section">
  <!-- slider section open -->
  <div class="container-fluid">
    <div class="row nos-all">
      <div class="col-md-4">
        <div class="osnossos__left"  data-aos="fade-up">
          <h2>os nossos</h2>
          <h3>Produtos</h3>
          <p>Os produtos Damatta revelam um carácter único e maduro,
            excelentes para enriquecer e
            enaltecer a gastronomia portuguesa e proporcionar momentos
            de puro prazer à mesa.</p>
        </div>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="owl-carousel owl-theme">

            <div class="item">
              <a href="fatiados.php">
                <img src="images/scroll-1.jpg" alt="">
                <div class="slide__overlya"></div>
                <h4>FUMADOS</h4>
            </div>
            <div class="item">
              <a href="fatiados.php"> <img src="images/scroll-2.jpg" alt="">
                <div class="slide__overlya"></div>
                <h4>FATIADOS</h4>
              </a>
            </div>
            <div class="item">
              <a href="fatiados.php"> <img src="images/scroll-3.jpg" alt="">
                <div class="slide__overlya"></div>
                <h4>PRESUNTOS</h4>
              </a>
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider section close -->

  <div class="history ">
    <div class="container">
      <div class="row g-0 history__row">
        <div class="col-md-5 history__left__detail align-self-end ">
          <div class="history__left aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <h3><?php the_field('nossa_title'); ?></h3>
            <h4><?php the_field('nossa_subtitle'); ?></h4>
            <p> <?php the_field('nossa_description'); ?>
            </p>
            <a href="<?php the_field('nossa_link'); ?>">saber mais</a>

          </div>
        </div>

        <div class="col-md-7 history__como">
          <div class="history__right" style="background-image:url(<?php the_field('nossa_background_image'); ?>)">
            <!--                       <img src="images/a-nossa.png" alt="" class="img-fluid">-->
          </div>
          <div class="right__video" >

            <img src="<?php the_field('nossa_second_image'); ?>" alt="" class="img-fluid">
            <!--  <video autoplay muted loop width="320" height="250" style="object-fit: cover;" >
                 <source src="images/videos.mp4" type="video/mp4">
             </video> -->
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- os nossos open -->
  <div class="presuntos" style="background-image:url(<?php the_field('nossos_background_image'); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-0 offset-md-6">
          <div class="presuntos__detail   aos-init aos-animate" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
            <h3><?php the_field('nossos_title'); ?></h3>
            <h4><?php the_field('nossos_subtitle'); ?></h4>
            <p>
              <?php the_field('nossos_description'); ?>
            </p>
            <a href="<?php the_field('nossos_link'); ?>">saber mais</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- os nossos close -->

</section>
<!-- os nossos close -->



<!-- As nossas receitas open  -->
<section class="receitas product">
  <div class="container">
    <div class="receitas__heading">
      <h3>as nossas</h3>
      <h4>Receitas</h4>
    </div>
    <div id="product__tab-desktop">
      <div id="product__tab__inn">
        <a href="#" class="product__tab__name active" onclick="filterSelection('entradas')">ENTRADAS</a>
        <a href="#" class="product__tab__name" onclick="filterSelection('massas')"> MASSAS</a>
        <a href="#" class="product__tab__name" onclick="filterSelection('saladas')"> SALADAS</a>
        <a href="#" class="product__tab__name" onclick="filterSelection('pratos')"> PRATOS REGIONAIS </a>
        <a href="#" class="product__tab__name" onclick="filterSelection('tapas')"> tapas </a>
      </div>
    </div>
    <div id="product__tab-mobile">
      <div id="product__tab__inn">
        <div class="swiper-container">
          <div class="swiper-wrapper">

            <a href="#" class="swiper-slide product__tab__name active" onclick="filterSelection('entradas')">ENTRADAS </a>
            <a href="#" class="swiper-slide product__tab__name" onclick="filterSelection('massas')"> MASSAS</a>
            <a href="#" class="swiper-slide product__tab__name" onclick="filterSelection('saladas')"> SALADAS</a>
            <a href="#" class="swiper-slide product__tab__name" onclick="filterSelection('pratos')"> PRATOS REGIONAIS </a>
            <a href="#" class="swiper-slide product__tab__name" onclick="filterSelection('tapas')"> tapas </a>
          </div>
        </div>

      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-12">
        <div class="product__item">
          <img src="images/receitas-1.png" alt="" class="img-fluid">
          <div class="product__overlay">
            <div class="ovelay__content">
              <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
              <a href="receitas-individual.php">Saber Mais</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4  col-12">
        <div class="product__item">
          <img src="images/receitas-2.png" alt="" class="img-fluid">
          <div class="product__overlay">
            <div class="ovelay__content">
              <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
              <a href="receitas-individual.php">Saber Mais</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12 ">
        <div class="product__item">
          <img src="images/receitas-3.png" alt=""  class="img-fluid">
          <div class="product__overlay">
            <div class="ovelay__content">
              <h3>Presunto ou Toucinho Selecionado Damatta com ovos mexidos</h3>
              <a href="receitas-individual.php">Saber Mais</a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- As nossas receitas Close   -->



<?php get_footer() ?>

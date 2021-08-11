<?php

/*
Template Name: Os Nossos Presuntos
*/
get_header();
?>

<!--  Presuntos top info section Open   -->
<section class="presuntos-page">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-md-6">
        <img src="<?php the_field('i_image'); ?>" alt="" class="img-fluid">
      </div>
      <div class="col-md-6">
        <div class="aboutTop__rigt">
          <h2><?php the_field('i_title'); ?></h2>
          <h4><?php the_field('i_subtitle'); ?></h4>
          <p> <?php the_field('sub_description'); ?></p>
          <span><?php the_field('date'); ?></span>
          <p><?php the_field('i_description'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  Presuntos top info section Close   -->
<!-- about us card info section  open -->
<section class="body__section__card">
  <div class="materia-prima ">
    <div class="container">
      <div class="row g-0 aboutPresuntos__row">
        <div class="col-md-7 order-1 order-md-0">
          <div class="materia-prima__left" style="background-image: url(<?php the_field('ii_image'); ?>)" >
          </div>
        </div>

        <div class="col-md-5 qualidade__right__detail align-self-end ">
          <div class=" materia-prima_right" data-aos="fade-down"
               data-aos-easing="linear"
               data-aos-duration="1500" >
            <h3><?php the_field('ii_title'); ?></h3>
            <h4><?php the_field('ii_subtitle'); ?></h4>
            <p> <?php the_field('ii_description'); ?>
            </p>

          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="salga ">
    <div class="container">
      <div class="row g-0 qualidade__row">
        <div class="col-md-5 salga__left__detail align-self-end ">
          <div class="salga__left" data-aos="fade-down"
               data-aos-easing="linear"
               data-aos-duration="1500" >
            <h3><?php the_field('iii_title'); ?></h3>
            <h4><?php the_field('iii_subtitle'); ?></h4>
            <p> <?php the_field('iii_description'); ?>
            </p>
          </div>
        </div>
        <div class="col-md-7 salga__como">
          <div class="salga__right" style="background-image: url(<?php the_field('iii_image'); ?>)">
          </div>
        </div>
      </div>
    </div>

  </div>






</section>


<!-- ---  body__section__second ----- -->

<section class=" body__section__second">
  <div class="cura">
    <div class="container">
      <div class="row g-0 aboutPresuntos__row">
        <div class="col-md-7 order-1 order-md-0">
          <div class="cura__left" style="background-image: url(<?php the_field('iv_image'); ?>)" >
          </div>
        </div>

        <div class="col-md-5 qualidade__right__detail align-self-end ">
          <div class=" cura_right" data-aos="fade-down"
               data-aos-easing="linear"
               data-aos-duration="1500" >
            <h3> <?php the_field('iv_title'); ?> </h3>
            <h4> <?php the_field('iv_subtitle'); ?> </h4>
            <p>
              <?php the_field('iv_description'); ?>
            </p>

          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="a-maturacao">
    <div class="container">
      <div class="row g-0 qualidade__row">
        <div class="col-md-5 salga__left__detail align-self-end ">
          <div class="a-maturacao__left" data-aos="fade-down"
               data-aos-easing="linear"
               data-aos-duration="1500" >
            <h3><?php the_field('v_title'); ?></h3>
            <h4><?php the_field('v_subtitle'); ?></h4>
            <p> <?php the_field('v_description'); ?>
            </p>
          </div>
        </div>
        <div class="col-md-7 a-maturacao__como">
          <div class="a-maturacao__right" style="background-image: url(<?php the_field('v_image'); ?>)">
          </div>
        </div>
      </div>
    </div>

  </div>


</section>



<?php get_footer() ?>

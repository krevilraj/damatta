<?php

/*
Template Name: About Page
*/
get_header();
?>
<!--  About us top info section Open   -->

<section class="aboutTop">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <img src="<?php the_field('f_image'); ?>" alt="" class="img-fluid">
      </div>
      <div class="col-md-6">
        <div class="aboutTop__rigt">
          <img src="<?php the_field('right_image'); ?>" class="img-fluid" alt="">
          <h2><?php the_field('f_title'); ?></h2>
          <h4><?php the_field('f_subtitle'); ?></h4>
          <p>
            <?php the_field('f_description'); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--  About us top info section Close   -->
<!-- about us card info section  open -->
<section class="body__section__card">
  <div class="qualidade ">
    <div class="container">
      <div class="row g-0 qualidade__row">
        <div class="col-md-5 qualidade__left__detail align-self-end ">
          <div class="qualidade__left" data-aos="fade-down"
               data-aos-easing="linear"
               data-aos-duration="1500" >
            <h3><?php the_field('s_title'); ?></h3>
            <h4><?php the_field('s_subtitle'); ?></h4>
            <p> <?php the_field('s_description'); ?> </p>

          </div>
        </div>
        <div class="col-md-7 qualidade__como">
          <div class="qualidade__right" style="background-image:url(<?php the_field('s_right_image'); ?>)">
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="aboutPresuntos ">
    <div class="container">
      <div class="row g-0 aboutPresuntos__row">

        <div class="col-md-7 order-1 order-md-0">
          <div class="aboutPresuntos__left"  style="background-image:url(<?php the_field('t_left_image'); ?>)">
          </div>
        </div>

        <div class="col-md-5 qualidade__right__detail align-self-end ">
          <div class=" aboutPresuntos_right" data-aos="fade-down"
               data-aos-easing="linear"
               data-aos-duration="1500" >
            <h3><?php the_field('t_title'); ?></h3>
            <h4><?php the_field('t_subtitle'); ?></h4>
            <p><?php the_field('t_description'); ?></p>

            <a href="<?php the_field('t_link'); ?>">Saber mais</a>

          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="qualidade ">
    <div class="container">
      <div class="row g-0 qualidade__row">
        <div class="col-md-5 qualidade__left__detail align-self-end ">
          <div class="qualidade__left" data-aos="fade-down"
               data-aos-easing="linear"
               data-aos-duration="1500" >
            <h3><?php the_field('fr_title'); ?></h3>
            <h4><?php the_field('fr_subtitle'); ?></h4>
            <p> <?php the_field('fr_description'); ?></p>

          </div>
        </div>
        <div class="col-md-7 qualidade__como">
          <div class="fumados__right"  style="background-image:url(<?php the_field('fr_right_image'); ?>)">
          </div>
        </div>
      </div>
    </div>

  </div>

</section>



<?php get_footer() ?>

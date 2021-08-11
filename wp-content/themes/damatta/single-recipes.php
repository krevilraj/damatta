<?php
get_header();
?>


  <!-- just for black background for top menu -->
  <section class="just-bg">
  </section>
  <!-- media body section open -->
  <section class="media-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6"
             style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>); min-height: 400px;  background-size: cover;">

        </div>
        <div class="col-md-6">
          <div class="media__right">
            <h2><?php the_title() ?></h2>
            <?php the_content(); ?>

            <?php if (have_rows('steps')): ?>
              <?php while (have_rows('steps')) : the_row();
                $steps[] = get_sub_field('title'); ?>


              <?php endwhile; ?>
            <?php endif; ?>
            <?php if (!empty($steps)): ?>
              <div class="media-toggle">
                <ul>
                  <li><p><span>1)</span> <?php echo $steps[0]; ?></p>
                  </li>
                </ul>

              </div>
              <?php if (count($steps) > 1): ?>
                <div class="media-js">
                  <ul>
                    <?php for($i=1;$i<count($steps);$i++){?>
                    <li><p><span><?php echo $i+1;?>)</span> <?php echo $steps[$i]; ?></p></li>
                    <?php } ?>

                  </ul>
                </div>


                <div class="media-more">
                  <span id="media__inner"><i class="fas fa-plus"></i></span>
                </div>
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- media body section Close  -->


<?php get_footer() ?>
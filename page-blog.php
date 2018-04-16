<?php get_header(); ?>

  <?php get_template_part( 'template-parts/head/header', 'inner-page' ); ?>


  <div class="blog-section">
    <div class="container">
      <div class="row blog-row">
          <?php
          $args = array(
            'numberposts' => '5',
            'post_status' => 'publish',
            'orderby'     => 'post_date',
          );
          $recent_posts = wp_get_recent_posts( $args );
          foreach( $recent_posts as $recent ){ ?>
              <?php /*echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> '; */?>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 blog-box">
                <a href="<?php get_permalink($recent["ID"]) ?>">
                  <div class="image-wrapper" style="background-image: url('https://guestable.com/wp-content/uploads/2018/03/Chicago2.jpg');">
                  </div>

                  <div class="inner-content-wrapper">
                    <div class="text-center-line">
                      <h3 style="display: inline;">Short Term Rental Industry</h3>
                    </div>

                    <p><?php $recent["post_title"] ?></p>
                  </div>

                </a>
              </div>
          <?php } ?>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package guestable
 */

?>

<div id="post-<?php the_ID(); ?>" class="col-xs-12 col-sm-4 col-md-4 col-lg-4 blog-box">
    <a href="<?php the_permalink() ?>">
      <div class="image-wrapper" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">
      </div>

      <div class="inner-content-wrapper">
        <div class="text-center-line">
          <h3 style="display: inline;">
            <?php
            foreach((get_the_category()) as $category) {
                $postcat= $category->cat_ID;
                $catname =$category->cat_name;
                echo $catname;
            }
            ?>
          </h3>
        </div>

        <p><?php the_title(); ?></p>
      </div>
    </a>
</div>
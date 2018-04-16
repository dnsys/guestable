<?php
  if (is_home() && get_option('page_for_posts') ) {
      $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full');
      $featured_image = $img[0];
  }
?>

<div class="inner-banner-section" style="background-image: url(<?php echo (!is_home()) ? get_the_post_thumbnail_url() : $featured_image ?>)">
    <div class="container">
      <div class="inner-banner-content">
        <h1><?php (is_page()) ? the_title() : single_post_title() ?></h1>
      </div>
    </div>
</div>
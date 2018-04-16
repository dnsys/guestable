<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package guestable
 */

get_header();
?>

  <?php get_template_part( 'template-parts/head/header', 'inner-page' ); ?>
  <section class="tab-section blog-tab">

    <div class="container">

      <div class="sideBar"><a href="#_" class="mobile_menu_items visible-xs"><span class="menu_texts">Tab Menu</span><span class="plus_mark">+</span></a>
          <?php
/*            wp_nav_menu( array(
                'theme_location' => 'blog_tab_menu',
                'container' => false,
                'menu_class'     => 'clearfix',
                'menu_id'        => 'menu-blog-navigation',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>'
            ) );
          */?>
        <ul id="menu-blog-navigation" class="clearfix">
          <li class="active"><a href="#" data-target="recent-posts">Most Recent</a></li>
          <li><a href="#" data-target="popular-posts">Popular</a></li>
          <?php
           $categories = get_categories();
           foreach ($categories as $cat){
             echo '<li><a href="#" data-target="' . $cat->slug . '">' . $cat->name . '</a></li>';
           }
          ?>
        </ul>
      </div>

    </div>

  </section>
  <div class="blog-section">
    <div class="container">
      <div class="row blog-row">
        <div id="posts-container">
            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) :
                    ?>
                <?php
                endif;

                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_type() );

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>
        </div>
        <div class="transition-loader custom-loader">
          <div class="transition-loader-inner">
            <label></label>
            <label></label>
            <label></label>
            <label></label>
            <label></label>
            <label></label>
          </div>
        </div>
      </div>
    </div>
	</div>

<?php
get_footer();

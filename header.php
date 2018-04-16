<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package guestable
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<input type="hidden" value="<?php echo $ajaxurl ?>">
<section class="clearfix">
  <nav class="navbar navbar-default navbar-fixed-top cus-navigation" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php
          $logo_img = '';
          if( $custom_logo_id = get_theme_mod('custom_logo') ){
              $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                  'class'    => 'image-responsive',
                  'itemprop' => 'logo',
              ) );
          }

          echo $logo_img;
          ?>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="hidden-xs">
      <div class="collapse navbar-collapse navbar-ex1-collapse hidden-xs">

          <?php
          wp_nav_menu( array(
              'theme_location' => 'main_menu',
              'container' => false,
              'menu_class'     => 'nav navbar-nav navbar-right',
              'menu_id'        => 'menu-main-menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'walker' => new Add_Class_Sub_Menu()
          ) );
          ?>
      </div><!-- /.navbar-collapse -->
    </div>

    <div class="visible-xs">
      <!--Mobile Navigation-->
      <nav class="navbar navbar--mobile navbar-default navbar-fixed-top hidden-lg hidden-sm hidden-md mobile-nav" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="https://guestable.com"><img src="https://guestable.com/wp-content/uploads/2018/01/guestable-logo.png" alt="Guestable Logo" class="img-responsive"></a>
        </div><!-- navbar-header -->

        <div class="collapse navbar-collapse" id="navbar-collapse-1">

          <ul id="menu-mobile-menu" class="nav navbar-nav"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1217" class="menu-item menu-item-type-post_type menu-item-object-clients menu-item-has-children menu-item-1217 dropdown"><a title="Client Type" href="https://guestable.com/clients/homeowners/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Client Type <span class="caret"></span></a>
              <ul role="menu" class=" dropdown-menu">
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1216" class="menu-item menu-item-type-post_type menu-item-object-clients menu-item-1216"><a title="Home Owners" href="https://guestable.com/clients/homeowners/">Home Owners</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1214" class="menu-item menu-item-type-post_type menu-item-object-clients menu-item-1214"><a title="Building Owners" href="https://guestable.com/clients/building-owners/">Building Owners</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1215" class="menu-item menu-item-type-post_type menu-item-object-clients menu-item-1215"><a title="Developers" href="https://guestable.com/clients/developers/">Developers</a></li>
              </ul>
            </li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1220" class="menu-item menu-item-type-taxonomy menu-item-object-services-category menu-item-has-children menu-item-1220 dropdown"><a title="Services" href="https://guestable.com/service/full-service-property-management/" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Services <span class="caret"></span></a>
              <ul role="menu" class=" dropdown-menu">
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1221" class="menu-item menu-item-type-taxonomy menu-item-object-services-category menu-item-1221"><a title="Property Management Full Service" href="https://guestable.com/service/full-service-property-management/">Property Management Full Service</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1219" class="menu-item menu-item-type-taxonomy menu-item-object-services-category menu-item-1219"><a title="Virtual Property Management" href="https://guestable.com/service/virtual-property-management/">Virtual Property Management</a></li>
                <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1218" class="menu-item menu-item-type-taxonomy menu-item-object-services-category menu-item-1218"><a title="Hotel Property Management System" href="https://guestable.com/service/hotel-property-management-system/">Hotel Property Management System</a></li>
              </ul>
            </li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1224" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1224"><a title="About Us" href="https://guestable.com/about-us/">About Us</a></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1223" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1223"><a title="Blog" href="https://guestable.com/blog/">Blog</a></li>
            <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-1222" class="learn-more menu-item menu-item-type-post_type menu-item-object-page menu-item-1222"><a title="Contact Us" href="https://guestable.com/contact-us/">Contact Us</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav><!-- mobile-nav -->
    </div>
  </nav>
</section>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package geuestable
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'geuestable' ); ?></a>

	<header id="masthead" class="site-header hidden">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$geuestable_description = get_bloginfo( 'description', 'display' );
			if ( $geuestable_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $geuestable_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'geuestable' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
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
      <a class="navbar-brand" href="https://guestable.com"><img src="https://guestable.com/wp-content/uploads/2018/01/guestable-logo.png" alt="Guestable Logo" class="img-responsive"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="hidden-xs">
      <div class="collapse navbar-collapse navbar-ex1-collapse hidden-xs">

        <ul id="menu-main-menu" class="nav navbar-nav navbar-right"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-94" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-94 dropdown"><a title="Client Type" href="/clients/homeowners/" class="dropdown-toggle" aria-haspopup="true">Client Type <span class="caret"></span></a>
            <ul role="menu" class=" dropdown-menu">
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-493" class="menu-item menu-item-type-post_type menu-item-object-clients menu-item-493"><a title="HOMEOWNERS" href="https://guestable.com/clients/homeowners/">HOMEOWNERS</a></li>
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-226" class="menu-item menu-item-type-post_type menu-item-object-clients menu-item-226"><a title="BUILDING OWNERS" href="https://guestable.com/clients/building-owners/">BUILDING OWNERS</a></li>
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-227" class="menu-item menu-item-type-post_type menu-item-object-clients menu-item-227"><a title="DEVELOPERS" href="https://guestable.com/clients/developers/">DEVELOPERS</a></li>
            </ul>
          </li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-98" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-98 dropdown"><a title="Services" href="/service/full-service-manager/" class="dropdown-toggle" aria-haspopup="true">Services <span class="caret"></span></a>
            <ul role="menu" class=" dropdown-menu">
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-419" class="menu-item menu-item-type-taxonomy menu-item-object-services-category menu-item-419"><a title="PROPERTY MANAGEMENT FULL SERVICE" href="https://guestable.com/service/full-service-property-management/">PROPERTY MANAGEMENT FULL SERVICE</a></li>
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-421" class="menu-item menu-item-type-taxonomy menu-item-object-services-category menu-item-421"><a title="VIRTUAL PROPERTY MANAGEMENT" href="https://guestable.com/service/virtual-property-management/">VIRTUAL PROPERTY MANAGEMENT</a></li>
              <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-420" class="menu-item menu-item-type-taxonomy menu-item-object-services-category menu-item-420"><a title="HOTEL PROPERTY MANAGEMENT SYSTEM" href="https://guestable.com/service/hotel-property-management-system/">HOTEL PROPERTY MANAGEMENT SYSTEM</a></li>
            </ul>
          </li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-840" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-840"><a title="About" href="https://guestable.com/about-us/">About</a></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-235" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-235"><a title="Blog" href="https://guestable.com/blog/">Blog</a></li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-660" class="learn-more menu-item menu-item-type-post_type menu-item-object-page menu-item-660"><a title="Learn More" href="https://guestable.com/contact-us/">Learn More</a></li>
        </ul>
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
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package guestable
 */

?>


	<?php get_template_part( 'template-parts/head/header', 'inner-page' ); ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'guestable' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->
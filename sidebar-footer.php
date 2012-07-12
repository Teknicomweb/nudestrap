<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Hypersound
 * @since Classy 1.0
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'footer-widget-one' )
		&& ! is_active_sidebar( 'footer-widget-two' )
		&& ! is_active_sidebar( 'footer-widget-three' )
		&& ! is_active_sidebar( 'footer-widget-four' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>


<div id="footer-widgets" class="container">
	<div class="footer-widget span3 border-box">
		<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 1') ) ?>
	</div>

	<div class="footer-widget span3 border-box">
		<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 2') ) ?>
	</div>

	<div class="footer-widget span3 border-box">
		<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 3') ) ?>
	</div>

	<div class="footer-widget span3 border-box">
		<?php /* Widgetised Area */ if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 4') ) ?>
	</div>

</div>
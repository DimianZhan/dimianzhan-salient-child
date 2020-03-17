<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<?php
	
	$nectar_options = get_nectar_theme_options();
	
	if ( ! empty( $nectar_options['responsive'] ) && '1' === $nectar_options['responsive'] ) { 
		echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />';
	} else { 
		echo '<meta name="viewport" content="width=1200" />';
	} 
	
	// Shortcut icon fallback.
	if ( ! empty( $nectar_options['favicon'] ) && ! empty( $nectar_options['favicon']['url'] ) ) {
		echo '<link rel="shortcut icon" href="'. esc_url( nectar_options_img( $nectar_options['favicon'] ) ) .'" />';
	}
	
	wp_head();
	
	?>
	
</head>

<?php

$nectar_header_options = nectar_get_header_variables();

?>

<body <?php body_class(); ?> <?php nectar_body_attributes(); ?>>
	
	<?php
	
	nectar_hook_after_body_open();
	
	nectar_hook_before_header_nav();
	
	// Boxed theme option opening div.
	if ( $nectar_header_options['n_boxed_style'] ) {
		echo '<div id="boxed">';
	}
	
	?>
	
	<!-- ##HW Add Dronecode top menu here -->
	<div id="common_dronecode_menu">
	  <div class="common_menu_logo large_version">
	  <a href="https://www.dronecode.org/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dronecode_top_bar_logo_full.png" /></a>
	  </div>

	  <div class="common_menu_logo small_version">
	  <a href="https://www.dronecode.org/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dronecode_top_bar_logo_small.png" /></a>
	  </div>


	  <div class="common_menu_options">
		<div id="menu_dc" class="common_dronecode_menu_item"><a href="https://www.dronecode.org/">Dronecode</a></div>
		<div class="common_dronecode_menu_item"><a href="http://px4.io/">PX4</a></div>
		<div class="common_dronecode_menu_item large_version"><a href="http://qgroundcontrol.com/">QGroundControl</a></div>
		<div class="common_dronecode_menu_item small_version"><a href="http://qgroundcontrol.com/">QGC</a></div>
		<div class="common_dronecode_menu_item"><a href="https://www.dronecode.org/sdk/">SDK</a></div>
		<div class="common_dronecode_menu_item"><a href="https://mavlink.io/en/">MAVLink</a></div>
		<div class="common_dronecode_menu_item large_version"><a href="https://www.dronecode.org/documentation/">Documentation</a></div>
		<div class="common_dronecode_menu_item small_version"><a href="https://www.dronecode.org/documentation/">Docs</a></div>
		<div class="common_dronecode_menu_item large_version"><a href="http://discuss.px4.io/">Support</a></div>
		<div class="common_dronecode_menu_item small_version"><a href="http://discuss.px4.io/">Help</a></div>
	  </div>
	</div>
	<!-- ##HW END Add Dronecode top menu here -->
	
	<?php get_template_part( 'includes/partials/header/header-space' ); ?>
	
	<div id="header-outer" <?php nectar_header_nav_attributes(); ?>>
		
		<?php
		
		get_template_part( 'includes/partials/header/secondary-navigation' );
		
		if ('ascend' !== $nectar_header_options['theme_skin'] && 
			'left-header' !== $nectar_header_options['header_format']) {
			get_template_part( 'includes/header-search' );
		}
		
		get_template_part( 'includes/partials/header/header-menu' );
		
		
		?>
		
	</div>
	
	<?php
	
	if ( ! empty( $nectar_options['enable-cart'] ) && '1' === $nectar_options['enable-cart'] ) {
		get_template_part( 'includes/partials/header/woo-slide-in-cart' );
	}
	
	if ( 'ascend' === $nectar_header_options['theme_skin'] || 
		'left-header' === $nectar_header_options['header_format'] && 
		'false' !== $nectar_header_options['header_search'] ) {
		get_template_part( 'includes/header-search' ); 
	}
	
	?>
	
	<div id="ajax-content-wrap">
		
		<?php
		
		nectar_hook_after_outer_wrap_open();


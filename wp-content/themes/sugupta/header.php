<?php
/**
 * The template for displaying the header.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>
<body <?php do_action( 'sugupta_body_schema_init' ); ?> <?php body_class(); ?>>
	<?php do_action( 'wp_body_open' ); ?>
    <div class="sugupta-body-padding-content">
    	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sugupta' ); ?></a>
			<?php
			do_action( 'sugupta_top_bar' );
		
			do_action( 'sugupta_before_header' );

			do_action( 'sugupta_header' );

			do_action( 'sugupta_after_header' );
			?>
		<div id="page">
            <div id="content" class="site-content">
                <?php
                // sugupta_inside_container hook.
                do_action( 'sugupta_inside_container' );

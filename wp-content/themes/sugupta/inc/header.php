<?php
/**
 * Header elements.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'sugupta_construct_header' ) ) {
	add_action( 'sugupta_header', 'sugupta_construct_header' );
	// Build the header.
	function sugupta_construct_header() {
		
		do_action( 'sugupta_before_header_content' );

		do_action( 'sugupta_default_header' );
		
		do_action( 'sugupta_header_content' );

		do_action( 'sugupta_after_header_content' );
		
	}
}

// Add Footer template part
add_action( 'sugupta_footer_widgets', 'sugupta_add_footer_widgets' );
if ( ! function_exists( 'sugupta_add_footer_widgets' ) ) {
	// Add the template part
	function sugupta_add_footer_widgets() {
		block_template_part( 'footer' );
	}
}

// Build before header content
add_action( 'sugupta_default_header', 'sugupta_build_default_header' );
if ( ! function_exists( 'sugupta_build_default_header' ) ) {
	// Build the header.
	function sugupta_build_default_header() {
		?>
        <div class="site-header-holder site-default-header nav-float-right">
			<header class="site-header has-inline-mobile-toggle" id="masthead">
				<div class="inside-header">
					<div class="site-branding-container">
						<div class="site-branding">
							<h1 class="main-title">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
							</h1>
						</div>
					</div>
					<nav id="site-navigation" class="main-navigation sub-menu-right">
						<div class="inside-navigation grid-parent">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'primary',
									'container' => 'div',
									'container_class' => 'main-nav',
									'container_id' => 'primary-menu',
									'menu_class' => '',
									'fallback_cb' => 'sugupta_menu_fallback',
									'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
								)
							);
							?>
						</div>
					</nav>
				</div>
			</header>
        </div>
        <?php
	}
}

// Menu fallback.
if ( ! function_exists( 'sugupta_menu_fallback' ) ) {
	function sugupta_menu_fallback( $args ) {
		?>
		<div id="primary-menu" class="main-nav">
			<ul>
				<?php
				$args = array(
					'sort_column' => 'menu_order',
					'title_li' => '',
				);

				wp_list_pages( $args );
				?>
			</ul>
		</div>
		<?php
	}
}
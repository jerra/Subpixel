<?php
/**
 * The template for displaying posts within the loop.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="inside-article">
    	<div class="article-holder">
		<?php
		// sugupta_before_content hook.
		do_action( 'sugupta_before_content' );
		?>

		<header class="entry-header">
			<?php
			// sugupta_before_entry_title hook.
			do_action( 'sugupta_before_entry_title' );

			the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );

			// sugupta_after_entry_title hook.
			do_action( 'sugupta_after_entry_title' );
			?>
		</header><!-- .entry-header -->

		<?php
		// sugupta_after_entry_header hook.
		do_action( 'sugupta_after_entry_header' ); ?>

			<div class="entry-content" itemprop="text">
				<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'sugupta' ),
					'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

		<?php 

		// sugupta_after_entry_content hook.
		do_action( 'sugupta_after_entry_content' );

		// sugupta_after_content hook.
		do_action( 'sugupta_after_content' );
		?>
        </div>
	</div><!-- .inside-article -->
</article><!-- #post-## -->

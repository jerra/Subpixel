<?php
/**
 * The template for displaying the footer.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
            </div><!-- #content -->
		</div><!-- #page -->
        
        <?php
        // sugupta_before_footer hook.
        do_action( 'sugupta_before_footer' );
        ?>

        <div <?php do_action( 'sugupta_footer_class_init' ); ?>>
            <?php
            // sugupta_before_footer_content hook.
            do_action( 'sugupta_before_footer_content' );
        
			do_action( 'sugupta_footer_widgets' );
		
			// sugupta_after_footer_widgets hook.
			do_action( 'sugupta_after_footer_widgets' );
			
			// sugupta_footer hook.
            do_action( 'sugupta_footer' );
        
            // sugupta_after_footer_content hook.
            do_action( 'sugupta_after_footer_content' );
            ?>
        </div><!-- .site-footer -->
        
        <?php
        // sugupta_after_footer hook.
        do_action( 'sugupta_after_footer' );
        ?>
	</div><!-- .sugupta-body-padding-content -->
	<?php wp_footer(); ?>
</body>
</html>

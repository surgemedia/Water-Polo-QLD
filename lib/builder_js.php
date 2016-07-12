<?php
	function my_enqueue($hook) {
		    if ( 'edit.php' != $hook ) {
		        return;
		    }

		    wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) . 'myscript.js' );
		}
	
	add_action( 'admin_enqueue_scripts', 'my_enqueue' );

?>
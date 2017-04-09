<?php	
	
	
	wp_enqueue_script('jquery');
	function add_customer() {
    		echo 'ss';
			 wp_die(); 
}
add_action('wp_ajax_add_customer', 'add_customer' ); // executed when logged in

	
?>
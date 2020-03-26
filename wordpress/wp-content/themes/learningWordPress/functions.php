<?php 
//adding css file
	function learningWordPress_resources(){
		wp_enqueue_style('style', get_stylesheet_uri());
	}
//running the above function
	add_action('wp_enqueue_scripts', 'learningWordPress_resources');
?>


<?php 
//Navigation Menus (restricting from which items to show)		
	register_nav_menus(array(
		'primary' => __('Primary Menu'),
		'footer' => __('FooterMenu'),
	));
?>

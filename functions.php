<?php
/*
// ** functions.php - ToDo List
// Look up feature requests listed and reference them or add them to WP Trac.
// Custom built SASS stylesheet for responsive design
// Add debug selector to theme admin to allow for dynamic switching from minified trimmed JS/CSS to dev versions 
// Recommend helper plugins within theme (Google Libraries, DB Backup, Analytics). Don't try to "re-invent the wheel" within the theme. Recommend plugins where it makes sense.
*/

// **Register Scripts and Styles
function trix_theme_assets(){
	global $wp_styles;
	$base_path = get_template_directory_uri();
	//**Styles
	wp_register_style( 'theme_styles', $base_path . '/css/styles.css', array( 'theme_base' ), '1.0', 'screen' ); // ::Feature:: Should be media="(min-width:320px)" to prevent browsers without media query support from downloading the file. 
	wp_register_style( 'theme_ie_only', $base_path . '/css/ie.css', array( 'theme_base' ), '1.0', 'screen' );
	//**Scripts

	//**Enqueues
	wp_enqueue_style( 'theme_styles' );
	wp_enqueue_style( 'theme_ie_only' );
	$wp_styles->add_data( 'theme_ie_only', 'conditional', 'lte IE 7' ); // ::Feature:: Should exclude IEMobile in the conditional.
}
// **Run Theme Assets function
if( !is_admin() ){ 
	add_action( 'wp_enqueue_scripts', 'trix_theme_assets' ); 
}

// **Custom HTML5 Time display
function custom_time(){
	echo '<time datetime="'. get_the_time('c') .'" pubdate><abbr title="'. get_the_time('F') .'">'. get_the_time('M') .'</abbr> '. get_the_time('j') .', '. get_the_time('Y') .' at '. get_the_time('g:i') .'<abbr>'. get_the_time('a') .'</abbr></time>';
}
?>
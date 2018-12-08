//to be placed in themes functions.php 

$theme_version = wpmix_get_version();
global $theme_version;

// get random number
function wpmix_get_random() {
	$randomizr = '-' . rand(100,999);
	return $randomizr;
}
$random_number = wpmix_get_random();
global $random_number;

// include custom stylesheet
function wpmix_queue_css() {
	global $theme_version, $random_number;
	if (!is_admin()) {
		wp_register_style('custom_styles', get_template_directory_uri() . '/css/customdev.css', false, $theme_version . $random_number);
		wp_enqueue_style('custom_styles');
	}
}
add_action('wp_print_styles', 'wpmix_queue_css');

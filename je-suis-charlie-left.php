<?php
/*
Plugin Name: Je suis Charlie (left side)
Plugin URI: http://boiteaweb.fr/je-suis-charlie-8500.html
Description: When activated, this plugin will put a #JeSuisCharlie ribbon on the top <b>left</b> corner of your website. Show your support to Charlie hebdo! Thank you
Author: Julio Potier
Author URI: http://boiteaweb.fr
Version: 1.1
License: GPLv2
*/

add_action( 'wp_footer', 'baw_jsc_show_ribbon_left', PHP_INT_MAX );
function baw_jsc_show_ribbon_left() {
	$ribbon = plugins_url( 'je-suis-charlie-left.png', __FILE__ );
	?>
	<a target="_blank" class="jesuischarlie-ribbon" href="http://twitter.com/#jesuischarlie"><img src="<?php echo $ribbon; ?>" alt="#JeSuisCharlie" style="position: fixed; top: 0; left: 0; z-index: 100000;"></a>
	<?php
}
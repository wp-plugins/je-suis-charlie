<?php
/*
Plugin Name: Je suis Charlie
Plugin URI: http://boiteaweb.fr/je-suis-charlie-8500.html
Description: When activated, this plugin will put a #JeSuisCharlie ribbon on the top right corner of your website. Show your support to Charlie hebdo! Thank you
Author: Julio Potier
Author URI: http://boiteaweb.fr
Version: 1.0
License: GPLv2
*/

add_action( 'wp_footer', 'baw_jsc_show_ribbon', PHP_INT_MAX );
function baw_jsc_show_ribbon() {
	$ribbon = plugins_url( 'je-suis-charlie.png', __FILE__ );
	?>
	<a target="_blank" class="jesuischarlie-ribbon" href="http://twitter.com/#jesuischarlie"><img src="<?php echo $ribbon; ?>" alt="#JeSuisCharlie" style="position: fixed; top: 0; right: 0; z-index: 100000; cursor: pointer;"></a>
	<?php
}
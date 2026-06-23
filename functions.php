<?php
/**
 * AIV Base functions and definitions.
 *
 * @package AIV_Base
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$aiv_base_includes = array(
	'inc/setup.php',
	'inc/enqueue.php',
	'inc/editor.php',
	'inc/template-tags.php',
	'inc/woocommerce.php',
);

foreach ( $aiv_base_includes as $aiv_base_file ) {
	require_once get_theme_file_path( $aiv_base_file );
}

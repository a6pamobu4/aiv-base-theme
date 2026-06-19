<?php
/**
 * Editor assets.
 *
 * @package AIV_Base
 */

declare( strict_types=1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Add minimal editor styles.
 */
function aiv_base_add_editor_styles(): void {
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'aiv_base_add_editor_styles' );


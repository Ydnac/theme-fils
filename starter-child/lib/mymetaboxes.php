<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'yourprefix_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/WebDevStudios/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */
if (file_exists ( get_template_directory () . '/cmb2/init.php' )) {
	require_once get_template_directory () . '/cmb2/init.php';
} elseif (file_exists ( get_template_directory () . '/CMB2/init.php' )) {
	require_once get_template_directory () . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'brochures_title_metabox' );
function bruchures_title_metabox() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_brochures_title_';

	$cmb_brochures_title = new_cmb2_box( array(
			'id'            => $prefix . 'metabox',
			'title'         => __( 'Brochures Title', 'musique' ),
			'object_types'  => array( 'centre', )
	) );

	$cmb_brochures_title->add_field( array(
		'name' => __( 'Brochures Title', 'cmb2' ),
		'desc' => __( 'This is a title description', 'cmb2' ),
		'id'   => $prefix . 'title',
		'type' => 'title',
	) );
}

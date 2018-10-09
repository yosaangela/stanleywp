<?php 

add_action( 'cmb2_admin_init', 'cmb2_stanleywp_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_stanleywp_metaboxes() {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_stanleywp_';

	/**
	 * Initiate the metabox
	 */
	$cmb = new_cmb2_box( array(
		'id'            => 'test_metabox',
		'title'         => __( 'Test Metabox', 'stanleywp' ),
		'object_types'  => array( 'page', ), // Post type
		//'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // Keep the metabox closed by default
	) );

	// Rtext area for left column
	$cmb->add_field( array(
		'name'       => __( 'left column', 'stanleywp' ),
		'desc'       => __( 'content for left column', 'stanleywp' ),
		'id'         => $prefix . 'left',
		'type'       => 'textarea',
	) );

		$cmb->add_field( array(
		'name'       => __( 'right column', 'stanleywp' ),
		'desc'       => __( 'content for right column', 'stanleywp' ),
		'id'         => $prefix . 'right',
		'type'       => 'textarea',
	) );



	// Add other metaboxes as needed

}
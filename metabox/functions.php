<?php

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param  array      $field_args Array of field parameters.
 * @param  CMB2_Field $field      Field object.
 */
function yourprefix_before_row_if_2( $field_args, $field ) {
	if ( 2 == $field->object_id ) {
		echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
	} else {
		echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
	}
}

function cf_themeoptions_side() {
	



   $nstu = new_cmb2_box( array(
		'id'           => 'eyethemeop-items',
		'title'        => 'Page Options',
		'object_types' => array( 'page'), // 
		'context'      => 'side', //  'normal', 'advanced', or 'side'
		'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
		'show_names'   => true, // Show field names on the left
	) );
	

	
	$nstu->add_field( array(
		'name'             => 'Page Banner',
		'id'               => 'page_breadcrumb',
		'type'             => 'radio_inline',
		'show_option_none' => false,
		'options'          => array(
			'1' => __( 'Show', 'nstu' ),
			'2'   => __( 'Hide', 'nstu' ),
		),
		
		'default' => '1',
	) );
	
 	$nstu->add_field( array(
		'name'             => 'Banner Subtitle',
		'id'               => 'page_banner_subtitle',
		'type'             => 'text',
	) ); 

 	$nstu->add_field( array(
		'name'             => 'Banner Title Color',
		'id'               => 'page_banner_title_color',
		'type'             => 'colorpicker',
		'default'          => '#424242',		
	   ) );	
	   
 	$nstu->add_field( array(
		'name'             => 'Banner Subtitle Color',
		'id'               => 'page_banner_subtitle_color',
		'type'             => 'colorpicker',
		'default'          => '#424242',		
	   ) );	

 	$nstu->add_field( array(
		'name'             => 'Banner Overlay Color',
		'id'               => 'page_banner_overlay_color',
		'type'             => 'colorpicker',
		'default'          => '#ffffff',		
		'options'          => array(
				'alpha'    => false, // Make this a rgba color picker.
			),		
	   ) );	   
 
}

add_action( 'cmb2_admin_init', 'cf_themeoptions_side' );






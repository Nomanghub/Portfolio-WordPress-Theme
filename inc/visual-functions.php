<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

 function consult_intigratewithvc(){


	vc_map(array(
			 
		'name' => __('CF Section','codersforest'),
		'description' => 'Place content elements inside the Section',
		'base' => 'vc_section',
		'content_element' => true,		
		'is_container' => true,
		'show_settings_on_create' => false,
		'class'   =>'vc_main-sortable-element',
		'icon' => get_template_directory_uri().'/images/logo-blue.png',
		'category' => __('Content', 'codersforest'),
		'as_parent' => array(
			'only' => 'vc_row',
		) ,
		'js_view' => 'VcColumnView',
	    'params'=>array(
	 
	 
			
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Section Background', 'codersforest' ),
				'param_name' 	=> 'wsi_section_bg_image_video',
				'value'       => array(
				   'Image Background'=>'sectionimgbg',
				),				
			),			
			
			array(
				'type' 			=> 'colorpicker',
				'heading' 		=> __( 'Background Color', 'codersforest' ),
				'description' 		=> __( 'Add Section Bg color', 'codersforest' ),
				'param_name' 	=> 'wsi_section_bg_color',
			    'dependency' =>array(
			    'element' =>'wsi_section_bg_image_video',
			    'value' =>'sectionimgbg',
			  
			    ),				
			),

			
			array(
				'type' 			=> 'attach_image',
				'heading' 		=> __( 'Background Image', 'codersforest' ),
				'description' 		=> __( 'Add Section Bg Image', 'codersforest' ),
				'param_name' 	=> 'wsi_section_bg_image',
			    'dependency' =>array(
			    'element' =>'wsi_section_bg_image_video',
			    'value' =>'sectionimgbg',
			  
			    ),				
				
			),			
			
			
			
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Background Size', 'codersforest' ),
				'param_name' 	=> 'wsi_section_bg_size',
				'value'       => array(
				   'default'=>'',
				   'cover'=>'cover',
				   'contain'=>'contain',
				),

			    'dependency' =>array(
			    'element' =>'wsi_section_bg_image_video',
			    'value' =>'sectionimgbg',
			  
			    ),				
			),			
			
			
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Background Position', 'codersforest' ),
				'param_name' 	=> 'wsi_section_bg_position',
				'value'       => array(
				   'default'=>'',
				   'top'=>'top',
				   'left'=>'left',
				   'center'=>'center',
				   'right'=>'right',
				   'top right'=>'top right',
				   'top left'=>'top left',
				   'bottom right'=>'bottom right',
				   'bottom left'=>'bottom left',
				),

			    'dependency' =>array(
			    'element' =>'wsi_section_bg_image_video',
			    'value' =>'sectionimgbg',
			  
			    ),
				
			),			
			


			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Background Repeat', 'codersforest' ),
				'param_name' 	=> 'wsi_section_bg_repeated',
				'value'       => array(
				   'default'=>'',
				   'repeat'=>'repeat',
				   'no repeat'=>'no-repeat',
				),

			    'dependency' =>array(
			    'element' =>'wsi_section_bg_image_video',
			    'value' =>'sectionimgbg',
			  
			    ),
				
			),


			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Background Attachment', 'codersforest' ),
				'param_name' 	=> 'wsi_section_bg_attachment',
				'value'       => array(
				   'default'=>'',
				   'scroll'=>'scroll',
				   'fixed'=>'fixed',
				),

			    'dependency' =>array(
			    'element' =>'wsi_section_bg_image_video',
			    'value' =>'sectionimgbg',
			  
			    ),				
			),
			
			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Background Overlay', 'codersforest' ),
			  'param_name' => 'wsi_section_overlay_color',
			    'dependency' =>array(
			    'element' =>'wsi_section_bg_image_video',
			    'value' =>'sectionimgbg',
			  
			    ),			  
			  
			),				
						

			array(
				'type'       => 'textfield',
				'param_name' => 'wsi_section_top_padding',
				'description' 		=> __( 'Use px Value Ex: 10px', 'codersforest' ),				
				'heading'    => esc_html__( 'Padding Top', 'codersforest' ),
				'group'      => esc_html__( 'Design', 'codersforest' )
			),			
			
			array(
				'type'       => 'textfield',
				'param_name' => 'wsi_section_bottom_padding',
				'description' 		=> __( 'Use px Value Ex: 10px', 'codersforest' ),				
				'heading'    => esc_html__( 'Padding Bottom', 'codersforest' ),
				'group'      => esc_html__( 'Design', 'codersforest' )
			),			

			array(
				'type'       => 'textfield',
				'param_name' => 'wsi_section_extra_id',
				'heading'    => esc_html__( 'Add Extra ID', 'codersforest' ),
				'group'      => esc_html__( 'Design', 'codersforest' )
			),	
			
			array(
				'type'       => 'textfield',
				'param_name' => 'wsi_section_extra_class',
				'heading'    => esc_html__( 'Add Extra CSS Class', 'codersforest' ),
				'group'      => esc_html__( 'Design', 'codersforest' )
			),			
			
			
			
		),
	 
	 
	 
	 ));
 
 
 	 vc_map(array(
	 'name'=>__('CF Main Slider','codersforest'),
	 'description'=>'Add CF Main Slider',
	 'base'=>'cf_main_slider',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Number Of Slider', 'codersforest' ),
			  'param_name' => 'cf_main_slider_num',
			  
			),
				
				
			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Slider Category Name(for multiple category separate by comma)', 'codersforest' ),
			  'param_name' => 'cf_main_slider_cate',
			  
			),
			
	 
	    ),
	 )); 
 
 
 	 vc_map(array(
	 'name'=>__('CF Icon Box','codersforest'),
	 'description'=>'Add CF Icon Box',
	 'base'=>'cf_icon_box',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
	 
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Icon Box Style', 'codersforest' ),
				'param_name' 	=> 'cf_icon_box_style',
				'value'       => array(
				   'Select'=>'',
				   'style1'=> '1',
				   'style2'=> '2',
				   'style3'=> '3',
				   
				),
				
			),
			
			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Add Title', 'codersforest' ),
			  'param_name' => 'cf_icon_box_title',
			  
			  ),

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Add Icon Class', 'codersforest' ),
			  'param_name' => 'cf_icon_box_icon_class',
			  
			  ),			  

			array(
			  'type' => 'textarea',
			  
			  'heading' => __( 'Add Details', 'codersforest' ),
			  'param_name' => 'cf_icon_box_details',
			  
			  ),

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Button Text', 'codersforest' ),
			  'param_name' => 'cf_icon_box_btn_text',
			  
			  ),
			  
			array(
			  'type' => 'vc_link',
			  
			  'heading' => __( 'Button Link', 'codersforest' ),
			  'param_name' => 'cf_icon_box_btn_link',
			  
			  ),
			  
			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Icon Box Price', 'codersforest' ),
			  'param_name' => 'cf_icon_box_price',
			  
			  ),			  

			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Icon Box Bg Color', 'codersforest' ),
			  'param_name' => 'cf_icon_box_bg_color',
			  
			  ),			  
			  
	 
	 ),
	 
	 
	 ));


 	 vc_map(array(
	 'name'=>__('CF Icon List','codersforest'),
	 'description'=>'Add CF Icon List',
	 'base'=>'cf_icon_list',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
	 
			array(
			  'type' => 'dropdown',
			  
			  'heading' => __( 'Icon List Style', 'codersforest' ),
			  'param_name' => 'cf_icon_list_style',
			  'value'       => array(
				   'select'=>'',
				   'style1'=>'1',
				   'style2'=>'2',
				),				  
			  
			  
			),
			
			  
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Icon List', 'codersforest' ),
			  'param_name' => 'cf_icon_list_loop',		  
			  'params'  =>array(
			    
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_icon_list_loop_title',
					  'admin_label' => true,
					  
					  ),

					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Icon Class', 'codersforest' ),
					  'param_name' => 'cf_icon_list_loop_class',
					  
					  ),
				  
					array(
					  'type' => 'vc_link',
					  
					  'heading' => __( 'Add Link', 'codersforest' ),
					  'param_name' => 'cf_icon_list_loop_link',
					  
					  
					  ),					  
					
			  )
			  
			  
			),						  
			  
					
	 
	 ),
	
	 
	 ));


 	 vc_map(array(
	 'name'=>__('CF Faqs','codersforest'),
	 'description'=>'Add CF Faqs',
	 'base'=>'cf_theme_faqs',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
	 


 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Faqs', 'codersforest' ),
			  'param_name' => 'cf_faqs_group',
			  'params'  =>array(
			    
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_faqs_title',
					  'admin_label' => true,
					  
					),			
					
					
					
					array(
					  'type' => 'textarea_raw_html',
					  
					  'heading' => __( 'Add Details', 'codersforest' ),
					  'param_name' => 'cf_faqs_details',
					  
					  
					  
					),	

										
			  
			  
			  )
			  
			  
			),		
					
	 
	 ),
	 
	 ));
	 
	 
 	 vc_map(array(
	 'name'=>__('CF Title','codersforest'),
	 'description'=>'Add CF Title',
	 'base'=>'cf_main_title',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Add Title', 'codersforest' ),
			  'param_name' => 'cf_main_sec_title',
			  
			  ),
			  
			array(
			  'type' => 'textarea',
			  
			  'heading' => __( 'Add Subtitle', 'codersforest' ),
			  'param_name' => 'cf_main_sec_subtitle',
			  
			  ),			  
			  
			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Title Color', 'codersforest' ),
			  'param_name' => 'cf_main_title_color_st',
			  
			  ),	
			  
			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Subitle Color', 'codersforest' ),
			  'param_name' => 'cf_main_subtitle_color_st',
			  
			  ),

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Margin', 'codersforest' ),
			  'param_name' => 'cf_main_subtitle_margin_st',
			  
			  ),			  
								
	 
	 ),
	
	 
	 ));	 
	 
	 
	 
 	 vc_map(array(
	 'name'=>__('CF Image Box','codersforest'),
	 'description'=>'Add CF Image Box',
	 'base'=>'cf_image_box',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
			array(
			  'type' => 'attach_image',
			  
			  'heading' => __( 'Add Image', 'codersforest' ),
			  'param_name' => 'cf_img_banner_bg_img',
			  
			),

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Add Title', 'codersforest' ),
			  'param_name' => 'cf_img_banner_title',
			  
			),
			
		

			array(
			  'type' => 'textarea',
			  
			  'heading' => __( 'Add Details', 'codersforest' ),
			  'param_name' => 'cf_img_banner_details',
			  
			),

		
				
			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Button Title', 'codersforest' ),
			  'param_name' => 'cf_img_banner_btn_title',
			  
			),

			array(
			  'type' => 'vc_link',
			  
			  'heading' => __( 'Button Link', 'codersforest' ),
			  'param_name' => 'cf_img_banner_btn_link',
			  
			),	
			
			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Bg Color', 'codersforest' ),
			  'param_name' => 'cf_img_banner_bg_color',
			  
			),			
	 
	 ),
	 
	 ));		 
	 
	 
	 vc_map(array(
	 'name'=>__('CF Portfolio Grid','codersforest'),
	 'description'=>'Add CF Portfolio Grid',
	 'base'=>'cf_portfolio_grid',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(

 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Portfolio', 'codersforest' ),
			  'param_name' => 'cf_portfolio_grid_loop',
			  'params'  =>array(
			    
				
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_portfolio_grid_loop_title',
					  'admin_label' => true,
					  
					  
					  
					),

					array(
					  'type' => 'attach_image',
					  
					  'heading' => __( 'Add Image', 'codersforest' ),
					  'param_name' => 'cf_portfolio_grid_loop_img',
					  
					  
					  
					),
					
					array(
					  'type' => 'textarea',
					  
					  'heading' => __( 'Add Details', 'codersforest' ),
					  'param_name' => 'cf_portfolio_grid_loop_details',
					  
					  
					  
					),					

					array(
					  'type' => 'vc_link',
					  
					  'heading' => __( 'Add Link', 'codersforest' ),
					  'param_name' => 'cf_portfolio_grid_loop_link',
					  
					  
					  
					),
					array(
						'type' 			=> 'dropdown',
						'heading' 		=> __( 'Animation', 'codersforest' ),
						'param_name' 	=> 'cf_portfolio_grid_loop_animation',
						'value'       => array(
						   'Animation'=>'',
						   'Top'=>'top',
						   'Bottom'=>'bottom',
						   'Left'=>'left',
						   'Right'=>'right'
						   
						),
						
					),
					
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add CSS Class', 'codersforest' ),
					  'param_name' => 'cf_portfolio_grid_loop_class',
					  
					  
					  
					),					
					
					
			  )
			  
			  
			),


				
			
	 
	 ),
	 
	 
	 
	
	 
	 ));	 
	 
	 
	 
 	 vc_map(array(
	 'name'=>__('CF Blog Post','codersforest'),
	 'description'=>'Add CF Blog Post',
	 'base'=>'cf_blog_post',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Number Of Post', 'codersforest' ),
			  'param_name' => 'cf_blog_post_num',
			  
			),
				
				
			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Post Category Name(for multiple category separate by comma)', 'codersforest' ),
			  'param_name' => 'cf_blog_post_cat',
			  
			),
			
			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Blog Item Bg Color', 'codersforest' ),
			  'param_name' => 'cf_blog_post_color',
			  
			),			
			
	 
	    ),
	 )); 	 
	 
	 
 	 vc_map(array(
	 'name'=>__('CF Testimonial','codersforest'),
	 'description'=>'Add CF Testimonial',
	 'base'=>'cf_testimonial',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
	 
			array(
			  'type' => 'attach_image',
			  
			  'heading' => __( 'Background Image', 'codersforest' ),
			  'param_name' => 'cf_testimonial_sec_bg_img',
			  
			  ),
			  
			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Video Link', 'codersforest' ),
			  'param_name' => 'cf_testimonial_video_link',
			  
			  ),
			  
			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Background Color', 'codersforest' ),
			  'param_name' => 'cf_testimonial_bgs_color',
			  
			  ),
			
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Testimonial', 'codersforest' ),
			  'param_name' => 'cf_testimonial_loop',
			  'group'      => esc_html__( 'Testimonial', 'codersforest' ),			  
			  'params'  =>array(
			    
					
					  
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Name', 'codersforest' ),
					  'param_name' => 'cf_testimonial_loop_name',
					  'admin_label' => true,
					  
					  ),

					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Position', 'codersforest' ),
					  'param_name' => 'cf_testimonial_loop_position',
					  
					  ),					  
					  
					array(
					  'type' => 'textarea',
					  
					  'heading' => __( 'Add Details', 'codersforest' ),
					  'param_name' => 'cf_testimonial_loop_details',
					  
					  ),

					array(
					  'type' => 'attach_image',
					  
					  'heading' => __( 'Add Client Photo', 'codersforest' ),
					  'param_name' => 'cf_testimonial_loop_clt_img',
					  
					  ),
					  
					
			  )
			  
			  
			),			
			
	 
	 ),
	
	 
	 ));	 
	 
	 
 	 vc_map(array(
	 'name'=>__('CF Services Slider','codersforest'),
	 'description'=>'Add CF Services Slider',
	 'base'=>'cf_services_slider',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
	 

			
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Service', 'codersforest' ),
			  'param_name' => 'cf_services_loop',			  
			  'params'  =>array(
			    
					
					  
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_service_loop_title',
					  'admin_label' => true,
					  
					  ),

					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Icon Class', 'codersforest' ),
					  'param_name' => 'cf_service_loop_icon_class',
					  
					  ),					  
					  
					array(
					  'type' => 'textarea',
					  
					  'heading' => __( 'Add Details', 'codersforest' ),
					  'param_name' => 'cf_service_loop_details',
					  
					  ),

					array(
					  'type' => 'colorpicker',
					  
					  'heading' => __( 'Background Color', 'codersforest' ),
					  'param_name' => 'cf_services_bgs_color',
					  
					  ),					
					  
					
			  )
			  
			  
			),			
			
	 
	 ),
	
	 
	 ));	 
	 
	 
	 
 	 vc_map(array(
	 'name'=>__('CF Countdown','codersforest'),
	 'description'=>'Add CF Countdown',
	 'base'=>'cf_countdown',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
			array(
			  'type' => 'attach_image',
			  
			  'heading' => __( 'Background Image', 'codersforest' ),
			  'param_name' => 'cf_countdown_bgs_img',
			  
			  ),

			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Background Color', 'codersforest' ),
			  'param_name' => 'cf_countdown_bgs_color',
			  
			  ),
			  
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Countdown', 'codersforest' ),
			  'param_name' => 'cf_countdown_loop',			  
			  'params'  =>array(
			    
					
					  
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_countdown_loop_title',
					  'admin_label' => true,
					  
					  ),

					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Number', 'codersforest' ),
					  'param_name' => 'cf_countdown_loop_num',
					  
					  ),										  

					array(
					  'type' => 'colorpicker',
					  
					  'heading' => __( 'Title Color', 'codersforest' ),
					  'param_name' => 'cf_countdown_loop_title_color',
					  
					  ),

					array(
					  'type' => 'colorpicker',
					  
					  'heading' => __( 'Number Color', 'codersforest' ),
					  'param_name' => 'cf_countdown_loop_num_color',
					  
					  ),					  
					
					
					  
					
			  )
			  
			  
			),			
			
	 
	 ),
	
	 
	 ));		 
	 
	 
	 vc_map(array(
	 'name'=>__('CF Portfolio Tabs','codersforest'),
	 'description'=>'Add CF Portfolio Tabs',
	 'base'=>'cf_portfolio_tabs',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	
			
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Category List', 'codersforest' ),
			  'param_name' => 'cf_portfolio_slider_cate_loop',
			  'group' =>__('Category Loop', 'codersforest' ),
			  'params'  =>array(
			    
				
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Category Name', 'codersforest' ),
					  'param_name' => 'cf_portfolio_slider_cate_name',
					  'admin_label' => true,
					  
					  
					),

					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Category ID', 'codersforest' ),
					  'param_name' => 'cf_portfolio_slider_cate_id',
					  
					  
					  
					),			
					
			  )
			  
			  
			),


			

 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Portfolio List', 'codersforest' ),
			  'param_name' => 'cf_portfolio_slider_port_loop',
			  'group' =>__('Portfolio Loop', 'codersforest' ),
			  'params'  =>array(
			    
			
					
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_portfolio_slider_port_title',
					  'admin_label' => true,
					  
					  
					),
					
					array(
					  'type' => 'attach_image',
					  
					  'heading' => __( 'Add Image', 'codersforest' ),
					  'param_name' => 'cf_portfolio_slider_port_img',
					  
					  
					),	

					array(
					  'type' => 'textarea',
					  
					  'heading' => __( 'Add Details', 'codersforest' ),
					  'param_name' => 'cf_portfolio_slider_port_details',
					  
					  
					),					

					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Portfolio Class', 'codersforest' ),
					  'param_name' => 'cf_portfolio_slider_port_id',
					  
					  
					  
					),
					
					array(
					  'type' => 'vc_link',
					  
					  'heading' => __( 'Add Link', 'codersforest' ),
					  'param_name' => 'cf_portfolio_slider_port_link',
					  
					  
					  
					),	

					array(
						'type' 			=> 'dropdown',
						'heading' 		=> __( 'Animation', 'codersforest' ),
						'param_name' 	=> 'cf_portfolio_tabs_loop_animation',
						'value'       => array(
						   'Animation'=>'',
						   'Top'=>'top',
						   'Bottom'=>'bottom',
						   'Left'=>'left',
						   'Right'=>'right'
						   
						),
						
					),

					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Data Sort Number', 'codersforest' ),
					  'param_name' => 'cf_portfolio_slider_sortd_num',
					  
					  
					  
					),					
					
										
			  
			  
			  )
			  
			  
			),			
			
		

			
	 
	 ),
	 
	 
	 
	
	 
	 ));	 
	 
	 
	 
	 vc_map(array(
	 'name'=>__('CF Pricing Table','codersforest'),
	 'description'=>'Add CF Pricing Table',
	 'base'=>'cf_pricing_table',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Add Title', 'codersforest' ),
			  'param_name' => 'cf_pricing_table_title',
			  
			),

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Add Price', 'codersforest' ),
			  'param_name' => 'cf_pricing_table_price',
			  
			),

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Add Currency', 'codersforest' ),
			  'param_name' => 'cf_pricing_table_price_currcy',
			  
			),

			array(
			  'type' => 'textfield',
			  
			  'heading' => __( 'Button Text', 'codersforest' ),
			  'param_name' => 'cf_pricing_table_btn_text',
			  
			),

			array(
			  'type' => 'vc_link',
			  
			  'heading' => __( 'Button Link', 'codersforest' ),
			  'param_name' => 'cf_pricing_table_btn_link',
			  
			),
			
			array(
			  'type' => 'colorpicker',
			  
			  'heading' => __( 'Background Color', 'codersforest' ),
			  'param_name' => 'cf_pricing_table_bg_color',
			  
			),
			
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Item List', 'codersforest' ),
			  'param_name' => 'cf_pricing_table_loop',
			  'group' =>__('Items List', 'codersforest' ),
			  'params'  =>array(
			    
				
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Item Name', 'codersforest' ),
					  'param_name' => 'cf_pricing_table_loop_title',
					  'admin_label' => true,
					  
					  
					),
			
					
			  )
			  
			  
			),

			
	 
	 ),
	 
	 
	 
	 ));	 	 
	 

	 vc_map(array(
	 'name'=>__('CF Gallery Slider','codersforest'),
	 'description'=>'Add CF Gallery Slider',
	 'base'=>'cf_gallery_slider',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Slider', 'codersforest' ),
			  'param_name' => 'cf_gallery_slider_loop',
			  'params'  =>array(
			    
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_gallery_slider_loop_title',
					  'admin_label' => true,
					  
					  
					),
					
					array(
					  'type' => 'attach_image',
					  
					  'heading' => __( 'Add Image', 'codersforest' ),
					  'param_name' => 'cf_gallery_slider_loop_img',
					  
					  
					),
			
					
			  )
			  
			  
			),

			
	 
	 ),
	 
	 
	 
	 ));



	 vc_map(array(
	 'name'=>__('CF Image Carousel','codersforest'),
	 'description'=>'Add CF Image Carousel',
	 'base'=>'cf_image_carousel',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Carousel', 'codersforest' ),
			  'param_name' => 'cf_image_carousel_loop',
			  'params'  =>array(
			    
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_image_carousel_loop_title',
					  'admin_label' => true,
					  
					  
					),
					
					array(
					  'type' => 'attach_image',
					  
					  'heading' => __( 'Add Image', 'codersforest' ),
					  'param_name' => 'cf_image_carousel_loop_img',
					  
					  
					),
			
					
			  )
			  
			  
			),

			
	 
	 ),
	 
	 
	 
	 ));

	 vc_map(array(
	 'name'=>__('CF Table Icon','codersforest'),
	 'description'=>'Add CF Table Icon',
	 'base'=>'cf_table_icon',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Table Icon', 'codersforest' ),
			  'param_name' => 'cf_table_icon_loop',
			  'params'  =>array(
			    
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_table_icon_loop_title',
					  'admin_label' => true,
					  
					  
					),
					
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Icon Class', 'codersforest' ),
					  'param_name' => 'cf_table_icon_class',
					  
					  
					),

					array(
					  'type' => 'textarea',
					  
					  'heading' => __( 'Add Details', 'codersforest' ),
					  'param_name' => 'cf_table_icon_details',
					  
					  
					),					
					
			  )
			  
			  
			),

			
	 
	 ),
	 
	 
	 
	 ));


	 vc_map(array(
	 'name'=>__('CF Button','codersforest'),
	 'description'=>'Add CF Button',
	 'base'=>'cf_button',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
			array(
			  'type' => 'textfield',
			  'heading' => __( 'Button Text', 'codersforest' ),
			  'param_name' => 'cf_button_text',
			),
			
			array(
				'type' 			=> 'dropdown',
				'heading' 		=> __( 'Button Alignment', 'codersforest' ),
				'param_name' 	=> 'cf_button_alignment',
				'value'       => array(
				   'Alignment'=>'',
				   'Left'=>'left',
				   'Center'=>'center',
				   'Right'=>'right'
				   
				),
				
			),		

			array(
			  'type' => 'vc_link',
			  'heading' => __( 'Button Link', 'codersforest' ),
			  'param_name' => 'cf_button_link',
			),			

			array(
			  'type' => 'textfield',
			  'heading' => __( 'Button Width (ex:10px/10%)', 'codersforest' ),
			  'param_name' => 'cf_button_width',
			),			
			
			array(
			  'type' => 'colorpicker',
			  'heading' => __( 'Button Bg Color', 'codersforest' ),
			  'param_name' => 'cf_button_bg_color',
			),
			array(
			  'type' => 'colorpicker',
			  'heading' => __( 'Button Text Color', 'codersforest' ),
			  'param_name' => 'cf_button_text_color',
			),

			array(
			  'type' => 'colorpicker',
			  'heading' => __( 'Button Bg Hover Color', 'codersforest' ),
			  'param_name' => 'cf_button_bg_hvcolor',
			),
			array(
			  'type' => 'colorpicker',
			  'heading' => __( 'Button Text Hover Color', 'codersforest' ),
			  'param_name' => 'cf_button_text_hvcolor',
			),				
			
	 ),
	 
	 
	 
	 ));



	 vc_map(array(
	 'name'=>__('CF Tab Menu','codersforest'),
	 'description'=>'Add CF Tab Menu',
	 'base'=>'cf_tab_menu',
	 'category'=>'CF Theme',
	 'icon'=> get_template_directory_uri().'/images/logo-blue.png',
	 'params'=>array(
	 
 			array(
			  'type' => 'param_group',
			  
			  'heading' => __( 'Add Table Menu', 'codersforest' ),
			  'param_name' => 'cf_tab_menu_loop',
			  'params'  =>array(
			    
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Title', 'codersforest' ),
					  'param_name' => 'cf_tab_menu_loop_title',
					  'admin_label' => true,
					  
					  
					),
					
					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Class', 'codersforest' ),
					  'param_name' => 'cf_tab_menu_loop_class',
					  
					  
					),

					array(
					  'type' => 'textfield',
					  
					  'heading' => __( 'Add Link', 'codersforest' ),
					  'param_name' => 'cf_tab_menu_loop_link',
					  
					  
					),					
					
			  )
			  
			  
			),

			
	 
	 ),
	 
	 
	 
	 ));

	 
	 
	 
 
 }
 add_action('vc_before_init','consult_intigratewithvc');

 
 




?>
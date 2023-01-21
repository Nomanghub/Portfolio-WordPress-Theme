<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Theme Options

function themeoptions($themeoptions) {

    $themeoptions->add_panel( 'cf_theme_options', array(
        'title'          => 'Theme Options',
        'description'    => '',
        'priority'       => 25,
    ) );

 
	// cf log and favicon
    $themeoptions->add_section( 'cf_logo_and_favicon', array(
        'title'          => 'Logo',
        'description'    => '',
        'panel'       => 'cf_theme_options',
    ) );

   $themeoptions->add_setting( 'cf_main_logo', array(
        'default'        => '',
		'transport'      => 'refresh',
    ) );

    $themeoptions->add_control( new WP_Customize_Image_Control( $themeoptions, 'cf_main_logo', array(
        'label'   => 'Logo',
        'section' => 'cf_logo_and_favicon',
        'settings'   => 'cf_main_logo',
    ) ) );	
	
	$themeoptions->add_setting('cf_main_logo_text', array(
	 
	 'default'   => 'odersForest',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_main_logo_text', array(
	  'section' =>'cf_logo_and_favicon',
	  'label'   => 'Logo Text',
	  'type'    => 'text',
	
	));

	$themeoptions->add_setting('cf_main_logo_text_show_hide', array(
	 
	 'default'   => 'hide',
	 'transport' => 'refresh',
	));
	
	$themeoptions->add_control('cf_main_logo_text_show_hide', array(
	  'section' =>'cf_logo_and_favicon',
	  'label'   => 'Logo Text Display',
	  'type'    => 'radio',
	  'choices'    => array(
			'show' => __('Show', 'codersforest'),
			'hide' => __('Hide', 'codersforest'),
		),
	
	));

	$themeoptions->add_setting('cf_main_logo_size', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_main_logo_size', array(
	  'section' =>'cf_logo_and_favicon',
	  'label'   => 'Logo Size (ex:10px/10%)',
	  'type'    => 'text',
	
	));	
	
	$themeoptions->add_setting('cf_main_logo_text_color', array(
	 
	 'default'   => '#000000',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_main_logo_text_color', array(
	  'section' =>'cf_logo_and_favicon',
	  'label'   => 'Logo Text Color',
	  'type'    => 'color',
	
	));
	
	$themeoptions->add_setting('cf_main_logo_text_size', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_main_logo_text_size', array(
	  'section' =>'cf_logo_and_favicon',
	  'label'   => 'Logo Text Size (ex:10px)',
	  'type'    => 'text',
	
	));	

    //cf header
    $themeoptions->add_section( 'cf_hd_options', array(
        'title'          => 'Header',
        'description'    => '',
        'panel'       => 'cf_theme_options',
    ) );
	
	$themeoptions->add_setting('cf_hd_menu_color', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_color', array(
	  'section' =>'cf_hd_options',
	  'label'   => 'Menu Color',
	  'type'    => 'color',
	
	));		
	
	$themeoptions->add_setting('cf_hd_menu_hvcolor', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_hvcolor', array(
	  'section' =>'cf_hd_options',
	  'label'   => 'Menu Hover Color',
	  'type'    => 'color',
	
	));	
	
	$themeoptions->add_setting('cf_hd_menu_drwbg', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_drwbg', array(
	  'section' =>'cf_hd_options',
	  'label'   => 'Menu Dropdown Bg',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_hd_menu_drw_color', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_drw_color', array(
	  'section' =>'cf_hd_options',
	  'label'   => 'Dropdown Menu Color',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_hd_menu_drw_hvcolor', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_drw_hvcolor', array(
	  'section' =>'cf_hd_options',
	  'label'   => 'Dropdown Menu Hover Color',
	  'type'    => 'color',
	
	));

	$themeoptions->add_setting('cf_hd_sch_icon_color', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_sch_icon_color', array(
	  'section' =>'cf_hd_options',
	  'label'   => 'Header Search Icon Color',
	  'type'    => 'color',
	
	));	
	
	$themeoptions->add_setting('cf_hd_sch_text_color', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_sch_text_color', array(
	  'section' =>'cf_hd_options',
	  'label'   => 'Header Search Text Color',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_hd_sch_bg_color', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_sch_bg_color', array(
	  'section' =>'cf_hd_options',
	  'label'   => 'Header Search Bg Color',
	  'type'    => 'color',
	
	));	

    //cf Sticky  header
    $themeoptions->add_section( 'cf_Sticky_hd_options', array(
        'title'          => 'Sticky Header',
        'description'    => '',
        'panel'       => 'cf_theme_options',
    ) );

	$themeoptions->add_setting('cf_hd_menu_bg_color_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_bg_color_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Background Color',
	  'type'    => 'color',
	
	));	
	
	$themeoptions->add_setting('cf_hd_menu_color_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_color_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Menu Color',
	  'type'    => 'color',
	
	));		
	
	$themeoptions->add_setting('cf_hd_menu_hvcolor_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_hvcolor_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Menu Hover Color',
	  'type'    => 'color',
	
	));	
	
	$themeoptions->add_setting('cf_hd_menu_drwbg_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_drwbg_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Menu Dropdown Bg',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_hd_menu_drw_color_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_drw_color_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Dropdown Menu Color',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_hd_menu_drw_hvcolor_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_menu_drw_hvcolor_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Dropdown Menu Hover Color',
	  'type'    => 'color',
	
	));

	$themeoptions->add_setting('cf_hd_sch_icon_color_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_sch_icon_color_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Search Icon Color',
	  'type'    => 'color',
	
	));	
	
	$themeoptions->add_setting('cf_hd_sch_text_color_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_sch_text_color_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Search Text Color',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_hd_sch_bg_color_sky', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_hd_sch_bg_color_sky', array(
	  'section' =>'cf_Sticky_hd_options',
	  'label'   => 'Search Bg Color',
	  'type'    => 'color',
	
	));		
	
   //cf Footer
    $themeoptions->add_section( 'cf_theme_footer_options', array(
        'title'          => 'Footer',
        'description'    => '',
        'panel'       => 'cf_theme_options',
    ) );	

   $themeoptions->add_setting( 'cf_footer_logo', array(
        'default'        => '',
		'transport'      => 'refresh',
    ) );

    $themeoptions->add_control( new WP_Customize_Image_Control( $themeoptions, 'cf_footer_logo', array(
        'label'   => 'Footer Logo',
        'section' => 'cf_theme_footer_options',
        'settings'   => 'cf_footer_logo',
    ) ) );	
	
	$themeoptions->add_setting('cf_footer_logo_text', array(
	 
	 'default'   => 'odersForest',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_logo_text', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Logo Text',
	  'type'    => 'text',
	
	));

	$themeoptions->add_setting('cf_footer_logo_text_show_hide', array(
	 
	 'default'   => 'hide',
	 'transport' => 'refresh',
	));
	
	$themeoptions->add_control('cf_footer_logo_text_show_hide', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Logo Text Display',
	  'type'    => 'radio',
	  'choices'    => array(
			'show' => __('Show', 'codersforest'),
			'hide' => __('Hide', 'codersforest'),
		),
	
	));

	$themeoptions->add_setting('cf_footer_logo_size', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_logo_size', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Logo Size (ex:10px/10%)',
	  'type'    => 'text',
	
	));	
	
	$themeoptions->add_setting('cf_footer_logo_text_color', array(
	 
	 'default'   => '#000000',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_logo_text_color', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Logo Text Color',
	  'type'    => 'color',
	
	));
	
	$themeoptions->add_setting('cf_footer_logo_text_size', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_logo_text_size', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Logo Text Size (ex:10px)',
	  'type'    => 'text',
	
	));


	$themeoptions->add_setting('cf_footer_bg_clr', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_bg_clr', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Bg Color',
	  'type'    => 'color',
	
	));

	$themeoptions->add_setting('cf_footer_title_clr', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_title_clr', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Title Color',
	  'type'    => 'color',
	
	));

	$themeoptions->add_setting('cf_footer_text_clr', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_text_clr', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Text Color',
	  'type'    => 'color',
	
	));

	$themeoptions->add_setting('cf_footer_link_clr', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_link_clr', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Link Color',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_footer_hvlink_clr', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_hvlink_clr', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Link Hover Color',
	  'type'    => 'color',
	
	));

	$themeoptions->add_setting('cf_footer_cyright_clr', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_cyright_clr', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Copyright Color',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_footer_cyright_bg_clr', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_footer_cyright_bg_clr', array(
	  'section' =>'cf_theme_footer_options',
	  'label'   => 'Footer Copyright Bg Color',
	  'type'    => 'color',
	
	));		
	
	
	//blog setting
    $themeoptions->add_section( 'cf_blog_header', array(
        'title'          => 'Blog',
        'description'    => '',
        'panel'       => 'cf_theme_options',
    ) );

   $themeoptions->add_setting( 'cf_blog_banner_img', array(
        'default'        => '',
		'transport'      => 'refresh',
    ) );

    $themeoptions->add_control( new WP_Customize_Image_Control( $themeoptions, 'cf_blog_banner_img', array(
        'label'   => 'Banner Image',
        'section' => 'cf_blog_header',
        'settings'   => 'cf_blog_banner_img',
    ) ) );

	$themeoptions->add_setting('cf_blog_banner_title', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_blog_banner_title', array(
	  'section' =>'cf_blog_header',
	  'label'   => 'Banner Title',
	  'type'    => 'text',
	
	));

	$themeoptions->add_setting('cf_blog_banner_subtitle', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_blog_banner_subtitle', array(
	  'section' =>'cf_blog_header',
	  'label'   => 'Banner Subtitle',
	  'type'    => 'text',
	
	));	
	
	$themeoptions->add_setting('cf_blog_banner_overlay', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_blog_banner_overlay', array(
	  'section' =>'cf_blog_header',
	  'label'   => 'Banner Overlay',
	  'type'    => 'text',
	
	));

	$themeoptions->add_setting('cf_blog_banner_title_color', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_blog_banner_title_color', array(
	  'section' =>'cf_blog_header',
	  'label'   => 'Banner Title Color',
	  'type'    => 'color',
	
	));		
	
	$themeoptions->add_setting('cf_blog_banner_subtitle_color', array(
	 
	 'default'   => '',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_blog_banner_subtitle_color', array(
	  'section' =>'cf_blog_header',
	  'label'   => 'Banner Subtitle Color',
	  'type'    => 'color',
	
	));	

	$themeoptions->add_setting('cf_blog_banner_height_class', array(
	 
	 'default'   => 'header-title',
	 'transport' => 'refresh',
	));
	
	
	$themeoptions->add_control('cf_blog_banner_height_class', array(
	  'section' =>'cf_blog_header',
	  'label'   => 'Banner CSS Class',
	  'type'    => 'text',
	
	));	
	
	}

add_action( 'customize_register', 'themeoptions' );


function cf_theme_options_css() {
	?>
	<style type="text/css">
	   .cf-logo{
		  color:<?php echo get_theme_mod('cf_main_logo_text_color'); ?> !important;
		  font-size:<?php echo get_theme_mod('cf_main_logo_text_size'); ?> !important;
	   }
	   
	   .cf-logo img{
		  width:<?php echo get_theme_mod('cf_main_logo_size'); ?> !important; 
	   }
	   
	   .cf-footer-logo{
		  color:<?php echo get_theme_mod('cf_footer_logo_text_color'); ?> !important;
		  font-size:<?php echo get_theme_mod('cf_footer_logo_text_size'); ?> !important;
	   }
	   
	   .cf-footer-logo img{
		  width:<?php echo get_theme_mod('cf_footer_logo_size'); ?> !important; 
	   }

       .cf-bg-overlay-hd-title{
		  background:<?php echo get_theme_mod('cf_blog_banner_overlay'); ?>; 
	   }

       .cf-hd-title h1{
		 color:<?php echo get_theme_mod('cf_blog_banner_title_color'); ?> !important;  
	   }	   
	   
       .cf-hd-title p{
		 color:<?php echo get_theme_mod('cf_blog_banner_subtitle_color'); ?> !important;  
	   }
	   
	   .bg-transparent .cf-main-menu>li>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_color'); ?> !important;
	   }
	   
	   .bg-transparent .cf-lan-menu>li>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_color'); ?> !important;
	   }	   
	   .bg-transparent .cf-main-menu>li>a:hover{
		   color:<?php echo get_theme_mod('cf_hd_menu_hvcolor'); ?> !important;
	   }	
	    
	   
	   .bg-transparent .cf-main-menu>li.active>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_hvcolor'); ?> !important;
	   }	   
	   
	   .bg-transparent .cf-main-menu .dropdown-menu{
		   background:<?php echo get_theme_mod('cf_hd_menu_drwbg'); ?> !important;
	   }
	   
	   .bg-transparent .cf-lan-menu .dropdown-menu{
		   background:<?php echo get_theme_mod('cf_hd_menu_drwbg'); ?> !important;
	   }

	   .bg-transparent .cf-main-menu .dropdown-menu li>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_drw_color'); ?> !important;
	   }

	   .bg-transparent .cf-lan-menu .dropdown-menu li>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_drw_color'); ?> !important;
	   }	   
	   
	   .bg-transparent .cf-main-menu .dropdown-menu li>a:hover{
		   color:<?php echo get_theme_mod('cf_hd_menu_drw_hvcolor'); ?> !important;
	   }

	   .bg-transparent .cf-lan-menu .dropdown-menu li>a:hover{
		   color:<?php echo get_theme_mod('cf_hd_menu_drw_hvcolor'); ?> !important;
	   }
	   
	   .bg-transparent .cf-hd-search .fa-search{
		   color:<?php echo get_theme_mod('cf_hd_sch_icon_color'); ?> !important;
	   }

	   .bg-transparent .cf-hd-search .search-box{
		   background:<?php echo get_theme_mod('cf_hd_sch_bg_color'); ?> !important;
	   }

	   .bg-transparent .cf-hd-search .search-box input{
		   color:<?php echo get_theme_mod('cf_hd_sch_text_color'); ?> !important;
	   }
	   .bg-transparent .cf-hd-search .search-box input::placeholder {
		   color:<?php echo get_theme_mod('cf_hd_sch_text_color'); ?> !important;
	   }	   

	   .scroll-css .cf-main-menu>li>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_color_sky'); ?> !important;
	   }
	   
	   .scroll-css .cf-lan-menu>li>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_color_sky'); ?> !important;
	   }	   
	   .scroll-css .cf-main-menu>li>a:hover{
		   color:<?php echo get_theme_mod('cf_hd_menu_hvcolor_sky'); ?> !important;
	   }	
	    
	   
	   .scroll-css .cf-main-menu>li.active>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_hvcolor_sky'); ?> !important;
	   }	   
	   
	   .scroll-css .cf-main-menu .dropdown-menu{
		   background:<?php echo get_theme_mod('cf_hd_menu_drwbg_sky'); ?> !important;
	   }
	   
	   .scroll-css .cf-lan-menu .dropdown-menu{
		   background:<?php echo get_theme_mod('cf_hd_menu_drwbg_sky'); ?> !important;
	   }

	   .scroll-css .cf-main-menu .dropdown-menu li>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_drw_color_sky'); ?> !important;
	   }

	   .scroll-css .cf-lan-menu .dropdown-menu li>a{
		   color:<?php echo get_theme_mod('cf_hd_menu_drw_color_sky'); ?> !important;
	   }	   
	   
	   .scroll-css .cf-main-menu .dropdown-menu li>a:hover{
		   color:<?php echo get_theme_mod('cf_hd_menu_drw_hvcolor_sky'); ?> !important;
	   }

	   .scroll-css .cf-lan-menu .dropdown-menu li>a:hover{
		   color:<?php echo get_theme_mod('cf_hd_menu_drw_hvcolor_sky'); ?> !important;
	   }
	   
	   .scroll-css .cf-hd-search .fa-search{
		   color:<?php echo get_theme_mod('cf_hd_sch_icon_color_sky'); ?> !important;
	   }

	   .scroll-css .cf-hd-search .search-box{
		   background:<?php echo get_theme_mod('cf_hd_sch_bg_color_sky'); ?> !important;
	   }

	   .scroll-css .cf-hd-search .search-box input{
		   color:<?php echo get_theme_mod('cf_hd_sch_text_color_sky'); ?> !important;
	   }
	   .scroll-css .cf-hd-search .search-box input::placeholder {
		   color:<?php echo get_theme_mod('cf_hd_sch_text_color_sky'); ?> !important;
	   }

		header.menu-transparent.scroll-css > .navbar {
			background:<?php echo get_theme_mod('cf_hd_menu_bg_color_sky'); ?> !important;
		}

        .cf-footer .content,.cf-footer{
			background:<?php echo get_theme_mod('cf_footer_bg_clr'); ?> !important;
		}		

        .cf-footer h5{
			color:<?php echo get_theme_mod('cf_footer_title_clr'); ?> !important;
		}
		
        .cf-footer .textwidget,.cf-footer p,.cf-footer span,.cf-footer b{
			color:<?php echo get_theme_mod('cf_footer_text_clr'); ?> !important;
		}		
		
        .cf-footer a{
			color:<?php echo get_theme_mod('cf_footer_link_clr'); ?> !important;
		}	

        .cf-footer a:hover{
			color:<?php echo get_theme_mod('cf_footer_hvlink_clr'); ?> !important;
		}	

        .cf-footer .copy-text .textwidget{
			color:<?php echo get_theme_mod('cf_footer_cyright_clr'); ?> !important;
		}
		
		.cf-footer .copy-row{
			background:<?php echo get_theme_mod('cf_footer_cyright_bg_clr'); ?> !important;;
		}
		
		
		
	  @media all and (max-width:768px){
		
	  }	   
	</style>
	<?php
}
add_action( 'wp_head' , 'cf_theme_options_css' );


function eye_admin_custom_css() {
	?>
	<style type='text/css'>
		#customize-theme-controls .customize-control{
			width: 93%  ;
			background: #fff  ;
			padding: 10px  ;
			border-radius: 5px  ;
		    box-shadow: 0px 0px 10px 0px #ccc  ;
		}
		
		#customize-theme-controls .customize-control-title {
			font-size: 16px  ;
			color: #000  ;
		}
		
		.wp-core-ui select {
            border-color: #eee !important;
		}
		
		.customize-control input[type=number]{
			border-color: #eee !important;
		}
		
		input[type=color], input[type=date], input[type=datetime-local], input[type=datetime], input[type=email], input[type=month], input[type=number], input[type=password], input[type=search], input[type=tel], input[type=text], input[type=time], input[type=url], input[type=week], select, textarea {
			border-color: #eee !important;
		}		
		
		
	</style>
	<?php
}
add_action('customize_controls_print_styles', 'eye_admin_custom_css');

?>
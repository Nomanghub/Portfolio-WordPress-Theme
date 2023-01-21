<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function wsi_theme_section($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'wsi_section_bg_color' => '',
	 'wsi_section_bg_image' => '',
	 'wsi_section_bg_size' => '',
	 'wsi_section_bg_position' => '',
	 'wsi_section_bg_repeated' => '',
	 'wsi_section_bg_attachment' => '',
	 'wsi_section_overlay_color' => '',
	 'wsi_section_top_padding' => '',
	 'wsi_section_bottom_padding' => '',
	 'wsi_section_extra_id' => '',
	 'wsi_section_extra_class' => '',
	
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>



	<?php
         
		  $wsi_section_bg=wp_get_attachment_image_src($wsi_section_bg_image,'full');
	   
	?>


	<div id="<?php echo esc_html($wsi_section_extra_id); ?>" class="cf-section <?php echo esc_html($wsi_section_extra_class); ?>" style="background-color:<?php echo esc_html($wsi_section_bg_color); ?>;background-image:url('<?php if(isset($wsi_section_bg[0])): ?><?php echo esc_url($wsi_section_bg[0]); ?><?php endif; ?>');background-size:<?php echo esc_html($wsi_section_bg_size); ?>;background-position:<?php echo esc_html($wsi_section_bg_position); ?>;background-repeat:<?php echo esc_html($wsi_section_bg_repeated); ?>;background-attachment:<?php echo esc_html($wsi_section_bg_attachment); ?>;padding-top:<?php echo esc_html($wsi_section_top_padding); ?>;padding-bottom:<?php echo esc_html($wsi_section_bottom_padding); ?>;">
	   <div class="cf_section_overlay" style="background:<?php echo esc_html($wsi_section_overlay_color); ?>;"></div>
	     <div class="container">
		    <?php echo do_shortcode($content); ?>
		 </div>
	   
	</div>

<?php
 return ob_get_clean();

}

add_shortcode('vc_section', 'wsi_theme_section'); 


function cf_main_slider_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_main_slider_cate' => '',
	 'cf_main_slider_num' => '8',
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

<div class="section-slider home-slider">
	<div class="flexslider advanced-slider slider" data-options="animation:fade">
		<ul class="slides">
			<?php 
				 $cfmainslider = new WP_Query(array(
				 
					'post_type' => 'Mainslide',
					'slcategory' => $cf_main_slider_cate,
					'posts_per_page' => $cf_main_slider_num
				 
				 ));
		  
			?>				
			<?php while($cfmainslider->have_posts()) : $cfmainslider->the_post(); ?>
				<li data-slider-anima="fade-left">
					<div class="section-slide">
						<div class="bg-cover" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>')">
						</div>
						<div class="container">
							<div class="container-middle">
								<div class="container-inner text-left text-center-xs">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</div>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
</div>


<?php
 return ob_get_clean();

}

add_shortcode('cf_main_slider', 'cf_main_slider_show'); 


function cf_icon_box_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_icon_box_style' => '',
	 'cf_icon_box_title' => '',
	 'cf_icon_box_icon_class' => '',
	 'cf_icon_box_details' => '',
	 'cf_icon_box_btn_text' => '',
	 'cf_icon_box_btn_link' => '',
	 'cf_icon_box_price' => '',
	 'cf_icon_box_bg_color' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>


						

<?php if($cf_icon_box_style==1){?>

<div class="advs-box advs-box-top-icon" data-anima="scale-up" data-trigger="hover">
	<i class="<?php if(isset($cf_icon_box_icon_class)): ?> <?php echo esc_html($cf_icon_box_icon_class); ?><?php endif; ?> icon circle anima"></i>
	<h3><?php if(isset($cf_icon_box_title)): ?> <?php echo esc_html($cf_icon_box_title); ?><?php endif; ?></h3>
	<p><?php if(isset($cf_icon_box_details)): ?> <?php echo esc_html($cf_icon_box_details); ?><?php endif; ?></p>
</div>

<?php } elseif($cf_icon_box_style==2){?>

<div class="advs-box advs-box-side-icon" data-anima="scale-up" data-trigger="hover">
	<div class="icon-box">
		<i class="<?php if(isset($cf_icon_box_icon_class)): ?> <?php echo esc_html($cf_icon_box_icon_class); ?><?php endif; ?> icon anima" aid="0.5348536460795474" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
	</div>
	<div class="caption-box">
		<h3><?php if(isset($cf_icon_box_title)): ?> <?php echo esc_html($cf_icon_box_title); ?><?php endif; ?></h3>
		<p><?php if(isset($cf_icon_box_details)): ?> <?php echo esc_html($cf_icon_box_details); ?><?php endif; ?></p>
	</div>
</div>	

<?php } elseif($cf_icon_box_style==3){?>
<div class="advs-box advs-box-top-icon boxed white" data-anima="rotate-20" data-trigger="hover" style="background:<?php if(isset($cf_icon_box_bg_color)): ?> <?php echo esc_html($cf_icon_box_bg_color); ?><?php endif; ?>;">
	<i class="<?php if(isset($cf_icon_box_icon_class)): ?> <?php echo esc_html($cf_icon_box_icon_class); ?><?php endif; ?> icon circle anima" aid="0.9564748056045187" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
	<h3><?php if(isset($cf_icon_box_title)): ?> <?php echo esc_html($cf_icon_box_title); ?><?php endif; ?></h3>
	<?php if($cf_icon_box_price!=null){?>
	   <span class="extra-content"><?php if(isset($cf_icon_box_price)): ?><?php echo esc_html($cf_icon_box_price); ?><?php endif; ?></span>	
	<?php } ?>
	<p><?php if(isset($cf_icon_box_details)): ?> <?php echo esc_html($cf_icon_box_details); ?><?php endif; ?></p>
	
	<?php if($cf_icon_box_btn_text!=null){ ?>
		<?php
		  
		  $cf_iconlink = vc_build_link( $cf_icon_box_btn_link );
			
			if($cf_iconlink) : ?>
			
			  <a class="btn-text" href="<?php echo ($cf_iconlink['url']); ?>" target="<?php echo ($cf_iconlink['target']); ?>"><?php if(isset($cf_icon_box_btn_text)): ?> <?php echo esc_html($cf_icon_box_btn_text); ?><?php endif; ?></a>
			 
			<?php else : ?>	
			
		<?php endif; ?>		
    <?php } ?>

</div>
<?php } else{?>

<div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover" style="background:<?php if(isset($cf_icon_box_bg_color)): ?> <?php echo esc_html($cf_icon_box_bg_color); ?><?php endif; ?>;">
	<i class="<?php if(isset($cf_icon_box_icon_class)): ?> <?php echo esc_html($cf_icon_box_icon_class); ?><?php endif; ?> icon circle anima" aid="0.587475629057951" style="position: relative; animation-duration: 500ms; transition-timing-function: ease; transition-delay: 0ms;"></i>
	<h3><?php if(isset($cf_icon_box_title)): ?> <?php echo esc_html($cf_icon_box_title); ?><?php endif; ?></h3>
	<p><?php if(isset($cf_icon_box_details)): ?> <?php echo esc_html($cf_icon_box_details); ?><?php endif; ?></p>
	
	<?php

	  $cf_iconlink = vc_build_link( $cf_icon_box_btn_link );
		
		if($cf_iconlink) : ?>
		
		  <a class="btn-text" href="<?php echo ($cf_iconlink['url']); ?>" target="<?php echo ($cf_iconlink['target']); ?>"><?php if(isset($cf_icon_box_btn_text)): ?> <?php echo esc_html($cf_icon_box_btn_text); ?><?php endif; ?></a>
		 
		<?php else : ?>	
		
	<?php endif; ?>			
</div>
 
<?php } ?>	

<?php
 return ob_get_clean();

}

add_shortcode('cf_icon_box', 'cf_icon_box_show'); 


function cf_icon_list_item_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_icon_list_style' => '',
	 'cf_icon_list_loop' => '',
	 'cf_icon_list_loop_title' => '',
	 'cf_icon_list_loop_class' => '',
	 'cf_icon_list_loop_link' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

<?php 

if($cf_icon_list_style==1){?>
<ul class="fa-ul">
	<?php
	  $cf_iconlistoo=vc_param_group_parse_atts($cf_icon_list_loop); 
	  if(isset($cf_iconlistoo)){
	  foreach($cf_iconlistoo as $cficonloo_value){?>	
	  <li><i class="fa-li <?php if(isset($cficonloo_value['cf_icon_list_loop_class'])): ?><?php echo esc_html($cficonloo_value['cf_icon_list_loop_class']); ?><?php endif; ?>"></i> <?php if(isset($cficonloo_value['cf_icon_list_loop_title'])): ?><?php echo esc_html($cficonloo_value['cf_icon_list_loop_title']); ?><?php endif; ?></li>			
	<?php } }
	 
	  ?>	
</ul>
<?php } else{?>

<div class="cf-icon-list-style2">
	<?php
	      
		  $cf_iconlistoo=vc_param_group_parse_atts($cf_icon_list_loop); 
		  if(isset($cf_iconlistoo)){
		  foreach($cf_iconlistoo as $cficonloo_value){?>
		    <?php if(isset($cficonloo_value['cf_icon_list_loop_link'])){?>
				<?php
				  $cf_ilistlin = vc_build_link($cficonloo_value['cf_icon_list_loop_link']);
					if($cf_ilistlin) : ?>
					
					   <a href="<?php echo ($cf_ilistlin['url']); ?>" target="<?php echo ($cf_ilistlin['target']); ?>" class="btn-text"><i class="<?php if(isset($cficonloo_value['cf_icon_list_loop_class'])): ?><?php echo esc_html($cficonloo_value['cf_icon_list_loop_class']); ?><?php endif; ?>"></i> <?php if(isset($cficonloo_value['cf_icon_list_loop_title'])): ?><?php echo esc_html($cficonloo_value['cf_icon_list_loop_title']); ?><?php endif; ?></a><hr class="space xs">	
					 
					<?php else : ?>	
					
				<?php endif; ?>				
				
			<?php } ?>

			
	<?php } }
	 
	  ?>
</div>
	
<?php } ?>    
		

<?php
 return ob_get_clean();

}

add_shortcode('cf_icon_list', 'cf_icon_list_item_show'); 


function cf_faqs_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_faqs_group' => '',
	 'cf_faqs_title' => '',
	 'cf_faqs_details' => '',
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>


<!-- Faq Section Start -->
<div class="list-group accordion-list" data-time="1000" data-type="accordion">
	<?php

	  $cffaqs_key=vc_param_group_parse_atts($cf_faqs_group); 
	  if(isset($cffaqs_key)){
	  foreach($cffaqs_key as $faqs_values){?>
			<div class="list-group-item">
				<a><?php if(isset($faqs_values['cf_faqs_title'])): ?><?php echo esc_html($faqs_values['cf_faqs_title']); ?><?php endif; ?></a>
				<div class="panel">
				    <?php if(isset($faqs_values['cf_faqs_details'])){?>
						<div class="inner">
							<?php

							  $cffaqsds= rawurldecode( base64_decode( strip_tags( $faqs_values['cf_faqs_details'] ) ) );
								
								if($cffaqsds) : ?>
								
								 <?php echo do_shortcode($cffaqsds); ?>
								 
								<?php else : ?>	
								
							<?php endif; ?>
						</div>
					<?php } ?>
				</div>
			</div>
	  <?php } }
	 
	  ?>
</div>
<!-- Faq Section End -->
<?php
 return ob_get_clean();

}

add_shortcode('cf_theme_faqs', 'cf_faqs_show'); 


function cf_main_title_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_main_sec_title' => '',
	 'cf_main_sec_subtitle' => '',
	 'cf_main_title_color_st' => '',
	 'cf_main_subtitle_color_st' => '',
	 'cf_main_subtitle_margin_st' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

<div class="title-base" style="margin:<?php if(isset($cf_main_subtitle_margin_st)): ?><?php echo esc_html($cf_main_subtitle_margin_st); ?><?php endif; ?>;">
	<hr>
	<h2 style="color:<?php if(isset($cf_main_title_color_st)): ?><?php echo esc_html($cf_main_title_color_st); ?><?php endif; ?>"><?php if(isset($cf_main_sec_title)): ?><?php echo esc_html($cf_main_sec_title); ?><?php endif; ?></h2>
	<p style="color:<?php if(isset($cf_main_subtitle_color_st)): ?><?php echo esc_html($cf_main_subtitle_color_st); ?><?php endif; ?>"><?php if(isset($cf_main_sec_subtitle)): ?><?php echo esc_html($cf_main_sec_subtitle); ?><?php endif; ?></p>
</div>
<?php
 return ob_get_clean();

}

add_shortcode('cf_main_title', 'cf_main_title_show'); 

function cf_img_box_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_img_banner_bg_img' => '',
	 'cf_img_banner_title' => '',
	 'cf_img_banner_details' => '',
	 'cf_img_banner_btn_title' => '',
	 'cf_img_banner_btn_link' => '',
	 'cf_img_banner_bg_color' => '',
	
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

	<?php

	  $cf_imgbbgi=wp_get_attachment_image_src($cf_img_banner_bg_img,'full');

	?>

<div class="advs-box advs-box-top-icon-img boxed-inverse" style="background:<?php if(isset($cf_img_banner_bg_color)): ?><?php echo esc_html($cf_img_banner_bg_color); ?><?php endif; ?>;">

		<?php

		  $cf_imgblink = vc_build_link( $cf_img_banner_btn_link );
			
			if($cf_imgblink) : ?>
			  	<a class="img-box img-scale-up" href="<?php echo ($cf_imgblink['url']); ?>" target="<?php echo ($cf_imgblink['target']); ?>">
					<span><img src="<?php if(isset($cf_imgbbgi[0])): ?><?php echo esc_url($cf_imgbbgi[0]); ?><?php endif; ?>" alt="<?php if(isset($cf_img_banner_title)): ?><?php echo esc_html($cf_img_banner_title); ?><?php endif; ?>"></span>
				</a>
			 
			<?php else : ?>	
				
		<?php endif; ?>
	<div class="advs-box-content">
		<h3><?php if(isset($cf_img_banner_title)): ?><?php echo esc_html($cf_img_banner_title); ?><?php endif; ?></h3>
		<p><?php if(isset($cf_img_banner_details)): ?><?php echo esc_html($cf_img_banner_details); ?><?php endif; ?></p>
		
		<?php

		  $cf_imgblink = vc_build_link( $cf_img_banner_btn_link );
			
			if($cf_imgblink) : ?>
			  <a class="btn-text" href="<?php echo ($cf_imgblink['url']); ?>" target="<?php echo ($cf_imgblink['target']); ?>"><?php if(isset($cf_img_banner_btn_title)): ?><?php echo esc_html($cf_img_banner_btn_title); ?><?php endif; ?></a>
			 
			<?php else : ?>	
				
		<?php endif; ?>
	</div>
</div>
							   

<?php
 return ob_get_clean();

}

add_shortcode('cf_image_box', 'cf_img_box_show'); 

function cf_portfolio_grid_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_portfolio_grid_loop' => '',
	 'cf_portfolio_grid_loop_title' => '',
	 'cf_portfolio_grid_loop_img' => '',
	 'cf_portfolio_grid_loop_details' => '',
	 'cf_portfolio_grid_loop_link' => '',
	 'cf_portfolio_grid_loop_animation' => '',
	 'cf_portfolio_grid_loop_class' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>



<div class="maso-list">
	<div class="maso-box row no-margins" data-lightbox-anima="fade-top">	
	<?php
	  $cf_portgridite=vc_param_group_parse_atts($cf_portfolio_grid_loop); 
	  if(isset($cf_portgridite)){
	  foreach($cf_portgridite as $portgridite_values){?>
		<div class="maso-item col-md-3 row-14 <?php if(isset($portgridite_values['cf_portfolio_grid_loop_class'])): ?><?php echo esc_html($portgridite_values['cf_portfolio_grid_loop_class']); ?><?php endif; ?>">
			<div class="img-box adv-img adv-img-full-content" data-anima="fade-<?php if(isset($portgridite_values['cf_portfolio_grid_loop_animation'])): ?><?php echo esc_html($portgridite_values['cf_portfolio_grid_loop_animation']); ?><?php endif; ?>" data-trigger="hover" data-anima-out="hide">
			    <?php if(isset($portgridite_values['cf_portfolio_grid_loop_link'])){?>
					<?php

					  $cf_portgridlink = vc_build_link($portgridite_values['cf_portfolio_grid_loop_link']);
						
						if($cf_portgridlink) : ?>
						
						  <a href="<?php echo ($cf_portgridlink['url']); ?>" target="<?php echo ($cf_portgridlink['target']); ?>" class="img-box anima-scale-up anima">
						 
						<?php else : ?>	
						
					<?php endif; ?>	
                <?php } ?>					
				<?php if(isset($portgridite_values['cf_portfolio_grid_loop_img'])){?>
					<?php

					  $cf_portgridim=wp_get_attachment_image_src($portgridite_values['cf_portfolio_grid_loop_img'],'full');
						
						if($cf_portgridim) : ?>
						  <img src="<?php if(isset($cf_portgridim[0])): ?><?php echo esc_url($cf_portgridim[0]); ?><?php endif; ?>" alt="<?php if(isset($portgridite_values['cf_portfolio_grid_loop_title'])): ?><?php echo esc_html($portgridite_values['cf_portfolio_grid_loop_title']); ?><?php endif; ?>">
						<?php else : ?>	
						
					<?php endif; ?>	
                <?php } ?>					
				</a>
				<div class="caption-bg anima">
					<div class="caption">
						<div class="inner">
							<i class="im-camera-2  main-icon anima"></i>
							<h2><?php if(isset($portgridite_values['cf_portfolio_grid_loop_title'])): ?><?php echo esc_html($portgridite_values['cf_portfolio_grid_loop_title']); ?><?php endif; ?></h2>
							<p><?php if(isset($portgridite_values['cf_portfolio_grid_loop_details'])): ?><?php echo esc_html($portgridite_values['cf_portfolio_grid_loop_details']); ?><?php endif; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	 <?php } }
	 
	  ?>		
	</div>
</div>
<!-- Project Section End -->


<?php
 return ob_get_clean();

}

add_shortcode('cf_portfolio_grid', 'cf_portfolio_grid_show'); 


function cf_blog_post_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_blog_post_cat' => '',
	 'cf_blog_post_num' => '8',
	 'cf_blog_post_color' => '',
	
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

<div class="row">
	<?php 
		 $cfpostlist = new WP_Query(array(
		 
			'post_type' => 'post',
			'category_name' => $cf_blog_post_cat,
			'posts_per_page' => $cf_blog_post_num,
		 
		 ));
  
	?>								

	<?php while($cfpostlist->have_posts()) : $cfpostlist->the_post(); ?>				
	<div class="col-md-4">
		<div class="advs-box advs-box-top-icon-img niche-box-post boxed-inverse" data-anima="scale-rotate" data-trigger="hover" style="background:<?php if(isset($cf_blog_post_color)): ?><?php echo esc_html($cf_blog_post_color); ?><?php endif; ?>;">
			<div class="block-infos">
				<div class="block-data">
					<p class="bd-day"><?php the_time('j'); ?></p>
					<p class="bd-month"><?php the_time('M Y'); ?></p>
				</div>
			</div>
			<a href="<?php the_permalink(); ?>" class="img-box">
				<?php
				  $cf_featured_img=wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
				?>
				<?php if($cf_featured_img!=null){?>
					<img class="anima" src="<?php echo $cf_featured_img;?>" alt="<?php the_title(); ?>" />
				<?php }else{?>
				   <img class="anima" src="<?php echo get_template_directory_uri(); ?>/screenshot.png" alt="<?php the_title(); ?>" />
				<?php } ?>				
			</a>
			<div class="advs-box-content">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="tag-row">
					<span><i class="fa fa-bookmark"></i> <?php cf_blog_cate();?></span>
					<span><i class="fa fa-pencil"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
				</div>
				<p class="niche-box-content">
					<?php echo wp_trim_words(get_the_excerpt(), 20); ?>
				</p>
				<a class="anima-button circle-button btn btn-sm" href="<?php the_permalink(); ?>">Read more</a>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
	
</div>
<?php
 return ob_get_clean();

}

add_shortcode('cf_blog_post', 'cf_blog_post_show'); 

function cf_testimonial_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_testimonial_sec_bg_img' => '',
	 'cf_testimonial_video_link' => '',
	 'cf_testimonial_bgs_color' => '',
	 'cf_testimonial_loop' => '',
	 'cf_testimonial_loop_name' => '',
	 'cf_testimonial_loop_position' => '',
	 'cf_testimonial_loop_details' => '',
	 'cf_testimonial_loop_clt_img' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>


<?php
  $cf_testi_secimg=wp_get_attachment_image_src($cf_testimonial_sec_bg_img,'full');
?>

<!-- Testimonial Section Start -->
<div class="section-bg-video overlay-container">
	<div class="videobox">
		<video autoplay loop muted poster="<?php if(isset($cf_testi_secimg[0])): ?><?php echo esc_url($cf_testi_secimg[0]); ?><?php endif; ?>" style="background-color:<?php if(isset($cf_testimonial_bgs_color)): ?><?php echo esc_html($cf_testimonial_bgs_color); ?><?php endif; ?>;">
			<source src="<?php if(isset($cf_testimonial_video_link)): ?><?php echo esc_html($cf_testimonial_video_link); ?><?php endif; ?>" type="video/mp4">
		</video>
	</div>
	<div class="container content overlay-content text-center">
		<hr class="space" />
		<div class="row">
			<div class="col-md-8 col-center">
				<div class="flexslider slider outer-navs visible-dir-nav" data-options="minWidth:150,itemMargin:30,controlNav:false">
					<ul class="slides">
						<?php
						  $cf_testilall=vc_param_group_parse_atts($cf_testimonial_loop); 
						  if(isset($cf_testilall)){
						  foreach($cf_testilall as $cftesti_value){?>		
							   <li>
									<div class="advs-box advs-box-top-icon niche-box-testimonails">
										<?php
											if(isset($cf_testimonial_loop_clt_img))
											  $cftesti_lopbgimg=wp_get_attachment_image_src($cftesti_value['cf_testimonial_loop_clt_img'],'full');   
										?>
										<i class="fa text-xl circle onlycover" style="background-image:url('<?php if(isset($cftesti_lopbgimg[0])): ?><?php echo esc_url($cftesti_lopbgimg[0]); ?><?php endif; ?>')"></i>
										<p><?php if(isset($cftesti_value['cf_testimonial_loop_details'])): ?><?php echo esc_html($cftesti_value['cf_testimonial_loop_details']); ?><?php endif; ?></p>
										<h5><?php if(isset($cftesti_value['cf_testimonial_loop_name'])): ?><?php echo esc_html($cftesti_value['cf_testimonial_loop_name']); ?><?php endif; ?> <span><?php if(isset($cftesti_value['cf_testimonial_loop_position'])): ?><?php echo esc_html($cftesti_value['cf_testimonial_loop_position']); ?><?php endif; ?></span></h5>
									</div>
								</li>
						<?php } }
						 
						  ?>					
			
					</ul>
				</div>
			</div>
		</div>
		<hr class="space" />
	</div>
</div>




<?php
 return ob_get_clean();

}

add_shortcode('cf_testimonial', 'cf_testimonial_show'); 


function cf_services_slider_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_services_bgs_color' => '',
	 'cf_services_loop' => '',
	 'cf_service_loop_title' => '',
	 'cf_service_loop_icon_class' => '',
	 'cf_service_loop_details' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

<div class="flexslider carousel nav-inner outer-navs" data-options="numItems:4,minWidth:200,itemMargin:30">
	<ul class="slides">
		<?php
		  $cf_serslide=vc_param_group_parse_atts($cf_services_loop); 
		  if(isset($cf_serslide)){
		  foreach($cf_serslide as $cfservi_value){?>		
			<li>
				<div class="advs-box advs-box-top-icon boxed-inverse" data-anima="rotate-20" data-trigger="hover" style="background:<?php if(isset($cfservi_value['cf_services_bgs_color'])): ?><?php echo esc_html($cfservi_value['cf_services_bgs_color']); ?><?php endif; ?>;">
					<i class="<?php if(isset($cfservi_value['cf_service_loop_icon_class'])): ?><?php echo esc_html($cfservi_value['cf_service_loop_icon_class']); ?><?php endif; ?> icon circle anima"></i>
					<h3><?php if(isset($cfservi_value['cf_service_loop_title'])): ?><?php echo esc_html($cfservi_value['cf_service_loop_title']); ?><?php endif; ?></h3>
					<p><?php if(isset($cfservi_value['cf_service_loop_details'])): ?><?php echo esc_html($cfservi_value['cf_service_loop_details']); ?><?php endif; ?></p>
				</div>
			</li>
		<?php } }
		 
		  ?>					
	</ul>
</div>

<?php
 return ob_get_clean();

}

add_shortcode('cf_services_slider', 'cf_services_slider_show'); 


function cf_countdown_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_countdown_bgs_img' => '',
	 'cf_countdown_bgs_color' => '',
	 'cf_countdown_loop' => '',
	 'cf_countdown_loop_title' => '',
	 'cf_countdown_loop_num' => '',
	 'cf_countdown_loop_title_color' => '',
	 'cf_countdown_loop_num_color' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

	<?php

	  $cfcount_bg=wp_get_attachment_image_src($cf_countdown_bgs_img,'full');

	?>

<div class="section-bg-image parallax-window white" data-natural-height="800" data-natural-width="1920" data-parallax="scroll" data-image-src="<?php if(isset($cfcount_bg[0])): ?><?php echo esc_url($cfcount_bg[0]); ?><?php endif; ?>" style="background:<?php if(isset($cf_countdown_bgs_color)): ?><?php echo esc_html($cf_countdown_bgs_color); ?><?php endif; ?>">
	<div class="container content">
		<div class="row">
		<?php
		  $cf_ctdwonst=vc_param_group_parse_atts($cf_countdown_loop); 
		  if(isset($cf_ctdwonst)){
		  foreach($cf_ctdwonst as $cfcoutt_value){?>		
			<div class="col-md-3">
				<div class="icon-box icon-box-top-bottom counter-box-icon">
					<div class="icon-box-cell">
						<b><label class="counter text-xl" data-speed="5000" data-to="<?php if(isset($cfcoutt_value['cf_countdown_loop_num'])): ?><?php echo esc_html($cfcoutt_value['cf_countdown_loop_num']); ?><?php endif; ?>" style="color:<?php if(isset($cfcoutt_value['cf_countdown_loop_num_color'])): ?><?php echo esc_html($cfcoutt_value['cf_countdown_loop_num_color']); ?><?php endif; ?> !important;"><?php if(isset($cfcoutt_value['cf_countdown_loop_num'])): ?><?php echo esc_html($cfcoutt_value['cf_countdown_loop_num']); ?><?php endif; ?></label></b>
						<p class="text-s" style="color:<?php if(isset($cfcoutt_value['cf_countdown_loop_title_color'])): ?><?php echo esc_html($cfcoutt_value['cf_countdown_loop_title_color']); ?><?php endif; ?> !important;"><?php if(isset($cfcoutt_value['cf_countdown_loop_title'])): ?><?php echo esc_html($cfcoutt_value['cf_countdown_loop_title']); ?><?php endif; ?></p>
					</div>
				</div>
			</div>
		<?php } }
		 
		  ?>					
		</div>
	</div>
</div>

<?php
 return ob_get_clean();

}

add_shortcode('cf_countdown', 'cf_countdown_show'); 



function cf_portfolio_tabs_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_portfolio_slider_cate_loop' => '',
	 'cf_portfolio_slider_cate_name' => '',
	 'cf_portfolio_slider_cate_id' => '',
	 'cf_portfolio_slider_port_loop' => '',
	 'cf_portfolio_slider_port_title' => '',
	 'cf_portfolio_slider_port_img' => '',
	 'cf_portfolio_slider_port_details' => '',
	 'cf_portfolio_slider_port_id' => '',
	 'cf_portfolio_slider_port_link' => '',
	 'cf_portfolio_tabs_loop_animation' => '',
	 'cf_portfolio_slider_sortd_num' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>


<div class="maso-list list-sm-6">
	<div class="navbar navbar-inner">
		<div class="navbar-toggle"><i class="fa fa-bars"></i><span>Menu</span><i class="fa fa-angle-down"></i></div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav nav-center over ms-rounded inner maso-filters">
				<li class="current-active active"><a data-filter="maso-item">All</a></li>
				<?php
				  $cf_prslcate=vc_param_group_parse_atts($cf_portfolio_slider_cate_loop); 
				  if(isset($cf_prslcate)){
				  foreach($cf_prslcate as $prslcate_values){?>							
					<li><a data-filter="<?php if(isset($prslcate_values['cf_portfolio_slider_cate_id'])): ?><?php echo esc_html($prslcate_values['cf_portfolio_slider_cate_id']); ?><?php endif; ?>"><?php if(isset($prslcate_values['cf_portfolio_slider_cate_name'])): ?><?php echo esc_html($prslcate_values['cf_portfolio_slider_cate_name']); ?><?php endif; ?></a></li>
				 <?php } }
				 
				  ?>                           
				<li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>
			</ul>
		</div>
	</div>
	<div class="maso-box row" data-lightbox-anima="fade-top">
	
	<?php
	  $cf_portslidit=vc_param_group_parse_atts($cf_portfolio_slider_port_loop); 
	  if(isset($cf_portslidit)){
	  foreach($cf_portslidit as $portslidit_values){?>				
		<div data-sort="<?php if(isset($portslidit_values['cf_portfolio_slider_sortd_num'])): ?><?php echo esc_html($portslidit_values['cf_portfolio_slider_sortd_num']); ?><?php endif; ?>" class="maso-item col-md-4 row-12 <?php if(isset($portslidit_values['cf_portfolio_slider_port_id'])): ?><?php echo esc_html($portslidit_values['cf_portfolio_slider_port_id']); ?><?php endif; ?>">
			<div class="img-box adv-img adv-img-full-content" data-anima="fade-<?php if(isset($portslidit_values['cf_portfolio_tabs_loop_animation'])): ?><?php echo esc_html($portslidit_values['cf_portfolio_tabs_loop_animation']); ?><?php endif; ?>" data-trigger="hover" data-anima-out="hide">
			<?php if(isset($portslidit_values['cf_portfolio_slider_port_link'])){?>
				<?php

				  $cf_porttabslink = vc_build_link($portslidit_values['cf_portfolio_slider_port_link']);
					
					if($cf_porttabslink) : ?>
					
					  <a href="<?php echo ($cf_porttabslink['url']); ?>" target="<?php echo ($cf_porttabslink['target']); ?>" class="img-box">
					 
					<?php else : ?>	
					
				<?php endif; ?>	
			<?php } ?>	
					<?php
						if(isset($cf_portfolio_slider_port_img))
						  $cf_porttigms=wp_get_attachment_image_src($portslidit_values['cf_portfolio_slider_port_img'],'full');   
					?>							
					<img src="<?php if(isset($cf_porttigms[0])): ?><?php echo esc_url($cf_porttigms[0]); ?><?php endif; ?>" alt="<?php if(isset($portslidit_values['cf_portfolio_slider_port_title'])): ?><?php echo esc_html($portslidit_values['cf_portfolio_slider_port_title']); ?><?php endif; ?>">
				</a>
				<div class="caption-bg anima">
					<div class="caption">
						<div class="inner">
							<h2><?php if(isset($portslidit_values['cf_portfolio_slider_port_title'])): ?><?php echo esc_html($portslidit_values['cf_portfolio_slider_port_title']); ?><?php endif; ?></h2>
							<p><?php if(isset($portslidit_values['cf_portfolio_slider_port_details'])): ?><?php echo esc_html($portslidit_values['cf_portfolio_slider_port_details']); ?><?php endif; ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
   <?php } }
 
   ?>	
	   <div class="clear"></div>
	</div>
	<div class="list-nav">
		<a href="#" class="btn btn-sm load-more-maso" data-pagination-anima="fade-bottom" data-page-items="6">
			Load More
			<i class="fa fa-arrow-down"></i>
		</a>
	</div>
</div>


<?php
 return ob_get_clean();

}

add_shortcode('cf_portfolio_tabs', 'cf_portfolio_tabs_show'); 


function cf_pricing_table_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_pricing_table_title' => '',
	 'cf_pricing_table_price' => '',
	 'cf_pricing_table_price_currcy' => '',
	 'cf_pricing_table_btn_text' => '',
	 'cf_pricing_table_btn_link' => '',
	 'cf_pricing_table_bg_color' => '',
	 'cf_pricing_table_loop' => '',
	 'cf_pricing_table_loop_title' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

<div class="list-group pricing-table" style="background:<?php if(isset($cf_pricing_table_bg_color)): ?><?php echo esc_html($cf_pricing_table_bg_color); ?><?php endif; ?>">
	<div class="list-group-item pricing-price">
		<?php if(isset($cf_pricing_table_price)): ?><?php echo esc_html($cf_pricing_table_price); ?><?php endif; ?> <span><?php if(isset($cf_pricing_table_price_currcy)): ?><?php echo esc_html($cf_pricing_table_price_currcy); ?><?php endif; ?></span>
	</div>
	<div class="list-group-item pricing-name">
		<h3><?php if(isset($cf_pricing_table_title)): ?><?php echo esc_html($cf_pricing_table_title); ?><?php endif; ?></h3>
	</div>
	<?php
	  $cf_priceloops=vc_param_group_parse_atts($cf_pricing_table_loop); 
	  if(isset($cf_priceloops)){
	  foreach($cf_priceloops as $cfpriceson_value){?>				
		<div class="list-group-item">
			<?php if(isset($cfpriceson_value['cf_pricing_table_loop_title'])): ?><?php echo esc_html($cfpriceson_value['cf_pricing_table_loop_title']); ?><?php endif; ?>
		</div>
	<?php } }
	 
	  ?>			
	<div class="list-group-item">
		<?php

		  $cf_priceslink = vc_build_link( $cf_pricing_table_btn_link );
			
			if($cf_priceslink) : ?>
			  <a class="btn btn-sm btn-default" href="<?php echo ($cf_priceslink['url']); ?>" target="<?php echo ($cf_priceslink['target']); ?>"><?php if(isset($cf_pricing_table_btn_text)): ?><?php echo esc_html($cf_pricing_table_btn_text); ?><?php endif; ?></a>
			 
			<?php else : ?>	
				
		<?php endif; ?>			
	
		
	</div>
</div>

<?php
 return ob_get_clean();

}

add_shortcode('cf_pricing_table', 'cf_pricing_table_show'); 



function cf_gallery_slider_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_gallery_slider_loop' => '',
	 'cf_gallery_slider_loop_title' => '',
	 'cf_gallery_slider_loop_img' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>

<div class="flexslider carousel nav-inner nav-middle-mobile" data-options="">
	<ul class="slides">
	
	<?php
	  $cfgallery_lopi=vc_param_group_parse_atts($cf_gallery_slider_loop); 
	  if(isset($cfgallery_lopi)){
	  foreach($cfgallery_lopi as $cfgallery_values){?>			
		<li>
			<?php if(isset($cfgallery_values['cf_gallery_slider_loop_img'])){?>			
			
				<?php

				  $cf_gayslideimg=wp_get_attachment_image_src($cfgallery_values['cf_gallery_slider_loop_img'],'full');
					
					if($cf_gayslideimg) : ?>
						<a class="img-box lightbox" href="<?php if(isset($cf_gayslideimg[0])): ?><?php echo esc_url($cf_gayslideimg[0]); ?><?php endif; ?>" data-lightbox-anima="show-scale">
							<img src="<?php if(isset($cf_gayslideimg[0])): ?><?php echo esc_url($cf_gayslideimg[0]); ?><?php endif; ?>" alt="<?php if(isset($cfgallery_values['cf_gallery_slider_loop_title'])): ?><?php echo esc_html($cfgallery_values['cf_gallery_slider_loop_title']); ?><?php endif; ?>"> 
						</a>						  
					<?php else : ?>	
					
				<?php endif; ?>					
			
			<?php } ?>	
		</li>
   <?php } }
 
   ?>		   
	</ul>
</div>

<?php
 return ob_get_clean();

}

add_shortcode('cf_gallery_slider', 'cf_gallery_slider_show'); 



function cf_image_carousel_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_image_carousel_loop' => '',
	 'cf_image_carousel_loop_title' => '',
	 'cf_image_carousel_loop_img' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>
<div class="flexslider slider nav-inner" data-options="directionNav:false">
	<ul class="slides">
		<?php
		  $cfloop_carousel=vc_param_group_parse_atts($cf_image_carousel_loop); 
		  if(isset($cfloop_carousel)){
		  foreach($cfloop_carousel as $cfcarousel_values){?>			
			<li>
				<?php if(isset($cfcarousel_values['cf_image_carousel_loop_img'])){?>			
				
					<?php

					  $cf_carsoimgs=wp_get_attachment_image_src($cfcarousel_values['cf_image_carousel_loop_img'],'full');
						
						if($cf_carsoimgs) : ?>
							<a class="img-box" data-lightbox-anima="show-scale" href="#">
								<img src="<?php if(isset($cf_carsoimgs[0])): ?><?php echo esc_url($cf_carsoimgs[0]); ?><?php endif; ?>" alt="<?php if(isset($cfcarousel_values['cf_image_carousel_loop_title'])): ?><?php echo esc_html($cfcarousel_values['cf_image_carousel_loop_title']); ?><?php endif; ?>"> 
							</a>						  
						<?php else : ?>	
						
					<?php endif; ?>					
				
				<?php } ?>	
			</li>
	   <?php } }
	 
	   ?>		
		
	</ul>
</div>
<?php
 return ob_get_clean();

}

add_shortcode('cf_image_carousel', 'cf_image_carousel_show'); 



function cf_table_icon_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_table_icon_loop' => '',
	 'cf_table_icon_loop_title' => '',
	 'cf_table_icon_class' => '',
	 'cf_table_icon_details' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>
<table class="grid-table border-table fade-bottom" data-anima="" data-time="600" aid="0.5775169476766855" style="position: relative; animation-duration: 600ms; transition-timing-function: ease; transition-delay: 0ms;">
	<tbody>
		<tr>
		<?php
		  $cftable_iconloop=vc_param_group_parse_atts($cf_table_icon_loop); 
		  if(isset($cftable_iconloop)){
		  foreach($cftable_iconloop as $cftable_iconvalues){?>		
			<td>
				<div class="icon-box icon-box-top-bottom">
					<div class="icon-box-cell">
						<i class="<?php if(isset($cftable_iconvalues['cf_table_icon_class'])): ?><?php echo esc_html($cftable_iconvalues['cf_table_icon_class']); ?><?php endif; ?> text-xl"></i>
					</div>
					<div class="icon-box-cell">
						<label class=""><?php if(isset($cftable_iconvalues['cf_table_icon_loop_title'])): ?><?php echo esc_html($cftable_iconvalues['cf_table_icon_loop_title']); ?><?php endif; ?></label>
						<p class="text-s"><?php if(isset($cftable_iconvalues['cf_table_icon_details'])): ?><?php echo esc_html($cftable_iconvalues['cf_table_icon_details']); ?><?php endif; ?></p>
					</div>
				</div>
			</td>
	   <?php } }
	 
	   ?>			
		</tr>
	</tbody>
</table>
<?php
 return ob_get_clean();

}

add_shortcode('cf_table_icon', 'cf_table_icon_show'); 



function cf_button_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_button_text' => '',
	 'cf_button_alignment' => '',
	 'cf_button_link' => '',
	 'cf_button_width' => '',
	 'cf_button_bg_color' => '',
	 'cf_button_text_color' => '',
	 'cf_button_bg_hvcolor' => '',
	 'cf_button_text_hvcolor' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>
<div class="cf_btn" style="text-align:<?php if(isset($cf_button_alignment)): ?><?php echo esc_html($cf_button_alignment); ?><?php endif; ?>;">
<style type="text/css">
   .cf-btn-link:hover{
	   background:<?php if(isset($cf_button_bg_hvcolor)): ?><?php echo esc_html($cf_button_bg_hvcolor); ?><?php endif; ?> !important;
	   color:<?php if(isset($cf_button_text_hvcolor)): ?><?php echo esc_html($cf_button_text_hvcolor); ?><?php endif; ?> !important;
   }
</style>
	<?php

	  $cf_btnsslink = vc_build_link( $cf_button_link );
		
		if($cf_btnsslink) : ?>
		  <a href="<?php echo ($cf_btnsslink['url']); ?>" target="<?php echo ($cf_btnsslink['target']); ?>" class="cf-btn-link circle-button btn btn-xs nav-justified" style="background:<?php if(isset($cf_button_bg_color)): ?><?php echo esc_html($cf_button_bg_color); ?><?php endif; ?>;color:<?php if(isset($cf_button_text_color)): ?><?php echo esc_html($cf_button_text_color); ?><?php endif; ?>;width:<?php if(isset($cf_button_width)): ?><?php echo esc_html($cf_button_width); ?><?php endif; ?>;"><?php if(isset($cf_button_text)): ?><?php echo esc_html($cf_button_text); ?><?php endif; ?></a>
		 
		<?php else : ?>	
			
	<?php endif; ?>
</div>
<?php
 return ob_get_clean();

}

add_shortcode('cf_button', 'cf_button_show'); 


function cf_tab_menu_show($attr,$content=null){
	
	extract(
	
	 shortcode_atts(array(
	 
	 'cf_tab_menu_loop' => '',
	 'cf_tab_menu_loop_title' => '',
	 'cf_tab_menu_loop_class' => '',
	 'cf_tab_menu_loop_link' => '',
	 
	 
	 
	 ),$attr)
	
	);
	
	
ob_start(); ?>
<div class="navbar navbar-inner">
	<div class="navbar-toggle"><i class="fa fa-bars"></i><span>Menu</span><i class="fa fa-angle-down"></i></div>
	<div class="collapse navbar-collapse" style="display: none; opacity: 1; height: 0px;">
		<ul class="nav navbar-nav nav-center ms-rounded inner">
		<?php
		  $cftab_menulop=vc_param_group_parse_atts($cf_tab_menu_loop); 
		  if(isset($cftab_menulop)){
		  foreach($cftab_menulop as $cftab_menu){?>			
			<li class="<?php if(isset($cftab_menu['cf_tab_menu_loop_class'])): ?><?php echo esc_html($cftab_menu['cf_tab_menu_loop_class']); ?><?php endif; ?>"><a href="<?php if(isset($cftab_menu['cf_tab_menu_loop_link'])): ?><?php echo esc_html($cftab_menu['cf_tab_menu_loop_link']); ?><?php endif; ?>"><?php if(isset($cftab_menu['cf_tab_menu_loop_title'])): ?><?php echo esc_html($cftab_menu['cf_tab_menu_loop_title']); ?><?php endif; ?></a></li>
	   <?php } }
	 
	   ?>			
		</ul>
	</div>
</div>	
<?php
 return ob_get_clean();

}

add_shortcode('cf_tab_menu', 'cf_tab_menu_show'); 

















?>
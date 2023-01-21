<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?> 
<?php if( get_post_meta($post->ID, 'page_breadcrumb', true) == '1'): ?>
<div class="cf-theme-relative bg-cover ken-burn-center <?php echo get_theme_mod('cf_blog_banner_height_class'); ?>" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>');">
	<div class="cf-bg-overlay-hd-title" style="background:<?php echo get_post_meta(get_the_id(), 'page_banner_overlay_color',true); ?>;"></div>
	<div class="container">
		<div class="title-base">
			<hr class="anima" />
			<h1 style="color:<?php echo get_post_meta(get_the_id(), 'page_banner_title_color',true); ?>;"><?php the_title(); ?></h1>
			<p style="color:<?php echo get_post_meta(get_the_id(), 'page_banner_subtitle_color',true); ?>;"><?php echo get_post_meta(get_the_id(), 'page_banner_subtitle',true); ?></p>
		</div>
	</div>
</div>
<?php endif; ?>
<div class="cf-main">
<?php while(have_posts()) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>
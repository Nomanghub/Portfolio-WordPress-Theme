<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>
<div class="cf-theme-relative cf-hd-title ken-burn-center header-base bg-cover" style="background-image:url('<?php echo get_theme_mod('cf_blog_banner_img'); ?>');">
	<div class="cf-bg-overlay-hd-title"></div>
	<div class="container">
		<div class="title-base">
			<hr class="anima" />
			<h1>404 Error</h1>
		</div>
	</div>
</div>
<style type="text/css">
.cf-error-logo {
    margin: 0 auto;
    width: 206px;
}
</style>
<div class="section-empty section-item" style="margin-bottom: 35px; ">
	<div class="container" data-sub-height="0">
		<div class="row">
			<div class="col-md-12 text-center">
				<div>
					<hr class="space m" />
					<?php $logotext=get_theme_mod('cf_main_logo_text_show_hide'); ?>
					<a class="cf-logo cf-error-logo" href="<?php bloginfo('home'); ?>"><img src="<?php echo get_theme_mod('cf_main_logo'); ?>" alt="<?php bloginfo('name'); ?>" /> <?php if($logotext=='show'){?> <?php echo get_theme_mod('cf_main_logo_text'); ?> <?php }else{ ?> <?php } ?></a>
					<hr class="space m" />
					<h1 class="text-xxl">404</h1>
					<h1>PAGE NOT FOUND</h1>
					<p>
						THE PAGE YOU WERE LOOKING
						FOR COULD NOT BE FOUND
					</p>
					<hr class="space m" />
					<a class="anima-button btn-sm btn" href="<?php bloginfo('home'); ?>"><i class="im-left"></i>Go back to home</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
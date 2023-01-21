<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>

<div class="cf-theme-relative bg-cover cf-hd-title ken-burn-center <?php echo get_theme_mod('cf_blog_banner_height_class'); ?>" style="background-image:url('<?php echo get_theme_mod('cf_blog_banner_img'); ?>');">
	<div class="cf-bg-overlay-hd-title"></div>
	<div class="container">
		<div class="title-base">
			<hr class="anima" />
			<h1><?php echo get_theme_mod('cf_blog_banner_title'); ?></h1>
			<p><?php echo get_theme_mod('cf_blog_banner_subtitle'); ?></p>
		</div>
	</div>
</div>
<div class="section-bg-color">
	<div class="container content">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<div class="grid-list grid-layout">
					<div class="grid-box row">
						<?php
						if (have_posts()) {

							while ( have_posts() ) : the_post(); ?>
								<div class="grid-item col-md-6">
									<div class="advs-box advs-box-top-icon-img niche-box-post boxed-inverse" data-anima="scale-rotate" data-trigger="hover">
										<div class="block-infos">
											<div class="block-data">
												<p class="bd-day"><?php the_time('j'); ?></p>
												<p class="bd-month"><?php the_time('M Y'); ?></p>
											</div>
										</div>
										<a class="img-box" href="<?php the_permalink(); ?>">
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
											<h2><a href="<?php the_permalink(); ?>"><?php short_title('...', 39); ?></a></h2>
											<div class="tag-row">
												<span><i class="fa fa-bookmark"></i> <?php cf_blog_cate();?></span>
												<span><i class="fa fa-pencil"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
											</div>
											<div class="niche-box-content">
											  <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile;

						} else { ?>
							<div class="no-results td-pb-padding-side">
								<h2><?php esc_html_e('No posts to display', 'codersforest') ?></h2>
							</div>
						<?php }	?>		
					</div>
						<!--pagination-->
						<div class="list-nav pagination-grid">
						<?php 

								the_posts_pagination(array(
								
								'prev_text' => '<i class="fa fa-angle-left"></i> Previous',
								'next_text' => 'Next <i class="fa fa-angle-right"></i>',
								'screen_reader_text' => ' ',
						
								));
							  
						?>
						</div>							
						<!--pagination end-->
				</div>
			</div>
			<div class="col-md-3 col-sm-12 widget">
			  <?php dynamic_sidebar('pagesidebar'); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
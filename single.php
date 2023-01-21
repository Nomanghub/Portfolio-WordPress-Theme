<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header(); ?>
<div class="header-base bg-cover cf-hd-title cf-theme-relative" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));?>')">
<div class="cf-bg-overlay-hd-title"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title-base text-left">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section-empty section-item">
	<div class="container content">
		<div class="row">
			<div class="col-md-9 col-sm-12">
				<div class="row">
				    <?php while(have_posts()): the_post(); ?>
						<div class="col-md-12">
							<div class="tag-row">
								<span><i class="fa fa-bookmark"></i> <?php cf_blog_cate();?></span>
								<span><i class="fa fa-pencil"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span>
							</div>
							<hr class="space s" />
						</div>
						<div class="col-md-12 cf-single-post-content">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>
				</div>
				<hr class="space" />           
			</div>
			<div class="col-md-3 col-sm-12 widget"><?php dynamic_sidebar('pagesidebar'); ?></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
</body>
</html>

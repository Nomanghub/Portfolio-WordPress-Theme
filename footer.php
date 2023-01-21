<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>  
<footer class="footer-base cf-footer">
	<div class="content">
		<div class="container">
			<div class="row">
				<?php do_action('cf_footer_main'); ?>
			</div>
		</div>
		<div class="row copy-row">
			<div class="col-md-12 copy-text">
				<?php dynamic_sidebar('copyright'); ?>
			</div>
		</div>
	</div>
</footer>
    <?php wp_footer(); ?>
</body>
</html>

<?php get_header(); ?>
<?php if( is_shop() ) {?>
	<div style="background-color:#f3f3f3;">
		<?php woocommerce_content(); ?>
	</div>
<?php
	} else {?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php woocommerce_content();?>
			</div>	
		</div>
	</div>
<?php } ?>
<?php get_footer(); ?>
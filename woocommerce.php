<?php get_header(); ?>
<!--<div class="kadima_header_breadcrum_title">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php global $wp;
				echo $current_url = (add_query_arg(array(),$wp->request)); ?></h1>
                <?php if (function_exists('kadima_breadcrumbs')) kadima_breadcrumbs(); ?>               
			</div>
		</div>
	</div>	
</div>-->


<div style="background-color:#f3f3f3;">
<?php woocommerce_content(); ?>
</div>	
<?php get_footer(); ?>
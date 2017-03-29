<?php get_header(); ?>
<div class="kadima_header_breadcrum_title">	
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<h1><?php printf( '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
			</h1>
			</div>
		<?php endif; ?>	
		</div>
	</div>	
</div>
<div class="container">	
	<div class="row kadima_blog_wrapper">
		<div class="col-md-12">
		<?php 
		if ( have_posts()): 
			while ( have_posts() ): the_post();?>
				<div id="post-<?php the_ID(); ?>" <?php post_class('kadima_blog_full'); ?>>
					<div class="col-md-3">
						<ul class="blog-date-left">
							<li class="kadima_post_date">
							<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
							<span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6>
							<?php else : ?>
							<span class="date"><?php echo get_the_date(); ?></span>
							<?php endif; ?>
							</li>
						</ul>
					</div>					
					<div class="col-md-9 post-content-wrap">
						<?php if(has_post_thumbnail()): 
						$img = array('class' => 'kadima_img_responsive'); ?>
						<div class="kadima_blog_thumb_wrapper_showcase">						
							
							<?php if (is_home()) : ?>
							<div class="kadima_blog_thumb_wrapper_showcase_overlay">
							<div class="kadima_blog_thumb_wrapper_showcase_overlay_inner ">
								<div class="kadima_blog_thumb_wrapper_showcase_icons">
									<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
								</div>
							</div>
							</div>
							<?php endif; ?>
						</div>
						<?php endif; ?>
						<div class="kadima_fuul_blog_detail_padding">
						<h2><?php if(!is_single()) {?><a href="<?php the_permalink(); ?>"><?php } ?><?php the_title(); ?></a></h2>
						<div class="row">
					
						</div>
						<?php the_content( __( 'Read More' , 'kadima' ) ); 
						$defaults = array(
							  'before'           => '<div class="kadima_blog_pagination"><div class="kadima_blog_pagi">' . __( 'Pages:','kadima'  ),
							  'after'            => '</div></div>',
							  'link_before'      => '',
							  'link_after'       => '',
							  'next_or_number'   => 'number',
							  'separator'        => ' ',
							  'nextpagelink'     => __( 'Next page'  ,'kadima' ),
							  'previouspagelink' => __( 'Previous page' ,'kadima'),
							  'pagelink'         => '%',
							  'echo'             => 1
							  );
							  wp_link_pages( $defaults ); ?>
						</div>
					</div>
				</div>
		<?php
			endwhile; 
		endif; 
		kadima_navigation(); ?>
		</div>	
	</div>
</div>
<?php get_footer(); ?>
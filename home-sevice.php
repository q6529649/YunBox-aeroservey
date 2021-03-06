<?php $wl_theme_options = kadima_get_options(); ?>
<div class="kadima_service">
<?php if($wl_theme_options['custom_heading'] !='') { ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="kadima_heading_title">
				<h1><?php echo esc_attr($wl_theme_options['custom_heading']); ?></h1>
				<hr style="margin-top: -1em;margin-bottom: 0px; border: 0;border-top: 1px solid #0e88e3;"/>
			</div>
		</div>
	</div>
</div>
</div>
<?php } ?>
<section class="services wrapper services_line" id="services_three" style="background-color: #fff;">
<div class="container">
		<div class="row isotope" id="isotope-service-container">
			<div class="col-md-12" style="padding:5em 0;">
				<?php for($i=1; $i<6; $i++ ) { ?>
				<div class="col-md-12 col-xs-12 service">
					<div class="kadima_service_area appear-animation bounceIn appear-animation-visible">
						<?php if($wl_theme_options['custom_img_3_'.$i] !='') { ?>
							<div>
								<a href="<?php echo esc_url($wl_theme_options['custom_link_3_'.$i]); ?>">
									<img src="<?php echo esc_attr($wl_theme_options['custom_img_3_'.$i]); ?>">
								</a>
							</div>
						<?php } ?>
						<div class="kadima_service_detail media-body">
							<?php if($wl_theme_options['custom_title_3_'.$i] !='') { ?>
								<h3>
									<a href="<?php echo esc_url($wl_theme_options['custom__link_3_'.$i]); ?>">
										<?php echo esc_attr($wl_theme_options['custom_title_3_'.$i]); ?>
									</a>
								</h3>
							<?php } ?>
							<?php if($wl_theme_options['custom_text_3_'.$i] !='') { ?><p><?php echo apply_filters('the_content', $wl_theme_options['custom_text_3_'.$i], true); ?></p><?php } ?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
</section>



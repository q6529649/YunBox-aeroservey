<?php $theme_options = kadima_get_options(); ?>
<div class="content-grid">		
	<div class="col-md-12 product-bj" style="padding-top: 20px;padding-bottom: 40px;background-color: #fff;">
		<div class="container">
			<div class="col-md-5">
				<p class="p1" style="text-align:center;">
					<img style="width:100%;" src="../wp-content/themes/kadima/images/sp1.jpg" alt=""/>
				</p>
			</div>
			<div class="col-md-7">
				<h3 style="color: #fff;font-weight: 600;margin-bottom: 20px;padding:0 35px;font-size: 2em;font-family: chantal, sans-serif;">
					<span style="background-color:#007bd9;padding: 5px 30px;box-shadow: -5px -5px 0 rgba(201, 201, 201, 1);"><?php echo $theme_options['custom_title_1']; ?></span>
				</h3>
				<h5 style="text-align:center;">
					<?php echo $theme_options['custom_title_sub_1']; ?>
				</h5>
				<div class="col-md-12 box_2" >					
					<div>
						<div class="most-1">
							<p style="margin-bottom: 55px;padding:0 20px;line-height: 27px;font-size: 1.2em;font-weight: 400;">
								<?php echo esc_attr($theme_options['custom_desciption_1']); ?>
							</p>
							 <p style="padding:0 20px;" class="p1"><a><?php echo esc_attr($theme_options['custom_text_1_1']); ?></a></p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<section style="background-color: #ececec;">

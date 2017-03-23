<?php $wl_theme_options = kadima_get_options(); ?>

<div class="kadima_footer_area" style="padding: 50px 0 5px 10px;">
	<div class="container">
		<div class="col-md-12">
			<!--<p class="kadima_footer_copyright_info" >
			<?php
				if($wl_theme_options['footer_customizations']) { echo esc_attr($wl_theme_options['footer_customizations']); }
				if($wl_theme_options['info_copyright']) { echo "|" .esc_attr($wl_theme_options['info_copyright']); } ?>
				<a target="_blank" rel="nofollow" href="<?php if($wl_theme_options['info_fax']) { echo esc_url($wl_theme_options['info_fax']); } ?>">
					<?php if($wl_theme_options['info_tel']) { echo esc_attr($wl_theme_options['info_tel']); } ?>
				</a>
			</p>-->
			<?php if($wl_theme_options['footer_section_social_media_enbled'] == '1') { ?>
			<div class="kadima_footer_social_div">
				<!--<ul class="social">
					<?php if($wl_theme_options['fb_link']!='') { ?>
							 <li class="twitter" title="Facebook"><a class="twitter" href="<?php echo esc_url($wl_theme_options['fb_link']); ?>"></a></li>
						<?php } if($wl_theme_options['twitter_link']!='') { ?>
							<li class="twitter facebook" title="Twitter"><a class="twitter facebook" href="<?php echo esc_url($wl_theme_options['twitter_link']) ; ?>"></a></li>
						<?php } if($wl_theme_options['linkedin_link']!='') { ?>
							<li class="twitter chrome" title="Linkedin"><a class="twitter pinterest" href="<?php echo esc_url($wl_theme_options['linkedin_link']) ; ?>"></a></li>
						<?php } if($wl_theme_options['youtube_link']!='') { ?>
							<li class="twitter pinterest" title="Youtube"><a class="twitter pinterest" href="<?php echo esc_url($wl_theme_options['youtube_link']) ; ?>"></a></li>
						<?php } if($wl_theme_options['gplus']!='') { ?>
							<li class="twitter linkedin" title="gplus"><a class="twitter linkedin" href="<?php echo esc_url($wl_theme_options['gplus']) ; ?>"></a></li>
						<?php } if($wl_theme_options['instagram']!='') { ?>
							<li class="instagram" title="instagram"><a href="<?php echo esc_url($wl_theme_options['instagram']) ; ?>"></a></li>
						<?php } ?>
				</ul>-->
				<div class="col-md-12">
				<p style="float:right;padding-top: 10px;"><i style="margin-top: 5px;"  class="lnr2"></i>susan@aeroservey.com</p>
				<p style="float:right;margin-right:40px;"><i  class="lnr"></i>86-15306980192</p>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- /Footer Widget Secton -->
</div>
<a href="#" title="Go Top" class="kadima_scrollup" style="display: inline;">
    <i class="fa fa-chevron-up"></i>
</a>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php wp_footer(); ?>
<?php
	$language = get_client_language();
	if ($language != 'zh-cn') {
?>
	<script type='text/javascript' src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
		}
	</script>
<?php
	}
?>
</body>
</html>

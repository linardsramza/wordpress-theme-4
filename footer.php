<footer class="footer bg-white pt-2 pt-md-3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-5 social-wrap d-flex align-items-center justify-content-center">
				<div class="social-icons d-flex flex-wrap justify-content-center p-1 p-md-15 px-lg-45">
					<?php $social_profiles = otm_get_option('social_profiles');?>
					<?php if($social_profiles): ?>
					<h6 class="mr-md-1 mb-md-0 mb-1 mr-0">Follow Us: </h6>
					<ul class="list-unstyled list-inline m-0">
					<?php foreach($social_profiles as $social_profile): ?>
					<li class="list-inline-item">
						<a href="<?php echo $social_profile['social_profile_url'] ?>" title="<?php echo $social_profile['social_profile'] ?>" target="_blank">
							<i class="<?php echo $social_profile['social_profile_icon'] ?>"></i>
						</a>
					</li>
					<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div><!--/.social-wrap-->
			<div class="col-12 col-md-4 col-lg-3">
				<h6 class="mb-0">Find us At</h6>
				<p>500 Grant Street, Suite 2900<br>Pittsburgh, PA 15219</p>
			</div>
			<div class="col-12 col-md-4 text-right">
				<h6 class="mb-0">Request Free Consultation</h6>
				<a class="phone bebas yellow" href="tel:+1-<?php echo do_shortcode('[otm-phone-number]'); ?>" title="Call <?php bloginfo('name'); ?>"><?php echo do_shortcode('[otm-phone-number]'); ?></a>
			</div>
		</div>
	</div>
	<div class="copyright bg-dark mt-3">
		<div class="container">
			<div class="row">
				<div class="copy-content col d-flex justify-content-between flex-column flex-lg-row">
					<div class="d-flex align-items-center text-center justify-content-center py-2">
						<p class="m-0 text-white"><?php echo do_shortcode(otm_get_option( 'copyright_text' )); ?></p>
					</div>
					<div class="d-flex align-items-center justify-content-center pb-2 py-lg-2">
						<a class="otm-branding-link" href="https://www.onthemapmarketing.com" title="Websites &amp; SEO" target="_blank">
							<span class="m-0 text-white">powered by: </span>
							<img class="otm-branding-logo" style="max-width: 130px;" src="<?php bloginfo('template_url'); ?>/assets/images/otm/otm-logo-blue-white.svg" title="Websites &amp; SEO" alt="Websites &amp; SEO">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<?php get_template_part('includes/footer-options'); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/bebas.css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/simple-line-icons.css">
</body>
</html>
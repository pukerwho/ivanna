<div class="b_promo" style="background-image: url('<?php echo carbon_get_the_post_meta('crb_promo_img') ?>');background-size: cover; background-position: center;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7">
				<div class="b_promo__title">
					<?php echo carbon_get_the_post_meta('crb_promo_title') ?>
				</div>
				<div class="b_promo__description">
					<?php echo carbon_get_the_post_meta('crb_promo_description') ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="b_promo__form">
					<?php 
					$form_code = carbon_get_the_post_meta('crb_promo_form');
					echo do_shortcode($form_code);
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="b_promo__absolute"></div>
</div>
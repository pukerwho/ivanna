<div class="main__welcome">
	<div class="main__welcome__photo" style="background: url('<?php echo carbon_get_the_post_meta('crb_main_photo') ?>'); background-size: cover; background-position: center top"></div>
	<div class="main__welcome__content">
		<div class="container">
			<div class="row">
				<div class="col-md-10">
					<div class="main__welcome__content-title">
						<?php echo carbon_get_the_post_meta('crb_main_title') ?>
					</div>
					<div class="main__welcome__content-description">
						<?php echo carbon_get_the_post_meta('crb_main_description') ?>
					</div>
					<div class="main__welcome__content-buttons">
						<div class="theme-button callback">
							Send a request
						</div>
						<a href="#main_services">
							<div class="main__welcome__content-more">
								Learn more
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
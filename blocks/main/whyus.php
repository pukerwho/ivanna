<div class="whyus">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="animate-puk-mask">
					<div class="whyus__title animate-puk" data-effect="fade-up" data-delay="0.7s">
						<?php echo carbon_get_the_post_meta('crb_main_whyus_title') ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7">
				<div class="whyus__description animate-puk" data-effect="fade-up" data-delay="0.8s">
					<?php echo carbon_get_the_post_meta('crb_main_whyus_description') ?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-9">
				<div class="whyus__grid">

					<?php 
					$whyus_grid = carbon_get_the_post_meta('crb_main_whyus_grid');
					foreach( $whyus_grid as $whyus_item ): ?>
						<?php $i++; $i=$i/1.5 ?>
						<div class="whyus__item animate-puk" data-effect="fade" data-delay="<?php echo $i ?>s">
							<div class="whyus__item-circle">
								<img src="<?php bloginfo('template_url') ?>/img/paper.svg" alt="">
							</div>
							<div class="whyus__item-title">
								<?php echo $whyus_item['crb_main_whyus_item_title'] ?>
							</div>
							<div class="whyus__item-description">
								<?php echo $whyus_item['crb_main_whyus_item_description'] ?>
							</div>
							<div class="whyus__item-more">
								Learn More
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>
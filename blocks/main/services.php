<div class="main__services">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="animate-puk-mask">
					<div class="main__services__title animate-puk" data-effect="fade-up" data-delay="0.7s">
						<?php echo carbon_get_the_post_meta('crb_main_services_title') ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-7">
				<div class="animate-puk-mask">
					<div class="main__services__description animate-puk" data-effect="fade" data-delay="0.8s">
						<?php echo carbon_get_the_post_meta('crb_main_services_description') ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="swiper-services swiper-container">
					<div class="swiper-wrapper">
						<?php
						$custom_query_services = new WP_Query( array( 
							'post_type' => 'services'
						) );
						if ($custom_query_services->have_posts()) : while ($custom_query_services->have_posts()) : $custom_query_services->the_post(); ?>
							<?php $i++; $i=$i/1.5 ?>
							<div class="swiper-slide main__services__item">
								<div class="main__services__item-img animate-puk" data-effect="fade" data-delay="0.9s">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
								</div>
								<div class="main__services__item-title animate-puk" data-effect="fade" data-delay="1s">
									<?php the_title(); ?>
								</div>
								<a href="<?php echo get_permalink(); ?>">
									<div class="main__services__item-more animate-puk" data-effect="fade" data-delay="1.1s">
										Learn More
									</div>
								</a>
							</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</div>
					<div class="swiper-services-button-next swiper-button-next animate-puk" data-effect="fade" data-delay="1.2s"></div>
					<div class="swiper-services-button-prev swiper-button-prev animate-puk" data-effect="fade" data-delay="1.2s"></div>
				</div>
				<div class="d-flex justify-content-center">
					<div class="swiper-pagination animate-puk" data-effect="fade" data-delay="1.2s"></div>	
				</div>
			</div>
		</div>
	</div>
</div>
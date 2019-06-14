<div class="videos">
	<?php
	$custom_query_video = new WP_Query( array( 
		'post_type' => 'videos',
		'posts_per_page' => 1
	) );
	if ($custom_query_video->have_posts()) : while ($custom_query_video->have_posts()) : $custom_query_video->the_post(); ?>
	<div class="videos__block" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');background-size: cover;
    background-position: center top;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-9 text-center">
					<div class="videos__block-text">
						<?php the_content(); ?>	
					</div>
					<div class="videos__block-info">
						<span><?php echo carbon_get_the_post_meta('crb_videos_name') ?>, </span>
						<span><?php echo carbon_get_the_post_meta('crb_videos_company') ?>, </span>
					</div>
					<a href="<?php echo carbon_get_the_post_meta('crb_videos_link') ?>" target="_blank">
						<div class="videos__block-play">
							<div class="videos__block-play__inner"></div>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="videos__block-absolute"></div>
	</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main_videos_swiper videos__swiper swiper-container">
					<div class="swiper-wrapper">
						<?php
						$custom_query_videos = new WP_Query( array( 
							'post_type' => 'videos',
						) );
						if ($custom_query_videos->have_posts()) : while ($custom_query_videos->have_posts()) : $custom_query_videos->the_post(); ?>
						<div class="swiper-slide">
							<a href="<?php echo carbon_get_the_post_meta('crb_videos_link') ?>" target="_blank">
								<div class="videos__swiper-img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');background-size: cover; background-position: center;">
									<div class="videos__swiper-play"></div>
									<div class="videos__swiper-absolute"></div>
								</div>
							</a>
							<div class="videos__swiper-info">
								<div class="videos__swiper-title">
									<?php echo carbon_get_the_post_meta('crb_videos_name') ?>
								</div>
								<a href="<?php echo carbon_get_the_post_meta('crb_videos_link') ?>" target="_blank">
									<div class="videos__swiper-more">
										Watch video
									</div>
								</a>
							</div>
						</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</div>
				</div>
				<div class="d-flex justify-content-center">
					<div class="swiper-pagination"></div>	
				</div>
			</div>
		</div>
	</div>
	
</div>
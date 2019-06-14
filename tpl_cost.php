<?php
/*
Template Name: Сost of translation
*/
?>

<?php get_header(); ?>

<div class="cost">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="cost__title">
					Сost of translation
				</div>
				<div class="cost__description">
					A simple, proven way  to make your business trip as comfortable as possible. 
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$custom_query_services = new WP_Query( array( 
				'post_type' => 'services'
			) );
			if ($custom_query_services->have_posts()) : while ($custom_query_services->have_posts()) : $custom_query_services->the_post(); ?>
				<div class="col-md-6">
					<div class="cost__item">
						<div class="cost__item-img">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
						</div>
						<div class="cost__item-info">
							<a href="<?php echo get_permalink(); ?>">
								<div class="cost__item-title">
									<?php the_title(); ?>
								</div>
							</a>
							<div class="cost__item-text">
								<?php the_content(); ?>
							</div>
							<div class="cost__item-buttons">
								<div class="cost__item-price">
									<?php echo carbon_get_the_post_meta('crb_services_price') ?>
								</div>
								<a href="<?php echo get_permalink(); ?>">
									<div class="cost__item-order">
										order
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>

<section id="main_videos">
	<?php get_template_part('blocks/videos') ?>
</section>

<section id="promo">
	<?php get_template_part('blocks/promo') ?>
</section>

<?php get_footer(); ?>
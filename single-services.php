<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="service">
	<div class="service__top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="service__photo">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div class="service__content">
						<div class="service__title">
							<?php the_title(); ?>
						</div>
						<div class="service__description">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="service__info">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php echo carbon_get_the_post_meta('crb_services_text') ?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
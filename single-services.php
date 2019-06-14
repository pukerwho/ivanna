<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single">
	<div class="single__top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<div class="single__photo">
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					</div>
				</div>
				<div class="col-md-5 offset-md-1">
					<div class="single__content">
						<div class="single__title">
							<?php the_title(); ?>
						</div>
						<div class="single__description">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="single__info">
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


<section id="main_videos">
	<?php get_template_part('blocks/videos') ?>
</section>

<section id="promo">
	<?php get_template_part('blocks/promo') ?>
</section>

<?php get_footer(); ?>
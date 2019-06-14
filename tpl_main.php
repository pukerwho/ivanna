<?php
/*
Template Name: ГЛАВНАЯ
*/
?>

<?php get_header(); ?>

<section id="main_welcome">
	<div class="main">
		<?php get_template_part('blocks/main/welcome') ?>
	</div>
</section>

<section id="main_services">
	<?php get_template_part('blocks/main/services') ?>
</section>

<section id="main_request">
	<div class="b_request">
		<div class="container">
			<div class="row">
				<div class="col-md-11">
					<div class="b_request__content">
						<div class="b_request__info">
							<div class="b_request__text animate-puk" data-effect="fade" data-delay="0.7s">
								<b>Professional English speaking</b> drivers, wide range of cars are available 7 days a week. Order a car: one click request and easy payment upon arrival or upfront.
							</div>
							<div class="b_request__send animate-puk callback" data-effect="fade" data-delay="0.8s">
								Send a request
							</div>
						</div>
						<div class="b_request__smallflag">
							<img src="<?php bloginfo('template_url') ?>/img/kingdom.svg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="b_request__largeflag">
			<img src="<?php bloginfo('template_url') ?>/img/kingdom.svg" alt="">
		</div>
	</div>
</section>

<section id="main_whyus">
	<?php get_template_part('blocks/main/whyus') ?>
</section>

<section id="main_videos">
	<?php get_template_part('blocks/videos') ?>
</section>

<section id="promo">
	<?php get_template_part('blocks/promo') ?>
</section>

<?php get_footer(); ?>
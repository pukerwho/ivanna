<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="p_contact">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="p_contact__title">
						Contact Us
					</div>
					<div class="p_contact__content">
						<div class="p_contact__item">
							<div class="p_contact__item-icon">
								<img src="<?php bloginfo('template_url') ?>/img/location.svg" alt="">
							</div>
							<div class="p_contact__item-info">
								<?php echo carbon_get_the_post_meta('crb_contact_address') ?>
							</div>
						</div>
						<div class="p_contact__item">
							<div class="p_contact__item-icon">
								<img src="<?php bloginfo('template_url') ?>/img/call.svg" alt="">
							</div>
							<div class="p_contact__item-info">
								<?php 
									$contact_phones = carbon_get_the_post_meta('crb_contact_phones');
									foreach( $contact_phones as $contact_phone ):
								?>
									<div>
										<a href="tel:<?php echo $contact_phone['crb_contact_phone'] ?>"><?php echo $contact_phone['crb_contact_phone'] ?>;</a>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<div class="p_contact__item">
							<div class="p_contact__item-icon">
								<img src="<?php bloginfo('template_url') ?>/img/mail.svg" alt="">
							</div>
							<div class="p_contact__item-info">
								<?php 
									$contact_phones = carbon_get_the_post_meta('crb_contact_emails');
									foreach( $contact_phones as $contact_phone ):
								?>
									<div>
										<a href="mailto:<?php echo $contact_phone['crb_contact_email'] ?>"><?php echo $contact_phone['crb_contact_email'] ?>;</a>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 offset-md-2">
					<div class="p_contact__form">
						<div class="p_contact__form-title">
							Feedback form
						</div>
						<div>
							<?php 
								$contact_form_code = carbon_get_the_post_meta('crb_contact_form');
								echo do_shortcode($contact_form_code);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="p_contact__map">
			<?php echo carbon_get_the_post_meta('crb_contact_map') ?>
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
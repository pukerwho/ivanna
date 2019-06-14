<?php 
$args_main_page = [
    'post_type' => 'page',
    'fields' => 'ids',
    'nopaging' => true,
    'meta_key' => '_wp_page_template',
    'meta_value' => 'tpl_main.php'
];
$main_pages = get_posts( $args_main_page );
foreach ( $main_pages as $main_page ): ?>

	<div class="b_promo" style="background-image: url('<?php echo carbon_get_post_meta($main_page, 'crb_promo_img') ?>');background-size: cover; background-position: center;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7">
					<div class="b_promo__title">
						<?php echo carbon_get_post_meta($main_page, 'crb_promo_title') ?>
					</div>
					<div class="b_promo__description">
						<?php echo carbon_get_post_meta($main_page, 'crb_promo_description') ?>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6">
					<div class="b_promo__form">
						<?php 
						$form_code = carbon_get_post_meta($main_page, 'crb_promo_form');
						echo do_shortcode($form_code);
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="b_promo__absolute"></div>
	</div>
<?php endforeach; ?>
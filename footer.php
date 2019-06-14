  </section>
  <footer id="footer" class="footer">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<div class="footer__content">
    				<div class="footer__icons">
    					<div class="footer__icon">
    						<a href="#">
    							<img src="<?php bloginfo('template_url') ?>/img/facebook.svg" alt="">
    						</a>
    					</div>
    					<div class="footer__icon">
    						<a href="#">
    							<img src="<?php bloginfo('template_url') ?>/img/instagram.svg" alt="">
    						</a>
    					</div>
    					<div class="footer__icon">
    						<a href="#">
    							<img src="<?php bloginfo('template_url') ?>/img/twitter.svg" alt="">
    						</a>
    					</div>
    				</div>
    				<?php wp_nav_menu([
              'theme_location' => 'head_menu',
              'container' => 'nav',
              'container_class' => 'footer__menu',
              'menu_id' => 'head_menu',
            ]); ?>
          </div>
  			</div>
  		</div>
  	</div>
  </footer>
  <div class="copyright">
  	<div class="container">
  		<div class="row">
  			<div class="col-md-12">
  				<div class="copyright__content">
    				<div>
							© 2019 Name. All rights reserved
						</div>
						<div>
							Terms and Privacy
						</div>	
  				</div>
  			</div>
  		</div>
  	</div>
	</div>
	<?php 
	$args_contact_page = [
	    'post_type' => 'page',
	    'fields' => 'ids',
	    'nopaging' => true,
	    'meta_key' => '_wp_page_template',
	    'meta_value' => 'tpl_contact.php'
	];
	$contact_pages = get_posts( $args_contact_page );
	foreach ( $contact_pages as $contact_page ): ?>
	<div class="callback__modal">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="p_contact__form">
          	<div class="callback__close">
              <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="25px">
            </div>
						<div class="p_contact__form-title">
							Send a request
						</div>
						<div>
							<?php 
								$contact_form_code = carbon_get_post_meta($contact_page, 'crb_contact_form');
								echo do_shortcode($contact_form_code);
							?>
						</div>
					</div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal__bg"></div>
	<?php endforeach; ?>
  <?php wp_footer(); ?>
</body>
</html>
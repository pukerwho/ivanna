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
    <?php wp_footer(); ?>
</body>
</html>
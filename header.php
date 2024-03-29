<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header__content">
            <div class="header__logo">
              <a href="<?php echo home_url(); ?>">
                Ivanna Моrозоvа
              </a>
            </div>
            <div class="header__menu">
              <?php wp_nav_menu([
                'theme_location' => 'head_menu',
                'container' => 'nav',
                'menu_id' => 'head_menu',
              ]); ?>
              <div class="header__phone">
                <img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="">
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
                  <?php
                  $contact_phones = carbon_get_post_meta($contact_page, 'crb_contact_phones' );
                  foreach ( array_slice($contact_phones, 0, 1)  as $contact_phone ): ?>
                    <?php echo $contact_phone['crb_contact_phone'] ?>
                  <?php endforeach; ?>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="mobile-show">
              <div class="mobile-menu">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile-show">
    <div class="mobile-cover">
      <?php wp_nav_menu([
        'theme_location' => 'head_menu',
        'container' => 'nav',
        'container_class' => 'header__menu',
        'menu_id' => 'head_menu',
      ]); ?>  
    </div>
  </div>
  <section id="content" role="main">
<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_main.php' )
    ->add_fields( array(
      Field::make( 'image', 'crb_main_photo', 'Заглавное фото' )->set_value_type( 'url'),
      Field::make( 'text', 'crb_main_title', 'Заголовок' ),
      Field::make( 'textarea', 'crb_main_description', 'Короткое описание' ),
      Field::make( 'text', 'crb_main_services_title', 'Заголовок для Services' ),
      Field::make( 'textarea', 'crb_main_services_description', 'Короткое описание для Services' ),
      Field::make( 'text', 'crb_main_whyus_title', 'Заголовок для Why choose us' ),
      Field::make( 'textarea', 'crb_main_whyus_description', 'Короткое описание для Why choose us' ),
      Field::make( 'complex', 'crb_main_whyus_grid', 'WHY CHOOSE US?' )
          ->add_fields( array(
            Field::make( 'image', 'crb_main_whyus_item_icon', 'Иконка' )->set_value_type( 'url'),
            Field::make( 'text', 'crb_main_whyus_item_title', 'Заголовок' ),
            Field::make( 'text', 'crb_main_whyus_item_description', 'Описание' ),
        ) ),
      Field::make( 'image', 'crb_promo_img', 'Фон для Акции' )->set_value_type( 'url'),
      Field::make( 'text', 'crb_promo_title', 'Заголовок для Акции' ),
      Field::make( 'text', 'crb_promo_description', 'Описание для Акции' ),
      Field::make( 'text', 'crb_promo_form', 'Шорткод для формы' ),
    ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_about.php' )
    ->add_fields( array(
      Field::make( 'rich_text', 'crb_about_business', 'FOR BUSINESS' ),
      Field::make( 'rich_text', 'crb_about_holidays', 'FOR HOLIDAYS' ),
      Field::make( 'rich_text', 'crb_about_operate', 'HOW WE OPERATE' ),
    ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_contact.php' )
    ->add_fields( array(
      Field::make( 'textarea', 'crb_contact_address', 'Адрес' ),
      Field::make( 'textarea', 'crb_contact_map', 'Карта (iframe)' ),
      Field::make( 'text', 'crb_contact_form', 'Шорткод для формы' ),
    ) );
}

?>
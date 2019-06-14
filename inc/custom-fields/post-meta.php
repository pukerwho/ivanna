<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'videos' )
    ->add_fields( array(
      Field::make( 'text', 'crb_videos_name', 'Имя' ),
      Field::make( 'text', 'crb_videos_company', 'Имя компании' ),
      Field::make( 'text', 'crb_videos_link', 'Ссылка на видео' ),
  ) );
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'services' )
    ->add_fields( array(
      Field::make( 'rich_text', 'crb_services_text', 'Основной текст' ),
      Field::make( 'text', 'crb_services_price', 'Стоимость' ),
  ) );
}

?>
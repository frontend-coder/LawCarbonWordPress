<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Field\Complex_Field;

$assistants_labels = array(
	'plural_name'   => 'блоки',
	'singular_name' => 'блок',
);

$employees_labels = array(
    'plural_name' => 'блоки',
    'singular_name' => 'блок',
);

$basic_options_container = Container::make( 'theme_options', __('Basic options', 'lawasf'))

->add_tab(__('Header site'), array(

Field::make( 'text', 'text_logo', 'Лого сайта' )->set_width(50)
->set_help_text( 'Введите слово, которое будет использоваться в качестве логотипа сайте. Не ставьте в конце слова точку, она проставляется автоматически.' ),

// Field::make( 'image', 'image_logo', 'Лого-иконка сайта' )->set_width(33)
// ->set_help_text( 'Загрузите небольшое изображение, которое может использваться в качестве логотипа. Чтобы оно было задействовано на сайте удалите слово-логотип.'),

Field::make( 'image', 'image_favicon', 'Photo' )
->set_width(50)
->set_help_text( 'Загрузите небольшое изображение, которое вы обязаны прдготовить специально для этих целей в формате favicon.ico.'),
))

->add_tab(__('Footer site'), array(
Field::make( 'text', 'footer_copyright', 'Копирайт' )
 ->set_attribute( 'placeholder', '&copy; 2016 Free HTML5. All Rights Reserved.' )
->set_help_text( 'Вы можете ввести текст, который будет выводится в подвале сайта в роли копирайта.' ),

Field::make( 'complex', 'footer_socialpanel', 'Социальные сети' )
->setup_labels( $employees_labels )
->set_collapsed( true )

->add_fields( array(
Field::make( 'text', 'footer_social_icon', 'Иконка сети' )->set_width(50)
->set_help_text( 'Вы можете определить иконку социальной сети исходя из следующего набора:
  icon-twitter, icon-facebook, icon-linkedin, icon-dribbble.' ),
Field::make( 'text', 'footer_social_links', 'Адрес социальной сети' )->set_width(50)
->set_help_text( 'Введите адрес вашего аккаунта социальной сети.' ),
))->set_header_template( '
    <% if (footer_social_icon) { %>
        Содержимое: иконка - <%- footer_social_icon %>, адрес сети - <%- footer_social_links ? "(" + footer_social_links + ")" : "" %>
    <% } %>
')
















));

?>
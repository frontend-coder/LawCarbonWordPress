<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Field\Complex_Field;







$arsistants_labels = array(
	'plural_name'   => 'блоки',
	'singular_name' => 'блок',
);


$categories = get_categories();
$cats[0] = 'Показать все';

if ( $categories ) {
	foreach ($categories as $cat) {
	$cats[ $cat->term_id] = $cat->name;
	}
}

// $posties = get_posts();
// $posts[0] = 'Показать все';

// if ( $posties ) {
// 	foreach ($posties as $post) {
// 	$posts[ $post->post_id] = $post->name;
// 	}
// }









Container::make( 'post_meta', 'Настройка главной страницы сайта' )
 ->where( 'post_type', '=', 'page' )
->where( 'post_template', '=', 'front-page.php' )

->add_tab('Настройка слайдера на главной странице сайта', array(

Field::make( 'complex', 'header_slider', 'Настройка слайда' )
->setup_labels( $arsistants_labels )
->set_collapsed( true )
->add_fields( array(
Field::make( 'image', 'header_slider_image', 'Фон слайда' )
 ->set_value_type( 'url' )->set_width(50)
->set_help_text( 'Загрузите изображение, которое будет использоваться для формирования фона слайда. Параметры файла: ширина - 1920px, высота - 1000px.' ),


Field::make( 'text', 'header_slider_title', 'Название слайда' )->set_width(50)
->set_help_text( 'Введите короткое название слайда, оптимальная его длина 3 слова.' ),
Field::make( 'text', 'header_slider_descr', 'Описание слайда' )->set_width(50)
->set_help_text( 'Введите подробное  название слайда, допускается длина текста, занимающая 2 строки на слайде.' ),
Field::make( 'text', 'header_slider_ankor', 'Надпись на кнопке' )->set_width(50)
->set_help_text( 'Введите оригинальное название кнопки, которая будет ссылаться на посадочную страницу.' ),


 Field::make( 'select', 'header_select_page', 'URL страниц' )
      ->add_options( $cats )
      ->set_help_text( "Выберите название страницы." ),















// Field::make( 'association', 'header_slider_link', 'Выберите страницу' )
// ->set_max( 1 )
//     ->set_types( array(
//         array(
//             'type' => 'post',
//             'post_type' => 'page',
//         )))
// ->set_help_text( 'Выберите необходимую страницу, на которую желаете проставить ссылку с настраиваемого слайда.' ),



))->set_header_template( '
    <% if (header_slider_title) { %>
        Содержимое: <%- header_slider_title %>
    <% } %>
')












// end tabs

))
->add_tab('Название блока Команда2', array(

Field::make( 'complex', 'slide_socialspyfoure3', 'Социальные сети' )
->add_fields( array(
Field::make( 'text', 'social_icon_foure2', 'Иконка сети' )->set_width(50)
->set_help_text( 'Вы можете определить иконку социальной сети исходя из следующего набора: icon-pinterest, icon-linkedin, icon-flickr, icon-dribbble, icon-skype, icon-instagram, icon-pinterest, icon-twitter, icon-github, icon-vk, icon-facebook.' ),
Field::make( 'text', 'social_links_foure2', 'Адрес социальной сети' )->set_width(50)
->set_help_text( 'Введите адрес вашего аккаунта социальной сети.' ),
))->set_header_template( '
    <% if (social_icon_foure2) { %>
        Содержимое: иконка - <%- social_icon_foure2 %>, адрес сети - <%- social_links_foure2 ? "(" + social_links_foure2 + ")" : "" %>
    <% } %>
')

));
























?>
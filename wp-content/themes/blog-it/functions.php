<?php 
function blog_assets() {
    wp_enqueue_style ('normalize', get_template_directory_uri() . '/assets/style/normalize.css');
    wp_enqueue_style ('style', get_template_directory_uri() . '/assets/style/style.css');
    wp_enqueue_style ('adaptive', get_template_directory_uri() . '/assets/style/media.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', ['jquery'], null, true);
    wp_enqueue_script('burger', get_template_directory_uri() . '/assets/js/burger.js', [], null, true);
}


add_action('wp_enqueue_scripts', 'blog_assets');

add_theme_support( 'post-thumbnails' );


function custom_pagination() {
    ob_start();
    ?>
        <?php 
            global $wp_query;
            $current = max(1, absint(get_query_var('paged')));
            $pagination = paginate_links( array (
                'base' => str_replace(PHP_INT_MAX, '%#%', esc_url(get_pagenum_link(PHP_INT_MAX))),
                'format' => '?paged=%#%',
                'current' => $current,
                'total' => $wp_query->max_num_pages,
                'type' => 'array',
                'prev_text' => null,
                'next_text' => null,
            )); ?>
        <?php if ( ! empty($pagination)) : ?>
            <ul class="pagination list-reset">
                <?php foreach ($pagination as $key => $page_link) : ?>
                    <li class= "pagination__item<?php if (strpos($page_link, 'current') !== false) {echo ' pagination__item-active';} ?>"><?php echo $page_link ?> </li>
                <?php endforeach ?>    
            </ul>
        <?php endif ?>
        <?php
        $links = ob_get_clean();
        return apply_filters('sa_bootstap_paginate_links', $links);
}

function posts_link_next_class($format){
    $format = str_replace('href=', 'class = "post-links__link post-links__link--next" href=', $format);
    return $format;
}
add_filter('next_post_link', 'posts_link_next_class');




function posts_link_prev_class($format) {
    $format = str_replace('href=', 'class = "post-links__link post-links__link--prev" href=', $format);
    return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');

add_theme_support('menus');

function blog_theme_widgets_init() {
    register_sidebar( array (
        'name' => esc_html__('Sidebar', 'blog-theme'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'blog_theme'),
        'before_widget' => null,
        'after_widget' => null,

    ));
}

add_action('widgets_init', 'blog_theme_widgets_init');




add_action( 'wp_ajax_'        . 'form_recall', 'form_recall' );
add_action( 'wp_ajax_nopriv_' . 'form_recall', 'form_recall' );

function form_recall() {

  $form_data = $_POST['form']; 

  if ( empty( $form_data['your_name'] ) || empty( $form_data['your_tel'] ) || empty( $form_data['msg'] ) ) {
    wp_send_json_error( array(
      'message' => 'Необходимо заполнить все поля'
    ) );
  }

  $your_name = sanitize_text_field( $form_data['your_name'] );
  $your_tel = sanitize_text_field( $form_data['your_tel'] );
  $msg = sanitize_text_field( $form_data['msg'] );

  $mail_theme = "Сообщение из формы обратной связи";
  $email_to = 'vova.prudnikov.228@gmail.com';

  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: boot@" . $_SERVER["HTTP_HOST"] . "\r\n";

  $multipart = "<h1>" . $mail_theme . "</h1>";
  $multipart .= "<p><b>Имя пользователя:<b> " . $your_name . "</p>";
  $multipart .= "<p><b>Телефон:<b> " . $your_tel . "</p>";
  $multipart .= "<p><b>Сообщение:<b> " . $msg . "</p>";

  if ( wp_mail( $email_to, $mail_theme, $multipart, $headers ) ) {
    wp_send_json_success( array(
      'message' => 'Спасибо! Ваше сообщение отправлено'
    ) );
  }

  wp_send_json_error( array(
    'message' => 'Произошла ошибка'
  ) );
}







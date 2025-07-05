<?php

//メニューの投稿を追加
function register_menu_post_type() {
  register_post_type('menu', [
    'labels' => [
      'name' => 'メニュー',
      'singular_name' => 'メニュー',
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'menu'],
    'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
    'menu_position' => 5,
    'menu_icon' => 'dashicons-food',
  ]);
}
add_action('init', 'register_menu_post_type');


// アイキャッチ画像を有効にする
function theme_setup() {
  add_theme_support('post-thumbnails'); // 投稿にアイキャッチ画像を追加
}
add_action('after_setup_theme', 'theme_setup');



// CSS, JSの読み込み
function my_enqueue_assets() {
  // 共通CSS
  wp_enqueue_style(
    'common-css',
    get_template_directory_uri() . '/assets/css/common.css',
    [],
    filemtime(get_template_directory() . '/assets/css/common.css')
  );

  // 共通JS
  wp_enqueue_script(
    'common-js',
    get_template_directory_uri() . '/assets/js/common.js',
    [],
    filemtime(get_template_directory() . '/assets/js/common.js'),
    true
  );

  // Font Awesome
  wp_enqueue_script(
    'font-awesome',
    'https://kit.fontawesome.com/5cb8774097.js',
    [],
    null,
    false
  );

  // Google Fonts
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&family=Noto+Serif+JP:wght@700&display=swap',
    [],
    null
  );


  // トップページ専用
  if (is_front_page()) {
    wp_enqueue_style(
      'top-css',
      get_template_directory_uri() . '/assets/css/top.css',
      [],
      filemtime(get_template_directory() . '/assets/css/top.css')
    );

    wp_enqueue_script(
      'top-js',
      get_template_directory_uri() . '/assets/js/top.js',
      [],
      filemtime(get_template_directory() . '/assets/js/top.js'),
      true
    );
  }
  
  // 固定ページ「about」専用（page-about.phpに対応）
  if (is_page('about')) {
    wp_enqueue_style(
      'about-css',
      get_template_directory_uri() . '/assets/css/about.css',
      [],
      filemtime(get_template_directory() . '/assets/css/about.css')
    );

    wp_enqueue_script(
      'about-js',
      get_template_directory_uri() . '/assets/js/about.js',
      [],
      filemtime(get_template_directory() . '/assets/js/about.js'),
      true
    );
  }


  // 投稿ページ「menu」アーカイブ専用（archive-menu.phpに対応）
  if (is_archive('menu')) {
    wp_enqueue_style(
      'archive-menu-css',
      get_template_directory_uri() . '/assets/css/archive-menu.css',
      [],
      filemtime(get_template_directory() . '/assets/css/archive-menu.css')
    );
  }

  // 投稿ページ「menu」個別専用（archive-menu.phpに対応）
  if (is_singular('menu')) {
    wp_enqueue_style(
      'single-menu-css',
      get_template_directory_uri() . '/assets/css/single-menu.css',
      [],
      filemtime(get_template_directory() . '/assets/css/single-menu.css')
    );
  }



  // 固定ページ「contact」専用（page-contact.phpに対応）
  if (is_page('contact')) {
    wp_enqueue_style(
      'contact-css',
      get_template_directory_uri() . '/assets/css/contact.css',
      [],
      filemtime(get_template_directory() . '/assets/css/contact.css')
    );

    wp_enqueue_script(
      'contact-js',
      get_template_directory_uri() . '/assets/js/contact.js',
      [],
      filemtime(get_template_directory() . '/assets/js/contact.js'),
      true
    );
  }

  // 固定ページ「thanks」専用（page-thanks.phpに対応）
  if (is_page('thanks')) {
    wp_enqueue_style(
      'thanks-css',
      get_template_directory_uri() . '/assets/css/thanks.css',
      [],
      filemtime(get_template_directory() . '/assets/css/thanks.css')
    );
  }

  // 固定ページ「access」専用（page-access.phpに対応）
  if (is_page('access')) {
    wp_enqueue_style(
      'access-css',
      get_template_directory_uri() . '/assets/css/access.css',
      [],
      filemtime(get_template_directory() . '/assets/css/access.css')
    );
  }
}
add_action('wp_enqueue_scripts', 'my_enqueue_assets');

?>
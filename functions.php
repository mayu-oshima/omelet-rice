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
?>
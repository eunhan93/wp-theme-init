<?php
  function my_enqueue_script(){ // 스타일 시트 적용
    wp_enqueue_style('style', get_stylesheet_uri());
  }
  add_action('wp_enqueue_scripts', 'my_enqueue_script');

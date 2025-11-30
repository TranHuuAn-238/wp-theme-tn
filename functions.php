<?php
// Hàm xử lý nhúng css bootstrap
function load_css_bootstrap() {
    wp_enqueue_style( "css_bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css", array(), "1.0.3", "all");
}

// Hàm xử lý nhúng js bootstrap
function load_js_bootstrap() {
    wp_enqueue_script( "js_bootstrap", get_template_directory_uri() . "/js/bootstrap.min.js", "jquery", "1.0.1", true);
}
add_action("wp_enqueue_scripts", "load_css_bootstrap");
add_action("wp_enqueue_scripts", "load_js_bootstrap");
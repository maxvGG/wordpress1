<?php
function cms_recources() {

        wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'cms_recources');

?>

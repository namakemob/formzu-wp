<?php

function formzu_admin_enqueue_js() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('thickbox');

    wp_enqueue_style('thickbox');
}


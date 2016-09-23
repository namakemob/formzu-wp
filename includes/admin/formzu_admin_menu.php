<?php

function formzu_admin_menu() {
    $slag_list = array(
        'formzu'   => 'formzu-admin',
        'howtouse' => 'how-to-use',
    );
    $load_slag_list = array();

    add_menu_page(
        __('フォームズ1', 'formzu-admin'),
        __('フォームズ',  'formzu-admin'),
        'manage_options',
        $slag_list['formzu'],
        'echo_formzu_admin_page',
        'dashicons-email-alt',
        '30'
    );

    $load_slag_list['formzu'] = add_submenu_page(
        $slag_list['formzu'],
        __('フォーム管理（フォームズ）', 'formzu-admin'),
        __('フォーム管理',               'formzu-admin'),
        'manage_options',
        $slag_list['formzu'],
        'echo_formzu_admin_page'
    );

    $load_slag_list['howtouse'] = add_submenu_page(
        $slag_list['formzu'],
        __('フォームズWordPressプラグインの使い方', 'formzu-admin'),
        __('使い方',                                'formzu-admin'),
        'manage_options',
        $slag_list['howtouse'],
        'echo_how_to_use_formzu'
    );

    do_action( 'formzu_loaded_menu', $slag_list, $load_slag_list );
}

<?php

/**
 * Disable News Blast
 */
$GLOBALS['redux_notice_check'] = false;

/**
 * Disable Update Notice
 */
$GLOBALS['redux_update_check'] = false;

/**
 * Remove redux menu under the tools
 */
function wpbucket_remove_redux_menu() {
    remove_submenu_page( 'tools.php', 'redux-about' );
}

add_action( 'admin_menu', 'wpbucket_remove_redux_menu', 12 );

/**
 * Remove Redux Framework Dashboard widget
 */
function example_remove_dashboard_widget() {
    remove_meta_box( 'redux_dashboard_widget', 'dashboard', 'side' );
}

add_action( 'wp_dashboard_setup', 'example_remove_dashboard_widget', 12 );

// Include Custom field Select Text
function wpbucket_redux_select_text_field( $field ) {
    return WPBUCKET_THEME_DIR . '/core/theme-options/custom-fields/select_text/field_select_text.php';
}

add_filter( "redux/wpbucket_options/field/class/select_text", "wpbucket_redux_select_text_field" );

// Include custom field Select Label
function wpbucket_redux_select_label_field( $field ) {
    return WPBUCKET_THEME_DIR . '/core/theme-options/custom-fields/select_label/field_select_label.php';
}

add_filter( "redux/wpbucket_options/field/class/select_label", "wpbucket_redux_select_label_field" );

// Include modified field Select Image
function wpbucket_redux_select_image_field( $field ) {
    return WPBUCKET_THEME_DIR . '/core/theme-options/custom-fields/select_image/field_select_image.php';
}

add_filter( "redux/wpbucket_options/field/class/select_image", "wpbucket_redux_select_image_field" );

// Theme option configuration
if ( !isset( $redux_demo ) ) {

    // filter config files directory
    $wpbucket_config_files_dir = apply_filters( 'wpbucket_config_files_dir', '' );

    // check if value is filtered
    if ( !empty( $wpbucket_config_files_dir ) ) {
        $file_url = trailingslashit( $wpbucket_config_files_dir ) . 'theme-options.php';

        if ( file_exists( $file_url ) ) {
            require_once $file_url;
        }
    }

    // Load from Parent theme is file is available
    else if ( file_exists( WPBUCKET_THEME_DIR . '/includes/configuration/theme-options.php' ) ) {
        require_once WPBUCKET_THEME_DIR . '/includes/configuration/theme-options.php';
    }
}




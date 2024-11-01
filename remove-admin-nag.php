<?php
/*
Plugin Name: WP Remove Admin Register Nag
Plugin URI: https://wordpress.org/plugins/wp-remove-admin-register-nag/
Description: Removes the registration Messages in Dashboard
Author: WebRaider - RazielKanos
Author URI: https://www.web-raider.com
Version: 1.010

/* Verbiete den direkten Zugriff auf die Plugin-Datei */
if ( ! defined( 'ABSPATH' ) ) exit;
/* Nach dieser Zeile den Code einfügen*/

add_action('admin_head', 'mtrkan_kill_register_nag');

function mtrkan_kill_register_nag() {
  echo '<style>
    .updated,.notice-error,.eg-update-notice-wrap,.update-nag,.otgs-is-dismissible,.error_notice_ff_fluentform_pro_license,.elementor-message,.trp-notice,.rml-update-notice,.updated envira-notice,.is-dismissible,.notice-info,.update-nag,.yellowpencil-notice,.modula-notice,.error-is-dismissible,.update-nag,.yellowpencil-notice,.fs-notice  {
    display: none !important;
}
  </style>';
}
/* Nach dieser Zeile KEINEN Code mehr einfügen*/
?>
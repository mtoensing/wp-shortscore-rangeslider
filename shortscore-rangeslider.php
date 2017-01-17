<?php

/*
  Plugin Name: SHORTSCORE Rangeslider
  Plugin URI: http://www.shortscore.de
  Description: Pure frontend slider for the shortscore dropdown.
  Version: 1.0
  Author: MarcDK
  Author URI: http://www.marctv.de
  License: GPL2
 */

function add_shortscore_rangeslider_scripts()
{
    if (is_user_logged_in()) {
        wp_enqueue_style(
            "jquery.shortscorerangeslider.css", WP_PLUGIN_URL . "/wp-shortscore-rangeslider/rangeslider.css", false, "0.1");

        wp_enqueue_script(
            "jquery.shortscorerangeslider.js", WP_PLUGIN_URL . "/wp-shortscore-rangeslider/rangeslider.js", array("jquery"), "0.1", false);

        wp_enqueue_script(
            "jquery.shortscorerangeslider-init.js", WP_PLUGIN_URL . "/wp-shortscore-rangeslider/rangeslider-init.js", array("jquery"), "0.1", false);
    }
}

add_action('wp_print_styles', 'add_shortscore_rangeslider_scripts');

?>

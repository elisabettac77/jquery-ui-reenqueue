<?php
/**
 * Plugin Name: JQuery UI Reenqueue
 * Plugin URI: https://elica-webservices.it/
 * Description: A plugin to reenqueue JQuery UI and make non-coders' life easier
 * Version: 1.1
 * Requires PHP: 7.0
 * Requires CP: 2.0
 * Author: Elisabetta Carrara
 * Author URI: https://elica-webservices.it/
 * License: GNU General Public License v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: jquery-ui-reenqueue
 * Domain Path: /languages/
 * @author Elisabetta Carrara <info@elica-webservices.it>
 * @copyright Copyright (c) 2024, ELI.CA. Web Services
**/

function ec_enqueue_jquery_ui_from_cdn() {
    // Enqueue jQuery UI CSS
    wp_enqueue_style('ec_jquery-ui-css', 'https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css');

    // Enqueue jQuery UI Core
    wp_enqueue_script('jquery-ui-core');

    // Enqueue specific jQuery UI components with correct dependencies
    wp_enqueue_script('ec_jquery-ui-mouse', 'https://code.jquery.com/ui/1.14.1/jquery-ui.min.js', array('jquery-ui-core'), null, true);
    wp_enqueue_script('ec_jquery-ui-datepicker', 'https://code.jquery.com/ui/1.14.1/jquery-ui.min.js', array('jquery-ui-core'), null, true);
    wp_enqueue_script('ec_jquery-ui-resizable', 'https://code.jquery.com/ui/1.14.1/jquery-ui.min.js', array('jquery-ui-core'), null, true);
    wp_enqueue_script('ec_jquery-ui-sortable', 'https://code.jquery.com/ui/1.14.1/jquery-ui.min.js', array('jquery-ui-core'), null, true);
}
add_action('wp_enqueue_scripts', 'ec_enqueue_jquery_ui_from_cdn', 1);

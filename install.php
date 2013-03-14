<?php /* install */

/* Runs when plugin is activated */
register_activation_hook(__FILE__,'tt_subscribe_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__, 'tt_subscribe_remove' );

function tt_subscribe_install() {
/* Creates new database field */
add_option("tt_subscribe_data", 'Default', '', 'yes');
}

function tt_subscribe_remove() {
/* Deletes the database field */
delete_option('tt_subscribe_data');
}
?>
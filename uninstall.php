<?php
// 1-Click Child Theme uninstall script
// deletes all database options when plugin is removed
// @since 1.0
// 
// Direct calls to this file are Forbidden when core files are not present

if ( !function_exists('add_action') ){
header('Status: 403 Forbidden');
header('HTTP/1.1 403 Forbidden');
exit();
}

if ( !current_user_can('manage_options') ){
header('Status: 403 Forbidden');
header('HTTP/1.1 403 Forbidden');
exit();
}
// if uninstall is not called from WordPress then exit
if (!defined('WP_UNINSTALL_PLUGIN')) exit();

// this plugin does not add any options to the database
// if it would, they would be removed here

// Thanks for using this plugin
// If you'd like to try again someday check out http://softlinks.co/wordpress where it lives and grows

?>
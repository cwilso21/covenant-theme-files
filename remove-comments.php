<?php
/*
Plugin Name: Remove Comments From Sidebar
Description: We don't and never will take comments. This cleans up the admin menu.
Version: 0.1
License: GPL
Author: John Galyon
Author URI: http://www.covenanthealth.com
*/

    add_action( 'admin_menu', 'my_remove_menu_pages' );

    function my_remove_menu_pages() {
        remove_menu_page('edit-comments.php');
    }
?>
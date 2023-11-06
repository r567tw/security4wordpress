<?php
/*
Plugin Name: Disable XML-RPC
Description: Disables XML-RPC API in WordPress.
Author: Your Name
Version: 1.0
*/

// 禁用 XML-RPC
add_filter( 'xmlrpc_enabled', '__return_false' );
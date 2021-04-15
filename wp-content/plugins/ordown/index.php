<?php
/*
Plugin Name: ordown
Plugin URI: http://www.orwei.com
Description: ordown独立下载页面/弹窗下载/网页演示插件，可实现N+联盟广告，增加网站收益，前端设计优化，升级用户下载体验！
Version: 1.4.3
Author:微互联
Author URI: http://www.orwei.com
*/
global $wpdb;
define("ordown",plugin_dir_path(__FILE__));
add_action('admin_menu','ordown_menu');
function ordown_menu() {
	if (function_exists('add_menu_page')) {
		add_menu_page('Ordown下载','Ordown下载','administrator','ordown/ordownadmin.php', '','');
	}
}
?>
<?php include('ordown.php'); ?>
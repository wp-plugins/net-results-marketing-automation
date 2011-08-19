<?php
/*
Plugin Name: Net-Results Marketing Automation
Plugin URI: http://wordpress.org/extend/plugins/netresults/
Description: Enables <a href="http://www.net-results.com/">Net-Results Marketing Automation</a> on all pages.
Version: 1.0.1
Author: Net-Results Marketing Automation
*/

if (!defined('WP_CONTENT_URL'))
      define('WP_CONTENT_URL', get_option('siteurl').'/wp-content');
if (!defined('WP_CONTENT_DIR'))
      define('WP_CONTENT_DIR', ABSPATH.'wp-content');
if (!defined('WP_PLUGIN_URL'))
      define('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
if (!defined('WP_PLUGIN_DIR'))
      define('WP_PLUGIN_DIR', WP_CONTENT_DIR.'/plugins');

function activate_netresults() {
  add_option('ps_id');
}

function deactive_netresults() {
  delete_option('ps_id');
}

function admin_init_netresults() {
  register_setting('netresults', 'ps_id');
}

function admin_menu_netresults() {
  add_options_page('Net-Results Marketing Automation', 'Net-Results Marketing Automation', 8, 'netresults', 'options_page_netresults');
}

function options_page_netresults() {
  include(WP_PLUGIN_DIR.'/netresults/options.php');
}

function synchronous_netresults($ps_id) {
?>
<script id="__maSrc" type="text/javascript" data-pid="<?php echo $ps_id;?>">
(function () {
	var d=document,t='script',c=d.createElement(t),s=(d.URL.indexOf('https:')==0?'s':''),p;
	c.type = 'text/java'+t;
	c.src = 'http'+s+'://'+s+'c.cdnma.com/apps/capture.js';
	p=d.getElementsByTagName(t)[0];p.parentNode.insertBefore(c,p);
}());
</script>
<?php
}

function netresults() {
  $ps_id = get_option('ps_id');
  synchronous_netresults($ps_id);
}

register_activation_hook(__FILE__, 'activate_netresults');
register_deactivation_hook(__FILE__, 'deactive_netresults');

if (is_admin()) {
  add_action('admin_init', 'admin_init_netresults');
  add_action('admin_menu', 'admin_menu_netresults');
}

if (!is_admin()) {
	add_action('wp_footer', 'netresults');
}
?>

<?php

/**
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://mbmti.ir
 * @since             1.0.0
 * @package           MBM_IPAK_CRM
 *
 * @wordpress-plugin
 * Plugin Name:       ایپک ( مدیریت ارتباط با مشتری )
 * Plugin URI:        http://mbmti.ir
 * Description:       سیستم مدیریت ارتباط با مشتری ایپک
 * Version:           1.0.0
 * Author:            ایپک
 * Author URI:        http://mbmti.ir/Author
 * Text Domain:       mbm-ipak-crm
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) die;

/* General Definition
******************************/
define('MBM_IPAK_CRM_VERSION', '1.0.0');

define('MBM_IPAK_CRM_BASE', plugin_dir_path(__FILE__));
define('MBM_IPAK_CRM_URI', plugin_dir_url(__FILE__));
define('MBM_IPAK_CRM_FILE', __FILE__);
define('MBM_IPAK_CRM_Include', MBM_IPAK_CRM_BASE . 'include/');
define('MBM_IPAK_CRM_View', MBM_IPAK_CRM_BASE . 'view/');

require MBM_IPAK_CRM_Include . 'home.php';
require MBM_IPAK_CRM_Include . 'crm.php';


foreach (glob(MBM_IPAK_CRM_Include."hooks/*.php") as $filename)
{
    include $filename;
}

function MBM_Ipak_CRM_Init()
{
    if (class_exists('MBM_Ipak_Core')) {
        $MBM_Ipak_CRM = new MBM_Ipak_CRM();
    } else {
        function sample_admin_notice__error() {
            $class = 'notice notice-error';
            $message = 'برای استفاده از افزونه مدیریت ارتباط با مشتری باید افزونه حسابداری ایپک را نصب نمائید که کاملا رایگان است';
         
            printf( '<div class="%1$s"><p style="color: #fff;background: red;">%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
        }
        add_action( 'admin_notices', 'sample_admin_notice__error' );
    }
}

add_action("init","MBM_Ipak_CRM_Init");

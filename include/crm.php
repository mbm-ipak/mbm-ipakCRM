<?php
if (class_exists('MBM_Ipak_Core')) {
    class MBM_Ipak_CRM extends MBM_Ipak_Core
    {
        public function __construct()
        {
            add_action("admin_menu", array($this, "menu"));
            add_filter("mbm_ipak_models_url", array($this, "url"), 10, 1);
            register_activation_hook(MBM_IPAK_CRM_FILE, array($this, "install"));
        }

        public function run()
        {
        }

        public function dashboard()
        {
            $MBM_Ipak_CRM_Home = new MBM_Ipak_CRM_Home;
            $MBM_Ipak_CRM_Home->home();
        }

        public function organization()
        {
            $entity =  $this->get_entity("organization");
            $entity->render();
        }

        public function contactcrm()
        {
            $entity =  $this->get_entity("contactcrm");
            $entity->render();
        }
        public function projectcrm()
        {
            $entity =  $this->get_entity("projectcrm");
            $entity->render();
        }
        public function statusprojectcrm()
        {
            $entity =  $this->get_entity("statusprojectcrm");
            $entity->render();
        }
        public function UserInProjectCRM()
        {
            $entity =  $this->get_entity("UserInProjectCRM");
            $entity->render();
        }
      

        public function url($urls)
        {
            $urls[] = MBM_IPAK_CRM_Include;
            return $urls;
        }

        public  function menu()
        {
            add_menu_page('ایپک ( مدیریت ارتباط با مشتری )', 'ایپک ( مدیریت ارتباط با مشتری )', 'manage_options', 'ipak-CRM-dashboard', array($this, "dashboard"));
            add_submenu_page('ipak-CRM-dashboard', 'داشبورد', 'داشبورد ', 'manage_options', 'ipak-CRM-dashboard', array($this, "dashboard"));
            add_submenu_page('ipak-CRM-dashboard', 'سازمان/شرکت', 'سازمان/شرکت', 'manage_options', 'ipak-CRM-organization', array($this, "organization"));
            add_submenu_page('ipak-CRM-dashboard', 'مخاطب', 'مخاطب', 'manage_options', 'ipak-CRM-contactcrm', array($this, "contactcrm"));
            add_submenu_page('ipak-CRM-dashboard', 'پروژه', 'پروژه', 'manage_options', 'ipak-CRM-projectcrm', array($this, "projectcrm"));
            add_submenu_page('ipak-CRM-dashboard', 'تعریف وضعیت پروژه', 'تعریف وضعیت پروژه', 'manage_options', 'ipak-CRM-statusprojectcrm', array($this, "statusprojectcrm"));
            add_submenu_page('ipak-CRM-dashboard', 'اعضای پروژه', 'اعضای پروژه', 'manage_options', 'ipak-CRM-UserInProjectCRM', array($this, "UserInProjectCRM"));
            

            $this->add_entity(mbm_ipak\tools::get_model_from_url(), "list", MBM_IPAK_CRM_Include);
        }

        public function count_menu()
        {
            global $wpdb;
            $table      = $wpdb->prefix . "hesab_model";
            $table_meta = $wpdb->prefix . "hesab_model_meta";
            $sql = "select ";

            $query_string       = $wpdb->prepare($sql, array());
            $items       = $wpdb->get_results($query_string, ARRAY_A);

            add_submenu_page('ipak-CRM-dashboard', 'تیکت های من', 'تیکت های من' . '<span class="update-plugins count-1"><span class="plugin-count">1</span></span>', 'manage_options', 'ipak-CRM-report_my_CRM', array($this, "report_my_CRM"));
            add_submenu_page('ipak-CRM-dashboard', 'تیکت های بخش ', 'تیکت های بخش ', 'manage_options', 'ipak-CRM-report_unit_CRM', array($this, "report_unit_CRM"));
        }
        public function install()
        {
            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            $sql = new MBM_Ipak_CRM_Sql_Scripts;
            dbDelta($sql->get_install_script());
        }
    }
}

<?php
if (class_exists('MBM_Ipak_Core'))
{
    class MBM_Ipak_CRM_Home extends MBM_Ipak_Base_Class
    {
        public function __construct()
        {
        }
    
        function home()
        {
            global $wpdb;
    
            $this->view("home/home",MBM_IPAK_CRM_View);
        }
    }
}


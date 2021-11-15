<?php
class MBM_Ipak_CRM_Sql_Scripts
{
  public function get_install_script()
  {
    global $wpdb;
    $table_name = $wpdb->prefix . "hesab_model";
    $charset_collate = $wpdb->get_charset_collate();
    $sql = "";

    $sql .= "INSERT INTO $table_name(id,type_id,title) VALUES('-2031','203','شروع نشده') ON DUPLICATE KEY UPDATE type_id = '203';  ";
    $sql .= "INSERT INTO $table_name(id,type_id,title) VALUES('-2032','203','در حال اجرا') ON DUPLICATE KEY UPDATE type_id = '203';  ";
    $sql .= "INSERT INTO $table_name(id,type_id,title) VALUES('-2033','203','تمام شده') ON DUPLICATE KEY UPDATE type_id = '203';  ";
    $sql .= "INSERT INTO $table_name(id,type_id,title) VALUES('-2034','203','متوقف شده') ON DUPLICATE KEY UPDATE type_id = '203';  ";

    return $sql;
  }
}

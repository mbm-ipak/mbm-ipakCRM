<?php
$this->models["TaskCRM"] = [];
$this->models["TaskCRM"]["id"] = "205";
$this->models["TaskCRM"]["name"] = "TaskCRM";
$this->models["TaskCRM"]["label"] = "کار";
$this->models["TaskCRM"]["primary_key"] = "id";
$this->models["TaskCRM"]["fields"] = array(
    "id" => array(
        "title" => "id",
        "label" => "شماره سیستمی ",
        "sortable" => true,
        "in_table"=>true,
        "in_form" => true,
        "is_primary" => true
    ),
    "title" => array(
        "title" => "title",
        "label" => "عنوان",
        "sortable" => true,
        "in_form" => true,
        "is_title" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-4")
    ),
    "start_date" => array(
        "title" => "start_date",
        "label" => " تاریخ شروع",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "date", "size" => 50, "class" => "col-md-4")
    ),
    "end_date" => array(
        "title" => "end_date",
        "label" => " تاریخ پایان",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "date", "size" => 50, "class" => "col-md-4")
    ),
    "statusprojectcrm_id" => array(
        "title" => "statusprojectcrm_id",
        "label" => "وضعیت",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select", "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=203", "key" => "ID", "label" => "title"], "size" => 50, "class" => "col-md-4")
    ),
    "organizationId" => array(
        "title" => "organizationId",
        "label" => "سازمان/شرکت",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=200", "key" => "id", "label" => "title"], "size" => 50, "class" => "col-md-4")
    ),
    "ProjectCrmId" => array(
        "title" => "ProjectCrmId",
        "label" => "پروژه",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=202", "key" => "id", "label" => "title"], "size" => 50, "class" => "col-md-4")
    ),
    "ContactCrmId" => array(
        "title" => "ContactCrmId",
        "label" => "مخاطب",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=201", "key" => "id", "label" => "title"], "size" => 50, "class" => "col-md-4")
    ),
    "user_id" => array(
        "title" => "user_id",
        "label" => "کاربر",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "users","where" => " ", "key" => "ID", "label" => "display_name"], "size" => 50, "class" => "col-md-4")
    ),
    "description" => array(
        "title" => "description",
        "label" => "توضیحات",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "textarea","height"=>70, "size" => 1000,"class"=>"col-md-12")
    )
);

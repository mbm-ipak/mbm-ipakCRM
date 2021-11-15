<?php
$this->models["TaskCRM"] = [];
$this->models["TaskCRM"]["id"] = "205";
$this->models["TaskCRM"]["name"] = "TaskCRM";
$this->models["TaskCRM"]["label"] = "اعضای پروژه";
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
    "ProjectCrmId" => array(
        "title" => "ProjectCrmId",
        "label" => "پروژه",
        "sortable" => true,
        "is_require" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=202", "key" => "id", "label" => "title"], "size" => 50, "class" => "col-md-6")
    ),
    "user_id" => array(
        "title" => "user_id",
        "label" => "کاربر",
        "sortable" => true,
        "is_require" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "users","where" => " ", "key" => "ID", "label" => "display_name"], "size" => 50, "class" => "col-md-6")
    )
);

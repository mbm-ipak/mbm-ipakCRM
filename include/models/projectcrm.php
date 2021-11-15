<?php
$this->models["projectcrm"] = [];
$this->models["projectcrm"]["id"] = "202";
$this->models["projectcrm"]["name"] = "projectcrm";
$this->models["projectcrm"]["label"] = "پروژه";
$this->models["projectcrm"]["primary_key"] = "id";
$this->models["projectcrm"]["fields"] = array(
    "id" => array(
        "title" => "id",
        "label" => "شماره سیستمی پروژه",
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
        "is_require"=>true,
        "is_title" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-4")
    ),
    "statusprojectcrm_id" => array(
        "title" => "statusprojectcrm_id",
        "label" => "وضعیت",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select", "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=203", "key" => "ID", "label" => "title"], "size" => 50, "class" => "col-md-4")
    ),
    "organization_id" => array(
        "title" => "organization_id",
        "label" => "سازمان/شرکت",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select", "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=200", "key" => "ID", "label" => "title"], "size" => 50, "class" => "col-md-4")
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

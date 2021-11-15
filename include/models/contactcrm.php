<?php
$this->models["contactcrm"] = [];
$this->models["contactcrm"]["id"] = "201";
$this->models["contactcrm"]["name"] = "contactcrm";
$this->models["contactcrm"]["label"] = "مخاطب";
$this->models["contactcrm"]["primary_key"] = "id";
$this->models["contactcrm"]["fields"] = array(
    "id" => array(
        "title" => "id",
        "label" => "شماره سیستمی مخاطب",
        "sortable" => true,
        "in_table"=>true,
        "in_form" => true,
        "is_primary" => true
    ),
    "title" => array(
        "title" => "title",
        "label" => "نام",
        "sortable" => true,
        "in_form" => true,
        "is_require"=>true,
        "is_title" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-4")
    ),

    "organization_id" => array(
        "title" => "organization_id",
        "label" => "سازمان/شرکت",
        "sortable" => true,
        "in_form" => true,
        "in_table" => true,
        "type" => array("type" => "select","auto-select"=>true, "select" => ["model"=> $wpdb->prefix . "hesab_model","where" => "type_id=200", "key" => "ID", "label" => "title"], "size" => 50, "class" => "col-md-4")
    ),
    "role" => array(
        "title" => "role",
        "label" => "سمت",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-4")
    ),
    "phone" => array(
        "title" => "phone",
        "label" => "تلفن",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-4")
    ),
    "email" => array(
        "title" => "email",
        "label" => "ایمیل",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 100,"class"=>"col-md-4")
    ),
    "website" => array(
        "title" => "website",
        "label" => "سایت",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 100,"class"=>"col-md-4")
    ),
    "address" => array(
        "title" => "address",
        "label" => "آدرس",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "textarea","height"=>70, "size" => 1000,"class"=>"col-md-12")
    ),
    "postal_code" => array(
        "title" => "postal_code",
        "label" => "کد پستی",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 20,"class"=>"col-md-4")
    ),
    "city" => array(
        "title" => "city",
        "label" => "شهر",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-4")
    ),
    "province" => array(
        "title" => "province",
        "label" => "استان",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-4")
    ),
    "country" => array(
        "title" => "country",
        "label" => "کشور",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-4")
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

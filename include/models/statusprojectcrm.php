<?php
$this->models["statusprojectcrm"] = [];
$this->models["statusprojectcrm"]["id"] = "203";
$this->models["statusprojectcrm"]["name"] = "statusprojectcrm";
$this->models["statusprojectcrm"]["label"] = "پروژه";
$this->models["statusprojectcrm"]["primary_key"] = "id";
$this->models["statusprojectcrm"]["fields"] = array(
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
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-6")
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

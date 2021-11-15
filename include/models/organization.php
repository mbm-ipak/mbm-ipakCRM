<?php
$this->models["organization"] = [];
$this->models["organization"]["id"] = "200";
$this->models["organization"]["name"] = "organization";
$this->models["organization"]["label"] = "سازمان/شرکت";
$this->models["organization"]["primary_key"] = "id";
$this->models["organization"]["fields"] = array(
    "id" => array(
        "title" => "id",
        "label" => "شماره سیستمی سازمان/شرکت",
        "sortable" => true,
        "in_table"=>true,
        "in_form" => true,
        "is_primary" => true
    ),
    "title" => array(
        "title" => "title",
        "label" => "عنوان سازمان/شرکت",
        "sortable" => true,
        "in_form" => true,
        "is_title" => true,
        "is_require"=>true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-6")
    ),
    "phone" => array(
        "title" => "phone",
        "label" => "تلفن",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-6")
    ),
    "email" => array(
        "title" => "email",
        "label" => "ایمیل",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 100,"class"=>"col-md-6")
    ),
    "website" => array(
        "title" => "website",
        "label" => "سایت",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 100,"class"=>"col-md-6")
    ),
    "address" => array(
        "title" => "address",
        "label" => "آدرس",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "textarea","height"=>100, "size" => 1000,"class"=>"col-md-12")
    ),
    "postal_code" => array(
        "title" => "postal_code",
        "label" => "کد پستی",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 20,"class"=>"col-md-6")
    ),
    "city" => array(
        "title" => "city",
        "label" => "شهر",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-6")
    ),
    "province" => array(
        "title" => "province",
        "label" => "استان",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-6")
    ),
    "country" => array(
        "title" => "country",
        "label" => "کشور",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "text", "size" => 50,"class"=>"col-md-6")
    ),
    "description" => array(
        "title" => "description",
        "label" => "توضیحات",
        "sortable" => true,
        "in_form" => true,
        "in_table"=>true,
        "type" => array("type" => "textarea","height"=>100, "size" => 1000,"class"=>"col-md-12")
    )
);

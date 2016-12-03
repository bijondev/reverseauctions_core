<?php
session_start();
 include "mainclass.php";
define("base_url", "http://localhost:8080/reverseauctions_core/");
define("login_error","Invalid Email & Password! Please use Correct email & password.");
$companytype = array('buyer','seller');
$status = array('yes','no' );
$pricedistance = array(10,20,30,40,50,60,70,80,90,100);
 //include "eden.php";
$obj=new oopCrud;
?>
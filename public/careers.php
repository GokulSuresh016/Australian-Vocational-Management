<?php
require_once(dirname(__FILE__)."/../Assets/config/db_connect.php");
$obj=new db_connect;
$page="home";
include"../template/head.php";
include"../template/topbar.php";
include"../template/menu.php";
$type=1;
include"../pages/careers.php";
include"../pages/tage_line.php";
include"../pages/project.php";
include"../template/footer.php";
?>
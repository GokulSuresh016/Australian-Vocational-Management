<?php
require_once(dirname(__FILE__)."/../Assets/config/db_connect.php");
$obj=new db_connect;
$page="home";
include"../template/head.php";
include"../template/topbar.php";
include"../template/menu.php";
include"../pages/about_story.php";
//include"../pages/tage_line.php";
include"../pages/feathers.php";
include"../pages/tag_line_2.php";
include"../template/footer.php";
?>
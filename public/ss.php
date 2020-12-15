<?php
require_once(dirname(__FILE__)."/../Assets/config/db_connect.php");
$obj=new db_connect;
if(isset($_GET['search'])){
    $search=$_GET['search'];
	//$search=preg_replace("#[^0-9a-z#i","",$search);
	echo $search;
	$servicesSingle=$obj->select_any_one("tbl_services_services","title LIKE '$search'");	
	echo $servicesSingle;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <title>
	  search
	  </title>
	  </head>
	  <body>
	  <form action="ss.php" method="GET">
	  <input type="text" name="search" placeholder="search for members.."/>
	  <input type="submit" value=">>"/>
	  <?php
	  if($servicesSingle<=0){
		   echo "empty";
	  }
	  else{
	 echo $servicesSingle['title'];
		  }
	  ?>
	  </form>
	  </body>
	  </html>
	  
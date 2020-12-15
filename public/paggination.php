<?php
require_once(dirname(__FILE__)."/../Assets/config/db_connect.php");
$obj=new db_connect;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <title>paggination
	  </title>
	  </head>
	  <body>
	  <?php
	  $i=0;
	  $result_per_page=5;
		$serviceList=$obj->select_any("tbl_services_services","1");
		//echo $serviceList;
foreach($serviceList as $serviceSingle){
	//echo $serviceSingle['title'].'<br>';
	$i++;
}	
//echo $i.'<br>';
$number_of_pages=ceil($i/$result_per_page).'<br>';
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}
$this_page_first_result=($page-1)*$result_per_page;
echo $this_page_first_result;
$List=$obj->select_any("tbl_services_services","$this_page_first_result order by services_services_id LIMIT $result_per_page");
echo $List;
foreach($List as $serviceSingle){
	echo $serviceSingle['title'].'<br>';
}
for($page=1;$page<=$number_of_pages;$page++){
	echo '<a href=paggination.php?page='.$page.'>'.$page.'</a>';
}
	  ?>
	  </body>
	  </html>
<?php
if(isset($_GET['id']))
{
	$servicesSingle=$obj->select_any_one("tbl_services_services","services_services_id=".($_GET['id']+0)."");
}
else
{
    $_GET['id']=1;
    	$servicesSingle=$obj->select_any_one("tbl_services_services","services_services_id=1");
}
?>
<section>
<div class="w-100 pt-170 pb-150 dark-layer3 opc7 position-relative">
<div class="fixed-bg" style="background-image: url('../Assets/<?=str_replace("../","",$servicesSingle['image']);?>');"></div>
<div class="container">
<div class="page-top-wrap w-100">
<h1 class="mb-0"><?=$servicesSingle['title'];?></h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html" title="">Home</a></li>
<li class="breadcrumb-item"><a href="services.html?id=<?=$_GET['id'];?>" title="">Services</a></li>
<li class="breadcrumb-item active"><?=$servicesSingle['title'];?></li>
</ol>
</div>
</div>
</div>
</section>
<section>
<div class="w-100 pt-100 pb-100 position-relative">
<div class="container">
<div class="serv-detail-wrap w-100">
<div class="serv-detail-info w-100">
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-12">
<div class="serv-detail-info-inner w-100">
<i class="thm-clr fa fa-graduation-cap"></i>
<h2 class="mb-0"><?=$servicesSingle['title'];?></h2>
</div>
</div>
<div class="col-md-12 col-sm-12 col-lg-6">
<div class="serv-detail-info-inner w-100">

<a href="../Assets/<?=str_replace("../","",$servicesSingle['image']);?>" data-fancybox="gallery" title="<?=str_replace(" ","-",$servicesSingle['title']);?>"><img class="img-fluid w-100" src="../Assets/<?=str_replace("../","",$servicesSingle['image']);?>" alt="<?=str_replace(" ","-",$servicesSingle['title']);?>"></a>
</div>
</div>
<div class="col-md-12 col-sm-12 col-lg-6">
<p class="mb-0"><?=$servicesSingle['details'];?></p>
<p class="mb-0"><?=$servicesSingle['why_choose_us_for_this'];?></p>
</div>
</div>
</div>

</div>
</div>
</div>
</section>
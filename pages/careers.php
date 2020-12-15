<?php
$carrier=$obj->select_any_one("tbl_careers_career","1");
?>
<section>
<div class="w-100 pt-170 pb-150 dark-layer3 opc7 position-relative">
<div class="fixed-bg" style="background-image: url('../Assets/<?=str_replace("../","",$carrier['image']);?>');"></div>
<div class="container">
<div class="page-top-wrap w-100">
<h1 class="mb-0">Careers at AVM</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html" title="">Home</a></li>
<li class="breadcrumb-item"><a href="careers.html" title="">Careers</a></li>
<li class="breadcrumb-item active">Careers</li>
</ol>
</div>
</div>
</div>
</section>
<section>
<div class="w-100 pt-100 pb-100 position-relative">
<div class="container">
<div class="post-detail-wrap w-100">
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-8">
<div class="post-detail w-100">
<img class="img-fluid w-100" src="../Assets/<?=str_replace("../","",$carrier['image']);?>" alt="Careers-in-urjam">
<h2 class="mb-0">Careers</h2>
<p class="mb-0"><?=$carrier['details'];?></p>
</div>
</div>
<div class="col-md-6 col-sm-12 col-lg-4">
<aside class="sidebar-wrap w-100">

<div class="widget2  brd-rd5 w-100">
<h3>Our Services</h3>
<ul class="mb-0 list-unstyled w-100">
    <?php
                                                    	$services=$obj->select_any("tbl_services_services","1 order by services_services_id LIMIT 4");
							foreach($services as $servicesSingle)
							{
                                                    ?>
                                                    
                                                    <li><a href="services.html?id=<?=$servicesSingle['services_services_id'];?>" title="<?=$servicesSingle['title'];?>"><?=trim($servicesSingle['title']);?></a>&nbsp;</li>
                                                   <?php
							}
                                                   ?>
</ul>
</div>
</div>
</div>
</aside>
</div>
</div>
</div>
</div>
</div>
</section>

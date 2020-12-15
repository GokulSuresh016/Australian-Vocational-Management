<section>
<div class="w-100 pt-170 pb-150 dark-layer3 opc7 position-relative">
<div class="fixed-bg" style="background-image: url(assets/images/pagetop-bg.jpg);"></div>
<div class="container">
<div class="page-top-wrap w-100">
<h1 class="mb-0">Latest Project</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html" title="">Home</a></li>
<li class="breadcrumb-item active">Project</li>
</ol>
</div>
</div>
</div>
</section>
<section>
    <?php
    if($type==1)
    {
        $data="Completed";
        $projects=$obj->select_any("tbl_projects_project_details","status=1");
    }
    else if($type==2)
    {
        $data="Running";
        $projects=$obj->select_any("tbl_projects_project_details","status=2");
    }
    else
    {
        $data="Latest";
        $projects=$obj->select_any("tbl_projects_project_details","1");
    }
    ?>
                <div class="w-100 pt-210 pb-100 position-relative">
                    <div class="container">
                        <div class="sec-title w-100">
                            <div class="sec-title-inner d-inline-block">
                                <span class="d-block thm-clr">OUR WORKS</span>
                                <h3 class="mb-0">Some of Our <?=$data;?> Projects</h3>
                            </div>
                        </div>
                        <div class="proj-wrap w-100">
                            <div class="row justify-content-center">
                               
							   <?php
							   
							   foreach($projects as $projectsSingle)
							   {
							   ?>
                                <div class="col-md-4 col-sm-6 col-lg-3">
                                    <div class="proj-box position-relative w-100">
                                        <div class="proj-thumb overflow-hidden w-100"><img  class="img-fluid w-100" style="height:170px;" src="../Assets/<?=str_replace("../","",$projectsSingle['image']);?>" alt="<?=$projectsSingle['name'];?>"></div>
                                        <div class="proj-info position-absolute">
                                            <i class="flaticon-construction"></i>
                                            <h3 class="mb-0"><?=$projectsSingle['name'];?></h3>
                                        </div>
                                    </div>
                                </div>
								<?php
							   }
								?>
                            </div>
                        </div><!-- Projects Wrap -->
                     
                    </div>
                </div>
            </section>
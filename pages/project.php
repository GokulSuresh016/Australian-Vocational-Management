<section>
                <div class="w-100 pt-210 pb-100 position-relative">
                    <div class="container">
                        <div class="sec-title w-100">
                            <div class="sec-title-inner d-inline-block">
                                <span class="d-block thm-clr">OUR WORKS</span>
                                <h3 class="mb-0">Our Latest Projects</h3>
                            </div>
                        </div>
                        <div class="proj-wrap w-100">
                            <div class="row justify-content-center">
                               
							   <?php
							   $projects=$obj->select_any("tbl_projects_project_details","1 LIMIT 8");
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
                        <div class="view-all mt-20 w-100 text-center">
                            <a class="thm-btn thm-bg" href="projects.html" title="">View Our Recent Projects<i class="flaticon-arrow-pointing-to-right"></i></a>
                        </div><!-- View All -->
                    </div>
                </div>
            </section>
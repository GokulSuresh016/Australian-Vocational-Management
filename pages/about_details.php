<section>
    <?php
    $about=$obj->select_any_one("tbl_about_our_story","1 order by about_our_story_id DESC");
    
    ?>
                <div class="w-100 position-relative">
                    <div class="container-fluid">
                        <div class="about-wrap w-100">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-sm-12 col-lg-11">
                                    <div class="about-content-wrap w-100">
                                        <div class="row ">
                                             <div class="col-md-12 col-sm-12 col-lg-5" >
                                              <div style="height:400px;width:100%;background-image: url('../Assets/<?=str_replace("../","",$about['image']);?>');background-size: cover;">
                                                    
                                                </div><!-- Sec Title -->
                                                
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-lg-7">
                                               <div class="sec-title title-with-shape w-100">
                                                    <div class="sec-title-inner d-inline-block">
                                                       <span class="thm-clr d-block">WELCOME TO AVM </span>
                                                        <h3 class="mb-0">About  AVM </h3>
                                                    </div>
                                                </div><!-- Sec Title -->
                                                <div class="about-desc w-100">
                                                    
                                                    <span><?=substr($about['story'],0,1600);?>....<a style="color:blue" href="about.html">Read More</a></span>
                                                </div>
                                            </div>
                                            
                                              
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div><!-- About Wrap -->
                    </div>
                </div>
            </section>
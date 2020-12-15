 <?php
    $about=$obj->select_any_one("tbl_about_our_story","1 order by about_our_story_id DESC");
    
    ?>
<section>
<div class="w-100 pt-170 pb-150 dark-layer3 opc7 position-relative">
<div class="fixed-bg" style="background-image: url('assets/images/background.PNG');"></div>
<div class="container">
<div class="page-top-wrap w-100">
<h1 class="mb-0">Our Story</h1>
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html" title="">Home</a></li>
<li class="breadcrumb-item"><a href="our-story.html" title="">Our Story</a></li>
</ol>
</div>
</div>
</div>
</section>

<section>
   
                <div class="w-100 position-relative">
                    <div class="container-fluid">
                        <div class="about-wrap w-100">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-sm-12 col-lg-11">
                                    <div class="about-content-wrap w-100">
                                        <div class="row ">
                                             <div class="col-md-6 col-sm-12 col-lg-6">
                                              <img  src="../Assets/<?=str_replace("../","",$about['image']);?>" style="width:100%"/>
                                                
                                            </div>
                                            <div class="col-md-6 col-sm-12 col-lg-6">
                                               <div class="sec-title title-with-shape w-100">
                                                    <div class="sec-title-inner d-inline-block">
                                                        <h3 class="mb-0"></br>
</br>WELCOME TO AVM</h3>
                                                    </div>
                                                </div><!-- Sec Title -->
                                                <div class="about-desc w-100">
                                                    
                                                    <span><?=$about['story'];?></span>
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
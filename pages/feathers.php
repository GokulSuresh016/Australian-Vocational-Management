<section>
                <div class="w-100 pt-100 blue-layer opc7 position-relative">
                    <div class="fixed-bg" style="background-image: url('../Assets/home page/Files/AVM-BANNER.gif');"></div>
                    <div class="particles-js" id="prtcl"></div>
                    <div class="container-fluid">
                        <div class="sec-title2 w-100">
                            <div class="sec-title-inner2 d-inline-block">
                                <h2 class="mb-0" style="color:#fff;">Why Choose Us<i>AVM</i></h2>
                                <p class="mb-0" style="color:#fff;">Australian Vocational Management is a consulting and management</p>
                            </div>
                        </div>
                        <div class="solutions-wrap w-100">
                            <div class="row align-items-center">
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="solutions-content-wrap w-100">
                                       
                                        <ul class="solutions-list mb-0 list-unstyled w-100">
                                            <?php
                                            $why_choose=$obj->select_any("tbl_home_page_why_choose_us","1");
											$y=0;
                                            foreach($why_choose as $why_chooseSingle)
                                            {
												if($y>2){
													break;
												}
                                            ?>
                                            <li>
                                                <i class="">+</i>
                                                <h4 class="mb-0" style="color:#fff;"><?=$why_chooseSingle['features'];?></h4>
                                                <p class="mb-0" style="color:#fff;"><?=$why_chooseSingle['details'];?></p>
                                            </li>
                                           <?php
										   $y++;
										  
                                            }
                                           ?>
                                        </ul>
                                    </div> 
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="solutions-content-wrap w-100">
                                       
                                        <ul class="solutions-list mb-0 list-unstyled w-100">
                                            <?php
												$y=0;
                                           foreach($why_choose as $why_chooseSingle)
                                            {
												if($y>2){
													
                                            ?>
                                            <li>
                                                <i class="">+</i>
                                                <h4 class="mb-0" style="color:#fff;"><?=$why_chooseSingle['features'];?></h4>
                                                <p class="mb-0" style="color:#fff;"><?=$why_chooseSingle['details'];?></p>
                                            </li>
                                           <?php
												}
										   $y++;
										  
                                            }
                                           ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Solutions Wrap -->
                    </div>
                </div>
            </section>
<section>
                <div class="w-100 position-relative">
                    <div class="feat-wrap position-relative w-100">
                        <div class="feat-caro">
						<?php
						$banner=$obj->select_any("tbl_home_page_banner","1 order by home_page_banner_id DESC LIMIT 4");
						foreach($banner as $bannerSingle)
						{
						?>
                            <div class="feat-item">
                                <div class="feat-img position-absolute" style="height:630px;background-image: url('<?=str_replace("../","../Assets/",$bannerSingle['image']);?>');"></div>
                                <div class="container">
                                    <div class="feat-cap">
                                        <h2 class="mb-0"><?=$bannerSingle['banner_title'];?><strong class="d-block thm-clr"><?=$bannerSingle['banner_title1'];?>.</strong></h2>
                                        <p class="mb-0"><?=$bannerSingle['details'];?></p>
                                        <?php
                                        if($bannerSingle['url_if_any']!='')
                                        {
                                        ?>
                                        <div class="feat-cap-innr">
                                            <a class="video-btn" href="<?=$bannerSingle['url_if_any'];?>" ><span class="spinner"><i class="flaticon-play"></i></span>View<br> More</a>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                         <?php
						}
							?>						 
                          
                        </div>
                    </div><!-- Featured Area Wrap -->
                </div>
            </section>
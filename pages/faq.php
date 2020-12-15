<section>
                <div class="w-100 pt-100 pb-100 position-relative">
                    <div class="container">
                        <div class="sec-title w-100">
                            <div class="sec-title-inner d-inline-block">
                                <span class="d-block thm-clr">OUR FAQ</span>
                                <h3 class="mb-0">Freequently Ask Questions</h3>
                            </div>
                        </div>
                        <div class="faq-wrap w-100">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-lg-6 order-md-1">
                                    <img class="img-fluid" src="assets/images/faq.jpg" alt="Faq URJAM">
                                </div>
                                <div class="col-md-6 col-sm-12 col-lg-6">
                                    <div class="toggle w-100" id="toggle">
                                        <?php
                                        $faq=$obj->select_any("tbl_home_page_faq","1");
                                        $count=1;
                                        foreach($faq as $faqSingle)
                                        {
                                        ?>
                                        <div class="toggle-item w-100">
                                            <h4 class="mb-0"><span><?=$count;?>.</span><?=$faqSingle['qtn'];?>?</h4>
                                            <div class="toggle-content w-100"><p class="mb-0"><?=$faqSingle['answer'];?></p></div>
                                        </div>
                                       <?php
                                       $count++;
                                        }
                                       ?>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Faq Wrap -->
                    </div>
                </div>
            </section>
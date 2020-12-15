<div class="menu-wrap">
                    <div class="container">
                        <nav class="d-inline-flex justify-content-between align-items-center w-100 bg-color1">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                   <li><a href="index.html" title="urjam-home-page">Home</a></li>
                                     <li class="menu-item-has-children"><a href="javascript:void(0);" title="">About Us</a>
                                        <ul class="mb-0 list-unstyled">
                                            <li><a href="our-story.html" title="">Our Story</a></li>
                                            <!--<li><a href="#" title="">How We Do</a></li>-->
                                            <!--<li><a href="meet-our-team.html" title="">Meet Our Team</a></li>-->
                                        </ul>
                                    </li>
                                   
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Services</a>
                                        <ul class="mb-0 list-unstyled">
                                            <?php
                                                    	$services=$obj->select_any("tbl_services_services","1 order by services_services_id");
							foreach($services as $servicesSingle)
							{
                                                    ?>
                                                    <li><a href="services.html?id=<?=$servicesSingle['services_services_id'];?>" title="<?=$servicesSingle['title'];?>"><?=$servicesSingle['title'];?></a></li>
                                                   <?php
							}
                                                   ?>
                                        </ul>
                                    </li>
                                   <li><a href="careers.html" title="urjam-home-page">Careers</a></li>
                                    <li><a href="contact.html" title="">Contact Us</a></li>
                                </ul>
                            </div>
                            <div class="header-right-btns">
                                <a class="get-quote" data-toggle="modal" data-target="#GetAQuote" href="#"><i class="far fa-comments"></i>Get A Quote<i class="flaticon-arrow-pointing-to-right"></i></a>
                            </div>
                        </nav>
                    </div>
                </div><!-- Menu Wrap -->
            </header><!-- Header -->
            <div class="sticky-menu">
                <div class="container">
                    <div class="sticky-menu-inner d-flex flex-wrap align-items-center justify-content-between w-100">
                        <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo.png" alt="Logo" srcset="assets/images/retina-logo.png"></a></h1></div><!-- Logo -->
                        <nav class="d-inline-flex justify-content-between align-items-center">
                            <div class="header-left">
                                <ul class="mb-0 list-unstyled d-inline-flex">
                                 <li><a href="index.html" title="urjam-home-page">Home</a></li>
                                     <li class="menu-item-has-children"><a href="javascript:void(0);" title="">About Us</a>
                                        <ul class="mb-0 list-unstyled">
                                            <li><a href="our-story.html" title="">Our Story</a></li>
                                            <!--<li><a href="#" title="">How We Do</a></li>-->
                                            <!--<li><a href="meet-our-team.html" title="">Meet Our Team</a></li>-->
                                        </ul>
                                    </li>
                                   
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Services</a>
                                        <ul class="mb-0 list-unstyled">
                                            <?php
                                                    	$services=$obj->select_any("tbl_services_services","1");
							foreach($services as $servicesSingle)
							{
                                                    ?>
                                                    <li><a href="services.html?id=<?=$servicesSingle['services_services_id'];?>" title="<?=$servicesSingle['title'];?>"><?=$servicesSingle['title'];?></a></li>
                                                   <?php
							}
                                                   ?>
                                        </ul>
                                    </li>
                                   <li><a href="careers.html" title="urjam-home-page">Careers</a></li>
                                    <li><a href="contact.html" title="">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div><!-- Sticky Menu -->
            <div class="rspn-hdr">
                <div class="rspn-mdbr">
                   
                    <div class="call-us" onclick="location.href='//api.whatsapp.com/send?phone=91<?=str_replace("+91","",$config['help_line']);?>&text=Enquiry from webpage';">
                                    <i class="thm-clr fab fa-whatsapp" style="color:#FFF"></i>
                                    <span style="color:#FFF">24/7 Phone Services</span>
                                    <strong style="color:#FFF"><?=$config['help_line'];?></strong>
                                </div>
                </div>
                <div class="lg-mn">
                    <div class="logo"><a href="index.html" title="Home"><img src="assets/images/logo.png" alt="Logo"></a></div>
                    <div class="rspn-cnt">
                        <span><i class="thm-clr far fa-envelope-open"></i><a href="mailto:<?=$config['email'];?>" title="MEP WORKS"><?=$config['email'];?></span>
                       
                    </div>
                    <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
                </div>
                <div class="rsnp-mnu">
                    <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
                    <ul class="mb-0 list-unstyled w-100">
                           <li><a href="index.html" title="urjam-home-page">Home</a></li>
                                     <li class="menu-item-has-children"><a href="javascript:void(0);" title="">About Us</a>
                                        <ul class="mb-0 list-unstyled">
                                            <li><a href="our-story.html" title="">Our Story</a></li>
                                            <!--<li><a href="#" title="">How We Do</a></li>-->
                                            <!--<li><a href="meet-our-team.html" title="">Meet Our Team</a></li>-->
                                        </ul>
                                    </li>
                                   
                                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">Services</a>
                                        <ul class="mb-0 list-unstyled">
                                            <?php
                                                    	$services=$obj->select_any("tbl_services_services","1");
							foreach($services as $servicesSingle)
							{
                                                    ?>
                                                    <li><a href="services.html?id=<?=$servicesSingle['services_services_id'];?>" title="<?=$servicesSingle['title'];?>"><?=$servicesSingle['title'];?></a></li>
                                                   <?php
							}
                                                   ?>
                                        </ul>
                                    </li>
                                    <li><a href="careers.html" title="urjam-home-page">Careers</a></li>
                                    <li><a href="contact.html" title="">Contact Us</a></li>
                    </ul>
                </div><!-- Responsive Menu -->
            </div><!-- Responsive Header -->
             <style>.modal-open .modal {z-index: 9999!important;}</style>
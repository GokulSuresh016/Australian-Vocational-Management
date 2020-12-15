<body>
    <?php
    $config=$obj->select_any_one("tbl_general_details_common_details","1 order by general_details_common_details_id DESC");
    ?>
        <main>
            <header class="stick style1 w-100">
                <div class="topbar bg-color1 w-100">
                    <div class="container">
                        <div class="topbar-inner d-flex flex-wrap justify-content-between align-items-center w-100">
                            <ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
                                <li><i class="thm-clr fas fa-map-marker-alt"></i> Location  : Your address </li>
                            </ul>
							 <ul class="topbar-links mb-0 list-unstyled d-inline-flex">
								<li><i class="thm-clr far fa-envelope-open"></i>Email: <a href="mailto:<?=$config['email'];?>" title="MEP WORKS"><?=$config['email'];?></a></li>
                           
							</ul>	
							<ul class="topbar-info-list mb-0 list-unstyled d-inline-flex">
                                <li><a href="careers.html" title=" General-RTO-Consulting-in-Australia">Careers</a></li>
                                <li><a href="help_desk.html" title="On-going-RTO-and-CRICOS-compliance-support-and-advice=in-Australia">Help Desk</a></li>
                               
                            </ul>
                        </div>
                    </div>
                </div><!-- Topbar -->
	
                <div class="logo-info-bar-wrap w-100">
                    <div class="container">
                        <div class="logo-info-bar-inner w-100 d-flex flex-wrap justify-content-between align-items-center">
                            <div class="logo-social d-inline-flex flex-wrap justify-content-between align-items-center">
                                <div class="logo"><h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo.png" alt="Logo" srcset="assets/images/retina-logo.png"></a></h1></div><!-- Logo -->
                                <div class="social-links">
                                    <a href="<?=$config['facebook'];?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?=$config['insta'];?>" title="Twitter" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="<?=$config['linkedin'];?>" title="Skype" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="<?=$config['google_plus'];?>" title="Vimeo" target="_blank"><i class="fab fa-google-plus"></i></a>
                                </div>
                            </div>
                            <div class="top-info-wrap d-inline-flex flex-wrap justify-content-between align-items-center">
                                <div class="call-us" onclick="location.href='//api.whatsapp.com/send?phone=91<?=str_replace("+91","",$config['help_line']);?>&text=Enquiry from webpage';">
                                    <i class="thm-clr fab fa-whatsapp"></i>
                                    <span>24/7 Phone Services</span>
                                    <strong><?=$config['help_line'];?></strong>
                                </div>
                                
                            </div>                            
                        </div>
                    </div>
                </div><!-- Logo Info Bar Wrap -->
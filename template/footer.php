<footer>
                <div class="w-100 bg-color5 pt-100 pb-10 position-relative">
                    <div class="particles-js" id="prtcl5"></div>
                    <div class="container">
                        <div class="footer-data w-100">
                            <div class="row">
                                <div class="col-md-4 col-sm-12 col-lg-4">
                                    <div class="widget w-100">
                                        <div class="logo w-100">
                                            <h1 class="mb-0"><a href="index.html" title="Home"><img class="img-fluid" src="assets/images/logo2.png" alt="Logo" srcset="assets/images/retina-logo2.png"></a></h1>
                                        </div><!-- Logo -->
                                        <p class="mb-0">Australian Vocational Management is a consulting and management group with a difference. Our
aim is to provide our clients with all the services they need not just to enable them to operate their
registered training organisation but to be able to operate and grow strategically and successfully.</p>
                                        <div class="social-links2 d-inline-block">
                                           <a href="<?=$config['facebook'];?>" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?=$config['insta'];?>" title="Twitter" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="<?=$config['linkedin'];?>" title="Skype" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="<?=$config['google_plus'];?>" title="Vimeo" target="_blank"><i class="fab fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-12 col-lg-8">
                                    <div class="row">
                                      
                                        <div class="col-md-4 col-sm-12 col-lg-6">
                                            <div class="widget w-100">
                                                <h3>Services</h3>
                                                <ul class="mb-0 list-unstyled w-100">
                                                    <?php
                                                    	$services=$obj->select_any("tbl_services_services","1 order by services_services_id LIMIT 10");
														$i=0;
														foreach($services as $servicesSingle)
														{
															if($i>4){
																break;
															}
														?>
														<li><a href="services.html?id=<?=$servicesSingle['services_services_id'];?>" title="<?=$servicesSingle['title'];?>"><?=$servicesSingle['title'];?></a></li>
														 <?php
														 $i=$i+1;
														}
														?>
                                                </ul>
                                            </div>
                                        </div>
										  <div class="col-md-4 col-sm-12 col-lg-6">
                                            <div class="widget w-100">
                                                <h3>Services</h3>
                                                <ul class="mb-0 list-unstyled w-100">
                                                    <?php
                                                    	$i=1;
														foreach($services as $servicesSingle)
														{
															if($i>5){
															
														?>
														<li><a href="services.html?id=<?=$servicesSingle['services_services_id'];?>" title="<?=$servicesSingle['title'];?>"><?=$servicesSingle['title'];?></a></li>
														 <?php
															}
														 $i=$i+1;
														}
														?>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--<div class="col-md-4 col-sm-12 col-lg-6">
                                            <div class="widget w-100">
                                                
                                            </div>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div><!-- Footer Data -->
                    </div>
                </div>    
            </footer>
            <div class="copyright w-100 text-center bg-color6 position-relative" id="coptright">
                <div class="container">
                    <p class="mb-0">Copyright by <a href="https://computerpark.online/" title="Computer-park-It-solutions">@Computer Park IT Solutions</a>. All Rights Reserved</p>
                </div>
            </div><!-- Copyright -->
        </main><!-- Main Wrapper -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/counterup.min.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/perfect-scrollbar.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/particles.min.js"></script>
        <script src="assets/js/particle-int.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
        <script src="assets/js/custom-scripts.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>	
</html>
<?php
$tableName="tbl_get_a_quote";
if(isset($_POST['phone_number']))
{
	$data_array=array(
	'name'=>$_POST['name'],
	'email'=>$_POST['email_id'],
	'phone'=>$_POST['phone_number'],
	'message'=>$_POST['message']
	);
	$result=$obj->inserttblReturnId($data_array,$tableName);
	if($result>0)
	{
	?>
	<script>
	swal({
  title: "Success!",
  text: "We will get you soon!",
  icon: "success",
});
	</script>
	<?php
	}
	else
	{
	?>
		<script>
        swal({
          title: "plesae try again after sometime!",
        });
	</script>
	<?php
	}
}
?>
<!-- Modal -->
<div class="modal fade" id="GetAQuote" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">GET A QUOTE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form action="" method="POST">
      <div class="modal-body">
        <div class="form-group">
			<label >Name</label>
			<input required type="text" class="form-control" name="name"   placeholder="plese enter your name">
		 </div>
		  <div class="form-group">
			<label >Email</label>
			<input required type="email" class="form-control" name="email_id"   placeholder="plese enter your email">
		 </div>
		  <div class="form-group">
			<label >Phone Number</label>
			<input required type="text" class="form-control" name="phone_number"   placeholder="plese enter your mobile number">
		 </div>
		  <div class="form-group">
			<label >Message</label>
			<textarea class="form-control" name="message"   placeholder="plesae enter a message"></textarea>
		 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
	  </form>
    </div>
  </div>
</div>
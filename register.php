<!DOCTYPE html>
<html lang="en">
<head>
	<?php include'head.php'?>


</head>
<body id="bg">
	<div id="loading-area"></div>
	<div class="page-wraper">
		<!-- header -->
		<header class="site-header header-transparent mo-left">
			<!-- main header -->
			<?php include'topnav.php'?>
		</header>
		<!-- header END -->
		<!-- Content -->
		<!-- <div class="page-content bg-white"> -->
			<!-- inner page banner -->
			<div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/geeks-2894621__480.jpg);">
				<div class="container">
					<div class="dlab-bnr-inr-entry">
						<h1 class="text-white">Registration Form</h1>

						<input type="hidden" value="Contact" name="dzToDo" > 
						<div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<form action="process.php" method="post" enctype="multipart/form-data" id="validate-form">

									<div class="form-group"><br>

										<label class="text-white">First Name</label> 
										<input type="text" class="form-control" name="txt_fn" placeholder="Enter your  name....." required="" ><br>

									</div>
									<div class="form-group">
										<label class="text-white">Email</label> 
										<input type="text" class="form-control" name="txt_email" 
										placeholder="Enter your email....."  required="" >
									</div>
									<div class="form-group">
										<label class="text-white">Password</label>
										<input type="password" class="form-control" name="password" placeholder="Enter your password....."required="" >
									</div>
									<div class="form-group">
										<label class="text-white">Confirm Password</label>
										<input type="password" class="form-control" name="cpassword" placeholder="Enter your conform password....." required="">
									</div>
									<br>
								<div class="form-group">
								<label class="text-white">Enter your mobile numbar</label>
								<input type="number" class="form-control" name="mobile" placeholder="Enter your Mobilre number....." required="">
									</div>
									<div class="form-group">
										<label class="text-white">Date of Birth</label>
										<input type="date" class="form-control" name="dob" required="">
									</div>
									<div class="form-group">
										<label class="text-white">Security Question</label>
										<select class="form-control" name="sec">
											<?php 
											    require 'common/dbconnect.php';
												$qry = "SELECT * from seq_tbl where isactive=1";
												$r=mysqli_query($conn,$qry);
												while($row=mysqli_fetch_assoc($r)){
											?>
											<option value="<?php echo $row['id']; ?>" ><?php echo $row['squestion']; ?></option>
										<?php } ?>
										</select>
									</div>
									<div class="form-group">
										<label class="text-white">Answer</label> 
										<input type="text" class="form-control" name="answer" 
										placeholder="Enter your Answer....."  required="" >
									</div>
									<div class="form-group">
										<label class="text-white"> Upload Profile Pic</label>
										<input type="file" class="form-control" name="fileToUpload">
									</div>
									<!-- <input type="file" name="fileToUpload" ><br> -->

									<button type="submit" class="btn btn-success" name="btn_sb" >Submit</button>
								</form>
							</div>

							<div class="col-md-3"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<vbr>
</div>
<!-- Content END-->
<!-- Footer -->

<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<span> © Copyright by <i class="fa fa-heart m-lr5 text-red heart"></i>
					<a href="javascript:void(0);">Local Search Engine </a> All rights reserved.</span> 
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer END-->
<button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script><!-- FORM JS -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script><!-- FORM JS -->
<script src="plugins/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC POPUP JS -->
<script src="plugins/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="plugins/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="plugins/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
<script src="plugins/masonry/masonry-3.1.4.js"></script><!-- MASONRY -->
<script src="plugins/masonry/masonry.filter.js"></script><!-- MASONRY -->
<script src="plugins/rangeslider/rangeslider.js"></script><!-- RANGESLIDER -->
<script src="plugins/owl-carousel/owl.carousel.js"></script><!-- OWL SLIDER -->
<script src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script src="js/dz.carousel.js"></script><!-- SORTCODE FUCTIONS  -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68&amp;sensor=false"  ></script><!-- GOOGLE MAP -->
<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="js/map.script.js"></script><!-- CONTACT JS  -->
</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:02 GMT -->
</html>
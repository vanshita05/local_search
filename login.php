<!-- PHP CODE -->
<?php
session_start();
if (isset($_SESSION['user']))
{
	header("location:index.php");
	exit();
}
if (isset($_COOKIE['user']))
{
	$un=$_COOKIE['user'];
	$ps=$_COOKIE['pass'];
}
else
{
	$un="";
	$ps="";
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:02 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="BizMap Directory & Listings HTML templates" />
	<meta property="og:title" content="BizMap Directory & Listings HTML templates" />
	<meta property="og:description" content="BizMap Directory & Listings HTML templates" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	<!-- PAGE TITLE HERE -->
	<title>local search engine</title>
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link rel="stylesheet" type="text/css" href="css/parsley.css">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	
	
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
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/geeks-2894621__480.jpg); height: 600px">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                	<div class="col-md-11">
                    <h1 class="text-white">LOGIN</h1>
					<p>Enter your correct login detail.</p>
					</div>

					<!-- login detail -->

               <div class="row">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<!-- <form action="checklogin.php" method="post"> -->

									 <form action="checklogin.php" method="post"  id="validate-form">
					                         <div class="col-lg-10">
                                        <div class="form-group">
                                    <div class="input-group"> 
             <input type="text" name="txt_un" class="form-control" required  placeholder="Your Email Id"value="<?php echo $un; ?>" required="" ><br>

				
                                         </div>
                                        </div>
                                    </div>
                                            <div class="col-lg-10">
                                        <div class="form-group">
                                     <div class="input-group">
                                     	<!-- <input type="password" id="pwd" name="pwd"> -->
            <input type="password" name="txt_ps" class="form-control" required placeholder="password" value="<?php echo $ps; ?>" required="" ><br>
                                            </div>
                                        </div>
                                    </div>
                                    			<!-- <a href="forget.php">Forgot Password?</a> -->
                                            <div class="col-md-6">
                                        <div class="form-group">
                                    <div class="input-group"> 
             <input type="checkbox" name="remember" value="1"><br >
             <a href="forget.php" class="text-white">Forgot Password?</a><br>
             <!-- <input type="submit" name="btn_sb"> -->
         </div>
        <div class="col-md-0">
       <input  type="submit" name="btn_sb" class="site-button button-md radius-xl">
               </div>
                   </form>
							</div>
							<div class="col-md-3"></div>
						</div>






					             
					
                </div>
            </div>
        </div>
       
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <footer class="site-footer">
        
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
    <!-- <button class="scroltop fa fa-chevron-up" ></button>
</div> -->
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="plugins/bootstrap/js/popper.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script sre="parsley.min.js"></script>
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
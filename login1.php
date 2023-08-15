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
	<title>BizMap Directory & Listings HTML templates</title>
	
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
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	
	
</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">
	<!-- header -->
    <header class="site-header header-transparent mo-left">
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index-2.html"><img src="images/logo-white.png" class="logo" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <a href="login.php" class="site-button-link white"><i class="ti-user m-r5 "></i>Sign In</a>
							<a href="register.php" class="site-button radius-xl m-l10">Register</a>
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">              
							<li class="active"><a href="index-2.html">Home</a></li>
							<li class="down"><a href="#">Pages <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="coming-soon.html">Coming Soon</a></li>
									<li><a href="error-404.html">Error 404</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
								</ul>
							</li>
							<li class="down"><a href="#">Listings <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="#">Listings <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="listing.html">Listing</a></li>
											<li><a href="listing-left-sidebar.html">Listing Left Sidebar</a></li>
											<li><a href="listing-right-sidebar.html">Listing Right Sidebar</a></li>
										</ul>
									</li>
									<li><a href="#">Listing Grid <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="listing-grid-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="listing-grid-right-sidebar.html">Right Sidebar</a></li>
										</ul>
									</li>
									<li><a href="#">Listing Map <i class="fa fa-angle-right"></i></a>
										<ul class="sub-menu">
											<li><a href="listing-grid-map-left-sidebar.html">Left Sidebar</a></li>
											<li><a href="listing-grid-map-right-sidebar.html">Right Sidebar</a></li>
										</ul>
									</li>
									<li><a href="listing-details.html">Listing Details</a></li>
								</ul>
							</li>
							<li class="down"><a href="#">Blog <i class="fa fa-chevron-down"></i></a>
								<ul class="sub-menu">
									<li><a href="blog-standard.html">Blog</a></li>
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</li>
							<li><a href="contact-us.html">Contact Us</a></li>
						</ul>		
                    </div>
                </div>
            </div>
        </div>
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Login.</h1>
					<p>Enyter your correct login detail.</p>

					<!-- login detail -->
					                               <form action="checklogin.php" method="post">
					                         <div class="col-md-6">
                                        <div class="form-group">
                                    <div class="input-group"> 
             <input type="text" name="txt_un" class="form-control" required  placeholder="Your Email Id"value="<?php echo $un; ?>"><br>

				<!-- <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" > -->
                                            </div>
                                        </div>
                                    </div>
                                            <div class="col-md-6">
                                        <div class="form-group">
                                     <div class="input-group">
            <input type="text" name="txt_ps" class="form-control" placeholder="password" value="<?php echo $ps; ?>"><br>
                                            </div>
                                        </div>
                                    </div>
                                            <div class="col-md-6">
                                        <div class="form-group">
                                    <div class="input-group"> 
             <input type="checkbox" name="remember" value="1">Remember Me <br>
             <!-- <input type="submit" name="btn_sb"> -->
        <div class="col-md-12">
       <input  type="submit" type ="btn_sb" class="site-button button-lg radius-xl">
               </div>
                   </form>

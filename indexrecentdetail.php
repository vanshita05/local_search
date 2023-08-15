<?php
require './common/dbconnect.php';
$id=$_GET['id'];
$qry = "SELECT  * FROM schoff_tbl WHERE isactive=1 and id='".$id."'";
// echo $qry;
$rs=mysqli_query($conn,$qry);
$row = mysqli_fetch_assoc($rs);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:06 GMT -->
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
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="css/star-rating-svg.css">
	
	
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
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/bnr1.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <div class="wonder-bx text-white">
						<div class="wonder-theme"></div>
						<div class="wonder-title">
							<h2><?php echo$row['schoffname'];?></h2>
							<!-- <p><?php echo$row['newsname'];?></p>	 -->
						</div>
						<div class="wonder-price">
							<p>Date</p>
							<h3 class="m-b0">22/3/2020</h3>
						</div>
						<!-- <div class="wonder-btn">
							<a href="javascript:void(0);" class="site-button button-lg radius-no text-uppercase">Register</a>
							<a href="javascript:void(0);" class="site-button button-lg radius-no text-uppercase">Download</a>
						</div> -->
					</div>
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="section-full content-inner">
            <div class="container">
				
				<div class="row">
					<!-- Left part start -->
                    <div class="col-xl-8 col-lg-7 col-md-12 p-b30">
                        <div class="section-head text-black mb-3">

							<h2 class="box-title"><?php echo$row['schoffname'];?></h2>
							
						</div>
						<div class="clearfix m-b50">
							<img class="alignleft" src="./upload/<?php echo $row['profilepic']; ?>" width="300px" alt="">
							<p class="font-weight-300"><?php echo $row['schoffdecp'];?>
							</p>
<a href="<?php echo $row['schofflink']; ?>"><?php echo $row['schofflink']; ?></a>
						</div>
						
						<div class="dlab-divider bg-gray-dark"></div>
                        <div class="clear" id="comment-list">
                            <div class="comments-area" id="comments">
                                <h3 class="font-26">Your Reviews</h3>
                                <div class="clearfix">
                                    <!-- comment list END -->
                                    <ol class="comment-list">
                                        <?php 
                                        $select="select * from review_tbl where isactive=1";
                                        $query=mysqli_query($conn,$select);
                                        if (mysqli_num_rows($query)>0) {
                                         while ($row1=mysqli_fetch_assoc($query)) {
                                                
                                                
                                        
                                     ?>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author vcard"> <img  src="upload/<?php echo$row1['profilepic']; ?>" width="50px" alt=""> <cite class="fn"><?php echo $row1['name']; ?></cite> <span class="says">says:</span> </div>
                                               
                                                <p><?php echo $row1['comment']; ?></p>

                                                
                                            </div>
                                            <?php 
                                     }
                                         }
                                      ?>
                                        </li>
                                       
                                    </ol>
                                    <!-- comment list END -->
                                    <!-- Form -->
                                    <h3 class="font-26">Write a Review</h3>
                                    <div class="comment-respond" id="respond">
                                        <form class="comment-form" method="post" action="reviewprocess.php" enctype="multipart/form-data">
                                            
                                            <p class="comment-form-comment">

                                                <label for="comment">Comments</label>
                                                <textarea rows="8" txt_comment placeholder="Type your comments...." name="txt_comment"></textarea>
                                            </p>
                                            <p class="comment-form-author">
                                                
                                                <label for="author">Type your name.... <span class="required">*</span></label>
                                               <input type="text" class="form-control" name="txt_name" placeholder="Type your name...." >
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Type your email.... <span class="required">*</span></label>
                                                <input type="text" name="txt_email" placeholder="Type your email...." name="email" id="email">
                                            </p>
                                            
                                            <div class="omment-form-profilepic">
                                        <label class="text-white"> Upload Profile Pic</label>
                                        <input type="file" class="form-control" name="fileToUpload">
                                    </div>
                                            <br>
                                            <p class="form-submit">
                                                <input type="submit" value="Post Comment" class="submit site-button" id="submit" name="submit">
                                            </p>
                                        </form>
                                    </div>

                                    <!-- Form -->
                                </div>
                            </div>
                        </div>
                        <!-- blog END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-xl-4 col-lg-5 col-md-12 sticky-top p-b30">
                        <aside class="side-bar listing-side-bar">
                            <div class="widget widget_map">
								<div id="" class="m-b30 align-self-stretch" style="width:100%; height:400px;"></div>
								<a href="javascript:void(0)" class="site-button button-lg radius-xl m-b30 text-uppercase">Advertisement Here !,..</a>
							</div>
							
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <footer class="site-footer">

        </div>
		<div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
						<span> © Copyright by <i class="fa fa-heart m-lr5 text-red heart"></i>
						<a href="javascript:void(0);">DexignZone </a> All rights reserved.</span> 
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
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->
<script src="js/jquery.star-rating-svg.js"></script><!-- STAR RATING SVG -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBjirg3UoMD5oUiFuZt3P9sErZD-2Rxc68&amp;sensor=false"  ></script><!-- GOOGLE MAP -->
<script src='../../www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
<script src="js/map.script.js"></script><!-- CONTACT JS  -->
</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:07 GMT -->
</html>
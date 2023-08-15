<?php
session_start();
require './common/dbconnect.php';
$qry = "select * from blog_tbl WHERE isactive=1";
// echo $qry;
$rs=mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/blog-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:07 GMT -->
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
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/blog-blogging-homepage-social-media-260nw-381746308.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white"> View All Blog </h1>
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<!-- <li>Blog Standard</li> -->
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="section-full content-inner">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <?php $q = "SELECT * FROM blog1_tbl WHERE isactive=1"; 
                            $r = mysqli_query($conn,$q);
                             if(mysqli_num_rows($r)>0)
                                {
                                     // echo "True";
                                     while($rw=mysqli_fetch_assoc($r))
                                     {
                            ?>
                    <div class="col-md-6 col-lg-6 col-xl-6">
                    	
                        <div class="blog-post blog-lg list-blog-bx">
                            <div class="dlab-post-media dlab-img-effect zoom-slow">
								<a href=""><img src="./upload/<?php echo $rw['profilepic']; ?>" style="height:371px"  alt=""/></a>
							</div>
                            <div class="dlab-post-info">
                                <div class="dlab-post-meta">
									<ul class="d-flex align-items-center">
                                        <?php
                                        $qa = "SELECT * from user_tbl where id='".$rw['uid']."'";
                                        $ra= mysqli_query($conn,$qa);
                                        $rwa = mysqli_fetch_assoc($ra);
                                        ?>
                                        <li class="post-author"><i class="ti-user"></i>By - <?php echo $rwa['firstname']; ?> </li>
                                        <li class="post-date"> <i class="ti-alarm-clock"></i><strong><?php echo $rwa['doi'];?></strong><span> </span></li>
                                    </ul>
                                </div>
								<div class="dlab-post-title ">
                                    <h3 class="post-title"><?php echo $rw['title']; ?></h3>
                                </div>
                                <div class="dlab-post-text">
                                    <p><?php echo $rw['comment']; ?></p>
                                </div>
                                <!-- <div class="dlab-post-readmore blog-share"> 
									<a href="blog-details.html" title="READ MORE" rel="bookmark" class="site-button button-md radius-xl">READ MORE</a>
								</div> -->
                            </div>
                        </div>
                        </div>
                        <?php 
                         }
                     }
                     else
                     {
                     	echo "0 row found";
                         
                     }
						?>

                        
                        <!-- Pagination start -->
                        <!-- div class="pagination-bx clearfix text-center">
							<ul class="pagination">
								<li class="previous"><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i></a></li>
								<li><a href="javascript:void(0)">1</a></li>
								<li><a href="javascript:void(0)">2</a></li>
								<li><a href="javascript:void(0)">...</a></li>
								<li class="active"><a href="javascript:void(0)">7</a></li>
								<li class="next"><a href="javascript:void(0)"><i class="fa fa-arrow-right"></i></a></li>
							</ul>
						</div>
                        !-- Pagination END --> 
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-md-5 col-lg-4 col-xl-4 sticky-top">
                        
                    </div>
                    <!-- Side bar END -->
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

</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/blog-standard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:11 GMT -->
</html>
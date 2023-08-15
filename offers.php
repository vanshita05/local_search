<?php
session_start();
?>
<?php
require './common/dbconnect.php';
$qry = "select * from schoff_tbl WHERE isactive=1";
// echo $qry;
$rs=mysqli_query($conn,$qry);
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:02 GMT -->
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
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/various-white-icon-contact-message-260nw-1590179125.webp;">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">LIST OF ALL GOVERNMENT SCHEMES</h1>
					
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- Contact area -->
        <div class="content-block">
			<div class="section-full content-inner bg-white">
				<div class="container">
					<div class="row">
                    	<?php $q = "SELECT * FROM schoff_tbl WHERE isactive=1"; 
                             $r = mysqli_query($conn,$q);
                          if(mysqli_num_rows($r)>0)
							{
							    // echo "True";
							    while($rw=mysqli_fetch_assoc($r))
							    {
							?>  
							                    
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="featured-bx m-b30">
								<div class="featured-media">
									<img src="./upload/<?php echo $rw['profilepic']; ?>" style="height:371px" alt=""/>
								</div>	
								<div class="featured-info">
	<h5 class="title"><a href="listing-details.php?id=<?php echo $rw['id']?>"><?php echo $rw['schoffname']; ?></a></h5>


		
			
									
								</div>
							</div>
						</div>
					<?php }
				}
				?>
					</div>
					<!-- Pagination start -->
					<!-- <div class="pagination-bx clearfix text-center">
						<ul class="pagination">
							<li class="previous"><a href="javascript:void(0)"><i class="fa fa-arrow-left"></i></a></li>
							<li><a href="javascript:void(0)">1</a></li>
							<li><a href="javascript:void(0)">2</a></li>
							<li><a href="javascript:void(0)">...</a></li>
							<li class="active"><a href="javascript:void(0)">7</a></li>
							<li class="next"><a href="javascript:void(0)"><i class="fa fa-arrow-right"></i></a></li>
						</ul>
					</div> -->
					<!-- Pagination END -->
				</div>
			</div>
		</div>
		<!-- Contact area END -->
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
<script src="js/dz.ajax.js"></script><!-- CONTACT JS  -->

</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:04 GMT -->
</html>
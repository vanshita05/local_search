<!-- PHP CODE -->
<?php
require './common/dbconnect.php';
$qry="SELECT * FROM schoff_tbl WHERE isactive=1";
// echo $qry;
$rs=mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:04 GMT -->
<head>
	<?php include'head.php'?>
	
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
	<!-- header -->
    <header class="site-header header-transparent mo-left">
		<!-- main header -->
        <?php include'topnav.php'?>
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/bnr3.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">All Gorement offers/scheme list</h1>
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<!-- <li>All Gorement offers</li> -->
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<div class="section-full content-inner bg-dark">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-10">
							<div class="sticky-top">
								
								
								<!-- <div class="add p-tb30">
									<img src="images/add/add1.jpg" alt="">
								</div> -->
							</div>
						</div>
						<div class="col-lg-12 col-md-10">
							<div class="listing-filter m-b40">
								<div class="d-flex">
									<table border="3">
                                    <!-- <table border="1"> -->
    <tr>
        <td>Id</td>
        <!-- <td>Department Name</td> -->
        <td>view Schemes And Offers Title</td>
        <td>viewSchemes And Offers Description</td>
        <td>view Schemes And Offers Link</td>
        <!-- <td>IsActive</td>
        <td>Edit</td>
        <td>Delete</td> -->
    </tr>
    <?php
    if(mysqli_num_rows($rs)>0)
    {
        while($row=mysqli_fetch_assoc($rs))
        {
              $did=$row['did'];
            $qry1="SELECT * FROM dep_tbl WHERE id=$did AND isactive=1";
            $rs1=mysqli_query($conn,$qry1);
            if(mysqli_num_rows($rs1)>0)
            {
            $row1=mysqli_fetch_assoc($rs1);
    ?>
    <tr>
      <td><?php echo $row['id'];?></td> 
        <!-- <td><?php echo $row['did'];?></td> -->
        <td><?php echo $row['schoffname'];?></td>
        <td><?php echo $row['schoffdecp'];?></td>
        <td><?php echo $row['schofflink'];?></td>
       <!--  <td><?php echo $row['isactive'];?></td>
        <td><a href="editoffsch.php?id=<?php echo $row['did'];?>"
    >Edit</a></td>
    <td><a href="deleteoffsch.php?id=<?php echo $row['id'];?>"
    >Delete</a></td> -->

    </tr>
    <?php
        }
        }
    }
    else{
        echo "0 Row Found";
        exit();
    }
    ?>
</table>
									<!-- <div class="mr-auto">
										<ul class="filter m-b0" class="text-center">
											<li>
												<!-- <B> <U>VIEW ALL OFFERS AND SCHEME</B></U> -->

									</div> 
									<div>
										
										</ul>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-6 m-b30">
									 
							</div>
							<!-- Pagination END -->
						</div>
					</div>
				</div>
			</div>
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer -->
    <footer class="site-footer">
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

</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:04 GMT -->
</html>
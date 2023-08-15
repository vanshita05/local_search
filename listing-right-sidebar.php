<?php
require './common/dbconnect.php';
$qry="SELECT * FROM news_tbl WHERE isactive!=2";
// echo "$qry";
$rs = mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:04 GMT -->
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
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/bnr2.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">All Current Tranding News</h1>
				<!-- /<p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<!-- <li>Listing Right Sidebar</li> -->
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <!-- contact area -->
        <div class="content-block">
			<div class="section-full  bg-dark">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-6">

							<div class="listing-filter m-b40">
								<div class="d-flex">
									<table class="table table-hover"border="3">
    <tr>
          <td>Id</td>
        <td>NEWS Name</td>
        <td>Description</td>
        <td>link</td>
        <!-- <td>isactive</td>
        <!-- <td>view</td> -->
        <!-- <td>Edit</td> -->
      <!-- <td>Block</td> --> 
        <!-- <td>Delete</td> --> 
         
    </tr>
<?php
if(mysqli_num_rows($rs)>0)
{
    // echo "True";
    while($row=mysqli_fetch_assoc($rs))
    {
?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['newsname']?></td>
    <td><?php echo $row['newsdes']?></td>
     <td><?php echo $row['newslink']?></td>
    <!-- <td><?php $ia=$row['isactive']; echo $ia;?></td> -->
    <!-- <td><a href="viewstate.php?id=<?php echo $row['id'];?>"
    >View</a></td> -->
    <!-- <td><a href="editstate.php?id=<?php echo $row['id'];?>" -->
    <!-- >Edit</a></td> -->
    <!-- <td><a href="statestatus.php?id=<?php echo $row['id'];?>" -->
    
<?php
if($ia==1)
{
?>
<!-- Block -->
<?php
}
else
{?>
Active
<?php
}?>
</a></td>
     <!-- <td><a href="deletenews.php?id=<?php echo $row['id']; ?>">Delete</a></td> -->
    

</tr>
<?php
}
}
else{
    echo "0 Row Found";
}
?></div>
</table>     
									<div class="mr-auto">
										<ul class="filter m-b0">
											<li>
												
											</li>
										</ul>
									</div>
									<div>
										<!--  -->
									</div>
								</div>
							</div>
							
							<!-- Pagination END -->
						</div>
						<div class="col-lg-12 col-md-10">
							
							</div>
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
        <div class="footer-top">
            <div class="container">
                <div class="row">
					<!-- <div class="col-xl-5 col-lg-4 col-md-12 col-sm-12">
                        <div class="widget">
                            <<!-- img src="images/logo- --><!-- white.png" class="m-b15" alt="" width="180">
							<p class="text-capitalize m-b20">Lorem Ipsum is simply dummy text of the printing and typesetting industry has been the industry.</p>
                            <div class="subscribe-form m-b20">
								<form class="dzSubscribe" action="https://bizmap.dexignzone.com/xhtml/script/mailchamp.php" method="post">
									<div class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="dzEmail" required="required" class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-xl">Subscribe</button>
										</span> 
									</div>
								</form>
							</div> --> 
							<!-- <ul class="list-inline m-a0">
								<li><a href="javascript:void(0);" class="site-button facebook circle "><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button google-plus circle "><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button linkedin circle "><i class="fa fa-linkedin"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button instagram circle "><i class="fa fa-instagram"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button twitter circle "><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
					<div class="col-xl-4 col-lg-5 col-md-7 col-sm-12 col-12">
                        <div class="widget border-0">
                            <h5 class="m-b30 text-white">Frequently Asked Questions</h5>
                            <ul class="list-2 list-line">
                                <li><a href="javascript:void(0);">Hotel</a></li>
                                <li><a href="javascript:void(0);">Restaurant</a></li>
                                <li><a href="javascript:void(0);">Appartment</a></li>
                                <li><a href="javascript:void(0);">SPA & Beauty</a></li>
                                <li><a href="javascript:void(0);">Atuomation</a></li>
								<li><a href="javascript:void(0);">Travel</a></li>
                                <li><a href="javascript:void(0);">How It Works</a></li>
                                <li><a href="javascript:void(0);">For Employers</a></li>
                                <li><a href="javascript:void(0);">Underwriting</a></li>
                                <li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">Lending Licnses</a></li>
								<li><a href="javascript:void(0);">Support</a></li>
                            </ul>
                        </div>
                    </div> -->
					<!-- <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
                        <div class="widget widget_getintuch">
                            <h5 class="m-b30 text-white">Contact us</h5>
                            <ul>
                                <li><i class="ti-location-pin"></i><strong>address</strong> demo address #8901 Marmora Road Chi Minh City, Vietnam </li>
                                <li><i class="ti-mobile"></i><strong>phone</strong>0800-123456 (24/7 Support)</li>
								<li><i class="ti-email"></i><strong>email</strong>info@example.com</li>
                            </ul>
                        </div> -->
                    </div>
				</div>
            </div>
        <!-- </div> -->
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
<?php include'script.php'?>

</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/listing-right-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:05 GMT -->
</html>
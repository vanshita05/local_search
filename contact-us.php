<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bizmap.dexignzone.com/xhtml/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:02 GMT -->
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
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/contact-us-1908763__480.webp); background-size: cover;">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us</h1>
					<!-- <p>YOU CAN CONNECT THE ADMIN .</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<!-- <li>Contact Us</li> -->
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="section-full content-inner">
            <div class="container">
                <div class="row dzseth m-b50">
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper p-lr20 p-tb50 center seth contact-bx">
							<div class="icon-bx-sm radius m-b20 bg-primary m-b20">
								<a href="#" class="icon-cell"><i class="ti-location-pin"></i></a>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Address</h5>
								<p>Soni Fali Opp Parekh pol Viramgam Gujarat India</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper p-lr20 p-tb50 center seth contact-bx">
							<div class="icon-bx-sm radius m-b20 bg-primary m-b20">
								<a href="#" class="icon-cell"><i class="ti-email"></i></a>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Email</h5>
								<p><br/>pradipofficial1234@gmail.com</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper p-lr20 p-tb50 center seth contact-bx">
							<div class="icon-bx-sm radius m-b20 bg-primary m-b20">
								<a href="#" class="icon-cell"><i class="ti-mobile"></i></a>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Phone</h5>
								<p>7046587091<br/> 7016074600</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper p-lr20 p-tb50 center seth contact-bx">
							<div class="icon-bx-sm radius m-b20 bg-primary m-b20">
								<a href="#" class="icon-cell"><i class="ti-printer"></i></a>
							</div>
							<div class="icon-content">
								<h5 class="dlab-tilte text-uppercase">Fax</h5>
								<p>+61 3 8376 6284 <br/> +23 123 456 7890</p>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
					<!-- Left part start -->
                    <div class="col-lg-6 mb-4 mb-md-0">
                        <div class="clearfix contact-form  m-b30">
							<div class="section-head text-black">
								<h2 class="box-title">Contact-Us</h2>
								<!-- <div class="dlab-separator bg-primary"></div> -->
							
							</div>
							<!-- <div class="dzFormMsg"></div> -->
							<form action="conprocess.php" method="post">
	<!-- <input type="hidden" value="Contact" name="dzToDo" >  -->
                             <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                     <input type="text" name="txt_fn" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input type="text"name="txt_email" class="form-control" placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                        <input type="number" name="txt_contacct" class="form-control"  placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                   <input  type="text" name="txt_subject" class="form-control" placeholder="Subject">
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="txt_comment" rows="6" class="form-control" placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="col-md-12">
                                 <button type="submit" class="site-button button-lg radius-xl" name="btn_sb">Submit</button>
                                        <!-- <button name="submit" type="submit" value="Submit" class="site-button button-lg radius-xl">SUBMIT NOW</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
					<!-- right part start -->
                    <div class="col-lg-6 d-flex">
                        <div id="map3" class="m-b30 align-self-stretch" style="width:100%; min-height:300px;"></div>
                    </div>
                    <!-- right part END -->
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
<?php include'script.php'?>
</body>

<!-- Mirrored from bizmap.dexignzone.com/xhtml/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:02 GMT -->
</html>
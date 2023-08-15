<?php
session_start();
?>
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
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr dlab-bnr-inr-sm overlay-black-middle" style="background-image:url(images/banner/bloggingblog-concepts-ideas-white-worktable-260nw-1029506242.webp);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">WRITE THE NEW BLOG</h1>
					<!-- <p>Find awesome places, bars, restaurants & activities.</p> -->
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<!-- <li>Blog Details</li> -->
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
                   
                            
						<!-- Author Profile -->
						
						<!-- Author Profile END -->						
                        
                               
                                    <!-- comment list END -->
                                    
                                    <!-- Form -->
                                 
									
									<div class="col-xl-10">
                                    <div class="comment-respond" id="respond">
                <h3 class="font-26">WRITE BLOG</h3>
            
                                        <form class="comment-form" id="commentform" method="post" action="blogprocess.php" id="form-control" enctype="multipart/form-data">
                                            <div class="col-md-12">
								<div class="form-group">
										<label class="text-white">First Name</label> 
										<input type="text" class="form-control" name="txt_title" placeholder="Your name..."  required="" ><br>
								</div>
                                 <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="txt_comment" rows="20" class="form-control" required placeholder="Your Message..." required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
			
                                <!-- <div class="form-group">
                                    <div class="input-group">
                <textarea name="txt_comment" rows="20" class="form-control"  placeholder="Your Message...">
                                        	
                                        </textarea>
                                            
                                    </div>
                                </div> -->
                                        
								<!-- <div class="form-group"> -->
                                    <div class="form-group">
                                            <div class="input-group">
                                                
                                            <div class="col-md-12">
                                            <div class="form-group">
										<label class="text-white"> Upload Profile Pic</label>
										<input type="file" class="form-control" name="fileToUpload">
									</div>
                                </div>
                                            <p class="col-md-12">
                                                <input type="submit" value="SUBMIT" class="submit site-button" id="submit" name="submit">
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
                    
							
							
							
							
									</div>
								</div>
							</div>
							
                        </aside>
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
   
    <!-- Content END-->
	<!-- Footer -->
   
       
           
		<div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
						<span> © Copyright by <i class="fa fa-heart m-lr5 text-red heart"></i>
						<a href="javascript:void(0);">Local search engine </a> All rights reserved.</span> 
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

<!-- Mirrored from bizmap.dexignzone.com/xhtml/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Oct 2019 09:33:12 GMT -->
</html>
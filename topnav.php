<!-- <main></main>n header -->
<?php
include "common/dbconnect.php";
?>
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.php"><img src="images/output-onlinepngtools (2).png" style="height:65px"    alt=""></a>
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
                            <?php
                            if(isset($_SESSION['id'])){?>
                                <span>
                                <a href="offers.php" class="site-button-link white">OFFERS</i></a>
                                <a href="pm.php" class="site-button-link white">PM</a>
                                 <a href="feedback.php" class="site-button-link white">REVIEW</a>
                                <!-- <a href="pm.php" class="Site-button-link white"></i>PM YOJNA</a>   -->
                                <!--  <a href="feedback.php" class="site-button-link white">REVIEW</a> -->
                             <a href="blog-details.php" class="site-button-link white"><i ></i>BLOG</a>
                              <a href="profile.php" class="site-button radius-xl m-l10"><i class="ti-user m-r5 "></i>PROFILE</a>
                                <!-- <a href="#" class="site-button radius-xl m-l10""><i class="ti-user m-r5 "></i>
                                    <?php echo $_SESSION['fn']; ?></a> -->
                            <?php }else{ ?>
                            <a href="login.php"  class="site-button radius-xl m-l10><i class="ti-user m-r5 "></i>LOG IN</a>
							<a href="register.php" class="site-button radius-xl m-l10">REGISTER</a>
                        <?php } ?>
                            <!-- <a href="#" class="site-button radius-xl m-l10">My Profile</a> -->
                        </div>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <ul class="nav navbar-nav">              
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="aboutus.php">About Us</a></li>
                            <li><a href="blog-standard.php">viewblog</a></li>
                            <li class="#"><a href="contact-us.php">Contact Us</a> 
                          
                            <!-- <li class="down"><a href="#">Listings <i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="offers.php">OFFERS/SCHEMES<i class="fa fa-angle-right"></i></a>
                                    <li><a href="pm.php">PM YOJNA<i class="fa fa-angle-right"></i></a>     
                                       
                                    </li>
							</ul> -->
                        </ul>
                            
                       	
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
<?php
session_start();
$uid=$_SESSION['id'];
// echo $uid;
require './common/dbconnect.php';
$qry = "SELECT * from user_tbl WHERE isactive=1 AND id=$uid";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);
?>
<html>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<head>
<?php include'head.php'?>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
    <!-- <main></main>n header -->
<?php
include "common/dbconnect.php";
?>
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="index.php"><img src="images/output-onlinepngtools (2).png" style="height:65px"class="logo" alt=""></a>
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
                                <a href="offers.php" class="site-button-link blACK">OFFERS</i></a>
                                <a href="pm.php" class="site-button-link blACK">PM YOJNA</a>
                                <!-- <a href="pm.php" class="Site-button-link black"></i>PM YOJNA</a>   -->
                                 <a href="feedback.php" class="site-button-link black">REVIEW</a>
                             <a href="blog-details.php" class="site-button-link black"><i ></i>BLOG</a>
                              <a href="profile.php" class="site-button radius-xl m-l10"><i class="ti-user m-r5 "></i>PROFILE</a>
                                <!-- <a href="#" class="site-button radius-xl m-l10><i class="ti-user m-r5 ></i>
                                    <?php echo $_SESSION['fn']; ?></a> -->
                            <?php }else{ ?>
                            <a href="login.php"  class="site-button radius-xl m-l10"><i class="ti-user m-r5 "></i>LOG IN</a>
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
    <?php include'head.php'; ?>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                            <div class="profile-img" >
                            <img src="upload/<?php echo$row['profilepic']; ?>">
                            <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <!-- <h5>
                                        <?php echo $row['firstname']; ?>
                                    </h5> -->
                                    <h6>
                                        <!-- Web Developer and Designer -->
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">USER DETAIL</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                    	<!-- <a href="logout.php" class="site-button-link black"><i class="ti-user m-r5 "></i>Log out</a> -->
                   <a href="logout.php"class="site-button radius-xl m-l10" name="btnAddMore" value="logout"/>LOGOUT</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>USER Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['id']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> USER NAME</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['firstname'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>EMAIL ID</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['email'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>PHONE NUMBER</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['mobile'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>DATE OF BIRTH</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['dob'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>SECURITY QUESTION</label>
                                            </div>
                                            <div class="col-md-6">
                                                <?php 
                                                $q = "SELECT * FROM seq_tbl where id='".$row['sec_question']."'";
                                                $r =mysqli_query($conn,$q);
                                                while($rq=mysqli_fetch_assoc($r)){
                                                ?>
                                                <p><?php echo $rq['squestion'];?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ANSWER</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['answer'];?></p>
                                            </div>
                                        </div>
                                       
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Hourly Rate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>10$/hr</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        <?php include'footer.php' ?>
    </body>
    </html>
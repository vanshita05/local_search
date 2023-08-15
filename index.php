<?php
session_start();
require './common/dbconnect.php';
$qry = "select * from dep_tbl WHERE isactive=1";
$rs=mysqli_query($conn,$qry);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<?php include'head.php'?>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
         // alert("hi page is ready");
          $("#btn_sb").click(function(e){
          //alert('btn_sb click');
                e.preventDefault();
                // alert("btn stopped");
               var sch=$("#txt_sch").val();
               // alert(sch);
               $.ajax({
                  type:"POST",
                  datatype:"html",
                  url:"schPro.php",
                  data:{
                  	searech:sch,
                  },

                  success:function(result){
                 	// alert(result);
                  	$("#sch_tb").html(result)
                  }
               });

          });
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
         // alert("hi page is ready");
          $("#btn_sb").click(function(e){
          //alert('btn_sb click');
                e.preventDefault();
                // alert("btn stopped");
               var sch=$("#txt_sch").val();
               // alert(sch);
               $.ajax({
                  type:"POST",
                  datatype:"html",
                  url:"pmPro.php",
                  data:{
                  	searech:sch,
                  },

                  success:function(result){
                 	// alert(result);
                  	$("#sch_tb").html(result)
                  }
               });

          });
		});
	</script>
	
</head>
<body id="bg">
<div id="loading-area"></div>
<div class="page-wraper">
	<!-- header -->
    <header class="site-header header-transparent mo-left">
		<?php include'topnav.php'?>
    </header>
    <!-- header END -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Section Banner -->
		<div class="dlab-bnr-inr dlab-bnr-inr-md" style="background-image:url(images/main-slider/photo-1466854076813-4aa9ac0fc347.jpeg); background-size: cover;">
            <div class="container">
                <div class="dlab-bnr-inr-entry align-m dlab-home">
					<div class="bnr-content">
						<h2 style="color:white"><strong>LOCAL SEARCH ENGINE </strong> <strong class="color:black">GOVERMENT OFFERS.</strong></h2>
					</div>
					<div class="dlab-tabs search-filter">
						<ul class="nav nav-tabs">
							<!-- <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#place">
								<i class="fa fa-map-marker"></i> <span class="title-head">Place</span></a></li> -->
							<!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#party">
								<i class="fa fa-music"></i> <span class="title-head">Party</span></a></li> -->
							<!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#restauren">
								<i class="fa fa-glass"></i> <span class="title-head">Restauren</span></a></li> -->
						</ul>
						<div class="tab-content">
							<div id="place" class="tab-pane active">
								<form>
									<div class="input-group">
										<input type="text" id="txt_sch" class="form-control" placeholder="What are you looking for?">
										<!--<div class="form-control">-->							<!-- 			
	<select name="did" class="form-control">
        <?php
        // if(mysqli_num_rows($rs)>0)
        // {
        //     while($row=mysqli_fetch_assoc($rs))
        //     {
    
    
        ?>
    <option value="<?php //echo $row['id']; ?>" ><?php// echo $row['depname']; ?></option><BR>
        <?php
           // }
        // }
        // else
        // {
        //     echo "0 Row Found";
        //     exit();
       // }
        ?>
        </select> -->
       
										<!--</div>-->
										<div class="input-group-prepend">
											<a href="blog-standard.html"></a>
			<button type="submit" class="site-button text-uppercase" id="btn_sb"  name="btn_sb" >Submit</button>
		<!-- <button class="site-button text-uppercase"><i class="fa m-r5 fa-search"></i> Search</button> -->
										</div>
									</div>
								</form>
								 <div id="sch_tb">
        	
        </div>
							</div>
							<div id="party" class="tab-pane">
								<form>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="What are you looking for?">
										<div class="form-control"> 
											<select> 
												<option>Select Category</option>
												<option>Construction</option>
												<option>Corodinator</option>
												<option>Employer</option>
												<option>Financial Career</option>
												<option>Information Technology</option>
												<option>Marketing</option>
												<option>Quality check</option>
												<option>Real Estate</option>
												<option>Sales</option>
												<option>Supporting</option>
												<option>Teaching</option> 
											</select>
										</div>
										<div class="input-group-prepend">
											<button class="site-button text-uppercase"><i class="fa m-r5 fa-search"></i> Search</button>
										</div>
									</div>
								</form>
							</div>
							<div id="restauren" class="tab-pane">
								<form>
									<div class="input-group">
										<input type="text" class="form-control" placeholder="What are you looking for?">
										<div class="form-control"> 
											<select> 
												<option>Select Category</option>
												<option>Construction</option>
												<option>Corodinator</option>
												<option>Employer</option>
												<option>Financial Career</option>
												<option>Information Technology</option>
												<option>Marketing</option>
												<option>Quality check</option>
												<option>Real Estate</option>
												<option>Sales</option>
												<option>Supporting</option>
												<option>Teaching</option> 
											</select>
										</div>
										<div class="input-group-prepend">
						<button class="site-button text-lowercase"><i class="fa m-r5 fa-search"></i> Search</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!-- <p class="text-center text-white m-b10 m-t30">Find awesome places, bars, restaurants & activities.</p> -->
					</div>
					
					<!-- <div class="category-bx">
						<a href="listing-left-sidebar.html" class="category">
							<i class="flaticon-cart-of-ecommerce"></i>
							<p>carts</p>
						</a>
						<a href="listing-left-sidebar.html" class="category">
							<i class="flaticon-carrot"></i>
							<p>foods</p>
						</a>
						<a href="listing-left-sidebar.html" class="category">
							<i class="flaticon-hockey"></i>
							<p>candy</p>
						 --><!-- /a>
						<a href="listing-left-sidebar.html" class="category">
							<i class="flaticon-pill-capsule"></i>
							<p>medicine</p>
						</a>
						<a href="listing-left-sidebar.html" class="category">
							<i class="flaticon-birthday-cake"></i>
							<p>cake</p>
						</a>
						<a href="listing-left-sidebar.html" class="category">
							<i class="flaticon-place"></i>
							<p>place</p> -->
						</a>
					</div>
				</div>
            </div>
        </div>
		<!-- Section Banner END -->
		<!-- Search Filter -->
		<div class="section-full">
			<div class="container">
				
			</div>
		</div>
		<!-- Search Filter END -->
		<div class="content-block">
            <!-- Featured Destinations -->
            <div class="section-full bg-white content-inner" style="background-image:url(images/background/bg5.jpg); background-position:bottom; background-size: cover;">
                <div class="container">
					<div class="section-head text-black text-center">
						
						<h2 class="box-title">RECENTLY UPLOADED SCHEME</h2>
						<div class="dlab-separator bg-primary"></div>
						
					</div>
                    <div class="row">
                    	<?php $q = "SELECT * FROM schoff_tbl LIMIT 4 "; 
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
									<img src="./upload/<?php echo $rw['profilepic']; ?>" style="height:371px"  alt=""/>
								</div>	
								<div class="featured-info">
<h5 class="title"><a href="listing-details.php?id=<?php echo $rw['id']?>"><?php echo $rw['schoffname']; ?></a></h5>

		
	<!-- <h5 class="title"><a href="<?php echo $rw['schofflink']; ?>"><?php echo $rw['schoffname']; ?></a></h5> -->
									
								</div>
							</div>
						</div>
					<?php }
				}
				?>
						
					</div>
                </div>
            </div>
			<!-- Featured Destinations End -->
			<!-- Our Services -->
			<div class="section-full bg-gray content-inner about-us">
                <div class="container-fluid">
					<div class="section-head text-black text-center">
						<h2 class="box-title">RECENT UPDATED NEWS</h2>
						<div class="dlab-separator bg-primary"></div>
						
					</div>
					<?php  $qry1 = "SELECT * FROM news_tbl WHERE isactive=1";

					  

					   $rs1 = mysqli_query($conn,$qry1);

					  //$row1 = mysqli_fetch_assoc($rs1);				

					?>
					<div class="most-visite owl-carousel owl-btn-center-lr owl-btn-1 primary">
						<?php
if(mysqli_num_rows($rs1)>0 )
{
    // echo "True";
    while($row1=mysqli_fetch_assoc($rs1))
    {
?>
						<div class="item">
							<div class="listing-bx m-b30" >
								<div class="listing-media">
					<img src="./upload/<?php echo $row1['profilepic']; ?>" style="height:100px width:100px" walt=""/>
								</div>
								<div class="listing-info">
									
									<h3 class="title"><?php echo $row1['newsname']?></h3>
									<p><?php echo $row1['newsdes']?></p>
									<a href="<?php echo $row1['newslink']; ?>">Click Here</a>
								</div>
								
							</div>
						</div>
					<?php }
				}else{
                 echo "Error";
				}?>
						
					</div>
				</div>
			</div>
            <!-- Our Services -->
			<!-- Why Choose Us -->
			<div class="section-full bg-img-fix most-visited content-inner overlay-primary-dark" style="background-image:url(images/background/bg1.jpg);">
				<div class="container">
					<div class="section-head text-white text-center">
						<h2 class="box-title">HOW IT WORKS?</h2>
						<div class="dlab-separator bg-white"></div>
						<p></p>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4">
							<div class="icon-bx-wraper sr-box center box1 m-b30">
								<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-search"></i></a> </div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Enter What Your Want?
								</h3>
									<p>.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="icon-bx-wraper sr-box center  m-b30">
								<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-gift"></i></a> </div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Choose What To Do??</h3>
									<p></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4">
							<div class="icon-bx-wraper sr-box center box1 m-b30">
								<div class="icon-bx-lg radius bg-white m-b20"><a href="javascript:void(0)" class="icon-cell text-primary"><i class="ti-rocket"></i></a> </div>
								<div class="icon-content">
									<h3 class="dlab-tilte">Now You Can See The Search Result</h3>
									<p></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Why Chose Us End -->
			<!-- Our Portfolio -->
			<div class="content-block">
				<div class="section-full bg-white content-inner" style="background-image:url(images/background/bg5.jpg); background-position:bottom; background-size: cover;">
			<!-- <div class="section-full content-inner bg-grey"> -->
                <div class="container">
					<div class="section-head text-center">
						<h2 class="box-title">WHAT OUR USERS SAY</h2>
						<div class="dlab-separator bg-primary"></div>
						
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="row">
								<div id="owl-demo" class="testimonial-one owl-loaded owl-theme owl-carousel owl-btn-center-lr owl-btn-3 owl-dots-primary-big">
									<!-- <div class="item">
										<div class="client-box">
											
											<div class="client-detail">
												
                                                 <div class="client-img">
													
												</div>
												<div class="client-info">
													<h5 class="client-name"></h5> 
													
												</div>
											</div>
											<div class="client-info-bx">
												
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
											</div>
										</div>
									</div> -->
									<?php 
                                        $select="select * from feed_tbl where isactive=1";
                                        $query=mysqli_query($conn,$select);
                                        if (mysqli_num_rows($query)>0) {
                                         while ($row1=mysqli_fetch_assoc($query)) {
                                         		
                                         		
                                        
									 ?>
									<div class="item">
										<div class="client-box">
											<div class="client-detail">
												<div class="client-img">
													<img  src="upload/<?php echo$row1['profilepic']; ?>"  alt="">
												</div>
												<div class="client-info">
													<h5 class="client-name"><?php echo $row1['name']; ?></h5> 
													 
												</div>
											</div>
											<div class="client-info-bx">
												
												<p><?php echo $row1['comment']; ?></p>
											</div>
										</div>
									</div>
                                     <?php 
                                     }
                                        }
                                      ?>
									<!-- <div class="item">
										<div class="client-box">
											<div class="client-detail">
												<div class="client-img">
													<img src="images/testimonials/pic3.jpg" width="100" height="100" alt="">
												</div>
												<div class="client-info">
													<h5 class="client-name">Diamond Anderson</h5> 
													<span>Founder, uihub inc.</span> 
												</div>
											</div>
											<div class="client-info-bx">
												<h5>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </h5>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
			
			<!-- Featured Destinations -->
            <div class="section-full bg-white content-inner">
                
			<!-- Featured Destinations End -->
        </div>
		<!-- contact area END -->
    </div> 
    <!-- Content END-->
	<!-- Footer -->
</div>
    <footer class="site-footer">
        <?php include'footer.php'?>
</footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<?php include'script.php'?>

</body>


</html>

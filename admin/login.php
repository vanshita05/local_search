<!-- Php Code -->
<?php
session_start();
if (isset($_SESSION['admin']))
{
    header("location:dashboard.php");
    exit();
}
if (isset($_COOKIE['user']))
{
    $un=$_COOKIE['user'];
    $ps=$_COOKIE['pass'];
}
else
{
    $un="";
    $ps="";
}
?>
<!DOCTYPE html>
<head>
<title>local search engine </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->

<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>
<!-- <div class="log-w3"> -->
	<div class="login-block
	">
<div class="w3layouts-main">
	<font color="blue"> <H2>LOGIN NOW</H2></font>
	<form action="checklogin.php" method="post">
		
			<input type="email" class="ggg"name="txt_un" placeholder=" E-mail Id" value="<?php echo $un; ?>">
	<input type="Password" class="ggg" name="txt_ps"	placeholder="PASSWORD"class="validate" value="<?php echo $ps; ?>">
			<!-- <span><input type="checkbox" />Remember Me</span>
			<h6><a href="#">Forgot Password?</a></h6> -->
				<div class="clearfix"></div>
	<input type="submit"name="login" ></a>

				<!-- <input class="waves-effect waves-light btn-large btn-log-in " type="submit" name="btn_sb" style="width: 100%;"> -->
		
		<p>Don't Have an Account ?<a href="registration.php">Create an account</a></p>
	</form>
</div>
</div>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

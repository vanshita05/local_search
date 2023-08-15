<?php
require 'common/dbconnect.php';
session_start();
//var_dump($_POST);

if (!isset($_POST["btn_sb"]))
{
	header("location:login.php");
	exit();
}
$us=$_POST['txt_un'];
$qry="SELECT * FROM user_tbl WHERE email='".$us."' AND user_type=1 AND isactive=1";


$rs=mysqli_query($conn,$qry);
if (mysqli_num_rows($rs)>0)
{
	$row=mysqli_fetch_assoc($rs);
	//var_dump($row);
	//exit();
	$id=$row['id'];
	$fn=$row['firstname'];
	$_SESSION['email']=$us;
	// $_SESSION['fn']=$fn;
	// $_SESSION['user']=1;
	// if (isset($_POST['remember']))
	// {
	// 	setcookie("user",$us,time() + (86400*30),"/");
	// 	setcookie("pass",$ps,time() + (86400*30),"/");
	// }
header("location:updatepassword.php");
exit();
}
else
{
	echo "Error";
	header("location:forget.php");
	exit();
}
?>
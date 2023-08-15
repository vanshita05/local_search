<?php
require 'common/dbconnect.php';

$fn=$_POST['txt_fn'];
$email = $_POST['txt_email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$isactive=1;
$utype=1;
$doi=date("d-m-y H:i:s");

if(!$pass==$cpass)
{
	echo "Pass and Cpass Error";
	exit();
}
if($_FILES['fileToUpload']['name']=="")
{	

	$profilepic="avatar.png";
}
else
{	
	require 'finalupload.php';
	$profilepic=$_FILES['fileToUpload']['name'];
}
$qry1="SELECT * FROM user_tbl WHERE email='".$email."'";
$rs1=mysqli_query($conn,$qry1);

if(mysqli_num_rows($rs1)>0)
{
	echo "email already exist!";
	exit();
}
$qry="INSERT into user_tbl(firstname,email,password,mobile,dob,isactive,user_type,sec_question,answer,doi,profilepic) VALUES('".$fn."','".$email."','".$pass."','".$mobile."','".$dob."',$isactive,$utype,'".$_POST['sec']."','".$_POST['answer']."','".$doi."','".$profilepic."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
	header("location:login.php");
}
else
{
	echo "Insert Error";
}
?>
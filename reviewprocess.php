<?php
require 'common/dbconnect.php';
//var_dump($_FILES);
$fn=$_POST['txt_name'];
$comment=$_POST['txt_comment'];
$email=$_POST['txt_email'];
$isactive=1;
$doi=date("d-m-y H:i:s");
if($_FILES['fileToUpload']['name']=="")
{	

	$profilepic="avatar.png";
}
else
{	
	require 'finalupload.php';
	$profilepic=$_FILES['fileToUpload']['name'];
}

$qry="INSERT into review_tbl(name,email,comment,profilepic,isactive,doi) VALUES('".$fn."','".$email."','".$comment."','".$profilepic."',$isactive,'".$doi."')";

$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
	header("location:listing-details.php");
}
else
{
	echo "Insert Error";
}
?>

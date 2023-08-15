<?php
session_start();
require 'common/dbconnect.php';
//var_dump($_FILES);

$title=$_POST['txt_title'];
$comment=$_POST['txt_comment'];
$isactive=1;
$doi=date("Y-m-d H:m:s");
if($_FILES['fileToUpload']['name']=="")
{	

	$profilepic="avatar.png";
}
else
{	
	require 'finalupload.php';
	$profilepic=$_FILES['fileToUpload']['name'];
}
$qry="INSERT into blog1_tbl(uid,title,comment,profilepic,isactive,doi) VALUES('".$_SESSION['id']."','".$title."','".$comment."','".$profilepic."',$isactive,'".$doi."')";

$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
	header("location:index.php");
}
else
{
	echo "Insert Error";
}
?>

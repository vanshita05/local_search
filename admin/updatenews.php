<?php
require '../common/dbconnect.php';
//var_dump($_POST);
$id=$_POST['nid'];
$newsname=$_POST['newsname'];
$newsdes=$_POST['newsdes'];
$newslink=$_POST['newslink'];
require 'finalupload.php';
$profile = $_FILES['fileToUpload']['name'];
$qry="UPDATE news_tbl SET newsname='".$newsname."',newsdes='".$newsdes."',newslink='".$newslink."',profilepic='".$profile."' WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewnews.php");
	exit();
}
else
{
	echo "Update Wrror";
}
?>

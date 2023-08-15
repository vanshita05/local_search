<?php
require 'common/dbconnect.php';
var_dump($_FILES);
$fn=$_POST['txt_name'];
$comment=$_POST['txt_comment'];
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
$qry="INSERT into feed_tbl(name,comment,profilepic,isactive,doi) VALUES('".$fn."','".$comment."','".$profilepic."',$isactive,'".$doi."')";
echo $qry;
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

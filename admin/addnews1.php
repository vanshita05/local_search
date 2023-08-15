<?php
require '../common/dbconnect.php';
// var_dump($_POST);
var_dump($_FILES);
// $id=$_POST['id'];
$newsname=$_POST['newsname'];
// $newsdes=$_POST['newsdes'];
$newslink=$_POST['newslink'];
$isactive=1;
$utype=1;
$doi=date("d-m-y H:i:s");
// if($conn==$qry)
// {
// 	// echo "Pass and Cpass Error";
// 	exit();
// }
if($_FILES['fileToUpload']['name']=="")
{	

	$profilepic="avatar.png";
}
else
{	
	require 'finalupload.php';
	$profilepic=$_FILES['fileToUpload']['name'];
}
// $qry="INSERT into news_tbl(newsname,newsdes,newslink,profilepic,isactive) VALUES('".$newsname."','".$newsdes."','".$newslink."','".$profilepic."',$isactive)";
// echo $qry;
$qry="INSERT into news_tbl(newsname,newslink,profilepic,isactive) VALUES('".$newsname."','".$newslink."','".$profilepic."',$isactive)";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
	header("location:viewnews.php");
}
else
{
	echo "Insert Error";
}
?>




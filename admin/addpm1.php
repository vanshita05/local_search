<?php
require '../common/dbconnect.php';
var_dump($_POST);
var_dump($_FILES);
// $did=$_GET['did'];
$pmyojnaname=$_POST['pmyojnaname'];
$pmyojnadecp=$_POST['pmyojnadecp'];
$pmyojnalink=$_POST['pmyojnalink'];
$isactive=1;

// if($conn,$qry)
// {
// 	echo "Pass and Cpass Error";
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
$qry="INSERT into pm_tbl(pmyojnaname,pmyojnadecp,pmyojnalink,profilepic,isactive) VALUES('".$pmyojnaname."','".$pmyojnadecp."','".$pmyojnalink."','".$profilepic."',$isactive)";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
	header("location:viewpm.php");
    exit();
}
else
{
	echo "Insert Error";
}
?>

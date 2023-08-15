<?php
require '../common/dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$pmyojnaname=$_GET['pmyojnaname'];
$pmyojnadecp=$_GET['pmyojnadecp'];
$pmyojnalink=$_GET['pmyojnalink'];
$qry="UPDATE pm_tbl SET pmyojnaname='".$pmyojnaname."',pmyojnadecp='".$pmyojnadecp."',pmyojnalink='".$pmyojnalink."'WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewpm.php");
	exit();
}
else
{
	echo "Update Wrror";
}
?>
pmyojnadecp
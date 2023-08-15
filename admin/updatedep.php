<?php
require '../common/dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$depname=$_GET['dep-name'];
$dou=date('Y-m-d H:m:s');
$qry="UPDATE dep_tbl SET depname='".$depname."',dou='".$dou."' WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewdep.php");
	exit();
}
else
{
	echo "Update Wrror";
}
?>
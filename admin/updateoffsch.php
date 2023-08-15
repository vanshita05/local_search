<?php
require '../common/dbconnect.php';
// var_dump($_GET);
// exit();
$did=$_POST['id'];
$deptid=$_POST['dep'];
$schoffname=$_POST['schoffname'];
$schoffdecp=$_POST['schoffdecp'];
$schofflink=$_POST['schofflink'];
$dou=date('Y-m-d H:m:s');

require 'fileupload.php';

$profile=$_FILES['profile']['name'];

$qry="UPDATE schoff_tbl SET did='".$deptid."',schoffname='".$schoffname."',schoffdecp='".$schoffdecp."',schofflink='".$schofflink."',profilepic='".$profile."',dou='".$dou."' WHERE id=$did";

$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewoffsch.php");
	exit();
}
else
{
	echo "Update Wrror";
}
?>

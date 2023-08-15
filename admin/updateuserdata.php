<?php
require '../common/dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$fn=$_GET['txt_fn'];
$qry="UPDATE user_tbl SET firstname='".$fn."' WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:alluser.php");
	exit();
}
else
{
	echo "Update Wrror";
}
?>
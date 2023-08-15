<?php
require '../common/dbconnect.php';
var_dump($_GET);
$id=$_GET['id'];
$squestion=$_GET['squestion'];
$qry="UPDATE seq_tbl SET squestion='".$squestion."' WHERE id=$id";
$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:viewseq.php");
	exit();
}
else
{
	echo "Update Wrror";
}
?>
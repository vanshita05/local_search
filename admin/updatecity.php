<?php
require '../common/dbconnect.php';
//var_dump($_GET);

$id=$_GET['id'];
$dou=date('Y-m-d H:m:s');
$qry = "UPDATE city_tbl SET cityname='".$_GET['cname']."',sid='".$_GET['state']."',dou='".$dou."' WHERE id=$id ";

// echo $qry;
// exit();
$rs= mysqli_query($conn,$qry);
if($rs){
	header("location:viewstatecity.php");
	exit();
}else{
	echo "Error";
	exit();
}

?>
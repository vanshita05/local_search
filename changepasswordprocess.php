<?php
session_start();
require 'common/dbconnect.php';
//var_dump($_POST);

$qry = "UPDATE user_tbl SET password='".$_POST['pwd']."' where email='".$_SESSION['email']."'";

$rs= mysqli_query($conn,$qry);
if($rs){
	header("location:login.php");
	exit();
}else{
	echo "Error";
	exit();
}

?>
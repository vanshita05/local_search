<?php
session_start();
//var_dump($_POST);

require 'common/dbconnect.php';

$qry = "SELECT sec_question='".$_POST['sec']."',answer='".$_POST['answer']."' from user_tbl where email='".$_SESSION['email']."'";

$rs= mysqli_query($conn,$qry);
if($rs){
	header("location:changepassword.php");
	exit();
}else{
	header("location:updatepassword.php");
	exit();
}

?>
<?php
require 'common/dbconnect.php';
var_dump($_POST);
$fn=$_POST['txt_fn'];
$email=$_POST['txt_email'];
$contacct=$_POST['txt_contacct'];
$subject=$_POST['txt_subject'];
$comment=$_POST['txt_comment'];
$isactive=1;
$doi=date("d-m-y H:i:s");

	
$qry="INSERT into con_tbl(name,email,contacct,subject,message,isactive,doi)
VALUES
('".$fn."','".$email."','".$contacct."','".$subject."','".$comment."', $isactive,'".$doi."')";
echo $qry;


$rs=mysqli_query($conn,$qry);
if($rs)
{   
 // header("location:viewcontact.php");
	echo "Insert Scuess";
	header("location:index.php");
}
else
{
	echo "Insert Error";
}
?>
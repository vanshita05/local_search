<?php
require 'common/dbconnect.php';
var_dump($_POST);
$fn=$_POST['txt_fn'];
$email=$_POST['txt_email'];
$phone=$_POST['txt_phone'];
$subject=$_POST['txt_subject'];
$message=$_POST['message']
$isactive=1;
// $utype=1;
$doi=date("d-m-y H:i:s");
if (!$pass==$cpass)
{
 echo "pass and cpass not same";
 exit();
}
	
$qry="INSERT into con_tbl
(firstname,email,password,isactive,user_type,doi)
VALUES
('".$fn."','".$email."','".$txt_phone."','".$txt_subject."','".$txt_phone."', '".$txt_subject."','".$message."',$isactive,'".$doi."')";
echo $qry;


$rs=mysqli_query($conn,$qry);
if($rs)
{   
	// header("location:login.php");
	echo "Insert Scuess";
    exit();
}
else
{
	echo "Insert Error";
}
?>
<?php
require 'common/dbconnect.php';
var_dump($_POST);
$fn=$_POST['txt_fn'];
$email=$_POST['txt_email'];
$pass=$_POST['password'];
$isactive=1;
$utype=1;
$doi=date("d-m-y H:i:s");
if (!$pass==$cpass)
{
 echo "pass and cpass not same";
 exit();
}
	
$qry="INSERT into user_tbl
(firstname,email,password,isactive,user_type,doi)
VALUES
('".$fn."','".$email."','".$pass."', $isactive,$utype,'".$doi."')";
echo $qry;


$rs=mysqli_query($conn,$qry);
if($rs)
{
	header("location:login.php");
    exit();
}
else
{
	echo "Insert Error";
}
?>
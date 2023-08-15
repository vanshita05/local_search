<?php
require '../common/dbconnect.php';
var_dump($_POST);
$fn=$_POST['txt_fn'];
$email = $_POST['txt_email'];
$pass=$_POST['password'];
$mobile=$_POST['mobile'];
$isactive=1;
$utype=1;
$doi=date("d-m-y H:i:s");

if(!$pass)
{
	echo "Pass and Cpass Error";
	exit();
}

else
{
	echo "email already exist!";
	exit();
}
$qry="INSERT into user_tbl(firstname,email,password,mobile,dob,isactive,user_type,doi,profilepic) VALUES('".$fn."','".$email."','".$pass."','".$mobile."','".$dob."',$isactive,$utype,'".$doi."','".$profilepic."')";
echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs)
{
	echo "Insert Success";
}
else
{
	echo "Insert Error";
}
?>
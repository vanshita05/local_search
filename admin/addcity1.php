<?php
require '../common/dbconnect.php';
var_dump($_GET);
$sid=$_GET['sid'];
$cname=$_GET['txt_city'];
$isactive=1;
$qry="INSERT into city_tbl(sid,cityname,isactive) VALUES($sid,'".$cname."',$isactive)";
echo $qry;
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	echo "Insert Success";
	header("location:viewstatecity.php");
   exit();
}
else
{
	echo "Insert Error";
}
?>
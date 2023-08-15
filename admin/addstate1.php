<?php
require '../common/dbconnect.php';
var_dump($_GET);
$sname=$_GET['sname'];
$isactive=1;
$qry="INSERT into state_tbl(sname,isactive) VALUES('".$sname."',$isactive)";
$rs=mysqli_query($conn,$qry);
if ($rs)
{
	echo "Insert Success";
	header("location:viewstate.php");
    exit();
}
else
{
	echo "Insert Error";
}
?>
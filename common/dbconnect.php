<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amiraj";


$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
	die("Connection failed: " . mysql_connect_error());
} 
// echo "Server Connected Successfully";

$db = mysqli_select_db($conn,$dbname);

if($db)
{
	// echo "Database Selected!";
}
else
{
	echo "Database Error!";
}
?>	
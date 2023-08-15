<!-- PHP CODE -->
<?php
    require '../common/dbconnect.php';
    $qry="SELECT * FROM user_tbl WHERE isactive !=2 and user_type=1";
    // echo $qry;
    $rs=mysqli_query($conn,$qry);
?>
<?php include'header.php'?>
<!--header end-->
<!--sidebar start-->
<aside>
    <?php include'sidebar.php'?>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
        <div class="panel-heading">
    <b><u><h2>DASHBOARD</b></u></h2>
    </div>
		
		<!-- //market-->
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
    <b> all User</b>
    </div>
    <div>
      <table class="table">
        <tr>
        <td>Id</td>
        <td>First name</td>
        <td>Email</td>
        <td>Password</td>
        <td>isactive</td>
        <td>usertype</td>
        <!-- <td>edit</td>
        <td>delete</td> -->
        <!-- <td>Isactive</td>
        <td>Usertype</td>
        <td>Edit</td>
        <td>delete</td>  -->
    </tr>
<?php 
if(mysqli_num_rows($rs)>0)
{
    while($row=mysqli_fetch_assoc($rs))
    {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td><?php echo $row['isactive']; ?></td>
        <td><?php echo $row['user_type']; ?></td>
        <!--  <td><a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a></td>
         <td><a href="deleteuser.php?id=<?php echo $row['id']; ?>">delete</a></td> -->
    </tr>
<?php
}
}
else
{
    echo "0 Row Found";
}

?>
      </table>
    </div>
</div>
</div>
</section>

 <!-- footer -->
		 <?php include'footer.php'?>
  <!-- / footer -->
</section>
<!--main content end-->
<?php include'script.php'?>
</body>
</html>

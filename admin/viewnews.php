<!-- PHP CODE -->
<?php
require '../common/dbconnect.php';
$qry="SELECT * FROM news_tbl WHERE isactive!=2";
// echo "$qry";
$rs = mysqli_query($conn,$qry);
?>
<?php include'header.php'?>
<!--header end-->
<!--sidebar start-->
<?php include'sidebar.php'?>

<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">

      <b><u>VIEW ALL NEWS</b>
    </div>
    <div>
        <!-- <div class="inn-title"> -->
        <div class="bor">
      <table class="table table-hover"border="3">
    <tr>
          <th>Id</th>
        <th>NEWS Name</th>
        <th>DESCRIPTION</th>
        <th>PROFILE PIC</th>
        <th>LINK</th>
        <th>ISACTIVE</th>
        <!-- <td>view</td> -->
        <th>EDIT</th>
      <!-- <td>Block</td> --> 
        <th>DELETE</th> 
        
    </tr>
<?php
if(mysqli_num_rows($rs)>0)
{
    // echo "True";
    while($row=mysqli_fetch_assoc($rs))
    {
?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['newsname']?></td>
    <td><?php echo $row['newsdes']?></td>
    <td><img src="../upload/<?php echo $row['profilepic']; ?>" width="80" height="80"></td>
     <td><?php echo $row['newslink']?></td>
    <td><?php $ia=$row['isactive']; echo $ia;?></td>
    <!-- <td><a href="viewstate.php?id=<?php echo $row['id'];?>"
    >View</a></td> -->
    <td><a href="editnews.php?id=<?php echo $row['id'];?>"
    >Edit</a></td>
    <!-- <td><a href="statestatus.php?id=<?php echo $row['id'];?>" -->
    
<?php
if($ia==1)
{
?>
<!-- Block -->
<?php
}
else
{?>
Active
<?php
}?>
</a></td>
     <td><a href="deletenews.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    

</tr>
<?php
}
}
else{
    echo "0 Row Found";
}
?></div>
</table>           
    </div>
</div>
  </div>
</div
</section>
 <!-- footer -->
		  <?php include'footer.php'?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<?php include'script.php'?>
</body>
</html>

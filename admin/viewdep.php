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
   <B> <U>VIEW ALL DEPARTMENT</B></U>
    </div>
    <div>
      <div class="table-responsive table-desi">
        <table class="table table-hover"border="3">
    <tr>
        <th>Id</th>
        <th>DEPARTMENT NAME</th>
        <th>ACTIVE</th>
        <th>EDIT</th>
        <th>DELETE</th>
        
    </tr>
    <?php
require '../common/dbconnect.php';
$qry="SELECT * FROM dep_tbl WHERE isactive!=2";
// echo "$qry";
$rs = mysqli_query($conn,$qry);
?>
<?php
if(mysqli_num_rows($rs)>0)
{
    //echo "True";
    while($row=mysqli_fetch_assoc($rs))
    {
?>
<tr>
    <td><?php echo $row['id']?></td>
    <td><?php echo $row['depname']?></td>
    <td><?php $ia=$row['isactive']; echo $ia;?></td>
    <td><a href="editdep.php?id=<?php echo $row['id'];?>"
    >Edit</a></td>
    
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
    <td><a href="deletedept.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    

</tr>
<?php
}
}
else{
    echo "0 Row Found";
}
?>
</div>
</table>
</div>
    </div>
  </div>
</div>
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

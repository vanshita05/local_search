<!--PHP Code-->
<?php
require '../common/dbconnect.php';
$qry="SELECT * FROM state_tbl WHERE isactive=1";
// echo $qry;
$rs=mysqli_query($conn,$qry);
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
     <b><u> VIEW STATE</u></b>
    </div>
    <div>
        <div class="table-responsive table-desi">
        <table class="table table-hover"border="3">
      <!-- <table class="bor" class="table-hover "border="1"> -->
<!-- <table class="table table-hover" border="1"> -->
    <tr>
        <td>Id</td>
        <!-- <td>City Name</td> -->
        <td>State Name</td>
        <td>IsActive</td>
        <!-- <td>view</td> -->
        <td>Edit</td>
        <td>Delete</td>
    
    </tr>
    <?php
    if(mysqli_num_rows($rs)>0)
    {
        while($row=mysqli_fetch_assoc($rs))
        {
            $id=$row['id'];
            $qry1="SELECT * FROM state_tbl WHERE id=$id AND isactive=1";
            $rs1=mysqli_query($conn,$qry1);
            if(mysqli_num_rows($rs1)>0)
            {
            $row1=mysqli_fetch_assoc($rs1);
    ?>
    <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row1['sname'];?></td>
        <td><?php echo $row['isactive'];?></td>
<td><a href="editstate.php?id=<?php echo $row['id'];?>"
    >Edit</a></td>
    <td><a href="deletestate.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>
    <?php
        }
        }
    }
    else{
        echo "0 Row Found";
        exit();
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
</section>
<?php include'script.php'?>
</body>
</html>

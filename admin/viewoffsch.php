<!-- PHP CODE -->
<?php
require '../common/dbconnect.php';
$qry="SELECT * FROM schoff_tbl WHERE isactive!=2";
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
<B> <U>VIEW ALL OFFERS AND SCHEME</B></U>
    </div>
    <div>
       <div class="inn-title">
                                    <!-- <h4> Yojna Information</h4> -->
                                    
                                </div>
                <div class="bor">
                    <div class="table-responsive">
                  <table class="table table-hover" border="3">
    <tr>
        <th>Id</th>
        <th>Department Id</th>
        <th>Add Schemes And Offers Title</th>
        <th>Add Schemes And Offers Description</th>
        <th>profile pic</th>
        <th>Add Schemes And Offers Link</th>
        <th>IsActive</th>
        <th>Edit</th>
        <tH>Delete</th>
    
    </tr>
<?php
if(mysqli_num_rows($rs)>0)
{
    //echo "True";
    while($row=mysqli_fetch_assoc($rs))
    {
?>
<tr>
     <td><?php echo $row['id'];?></td> 
        <td><?php echo $row['did'];?></td>
        <td><?php echo $row['schoffname'];?></td>
        <td><?php echo $row['schoffdecp'];?></td>
    <td><img src="../upload/<?php echo $row['profilepic']; ?>" width="80" height="80"></td>
    <td><?php echo $row['schofflink'];?></td>
        <td><?php echo $row['isactive'];?></td>
        <td><a href="editoffsch.php?id=<?php echo $row['id'];?>"
    >Edit</a></td>
    <td><a href="deleteoffsch.php?id=<?php echo $row['id'];?>"
    >Delete</a></td>


</a></td>
     <!-- <td><a href="deletepm.php?id=<?php echo $row['id']; ?>">Delete</a></td> -->
    

</tr>
<?php
}
}
else{
    echo "0 Row Found";
}
?>
</table>         
</div>  

                               </div>
                            </div>
                        </div>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
          <?php include'footer.php'?>
  <!-- / footer -->
</section>

<?php include'script.php'?>
</body>
</html>

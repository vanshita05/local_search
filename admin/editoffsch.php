<?php
require '../common/dbconnect.php';
//var_dump($_GET);
$id=$_GET['id'];
// $FirstName=$_GET['txt_fn'];      
$qry="SELECT * FROM schoff_tbl WHERE id=$id";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);

include 'header.php';
?>

<!--header end-->
<!--sidebar start-->
<?php include 'sidebar.php'; ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     <B> <U>EDIT OFFERS AND SCHEME</B></U>
    </div>
    <div>
        <form action="updateoffsch.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Department:
        <select name="dep" class="form-control">
        <?php
        $qr = "SELECT * from dep_tbl WHERE isactive=1";
        // echo $qr;
        // exit();
        $r = mysqli_query($conn,$qr);
        if(mysqli_num_rows($r)>0)
        {
            while($rw=mysqli_fetch_assoc($r))
            {


        ?>
    <option value="<?php echo $rw['id']; ?>" <?php if($row['did']==$rw['id']){echo "selected"; } ?>><?php echo $rw['depname']; ?></option><BR>
        <?php
            }
        }
        else
        {
            echo "0 Row Found";
            exit();
        }
        ?>
        </select><BR>
        Add Schemes And Offers Title:
    
        <input type="text" name="schoffname" class="form-control" value="<?php echo $row['schoffname']; ?>"><BR>
        Schemes And Offers Discription: <input type="text" name="schoffdecp" class="form-control" value="<?php echo $row['schoffdecp']; ?>"></BR>
        Schemes And Offers link: <input type="text" name="schofflink"class="form-control" value="<?php echo $row['schofflink']; ?>"><BR>
        <img src="../upload/<?php echo $row['profilepic'];?>" width="150px"><br>
        Schemes And Offers Image:<input type="file" name="profile" class="form-control" required><br>
        <input type="submit" name="btn_sb" value="Update">
    </form>   
                            </div>

                        </div>
                    </section>
                </div>
        </div>
    </form>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2020 LSE ADMIN. All rights reserved | Design by <a href="http://w3layouts.com">Pradip</a></p>
            </div>
          </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>

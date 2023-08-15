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
        <!-- //market-->

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
             <section class="panel"><BR><BR>
                        <header class="panel-heading">
                            <b><u>ADD NEW STATE AND CITY</u></b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="addcity1.php" method="get"><br>
        STATE:
        <select name="sid" class="form-control">
        <?php
        if(mysqli_num_rows($rs)>0)
        {
            while($row=mysqli_fetch_assoc($rs))
            {


        ?>
            <option value="<?php echo $row['id']; ?>" ><?php echo $row['sname']; ?></option>
        <?php
            }
        }
        else
        {
            echo "0 Row Found";
            exit();
        }
        ?>
        </select><br>

        CITY: <br> <input type="text" name="txt_city"class="form-control"placeholder="Enter Username" required=""data-parsley-trigger="keyup" ><br>
        <input type="submit" name="btn_sb"  class="btn-info">
    </form>
                            </div>

                        </div>
                    </section>
                </div>
        </div>
         <!-- footer --><BR><BR><BR><BR><BR>
          <?php include'footer.php'?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<?php include'script.php'?>
</body>
</html>

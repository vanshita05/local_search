<!-- PHP Code -->
<?php
require '../common/dbconnect.php';
$qry="SELECT * FROM seq_tbl WHERE isactive=1";
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
             <section class="panel">
                        <header class="panel-heading">
                         <B>  <U> ADD SEQURITY QUESTION</B></U>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
        <form action="addseq1.php" method="get">
     <div class="row">
       <b> Write New Security Question</b> :<br><br>
        <input type="text" name="squestion" class="form-control"placeholder="Enter Username">
        <!-- <<input type="text" name="squestion"> --> <br>
         <input type="submit" name="btn_sb" class="btn-info">
                <!-- input type="submit" name="btn_sb"> --><br>

                            </form>
                            </div>

                        </div>
                    </section>
                </div>
        </div>
         <!-- footer --><br><br>
          <?php include'footer.php'?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<?php include'script.php'?>
</body>
</html>

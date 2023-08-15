<!-- PHP CODE -->
<?php
require '../common/dbconnect.php';

$id=$_GET['id'];
$qry="SELECT * FROM state_tbl WHERE id=$id";
//echo "$qry";
$rs = mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);

include 'header.php';
?>

<!--sidebar start-->
<?php include 'sidebar.php'; ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->

        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
             <section class="panel">
                        <header class="panel-heading">
                            <b><u>EDIT  CURRENT STATE</u></b>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                               <!-- <div class="inn-title">
                                    <h4><B><U> Edit STATE</h4></U>
                                    <BR>
                               </div> -->
                <div class="bor">
                                <form action="updatestate.php" method="get">
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" >
                    State Name :<BR> <input type="text" name="sname" class="form-control" value="<?php echo $row['sname']; ?>"><BR>
                                 <input type="submit" value="Update" name="btn_sb">
                             </form>
                                 </div>
                            </div>
                        </div>
                                                    </div>

                            </div>

                        </div>
                    </section>
                </div>
        </div>
         <!-- footer --><br><br>
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2020 LSE ADMIN. All rights reserved </p>
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
<!-- morris JavaScript -->  
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });
       
        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }
        
        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
            
            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });
        
       
    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="js/monthly.js"></script>
    
    <!-- //calendar -->
</body>
</html>

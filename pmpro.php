<?php 
require 'common/dbconnect.php';
$searach=$_POST['searech'];
// echo $searach;

$select="select * from pm_tbl where ISACTIVE=1 and pmyojnaname like '%".$searach."%' OR
       pmyojnadecp like '%".$searach."%' OR pmyojnalink  like '%".$searach."%'";

        $query=mysqli_query($conn,$select);
        // if ($query) {
        //    echo "Data selected";
        // }
        // else{
        // 	echo "Error";
        // }
?>
<table border="3" class="table table-bordered">
                                    <!-- <table border="1"> -->
    <tr>
       
       
        <th>view Schemes And Offers Title</th>
        <!-- <th>viewSchemes And Offers Description</th> -->
       <!--  <th>Source Link</th>
         -->
    </tr>
      <?php
     if (mysqli_num_rows($query)>0) {
     
      while($row=mysqli_fetch_assoc($query)) {
        ?>
    <tr>
       <td><a href="pmdetail.php?id=<?php echo $row['id']?>"><?php echo $row['pmyojnaname']; ?></a></td>
       <!-- <td><?php echo  $row['schoffdecp']; ?></td> -->
       <!-- <td><a href="listing-details.php?id=<?php echo $rw['id']?>"><?php echo $row['schofflink']; ?>
   </a></td> -->
       <!-- <h5 class="title"><a href="listing-details.php?id=<?php echo $rw['id']?>"><</a></h5> -->
    </tr>
    <?php 
         
      }
     }
    else
     {
     	echo "No Record Found";
     }
     ?>
</table>

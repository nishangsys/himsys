<?php
include  '../includes/dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo "<script>window.open('login.php','_self')</script>";
}
else {
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="style.css" type="text/css" rel="stylesheet" />

<style type="text/css" media="print">
  @page { size: portrait; }
  table{
	  border-collapse:collapse;
  }
  tr,td{
	  border:1px solid#000;
  }
  }
</style>



</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">



<?php include 'header.php';
$month=$_GET['month'];
 $year_id=$_GET['ayear'];
 $reason=$_GET['head'];
 ?>

    <h1><?php echo $reason; ?> for <?php echo $month; ?> of <?php echo $ayear; ?> School year</h1>
  <table class="table table-bordered sortableTable responsive-table" style="line-height:2">
                                  
                              
                                    <thead>
                                 
                                        <tr>
                                            <th>#<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                            <th>Date<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                          <th>Amount Spent<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                              <th>Item Spent On<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
     
     
     <th>Qty<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>                                   </tr>
                                    </thead>
                                    <tbody>


                      <?php

 $dates=abs($date);
 
   $dm=$con->query("SELECT * FROM daily where  exp>0 and month='$month' and year='$ayear' AND purpose='$reason' order by id DESC") or die(mysqli_error($con));
   $i=1;
while($bum=$dm->fetch_assoc()){
	
?>                     <tr>
                               <td><?php echo $i++; ?></td>
                              <td><?php echo $bum['date']; ?></td>
                
                           <td><?php echo $bum['exp']; ?></td>
                         <td><?php echo $bum['reason']; ?></td>               
                         
    <td><?php echo $bum['qty']; ?></td>                                     
                         </tr>

  <?php } ?>

                              
                                  <?php
 $date=date('d-m-Y');
   $dm=$con->query("SELECT SUM(exp) FROM daily where month='$month' and year='$ayear' and exp>0 AND purpose='$reason' GROUP BY month") or die(mysqli_error($con));
   $i=1;
while($bum=$dm->fetch_assoc()){
	
?>                     <tr>
                               <td><?php echo $i++; ?></td>
                              <td><?php echo $bum['date']; ?></td>
                <td>TOTAL</td>
                           
                         <td style="background:#f00; color:#fff"><?php echo number_format($bum['SUM(exp)']); ?> XAF</td>               </tr>

  <?php } ?>

                                
                               </tbody>  
                                </table>

</page>

   <?php }?>
</body>
</html>





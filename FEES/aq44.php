<?php
include  '../includes/conn.php';


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
	  text-align:left;
	  border:1px solid#000;
  }
  tr,td,th{
	  border:1px solid#000;
	   border-collapse:collapse;
	  text-align:center;
	  
  }
  }
  body{
	  text-align:left;
	  line-height:1.3;
  }
</style>



</head>

<!---
<input type="button" value="Print Ticket"
onClick="window.print()"/>
------>
<body onload="window.print();">



<?php include 'header.php'; 
$dept=$_POST['level'];
$levels=$_POST['levels'];
$ay=$_POST['ay'];
?>
<div style="clear:both; margin-top:30px"></div>
           
       <h1 style="font-size:16px; background:#333; color:#fff">Record of <?php echo $dept; ?> Uncompleted for <?php echo $ay; ?> of Level <?php echo $levels; ?></h1>             
              <table  style="width:100%" style="line-height:1.5">
                <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>NAME</th>
        <th>CLASS</th>
        <th>LEVEL</th>  
         <th>AMT PAID</th>
         <th>AMT OWED</th> 
                                       </tr>
                                    </thead>                                          
                            <tbody>
								<?php
		
								$supp;
								
$d=$dbcon->query("select * from historic WHERE amountpaid='$dept' and year_id='".$ay."' and balance>0 and class='$levels'   order by time,student_name ") or die(mysqli_error($dbcon));
$i=1;
while($bu=$d->fetch_assoc()){
								?>
								<tr>
                            <td > <?php echo $i++; ?></td>
  <td style=" text-align:left;"><?php  echo $bu['student_name']; ?></td>
                                            <td><?php echo $dept; ?></td>
                                                  <td><?php  echo $bu['class']; ?></td>
                                            <td><?php  echo $bu['amount_paid']; ?></td>
                                                        <td><?php  echo $bu['balance']; ?></td>
                       
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                              
                           
                              
                        </table>
 

</page>

   <?php ?>
</body>
</html>





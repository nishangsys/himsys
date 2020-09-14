<?php

include '../includes/dbc.php';

if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}


	  $mm=$conn->query("SELECT * from students where roll='".$_GET['cust']."' order by roll asc limit 1 ") or die(mysqli_error($conn));
	while ($bsm=$mm->fetch_assoc()){
	echo	$mats=$bsm['matricule'];
	}
	  $ass=$conn->query("SELECT * from students where matricule='".$mats."' order by roll desc limit 1 ") or die(mysqli_error($conn));
	while ($bs=$ass->fetch_assoc()){
		$d=$conn->query("SELECT * FROM classes12 where class='".$bs['departmet']."' ") or die(mysqli_error($conn));
while($bu=$d->fetch_assoc()){
	 $fees=$bu['fees'];
	 //$regs=$bu[''];
	 $id=$bu['ids'];
	 $bank=$bu['extra'];
	 $regs=$bu['mattsy'];
	 $hl=$bu['conn'];
	 $ll=$bu['depf'];
	
}			 

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Receipt</title>
<link href="../store/style.css" type="text/css" rel="stylesheet" />

<style type="text/css" media="print">
  @page { size: portrait; }
  table{
	  border-collapse:collapse;
  }
  tr,td,th{
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



<?php include '../store/header.php'; 
$name=$_GET['name'];
?>
<div style="clear:both; margin-top:80px"></div>
           
       <h1 style="font-size:16px; background:#333; color:#fff"><?php echo $_GET['sentto']; ?> Supplies from Procurement on <?php echo $_GET['date']; ?></h1>             
              <table class="table table-bordered" style="width:100%">
                <thead>
                                        <tr>
                                            <th>#</th>
                                 <th>Course Code</th>
                                 <th>Ca</th>
                                  <th>Exams</th>
                                   <th>level</th>
                                    <th>Semester</th>
        <th>A.Y</th> 
         
                                       </tr>
                                    </thead>                                          
                            <tbody>
								<?php
								//$date=date('d-m-Y');
								$supp;
								
$d=$conn->query("SELECT * FROM resit where matricule='$mats' and c101+c102<50 GROUP BY fname order by sex") or die(mysqli_error($conn));
$i=1;
while($bu=$d->fetch_assoc()){
								?>
								<tr>
                            <td > <?php echo $i++; ?></td>
  <td><?php  echo $bu['fname']; ?></td>
                                            <td><?php  echo $bu['c101']; ?></td>
                                            <td><?php  echo $bu['c102']; ?></td>
                                            
                                            <td><?php  echo $bu['levels']; ?></td>
                                            
                                            <td><?php  echo $bu['sex']; ?></td>
                                            
                                            <td><?php  echo $bu['ayear']; ?></td>
                       
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                              
                           
                              
                        </table>
 

</page>

   <?php } } ?>
</body>
</html>





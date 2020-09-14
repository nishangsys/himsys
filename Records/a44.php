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
	$mats=$bsm['matricule'];
	$l=$bsm['levels'];
	$n=$bsm['fname'];
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
	   border:1px solid#000;
	   border-collapse:collapse;
  }
  tr,td,th{
	  border:1px solid#000;
	   border-collapse:collapse;
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
<div style="clear:both; margin-top:30px"></div>
    <table style="text-align:left">
    <tr><td>Name</td><td><?php echo $n; ?></td></tr>
        <tr><td>Matricule</td><td><?php echo $mats; ?></td></tr>

    </table>
              <table class="table table-bordered" style="width:100%">
                <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Course </th>
                                 <th>Course Code</th>
                                 <th>Ca</th>
                                  <th>Exams</th>
                                  <th>Total</th>
                                   <th>level</th>
                                    <th>Sign</th>
                                 </tr>
                                    </thead>                                          
                            <tbody>
								<?php
								//$date=date('d-m-Y');
								$supp;
								
$d=$conn->query("SELECT * FROM resit where matricule='$mats' and levels='$l' and c101+c102<47 GROUP BY fname order by sex") or die(mysqli_error($conn));
$i=1;
while($bu=$d->fetch_assoc()){
								?>
								<tr>
                                
                                  <td > <?php echo $i++; ?></td>
  <td><?php  $dd=$conn->query("SELECT * from subject where subject='".$bu['fname']."' group by subject") or die(mysqli_error($conn));
$i=1;
while($bud=$dd->fetch_assoc()){
echo	$subj=$bud['ayear'];
}; ?></td>
  <td><?php  echo $bu['fname']; ?></td>
                                            <td><?php  echo $bu['c101']; ?></td>
                                            <td><?php  echo $bu['c102']; ?></td>
                                            
                                            
                                            <td style="color:#f00"><?php  echo $bu['c102']+$bu['c101']; ?></td>
                                            
                                            <td><?php  echo $bu['levels']; ?></td>
                                            
                                            <td></td>
                                            
                                            <td></td>
                       
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                              
                           
                              
                        </table>
 



</page>

   <?php } } ?>
</body>
</html>





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
  }
  tr,td,th{
	  border:1px solid#000;
	   text-align:left;
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
$name=$_GET['name'];
$dept=$_POST['level'];
?>
<div style="clear:both; margin-top:30px"></div>
           
       <h1 style="font-size:16px; background:#333; color:#fff">Record of <?php echo $dept; ?> Registration for <?php echo $_GET['ayer']; ?></h1>             
              <table  style="width:100%" style="line-height:1.5">
                <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>NAME</th>
        <th>CLASS</th> 
         <th>AMT PAID</th> 
                                       </tr>
                                    </thead>                                          
                            <tbody>
								<?php
		
								$supp;
								
$d=$dbcon->query("select * from historic WHERE class='$dept' and year_id='".$_GET['ayer']."'   order by student_name ") or die(mysqli_error($dbcon));
$i=1;
while($bu=$d->fetch_assoc()){
								?>
								<tr>
                            <td > <?php echo $i++; ?></td>
  <td style=" text-align:left;"><?php  echo $bu['student_name']; ?></td>
                                            <td><?php echo $dept; ?></td>
                                            <td><?php $dm=$con->query("select * from daily WHERE staffname='".$bu ['student_name']."' and year='".$_GET['ayer']."' and discount>1   ") or die(mysqli_error($con));

while($bum=$dm->fetch_assoc()){
	echo $bum['discount'];
}; ?></td>
                       
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                              
                           
                              
                        </table>
 

</page>

   <?php ?>
</body>
</html>





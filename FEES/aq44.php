<?php
include  '../includes/dbc.php';


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
  $dept=$_POST['prog'];
  $levels=$_POST['levels'];
  $ayear=$_POST['ay'];
?>
<div style="clear:both; margin-top:30px"></div>

	<?php
	
			$result= $dbcon->query("select  * from fee_paymts,levels,special,students,years
			 where  fee_paymts.yearid='$ayear' AND levels.id=fee_paymts.level_id AND special.id=fee_paymts.program_id AND
			  fee_paymts.program_id='$dept'  AND fee_paymts.level_id='$levels' and fee_paymts.yearid=years.id
								 AND students.matricule=fee_paymts.matric AND fee_paymts.yearid=students.year_id AND balance>0 GROUP BY yearid  order by fee_paymts.matric " ) or die (mysqli_error($dbcon));
								$num=1;
								while ($row=$result->fetch_assoc()){	
								
								
								?>
           
       <h1 style="font-size:16px; background:#333; color:#fff">Peports of <?php echo $row['prog_name']; ?> Level <?php echo $row['levels']; ?>
        Uncompleted for 
	   <?php echo $row['year_name']; ?> Academic Year</h1>       
       <?php } ?>  
   <table cellpadding="0" cellspacing="0" style="width:100%" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Student's Name</th>
                                <th style="text-align:center;">Matricule</th>
                                     <th style="text-align:center;">Expected</th>
                                      <th style="text-align:center;">Scholarship</th>                                   
                               <th style="text-align:center;">Amount Paid</th>          
                              
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= $dbcon->query("select  * from fee_paymts,levels,special,students where  fee_paymts.yearid='$ayear' AND levels.id=fee_paymts.level_id AND special.id=fee_paymts.program_id AND fee_paymts.program_id='$dept'  AND fee_paymts.level_id='$levels' 
								 AND students.matricule=fee_paymts.matric AND fee_paymts.yearid=students.year_id AND balance>0  order by fee_paymts.id" ) or die (mysqli_error($dbcon));
								$num=1;
								while ($row=$result->fetch_assoc()){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['matric']; ?></td>
								
                                    <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['expected_amount']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['scholar']; ?></td>

                                    
  
                <td style="text-align:center; word-break:break-all; width:80px; color:#060; font-weight:b"> <?php echo $row ['fee_amt']; ?></td>                    		
                                        
           
								
								
                             
					</tr>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>
</page>

   <?php ?>
</body>
</html>





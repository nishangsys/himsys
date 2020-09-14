<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<?php
 $level=$_POST['level'];
 $dept=$_POST['dept'];
  $feeamt=$_POST['feeamt'];
?>
              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold"> <?php echo $dept; ?> LEVEL <?php echo $level; ?></span> SCHOOL FEES REPORTS FOR <span style="color:#ff0; font-weight:bold"><?PHP echo $ayear; ?> ACADEMIC YEAR
  
       | <a href="do_feedrive.php?dept=<?php echo $dept; ?>&level=<?php echo $level; ?>&year_id=<?PHP echo $ayear; ?>&feeamt=<?PHP echo $feeamt; ?>" target="_new"> <button type="submit" class="btn btn-warning" name="doLogin" class="btn btn-danger">Download a Copy</button></a>
      </span>
      </div>             
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
     
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

	
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Student's Name</th>
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                                     <th style="text-align:center;">Amount Paid</th>
                                   
                                     <th style="text-align:center;">Amount Owed</th>
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
								echo $feeamt;
							
								$result= mysql_query("select  * from historic where year_id='$ayear' and amountpaid='$dept' and class='$level' and balance>'$feeamt'  order by student_name" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row ['student_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['amountpaid']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['time']; ?></td>
                                    
                        <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['amount_paid']; ?></td>
								
                                             <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['balance']; ?></td>
			
          			
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>
                         
        
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                       
        
                            <tbody>
								<?php
							
								$result= mysql_query("select  SUM(expected_amount),SUM(amount_paid),SUM(balance) from historic where year_id='$ayear' and class='$dept' and time='$level'  and balance>='$feeamt' GROUP BY class" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr style="background:#6CC">
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> TOTAL</td>
								<td style="text-align:center; word-break:break-all; width:250px;"> </td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> </td>
                                    
                        <td style="text-align:center; word-break:break-all; width:130px; background:#060; font-weight:bold; color:#fff"> <?php echo number_format($row ['SUM(amount_paid)']); ?></td>
								
                                             <td style="text-align:center; word-break:break-all; width:130px; background:#F00; color:#fff; font-weight:bold"> <?php echo number_format($row ['SUM(balance)']); ?></td>
			
            <td style="text-align:center; word-break:break-all; width:80px;">					
        </td>     
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>                
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         </table>


          
        </div>
     
</body>
</html>

       
</div>
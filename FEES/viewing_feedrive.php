<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<?php
 $level=$_POST['levels'];
 $dept=$_POST['prog'];
  $feeamt=$_POST['feeamt'];
?>
              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
     SCHOOL FEES REPORTS FOR <span style="color:#ff0; font-weight:bold"><?PHP echo $ayear_name; ?> ACADEMIC YEAR
  
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
                               <th style="text-align:center;">Matricule</th>
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                                     <th style="text-align:center;">Expected</th>
                                      <th style="text-align:center;">Scholarship</th>
                                   
                               <th style="text-align:center;">Amount Paid</th>          
                                 <th style="text-align:center;">Amount Owed</th>
                                       
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= $dbcon->query("select  * from fee_paymts,levels,special,students where  fee_paymts.yearid='$ayear' AND                                levels.id=fee_paymts.level_id AND special.id=fee_paymts.program_id AND fee_paymts.program_id='$dept' AND fee_paymts.level_id='$level'
								 AND students.matricule=fee_paymts.matric AND fee_paymts.yearid=students.year_id AND balance>='$feeamt'  order by fee_paymts.id" ) or die (mysqli_error($dbcon));
								$num=1;
								while ($row=$result->fetch_assoc()){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['fname']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['matric']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['prog_name']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['levels']; ?></td>
                                    <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['expected_amount']; ?></td>
                                <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['scholar']; ?></td>

                                    
  
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#060; font-weight:b"> <?php echo $row ['fee_amt']; ?></td>                    		
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#f00; font-weight:b"> <?php echo $row ['balance']; ?></td>
			
          		
           
								
								
                             
					</tr>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>
                         
        
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                       
        
                            <tbody>
								<?php
							
								$result= mysql_query("select  SUM(fee_amt) AS total,SUM(balance) as balance FROM fee_paymts WHERE fee_paymts.program_id='$dept' AND fee_paymts.level_id='$level' AND balance>='$feeamt'   " ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr style="background:#6CC">
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> TOTAL</td>
								<td style="text-align:center; word-break:break-all; width:250px;"> </td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> </td>
                                      	<td style="text-align:center; word-break:break-all; width:80px;"> .</td>
                                    
                        <td style="text-align:center; word-break:break-all; width:130px; background:#060; font-weight:bold; color:#fff"> <?php echo number_format($row ['total']); ?></td>
								
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#fff; font-weight:bold"> </td>
			
            <td style="text-align:center; word-break:break-all; width:130px; background:#F00; color:#fff;">  <?php echo number_format($row ['balance']); ?> 		
            					
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
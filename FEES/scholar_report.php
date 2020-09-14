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
?>
              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold">  <?php echo $ayear_name; ?></span> Scholarship Reports 
  
      
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
                          <th style="text-align:center;">Level</th>
                       <th style="text-align:center;">Reason</th>
                                       
                                   
                                     <th style="text-align:center;">Scholarship Amount</th>
                                   
                                      <th style="text-align:center;">Agent</th>
                                        
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= $con->query("select  * from fee_paymts,levels,special,students where  fee_paymts.yearid='$ayear' AND levels.id=fee_paymts.level_id AND special.id=fee_paymts.program_id  AND students.matricule=fee_paymts.matric AND fee_paymts.yearid=students.year_id AND scholar>0  order by fee_paymts.id" ) or die (mysqli_error($con));
								$num=1;
				while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px; text-transform:capitalize"> <?php echo $name=$row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['levels']; ?></td>
                                
                                <td style="text-align:center; word-break:break-all; width:250px;"> scholarship </td>
                             
                      		
                                             <td style="text-align:center; word-break:break-all; width:100px; color:#f00; font-weight:b"> <?php echo number_format($row ['scholar']); ?></td>
                                             
                                              
                                                 
                                                  <td style="text-align:center; word-break:break-all; width:150px; color:#f00; font-weight:b"> <?php echo $row['paidto']; ?></td>
			
          		
           
								
								
                             
					</tr>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>
                         
        
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                       
        
                            <tbody>
								<?php
								$today=date('d-m-Y');
							
						$result= $con->query("select  SUM(scholar) as totals from fee_paymts where  yearid='$ayear'" ) or die (mysqli_error($con));
								$num=1;
				while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr style="background:#6CC">
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> TOTAL</td>
								<td style="text-align:center; word-break:break-all; width:250px;"> </td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> </td>
                                      	<td style="text-align:center; word-break:break-all; width:80px;"> .</td>
                                    
                        <td style="text-align:center; word-break:break-all; width:130px; background:#060; font-weight:bold; color:#fff"> <?php echo number_format($row ['totals']); ?> Xaf</td>
								
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#fff; font-weight:bold"></td>
			
           
								
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>                
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         </table>


          
        </div>
     
</body>
</html>

       
</div>
<?php
if(isset($_GET['delete'])){
echo $dele=$_GET['delete'];
$result= $con->query("DELETE FROM debtors where roll='$dele'" ) or die (mysqli_error($con));
echo "<script>alert('DELETE successfull')</script>";
}

?>
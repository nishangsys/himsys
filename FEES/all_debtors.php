<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<?php
$ayear;
$d=$conn->query("SELECT * FROM years,fee_paymts where  fee_paymts.yearid!='$ayear' AND fee_paymts.balance>0 AND fee_paymts.yearid=years.id   GROUP BY fee_paymts.yearid order by fee_paymts.yearid ") or die(mysqli_error($conn));
while($bn=$d->fetch_assoc()){
?>

<a href="?all_debtors&year=<?php echo $bn['yearid']; ?>&yname=<?php echo $bn['year_name']; ?>&gdgdgdh">
<div class="col-sm-3" style="border:2px solid#f00; color:#F03">
         
            <h4>  <?php echo $bn['year_name']; ?> Debtors</h4>
            
         
        </div>
        
 </a>
 <?php } 
 
if(isset($_GET['year'])){ 
 $ac=$_GET['year']
 ?>
 





              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold">  <?php echo $ayears=$_GET['yname']; ?></span> ACADEMIC YEAR DEBTORS REPORTS 
  
       | <a href="do_debtors.php?dept=<?php echo $dept; ?>&level=<?php echo $level; ?>&year_id=<?PHP echo $ac; ?>" target="_new"> <button type="submit" class="btn btn-warning" name="doLogin" class="btn btn-danger">Download a Copy</button></a>
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
                                     <th style="text-align:center;">Academic Year</th>
                                   
                                     <th style="text-align:center;">Amount Owed</th>
                                           <th style="text-align:center;">Action?</th>
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= $conn->query("select  * from students,levels,special,fee_paymts WHERE fee_paymts.balance>0 AND fee_paymts.matric=students.matricule AND fee_paymts.level_id=levels.id AND fee_paymts.program_id=special.id   and fee_paymts.yearid='$ac'  GROUP BY students.matricule order by students.fname " ) or die (mysqli_error($conn));
							 $result->num_rows;
								$num=1;
				while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row ['fname']; ?></td>
																<td style="text-align:center; word-break:break-all; width:150px;"> <?php echo $name=$row ['matricule']; ?></td>

								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['prog_name']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['levels']; ?></td>
                                    <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $ayears; ?></td>
                                    
                      		
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#f00; font-weight:b"> <?php echo $row ['balance']; ?></td>
			
          		
            <td style="text-align:center; word-break:break-all; width:220px;">					
              
              
              <a href=javascript:popcontact('../Fees/receive_debts.php?cust=<?php echo $row['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-primary btn-xs" >Receive Debts </button>
              	
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>
                         
        
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                       
        
                            <tbody>
								<?php
								echo $ac;
							
						$result= $conn->query("select  SUM(balance) from fee_paymts WHERE balance>0 and yearid='".$ac."'  " ) or die (mysqli_error($conn));
								$num=1;
				while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr style="background:#6CC">
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> TOTAL DEBTS IN <?php echo $ayears; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> </td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> </td>
                                      	<td style="text-align:center; word-break:break-all; width:80px;"> .</td>
                                    
                        <td style="text-align:center; word-break:break-all; width:130px; background:#060; font-weight:bold; color:#fff"> <?php echo number_format($row ['SUM(balance))']); ?></td>
								
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#fff; font-weight:bold"></td>
			
            <td style="text-align:center; word-break:break-all; width:130px; background:#F00; color:#fff;">
             <?php echo number_format($row ['SUM(balance)']); ?>					
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
<?php
}
if(isset($_GET['delete'])){
echo $dele=$_GET['id'];
$result= $con->query("DELETE FROM debtors where roll='$dele'" ) or die (mysqli_error($con));
echo "<script>alert('DELETE successfull')</script>";

echo '<meta http-equiv="Refresh" content="0; url=first.php?all_debtors">';	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<?php
$ayear;
$d=$conn->query("SELECT * FROM historic where ayear>2 GROUP BY ayear order by roll ") or die(mysqli_error($conn));
while($bn=$d->fetch_assoc()){
?>

<a href="?transfer&year=<?php echo $bn['ayear']; ?>">
<div class="col-sm-3" style="border:2px solid#f00; color:#F03">
         
            <h4>  <?php echo $bn['ayear']; ?> Debtors</h4>
            
         
        </div>
        
 </a>
 <?php } 
 
if(isset($_GET['year'])){ 
 $ac=$_GET['year']
 ?>
 





              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold">  <?php echo $ac; ?></span> ACADEMIC YEAR DEBTORS REPORTS 
  
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
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                                     <th style="text-align:center;">Academic Year</th>
                                   
                                     <th style="text-align:center;">Amount Owed</th>
                                           <th style="text-align:center;">Action?</th>
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= $conn->query("select  * from historic WHERE balance>0  and ayear='$ac' order by roll DESC" ) or die (mysqli_error($conn));
								$num=1;
				while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row ['student_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['amountpaid']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['class']; ?></td>
                                    <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['ayear']; ?></td>
                                    
                      		
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#f00; font-weight:b"> <?php echo $row ['balance']; ?></td>
			
          		
            <td style="text-align:center; word-break:break-all; width:220px;">					
                   
       <a href="?update_from=<?php echo $name; ?>&id=<?php echo  $row ['id']; ; ?>&year_id=<?php echo $ayear; ?>">      <button type="button" class="btn btn-primary btn-sm">Pay with <?php echo $ayear;?> Fees</button> </a> | <a href="?all_debtors&delete=<?php echo $row ['id'];; ?>&id=<?php echo  $row ['id']; ; ?>&year_id=<?php echo $ayear; ?>">   </td>     
								
								
                             
					</tr>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>
                         
        
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                       
        
                            <tbody>
								<?php
							
						$result= $conn->query("select  SUM(balance) from historic WHERE balance>0 and year_id='$ac' " ) or die (mysqli_error($conn));
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
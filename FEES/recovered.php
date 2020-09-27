<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>

<body>
<?php
$ayear;
$d=$con->query("SELECT * FROM years,debts_recovered where debts_recovered.debt_year=years.id GROUP BY debts_recovered.debt_year order by debts_recovered.debt_year ") or die(mysqli_error($con));
while($bn=$d->fetch_assoc()){
?>

<a href="?recovered&this=<?php echo $bn['cur_year']; ?>&that=<?php echo $bn['debt_year']; ?>&gsgdgdndn">
<div class="col-sm-5" style="border:2px solid#f00; color:#F03">
         
            <h4>  <?php echo $bn['year_name']; ?> Debts Recovered in <?php $ds=$con->query("SELECT * FROM years WHERE id='".$bn['cur_year']."' ") or die(mysqli_error($con));
while($bns=$ds->fetch_assoc()){ echo $bns['year_name']; }?></h4>
            
         
        </div>
        
 </a>
 <?php } 
 
if(isset($_GET['this'])){ 
 $ac=$_GET['this'];
 $ds=$con->query("SELECT * FROM years WHERE id='".$_GET['this']."' ") or die(mysqli_error($con));
while($bns=$ds->fetch_assoc()){  $cur_year=$bns['year_name']; }


 $ds=$con->query("SELECT * FROM years WHERE id='".$_GET['that']."' ") or die(mysqli_error($con));
while($bns=$ds->fetch_assoc()){  $prev_year=$bns['year_name']; }

?>




              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold">  <?php echo $prev_year; ?></span> ACADEMIC YEAR DEBTS RECOVERED IN <span style="color:#ff0; font-weight:bold"><?php echo $cur_year; ?></span>
  
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
                                    <th style="text-align:center;">Year Recovered</th>
                                     <th style="text-align:center;">Ac. Year Owed</th>
                                   
                                     <th style="text-align:center;">Amount Recovered</th>
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= $con->query("select  * from years,special,levels,students,debts_recovered,users WHERE cur_year='".$_GET['this']."' and special.id=students.dept_id AND students.level_id=levels.id and users.id=debts_recovered.paidto and students.matricule=debts_recovered.matric   and debt_year='".$_GET['that']."' GROUP BY debts_recovered.id order by debts_recovered.id DESC" ) or die (mysqli_error($con));
								$num=1;
				while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $name=$row ['fname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['prog_name']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['levels']; ?></td>
                                    <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['amt_paid']; ?></td>
                                    
                      		
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#f00; font-weight:b"> <?php echo $row ['full_name']; ?></td>
			
          	
								
								
                             
					</tr>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>
                         
        
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                       
        
                            <tbody>
								<?php
							
						$result= $con->query("select  SUM(rec) from daily WHERE year='$ac'  and thatyear='$pa' " ) or die (mysqli_error($con));
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
                                    
                        <td style="text-align:center; word-break:break-all; width:130px; background:#060; font-weight:bold; color:#fff"> <?php echo number_format($row ['SUM(rec))']); ?></td>
								
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#fff; font-weight:bold"></td>
			
            <td style="text-align:center; word-break:break-all; width:130px; background:#F00; color:#fff;">
             <?php echo number_format($row ['SUM(rec)']); ?>					
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
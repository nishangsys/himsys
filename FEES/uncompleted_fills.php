<style>
body{
	padding:0px 20px;
}
</style>

 <form class="form-horizontal" action="aq44.php" method="post" target="new" name="form">
  
  <table>
 <tr><td>
  Department:</td><td>
  <select class="form-control" name="level" style="width:300px" required>
<?php
$an=$con->query("SELECT * FROM settings GROUP BY prog") or die(mysqli_error($con));
while($rows=$an->fetch_assoc()){
?>
    <option value="<?php echo $rows['prog']; ?>"><?php echo $rows['prog']; ?></option>
    <?php } ?>
    
  </select>
</td><td>Year:</td><td>
 <select class="form-control" name="ay" style="width:200px" required>
<?php
$an=$dbcon->query("SELECT * FROM historic where amount_paid>0  GROUP BY ayear order by ayear") or die(mysqli_error($dbcon));
while($rows=$an->fetch_assoc()){
?>
    <option value="<?php echo $rows['ayear']; ?>"><?php echo $rows['ayear']; ?></option>
    <?php } ?>
    
  </select>
</td><td> 
     Level:</td><td>
  <select class="form-control" name="levels" style="width:100px" required>
  <option></option>
<?php
$an=$dbcon->query("SELECT * FROM historic where amount_paid>0  GROUP BY class order by class") or die(mysqli_error($dbcon));
while($rows=$an->fetch_assoc()){
?>
    <option value="<?php echo $rows['class']; ?>"><?php echo $rows['class']; ?></option>
    <?php } ?>
    
  </select></td><td>

    
        <button type="submit"  name="doLogin" class="btn btn-danger">Submit</button>
     </td></tr>

  </form>
<?php
 $level=$_POST['level'];
 $dept=$_POST['dept'];
 $ay=$_POST['ay'];
?>
              <div class="row">
                       
         <div class="col-sm-12" style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold"> </span> 	UNCOMPLETED SCHOOL  FEES REPORTS FOR <span style="color:#ff0; font-weight:bold"><?PHP echo $ay; ?> ACADEMIC YEAR
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
                                   
                               <th style="text-align:center;">Amount Paid</th>            <th style="text-align:center;">Amount Owed</th>
                                       
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
								$result= mysql_query("select  * from historic WHERE balance>0 and year_id='$ayear'  order by student_name" ) or die (mysql_error());
								$num=1;
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['student_name']; ?></td>
								<td style="text-align:center; word-break:break-all; width:250px;"> <?php echo $row ['amountpaid']; ?></td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['time']; ?></td>
                                    <td style="text-align:center; word-break:break-all; width:80px;"> <?php echo $row ['ayear']; ?></td>
                                    
  
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#060; font-weight:b"> <?php echo $row ['amount_paid']; ?></td>                    		
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
							
								$result= mysql_query("select  SUM(amount_paid),SUM(balance) FROM historic WHERE balance>0 and year_id='$ayear' " ) or die (mysql_error());
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
                                    
                        <td style="text-align:center; word-break:break-all; width:130px; background:#060; font-weight:bold; color:#fff"> <?php echo number_format($row ['SUM(amount_paid)']); ?></td>
								
                                             <td style="text-align:center; word-break:break-all; width:80px; color:#fff; font-weight:bold">
            <td style="text-align:center; word-break:break-all; width:130px; background:#F00; color:#fff;">
          <?php echo number_format($row ['SUM(balance)']); ?> </td>
			  					
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
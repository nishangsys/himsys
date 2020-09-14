    
        
    
     <form class="form-horizontal" action="" method="post"  name="form">
   
    <table style="margin-left:120px; width:100%">
    <tr><td>Day Paid</td><td> 
        <select class="form-control" id="sel1" name="day" onBlur="doCalc(this.form)" required>
         <option value="<?php echo date('d'); ?>"  onBlur="doCalc(this.form)"><?php echo date('d'); ?></option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=1;$day<=31;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select>
      </td><td>Month Paid</td><td><select class="form-control" id="sel1" name="month" onBlur="doCalc(this.form)" required>
        <option value="<?php echo date('m'); ?>"  onBlur="doCalc(this.form)"><?php echo date('F'); ?></option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
      <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				
  </select></td><td>Year Paid</td><td><select class="form-control" id="sel1" name="year" onBlur="doCalc(this.form)" required>
    <option value="<?php echo date('Y'); ?>"  onBlur="doCalc(this.form)"><?php echo date('Y'); ?></option>
        <option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
    <?php 
					for($day=2016;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
  </select></td><td>

    
        <button type="submit"  name="doLogin" class="btn btn-danger">Search</button>
        </td>
        </tr>
        </table>
        </form>
  
  
<?php
if(isset($_POST['doLogin'])){
									$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
 
	$today=$day."-".$month."-".$year;
	
											$result= $con->query("select  * from daily where paidtou='$today' order  by  id desc  " ) or die (mysqli_error($con));
								
								$num=1;
								}
								else {
									$today=date('d-m-Y');
										$result= $con->query("select  * from daily where paidtou='$today' order  by  id desc  " ) or die (mysqli_error($con));
								
								}
?>
        
    
                       
         <div  style="background:#000; color:#FFF; text-align:center; padding:10PX 0PX">
    <span style="color:#ff0; font-weight:bold">  <?php echo $today; ?></span> FINANCIAL REPORTS 
  
      
      </span>
      </div>             


	
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Student's Name</th>
                          <th style="text-align:center;">Sector</th>
                       <th style="text-align:center;">Method</th>
                                       
                                   
                                     <th style="text-align:center;"> Amount</th>
                                      <th style="text-align:center;">Reason</th>
                                     
                                     <th style="text-align:center;">Matricle</th>
                                      <th style="text-align:center;">Agent</th>
                                        
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
							
							
				while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr>
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px; text-transform:capitalize"> <?php echo $name=$row ['staffname']; ?></td>
								<td style="text-align:center; word-break:break-all; width:190px;"> <?php echo $row ['purpose']; ?></td>
                                
                                <td style="text-align:center; word-break:break-all; width:90px;"> <?php echo $row ['company']; ?></td>
                             
                      		
                                             <td style="text-align:center; word-break:break-all; width:100px; color:#f00; font-weight:b"> <?php echo number_format($row ['rec']); ?></td>
                                                     <td style="text-align:center; word-break:break-all; width:100px; color:#f00; font-weight:b"> <?php echo $row ['reason']; ?></td>
                                           
                                                 <td style="text-align:center; word-break:break-all; width:140px; color:#f00; font-weight:b"> <?php echo ($row['cust_id']); ?></td>
                                                 
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
								if(isset($_POST['doLogin'])){
									$month=$_POST['month'];;
$year=$_POST['year'];;
$day=$_POST['day'];;
 
	$today=$day."-".$month."-".$year;
	
											$result= $con->query("select  SUM(rec) from daily where paidtou='$today' order  by  id desc  " ) or die (mysqli_error($con));
								
								$num=1;
								}
								else {
									$today=date('d-m-Y');
										$result= $con->query("select  SUM(rec) from daily where paidtou='$today' order  by  id desc  " ) or die (mysqli_error($con));
								
								}
				while ($row= $result->fetch_assoc() ){
								$id=$row['id'];
								?>
								<tr style="background:#6CC">
                            <td style="text-align:center; word-break:break-all; width:20px;"> <?php echo $num++; ?></td>

						
								<td style="text-align:center; word-break:break-all; width:300px;"> TOTAL</td>
								<td style="text-align:center; word-break:break-all; width:250px;"> </td>
                                	<td style="text-align:center; word-break:break-all; width:80px;"> </td>
                                      	<td style="text-align:center; word-break:break-all; width:80px;"> .</td>
                                    
                        <td style="text-align:center; word-break:break-all; width:130px; background:#060; font-weight:bold; color:#fff"> <?php echo number_format($row ['SUM(rec)']); ?></td>
								
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
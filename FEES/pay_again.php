
<style>
.frmSearch {border: 1px solid #a8d4b1;background-color: #c6f7d0;margin: 2px 0px;padding:40px;border-radius:4px;}
#country-list{float:left;list-style:none;margin-top:-3px;padding:0;width:400px;position: absolute;}
#country-list li{padding: 10px; background: #036; border-bottom: #bbb9b9 1px solid ; color:#fff}
#country-list li:hover{background:#ece3d2;cursor: pointer;}
#search-box{padding: 10px;border: #a8d4b1 1px solid;border-radius:4px;}
</style>
<script src="../js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#search-box").keyup(function(){
		$.ajax({
		type: "POST",
		url: "../Fees/searchs.php?yearid=<?php echo $ayear; ?>",
		data:'keyword='+$(this).val(),
		beforeSend: function(){
			$("#search-box").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
		success: function(data){
			$("#suggesstion-box").show();
			$("#suggesstion-box").html(data);
			$("#search-box").css("background","#FFF");
		}
		});
	});
});

function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>



  <form  action=""  method="post" style="background:#09C; padding:10px 10px; border:2px solid#000" >	
	<fieldset>
 <div class="form-row">
    <div class="form-group col-md-6">
     
	<input type="text" id="search-box" placeholder="Search Name or Matricule" name="user_name" autocomplete="off" class="form-control"  />
	<div id="suggesstion-box"></div>
	
    </div>
    
    
    <div class="form-group col-md-3">
      <input type="submit" class="next btn btn-danger" value="Search" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>
  <?php
  if(isset($_POST['ok'])){
	  $matric=$_POST['user_name'];
	  		$result= $dbcon->query("select  * from fee_paymts  where matricule='$matric' and yearid='$ayear' and balance>0 order by id" ) or die (mysqli_error($dbcon));
  }
  else {
	  		$result= $dbcon->query("select  * from fee_paymts  WHERE balance>0 and yearid='$ayear'  order by id" ) or die (mysqli_error($dbcon));
  }
  ?>
	
	
  
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <thead>
                                <tr>
                             <th style="text-align:center;">S/N</th>

                              <th style="text-align:center;">Student's Name</th>
                          <th style="text-align:center;">Program</th>
                                    <th style="text-align:center;">Level</th>
                                     <th style="text-align:center;">Academic Year</th>
                                   
                                     <th style="text-align:center;">Amount Owed</th>
                                         <th style="text-align:center;">Registration</th>
                                           <th style="text-align:center;">Action?</th>
                                   
                 
                                </tr>
                            </thead>
                            <tbody>
								<?php
							
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
                                                                <td style="text-align:center; word-break:break-all; width:80px; color:#00F; font-weight:b"> <?php /*$d=$con->query("select * from daily WHERE staffname='".$row ['student_name']."' and year='".$row ['ayear']."' limit 1   ") or die(mysqli_error($con));
$i=1;
while($bu=$d->fetch_assoc()){
	echo $bu['discount'];
};*/
echo $row ['olddebt']; 
 ?></td>
			
			
          		
            <td style="text-align:center; word-break:break-all; width:120px;">					
                   
       <a href="?new_paymt=<?php echo $name; ?>&id=<?php echo  $row ['id']; ; ?>&yearid=<?php echo $ayear; ?>">      <button type="button" class="btn btn-primary btn-sm">New Payment</button> </a> </td>     
								
								
                             
					</tr>		
								
                             
					</tr>		
                           
								
								<?php } ?>
                              <tbody>
                        		  
                         </tbody>
                         </table>
                         
        
   <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                       
        
                            <tbody>
								<?php
							
								$result= mysql_query("select  SUM(balance) from fee_paymts  WHERE balance>0 and yearid='$ayear'  " ) or die (mysql_error());
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
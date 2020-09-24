
								<div class="row">
									<div class="col-xs-12">
										
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
<div class="container">



	<div class="row justify-content-center gst20">
<form id="hdTutoForm" method="POST" action="">



		<div class="col-sm-4">

			
				<div class="input-gpfrm input-gpfrm-lg">
 <label for="inputEmail4">Starts</label>
				 <input type="text" id="querystr" name="starts" class="form-control" value="<?php echo $name;  ?>" autocomplete="off">
                    
                    	

		</div>

                </div>
                
                <div class="col-sm-4">
                 <label for="inputEmail4">Ends</label>
                 <input type="text" id="querystr" name="ends" class="form-control" value="<?php echo $name;  ?>" autocomplete="off">
                </div>

			 
	</div>
    
    
    
    
    <div class="form-group col-md-3"><br>
      <input type="submit" class="next btn btn-primary" value="SAVE" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
     
     
											                                            <?php
																						
							
							if(isset($_POST['ok'])){
$dept=mysqli_real_escape_string($dbcon,$_POST['starts']);
$ends=mysqli_real_escape_string($dbcon,$_POST['ends']);
$depts=mysqli_real_escape_string($dbcon,$_POST['depts']);
$dss=$dbcon->query("SELECT * FROM time_table where starts='$dept' and ends='$ends'   ") or die(mysqli_error($dbcon));
$counts=$dss->num_rows;
if($counts>0){
	
echo "<script>alert('ERROR. That time has been chosen')</script>";

echo '<meta http-equiv="Refresh" content="0; url=?time_table ">';	
	
		
}
else {
	
$dS=$dbcon->query("INSERT INTO time_table SET starts='$dept',ends='$ends'   ") or die(mysqli_error($dbcon));

echo "<script>alert('Success. Time has been Saved')</script>";

echo '<meta http-equiv="Refresh" content="0; url=?time_table ">';	
	
							}
							}
												
           $d=$dbcon->query("SELECT * FROM  time_table   order by id DESC ") or die(mysqli_error($dbcon));
	     
	$i=1;	
		
?>
											<table id="dynamic-table" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>Starts</th>
														
	<th>Ends</th>		
    										
																
	<th>Action</th>
																											
														
													</tr>
												</thead>
                                                
                                                
                                                
                                                <tbody>
                                                <?php
												  while($bu=$d->fetch_assoc()){

						 
						 ?>
   												<tr>
														<td class="center">
<?php echo $i++; ?>
														</td>

								
														</td>
									<td><?php  echo $bu['starts']; ?> Hrs</td>
                                    
                                    <td><?php  echo $bu['ends']; ?> Hrs</td>


													<td>
														
                                                            
                                                   
                                                            	<a href="index.php?time_table&del=<?php echo $bu['id']; ?>&link=Add Subject "><button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you wish to Delete this item')">
																<i class="ace-icon fa fa-check bigger-120"></i> Delete 
															</button></a>
                                                            
                                                         

														</td>
													</tr>


		<?php   }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
                                
                                

                                                 <?php
	
 
 if(isset($_GET['del'])){
	 
	 $id=$_GET['del'];
	 
	 $checks = $dbcon->query("DELETE FROM time_table WHERE  id='$id' ");
	 echo "<script>alert('Action Successfull')</script>";
	  
	  
echo '<meta http-equiv="Refresh" content="0; url= ?time_table">';
	 
 }
 ?>

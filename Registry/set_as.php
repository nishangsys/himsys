
      <?php
	  $year=date('Y');
	  
	   $d=$dbcon->query("SELECT * from sectors WHERE id='".$_GET['set_as']."' ") or die(mysqli_error($dbcon));
while($bu=$d->fetch_assoc()){
	$ids=$bu['num']; 
	$ss=$bu['name'];
	?>
<div class="col-sm-12 well" style="margin:10px; font-family:'Arial Black', Gadget, sans-serif; font-size:24px; ">
     
      Setting  <?php echo $name=$bu['name'];  ?> Programs
      
      </div>
   
        <?php } ?>
     
     
     
     <style type="text/css">

		.gst20{

			margin-top:20px;

		}

		#hdTuto_search{

			display: none;

		}

		.list-gpfrm-list a{

			text-decoration: none !important;

		}

		.list-gpfrm li{

			cursor: pointer;
			padding: 4px 0px;
			border-bottom:1px solid#000;

		}

		.list-gpfrm{

			list-style-type: none;

    		background: #d4e8d7;

		}

		.list-gpfrm li:hover{

			color: white;

			background-color: #3d3d3d;

		}

	</style>
    
    
    
    
    
            
<script src="js/jquery_search.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

	//Autocomplete search using PHP, MySQLi, Ajax and jQuery

		//generate suggestion on keyup

		$('#querystr').keyup(function(e){

			e.preventDefault();

			var form = $('#hdTutoForm').serialize();

			$.ajax({

				type: 'POST',

				url: 'do_search.php',

				data: form,

				dataType: 'json',

				success: function(response){

					if(response.error){

						$('#hdTuto_search').hide();

					}

					else{

						$('#hdTuto_search').show().html(response.data);

					}

				}

			});

		});



		//fill the input

		$(document).on('click', '.list-gpfrm-list', function(e){

			e.preventDefault();

			$('#hdTuto_search').hide();

			var fullname = $(this).data('fullname');

			$('#querystr').val(fullname);

		});

	});

</script>
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

		<div class="col-sm-6">

			
				<div class="input-gpfrm input-gpfrm-lg">
  <label for="inputEmail4">Chose Program: </label>
				  	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Name" aria-describedby="basic-addon2" autocomplete="off">
                    
                    	<input type="hidden" id="querystr" name="names" class="form-control" value="<?php echo $name;  ?>">
                    


				</div>

			

			<ul class="list-gpfrm" id="hdTuto_search"></ul>

		</div>
        
         
                

			

	</div>
    
    
    
    
    <div class="form-group col-md-3"><br>
      <input type="submit" class="next btn btn-primary" value="Set as <?php echo $name;  ?> Program" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
     
     
											                                            <?php
																						
							
							if(isset($_POST['ok'])){
$dept=mysqli_real_escape_string($dbcon,$_POST['querystr']);
$sectors=mysqli_real_escape_string($dbcon,$_POST['names']);
$dname=mysqli_real_escape_string($dbcon,$_POST['dname']);

 $sql = "SELECT * FROM special WHERE prog_name='$dept' ";

			$sqlquery = $conn->query($sql);
			while($ldata = $sqlquery->fetch_assoc()){
			$dept_id=$ldata['id'];
			}
$d=$dbcon->query("SELECT * FROM segments where dept_id='$dept_id'  ") or die(mysqli_error($dbcon));
$check=$d->num_rows;
if($check>0){
	echo "<script>alert('Sorry $dept has already been set as another Program')</script>";
}
else {
	
	
$d=$dbcon->query("INSERT INTO segments SET dept_id='$dept_id',sector='$ids',s_name='$sectors' ,dname='$dname'  ") or die(mysqli_error($dbcon));

echo "<script>alert('Success. $dept has been added to $name Programs')</script>";

echo '<meta http-equiv="Refresh" content="0; url=?set_as='.$_GET['set_as'].'">';	
	
}
							}
								
												
           $d=$dbcon->query("SELECT * FROM  special,segments WHERE segments.sector='$ids'  AND segments.dept_id=special.id order by segments.id DESC ") or die(mysqli_error($dbcon));
	     
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
														<th>Program</th>
							<th>Grading Scale</th>														
	<th>Sector </th>													
	<th>Action</th>
																											
														<th></th>
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
									<td><?php  echo $bu['prog_name']; ?></td>
                                    <td><?php  echo $ss; ?></td>
                                    
                                    
                                    <td><?php  echo $bu['s_name']; ?></td>


														<td>
														
                                                            
                                                   
                                                            	<a href="index.php?set_as=<?php echo $_GET['set_as']; ?>&del=<?php echo $bu['id']; ?>&link=Add Subject "><button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you wish to Delete this item')">
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
	 
	 $checks = $dbcon->query("DELETE FROM segments WHERE  id='$id' ");
	 echo "<script>alert('Action Successfull')</script>";
	  
	  
echo '<meta http-equiv="Refresh" content="0; url= ?set_as='.$_GET['set_as'].' ">';
	 
 }
 ?>

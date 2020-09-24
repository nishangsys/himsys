
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



		<div class="col-sm-4">

			
				<div class="input-gpfrm input-gpfrm-lg">
 <label for="inputEmail4">Program</label>
				  	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Program" aria-describedby="basic-addon2" autocomplete="off">
                    
                    	
			<ul class="list-gpfrm" id="hdTuto_search"></ul>

		</div>

                </div>
                
                <div class="col-sm-4">
                 <label for="inputEmail4">Degree Conferred</label>
                <input type="text" id="querystr" name="degree" class="form-control" value="<?php echo $name;  ?>" autocomplete="off">
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
$dept=mysqli_real_escape_string($dbcon,$_POST['querystr']);
$degree=mysqli_real_escape_string($dbcon,$_POST['degree']);
$depts=mysqli_real_escape_string($dbcon,$_POST['depts']);

	      $sql = "SELECT * FROM special WHERE prog_name='$dept' ";

			$sqlquery = $conn->query($sql);
			while($ldata = $sqlquery->fetch_assoc()){
			$dept_id=$ldata['id'];
			}
			
$d=$dbcon->query("DELETE FROM degrees where dept_id='$dept_id'    ") or die(mysqli_error($dbcon));


	
$dS=$dbcon->query("INSERT INTO degrees SET dept_id='$dept_id',degree='$degree'    ") or die(mysqli_error($dbcon));

echo "<script>alert('Success. $dept has been added to $name Programs')</script>";

echo '<meta http-equiv="Refresh" content="0; url=?diploma ">';	
	
							}
								
												
           $d=$dbcon->query("SELECT * FROM  special,degrees WHERE special.id=degrees.dept_id   order by special.prog_name DESC ") or die(mysqli_error($dbcon));
	     
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
														
	<th>Degree Conferred</th>		
    									
																
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
									<td><?php  echo $bu['prog_name']; ?></td>
                                    
                                    <td><?php  echo $bu['degree']; ?></td>


	
													<td>
														
                                                            
                                                   
                                                            	<a href="index.php?diploma&del=<?php echo $bu['id']; ?>&link=Add Subject "><button class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you wish to Delete this item')">
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
	 
	 $checks = $dbcon->query("DELETE FROM degrees WHERE  id='$id' ");
	 echo "<script>alert('Action Successfull')</script>";
	  
	  
echo '<meta http-equiv="Refresh" content="0; url= ?diploma">';
	 
 }
 ?>

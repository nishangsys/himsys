      
            
<div class="alert alert-info">
  <strong> <span style="color:#f00">UPLOADING MANAGEMENT SCIENCE MARKS THIS <?php echo $ayear=$_GET['did']; ?></span> </strong>
</div> 
     
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
			padding: 10px 10px;
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
    
    
    
    
    
            
<script src="../Records/js/jquery_search.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

	//Autocomplete search using PHP, MySQLi, Ajax and jQuery

		//generate suggestion on keyup

		$('#querystr').keyup(function(e){

			e.preventDefault();

			var form = $('#hdTutoForm').serialize();

			$.ajax({

				type: 'POST',

				url: 'search_subjects.php',

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

				  	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Name" aria-describedby="basic-addon2" autocomplete="off">
                    
                    	<input type="hidden" id="querystr" name="names" class="form-control" value="<?php echo $name;  ?>">
                    


				</div>

			

			<ul class="list-gpfrm" id="hdTuto_search"></ul>

		</div>

	</div>
    
    
    
    
    <div class="form-group col-md-3"><br>
      <input type="submit" class="next btn btn-primary" value="Search" name="go" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
    
    									                                            <?php
																						
							
							
						if(isset($_POST['go'])){	
					 $name=mysqli_real_escape_string($dbcon,$_POST['querystr']);
					$sectors=mysqli_real_escape_string($dbcon,$_POST['names']);
					
					  
	
           $d=$dbcon->query("SELECT * FROM  options,course WHERE course.programe_id=options.id AND course.course_code='$name' GROUP BY course.course_code order by course.course_code  ") or die(mysqli_error($dbcon));
	     
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
                                                         <th>Course Title</th>
                                                           <th>Code</th>
                                                
                                                        <th>Status</th>
                                                           <th>CV</th>
                                                             
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

								                <td>ACROSS ALL PROGRAMS</td>
                                                 <td><?php echo $bu['title']; ?></td>
                                                <td><?php echo $bu['course_code']; ?></td>
                                               <td><?php echo $bu['status']; ?></td>
                                               <td><?php echo $bu['credit_value']; ?></td>   

        <td>
        
        <a href="?uploading_ca&did=<?php echo $bu['programe_id']; ?>&id=<?php echo $bu['id']; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $bu['level_id']; ?> &sch_id=<?php echo $_GET['sch_id']; ?>"><button class="btn btn-success"   >Upload <?php echo $bu['course_code']; ?> Ca Mark</button>
        
        
        
        
        </td>
													</tr>


		<?php   }?>
												</tbody>
											</table>
      <?php } ?>
    </tbody>
  </table>
  </div> </div>
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

		<div class="col-sm-6">

			<form id="hdTutoForm" method="POST" action="">

				<div class="input-gpfrm input-gpfrm-lg">

				  	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Name" aria-describedby="basic-addon2" autocomplete="off">

				</div>

			

			<ul class="list-gpfrm" id="hdTuto_search"></ul>

		</div>

	</div>
    
    
    
    
    <div class="form-group col-md-3"><br>
      <input type="submit" class="next btn btn-primary" value="Search" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
     
     
											                                            <?php
																						
							
							if(isset($_POST['ok'])){
						   $user_name=mysqli_real_escape_string($con,$_POST['querystr']);
												
 
		  $name=$bu['full_name'];					
           $d=$con->query("SELECT * FROM teaching where name='$user_name' and  ayear='$ayear'  GROUP by name ") or die(mysqli_error($con));
	       while($bu=$d->fetch_assoc()){
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
														<th>Full Name</th>
														
	<th>Action</th>
																											
														<th></th>
													</tr>
												</thead>
                                                
                                                
                                                
                                                <tbody>
   												<tr>
														<td class="center">
															<label class="pos-rel">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

								
														</td>
									<td><?php  echo $bu['name']; ?></td>

														<td>
															<a href="index.php?record_hr&xxc=<?php echo $bu['id']; ?>&link=Add Subject "><button class="btn btn-xs btn-primary">
																<i class="ace-icon fa fa-check bigger-120"></i> Registry Hrs
															</button></a>
                                                            
                                                            |
                                                            	<a href="index.php?add_subj&xxc=<?php echo $bu['id']; ?>&link=Add Subject "><button class="btn btn-xs btn-success">
																<i class="ace-icon fa fa-check bigger-120"></i> Add Subject(s)
															</button></a>
                                                            
                                                               |
                                                            	<a href="index.php?remove_subj&xxc=<?php echo $bu['id']; ?>&link=Add Subject "><button class="btn btn-xs btn-danger">
																<i class="ace-icon fa fa-check bigger-120"></i> Remove Subject(s)
															</button></a>
                                                            
                                                         

														</td>
													</tr>


		<?php }  }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
                                
                                


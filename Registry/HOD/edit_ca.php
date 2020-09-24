<?php
						$d=$conn->query("SELECT * FROM options where id='".$_GET['did']."'  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
						$dept_name=$bu['name'];
					}
?>



<form class="form-inline" role="form" method="post" action="">
    <input type="hidden" name="pid" value="<?php echo $_GET['did']; ?>" readonly="readonly" style="color:#f00" class="form-control" id="email">

  <div class="form-group">
    <label for="email">Program :</label>
    <input type="text" name="prog" value="<?php echo $dept_name; ?>" readonly="readonly" style="color:#f00" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Level :</label>
    <select class="form-control" id="sel1" name="level" required>
    <option value > </option>
                       <?php
						$d=$conn->query("SELECT * FROM level  ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
					
                       ?>
                        <option value="<?php echo $bu['id']; ?>"><?php echo $bu['name']; ?></option>
                     <?php } ?>
  </select>
  </div>
   <div class="form-group">
    <label for="pwd">Academic Year :</label>
    <select class="form-control" id="sel1" name="sem" required>
        <option value > </option>
                       <?php
						$d=$conn->query("SELECT * FROM my_records where ayear>0 group by ayear  order by roll desc ") or die(mysqli_error($conn));
							
					while($bu=$d->fetch_assoc()){
					
                       ?>
                        <option value="<?php echo $bu['ayear']; ?>"><?php echo $bu['ayear']; ?></option>
                     <?php } ?>

  </select>
  </div>
  <button type="submit" class="btn btn-primary" name="ok">Submit</button>
</form>
        

  <br /><hr />
      <?php
	 
	
	  if(isset($_POST['ok'])){
		$sem=$_POST['sem'];
		   $pid=$_POST['pid'];
		 $l=$_POST['level'];
		  
	   $d=$conn->query("SELECT * from options where id='$pid'  ") or die(mysqli_error($conn));
	   while($rows=$d->fetch_assoc()){
		    $dept=$rows['name'];
	   }
	    $d=$conn->query("SELECT * from level where id='$l'  ") or die(mysqli_error($conn));
	   while($rows=$d->fetch_assoc()){
		   $level=$rows['name'];
	   }
	 
	  
$i=1;
?>   
                  
            
<div class="alert alert-info">
  <strong> <span style="color:#f00">Edit CA marks for <?php echo $dept; ?> Level <?php echo $level; ?> this <?php echo $ayear; ?></span> </strong>
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

				url: 'search_students.php?dept=<?php echo $dept; ?>&ayear=<?php  echo $sem; ?>&level=<?php echo $level; ?>',

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
    <?php } ?> 
     
											                                            <?php
																						
							
							if(isset($_POST['go'])){
							
 $name=mysqli_real_escape_string($dbcon,$_POST['querystr']);
$sectors=mysqli_real_escape_string($dbcon,$_POST['names']);

   $dl=$dbcon->query("SELECT * FROM  courses WHERE matricule='$name' order by roll  desc") or die(mysqli_error($dbcon));
   while($rows=$dl->fetch_assoc()){
	   $level=$rows['levels'];
	   $ayear=$rows['db1'];
   }
    $number=$dl->num_rows;
	
           $d=$dbcon->query("SELECT * FROM  courses WHERE matricule='$name' order by roll  desc ") or die(mysqli_error($dbcon));
	     
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
														
	<th>Matricule</th>
    <th>Level </th>

    <th>School Year</th>
    <th>Program</th>													
	<th>Action</th>
														
													</tr>
												</thead>
                                                
                                                
                                                
                                                <tbody>
                                                <?php
												  while($bu=$d->fetch_assoc()){

//////////////// Get the department ID of this department so as to determine the type of transcript to print

  $as=$dbcon->query("SELECT * FROM segments,grading where  segments.sector=grading.sector and segments.dept='".$bu['departmet']."'  GROUP BY grading.sector") or die(mysqli_error($dncon));
		
		  while ($bs=$as->fetch_assoc()){
			  $idkl=$bs['sector'];
			  
		 
          }
						 
						 ?>
   												<tr>
														<td class="center">
<?php echo $i++; ?>
														</td>

								
														</td>
				<td><?php  echo $bu['fname']; ?></td>
                                    
             <td><?php  echo $bu['matricule']; ?></td>
              <td><?php  echo $bu['levels']; ?></td>
             <td><?php  echo $bu['db1']; ?></td>
                                    
             <td><?php  echo $bu['departmet']; ?></td>


<td>
		 <a href="?edit_mks&matric=<?php echo $bu['matricule']; ?>&ayear=<?php  echo $bu['db1'];  ?>&name=<?php  echo $bu['fname'];  ?> " >
    
    <button class="btn btn-xs btn-primary" >
																<i class="ace-icon fa fa-check bigger-120"></i> Edit Ca Marks			</button></a> 
														</td>
													</tr>


		<?php   }?>
												</tbody>
											</table>
        <?php }   ?>
      
    </tbody>
  </table>
  </div> </div>
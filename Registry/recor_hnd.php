
      <?php
	  if(isset($_GET['record_hnd'])){
	 $c=$dbcon->query("SELECT * FROM  courses where roll='".$_GET['xxc']."' ") or die(mysqli_error($dbcon));
while($row=$c->fetch_assoc()){
	$name=$row['fname'];
	$matric=$row['matricule'];
	$ayear=$row['db1'];
	$dept=$row['departmet'];
	$levels=$row['levels'];
}
 }
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



		<div class="col-sm-3">

			
 <label for="inputEmail4">Full Name</label>
				  	<input type="text" id="querystr" name="fname " class="form-control" placeholder="Search Program" aria-describedby="basic-addon2" readonly="readonly" value="<?php echo $name; ?>" autocomplete="off">
                    
                </div>
                
                <div class="col-sm-2">
                 <label for="inputEmail4">School Year</label>
                <input type="text" id="querystr" name="ayear" class="form-control" value="<?php echo $ayear;  ?>" style="color:#f00" readonly="readonly" autocomplete="off">
                
                 <input type="hidden" id="querystr" name="matric" class="form-control" value="<?php echo $matric;  ?>" style="color:#f00" readonly="readonly" autocomplete="off">
                </div>

			 
                <div class="col-sm-4">
                 <label for="inputEmail4">Department</label>
                <input type="text" id="querystr" name="depts" class="form-control" readonly="readonly" value="<?php echo $dept; ?>" autocomplete="off">
                </div>
                
                   <div class="col-sm-2">
                 <label for="inputEmail4">HND Grade</label>
                 
                 <select class="form-control" id="sel1" name="grade" required>
                 <option></option>
                 <?php
				 
	   $ds=$dbcon->query("SELECT * from grading where sector='13' ") or die(mysqli_error($dbcon));
while($bus=$ds->fetch_assoc()){
	?>
    <option value="<?php echo $bus['id']; ?>"><?php echo $bus['weight']; ?></option>
    
                 <?php } ?>
  </select>
  
                </div>


    
    <div class="form-group col-md-1">
      <input type="submit" class="next btn btn-primary" value="SAVE" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
     
     
											                                            <?php
																						
							
							if(isset($_POST['ok'])){

$grade=mysqli_real_escape_string($dbcon,$_POST['grade']);
	$ds=$dbcon->query("SELECT * from grading where id='$grade' ") or die(mysqli_error($dbcon));
while($bus=$ds->fetch_assoc()){
	$m_grade=$bus['grade'];
	$m_eight=$bus['weight'];
}
$name=mysqli_real_escape_string($dbcon,$_POST['fname']);
$ayear=mysqli_real_escape_string($dbcon,$_POST['ayear']);
$depts=mysqli_real_escape_string($dbcon,$_POST['depts']);
$d=$dbcon->query("SELECT * FROM  my_marks where matric='$matric' and ayear='$ayear' and hnd!=''  ") or die(mysqli_error($dbcon));
if($d->num_rows>0){


$dS=$dbcon->query("UPDATE  my_marks SET  dept='$depts'   ,levels='$levels',hnd='$m_eight',ayear='$ayear',sem='HND',valid='1',mhnd='$m_grade',code='HND',credit='120',grade='$m_grade',earned='120',graded='$m_grade'  WHERE matric='$matric' AND sem='HND'  ") or die(mysqli_error($dbcon));

echo "<script>alert('Success. HND Marks successfully saved')</script>";
}
else {

	
$dS=$dbcon->query("INSERT INTO  my_marks SET  dept='$depts'   ,levels='$levels',hnd='$m_eight',ayear='$ayear',sem='HND',matric='$matric',valid='1',mhnd='$m_grade',code='HND',credit='120',grade='$m_grade',earned='120',graded='$m_grade' ") or die(mysqli_error($dbcon));

echo "<script>alert('Success. HND Marks successfully saved')</script>";

//echo '<meta http-equiv="Refresh" content="0; url=?diploma ">';	
}
							}
								
												
           $d=$dbcon->query("SELECT * FROM  my_marks where matric='$matric' and sem='HND'   ") or die(mysqli_error($dbcon));
	     
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
														<th>Name</th>
														
	<th>Matricule</th>		
    										<th>Department</th>
																
	<th>Grade</th>
	<th>Weight</th>																										
														
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
									<td><?php  echo $name; ?></td>
                                    
                       <td><?php  echo $matric; ?></td>
                        <td><?php  echo $dept; ?></td>


	    <td><?php  echo $bu['hnd']; ?></td>
		 <td><?php  echo $bu['mhnd']; ?></td>																				</tr>


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

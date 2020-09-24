<h3>Printing a Transcript</h3>
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

				url: 'search_students.php',

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
      <input type="submit" class="next btn btn-primary" value="Search" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
     
     
											                                            <?php
																						
							
							if(isset($_POST['ok'])){
$name=mysqli_real_escape_string($dbcon,$_POST['querystr']);
$sectors=mysqli_real_escape_string($dbcon,$_POST['names']);

           $d=$dbcon->query("SELECT * FROM  years,levels,special,students WHERE students.matricule='$name'
   AND students.year_id=years.id AND students.dept_id=special.id AND students.level_id=levels.id 
   GROUP BY students.level_id order by students.id DESC   ") or die(mysqli_error($dbcon));
  $hm=$d->num_rows;;
	     
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

  $as=$dbcon->query("SELECT * FROM segments,grading where  segments.sector=grading.sector and segments.dept_id='".$bu['dept_id']."'  GROUP BY grading.sector") or die(mysqli_error($dncon));
		
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
             <td><?php  echo $bu['year_name']; ?></td>
                                    
             <td><?php  echo $bu['prog_name']; ?></td>


<td>
		
          <?php
	 ////if id=12 then its BSC transcript. Load Bsc only and Bsc has an additional 1 empty page
	if($idkl==9){
		?>	
        
         <a href="../Registry/Transcript/PBH/index.php?xxc=<?php echo $bu['id']; ?>&link=Add Subject " target="new">
    
    <button class="btn btn-xs btn-primary" >
																<i class="ace-icon fa fa-check bigger-120"></i> BUILD Transcript 
															</button></a> |
        
        <?php } else { ?>
        
     <a href="../Registry/Transcript/BUILD/index.php?xxc=<?php echo $bu['id']; ?>&link=Add Subject " target="new">
    
    <button class="btn btn-xs btn-primary" >
																<i class="ace-icon fa fa-check bigger-120"></i> BUILD Transcript 
															</button></a> |    
        <?php } ?>											
														
   
     <?php
	 ////if id=12 then its BSC transcript. Load Bsc only and Bsc has an additional 1 empty page
	if($idkl==12){
		?>
                                                       
  <a href="../Registry/Transcript/hnd.php?xxc=<?php echo $bu['id']; ?>&link=Add Subject " target="new"> <button class="btn btn-xs btn-danger" >
																<i class="ace-icon fa fa-check bigger-120"></i> Print Transcript 
															</button></a>
                                                            
                                                            
        <?php
	}
	else if($idkl==9){
		?>
  
  
    <a href="../Registry/Transcript/PBHT/index.php?xxc=<?php echo $bu['id']; ?>&link=Add Subject " target="new"> <button class="btn btn-xs btn-danger" >
																<i class="ace-icon fa fa-check bigger-120"></i> Print Transcript 
															</button></a>      
        <?php } 
	///////if the number of years is more than one, load a normal transcript wh loads multi pages according to num of school year
	else if($number>1){
		?>
 
	                                               
  <a href="../Registry/Transcript/index.php?xxc=<?php echo $bu['id']; ?>&link=Add Subject " target="new">
    
    <button class="btn btn-xs btn-success" >
																<i class="ace-icon fa fa-check bigger-120"></i> Print Transcript 
															</button></a>
		<?php } 
		////Number is 1 meaning just a one year transcript. Names appears only once in dbs
		else {
			?>   
                                                                
       <a href="../Registry/Transcript/single_page.php?xxc=<?php echo $bu['id']; ?>&link=Add Subject " target="new">
    
    <button class="btn btn-xs btn-success" >
																<i class="ace-icon fa fa-check bigger-120"></i> Print Transcript 
															</button></a>                                                    
                                                         
<?php } ?>
														</td>
													</tr>


		<?php   }?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
                                
                                

                                                 <?php
	
 
 }
 ?>

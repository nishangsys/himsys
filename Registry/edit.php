






<h3>Editing a Student's Names</h3>
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
<script language="JavaScript" src="../js/pop-up.js"></script>
				
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
$matric=mysqli_real_escape_string($dbcon,$_POST['querystr']);

  //////////select academic year//////////////
$d=$conn->query("SELECT * FROM levels,special,years,students where students.matricule='$matric' AND students.dept_id=special.id AND levels.id=students.level_id AND students.year_id=years.id GROUP BY students.level_id,students.id ") or die(mysqli_error($conn));
$i=1;
	if(mysqli_num_rows($d)<1){
	echo	$mess="<div class='alert alert-danger'>Sorry $matric level $level Marks are not Found. Try again</div>";
	}
	else {
	
 			 
?>
</div>

 
        <div class="col-sm-12">
        
     <div class='alert alert-success' style="font-weight:bold; font-size:16px">Editing <?php echo $matric; ?></div>
 <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
          <th>Course code</th>
        <th>Matricule</th>
        <th>Program</th>
        <th>Level</th>
        <th>School Year</th>
      
        <th>Action</th>
      </tr>
    </thead>
    <?php
	
while($bu=$d->fetch_assoc()){
	
	?>
    <tbody>
      <tr>
      <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
      <td><?php echo $i++; ?></td>
       <td><?php echo $bu['fname']; ?></td>
        <td><?php echo $bu['matricule']; ?></td>
        <td><?php echo $bu['prog_name']; ?></td>
        <td><?php echo $bu['levels']; ?></td>
        <td><?php echo $bu['year_name']; ?></td>
       
        <td>
     <a href=javascript:popcontact('../Registry/editt.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button class="btn btn-success" >Edit Me</button></a>|
     <!--  
      <a href=javascript:popcontact('../Registry/edit_dept.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button class="btn btn-primary" >Change Department</button></a>
      |
   
---->   
     
       <a href=javascript:popcontact('../Exams/del_name.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button type="button" class="btn btn-danger btn-sm" >Delete Name</button>
</a>

        </td>
      </tr>
     <?php } ?> 
    </tbody>
  </table>
         
          <?php } }  ?>
     
     
										
<h3>Search Student Name to Edit</h3>
      <?php
	  $year=date('Y');
	  
	   $d=$dbcon->query("SELECT * from sectors WHERE id='".$_GET['set_as']."' ") or die(mysqli_error($dbcon));
while($bu=$d->fetch_assoc()){
	$ids=$bu['num']; 
	$ss=$bu['name'];
	?>
  

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
      <input type="submit" class="next btn btn-primary" value="Search and Edit" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
     
     
											                                            <?php
																						
							
							if(isset($_POST['ok'])){
$name=mysqli_real_escape_string($dbcon,$_POST['querystr']);
$sectors=mysqli_real_escape_string($dbcon,$_POST['names']);

   $dl=$dbcon->query("SELECT * FROM  courses WHERE matricule='$name' order by db1  ") or die(mysqli_error($dbcon));
   while($rows=$dl->fetch_assoc()){
	   $names=$rows['fname'];
   }
   	 $stripped = str_replace(' ', '', $name);
				
   /////Check if this student has Registry of mks
    $dl=$dbcon->query("SELECT * FROM  my_marks WHERE matric='$stripped'   ") or die(mysqli_error($dbcon));
   
   
    $number=$dl->num_rows;
	if($number<1){
		echo '<div class="alert alert-danger">
  <strong>ERROR! </strong>No Marks have been found for '.$names.'
</div>
';
	}
	else {
			echo '<div class="alert alert-info">
  <strong>Registry Found! </strong>Editing  '.$names.' Marks
</div>';
	
?>

 <div class="row">
 
        <div class="col-sm-12">
 <iframe src="../Registry/EDITPBH/index.php?matric=<?php echo  $stripped; ?> " allowFullScreen style="width: 97%;
			float:left;
			background: #FFF;
            border:none;
            height:2000px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
          </div>
          </div>
								

                                                 <?php
	
 
 } }
 ?>

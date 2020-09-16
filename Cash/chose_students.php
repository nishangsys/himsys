
     
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
    
    
    
    
    
            
<script src="../Cash/js/jquery_search.js"></script>

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

	
    <label class="control-label col-sm-2" for="DOB">Sector:</label>
      <div class="col-sm-10">

			
				<div class="input-gpfrm input-gpfrm-lg">

				  	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Name" aria-describedby="basic-addon2" autocomplete="off">
                    
                    	<input type="hidden" id="querystr" name="names" class="form-control" value="<?php echo $name;  ?>">
                    


				</div>

			

			<ul class="list-gpfrm" id="hdTuto_search"></ul>

		</div>   
	</div>
     
	</div>
    <br />
    
    
    <div class="form-group" style="margin-top:20px">
      <label class="control-label col-sm-2" for="DOB">Sector:</label>
      <div class="col-sm-10">
        <select class="form-control" id="sel1" name="sector" required>
       <option></option>
       <?php
	$result= $con->query("select * from income_classes order by name" ) or die (mysql_error());
					
								while ($row=$result->fetch_assoc()){
	?>
    <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
   <?php } ?>
  </select>
      </div>
    </div><br /><br />
    
      <div class="form-group" >
      <label class="control-label col-sm-2" for="DOB">Level:</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="level" required>
       <option></option>
       
        <option value="1000" required>General</option>
       <?php
	$result= $dbcon->query("select * from levels order by levels" ) or die (mysqli_error($dbcon));
					
								while ($row=$result->fetch_assoc()){
	?>
    <option value="<?php echo $row['id']; ?>" required>Level <?php echo $row['levels']; ?></option>
   <?php } ?>
  </select>
      </div>
    </div><br /><br />
    
    
    <div class="form-group" >
      <label class="control-label col-sm-2" for="DOB">Aacademic Year</label>
      <div class="col-sm-10">
       <select class="form-control" id="sel1" name="ayear" required>
    
       
       <?php
	$result= $dbcon->query("select * from years order by id DESC" ) or die (mysqli_error($dbcon));
					
								while ($row=$result->fetch_assoc()){
	?>
    <option value="<?php echo $row['id']; ?>" > <?php echo $row['year_name']; ?></option>
   <?php } ?>
  </select>
      </div>
    </div><br /><br />
    
    

     <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Payment Type:</label>
      <div class="col-sm-10">
       <select  class="form-control" required id="sel1" name="method" >

        <?php
							
								$result = $con->query("SELECT * FROM our_accounts") or die(mysqli_error($con));
				while($bu=$result->fetch_assoc()){
								?>
                              
        <option value="<?php echo $bu['id']; ?>"  ><?php echo $bu['name']; ?> </option>
    <?php } ?> 
        
      </select>
  
      </div>
    </div><br /><br />
    
    
    
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="DOB">Amount Paid:</label>
      <div class="col-sm-10">
        	<input type="text" name="paid" required="required" class="form-control"  autocomplete="off">
  
      </div>
    </div><br /><br />
    
       <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="do">Record Finance</button>
      </div>
    </div>
    </form>
    </div>
     

<?php
if(isset($_POST['do'])){
	echo $matric=$_POST['querystr'];
	
	$result= $con->query("select * from students where matricule='$matric' " ) or die (mysql_error());

	while ($row=$result->fetch_assoc()){
		$name=$row['fname'];
		$dept_id=$row['dept_id'];
		
	}
	
	$year_id=$_POST['ayear'];
	$paid=$_POST['paid'];
	$level=$_POST['level'];
	$reason=$_POST['sector'];
	$method=$_POST['method'];
	@session_start();

	$date=date('d-m-Y');
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$active=$_SESSION['user_name'];
	
 $daily=$con->query("INSERT INTO daily set cust_id='$matric',paidto='$active',day='$day',staffname='$name',discount='',rec='$paid',
			date='$date',month='$month',year='$year_id',reason='$reason',qty='1',level_id='$level',fyear='$year',
			purpose='$reason',method='$method',prog_id='$dept_id',area='99'") or die(mysqli_error($con));
			
			echo "<script>alert('Records Successfull')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=?crecording">';	
}

?>

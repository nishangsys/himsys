
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

<div class="alert alert-success">
  <strong>Generate a Spread Sheet for a Program </strong> 
</div>





	<div class="row justify-content-center gst20">
<form id="hdTutoForm" method="POST" action="../Registry/spread_sheet.php" target="new">



                
                <div class="col-sm-2">
                
         <label for="pwd">Levels :</label>
     <select class="form-control" id="sel1" name="level" required>
                  <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from levels") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['levels']; ?></option>
    <?php } ?>
                 </select>
  </div>
            
                
                
                
                <div class="col-sm-5">

	  <label for="email">Program:</label>
   <select class="form-control" id="sel1" name="dept" required>
              <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from students,special where students.dept_id=special.id  GROUP BY students.dept_id") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['prog_name']; ?></option>
    <?php } ?>
 
  </select>
                </div>
                
                
                
                   <div class="col-sm-2">
                <label for="pwd">Year:</label>
     <select class="form-control" id="sel1" name="ayear" required>
                  <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from students,years where students.year_id=years.id  GROUP BY students.year_id order by students.year_id DESC") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['id']; ?>"><?php echo $df['year_name']; ?></option>
    <?php } ?>
                 </select>
                </div>
    
    
    <div class="col-sm-2">
                <label for="pwd">Semester:</label>
     <select class="form-control" id="sel1" name="sem" required>
                  <option>........</option>

       <?php
	   $d=$dbcon->query("SELECT * from semesters") or die(mysqli_error($dbcon));
	   while($df=$d->fetch_assoc()){
	   ?>
    <option value="<?php echo $df['s_num']; ?>"><?php echo $df['s_name']; ?></option>
    <?php } ?>
                 </select>
                </div>
    
    
    <div class="form-group col-md-3"><br>
      <input type="submit" class="next btn btn-primary" value="BUILD SPREAD SHEET" name="ok" /> 
    </div>

 
     </fieldset>
     </form>

</div>
    
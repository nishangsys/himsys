
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
<form id="hdTutoForm" method="POST" action="?ph_marks">



		<div class="col-sm-10">

			
				<div class="input-gpfrm input-gpfrm-lg">
 <label for="inputEmail4">Program</label>
				  	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Program" aria-describedby="basic-addon2" autocomplete="off">
                    
                    	
			<ul class="list-gpfrm" id="hdTuto_search"></ul>

		</div>

                </div>
                

	</div>
    
    
    <div class="form-group">
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
    
    
    
    <div class="form-group col-md-3"><br>
      <input type="submit" class="next btn btn-primary" value="SAVE" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>
     
     
											
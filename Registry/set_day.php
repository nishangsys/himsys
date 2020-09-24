
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
  <strong>Choose Time to Allocate as Period </strong> 
</div>





	<div class="row justify-content-center gst20">
<form id="hdTutoForm" method="POST" action="?nexts">



                
                <div class="col-sm-2">
                 <label for="inputEmail4">Level </label>
                <select class="form-control" id="sel1" name="level" required>
                <option></option>
               
   <option value="200">Level 200 </option>
      <option value="300">Level 300 </option>
         <option value="400">Level 400 </option>
         
         <option value="500">Level 500 </option>
         
         <option value="600">Level 600 </option>


  
  </select> 
            
                </div>
                
                
                <div class="col-sm-6">

			
				<div class="input-gpfrm input-gpfrm-lg">
 <label for="inputEmail4">Program</label>
				  	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Program" aria-describedby="basic-addon2" autocomplete="off">
                    
                    	
			<ul class="list-gpfrm" id="hdTuto_search"></ul>

		</div>

                </div>

	
    
                <div class="col-sm-3">
                 <label for="inputEmail4">Sem: </label>
                <select class="form-control" id="sel1" name="sem" required>
                <option></option>
               
   <option value="1">1  </option>
      <option value="2">2 </option>
        


  
  </select> 
            
                </div>
    
    
    <div class="form-group col-md-3"><br>
      <input type="submit" class="next btn btn-primary" value="NEXT PAGE" name="ok" /> 
    </div>

 
     </fieldset>
     </form>

</div>
    
<?php
 $id;
   $dm=$conn->query("SELECT * FROM special where id='".$_GET['dip']."'  ") or die(mysqli_error($conn));
while($bum=$dm->fetch_assoc()){
	 $dept_name=$bum['prog_name'];
}

?>

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
    
    
    
    
    
            
<script src="../Registry/js/jquery_search.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

	//Autocomplete search using PHP, MySQLi, Ajax and jQuery

		//generate suggestion on keyup

		$('#querystr').keyup(function(e){

			e.preventDefault();

			var form = $('#hdTutoForm').serialize();

			$.ajax({

				type: 'POST',

				url: 'search_users.php',

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
								

<h3>Department: <span style="color:#f00"><?php echo $dept_name; ?></span></h3>

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
      <input type="submit" class="next btn btn-primary" value="Set as HOD of <?php echo $dept_name; ?>" name="ok" /> 
    </div>

 
     </div>
     </fieldset>
     </form>

</div>

<?php
if(isset($_POST['ok'])){
			$name=$_POST['querystr'];
			  $dm=$con->query("SELECT * FROM users where full_name='".$name."'  ") or die(mysqli_error($con));
			  while($rows=$dm->fetch_assoc()){
				 $user_id=$rows['id'];
			  }
	  
			  $dm=$conn->query("SELECT * FROM hods where user_id='". $user_id."' AND dept_id='".$_GET['dip']."'  ") or die(mysqli_error($conn));
			  if($dm->num_rows>0){
			  }
			  else {
				 $insert_into_hod=$conn->query("INSERT INTO hods set user_id='". $user_id."',dept_id='".$_GET['dip']."'  ") or die(mysqli_error($conn));

               $update_users=$con->query("UPDATE users  set user_level='17'  WHERE id='$user_id'   ") or die(mysqli_error($con));
			  }
			  

}

?>

<h3>All <?php echo $dept_name; ?> Head of Departments </h3>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php
		
		 $d=$conn->query("SELECT * FROM hods where dept_id='".$_GET['dip']."' ") or die(mysqli_error($conn));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                <th> Name</th>
                                <th>Department</th>
                     
                                    <th>Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
             <td><?php   $dm=$con->query("SELECT * FROM users where id='".$bu['user_id']."'  ") or die(mysqli_error($con));
						while($bum=$dm->fetch_assoc()){
							 echo $bum['full_name'];
						} ?>
             </td>
             <td><?php  echo $dept_name; ?></td>
              <td><a href="?creating_hod&dip=<?php echo $_GET['dip'] ?>&id=<?php  echo $bu['id']; ?>"> <button  class="btn btn-danger" onClick="return confirm('Are you Sure About that')" >Remove from this Office</button></a></td>       
                                            
                                            
                                            </td>
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
     
     
											                               <?php
if(isset($_GET['id'])){
			$id=$_GET['id'];
		 $d=$conn->query("DELETE FROM hods where id='$id' ") or die(mysqli_error($conn));
		 echo "<script>alert('Delete Successfull')</script>";
		 echo '<meta http-equiv="Refresh" content="1; url=?creating_hod&dip='.$_GET['dip'].' ">';
}

?>
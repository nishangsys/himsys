
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
                                        
                                        <h3>Editting <?php echo $_GET['name'] ?> Marks of </h3>
<div class="container">

<?php

$query 	= $conn->query("SELECT * FROM years,levels,my_marks where my_marks.matric='".$_GET['matric']."'  and my_marks.year_id='".$_GET['ayear']."'  AND my_marks.year_id=years.id  AND levels.id=my_marks.level_id order by my_marks.id DESC") or die(mysqli_error($conn)); // Select from the table
$count 	= $query->num_rows; // Get the rows count

?>

				<table id="dynamic-table" class="table table-striped table-bordered table-hover">
											  <tr class="heading">
            
                <td align="center">Sno</td>
                <td align="center">Subject</td>
                <td align="center">Sem</td>
                <td align="center">Ca</td>
                 <td align="center">Exams</td>
               
                <td align="center">School Year</td>
                <td align="center">Level</td>
                <td align="center">Action</td>

            </tr>
            <?php
                while($row = $query->fetch_assoc())
                {
                    $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo "odd"; } else{ echo "even"; } ?>" style="text-align:center">
                
                <td><?php echo $i; ?></td>
                <td> <?php echo $row['code']; ?></td>
                <td><?php echo $row['sem']; ?></td>
                 <td> <?php echo $row['ca']; ?></td>
                <td><?php echo $row['exam']; ?></td>
                
                <td><?php echo $row['year_name']; ?></td>
                 <td><?php echo $row['levels']; ?></td>
                
                 													<td>
                                                                    
                                                                    
     
     
    <a href=javascript:popcontact('../Exams/addmarks.php?cust=<?php echo $row['id'];?>&level=<?php echo $row['level_id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;">
    <button class="btn btn-xs btn-primary" > Edit Exams/Ca Marks   </button></a>|
  
	| 
     
     												
    <a href="?edit_mks&matric=<?php echo $_GET['matric']; ?>&ayear=<?php  echo $_GET['ayear'];  ?>&name=<?php  echo $_GET['name'];  ?> &dels=<?php echo $row['id']; ?>&course=<?php echo $row['code']; ?>&ca=<?php echo $row['ca']; ?>&exams=<?php echo $row['exam']; ?>" onclick="return confirm('Are you sure you wish to delete <?php echo $row['code']; ?> Marks ')" >
    
    <button class="btn btn-xs btn-danger" >
																<i class="ace-icon fa fa-pencil bigger-120"></i> Delete Marks			</button></a>                                                           
                                                                </td>
                 
            </tr>
            <?php
                }
            ?>
												</tbody>
											</table>
                                            </div>

</div>
     
     
											                                            <?php
																						
							
							if(isset($_GET['dels'])){
$dels=$_GET['dels'];
$month=date('G:i:s h:i:s');
$year=date('Y');

$computer=gethostbyaddr($_SERVER['REMOTE_ADDR']);

$localIP = getHostByName(php_uname('n'));

;

   $dl=$conn->query("DELETE FROM  my_marks WHERE id='$dels'   ") or die(mysqli_error($conn));
    $ats=$con->query("insert into track set sname='".$_GET['name']."',  
smat='".$_GET['matric']."',year_id='".$year."',fca='".$_GET['ca']."',fexam='".$_GET['exams']."',edited='$who',ip='$localIP',comp='$computer',time='$month',reason='Deleted Course',course='".$_GET['course']."'") or die(mysqli_error($con)) ;

   echo "<script>alert('Delete Successfull')</script>";
         
echo '<meta http-equiv="Refresh" content="0; url=?edit_mks&matric='.$_GET['matric'].'&ayear='.$_GET['ayear'].'&name='.$_GET['name'].' ">';					}
		
?>
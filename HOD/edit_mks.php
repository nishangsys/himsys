
  <script language="JavaScript" src="../js/pop-up.js"></script>
								<div class="row">
									<div class="col-xs-12">
										
										<div class="clearfix">
											<div class="pull-right tableTools-container"></div>
										</div>
										
										<!-- div.table-responsive -->

										<!-- div.dataTables_borderWrap -->
										<div>
                                        
                                        <h3>Editting <?php echo $_GET['name'] ?> Marks of  <?php echo $_GET['ayear'] ?></h3>
<div class="container">

   
  
	<hr />

<?php

$query 	= $conn->query("SELECT * FROM `my_records` where matric='".$_GET['matric']."'  and ayear='".$_GET['ayear']."'    order by roll DESC") or die(mysqli_error($conn)); // Select from the table
 $count 	= $query->num_rows; // Get the rows count
 		if($count<1){
			echo '<div class="alert alert-danger">
  <strong>ERROR. No Records Found for this student this academic Year </strong>
</div>';
		}
		else {

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
                
                <td><?php echo $row['ayear']; ?></td>
                 <td><?php echo $row['levels']; ?></td>
                
                 													<td>
                                                                    
                                                                    
     
     
    <a href=javascript:popcontact('../HOD/addmarks.php?code=<?php echo $row['roll'];?>&level=<?php echo $bu['levels']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;">
    <button class="btn btn-xs btn-primary" > Edit Ca Marks   </button></a>|
    
    
      <a href=javascript:popcontact('../HOD/addcourse.php?code=<?php echo $row['roll'];?>&level=<?php echo $bu['levels']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;">
    <button class="btn btn-xl btn-danger" > Add Missing Course  </button></a>
     												
                                       </td>
                 
            </tr>
            <?php
                }
            ?>
												</tbody>
											</table>
                                            <?php } ?>
                                            </div>

</div></div>	
     
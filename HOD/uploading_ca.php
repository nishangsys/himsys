<?php
				
				   $d=$conn->query("SELECT * from special,levels,subjects where 
	 subjects.id='".$_GET['id']."' AND subjects.prog_id=special.id AND subjects.level_id=levels.id  ") or die(mysqli_error($conn)) ;
							
					while($bu=$d->fetch_assoc()){
						  $title=$bu['title'];
						   $code=$bu['code'];
						   $dept_name=$bu['prog_name'];
						   $level=$bu['levels'];
							$status=$bu['status'];
							$credit_value=$bu['cv'];
							$semester=$bu['sem'];;
					}
?>


 <?php
   if(isset($_GET['del'])){
	  $code=$_GET['del'];
	   $ayear=$_GET['ayear'];
	   $dept=$_GET['dept'];
   if($_GET['sch_id']==2 || empty($_GET['sch_id']) ){
	 
		     $ok=$conn->query("DELETE FROM my_marks where  year_id='$ayear' and code='$code' AND matric like '%MS%' ") or die(mysqli_error($conn));
	  
	   }
	   else if(empty($_GET['sch_id'])){
		 
		   
		   $ok=$conn->query("DELETE FROM my_marks where  year_id='$ayear' and code='$code' AND matric like '%MS%' ") or die(mysqli_error($conn));   
	   }
	   
	   else {
		  
		   
  
	   $ok=$conn->query("DELETE FROM my_marks where dept_id='$dept' and year_id='$ayear' and code='$code' and exam='0' ") or die(mysqli_error($conn));
	

	   }
	 echo '<meta http-equiv="Refresh" content="1; url=index.php?uploading_ca&did='.$_GET['did'].'&id='.$_GET['id'].'&ayear='.$_GET['ayear'].'&level='.$_GET['level'].'&sch_id='.$_GET['sch_id'].'">';
   }
   
   
   ?>


<div class="alert alert-info">
  <strong> <span style="color:#f00">Uploading  CA marks for <?php echo $dept_name; ?> LEVEL <?php echo $level; ?> this <?php echo $ayear_name; ?></span> </strong>
</div>
        
        
   <h4>Course : <span style="font-weight:bold; color:#f00"><?php echo $title;  ?></span> ||
   
   Course Code : <span style="font-weight:bold; color:#f00"><?php echo $code;  ?></span>   ||
   
    
      Program : <span style="font-weight:bold; color:#f00"><?php echo $dept_name;  ?></span>
      
       Level : <span style="font-weight:bold; color:#f00"><?php echo $level;  ?></span>
   
   </h4>  
   
   
   
   <div class="container">
    <div class="row">
       
  <div class="col-sm-5">

            <div class="form-group">
                <h4 style="color:#f00; font-weight:bold; padding:10px 10px; background:#ff0">UPLOAD CA MARKS IN CSV ONLY</h4>
            </div>
            
            <?php
				//require_once ('../../includes/dbc.php');

				session_start();
				if(isset($_SESSION['message'])){
					?>
					<div class="alert alert-info text-center" style="margin-top:20px;">
						<?php echo $_SESSION['message']; ?>
					</div>
					<?php

					unset($_SESSION['message']);
				}

			?>
         
			<form method="POST" action="imports/<?php
			if($_GET['sch_id']==2 ){
				echo "import.php";
			}
			else if(empty($_GET['sch_id']) ){
				echo "import.php";
			}
			else {
				echo "shs_import.php";
			}
            ?>?sem=<?php  echo $semester; ?>&ayear=<?php echo $ayear; ?>&level=<?php echo $level; ?>&code=<?php echo $code; ?>&status=<?php echo $status; ?>&cv=<?php echo $credit_value; ?>&dept=<?php echo $dept_name; ?>&did=<?php echo $_GET['did']; ?>&id=<?php echo $_GET['id'];; ?>&sch_id=<?php echo $_GET['sch_id'];; ?>&level_id=<?php echo $_GET['level'];; ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label for="file">File:</label>
					<input type="file" id="file" name="file" required>
				</div>
				<input type="hidden" name="dept" value="<?php echo $dept_name; ; ?>">
				<button type="submit" name="import" class="btn btn-primary btn-sm">Import to the System</button>
			</form>
            
          <img src="../img/uploadca.png" style="margin-top:10px">   	
        </div>
   
    
    
    
    
     <div class="row">
        
  <div class="col-sm-6" style="border:2px solid#000">
  
   <div class="alert alert-info text-center" style="margin-top:20px;">
						UPLOADED MARKS OF <?PHP echo $code; ?> THIS <?PHP echo $ayear_name; ?>
                        
                        <a href="?uploading_ca&did=<?php echo $_GET['did']  ?>&id=<?php echo $_GET['id'] ?>&level=<?php echo $_GET['level']; ?>&sch_id=<?php echo $_GET['sch_id']; ?>&del=<?PHP echo $code; ?>&ayear=<?PHP echo $ayear; ?>&dept=<?PHP echo $_GET['did']; ?>&gsgsggs" class="btn btn-danger" onclick="return confirm('Are you sure you wish to Delete. If yes , make sure you upload again')"> Undo /Delete Uploaded <?PHP echo $code; ?> Ca for <?PHP echo $ayear_name; ?> 
</a>
                        </div>
  <table class="table table-bordered table-striped">
				<thead>
					<th>S/N</th>
                    <th>Matricule</th>
					<th>Course Code</th>
					
					<th>Ca Marks</th>
					<th>Exams Marks</th>
				</thead>
				<tbody>
					<?php
					//connection
					
					if($_GET['sch_id']==2){
						$sql = "SELECT * FROM my_marks where sem='".$semester."'
					 AND year_id='".$ayear."' 
					AND code='".$code."'  ";
					}
					else if(empty($_GET['sch_id'])){
						$sql = "SELECT * FROM my_marks where sem='".$semester."'
					 AND ayear='".$ayear."' 
					AND code='".$code."'  ";
					}
					else {
						 $sql = "SELECT * FROM my_marks where sem='".$semester."'
					AND year_id='".$ayear."' 
					AND code='".$code."' AND dept_id='".$_GET['did']."' ";
					}
					
					$query = $conn->query($sql) or die(mysqli_error($conn));
					
					$a=1;

					while($row = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $a++; ?></td>
                           <td><?php echo $row['matric']; ?></td>

							<td><?php echo $row['code']; ?></td>
							
							<td><?php echo $row['ca']; ?></td>
							<td><?php echo $row['exam']; ?></td>
						</tr>
						<?php
					}

					?>
				</tbody>
			</table>
  
  </div>
  </div>
 </div>
 </div>
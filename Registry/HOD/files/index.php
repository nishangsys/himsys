<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Excel to mysql</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
       
  <div class="col-sm-4">

            <div class="form-group">
                <h4 style="color:#f00; font-weight:bold; padding:10px 10px; background:#ff0">UPLOAD CA MARKS IN CSV ONLY</h4>
            </div>
            
            <?php
				require_once ('../../includes/dbc.php');

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
         
			<form method="POST" action="import.php?sem=<?php  echo $_GET['term']; ?>&ayear=<?php echo $_GET['ayear']; ?>&level=<?php echo $_GET['level']; ?>&code=<?php echo $_GET['code']; ?>&status=<?php echo $_GET['status']; ?>&cv=<?php echo $_GET['cv']; ?>&dept=<?php echo $_GET['dept']; ?>" enctype="multipart/form-data">
				<div class="form-group">
					<label for="file">File:</label>
					<input type="file" id="file" name="file" required>
				</div>
				<button type="submit" name="import" class="btn btn-primary btn-sm">Import</button>
			</form>
            
            	
        </div>
   
    
    
    
    
     <div class="row">
        
  <div class="col-sm-7" style="border:2px solid#000">
  <img src="image.png">
  
  </div>
  </div>
  <div class="alert alert-info text-center" style="margin-top:20px;">
						UPLOADED MARKS OF <?PHP echo $_GET['code']; ?> THIS <?PHP echo $_GET['ayear']; ?></div>
					</div>
  
  <table class="table table-bordered table-striped">
				<thead>
					<th>S/N</th>
                    <th>Matricule</th>
					<th>Course Code</th>
					<th>Academic Year</th>
					<th>Ca Marks</th>
				</thead>
				<tbody>
					<?php
					//connection
					

					$sql = "SELECT * FROM my_records where sem='".$_GET['term']."'
					AND levels='".$_GET['level']."' AND ayear='".$_GET['ayear']."' 
					AND code='".$_GET['code']."'";
					$query = $conn->query($sql) or die(mysqli_error($conn));
					
					$a=1;

					while($row = $query->fetch_array()){
						?>
						<tr>
							<td><?php echo $a++; ?></td>
                           <td><?php echo $row['matric']; ?></td>

							<td><?php echo $row['code']; ?></td>
							<td><?php echo $row['ayear']; ?></td>
							<td><?php echo $row['ca']; ?></td>
						</tr>
						<?php
					}

					?>
				</tbody>
			</table>
</div>
</body>
</html>
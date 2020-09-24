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
                <h4 style="color:#f00; font-weight:bold; padding:10px 10px; background:#ff0">UPLOAD MARKS IN EXCEL ONLY
                
                <?php
				include '../../includes/dbc.php';
                $_GET['ayear'];
				 	  $select=$conn->query("SELECT * from special WHERE id='".$_GET['dept']."'   ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		$dept_name=$rows['prog_name'];
		
		
	}
	 	  $select=$conn->query("SELECT * from levels WHERE id='".$_GET['level']."' ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		
		$level=$rows['levels'];
		
		
	}
	 	  $select=$conn->query("SELECT * from years WHERE id='".$_GET['ayear']."'   ") or die(mysqli_error($conn));
	while ($rows=$select->fetch_assoc()){
		
		$year=$rows['year_name'];
		
	}
				
				
				?>
                <br>
                <span style="color:#00F">
                <span style="color:#000"> Programe:</span><?php echo $dept_name; ?><br>
                
                   <span style="color:#000"> Level:</span><?php echo $level; ?><br>
                   <span style="color:#000"> Ac Year:</span><?php echo $year; ?><br>
                <span style="color:#000"> Semester:</span><?php echo $_GET['term']; ?><br>
                </span></h4>
            </div>
            <form method="post" 
            action="import_excel.php?prog=<?php echo $_GET['dept']; ?>&sem=<?php echo $_GET['term'];  ?>&level=<?php echo $_GET['level']; ?>&ayear=<?php echo $_GET['ayear'];  ?>" enctype="multipart/form-data">

                <div class="form-group">
                   <input type="file" id="file" name="file">
                   
               </div>

                <div class="form-group">
                    <button class="btn btn-info" name="import">Upload</button>
                </div>

            </form>
        </div>
   
    
    
    
    
     <div class="row">
        
  <div class="col-sm-7" style="border:2px solid#000">
  <img src="images.png">
  
  </div>
  </div>
</div>
</body>
</html>
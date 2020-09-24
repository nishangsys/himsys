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
            <form method="post" action="import_excel.php?sem=<?php  echo $_GET['term']; ?>&ayear=<?php echo $_GET['ayear']; ?>&level=<?php echo $_GET['level']; ?>&code=<?php echo $_GET['code']; ?>&status=<?php echo $_GET['status']; ?>&cv=<?php echo $_GET['cv']; ?>&dept=<?php echo $_GET['dept']; ?>"  name="upload_excel" enctype="multipart/form-data">

                <div class="form-group">
                   <input type="file" name="file" id="file">
               </div>
               
               

                <div class="form-group">
                    <button type="submit" name="Import" class="btn btn-info">Upload CSV File</button>
                </div>

            </form>
        </div>
   
    
    
    
    
     <div class="row">
        
  <div class="col-sm-7" style="border:2px solid#000">
  <img src="image.png">
  
  </div>
  </div>
</div>
</body>
</html>
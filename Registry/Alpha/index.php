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
                <h4 style="color:#f00; font-weight:bold; padding:10px 10px; background:#ff0">UPLOAD NAMES IN EXCEL ONLY</h4>
            </div>
            <form method="post" action="import_excel.php?prog=<?php echo  $_GET['dept'] ; ?>" enctype="multipart/form-data">

                <div class="form-group">
                   <input type="file" name="excelfile" id="excelfile">
               </div>

                <div class="form-group">
                    <button class="btn btn-info">Upload Names</button>
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
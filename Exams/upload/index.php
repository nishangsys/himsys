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
        
  <div class="col-sm-12">

            <div class="form-group">
                <h4>Excel File of Resits into your system</h4>
            </div>
            <form method="post" action="import_excel.php" enctype="multipart/form-data">

                <div class="form-group">
                   <input type="file" name="excelfile" id="excelfile">
               </div>

                <div class="form-group">
                    <button class="btn btn-info">Upload</button>
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders to a table:</p>
  <?php
  include 'dbc.php';
  if(isset($_POST['doLogin'])){
	 $your=$_POST['first_name'];
	   $a=mysql_query("SELECT * FROM list WHERE matric='$your' limit 1 ") or die(mysql_error());
	   if(mysql_num_rows($a)>0){
		   echo '<meta http-equiv="Refresh" content="0; url=index.php?mat='.$your.'">';

	   }
	   else {
		   echo "<script>alert('$your is not valid matricule. Try again')</script>";
	   }
  
  }
 
  
  ?>
<form class="form-horizontal" action="" method="post" target="_blank">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" placeholder="Enter Full Names" name="first_name">
      </div>
    </div>
    
    
     <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="doLogin">Submit</button>
      </div>
    </div>  
    
    
    
    
    
    
    
</div>

</body>
</html>


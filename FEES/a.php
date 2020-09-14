<?php
@session_start();
  $active=$_SESSION['user_name'];
 if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="0; url=index.php">';

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
	
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
	a{
		text-decoration:none;
		color:#090;
		
	}
  </style>
</head>
<body>
<?php include 'nav.php';?>
  
<div class="container-fluid text-center" style="overflow:hidden; height:900px">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p></p>
     
    </div>
    <div class="col-sm-8 text-left">
      <h1>Welcome <?php echo $active; ?></h1>
    
    
    <?php
	if(isset($_GET['first'])){
		include 'page1.php';
	}
	if(isset($_GET['mat'])){
		include 'page2.php';
	}
    if(isset($_GET['2'])){
		include 'page3.php';
	}
	if(isset($_GET['404'])){
		include '401.php';
	}
	
    ?>
    
    
    
    
    
    
    
    
    
      <hr>
    
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>Current Academic Year:<br>
        <span style="color:#f00; font-weight:bold; font-size:16px"><?php echo $ayear ?></span></p>
      </div>
      <?PHP
	  $d=$conn->query("SELECT * FROM daily order by id DESC LIMIT 30") or die(mysqli_error($conn));
	  $i=1;
	  ?>
        <p>All Records </p>
        
        
        <table class="table table-bordered" style="font-size:12px; text-align:left">
    <thead >
      <tr style="text-align:center; color:#FFF; background:#093">
        <th>S/N</th>
        <th>Name</th>
      </tr>
    </thead>
    <?php while($ad=$d->fetch_assoc()){  ?>
	
    <tbody>
      <tr>
        <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
        <td><?php echo $i++;  ?></td>
        <td><?php echo $ad['staffname']; ?></td>
        
      </tr>
        <?php } ?>
        </tbody>
        </table>
        
        
        
      </div>
    </div>
  </div>
</div>

</body>
</html>


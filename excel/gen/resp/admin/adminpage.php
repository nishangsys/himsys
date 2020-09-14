<?php
include '../dbc.php';
include '../function/functions.php';
@session_start();
 $username=$_SESSION['user_name'];

?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>NISSHANG</title>

    <meta name="description" content="responsive layout demos">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" media="screen" href="../css/left-fluid.css">

  <link rel="stylesheet" href="../js/boostrap.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

    .row.content {height: 550px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }
  </style>

     <!--[if lt IE 9]>
    	<script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
 <?php
 $level=$_SESSION['banned'];
 if($level==20 or $level==5){


 ?>
  
  <body>
  

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="../9.jpg" class="img-circle" height="55" width="55" alt="Avatar"></h2></a>
    </div>
   <?php include '../responsive.php'; ?>
</nav>
     <?php include 'sidebar.php'; ?>
    
    <div class="col-sm-9">
      <div class="well">
        <h4 ><?php echo $_GET['branch']; ?> DASHBOARD</h4>
              <p><button type="button" class="btn btn-success">Welcome: <?php echo $username; ?></button>
              <a href="../logout.php">
              <button type="button" class="btn btn-danger">Logout</button>
              </a>


</p>

      </div>
      
      
      
    
     
      <div class="row">
      
 
    
        <div class="col-sm-8">
        
          <div class="well" style="">
   <?php
   if(isset($_GET['cakes'])){
	   include 'cake.php';
   }
   if(isset($_GET['compliment'])){
	   include '../casheir/compliments.php';
   }
    if(isset($_GET['shapes'])){
	   include '../casheir/shapes.php';
   }
   if(isset($_GET['cake_colors'])){
	   include '../casheir/cake_colors.php';
   }
   if(isset($_GET['design_colors'])){
	   include '../casheir/design_colors.php';
   }
   
   if(isset($_GET['../casheir/chose'])){
	   include '../casheir/chose.php';
   }
   if(isset($_GET['more'])){
	   include '../casheir/more.php';
   }
    if(isset($_GET['chat'])){
	   include '../casheir/chat.php';
   }
   ?>
                 
          </div>
        </div>
        
        
        
        
        
        <div class="col-sm-4">
        
       <div class="well">
       ggg
       </div>
          <div class="well">
            <H3><span style="color:#039"><?php echo $_GET['branch']; ?></span> COMMANDS</H3>
            <?PHP
			$a = $con->query("SELECT * FROM commands where branch='".$_GET['branch']."' order by occasion_date ASC") or die(mysqli_error($con));
			$i=1;
			?>
            <?php
		while($rows = $a->fetch_assoc()) {
			?>
            
             <div class="row" style="border-bottom:1px solid#000; background:<?php
		if($i%2==0)
 {
     echo 'white';
 }
 else
 {
    echo '#9F9';
 }
 ?>">
     
     <div style="background:#300; color:#fff; border-radius:10px 10px 10px 10px; width:10px"><?php echo $i++; ?></div>
            <div class="col-sm-9">
  
            <p><span style="color:#337AB7; font-weight:bold">Customer:</span> <?php echo $namse=$rows['name']; 
; ?><br>


<span style=" font-weight:bold">Days Left:</span> <span style="color:#f00;"><?php 

$today=date('d-m-Y'); 	
	 $date1 = date_create($rows['occasion_date']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		if($date2>$date1){
			echo "<span class='error'> Expired</span>";
		}
		
		elseif ($date2==$date1){
						echo "<span class='error'>Only today </span>";

		}
		
		else{
			
        $diff = date_diff($date1,$date2);
	
        echo $diff->format("%d days")."&nbsp;"."Left"."<br>";
		
		} 
; ?>
</span>
<span ><a href="?more=<?php echo $rows['id']; ?>&branch=<?php echo $_GET['branch']; ?>" style="color:#f00; font-weight:bold">View More</a>


</p>
            
            </div>
         
          </div>
             <?php
			 
			}
			
			?>
        </div>
      </div>
    </div>
  </div>
</div>

  </body>
</html>
<?php }
else {
		echo $message= "<div class='alert alert-success'>ERROR. Do are not Permitted to see this Page</div>";
	 echo '<meta http-equiv="Refresh" content="4; url=../login.php">';
 }




 ?>
<div class="container-fluid text-center" >
  <div class="row content" >
    <div class="col-sm-2 sidenav">
   <?php
   if(isset($_GET['temp'])=="food"){
	   include 'all_hot.php';
   }
    if(isset($_GET['thing'])){
	   include 'all_foods.php';
   }
   ?>
    </div>
  
  
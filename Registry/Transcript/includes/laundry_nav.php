<?php
@session_start();
include '../includes/dbc.php';

 $query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['userSession']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $email=$userRow['user_email'];
 $level=$userRow['banned'];
 
 }

 if(empty($level)){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

 
if($level=='20' or $level=='8' ){


?> 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:#FF0; font-weight:bold">Laundry Services Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="?best_customers&link=10 Best Customers ">Best Customers</a></li>
      
      
       <li class="active"><a href="?best_staff&link=10 Best  Staff ">Best Staff</a></li>
       
       
       <li class="active"><a href="?our_stocks&link=Our Stock">Our Stock</a></li>
       
      
      
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php" style="color:#fff; font-weight:bold"><i class="icon-off " style="color:#Ff0"></i>  Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
                    <!-- END ALERTS SECTION -->
<?php } 



?>
</ul>
</header>

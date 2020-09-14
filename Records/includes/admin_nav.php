<?php
@session_start();
include '../includes/dbc.php';

 $user=$_SESSION['user_name'];
$dept=$_SESSION['full_name'];

 $_SESSION['full_name']= $names;
  $level=$_SESSION['banned'];
 if($level==20 ){


?> 
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:#FF0; font-weight:bold">Nishang Clouds System Admin Dashboard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       
       
       
       <li class="active"><a href="?our_stocks&link=Our Stock">Our Total Stock </a></li>
       
       
       <li class="active"><a href="?sales_meter&link=Sales Meter">Sales Meter</a></li>
       
      
       <li class="active"><a href=" ?supply_meter&link=Supply Meter">Supply Meter</a></li>
       
         <li class="active"><a href=" ?create_user&link=Create Users">Create Users</a></li>
      
      
       
         <li class="active"><a href=" ?daily_income12&link=Today's Reports">Today's Reports</a></li>
      
         
         
       <li  style="background:#009;"><a href="?Accounts&link=Accssing Other Accounts" style="color:#fff; border:1px solid#fff" >Access Other Accounts</a></li>
       

      
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

<?php

include '../includes/dbc.php';
@session_start();
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}
 $level=$_SESSION['banned'];

	

 if($level=='20' or $level=='6'){
	

?> 
<style>
#myNavbar a{
	color:#FFf;
	font-weight:bold;
	
}
</style>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="#"><img src="../img/image.jpg" style="width:40px; height:40px" /></a>
      <a class="navbar-brand" href="#" style="color:#FF0; font-weight:bold">Nishang Clouds System</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
    
                 
              <li><a href="?record_goods&link=Adding Goods&add_good"> New Stock</a></li>
               <li><a href="?record_goods&link=Adding Goods&add_good"> Single stock Update</a></li>
                  
                   
                          <li class="active"><a href="?sales_meter&link=Sales Meter">Sales Meter</a></li>
       
      
       <li class="active"><a href=" ?supply_meter&link=Supply Meter">Supply Meter</a></li>
       
       

              
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php" style="color:#fff; font-weight:bold"><i class="icon-off " style="color:#Ff0"></i>  Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
                    <!-- END ALERTS SECTION -->
</ul>
</header>
<?php }  ?>
<?php

include '../includes/dbc.php';
@session_start();
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}
 $level=$_SESSION['banned'];

	

 if($level=='20' or $level=='5'){
	

?> 
<style>
#myNavbar a{
	color:#FFf;
	font-weight:bold;
	
}
li{
	border-right:1px solid#000;
}

</style>

 <nav class="navbar navbar-inverse" style="	
 background-color:#fcfcfc;
 filter:progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr=#fcfcfc, endColorstr=#cad8de);
 background-image:-moz-linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:-webkit-linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:-ms-linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:-o-linear-gradient(top, #fcfcfc 57%, #cad8de 100%);
 background-image:-webkit-gradient(linear, right top, right bottom, color-stop(57%,#fcfcfc), color-stop(100%,#cad8de)); color:#033">
  <div class="container-fluid">
    <div class="navbar-header">
    
    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
       <a class="navbar-brand" href="#"><img src="../img/image.jpg" style="width:40px; height:40px" /></a>
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
    
         <li>   <a href=javascript:popcontact('../content/add_oservices.php?roll=C&name=Cash_Sales&rec=C') style="color:#000">   Sell Now</a></li>
         
           <li><a href="?record_exp&link=Record Expenditure" style="color:#033">Record Expenditure</a></li>
           
           
             <li><a href="?record_income&link=Record Income" style="color:#033">Record Income</a></li>
         
           <li style="background:#f00; padding:4px 0px; color:#f00"><a href="?debtors&link=Our Debtors" style="color:#033">Our Debtors</a></li>
           
            <li style="background:#000; padding:4px 0px; color:#f00"><a href="?suppliers&link=Adding Suppliers" style="color:#fff">Our Suppliers</a></li>
          
             <li><a href="?finished&link=Finished Products" style="color:#033">View Finished </a></li>
      
               <li><a href="?our_reports&link=Our Reports" style="color:#033"> Reports</a></li>
               <!--
                    <li><a href="?record_goods&link=Adding Goods&add_good" style="color:#033"> New Stock</a></li>
               <li><a href="?adding_goods&link=Adding%20Goods&add_good" style="color:#033"> Single Update</a></li>
                   <li><a href="?multi_add&link=Multiple stock Update" style="color:#033">Multiple Input</a>
                   </li>
                   
            ---->
       
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../logout.php" style="color:#00F; font-weight:bold"> <i class="icon-user " style="color:#00F"></i> <?php echo $user; ?> | <i class="icon-off " style="color:#F00"></i>   Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
                    <!-- END ALERTS SECTION -->
</ul>
</header>
<?php }  ?>
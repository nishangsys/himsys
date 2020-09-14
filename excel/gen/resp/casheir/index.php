

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
   
    <link rel="stylesheet" media="screen" href="css/left-fluid.css">
    


  <link rel="stylesheet" href="js/boostrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
  <script type="text/javascript">
function updateDIV(myDiv)
{
   var url='delete.php';
   var id = $F($('id'));
   var myAjax = new Ajax.Updater(myDiv, url, {method: 'get', parameters: 'id='+id});
}
</script>
  <style>
  body{
	 background:<?php 
	 $section=$_GET['area'];
   
   if($section=='20' or $section=='15'){
	    echo "url(j.jpg)";
}
if($section=='20' or $section=='10'){		
 echo "url(bgg.JPG)";	
}
if($section=='20' or $section=='2'){
 echo "url(j.jpg)";		
}
if($section=='20' or $section=='18'){		
 echo "url(j.jpg)";		
}     ?>
  }
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
	
	ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 10px 20px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #555;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
  </style>

     <!--[if lt IE 9]>
    	<script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

  </head>
 <?php

if(isset($_SESSION['user_name'])){
;
?>


  
  <body>
<?php include 'header.php'; ?>
  
  <!------------------------------->
<?php include 'sidenav.php'; ?>
  
  
 
      
 <!--------------end etables----------->     
    
     
      
 
    
        <div class="col-sm-6">
        
        
          <div class="well" style=" overflow:hidden; ">
          
          
          
          
          
           
          
          
          
          
   <?php
   if(isset($_GET['cats'])){
	   include 'drinks.php';
   }
  
   if(isset($_GET['open'])){
	   include 'TABS.php';
   }
    if(isset($_GET['product'])){
	   include 'drinks.php';
   }
    if(isset($_GET['command'])){
	   include 'commands.php';
   }
    if(isset($_GET['type'])){
	   include 'drinks.php';
   }
    if(isset($_GET['produc'])){
	   include 'foods.php';
   }
   
    if(isset($_GET['foodd'])){
	   include 'sell_food.php';
   }
   
   if(isset($_GET['compliment'])){
	   include 'compliments.php';
   }
    if(isset($_GET['shapes'])){
	   include 'shapes.php';
   }
   if(isset($_GET['cake_colors'])){
	   include 'cake_colors.php';
   }
   if(isset($_GET['design_colors'])){
	   include 'design_colors.php';
   }
   
   if(isset($_GET['chose'])){
	   include 'chose.php';
   }
   if(isset($_GET['more'])){
	   include 'more.php';
   }
    if(isset($_GET['chat'])){
	   include 'chat.php';
   }
   ?>
                 
          </div>
        </div>
        
        
        
        
       <?php
	   include 'bills.php';
	   
	   ?>

  </body>
</html>
<?php }
else {
		echo $message= "<div class='alert alert-success'>ERROR. Do are not Permitted to see this Page</div>";
	 echo '<meta http-equiv="Refresh" content="4; url=../login.php">';
 }




 ?>
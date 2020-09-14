<?php
$level=$_SESSION['banned'];

 $section=$_GET['area'];
if($section=='20' or $section=='15'){
 $section;
	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar';
	$folder="bar";
	
}
if($section=='20' or $section=='9'){
 $section;
	$a_area='9';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$namess='Bar Waitress';
	$folder="bar";
	
}
else if($section==20 or $section==10){
		 $dashbd;
		$section;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$namess='Restaurant';
	$folder="restau";
	
}

else if($section=='20' or $section=='2'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
	$namess='Bouccarou/ Restau Bar';
	$folder="bauca";
	
}
else if($section=='20' or $section=='18'){
		 echo $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$namess='VIP Bar';
	
	
	
}
if($section==9){
	$sta=1;
}
else {
$sta=3;
}
 $area=$_GET['area'];
  $serial;

?>
<style>

form input[type="text"],
form input[type="email"],
form input[type="number"],
form input[type="search"],
form input[type="password"],
form textarea,
form select {
		background-color: #eee;
		border: 1px solid rgb( 186, 186, 186 );
		border-radius: 1px;
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.08);
		display: block;
		font-size: 1em;
		margin: 6px 0 12px 0;
		padding: .4em .55em;	
		text-shadow: 0 1px 1px rgba(255, 255, 255, 1);
		transition: all 400ms ease;
		width: 65%;
	}
	
form input[type="text"]:focus,
form input[type="email"]:focus,
form input[type="number"]:focus,
form input[type="search"]:focus,
form input[type="password"]:focus,
form textarea:focus,
form select:focus{ 
		border-color: #4195fc;/* the focus color for a input box */
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #4195fc;
		width:65%;
}

form input[type="text"]:invalid:focus,
form input[type="email"]:invalid:focus,
form input[type="number"]:invalid:focus,
form input[type="search"]:invalid:focus,
form input[type="password"]:invalid:focus,
form textarea:invalid:focus,
form select:invalid:focus { 
			border-color: rgb(248,66,66);
			box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1), 0 0 8px rgb(248,66,66);
		}
</style>
  <link href="../assets/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
        <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
  
<ul class="topnav" id="myTopnav">

   <li>
   
        
        <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background:#060">SPLIT BEFORE</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">SPLITING MY TABLE <?php echo $_GET['tabs']; ?></h4>
        </div>
        <div class="modal-body">
         
<?PHP
$table=$_GET['tabs'];
$area=$_GET['area'];
if(empty($table)){
	echo "<span style='color:#f00; font-weight:bold'>SORRY CHOSE A TABLE BEFORE SPLITTING</span>";
}
else {

?>    
    
    
    
    <form method="post" action="">
    <table>
    <tr>
    <td>Split Into</td><td><select name="split" onBlur="doCalc(this.form)" style="width:120px" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day='B';$day<='F';$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td> <td><button type="submit" name="seen" class="btn btn-primary"  >SPLIT</button></td>
    
    </table>
    
    </form>
   
     <?php   
	 if(isset($_POST['seen'])){	
	  $split="$table".$_POST['split'];   
$ress=$con->query("INSERT INTO splits set sp='$split',num='$table',status='1',area='$area' ") or die(mysqli_error($con));
echo "<script>alert('$split SUCCESSFULLY ADDED')</script>";
$num=1;
	 }

	   ?>
     
            
            
        
         
         <?php 
}
	 ?>

</form>
</tr>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
     
 
  <li> <a href="?what=drinks&area=<?php echo $_GET['area']; ?>&temp=hot&tabs=<?php echo $_GET['tabs']; ?>" style="color:#fff">   HOT DRINKS
       </a></li>
       
  <li style="background:#060"><a href="?what=drinks&area=<?php echo $_GET['area']; ?>&temp=cold&tabs=<?php echo $_GET['tabs']; ?>" style="color:#fff">        
       COLD DRINKS
        </a></li>
  <li>
  <a href="?thing=foods&area=<?php echo $_GET['area']; ?>&type=food&tabs=<?php echo $_GET['tabs']; ?>" style="color:#fff">   
         RESTAU FOOD
        </a>
  </li>
  
  <li style="background:#060">
  <a href="?area=<?php echo $_GET['area']; ?>&open" style="color:#fff">Open a Table</a>
  </li>
  
 
       
       
        <li style="background:#FC6"> &nbsp;&nbsp; <i class="fa fa-user fa-2x"></i> <span style="font-size:16px; font-weight:bold; font-style:italic"><?php echo $_SESSION['user_name']; ?></span> | <a href="../../logout.php" style="color:#F00; ">  LOG OUT
       </a></li>
  
  
  
  
  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
  </li>
  
  
</ul>



<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

<!--------------------TOPEST MENU --->

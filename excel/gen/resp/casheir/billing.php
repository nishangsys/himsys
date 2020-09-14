<script type="text/javascript">
function doCalc(form) {
		

  form.bal.value = ((parseInt(form.expamt.value)-parseInt(form.paid.value)));

}
</script>
<script language="javascript" type="text/javascript">
<!-- 
//Browser Support Code
function ajaxFunction(){
   var ajaxRequest;  // The variable that makes Ajax possible!
   try{
   
      // Opera 8.0+, Firefox, Safari
      ajaxRequest = new XMLHttpRequest();
   }catch (e){
      
      // Internet Explorer Browsers
      try{
         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
      }catch (e) {
         
         try{
            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
         }catch (e){
         
            // Something went wrong
            alert("Your browser broke!");
            return false;
         }
      }
   }
   
   // Create a function that will receive data
   // sent from the server and will update
   // div section in the same page.
   ajaxRequest.onreadystatechange = function(){
   
      if(ajaxRequest.readyState == 4){
         var ajaxDisplay = document.getElementById('ajaxDiv');
         ajaxDisplay.innerHTML = ajaxRequest.responseText;
      }
   }
   
   // Now get the value from user and pass it to
   // server script.
   var age = document.getElementById('age').value;
   var wpm = document.getElementById('wpm').value;
   var sex = document.getElementById('sex').value;
   var queryString = "?age=" + age ;
   
   queryString +=  "&wpm=" + wpm + "&sex=" + sex;
   ajaxRequest.open("GET", "ajax-example.php" + queryString, true);
   ajaxRequest.send(null); 
}
//-->
</script>

<?php
 $link=$_SERVER['QUERY_STRING'];
      $ytable= $_GET['db_table'];
	 $ybasket= $_GET['db_basket'];
 $section=$_GET['area'];
 $table=$_GET['tabs'];
 //bar area
if($section=='15'){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$back='15';
	
}
//weitrees
if($section=='9'){

	$a_area='15';
	$page='../sales/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$ybasket='basket';
	$back='9';
	
}
//restau area
if($section=='10'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	
	$back='10';
}
//bouaccarou area
if($section=='2'){

	$a_area='2';
	$page='../bauca/baucapage.php';	
	$db_table='bauca_tables';
	$serial='Bouccarau';
	$db_basket='bauca_basket';
$back='2';
	
}
//VIP Bar or Night Club
if($section=='18'){
		 $dashbd;

	$a_area='18';
	$page='../VIP/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$back='18';
	
	
}

?>
    

    <?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
$con = mysqli_connect('localhost','nishang','google1234','hotels');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "nishang"); // set database user
define ("DB_PASS","google1234"); // set database password
define ("DB_NAME","hotels"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

//////////////////////////////////////////////////////////////////////////////////////////////////////
  $table=$_GET['tabs'];
 $db_basket=$ybasket;

	
	 
	?>
      
       
     <div style="width:98%; height:auto; overflow:hidden; padding-bottom:20px; float:right; border:3px dashed#FF0; outline:1px dashed#000; background:#fff; "  >
    
      
             <div class="clear"></div>
        
        <?php
		if(isset($_GET['tables'])){
			@session_start();
		  $table=$_GET['tabs'];
		  $area=$_GET['area'];
	

	 
		}
		?>
        
        
     

      

      </span>
     </h1>  
 
    	<div class="chat_data">
        
        <A href="index.php?command=<?php echo $table; ?>&area=<?php echo $a_area; ?>&tabs=<?php echo $table; ?>" style="color:#fff" onclick="return confirm('<?php echo $_SESSION['user_name']; ?> Are you Sure ')">
        <div class="col-sm-6" style="padding:10PX 0PX; background:#006; border:1PX solid#fff">
        
      COMMAND
        </div></A>
        
        
        <A href="" style="color:#fff">  
        <div class="col-sm-6" style="padding:10PX 0PX; background:#300;border:1PX solid#fff">   
        
        
       TABLE <?PHP echo $_GET['tabs']; ?> 
        </div></A>
        
        
        
            <?PHP
			$a = $con->query("SELECT SUM(qty),SUM(total),price,product,category,ids,id,price,qty,total FROM ".$db_basket." where tab='".$_GET['tabs']."' and status='1' and qty>0 GROUP BY category,product order by product ") or die(mysqli_error($con));
			$i=1;
			?>
            
            
           
     
   
       <div class="col-sm-12" style="background:#000; padding:0px 0px; text-align:CENTER; border:1px solid#fff">
       <ul class="list-group">
       <?php
		while($rows = $a->fetch_assoc()) {
			?>
     
  <li class="list-group-item" style="background:#000; overflow:hidden;"><span style="float:left; overflow:hidden; color:#FF0; font-weight:bold" >
  <a href="index.php?add=<?php echo $rows['id']; ?>&area=<?php echo $a_area; ?>&tabs=<?php echo $table; ?>&temp=<?php echo $rows['category']; ?>">

  <button type="submit" class="btn btn-default" style="float:left; color:#000; font-size:13px; font-weight:bold " >
  <?php echo $rows['product']; ?><span style="color:#F00; font-weight:bold" > <?php 
  $cate=$rows['category'];
  if($rows['ids']==6){
	  echo '';
	 
  }
  else{
  echo "($cate)";
  }
  //
   
  
  ?></span></button></a>
  
<a href="index.php?reduce=<?php echo $rows['id']; ?>&area=<?php echo $a_area; ?>&tabs=<?php echo $table; ?>&temp=<?php echo $_GET['temp']; ?>&temp=<?php echo $rows['category']; ?>">
 <button type="button" class="btn btn-warning" style="float:right; color:#000; font-size:13px; margin-left:5px "><?php echo $rows['SUM(qty)']; ?></button></a><br /></li>
 
<?php } ?>  
     
            
 </ul>     
      
      
  
 <!--------TOTAL---->   
   <div class="col-sm-12" style="background:#003; padding:0px 0px; text-align:CENTER; border:1px solid#fff">
     <span style="background:#090; padding:15px 20px; float:right; font-size:18px; color:#fff; font-weight:bold ">  
      <?PHP
      	$a = $con->query("SELECT SUM(total) as totbill FROM ".$db_basket." where tab='".$_GET['tabs']."' and status='1' GROUP BY tab") or die(mysqli_error($con));
			
		while($rows = $a->fetch_assoc()) {
			echo $tot=$rows['totbill'];
		}
			?> XAF</span> 
       </div>
       
       <!-----TOTAL--------->
      
  </div> 
    </div>
  <?php
  ?>

       
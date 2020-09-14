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
  
  
   <li>
   
  <!-- Large modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#largeModal">Large modal</button>
 
<div id="largeModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" style="background:#1188aa; color:#fff; text-align:center; font-weight:bold; padding:10px 0px">SPLITING TABLE <?php echo $_GET['tabs']; ?></h4>
            </div>
            <div class="modal-body">
  
  
  
   <div class="col-sm-6">
      <div class="well">
        <h4 style="text-align:center">TABLE <?php echo $table=$_GET['tabs']; ?> A</h4>
        
        
         <table class="table table-bordered" style="line-height:1">
    <thead>
     <?php  
	 echo $db_basket; 	   
 $r=mysql_query("SELECT product,category,qty,price,SUM(total),id,section from ".$db_basket." where  tab='$table' and split!='".$table."b' and status!='2'   group by id order by id DESC   ");
$num=1;

	   ?>   
      <tr>
        <th>Product</th>
        <th>Quatity</th>
        <th>Transfer</th>
      </tr>
    </thead>
    <tbody style="line-height:1">
   <?php   while ($getres=mysql_fetch_assoc($r)){ ?>
    <tr>
        <td><?php echo $getres['product']; ?></td>
        <td><?php echo $getres['qty']; ?></td>
        <td style="padding:0px 0px"><A href="#"> <button type="button" class="btn btn-primary">Transfer</button></A></td>
    </tr>
   <?php } ?>
  <tr>
  <td></td>
  <td></td>
  <td style="background:#090; color:#fff"> <?PHP $mk=mysql_query("SELECT SUM(total) as totals from ".$db_basket." where  tab='$table' and status!='2'  group by tab    ");
	while($bav=mysql_fetch_assoc($mk)){
		echo $prodh=$bav['totals'];
		
	}
	?></td>


  </tr>
    		
       
    </tbody>
  </table>
        
      </div>
      </div>
      
      <div class="col-sm-6">
      <div class="well">
        <h4 style="text-align:center">TABLE <?php echo $_GET['tabs']; ?> B</h4>
           <table class="table table-bordered" style="line-height:1">
    <thead>
     <?php  
	$db_basket; 	   
 $r=mysql_query("SELECT product,category,qty,price,SUM(total),id,section from ".$db_basket." where  tab='$table' and status!='2' and split='".$table."b'   group by id order by id DESC   ");
$num=1;

	   ?>   
      <tr>
        <th>Product</th>
        <th>Quatity</th>
        <th>Transfer</th>
      </tr>
    </thead>
    <tbody style="line-height:1">
   <?php   while ($getres=mysql_fetch_assoc($r)){ ?>
    <tr>
        <td><?php echo $getres['product']; ?></td>
        <td><?php echo $getres['qty']; ?></td>
        <td style="padding:0px 0px"><A href="#"> <button type="button" class="btn btn-primary">Transfer</button></A></td>
    </tr>
   <?php } ?>
  <tr>
  <td></td>
  <td></td>
  <td style="background:#090; color:#fff"> <?PHP $mk=mysql_query("SELECT  SUM(total) as totals from ".$db_table."  where tab='$table' and status!='2' and split='".$table."b'   group by tab  ");
	while($bav=mysql_fetch_assoc($mk)){
		echo $prodh=$bav['totals'];
		
	}
	?></td>


  </tr>
    		
       
    </tbody>
  </table>
      </div>
      </div>
  
  
  
  
  
  
  
  
  
  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>
 
<!--end modal------------>
     
     
        
        <?php
		if(isset($_GET['hist_id'])){
			 $id=$_GET['hist_id'];
			 $tabl=$_GET['table'];
			 $bsk=$_GET['basket'];
			 $d_tab=$_GET['d_tab'];
	 $df=$con->query("UPDATE ".$db_basket." SET split='".$table."b' where id='$id'");
	
		}
		
		if(isset($_GET['go'])){
			 $id=$_GET['go'];
			 $tabl=$_GET['table'];
			 $bsk=$_GET['basket'];
			 $d_tab=$_GET['d_tab'];
	 $df=$con->query("UPDATE ".$db_basket." SET split='".$table."a' where id='$id'");
	 
	 
		}
		
		
		?>
        
        
   
   </li>
       
       
        <li style="background:#FC6"> <a href="logout.php" style="color:#F00; ">  LOG OUT
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

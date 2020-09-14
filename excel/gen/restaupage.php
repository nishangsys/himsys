<?php
$section=$_GET['area'];
 
if($dashbd=='Bar'){

	$a_area='15';
	$page='../bar/restaupage.php';
	$db_table='our_tables';
	$serial='Bar';
	$db_basket='basket';
	$page='restaupage.php';
	
}

if($dashbd=='Bartender'){

	$a_area='9';
	$page='../sales/restaupage.php';
	$db_table='our_tables';
$serial='Waitress';
	$db_basket='basket';
	$page='../sales/restaupage.php';
	
}
if($dashbd=='Restau'){
		 $dashbd;

	$a_area='10';
	$page='../restau/restaupage.php';
	$db_table='restau_table';
	$serial='Restau';
	$db_basket='restau_basket';
	$page='restaupage.php';
	
}

if($dashbd=='Bauca'){
		 $dashbd;

	$a_area='2';
	$page='../bauca/baucapage.php';
	$db_table='bauca_tables';
	$serial='Bauca';
	$db_basket='bauca_basket';
	$page='baucapage.php';
	
}

if($dashbd=='VIP'){
		 $dashbd;

	$a_area='18';
	$page='../bauca/clubpage.php';
	$db_table='other_tables';
	$serial='VIP';
	$db_basket='other_basket';
	$page='clubpage.php';
	
}

?>
     <div style="width:100%; height:600pc; float:left; border:1px dashed#000;background:<?php if
	 ($dashbd=='Restau')
	 {
		 
		 echo "url(../img/pl.jpg);
background-position: center;
background-repeat: no-repeat center";
	 }
	 else{
	 
	 echo "url(../img/vg.jpg);
background-position: center bottom, left top;
background-repeat: no-repeat";
	 }       ?>">
       
      
        <?php
		
	define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "nishang"); // set database user
define ("DB_PASS","google1234"); // set database password
define ("DB_NAME","hotels"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

		$c=$con->query("SELECT * from ".$db_table." ") or die(mysql_error());
		 while($rooms=$c->fetch_assoc()){
			 $status=$rooms['status'];
			  $num=$rooms['num'];
        ?>
        
        
        <a href="<?php echo $page; ?>?table=<?php echo $num; ?>&area=<?php echo $a_area; ?>&name=<?php echo $section; ?>">
  <div class="<?php if($status==2){ echo "stables";}
	  else{
		   echo "stables1";
	  }  ?>" style="width:200px"><?php if($status==2){ echo "Open Table";}
	  else{
		   echo "Close Table";
	  }  ?> <?php echo $num; ?></div></a>
      
             <?php } ?>  
        
        <?php
		if(isset($_GET['table'])){
			
		 $table=$_GET['table'];
	 $area=$_GET['area'];

	 
	  echo '<meta http-equiv="Refresh" content="0; url=../gen/giveouthistab.php?roll='.$table.'&area='.$a_area.'&db_table='.$db_table.'&db_basket='.$db_basket.'">';
		
		
		
		}
		?>
        <div class="clear"></div>
      
        
    
        </div>
     </div>
   </div>
   
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

<?php    ?>
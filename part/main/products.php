<?php
	require_once('auth.php');
	function formatMoney($number, $fractional=false) {
		if ($fractional) {
			$number = sprintf('%.2f', $number);
		}
		while (true) {
			$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
			if ($replaced != $number) {
				$number = $replaced;
			} else {
				break;
			}
		}
		return $number;
	}
	include('connect.php');
?>
<html>
<head>
<title>
POS
</title>
<link href="style.css" media="screen" rel="stylesheet" type="text/css" />
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<body>
	<div id="mainwrapper">
		<div id="topmenu">
			<ul>
				<li>
					<a href="index.php">
						<img alt="Statistics" src="img/pos.png">
						<span>POS</span>
					</a>
				</li>
				<li>
					<a href="inventory.php">
						<img alt="Statistics" src="img/inventory.png">
						<span>Inventory</span>
					</a>
				</li>
				<li>
					<a class="active" href="products.php">
						<img alt="Statistics" src="img/products.png">
						<span>Products</span>
					</a>
				</li>
				<li>
					<a href="salesreport.php">
						<img alt="Statistics" src="img/salesreport.png">
						<span>Sales Report</span>
					</a>
				</li>
			</ul>
		</div>
		<div id="contentmain">
			<div id="main">
				<div id="salesreg" style="width: 769px;">
					<span id="title">Products</span>
					<div id="dt">
						<input type="text" name="barcode" style="width: 360px;" placeholder="Search...." id="filter" tabindex="1" /><a rel="facebox" id="addd" href="addproduct.php">Add Product</a><br><br>
						<div id="tablecon">
						<table class="gridtable" style="width: 723px;" id="resultTable" data-responsive="table">
						<thead>
						<tr>
							<th>Code</th><th>Model</th><th>Description</th><th>Qty</th><th>Unit</th><th>Cost</th><th>Price</th><th style="width: 50px;">&nbsp;</th>
						</tr>
						</thead>
						<tbody>
						<?php
							$result = $db->prepare("SELECT * FROM products");
							$result->execute();
							for($i=0; $row = $result->fetch(); $i++){
						?>
						<tr class="record">
							<td><?php echo $row['code']; ?></td>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['description']; ?></td>
							<td><?php echo $row['qty']; ?></td>
							<td><?php echo $row['Unit']; ?></td>
							<td><?php
							$p=$row['cost'];
							echo formatMoney($p, true);
							?></td>
							<td><?php
							$a=$row['price'];
							echo formatMoney($a, true);
							?></td>
							<td style="text-align: center;">
							<a rel="facebox" title="Click To Edit" href="editproduct.php?id=<?php echo $row['id']; ?>"> <img src="edit.png" /> </a><a href="#" id="<?php echo $row['id']; ?>" class="delbutton" title="Click To Delete"><img src="delete.png" /><br>
							<a href="barcode/html/BCGcode39.php?id=<?php echo $row['code']; ?>">Generate Barcode</a>
							</td>
						</tr>
						<?php
						}
						?>
						<tbody>
						</table>
                        
                        <table>
                        
                          <?php
						  
define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "nishang"); // set database user
define ("DB_PASS","google1234"); // set database password
define ("DB_NAME","hotel"); // set database name

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Couldn't make connection.");
$db = mysql_select_db(DB_NAME, $link) or die("Couldn't select database");

	$today=date('Y');
	$cust="SELECT * from member,members_times where member.matric=members_times.matricule ";
	$run=mysql_query($cust) or die (mysql_error());
	$num=1;
	
	
	?>
       <div class="search_box" style="background:#CC6">
    <form method="post" action="">
    <table>
    <tr>
    <td><input type="text" name="name" style="background:#fff; margin-left:30px; border:1px solid#ccc" placeholder="search a member's matricule......"/></td>
    <td><button type="submit" name="search" />Search Matricule</button></td>
    </tr>
    </table>
    </form>
    </div>
    
     <table >
    <tr style=" font-weight:bold">
  
    <td>S/N</td><TD>Name</td><td>Package</td><td>Days Left</td><td>Matricule</td></tr>
      <?php
	if(isset($_POST['search'])){
		 $name=$_POST['name'];
		 
		$se=mysql_query("SELECT * from members_times where name like '%".$name."%'") or die(mysql_error());
		$i=1;
	}
	?>
	
    <tr >
     <?PHP
	if($i%2==0){
		echo "<tr style='background:#fff;height:30px'>";		
	}
	else {
		echo "<tr style='background:#9CC; height:30px'>";
	}
	?>
    <?php
	while($ro=mysql_fetch_assoc($se)){
	?>
    <td>
    <?php echo $num++; ?></td>
    <td><?php echo $ro['name']; ?></td>
    <td><?php echo $ro['disc']; ?></td>
    <td><?php
    $today=date('d-m-Y'); 	
	 $date1 = date_create($ro['duedate']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		if($date2>$date1){
			echo "<span class='error'>Deadline has Expired</span>";
		}
		
		elseif ($date2==$date1){
						echo "<span class='error'>Only today is left</span>";

		}
		
		else{
			
        $diff = date_diff($date1,$date2);
	
        echo $diff->format(" %m months and %d days")."&nbsp;"."Left"."<br>";
		
		}
		?></td>
    
    
    <td><?php echo $ro['matricule']; ?></td>
    </tr>
    <?php
	} ?>
    
    </table>
   <h1>All Registered Members</h1>
    <table style="width:100%">
    <tr style="background:#D7E2E6; padding:10PX 0PX; height:30px; color:#1188aa; text-align:center; font-weight:bold">
    <td>S/N</td>
    <td>Names</td>
    <td>Address</td>    
    <TD>Package</TD>
    <td>Days Left</td> 
    <td>Status</td>
    <?php while($row=mysql_fetch_assoc($run)){
		
		 ?>
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#FFF; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
    <td><?php echo $row['name']; ?>
   
     </td>
    <td><?php echo $row['adress']; ?></td>
    <td><?php
		$ok=mysql_query("SELECT * from main_cats where id='".$row['cate']."'  ") ;
	while ($m=mysql_fetch_assoc($ok)){
	
		 echo  $m['disc'];
	}?></td>
    <td><?php
		
		$today=date('d-m-Y'); 	
	 $date1 = date_create($row['duedate']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		if($date2>$date1){
			echo "<span class='error'>Deadline has Expired</span>";
		}
		
		elseif ($date2==$date1){
						echo "<span class='error'>Only today is left</span>";

		}
		
		else{
			
        $diff = date_diff($date1,$date2);
	
        echo $diff->format(" %m months and %d days")."&nbsp;"."Left"."<br>";
		
		}
		
		
		 ?>
</td>
<td>
<a href="barcode/html/BCGcode39.php?id=<?php echo $row['matricule']; ?>">Generate Barcode</a>
</td>
   
    
    </tr>
    
    <?php } ?>
    </table>
                        
                        </table>
						</div>

					</div>
				</div>
			</div>
			<div id="footer">
				<span style="display: inline-block; padding-top: 7px; padding-left: 11px;">Welcome&nbsp;&nbsp;<strong><?php echo $_SESSION['SESS_FIRST_NAME'] ?></strong>&nbsp;|&nbsp;<a href="../index.php">Logout</a></span>
				<div style="width: auto; float: right;">				
				<span style="display: inline-block; padding-top: 7px; padding-right: 11px;">&nbsp;&nbsp;<strong>
				<span id=tick2>
				</span>
				<script>
				function show2(){
				if (!document.all&&!document.getElementById)
				return
				thelement=document.getElementById? document.getElementById("tick2"): document.all.tick2
				var Digital=new Date()
				var hours=Digital.getHours()
				var minutes=Digital.getMinutes()
				var seconds=Digital.getSeconds()
				var dn="PM"
				if (hours<12)
				dn="AM"
				if (hours>12)
				hours=hours-12
				if (hours==0)
				hours=12
				if (minutes<=9)
				minutes="0"+minutes
				if (seconds<=9)
				seconds="0"+seconds
				var ctime=hours+":"+minutes+":"+seconds+" "+dn
				thelement.innerHTML=ctime
				setTimeout("show2()",1000)
				}
				window.onload=show2
				//-->
				</script>
				<?php //echo date("g:i a"); ?>&nbsp;|&nbsp;<?php echo date("l F d, Y"); ?></strong></span>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteproduct.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>
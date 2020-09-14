   
    <link rel="stylesheet" media="screen" href="../css/left-fluid.css">

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../css/another.css">
   
	<script type="text/javascript" src="../js/bootstrap.min.js"> bootstrap.min.js</script>
	<script type="text/javascript" src="../js/jquery.min.js"> jquery.min.js</script>
    

<?php
include '../includes/header.php';
?>
<div class="container">
<div class="col-sm-12"> 
<?php
if(isset($_GET['home'])){
	include 'home.php';
}

 if(isset($_GET['suppliers'])){
	   include 'suppliers.php';
   }
   if(isset($_GET['all_suppliers'])){
	   include 'all_suppliers.php';
   }
   if(isset($_GET['receives'])){
	   include 'receives.php';
   }
    if(isset($_GET['receiving'])){
	   include 'receiving_them.php';
   }
     if(isset($_GET['add'])){
	   include 'add.php';
   }
    if(isset($_GET['raw_material'])){
	   include 'raw_materials.php';
   }
    if(isset($_GET['sell'])){
	   include 'selling.php';
   }
     
    
   if(isset($_GET['look'])){
	   include 'to_staff.php';
   }
   if(isset($_GET['chose_staff'])){
	   include 'chose_staff.php';
   }
    if(isset($_GET['our_staff'])){
	   include 'sales.php';
   }
    if(isset($_GET['nonstaff'])){
	   include 'non_staff.php';
   }
    if(isset($_GET['sell_drug'])){
	   include 'chose_who.php';
   }
   if(isset($_GET['cash_sales'])){
	   include 'cash_sales.php';
   }
    if(isset($_GET['daily_reports'])){
	   include 'daily_report.php';
   }
     if(isset($_GET['sector'])){
	   include 'sector.php';
   }
   
    if(isset($_GET['lab'])){
	   include 'lat_tecs.php';
   }
   if(isset($_GET['lab_staff'])){
	   include 'chose_labstaff.php';
   }
  
   if(isset($_GET['who'])){
	   include 'run_qury.php';
   }
    if(isset($_GET['my_labtec'])){
	   include 'to_lab.php';
   }
    if(isset($_GET['name'])){
	   include 'name.php';
   }
    if(isset($_GET['from_ward'])){
	   include 'from_ward.php';
   }
   if(isset($_GET['to_ward'])){
	   include 'from_ward.php';
   }
   if(isset($_GET['our_wards'])){
	   include 'our_ward.php';
   }
    if(isset($_GET['debt'])){
	   include 'debts.php';
   }
?>


	
</div>	


</body>
</html>


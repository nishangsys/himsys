<?php
include '../includes/dbc.php';
@session_start();
$computer=gethostbyaddr($_SERVER['REMOTE_ADDR']);

$localIP = getHostByName(php_uname('n'));

;



if(isset($_GET['cust'])){
	
	$who=$_GET['cust'];
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
}

  $query =$con->query("SELECT * FROM users WHERE id=".$_SESSION['id']) or die(mysqli_error($con));

 while($userRow=$query->fetch_array()){
 
 $whom=$userRow['full_name'];

 
 }
	 
	  $asss=$con->query("SELECT * from daily where id='".$who."'  ") or die(mysqli_error($con));
	while ($bss=$asss->fetch_assoc()){
		$name=$bss['staffname'];
	}
	 $ass=$con->query("SELECT * from daily where staffname='".$name."' and reason='fees'  ") or die(mysqli_error($con));
	

	
	
	?>
 
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <style>
input,select{
	width:90%;
	padding:5px 5px;
}
</style>
       <br />
  


  
  
</div>

 
        <div class="col-sm-12">
        
     <div class='alert alert-success' style="font-weight:bold; font-size:16px">Fee Payment history of  <?php echo $bs['staffname']; ?></div>
 <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
          <th>Name</th>
        <th>Matricule</th>
        <th>Amount Paid</th>
        <th>Registration</th>

        <th>Bank</th>
                <th>Date Paid</th>

        <th>Receipt Presented On</th>

      
      </tr>
    </thead>
   <?php while ($bu=$ass->fetch_assoc()){ ?>
    <tbody>
      <tr>
      <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="Aquamarine">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
      <td><?php echo $i++; ?></td>
       <td><?php echo $bu['staffname']; ?></td>
        <td><?php echo $bu['cust_id']; ?></td>
        <td><?php echo $bu['amt']; ?></td>
        <td><?php echo $bu['discount']; ?></td>
        <td><?php echo $bu['company']; ?></td>
        <td><?php echo $bu['date']; ?></td>
        <td><?php echo $bu['paidtou']; ?></td>
       
       
      </tr>
     <?php } } ?> 
    </tbody>
  </table>
  
 
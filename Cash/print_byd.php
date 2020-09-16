<?PHP
include  '../includes/dbc.php';
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MY PAYSLIP</title>
<link href="style.css" type="text/css" rel="stylesheet" />
  <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="../assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

<style type="text/css">
  @page { size: portrait; }
  .sub{
	  width:600px;
	  height:900px;
	 
	  margin:auto;
	  
  }
  .head1{
	  width:100%;
	  height:auto;
	 
  }
  
   .head2{
	  width:100%;
	  height:auto;
	
	  padding-bottom:20px;
  }
  table,tr,th,td{
	  border:1px solid#000;
	  border-collapse:collapse;
  }
</style>
</head>

<body>
<div class="sub">

<?php include 'header.php'; 

 	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM years where status='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear_name=$bu['year_name'];
	 $year_id=$bu['id'];
	
}
?>
    
    
    
    
    
    
    
      <?php $d=$con->query("SELECT * FROM special, daily where daily.reason='".$_GET['type']."' 
		and daily.prog_id='".$_GET['dept']."' AND special.id=daily.prog_id GROUP BY prog_id ORDER BY special.prog_name   ") or die(mysqli_error($con));
		while($rop=$d->fetch_assoc()){
?>
    
    <h3><?php echo $rop['prog_name']; ?> <?php echo $_GET['type']; ?> Reports for <?php echo $ayear_name; ?></h3>
    <?php } ?>
    
    <div class="head2" style="margin-top:20px">
    <?php $d=$con->query("SELECT * FROM special, daily where daily.reason='".$_GET['type']."' 
		and daily.prog_id='".$_GET['dept']."' AND special.id=daily.prog_id ORDER BY special.prog_name   ") or die(mysqli_error($con));
$i=1;
?>
                                               <table  style="width:100%" style="line-height:1.5">
                                             <thead>
                                              <tr>
                                            <th>#</th>
                                                    <th>Student</th>
                                                   <th>Department</th>
                                                     <th>Purpose</th>
                                                  <th>Amt Paid</th>
                                                                                                                            

                                            <th>Date</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

                                           <tr>
       
                                                 <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['staffname']; ?></td>
                                                 <td><?php  echo $bu['prog_name']; ?></td>
                                                      <td><?php  echo $bu['reason']; ?></td>
                                                           <td><?php  echo number_format($bu['rec']); ?></td>
                                                              <td><?php  echo $bu['date']; ?></td>
                                           
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                             
                             
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                
                                <?php $d=$con->query("SELECT SUM(price),SUM(rec),SUM(amt) FROM daily where reason='".$_GET['type']."' and prog_id='".$_GET['dept']."' GROUP BY year ") or die(mysqli_error($con));
$i=1;
?>
  <table class="table table-bordered">                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
                                                      <td>GROSS TOTAL</td>
                                                           <td style="background:#00F; color:#fff; font-weight:bold"><?php  echo number_format($bu['SUM(price)']); ?> XAF</td>
                                                                                                              <td>TOTAL CASH</td>
                                                           <td style="background:#00F; color:#fff; font-weight:bold"><?php  echo number_format($bu['SUM(rec)']); ?> XAF</td>
                                                                                                              <td>TOTAL BANK</td>
                                                           <td style="background:#00F; color:#fff; font-weight:bold"><?php  echo number_format($bu['SUM(amt)']); ?> XAF</td>
                                           
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                  
                                </table>
                         

    
    </div>


</div>
</body>
</html>

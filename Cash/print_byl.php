<?PHP
include  '../includes/dbc.php';
session_start();
$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $vil=$rows['as2'];
 }

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
</style>
</head>

<body>
<div class="sub">
	<div class="head1">
    	<div style="  height:130px; width:19%; float:left; border:1px dashed#000;  ">
<IMG src="../logo.png" style="margin:AUTO ; width:120PX; height:120PX"  />
</div>

		<div style="  height:auto; width:79%; float:left; border:;  ">

<div style="  height:AUTO; width:100%; float:left; text-align:center; background:#333; color:#FFF; 
  border:1px DASHED#000;text-transform:uppercase; font-size:18px; font-weight:bold  ">  <?php echo $clients; ?> RECORDS FOR  <?php echo $_GET['type']; ?> </div>


<div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;   "> <?php echo $AD; ?></div>
  
  <div style="   width:100%; float:left; text-align:center;  
  border:1px DASHED#000; font-size:16px;  "> <?php echo $TEL; ?></div></div>


    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    <div class="head2">
   
        <?php $d=$con->query("SELECT * FROM daily where reason='".$_GET['type']."' and area='".$_GET['level']."'  ") or die(mysqli_error($con));
$i=1;
?>

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
                                        <tr>
                                            <th>#</th>
                                                    <th>Student</th>
                                                   <th>Department</th>
   <th>Level</th>
                                                  <th>Cash Paid</th>
 <th>Bank Pmt</th>
                                                                                                                                                 

                                            <th>Date</th>
                                            
                                            <th>Payment Mode</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['staffname']; ?></td>
                                                 <td><?php  echo $bu['room']; ?></td>
                                                      <td><?php  echo $bu['area']; ?></td>
                                                           <td><?php  echo $bu['rec']; ?></td>
        
         <td><?php  echo $bu['amt']; ?></td>
                                                              <td><?php  echo $bu['date']; ?></td>
            
             <td><?php  echo $bu['company']; ?></td>
                                           
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                             
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                
                                <?php $d=$con->query("SELECT SUM(price),SUM(rec),SUM(amt) FROM daily where reason='".$_GET['type']."' and area='".$_GET['level']."' GROUP BY year ") or die(mysqli_error($con));
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

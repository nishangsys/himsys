﻿<?php
include '../includes/dbc.php';

?>

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
                    <meta http-equiv="refresh" content="5">

    <![endif]-->
</head>
        <script src="../js/pop-up.js"></script>

     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


       
                        <div class="panel-body">
                            <div class="table-responsive">
                            
                            
                            
                            
                            
                            
                            
                            
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php
		$reason=$_GET['reason'];
				$year_id=$_GET['year_id'];

		 $d=$con->query("SELECT SUM(amt),staffname,company,date,paidto,cust_id,discount FROM daily where company='$reason' and year='$year_id' and reason='fees' and company!='' GROUP BY id order by staffname") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                <th>Student's Name</th>
                                <th>Matricule</th>
                       
                                       <th>Amt Paid</th>                                        <th>Registration</th>
                                        
                                          <th>Date </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
             <td><?php  echo $bu['staffname']; ?></td>
             <td><?php  echo $bu['cust_id']; ?></td>
             <td><?php  echo number_format($bu['SUM(amt)']); ?></td>
             <td><?php  echo $bu['discount']; ?></td>
            
             <td><?php  echo $bu['date']; ?></td>
           
                                
                                            
                                            
                                            </td>
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
                                
                                 
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                             <?php
		$reason=$_GET['reason'];
				$year_id=$_GET['year_id'];

		 $d=$con->query("SELECT SUM(amt),SUM(discount) FROM daily where company='$reason' and year='$year_id' and reason='fees' and company!='' GROUP BY company") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){ 
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                               
                       <th >Total Amt of Fees</th>
               <th style=" background:#093; color:#fff"><?php echo number_format($bu['SUM(amt)']);  ?> Frs</th>
               
                <th >Total Amt of Registration</th>
               <th style=" background:#039; color:#fff"><?php echo number_format($bu['SUM(discount)']);  ?> Frs</th>
                                                       <th>#</th>
                                        
                                          <th>#</th>
                                    <th># </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php } ?>
                   
                            </table>
                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>

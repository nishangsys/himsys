<?php
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
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


       
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php $d=$con->query("SELECT * FROM special, daily where daily.reason='".$_GET['type']."' 
		and daily.prog_id='".$_GET['dept']."' AND special.id=daily.prog_id ORDER BY special.prog_name   ") or die(mysqli_error($con));
$i=1;
?>
 <thead> <tr>
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

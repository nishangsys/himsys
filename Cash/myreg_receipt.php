<?php

include '../includes/dbc.php';
	 //////////select academic year//////////////
$d=$con->query("SELECT * FROM years where status='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $ayear_name=$bu['year_name'];
	 $ayear=$bu['id'];
	
}

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
        <?php
		 $ayear;
		 $d=$con->query("SELECT * from levels,special,years,students,our_accounts,daily  where  year_id='$ayear' AND   daily.exp='' and daily.reason='registration' and daily.method=our_accounts.id  AND daily.cust_id= students.matricule AND students.level_id=levels.id and students.dept_id=special.id  AND students.year_id=years.id 
		 
		") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                                    <th>Student</th> <th>Rec #</th>
                <th>Reason</th>                                <th>Payments<br>Method</th>
                 <th>Bank</th>
                                                                                                                            

                                            <th>Date</th>
                                            
                                                <th>Amt Paid</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
          <td style="text-transform:capitalize"><?php  echo $bu['staffname']; ?></td>
<td><?php  echo $bu['matricule']; ?></td> 
<td><?php  echo $bu['reason']; ?></td>
  <td><?php  echo $bu['name']; ?></td>
   <td><?php  echo $bu['rec']; ?></td>
                                                              <td><?php  echo $bu['date']; ?></td>
                                           
                                                         <td><a href="../Cash/reg_print.php?id=<?php  echo $bu['id']; ?>" target="new">  <button type="submit" class="btn btn-success" name="do" class="btn btn-success">Registration Receipts</button></a></td>
                                           
                                                   
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
                                
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                
                                <?php $d=$con->query("SELECT SUM(discount) as regs,SUM(adminp) as adminp,SUM(tshirt) as tshirt,SUM(sunion) as sunion FROM daily where reason='registration' and year='$ayear'  ") or die(mysqli_error($con));
								while($bu=$d->fetch_assoc()){ 
			$totreg=$bu['regs'];
			$totadmin=$bu['adminp'];
			$totshirt=$bu['tshirt'];
			$totsunion=$bu['sunion'];
								}
$i=1;
?>
  <table class="table table-bordered">                                       <?php ?>

      <tr>
       
                                                      <td>REGISTARTION</td>
                                                           <td style="background:#00F; color:#fff; font-weight:bold"><?php  echo number_format($totreg); ?> XAF</td>
                                                                                                              <td>ADMISSION PACK</td>
                                                           <td style="background:#00F; color:#fff; font-weight:bold"><?php  echo number_format($totadmin); ?> XAF</td>                                                                                                  <td>T-SHIRT</td>
                                                           <td style="background:#00F; color:#fff; font-weight:bold"><?php  echo number_format($totshirt); ?> XAF</td>
     
     
     <td>STUDENT UNION</td>
                                                           <td style="background:#00F; color:#fff; font-weight:bold"><?php  echo number_format($totsunion); ?> XAF</td>                                      
                                            
                                        </tr>
                                     
                                  
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

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
        <?php $d=$conn->query("SELECT * FROM special,levels, students where students.year_id='$ayear' AND special.id=students.dept_id and levels.id=students.level_id ") or die(mysqli_error($conn));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Department</th>
                              
                              <th>Level</th>
                             
                                         <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
          <td><?php  echo $bu['fname']; ?></td>
                    <td><?php  echo $bu['prog_name']; ?></td>

          <td><?php  echo $bu['levels']; ?></td>
         
                                            <td> 
          <a href=javascript:popcontact('../Records/edit_level.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button class="btn btn-success" >Change Level</button></a> 
          <a href=javascript:popcontact('../Records/edit_dept.php?cust=<?php echo $bu['id']; ?>&dept=<?php  echo $bu['dept_id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button class="btn btn-primary" >Change Dept</button></a></td>
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
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

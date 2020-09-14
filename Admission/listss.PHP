<?php
include '../includes/dbc.php';

?>
<script language="JavaScript" src="../js/pop-up.js"></script>

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
       
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                  <?php $d=$con->query("SELECT * FROM gen_info  order by id") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                            <th>Student Name</th>
                            <th>Email</th>
                                                        <th>Amount Paid</th>
                                                                                    <th>Date Paid</th>


                           
                          <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($row=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
            <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['departmet']; ?></td>
        <td style="text-align:center">
        
        <a href=javascript:popcontact('stu_profile.php?roll=<?php echo $row['student_id']; ?>')>
        
        <button class="btn btn-primary"  >View Profile </button></a></td>

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

<?php
  
		  if(isset($_GET['delete'])){
	 $code=$_GET['delete'];
	$suject=$_GET['name'];
	$syaer=$_GET['year_id'];
	 $matric=$_GET['matric'];
	 $dept=$_GET['dept'];
	 
	 $del=$con->query("DELETE FROM teacher_students WHERE id='$code' ") or die(mysqli_error($con));
	 echo '<meta http-equiv="Refresh" content="0; url=index.php?tutor_course&dept='.$dept.'">'; 
		  }
?>


        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

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

<?php
//include '../includes/dbc.php';
$d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	  $ayear=$bu['year'];
	 $year=$bu['extra'];
	$year2=$bu['extra2'];
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
	
	
		 $d=$conn->query("SELECT * FROM courses where matricule='' and db1='$ayear' ") or die(mysqli_error($conn));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                       <th>Name</th>
                                       <th>Program</th>                                        <th>Matricule</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
             <td><?php  echo $bu['fname']; ?></td>
             <td><?php  echo $bu['departmet']; ?></td>
             <td><?php  echo $bu['matricule']; ?></td>
                                            <td style="color:#F00; font-weight:bold">
                <?php
				 
				  
					 $dgh=$conn->query("SELECT * FROM courses where fname='".$bu['names']."' and db1='$ayear' ") or die(mysqli_error($conn));
					 
					
					if($dgh->num_rows>0){
						echo "ALREADY MATRICULATED";
					}
					else {?>
         <a href="?phadmit&cust=<?php echo $bu['roll']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button class="btn btn-success" >Admit</button></a>
         <?php } ?>
                                            
                                            
                                            
                                            </td>
                                            
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

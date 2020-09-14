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

<div class="alert alert-info">
  Assigning <?php if($term==1){ echo "First";  } else if($term==2) { echo"Second";}else { echo "Third";
  }?> Semester Level <?php echo $level;?> <?php echo $dep;?> students to <?php echo $name;?>
  
  </div> 
            <?php $d=$con->query("SELECT * FROM subject where subject.department='$dep' and subject.year1='$level'  ") or die(mysqli_error($con));
		
$i=1;
?>



 <?php $d=$con->query("SELECT * FROM teacher_students where  status='2' and code!='' ") or die(mysqli_error($con));
$i=1;
?>   
          <h3><?php echo $name;?> Assigned students </h3>
     
            <div class="table-responsive">
                                
                          
                                
                                
                                <table class="table table-bordered">
    <thead>
      <tr>
              <th>#</th>

        <th>Subject</th>
        <th>Code</th>
        
      </tr>
    </thead>
    <tbody>
    
      <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
         <?php
		if($i%2==0)
 {
     echo '<tr bgcolor="PaleGreen">';
 }
 else
 {
    echo '<tr bgcolor="White">';
 }
		
		?>
           <td><?php  echo $i++; ?></td>
                                            <td><a href="?assigning_course&delete=<?php echo $bu['id']; ?>&dept=<?php echo $_GET['dept']; ?>&sign=<?php echo $bu['subject']; ?>&name=<?php echo $bu['ayear']; ?>&program=<?php echo $dep; ?>&yname=<?php echo $name; ?>&level=<?php echo $bu['levels']; ?>&term=<?php echo $bu['term']; ?>" style="font-weight:bold; color:#033"><?php echo $bu['subj']; ?></a></td>
                                            <td><?php echo $bu['code']; ?></td>
                   
      </tr>
        <?php } ?>
      
    </tbody>
  </table></div>
                            </div>
          <?php 
		  
		  if(isset($_GET['delete'])){
	 $code=$_GET['delete'];
	$suject=$_GET['name'];
	$syaer=$_GET['ayear'];
	 $matric=$_GET['matric'];
	 $dept=$_GET['dept'];
	 
	 $del=$con->query("DELETE FROM teacher_students WHERE id='$code' ") or die(mysqli_error($con));
	 echo '<meta http-equiv="Refresh" content="0; url=index.php?assigning_course&dept='.$dept.'&yname='.$_GET['yname'].'&term='.$termm.'&level='.$lev.'&program='.$_GET['program'].'">'; 
		  }
		  
		  
		  if(isset($_GET['ok'])){
	$semester=$_GET['semester'];
	$syaer=$_GET['ok'];
	 $name=$_GET['yname'];
	 
	 $fj=$con->query("UPDATE teacher_students set status='2' where name='$name' and code!=''   ") or die(mysqli_error($con));
	 echo "<script>alert('Form successfully created')</script>";
	 echo '<meta http-equiv="Refresh" content="0; url=index.php?assign&dept='.$_GET['dept'].'">';
	 
		  }
; ?>














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

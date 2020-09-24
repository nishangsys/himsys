
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


                      <a href="?nf&link= Registering A foreigner student" >  <button type="button" class="btn btn-primary btn-circle btn-xl" style="color:#00F"> Add New Foreigner  <i class="icon-plus"></i>
                            </button></a>


                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php
		
		 $d=$conn->query("SELECT * FROM courses where db1='$ayear' and cxx4!=''  order by roll asc") or die(mysqli_error($conn));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                       <th>Name</th>
                                       <th>Program</th>                                        <th>Matricule</th>
                                  <th>School Year</th>
                                  <th>Level</th>
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
              <td><?php  echo $bu['db1']; ?></td>
              <td><?php  echo $bu['levels']; ?></td>

                                            <td>
                            
         <a href="?foreigners&link= Foreigners&del=<?php  echo $bu['matricule']; ?>&ay=<?php  echo $bu['db1']; ?>" style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button class="btn btn-danger" >Delete</button></a>
                                            
                                            
                                            
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

     <?PHP
	 if(isset($_GET['del'])){
		 $matric=$_GET['del'];
		  $ay=$_GET['ay'];
	$query=$conn->query("DELETE FROM courses  WHERE 
matricule='$matric' AND db1='$ay'  " ) or die(mysqli_error($conn));

 $query555=$conn->query("DELETE FROM historic  WHERE 
matricule='$matric' AND oldb='$ay'  " ) or die(mysqli_error($conn));

echo '<meta http-equiv="Refresh" content="0; url=?foreigners&link= Foreigners">';	
	
	 }
	 ?>
<?php

include '../includes/dbc.php';
  $a1=mysql_query("SELECT * FROM rushs where roll='1'") or die(mysql_error());
 while ($ad=mysql_fetch_assoc($a1)){
	 $ad1[''];
	$current=$ad['year'];
	 $as=$ad['extra'];
	$ass=$ad['extra2'];
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
		echo $ayear;5555;
		 $d=$con->query("select  * from income_classes,daily WHERE income_classes.name=daily.purpose and daily.year='$current' and purpose like '%$sector%' order by daily.id DESC") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                                    <th>Student</th>
                <th>Receipt Num</th>                                <th>Amt Paid</th>
                                                                                                                            

              <th>Application<br>Date</th>
                                            
                    <th>Printed<br>Date</th>                              <th>Amt Paid</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
          <td style="text-transform:capitalize"><?php  echo $bu['staffname']; ?></td>
<td><?php  echo $bu['id']; ?></td>                                                
                                                         <td><?php  echo $bu['price']; ?></td>
                                                              <td><?php  echo $bu['date']; ?></td>
             <td> <a href="?del=<?php  echo $bu['id']; ?>"  onClick="return confirm('Are you sure you want to delete')">  <button type="submit" class="btn btn-danger"  class="btn btn-success">Delete</button></a></td>                                
                                                         <td><?php if($bu['status']==2){
		?>													 <a href="#">  <button type="submit" class="btn btn-danger" name="do" class="btn btn-danger">Printed</button></a>
       <?php
														 }
	   else {
	   ?> 
       <a href="?id=<?php  echo $bu['id']; ?>"  onClick="return confirm('Are you sure you want to <?php  echo $bu['staffname']; ?> print records')">  <button type="submit" class="btn btn-success"  class="btn btn-success">Print it</button></a>
       
       
       
       
       
       
        <?php } ?>
        </td>
                                           
                                                   
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                </table>
                                
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                
                                <?php 
		if(isset($_GET['del'])){
			$id=$_GET['del'];
			$today=date('d-m-Y');
			$d=$con->query("DELETE FROM daily  where id='$id'") or die(mysqli_error($con));
			echo '<meta http-equiv="Refresh" content="0; url=?">';
			
		}
                                     ?>
                                  
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

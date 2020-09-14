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
        <script src="../js/pop-up.js"></script>

     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">

<div class="row">
	

<script type="text/javascript">

$( document ).ready(function() {
$('input.typeahead').typeahead({
source: function (query, process) {
return $.get('search_data.php', { query: query }, function (data) {
data = $.parseJSON(data);
return process(data);
});
},
showHintOnFocus:'all'
});
});
</script>
       </form>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
        </h3>
        <?php
		
		 $d=$conn->query("SELECT * FROM students  GROUP BY fname order by id asc") or die(mysqli_error($conn));
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
              <td><?php  echo $bu['year_id']; ?></td>
              <td><?php  echo $bu['levels']; ?></td>

                                            <td>
         <a href=javascript:popcontact('../Acc/scholarships.php?cust=<?php echo $bu['id']; ?>') style="color:#fff; text-decoration:blink text-align:center; font-weight:bold;"><button class="btn btn-success" >Received Fees</button></a>                 
                                            
                                            
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


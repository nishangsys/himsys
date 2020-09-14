 <?php include '../includes/dbc.php'; ?>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../css/another.css">
   
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="../assets/css/layout2.css" rel="stylesheet" />
       <link href="../assets/plugins/flot/examples/examples.css" rel="stylesheet" />
       <link rel="stylesheet" href="../assets/plugins/timeline/timeline.css" />
 
 <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <header>
                                <h5>Daily Daily Expenditure Reports for <?php echo date('d-m-Y'); ?> | <a href="../content/p_dailyEXP.php?date=<?php  echo date('d-m-Y'); ?>" style="text-decoration:none">Print a Copy <i class="icon-copy "></i></a></h5>
                                <div class="toolbar">
                                    <div class="btn-group">
                                        <a href="#sortableTable" data-toggle="collapse" class="btn btn-default btn-sm accordion-toggle minimize-box">
                                            <i class="icon-chevron-up"></i>
                                        </a>
                                    </div>
                                </div>
                            </header>
                            <div id="sortableTable" class="body collapse in">
                                <table class="table table-bordered sortableTable responsive-table">
                                    <thead>
                                 
                                        <tr>
                                            <th>#<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                            <th>Date<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                          <th>Amount Spent<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
                                              <th>Item Spent On<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>
     
     
     <th>Qty<i class="icon-sort"></i><i class="icon-sort-down"></i> <i class="icon-sort-up"></i></th>                                   </tr>
                                    </thead>
                                    <tbody>


                      <?php
 $date=date('d-m-Y');
 $today=abs(date('d'));
 $month=date('m');
 $year=date('Y');
 $dates=$today."-".$month."-".$year;
 

 $dates=abs($date);
   $dm=$con->query("SELECT * FROM daily where  exp>0 and month='$month' order by id DESC") or die(mysqli_error($con));
   $i=1;
while($bum=$dm->fetch_assoc()){
	
?>                     <tr>
                               <td><?php echo $i++; ?></td>
                              <td><?php echo $bum['date']; ?></td>
                
                           <td><?php echo $bum['exp']; ?></td>
                         <td><?php echo $bum['reason']; ?></td>               
                         
    <td><?php echo $bum['qty']; ?></td>                                     
                         </tr>

  <?php } ?>

                              
                                  <?php
 $date=date('d-m-Y');
   $dm=$con->query("SELECT SUM(exp) FROM daily where month='$month' and exp>0 GROUP BY month") or die(mysqli_error($con));
   $i=1;
while($bum=$dm->fetch_assoc()){
	
?>                     <tr>
                               <td><?php echo $i++; ?></td>
                              <td><?php echo $bum['date']; ?></td>
                <td>Reports</td>
                           
                         <td style="background:#f00; color:#fff"><?php echo number_format($bum['SUM(exp)']); ?> XAF</td>               </tr>

  <?php } ?>

                                
                               </tbody>  
                                </table>
                            </div>
                        </div>
                        </div>
                        </div>
                        
                        
 
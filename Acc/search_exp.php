  <?php
  include '../includes/dbc.php';
  $d=$con->query("SELECT * FROM rush where roll='1'") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){
	 $year_id=$bu['year'];
	 $year=$bu['extra'];
	 $year2=$bu['extra1'];
}
  ?>
   <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <link rel="stylesheet" href="../assets/css/theme.css" />
    <link rel="stylesheet" href="../assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="../assets/plugins/Font-Awesome/css/font-awesome.css" />

  
  
  
  
  
  
  
  
  
 <link href="../assets/css/jquery-ui.css" rel="stylesheet" />
<link rel="stylesheet" href="../assets/plugins/uniform/themes/default/css/uniform.default.css" />
<link rel="stylesheet" href="../assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
<link rel="stylesheet" href="../assets/plugins/chosen/chosen.min.css" />
<link rel="stylesheet" href="../assets/plugins/colorpicker/css/colorpicker.css" />
<link rel="stylesheet" href="../assets/plugins/tagsinput/jquery.tagsinput.css" />
<link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" href="../assets/plugins/datepicker/css/datepicker.css" />
<link rel="stylesheet" href="../assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
<link rel="stylesheet" href="../assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />


 <form action="" method="post" class="form-horizontal" id="block-validate">
                    

                <div class="form-group">
                        <label class="control-label col-lg-4" >Chose Month</label>

                        <div class="col-lg-3">
                            <div class="input-group input-append  date" id="dpMonths" data-date="102/2012"
                                 data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">
                                   <span class="input-group-addon add-on"><i class="icon-calendar"></i></span>
                                <input class="form-control" type="text" value="<?php echo date('d-m-Y') ?>" readonly="" name="date" />
                              
                            </div>
                        
                  
<div class="form-group">
    <label class="control-label col-lg-4">Expenditure Head</label>

    <div class="col-lg-8">
        <select data-placeholder="Your Favorite Type of Bear" class="form-control chzn-select" tabindex="7" name="head">
        
        
          <?php
	$result= $con->query("select * from `spendingcats` order by cat" ) or die (mysql_error());
					
								while ($row=$result->fetch_assoc()){
	?>
             <option value="<?php echo $row['cat']; ?>"><?php echo $row['cat']; ?></option>
   <?php } ?>
        </select>
    </div>
         
                    <button type="submit"  name="go" class="btn btn-primary btn-lg " /> <i class="icon-search"></i> See Records</button>

</div>


<?php
 $dated=$_POST['date'];
 $reason=$_POST['head'];
  $dated;
				$date = explode('/', $dated);
	$month = $date[0];
	 $year  = $year_id;
					
					
					
					 ?> 





<div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <header>
                                <h5> <?php echo $reason; ?> Reports for <?php echo $month; ?> <?php echo $year_id; ?> | <a href="../Cash/p_dailyEXP.php?month=<?php echo $month; ?>&year_id=<?php echo $year_id; ?>&head=<?php echo $reason; ?>" target="new" style="text-decoration:none">Print a Copy <i class="icon-copy "></i></a></h5>
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

 $dates=abs($date);
   $dm=$con->query("SELECT * FROM daily where  exp>0 and month='$month' and year='$year_id' AND purpose='$reason' order by id DESC") or die(mysqli_error($con));
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
   $dm=$con->query("SELECT SUM(exp) FROM daily where month='$month' and year='$year_id' and exp>0 AND purpose='$reason' GROUP BY month") or die(mysqli_error($con));
   $i=1;
while($bum=$dm->fetch_assoc()){
	
?>                     <tr>
                               <td><?php echo $i++; ?></td>
                              <td><?php echo $bum['date']; ?></td>
                <td>TOTAL</td>
                           
                         <td style="background:#f00; color:#fff"><?php echo number_format($bum['SUM(exp)']); ?> XAF</td>               </tr>

  <?php } ?>

                                
                               </tbody>  
                                </table>
                            </div>
                        </div>
                        </div>
                        </div>















  <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->


      <!-- PAGE LEVEL SCRIPT-->
 <script src="../assets/js/jquery-ui.min.js"></script>
 <script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="../assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="../assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="../assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="../assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="../assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
<script src="../assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="../assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="../assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="../assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="../assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="../assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="../assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>

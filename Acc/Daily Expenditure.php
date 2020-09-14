 <div class="row">
                    <div class="col-lg-12">
                        <div class="box">
                            <header>
                                <h5>Daily Daily Expenditure Reports for <?php echo date('d-m-Y'); ?> | <a href="p_dailyEXP.php?date=<?php  echo date('d-m-Y'); ?>" style="text-decoration:none" target="new">Print a Copy <i class="icon-copy "></i></a></h5>
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
   $dm=$con->query("SELECT * FROM daily where  exp>0 and date='$date' or date like '$dates'") or die(mysqli_error($con));
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
   $dm=$con->query("SELECT SUM(exp) FROM daily where date='$date' and exp>0 GROUP BY date") or die(mysqli_error($con));
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
                        
                        
 
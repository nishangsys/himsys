   <!-- RIGHT STRIP  SECTION 
  	<META HTTP-EQUIV="REFRESH" CONTENT="5">-->
        <div id="right" style="position:absolute; right:0px">

           
             <div class="well well-small">
             
             <?php
			 $today=date('d-m-Y');
              $doU=$con->query("SELECT * from basket where date='$today' and ids='inuse' and status='0' ") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	  
	  $a=$con->query("SELECT * from hair_style WHERE name='".$nam['product']."' ") or die(mysqli_error($con));
  while($b=$a->fetch_assoc()){
	  $min=$b['min'];
	  $max=$b['max'];
  }
	  
	  		 $curenttime= $nam['time'];
			  
  $time_ago =strtotime($curenttime);
 $cur_time 	= time();
$time_elapsed 	= $cur_time - $time_ago;
$seconds 	= $time_elapsed ;
 $minutes 	= round($time_elapsed / 60 );
 $hours 		= round($time_elapsed / 3600); 
			
             ?>
               <div class="row">
              
    <div class="col-sm-12">
     <a href="index.php?plattnow&link=Working on my customer&type= <?php echo $nam['froms']; ?>&name=<?php echo $nam['agent']; ?>&sid=8&style= <?php echo $nam['product']; ?>&roll=<?php echo $nam['tab']; ?>&min=<?php echo $min; ?>&max=<?php echo $max; ?>" style="text-decoration:none">
      <div class="panel panel-primary">
        <div class="panel-heading"> <?php echo $nam['froms']; ?></div>
       
        <div class="panel-footer">Cust: <span style="color:#F00"><?php echo $nam['agent']; ?></span><br />
 Style: <strong><?php echo $nam['product']; ?></strong>  <br />    
 
 <span style="color:#f00"> <strong> <?php echo $hours; ?> Hours <?php echo $minutes; ?> Min 
     </strong>
     </span>   
        
        </div>
      </div>
       </a>
            </div>
            </div>
           
            <?php } ?>
            
            <div class="well well-small">
            
    <?php    
	$year=date('Y');      /////////////for updates
  $doU=$con->query("SELECT SUM(rec),SUM(exp),SUM(owed),SUM(total) FROM daily WHERE year='".$year."' GROUP BY year") or die(mysqli_error($con));
  while($nam=$doU->fetch_assoc()){
	 $income=$nam['SUM(rec)'];
	 $exp=$nam['SUM(exp)'];
	$debt=$nam['SUM(owed)'];
	$total=$nam['SUM(total)'];
	$perin=number_format((($income/$total)*100),2);
$perxp=number_format((($exp/$total)*100),2);
$perdebt=number_format((($debt/$total)*100),2);
  }
  ?>
                <span>% Income</span><span class="pull-right"><small><?php echo $perin ?>%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-info" style="width: <?php echo $perin ?>%"></div>
                </div>
                <span>% Expenditure</span><span class="pull-right"><small><?php echo $perxp ?>%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-warning" style="width: <?php echo $perxp ?>%"></div>
                </div>
                <span>% Debt</span><span class="pull-right"><small><?php echo $perdebt ?>%</small></span>

                <div class="progress mini">
                    <div class="progress-bar progress-bar-danger" style="width:<?php echo $perdebt ?>%"></div>
                </div>
               
          
            
         

        </div>
         <!-- END RIGHT STRIP  SECTION -->
    </div>
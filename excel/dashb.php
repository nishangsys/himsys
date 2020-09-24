
  <?php 
  $today=$_GET['date'];;
  $branch=$_GET['branch'];
	$year=date('Y'); 
	$m=date('m'); 
	
	
 $_SESSION['full_name']= $names;
  $level=$_SESSION['banned'];
  
 if($level!=20){
 }
 else {
	  ?>
      
      
      
       <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               FINANCIAL ANALYSIS AND REPORTS DASHBOARD 
                            </div>
                            
                            
    
    
    <a href="?income_statement&link=Income Statement" style="text-decoration:none; color:#000">
    
        <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">FINANCIAL ANALYSIS FOR <?PHP echo $m ?>/<?PHP echo $year ?></div>
       
            <div class="well well-small" style="height:220px; overflow:scroll">
            
    <?php    
	    /////////////for updates
  $doU=$con->query("SELECT SUM(rec),SUM(exp),SUM(owed),SUM(total) FROM daily WHERE year='".$year."' and month='$m' GROUP BY month") or die(mysqli_error($con));
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


  <div class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perin ?>%;">
                </div>
                </div>
                <span>% Expenditure</span><span class="pull-right"><small><?php echo $perxp ?>%</small></span>

                <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perxp ?>%"></div>
                </div>
                <span>% Debt</span><span class="pull-right"><small><?php echo $perdebt ?>%</small></span>

               <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perdebt ?>%"></div>
                </div>        

        </div>
        <div class="panel-footer"> All rights Reserved by Nishang Clouds</div>
      </div>
    </div>
</a>    
    
    
    
    
    
    
        <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">FINANCIAL ANALYSIS FOR <?PHP echo $year ?></div>
       
            <div class="well well-small" style="height:220px; overflow:scroll">
            
    <?php    
	    /////////////for updates
  $doU=$con->query("SELECT SUM(rec),SUM(exp),SUM(owed),SUM(total) FROM daily WHERE year='".$year."'  GROUP BY year") or die(mysqli_error($con));
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

                <div class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perin ?>%"></div>
                </div>
                <span>% Expenditure</span><span class="pull-right"><small><?php echo $perxp ?>%</small></span>

                 <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perxp ?>%"></div>
                </div>
                <span>% Debt</span><span class="pull-right"><small><?php echo $perdebt ?>%</small></span>

              <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perdebt ?>%"></div>
                </div>        

        </div>
        <div class="panel-footer"> All rights Reserved by Nishang Clouds</div>
      </div>
    </div>
    
    
    
    
    
    
    
    <a href="?view_apps&link=Viewing Appointments" style="text-decoration:none; color:#000">
    
      <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo date('F Y')  ?>  APPOINTMENTS</div>
       
            <div class="well well-small" style="height:220px; overflow:scroll">
            
              <div class="row">
              <table class="table table-bordered">
              
              <?php 
			 $month=date('m');
			$year=date('Y');
			  $d=$con->query("SELECT * FROM commands where month='$month' and year='$year' order by id ") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Name</th>
       <th>Event</th> 
           
            <th>Days Left</th> 
         
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['name']; ?></td>
                                        
                                            <td><?php  echo $bu['message']; ?></td>
                                      
                                            <td><?php 

$today=date('d-m-Y'); 	
	 $date1 = date_create($bu['date']);
        //echo "Start date: ".$date1->format("d-m-Y")."<br>";
        $date2 = date_create($today);
		
        //echo "End date: ".$date2->format("d-m-Y")."<br>";
		if($date2>$date1){
			echo "<span class='error'> Expired</span>";
		}
		
		elseif ($date2==$date1){
						echo "<span class='error'>Only today </span>";

		}
		
		else{
			
        $diff = date_diff($date1,$date2);
	
        echo $diff->format(" %d days")."&nbsp;".""."<br>";
		
		} 
; ?></td>
                             
      
       </td>
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                    </table>
 
          </div>
  
            
    
        </div>
        <div class="panel-footer"> All rights Reserved by Nishang Clouds</div>
      </div>
    </div>
    
    </a>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <a href="#" style="text-decoration:none; color:#000">
    
      <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">  BEST CUSTOMERS OF <?php echo date('Y')  ?></div>
       
            <div class="well well-small" style="height:220px; overflow:scroll">
            
              <div class="row">
              <table class="table table-bordered">
              
              <?php 
			$year=date('Y');
			  $d=$con->query("SELECT COUNT(agent),agent FROM basket where year='$year' and agent!='' group by agent order by COUNT(agent) DESC LIMIT 5 ") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Name</th>
       <th>Number of Visits</th> 
           
                               </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['agent']; ?></td>
                                        
                                            <td><?php  echo $bu['COUNT(agent)']; ?></td>
                                      
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                    </table>
 
          </div>
  
            
    
        </div>
        <div class="panel-footer"> All rights Reserved by Nishang Clouds</div>
      </div>
    </div>
    
    </a>
    
    
    
    
    
    
    
    
    
    
    
      <a href="?best_staff&link=10 Best  Staff" style="text-decoration:none; color:#000">
    
      <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">  BEST WORKERS OF <?php echo date('Y')  ?></div>
       
            <div class="well well-small" style="height:220px; overflow:scroll">
            
              <div class="row">
              <table class="table table-bordered">
              
              <?php 
			$year=date('Y');
			  $d=$con->query("SELECT COUNT(froms),froms FROM basket where year='$year' and froms!='' and ids='inuse' group by froms order by COUNT(froms) DESC LIMIT 5 ") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Name</th>
       <th>Clients Serve</th> 
           
                               </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['froms']; ?></td>
                                        
                                            <td><?php  echo $bu['COUNT(froms)']; ?></td>
                                      
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                    </table>
 
          </div>
  
            
    
        </div>
        <div class="panel-footer"> All rights Reserved by Nishang Clouds</div>
      </div>
    </div>
    
    </a>
    
    
    
    
    
    
    
    
    
    
    
      <a href="?debtors&link=Our Debtors" style="text-decoration:none; color:#000">
    
      <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"> OUR DEBTORS </div>
       
            <div class="well well-small" style="height:220px; overflow:scroll">
            
              <div class="row">
              <table class="table table-bordered">
              
              <?php $d=$con->query("SELECT SUM(owed),staffname FROM daily where owed>0 and staffname!='' group by staffname order by id DESC") or die(mysqli_error($con));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Name</th>
         <th>Amount Owed</th> 
        
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['staffname']; ?></td>
                                        
                                            <td><?php  echo $bu['SUM(owed)']; ?></td>
                                           
     
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                    </table>
 
          </div>
  
            
    
        </div>
        <div class="panel-footer"> All rights Reserved by Nishang Clouds</div>
      </div>
    </div>
    
    </a>
    <?php } ?>
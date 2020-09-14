
  <?php 
  $today=$_GET['date'];;
  $branch=$_GET['branch'];
	$year=date('Y'); 
	$m=date('m'); 
	
	
	  ?>
      
      
      
       <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                               FINANCIAL ANALYSIS AND REPORTS DASHBOARD 
                            </div>
                            
                            
    
    
    <a href="?income_statement&link=Income Statement" style="text-decoration:none; color:#000">
    
        <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">FINANCIAL ANALYSIS FOR <?PHP echo $ayear ?></div>
       
            <div class="well well-small" style="height:220px; overflow:scroll">
            
    <?php    
	    /////////////for updates
  $doU=$conn->query("SELECT SUM(amount_paid),SUM(balance),SUM(olddebt),(SUM(amount_paid)+SUM(balance)) as tot FROM historic WHERE year_id='".$ayear."' ") or die(mysqli_error($conn));
  while($nam=$doU->fetch_assoc()){
	 $income=$nam['SUM(amount_paid)'];
	 $exp=$nam['SUM(balance)'];
	$debt=$nam['SUM(olddebt)'];
	$total=$nam['tot'];
	$perin=number_format((($income/$total)*100),2);
$perxp=number_format((($exp/$total)*100),2);
$perdebt=number_format((($debt/$total)*100),2);
  }
  ?>
                <span>% Amt Paid</span><span class="pull-right"><small><?php echo $perin ?>%</small></span>


  <div class="progress progress-striped active">
		<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perin ?>%;">
                </div>
                </div>
                <span>% Amt Owed</span><span class="pull-right"><small><?php echo $perxp ?>%</small></span>

                <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $perxp ?>%"></div>
                </div>
                <span>% Amt of Registration Fee</span><span class="pull-right"><small><?php echo $perdebt ?>%</small></span>

               <div class="progress progress-striped active">
		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $perdebt ?>%"></div>
                </div>        

        </div>
        <div class="panel-footer"> All rights Reserved by Programmer</div>
      </div>
    </div>
</a>    
    
    
    
    
    
    
    
    
    
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <a href="#" style="text-decoration:none; color:#000">
    
      <div class="col-sm-7"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $ayear; ?> Most Enrolled Programs</div>
       
            <div class="well well-small" style="height:220px; overflow:scroll">
            
              <div class="row">
              <table class="table table-bordered">
              
              <?php 
			$year=date('Y');
			  $d=$conn->query("SELECT COUNT(matricule) as tot,departmet FROM students where year_id='$ayear' GROUP BY departmet order by  COUNT(matricule) DESC") or die(mysqli_error($conn));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Program</th>
       <th>Number of Students</th> 
           
                               </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['departmet']; ?></td>
                                        
                                            <td><?php  echo $bu['tot']; ?></td>
                                      
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                    </table>
 
          </div>
  
            
    
        </div>
        <div class="panel-footer"> All rights Reserved by Programmer</div>
      </div>
    </div>
    
    </a>
    
    
    
    
    
    
    
    
    
    
    
       <a href="#" style="text-decoration:none; color:#000">
    
      <div class="col-sm-7"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $ayear; ?> Most Programs with Most Fees Paid</div>
       
            <div class="well well-small" style="height:500px; overflow:scroll">
            
              <div class="row">
              <table class="table table-bordered">
              
              <?php 
			$year=date('Y');
			  $d=$conn->query("SELECT class,SUM(amount_paid) as paid,SUM(balance) as owed FROM historic where year_id='$ayear' GROUP BY class order by  SUM(amount_paid) DESC") or die(mysqli_error($conn));
$i=1;
?>
 <thead>
                                        <tr>
                                            <th>#</th>
                                             <th>Program</th>
       <th>Fee Amt Paid Sofar</th> 
              <th>Fee Amt Owed Sofar</th> 

           
                               </tr>
                                    </thead>
                                    <tbody>
                                       <?php while($bu=$d->fetch_assoc()){ ?>

      <tr>
       
           <td><?php  echo $i++; ?></td>
                                            <td><?php  echo $bu['class']; ?></td>
                                        
              <td><?php  echo number_format($bu['paid']); ?></td>
                                              
               <td class='warn'><?php  echo number_format($bu['owed']); ?></td>
                                      
                                            
                                        </tr>
                                     
                                       <?php } ?>
                                    </tbody>
                                    </table>
 
          </div>
  
            
    
        </div>
        <div class="panel-footer"> All rights Reserved by Programmer</div>
      </div>
    </div>
    
    </a>
    
    
    
    
    
    
    
    
    
    
    
  
            
    </div></div>
      
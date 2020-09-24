  <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> User Profile </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Settings </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="../logout.php"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="../img/default.png" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $who; ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href="index.html" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                
                
                
                
                


                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Settings Center
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="?add_sect"><i class="icon-angle-right"></i> Add Sections </a></li>
                        
                           <li class=""><a href="?sethour"><i class="icon-angle-right"></i> Set Hourly Fee </a></li>
                        
                          <li class=""><a href="?add_dept"><i class="icon-angle-right"></i> Add Department </a></li>
                        
                        
    <li class=""><a href="?income_class"><i class="icon-angle-right"></i>                       Add Income Classes</a>
    
    
      <li class=""><a href="?add_class&link=Add%20Expenditure%20Class"><i class="icon-angle-right"></i> Add Expenditure Classes</a>
    
                        
    <li class=""><a href="?sectl"><i class="icon-angle-right"></i> Sections & Levels</a>
	   
       
                  
    <li class=""><a href="?addl"><i class="icon-angle-right"></i> Add  Levels</a>
	   
                       
                        </li>  
                    </ul>
                </li>
                
                
                     
      <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-warning-sign"></i> Expenditure
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-primary">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="?add_class&link=Add Expenditure Class"><i class="icon-angle-right"></i> Add Expenditure Class </a></li>
                        <li><a href="?record_expense&link=Registry Expenditure"><i class="icon-angle-right"></i> Registry Expenditure  </a></li>
                      
                      
                          <li><a href="?review_exp&link=Registry Expenditure"><i class="icon-angle-right"></i> View Expenditure  </a></li>
           <li><a href="?print_v&link=Registry Expenditure"><i class="icon-angle-right"></i> Print Vouchers  </a></li>             
                    </ul>
                </li>

                
                        
                          <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
                        <i class="icon-check-empty"></i> Reports Center
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="blank-nav">
                       
                        <li><a href="?indiv&link= Student Fee Payment History"><i class="icon-angle-right"></i> Student Fee Pmt Hist </a></li>
                        <li><a href="?cashs&link=Cash Received Reports "><i class="icon-angle-right"></i> Cash Received Reports </a></li>
                        
                         <li><a href="?regis&link= Registration Fee Report"><i class="icon-angle-right"></i> Registration Fee</a></li>
                         
                         
                              <li><a href="?income&link= Income Reports"><i class="icon-angle-right"></i> Income Reports</a></li>
                         
                           <li><a href="?complete&link=Cash Completed Fees Reports "><i class="icon-angle-right"></i> Completed Fees</a></li>
                        
                         <li><a href="?uncomplete&link= Uncompleted Fees Report"><i class="icon-angle-right"></i> Uncompleted Fees</a></li>
                    </ul>
                </li>
                          
                            <li class="panel ">
    
      <a href="?debtors&link=Debtors Reports" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-close"></i> Debtors Reports
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                            <li class="panel ">
    
      <a href="?set_fees&link=Set Fees per Program" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-cog"></i> Set Fees per Program
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                        
                        <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Fee Bank Statement
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                           <?php
					$d=$con->query("SELECT * FROM daily where reason='Fees' and company!='' and year='$ayear' GROUP BY company") or die(mysqli_error($con));
while($bu=$d->fetch_assoc()){



?>
                        <li class=""><a href="?state&link=<?php echo $bu['company']; ?> Reports&reason=<?php echo $bu['company']; ?>"><i class="icon-angle-right"></i> <?php echo $bu['company']; ?> </a></li>
                     <?php } ?>
                    </ul>
                </li>





                        
                            <li class="panel ">
    
      <a href="?others&link=Access Other Sectors" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-user"></i> Access Other Sectors
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                                       
                        
                        
        
                        
                        
                     
                        
                        
                        
                   
                            <li class="panel ">
                    <a href="?stats" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-bar-chart   "> </i> Statistics
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                        
                         <li class="panel ">
                    <a href="?settings&link=Setting Zone" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil   "> </i> Setting Zone
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>       
                        
                        
                      
                
                  <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Charts
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">



                        <li><a href="../libchart/stats/mu.php" target="new"><i class="icon-angle-right"></i> Yearly Expenditure </a></li>
                        <li><a href="../libchart/stats/ver.php" target="new"><i class="icon-angle-right"></i> Amt paid Vrs Amt Owed</a></li>
                        <li><a href="../libchart/stats/exp.php" target="new"><i class="icon-angle-right"></i> Month Expense Reports </a></li>
                        <li><a href="../libchart/stats/yeexp.php" target="new"><i class="icon-angle-right"></i> Yearly Global Expense </a></li>
                    </ul>
                </li>                      
        

                
                <!--
                <li class="panel ">
                    <a href="?new_user" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-user"></i> My Profile   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> --->         


            </ul>

        </div>
        
        <!--END MENU SECTION -->
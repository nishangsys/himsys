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
                    <h5 class="media-heading"> <?php echo $user; ?></h5>
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
                    <a href="?pay" >
                        <i class="icon-table"></i> PAY PART TIMERS
	   
                       
                    </a>                   
                </li>
                
                 
                <li  style="background:#F00"> <a href="../Fees/first.php" style=" color:#FFF; font-weight:bold" >FEES CENTER  </a>
 </li>
        
                
                 <li class="panel ">   
      <a href="?academic_year&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-briefcase "></i>  Set Academic Year
<span class="pull-right">
 </span>
 </a>
     </li> 
     
     
          
      <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-warning-sign"></i> Expenditure
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-primary">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="?add_class&link=Add Expenditure Class"><i class="icon-angle-right"></i> Add Expenditure Class </a></li>
                        <li><a href="?record_expense&link=Records Expenditure"><i class="icon-angle-right"></i> Records Expenditure  </a></li>
                        
                          <li><a href="?print_v&link=Records Expenditure"><i class="icon-angle-right"></i> Print Vouchers  </a></li>
                      
                    </ul>
                </li>
     
     
        
                 <li class="panel ">   
      <a href="?daily&link=Daily Reports" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-briefcase "></i>  Daily Reports
<span class="pull-right">
 </span>
 </a>
     </li> 
     
          <!---    
       <li class="panel ">   
      <a href="?new" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-copy  "></i> Register Student
<span class="pull-right">
 </span>
 </a>
     </li> --->
     
     
              
                   <li class="panel ">   
                  <a href="?income_class" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
              <i class="icon-copy  "></i> Sources of Income
            <span class="pull-right">
             </span>
             </a>
                 </li> 
                            
                
                        
                        
     			<li class="panel ">
    
     				 <a href="?cash_record" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-dollar"></i> Receive Payments
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>         
                        
                                        
                        
                        
                        
                      
     <li class="panel ">
    
      <a href="?receipts&link=Print Receipts" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-dollar"></i> Print Receipts
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                                        
                                       
                        
                
                        

                        
                        
                        
      
                        
                        
                          <li class="panel ">
                    <a href="?print_class" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"> </i> Print Reports 
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>    
                        
                        
                        
                          <li class="panel ">
                    <a href="?print_area" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"> </i> Print Zone
	   
                        <span class="pull-right">
                        </span>
                        </a>
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
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
                    <a href="index.html" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                
                 <li class="panel ">   
      <a href="?academic_year&dept=<?php echo $_GET['dept'];?>" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-briefcase "></i>  Set Academic Year
<span class="pull-right">
 </span>
 </a>
     </li> 
     
     
              
       <li class="panel ">   
      <a href="?income_class" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
  <i class="icon-copy  "></i> Sources of Income
<span class="pull-right">
 </span>
 </a>
     </li> 
                
    <li class="panel ">
    
      <a href="?add_mclass&link= Adding Main Expenditure Class" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-cog"></i>  Add Main Expen Class
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                         <li class="panel ">
    
      <a href="?add_classes&link= Adding Expenditure Class" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-cog"></i>  Add Expenditure Class
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
     <li class="panel ">
    
      <a href="?cash_record" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-dollar"></i> Cash Payments
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>                      
                        
                        
                        
                        
            
      <li class="panel ">
                    <a href="?bank_accounts" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-user"></i> Add a bank Account  
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>                       
                        
                        
                        
                        
                           
                        
            
      <li class="panel ">
                    <a href="?deposits" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
           <i class="icon-briefcase"></i> Bank Deposits  
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>                       
                                     
                        
         
      <li class="panel ">
                    <a href="?withdrawal" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav" style="color:#f00; font-weight:bold">
           <i class="icon-folder-open"></i> Bank Withdrawal 
	   
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
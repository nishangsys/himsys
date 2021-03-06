

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

<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">View Registered List</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color:#F00; font-weight:bold"><?php echo $ayear;  ?> Enrolled Lists</h4>
      </div>
      <div class="modal-body">
       
 <iframe src="../Registry/current.php?ayear=<?php echo $ayear;  ?>" allowFullScreen style="width: 100%;
			float:left;
			background: #FFF;
            border:none;
            height:1200px;
            overflow:hidden;
			border-radius: 5px;
		
 "></iframe>
         
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

        <!-- MENU SECTION -->
       <div id="left" >
            <div class="media user-media well-small">
                
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $who; ?></h5>
                   
                </div>
                
            </div>

            <ul id="menu" class="collapse">

                  <li class="panel active" >
                    <a href="#" style="background:#ff0; color:#000" >
                        <i class="icon-calender"></i> <?php echo $ayear; ?> School year
	   
                       
                    </a>                   
                </li>
                <li class="panel active" >
                    <a href="?academic_year" style="background:#F00" >
                        <i class="icon-table"></i> Set School Year
	   
                       
                    </a>                   
                </li>
                
                
                
                
                
       
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Admission Center
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
<li class=""><a href="?new&link= New Intake"><i class="icon-angle-right"></i>Undergraduate New Intake </a></li>

<li class=""><a href="?pgnew&link= New Intake"><i class="icon-angle-right"></i>Postgraduate New Intake </a></li>


                       
<li class=""><a href="?contacts"><i class="icon-angle-right"></i>Students Contacts </a></li>


                        <li class=""><a href="?old&link= Returning Student"><i class="icon-angle-right"></i> Returning Student</a></li>
                        
                     
                     <!--   
                          <li class=""><a href="?move&link= Returning Student"><i class="icon-angle-right"></i> 	Move to Next Level</a></li>
                  
                          <li class=""><a href="?getdata"><i class="icon-angle-right"></i>Get Data ONLINE</a></li>
                           <li class=""><a href="?print_ent" ><i class="icon-angle-right"></i>PRINT ENTRANCE LISTS</a></li>        
                          
                          
                          -->
                        
                      
                         
                     <li class=""><a href="?foreigners&link= Foreigners"><i class="icon-angle-right"></i> Foreigners</a></li>
                    
                    
      <li class=""><a href="?others&link=%20Add%20Missing%20Names"><i class="icon-angle-right"></i> Add Missing Name</a></li>                            
                     
                                            
<li class="" style="background:#066; color:#fff"><a href="?pnew&link= New Intake" style="color:#fff; font-weight:bold"><i class="icon-angle-right"></i> Post Graduate </a></li>

<li class=""><a href="?c_list"><i class="icon-angle-right"></i> Under Graduate Class List</a></li>                            

<li class=""><a href="?pgc_list"><i class="icon-angle-right"></i> Post Graduate Class List</a></li>                            
                                        </ul>
                </li>
         
                
               
                
              
            
                    <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Set Transcript/ GPA
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">3</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                      
                        <li><a href="?diploma"><i class="icon-angle-right"></i> Set Diploma Conferred </a></li>
                        
                        <li><a href="?set_prog"><i class="icon-angle-right"></i> Set Programs GPA scale  </a></li>
                        
                        <li><a href="?set_cv"><i class="icon-angle-right"></i> Set Total Credit Value  </a></li>
                          <li><a href="prints.php" target="new"><i class="icon-angle-right"></i> Print Programs  </a></li>
                    </ul>
                </li>
                
                
                
               
               
               <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL-nav">
                        <i class=" icon-sitemap"></i> Importation Center
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                    </a>
                    <ul class="collapse" id="DDL-nav">
                        <li>
                            <a href="#" data-parent="#DDL-nav" data-toggle="collapse" class="accordion-toggle" data-target="#DDL1-nav">
                                <i class="icon-sitemap"></i>&nbsp; Import Marks/Courses
	   
                        <span class="pull-right" style="margin-right: 20px;">
                            <i class="icon-angle-left"></i>
                        </span>


                            </a>
                            <ul class="collapse" id="DDL1-nav">
                            
                            <li>
                                    <a href="?import_marks"><i class="icon-angle-right"></i>Upload CA With Exams</a></li>
                                      
                               <li>
                                    <a href="?import_subjects"><i class="icon-angle-right"></i> Non-Public Health Subjects </a></li>
                                <li>
                                
                                  <li>
                                    <a href="?import_exams"><i class="icon-angle-right"></i> S.H.S Exams ONLY </a></li>
                                <li>   
                                
                                <li>
                                    <a href="?sms_exams"><i class="icon-angle-right"></i> S.M.S Exams ONLY </a></li>
                                <li>    
                                
                         
                          <li>
                                    <a href="?import_names"><i class="icon-angle-right"></i> Import Names </a></li>
                                <li>     
                                
                                    <li>
                                    <a href="?import_resits" style="color:#F00; font-weight:bold" ><i class="icon-angle-right" ></i>Import Resit Marks</a></li>
                                
                                                            </ul> 
                                
                                
                                             

                        </li>
                        
                        
                        
                        
                    </ul>
                </li>

               
               
               
               
             
             
             
              <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-warning-sign"></i> Transcripts / Results
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-warning">5</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                     
                         
                         
                          <li><a href="?add_edit"><i class="icon-angle-right"></i> Add Course/ Edit Marks  </a></li>
                         
                         
                            <li><a href="?result_slip"><i class="icon-angle-right"></i> Individual Results Slip </a></li>
                            
                             <li><a href="?general_slip"><i class="icon-angle-right"></i> General Results Slip </a></li>
                             
                            
                            <li><a href="?hnd"><i class="icon-angle-right"></i> Record HND results </a></li>
                        
                           <li><a href="?transcript"><i class="icon-angle-right"></i> Print Transcripts </a></li>
                           
                           
                       <li><a href="?build"><i class="icon-angle-right"></i> Build GPA </a></li>
                           
     <!---                      
                           <li><a href="?ranking"><i class="icon-angle-right"></i> Graduation Lists </a></li>
  ---->                         
                           
                            <li><a href="?spread"><i class="icon-angle-right"></i> Spread Sheet </a></li>
                              
                               <li><a href="?frequency"><i class="icon-angle-right"></i> Frequency Distribution </a></li>
                       
                       
                            <li><a href="?m_sheet"><i class="icon-angle-right"></i> Marks Sheet </a></li>
                            
                             <li><a href="?resits_results"><i class="icon-angle-right"></i> Result Resits </a></li>
                             
                                 <li><a href="?round_up"><i class="icon-angle-right"></i> Round Up to 50 </a></li>
                              <li><a href="?active_students"><i class="icon-angle-right"></i> Active Students</a></li> 
                    </ul>
                </li>
           
                        
    <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-bar-chart"></i> Edit Center
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">4</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">

<li><a href="?edits&link=Edit Students"><i class="icon-angle-right"></i> Edit Student Name</a></li>
 <li><a href="?add_edit"><i class="icon-angle-right"></i> Add Course/ Edit Marks  </a></li>
                         
  <li><a href="?edit_course"><i class="icon-angle-right"></i> Edit Course </a></li>  
    <li><a href="?add_course"><i class="icon-angle-right"></i> Add Course </a></li>                  
                        <li><a href="?edit_nonpubhmks"><i class="icon-angle-right"></i> Edit Non Pub Health Mks </a></li>
                    </ul>
                </li>         
               
       
       
          <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#blank-nav">
                        <i class="icon-check-empty"></i> Public Health Center
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                         &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="blank-nav">
                     <li class=""><a href="?others&link=others"><i class="icon-angle-right"></i> Public Health Admission</a></li> 
     
     
     
                            <li><a href="?presult_slip"><i class="icon-angle-right"></i> Individual Results Slip </a></li>
                            
                             <li><a href="?pgeneral_slip"><i class="icon-angle-right"></i> General Results Slip </a></li>                                  
                        <li>
                                    <a href="?pbm_marks"><i class="icon-angle-right"></i> Public Health Marks  </a>

                                </li>
                              
                              <li>      <a href="?pbs_subjects"><i class="icon-angle-right"></i> Public Health Subjects  </a>

                                </li>
                                     <li><a href="?edit_pubhmks"><i class="icon-angle-right"></i> Edit Public Health Mks</a></li>  
                                     
                                     <li><a href="?buib_matricule"><i class="icon-angle-right"></i>Assign BUIB Matricule</a></li>  
                    </ul>
                </li>

                       
          
        <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Graduation Center
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">6</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <li><a href="?course_validation"><i class="icon-angle-right"></i> Course Validation </a></li>
                        <li><a href="pages_timeline.html"><i class="icon-angle-right"></i> Timeline </a></li>
                        <li><a href="pages_social.html"><i class="icon-angle-right"></i> Social </a></li>
                        <li><a href="pages_pricing.html"><i class="icon-angle-right"></i> Pricing </a></li>
                        <li><a href="pages_offline.html"><i class="icon-angle-right"></i> Offline </a></li>
                        <li><a href="pages_uc.html"><i class="icon-angle-right"></i> Under Construction </a></li>
                    </ul>
                </li>        
               
               
               
            
                                               
                     
      <li class="panel ">
    
      <a href="?others&link= Add Missing Names" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-plus"></i> Add Missing Names
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
        
                         <li class="panel ">
                    <a href="?edits&&link=Change Department/Level" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil   "> </i> Change Department/Level
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>          
                        
                        
                        
                                       
                        
                        
       
                        
                        
                        
                           <li class="panel ">
    
      <a href="../Admin/index.php" target="new" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav" style="background:#060; color:#fff">
                       <i class="icon-cog"></i> Access Application
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                                   
                        
                        
                          
                            <li class="panel ">
    
      <a href="?c_list&link=Setting Pass Mark Per Program" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-close"></i> Class Lists
	   
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
           <i class="icon-user"></i> Setting Zone   
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>     
                        
                        
                          
                            <li class="panel ">
    
      <a href="?evaluate" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-close"></i> Evaluate Ca Uploads
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                              <li class="panel ">
    
      <a href="?evaluate_exams" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-close"></i> Evaluate Exams Uploads
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
      <!--                  <li class="panel ">
    
      <a href="?single&link=Single Mark Input" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-pencil"></i> Single Mark Input
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                         <li class="panel ">
    
      <a href="?resit&link=Print Resit Forms" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-open"></i> Resit Forms
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                          
                            <li class="panel ">
    
      <a href="?edit&link=Edit Marks" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-folder-close"></i> Edit Marks
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li> 
                        
                        
                        
                            <li class="panel ">
    
      <a href="?upload&link=Upload Resits Results
	   " data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                       <i class="icon-save"></i> Upload Resits Results
	   
                        <span class="pull-right">
                        </span>
                        </a>
                        </li>   ----->


            </ul>

        </div>
        
        <!--END MENU SECTION -->
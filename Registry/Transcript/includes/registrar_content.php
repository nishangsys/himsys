
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                    
                      <div class="row">
        <div class="col-sm-4">
          <div class="well">
         <h4 style="font-family:Georgia, 'Times New Roman', Times, serif; color:#060">  <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"> </a> <?php echo $secto; ?> LOGIN</h4>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="well">
            <p>
            <h4 >
            <strong>School Year: <span style="color:#f00"><?php echo $ayear; ?></span></strong>
            
            
            | &nbsp;&nbsp;&nbsp;&nbsp; 
            
            
             <strong>Semester: <span style="color:#f00"><?php if($semester==1){
				 echo "First Semester";
			 }
			 else {
				 echo "SECOND SEMESTER";
			 }; ?></span></strong>
            </h4>
            </p>
          </div>
        </div>
      </div>
                      
                    </div>
                </div>
               <H3 style="margin:0PX"> HIMS SCHOOL MANAGEMNT SYSTEM <i class="icon-fast-forward"></i> <span style="color:#f00"> <?PHP echo $_GET['link']; ?></span></H3>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    
                    <?php
					
	
	if(isset($_GET['reports'])){
	include '../Acc/reports.php';
	}
	if(isset($_GET['indiv'])){
	include '../Acc/indiv.php';
	}
	if(isset($_GET['state'])){
	include '../Acc/state.php';
	}	
	if(isset($_GET['cashs'])){
	include '../Acc/cash.php';
	}
	
	if(isset($_GET['debtors'])){
		include '../Acc/debtors.php';
	}
	
	if(isset($_GET['others'])){
		include '../Provost/other_users.php';
	}
	if(isset($_GET['dashb'])){
		include '../Registrar/dashb.php';
	}
	if(isset($_GET['reports'])){
	include '../Exams/reports.php';
	}
	if(isset($_GET['regis'])){
		include '../Acc/regist.php';
	}
	if(isset($_GET['complete'])){
		include '../Acc/complete.php';
	}
	if(isset($_GET['uncomplete'])){
		include '../Acc/uncomplete.php';
	}
	
	if(isset($_GET['stats'])){
		include '../Fees/stats.php';
	}
	if(isset($_GET['tstats'])){
		include '../Provost/tstats.php';
	}
	
	if(isset($_GET['attendance'])){
		include '../Provost/attendance.php';
	}		
	if(isset($_GET['settings'])){
	include '../Registry/settings.php';
	}		
	if(isset($_GET['all_teachings'])){
	include '../Registrar/semester.php';
	}
	if(isset($_GET['view_teachrs'])){
	include '../Registrar/view_teachrs.php';
	}
			
	if(isset($_GET['search'])){
	include '../Registrar/search_tut.php';
	}
	if(isset($_GET['add_subj'])){
	include '../Registrar/add_subj.php';
	}
	if(isset($_GET['remove_subj'])){
	include '../Registrar/remove_subj.php';
	}
	if(isset($_GET['record_hr'])){
	include '../Registrar/hr_for.php';
	}
	if(isset($_GET['sem'])){
	include '../Registrar/record_hr.php';
	}
	if(isset($_GET['view'])){
	include '../Registrar/view.php';
	}
	
	if(isset($_GET['mba'])){
	include '../Registrar/mba.php';
	}
	
	if(isset($_GET['hours_mba'])){
	include '../Registrar/record_mba.php';
	}
	if(isset($_GET['mbarecord_hr'])){
	include '../Registrar/mbahr_for.php';
	}
	if(isset($_GET['mbasem'])){
	include '../Registrar/mbarecord_hr.php';
	}
	if(isset($_GET['hndbt'])){
	include '../Registrar/hndbt.php';
	}
	if(isset($_GET['view_mba'])){
	include '../Registrar/view_mba.php';
	}
			?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
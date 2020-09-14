
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
		include '../Provost/dashb.php';
	}
	if(isset($_GET['dashbs'])){
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
	include '../Records/settings.php';
	}	
	
	if(isset($_GET['daily_income'])){
	include '../Acc/daily_reports12.php';
	}	
	
	if(isset($_GET['daily_exp'])){
	include '../Acc/Daily Expenditure.php';
	}	
	if(isset($_GET['income_statement'])){
	include '../Acc/income_state.php';
	}		?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
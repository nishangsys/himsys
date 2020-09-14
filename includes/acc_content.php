
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
                <div class="row">
                    <div class="col-lg-12">
                    
       
                      
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
		include '../Acc/other_users.php';
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
	if(isset($_GET['sectl'])){
		include '../Acc/set_sl.php';
	}
	if(isset($_GET['income'])){
		include '../Fees/income.php';
	}
	
	if(isset($_GET['stats'])){
		include '../Fees/stats.php';
	}	
	if(isset($_GET['settings'])){
	include '../Records/settings.php';
	}	
	if(isset($_GET['set_fees'])){
	include '../Acc/set.php';
	}		
	
	if(isset($_GET['add_dept'])){
	include '../Admission/add_dept.php';
	}
	if(isset($_GET['add_sect'])){
	include '../Admission/add_sect.php';
	}
	
	if(isset($_GET['income_class'])){
	   include '../Cash/income_class.php';
   }
   
   if(isset($_GET['add_class'])){
	include '../Cash/spending_cats.php';
	}
	if(isset($_GET['record_expense'])){
	include '../Cash/record_expense.php';
	}
	if(isset($_GET['chosing_date'])){
	include '../Cash/recording_expense.php';
	
	}
	if(isset($_GET['recording_expense'])){
	include '../Cash/recording_expense.php';
	
	}	
	if(isset($_GET['review_exp'])){
	include '../Acc/review_exp.php';
	
	}	
			?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
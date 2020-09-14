<style>
body{
	padding:0px 30px;
}
</style>
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
					
	
	if(isset($_GET['admission'])){
	include '../Fees/admission.php';
		
	}
	if(isset($_GET['otherss'])){
	include '../Acc/otherss.php';
		
	}
	if(isset($_GET['direct_entry'])){
	include '../Fees/all_programs.php';
		
	}
	if(isset($_GET['chose_sect'])){
	include '../Fees/chose_sects.php';
		
	}
	if(isset($_GET['chose_prog'])){
	include '../Fees/chose_prog.php';
		
	}
	if(isset($_GET['ffirst'])){
	include '../Admission/all_sects.php';
		
	}
	
	if(isset($_GET['now'])){
	include '../Fees/new_student.php';
		
	}
	if(isset($_GET['ydept'])){
	include '../Fees/ydept.php';
		
	}
	if(isset($_GET['pydept'])){
	include '../Fees/pydept.php';
		
	}
	if(isset($_GET['scholarship'])){
		include '../Fees/page111.php';
	}
	if(isset($_GET['dept'])){
		include 'add_dept.php';
	}
	if(isset($_GET['mat'])){
		include 'page2.php';
	}
	if(isset($_GET['pay_again'])){
		include 'pay_again.php';
	}
	if(isset($_GET['cdept'])){
		include 'change_dept.php';
	}
	if(isset($_GET['student_records'])){
		include 'student_records.php';
	}
	if(isset($_GET['continue'])){
		include 'continuing.php';
	}
	if(isset($_GET['continuing'])){
		include 'continue.php';
	}
	if(isset($_GET['scholarships_cases'])){
		include '../Fees/scholarships_cases.php';
	}
	if(isset($_GET['normal_cases'])){
		include 'normal_cases.php';
	}
	if(isset($_GET['odept'])){
		include 'new_dept.php';
	}
	if(isset($_GET['level'])){
		include 'update_level.php';
	}
	if(isset($_GET['ndept'])){
		include 'update_depart.php';
	}
	if(isset($_GET['new_paymt'])){
		include '../Fees/new_paymt.php';
	}
    if(isset($_GET['2'])){
		include '../Acc/old_students.php';
	}
	 if(isset($_GET['22'])){
		include 'page33.php';
	}
	if(isset($_GET['404'])){
		include '401.php';
	}
	if(isset($_GET['update'])){
		include '../Fees/daily_report.php';
	}
	if(isset($_GET['updatem'])){
		include '../Fees/daily_reportm.php';
	}
	if(isset($_GET['mid_term'])){
		include '../Fees/mid_term.php';
	}
	 if(isset($_GET['name'])){
		include '../Fees/update.php';
	}
	 if(isset($_GET['uname'])){
		include '../Fees/updateu.php';
	}
	if(isset($_GET['mtname'])){
		include '../Fees/giving_midterm.php';
	}
	if(isset($_GET['scholars'])){
		include 'scholars.php';
	}
	 if(isset($_GET['frecords'])){
		include 'frecords.php';
	}
	 if(isset($_GET['by_dept'])){
		include 'by_dept.php';
	}
	 if(isset($_GET['viewing_dept'])){
		include 'viewing_dept.php';
	}
	
	if(isset($_GET['by_level'])){
		include 'by_level.php';
	}
	if(isset($_GET['viewing_level'])){
		include 'viewing_level.php';
	}
	if(isset($_GET['fee_drive'])){
		include 'fee_drive.php';
	}
	if(isset($_GET['viewing_feedrive'])){
		include 'viewing_feedrive.php';
	}
	if(isset($_GET['debtors'])){
		include 'debtors.php';
	}
	if(isset($_GET['all_debtors'])){
		include 'all_debtors.php';
	}
	if(isset($_GET['update_debt'])){
		include 'update_debt.php';
	}
	if(isset($_GET['completed_fees'])){
		include 'completed_fills.php';
	}
	if(isset($_GET['uncompleted_fees'])){
		include 'uncompleted_fills.php';
	}
	if(isset($_GET['stats'])){
		include 'stats.php';
	}
	if(isset($_GET['others'])){
		include 'other_repors.php';
	}
	if(isset($_GET['todays'])){
		include '../Fees/todays_repors.php';
	}
	if(isset($_GET['all_scholars'])){
		include '../Fees/scholar_report.php';
	}
	if(isset($_GET['registration'])){
		include 'registration.php';
	}
	if(isset($_GET['my_records'])){
		include 'my_records.php';
	}
	if(isset($_GET['my_trecords'])){
		include 'my_trecords.php';
	}
	if(isset($_GET['all_records'])){
		include 'all_records.php';
	}
	if(isset($_GET['new_user'])){
		include 'register.php';
	}
	if(isset($_GET['reg_fee'])){
		include 'reg_dept.php';
	}
	if(isset($_GET['all_users'])){
		include 'all_users.php';
	}
	
	if(isset($_GET['otherst'])){
		include '../Records/other_ss.php';
	}
	if(isset($_GET['upfin'])){
		include '../Acc/fin.php';
	}
	if(isset($_GET['see'])){
		include '../Fees/see.php';
	}
	if(isset($_GET['transfer'])){
		include '../Fees/transfer.php';
	}
	if(isset($_GET['update_from'])){
		include 'update_from.php';
	}
	if(isset($_GET['recovered'])){
		include 'recovered.php';
	}
	if(isset($_GET['discount'])){
		include 'discount.php';
	}
	
	if(isset($_GET['receipts'])){
	include '../Cash/receipts.php';
	}
	if(isset($_GET['fee_receipts'])){
	include '../Cash/fee_receipts.php';
	}
	if(isset($_GET['fb'])){
	include '../Records/fb.php';
	}
	if(isset($_GET['regs'])){
	include '../Records/regs.php';
	}
	
	if(isset($_GET['reg_receipts'])){
	include '../Cash/reg_receipts.php';
	}
	if(isset($_GET['waiver'])){
	include '../Records/waiver.php';
	}
	if(isset($_GET['waiver_receipts'])){
	include '../Cash/waiver_receipts.php';
	}
	
	if(isset($_GET['move'])){
	include '../Exams/sers.php';
	}
	
	if(isset($_GET['import_names'])){
	include '../Records/import.php';
	}	
	
	if(isset($_GET['c_list'])){
	include '../Records/c_lists.php';
	}
	if(isset($_GET['statss'])){
	include '../Provost/tstats.php';
	}
	
	if(isset($_GET['lasts'])){
	include '../Fees/lasts.php';
	}
	
	if(isset($_GET['all_lasts'])){
	include '../Fees/all_lasts.php';
	}
	if(isset($_GET['genc_lists'])){
	include '../Records/genc_lists.php';
	}
			?>
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div></div>
           
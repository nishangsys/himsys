
      <!--PAGE CONTENT -->
        <div id="content">
             
            <div class="inner" style="min-height: 700px;">
               <h3>You're Viewing <span style="color:#F00; font-weight:bold"> <i class="icon-fast-forward "> </i> <?php echo $_GET['link']; ?></span></h3>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    
                    <?php
	if(isset($_GET['new'])){
		include '../FEES/page1.php';
	}	
	 if(isset($_GET['2'])){
		include '../FEES/page3.php';
	}
	 if(isset($_GET['22'])){
		include '../FEES/page33.php';
	}			
	if(isset($_GET['income_class'])){
	   include '../Cash/income_class.php';
   }
   if(isset($_GET['bank_record'])){
		include '../Cash/chose_bank.php';
	}
	if(isset($_GET['academic_year'])){
	include '../Cash/academic_year.php';
	}
	if(isset($_GET['banking_with'])){
		include '../Cash/bank_record.php';
	}
	
		
	if(isset($_GET['recording'])){
		include '../Cash/bank_recording.php';
	}
	if(isset($_GET['cash_record'])){
		include '../Cash/chose_students.php';
	}
	
	if(isset($_GET['resits'])){
		include '../Cash/resits.php';
	}
	
	if(isset($_GET['bank_accounts'])){
		include '../Cash/bank_accounts.php';
	}
	
	
	
	if(isset($_GET['deposits'])){
		include '../Cash/deposits.php';
	}
		if(isset($_GET['my_deposits'])){
		include '../Cash/depositing.php';
	}
		if(isset($_GET['withdrawal'])){
		include '../Cash/withdrawals.php';
	}
	
	if(isset($_GET['my_withdrawal'])){
		include '../Cash/withdrawing.php';
	}
	
	
	if(isset($_GET['print_class'])){
		include '../Cash/print_class.php';
	}
	
	if(isset($_GET['print_area'])){
		include '../Cash/print_area.php';
	}
	
	
	
	
	
	
	
	
	if(isset($_GET['view_more'])){
	include '../Cash/this_class.php';
	}
	
	if(isset($_GET['current_ayear'])){
	include '../Cash/current_ayear.php';
	}	
	if(isset($_GET['bydept'])){
	include '../Cash/bydept.php';
	}
	if(isset($_GET['bylevel'])){
	include '../Cash/bylevel.php';
	}
	if(isset($_GET['viewl'])){
	include '../Cash/view_level.php';
	}

	if(isset($_GET['viewd'])){
	include '../Cash/view_dept.php';
	}
	
	if(isset($_GET['receipts'])){
	include '../Cash/receipts.php';
	}
	
	if(isset($_GET['print_v'])){
	include '../Cash/print_v.php';
	}
		if(isset($_GET['preceipts'])){
	include '../Cash/preceipts.php';
	}	
	if(isset($_GET['pay'])){
	include '../Cash/pay.php';
	}	
	if(isset($_GET['daily'])){
	include '../Cash/daily.php';
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
					?>
                    
                    
                    
    <!-- GLOBAL SCRIPTS -->
    <script src="../assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->


      <!-- PAGE LEVEL SCRIPT-->
 <script src="../assets/js/jquery-ui.min.js"></script>
 <script src="../assets/plugins/uniform/jquery.uniform.min.js"></script>
<script src="../assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
<script src="../assets/plugins/chosen/chosen.jquery.min.js"></script>
<script src="../assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="../assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
<script src="../assets/plugins/validVal/js/jquery.validVal.min.js"></script>
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
<script src="../assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="../assets/plugins/timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="../assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
<script src="../assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
<script src="../assets/plugins/autosize/jquery.autosize.min.js"></script>
<script src="../assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
       <script src="../assets/js/formsInit.js"></script>
        <script>
            $(function () { formInit(); });
        </script>
        
                    
                    
                    
                    
                    
                    
                    
                    
                       
            </div>
                        </div>
            </div>

        </div>
        <!--END PAGE CONTENT -->
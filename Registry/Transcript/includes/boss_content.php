
      <!--PAGE CONTENT -->
        <div id="content" >
             
            <div class="inner" style="min-height: 1200px;">
                <div class="row">
                    <div class="col-lg-9">
                  
                      
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    <h1>HIMS management System <i class="icon-caret-right  " style="color:#F00"></i>  <i class="icon-caret-right  " style="color:#009"></i>  <span style="color:#f00"><?php echo $_GET['link']; ?>   



</h1>
                    
                    <?php
					if(isset($_GET['dashboard'])){
	include '../content/reports.php';
	}
	if(isset($_GET['add_clients'])){
	include '../content/add_clients.php';
	}
	if(isset($_GET['receipts'])){
	include '../content/receipts.php';
	}
	if(isset($_GET['clients'])){
	include '../content/clients_menu.php';
	}
	if(isset($_GET['record_exp'])){
	include '../content/our_exp.php';
	}
	if(isset($_GET['service_menu'])){
	include '../content/add_servicemenu.php';
	}
	
	if(isset($_GET['our_reports'])){
	include '../content/our_reports.php';
	}
	if(isset($_GET['our_appointments'])){
	include '../content/our_appointments.php';
	}
	
	if(isset($_GET['multi_add'])){
	include '../content/multi_add.php';
	}
	
	
	if(isset($_GET['staff_menu'])){
	include '../content/register_staff.php';
	}
	if(isset($_GET['add_types'])){
	include '../content/add_types.php';
	}
	if(isset($_GET['add_otherservices'])){
	include '../content/add_otherservices.php';
	}
	
	
	if(isset($_GET['adding_services'])){
	include '../content/adding_services.php';
	}
	if(isset($_GET['add_services'])){
	include '../content/add_services.php';
	}
	if(isset($_GET['servicing_client'])){
	include '../content/servicing_client.php';
	}
	
		if(isset($_GET['go_ahead'])){
	include '../content/serve.php';
	}			
		
		if(isset($_GET['add_goods'])){
	include '../content/categories.php';
	}	
	
	if(isset($_GET['add_sectors'])){
	include '../content/sectors.php';
	}	
	
		if(isset($_GET['record_goods'])){
	include '../content/all_sectors.php';
	}	
	
	if(isset($_GET['doing_recording'])){
	include '../content/chosing_categories.php';
	}	
		if(isset($_GET['recordin_goods'])){
	include '../content/add_goods.php';
	}	
		if(isset($_GET['generate'])){
	include '../content/generate.php';
	}
	
	if(isset($_GET['generate_s'])){
	include '../content/generate_s.php';
	}		
		if(isset($_GET['generating'])){
	include '../content/generating.php';
	}	
	if(isset($_GET['add_debtors'])){
	include '../content/add_debtors.php';
	}		
		if(isset($_GET['adding_goods'])){
	include '../content/adding_goods.php';
	}		
	
	
		if(isset($_GET['validate'])){
	include '../content/checkout.php';
	}		
		if(isset($_GET['daily_income'])){
	include '../content/daily_reports.php';
	}
		if(isset($_GET['daily_exp'])){
	include '../content/Daily Expenditure.php';
	}	
	if(isset($_GET['income_statement'])){
	include '../content/income_state.php';
	}
	if(isset($_GET['most_profitable'])){
	include '../content/most_profitable.php';
	}
	if(isset($_GET['best_sales'])){
	include '../content/most_sales.php';
	}
	if(isset($_GET['debtors'])){
	include '../content/debtors.php';
	}	
	if(isset($_GET['more'])){
	include '../content/more.php';
	}
	if(isset($_GET['add_debts'])){
	include '../content/add_debts.php';
	}		
	if(isset($_GET['paying_debts'])){
	include '../content/paying_debts.php';
	}
	if(isset($_GET['add_class'])){
	include '../content/spending_cats.php';
	}
	if(isset($_GET['record_expense'])){
	include '../content/record_expense.php';
	}
	if(isset($_GET['chosing_date'])){
	include '../content/recording_expense.php';
	
	}
	if(isset($_GET['recording_expense'])){
	include '../content/recording_expense.php';
	
	}
	
	if(isset($_GET['our_stocks'])){
	include '../content/all_mystock.php';
	
	}	
	if(isset($_GET['sales_meter'])){
	include '../content/sales_meter.php';
		}	
		if(isset($_GET['supply_meter'])){
	include '../content/supply_meter.php';
		}
	
	if(isset($_GET['create_user'])){
	include '../superadmin/register.php';
		}
		
		if(isset($_GET['Accounts'])){
	include '../superadmin/other_users.php';
		}
		if(isset($_GET['update_name'])){
	include '../content/update_name.php';
		}
	if(isset($_GET['my_license'])){
	include '../content/license.php';
		}
		
		if(isset($_GET['best_customers'])){
	include '../content/best_customers.php';
	
	}	
	if(isset($_GET['view_more'])){
	include '../content/view_more.php';
	
	}	
	
	if(isset($_GET['best_staff'])){
	include '../content/best_staff.php';
	
	}	
	if(isset($_GET['see_more'])){
	include '../content/see_more.php';
	
	}	
	
					?>
                    
                    
                    
                    </div></div>
                           
                 </div>
                    
                
                    
                    
           
        <!--END PAGE CONTENT -->
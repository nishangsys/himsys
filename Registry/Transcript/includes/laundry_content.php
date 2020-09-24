
      <!--PAGE CONTENT -->
        <div id="content" >
             
            <div class="inner" style="min-height: 1200px; ">
                <div class="row">
                    <div class="col-lg-9">
                  
                      
                    </div>
                </div>
                  <hr />
                 <!--BLOCK SECTION -->
                 <div class="row">
                    <div class="col-lg-12">
                    <h3>HIMS management System <i class="icon-caret-right  " style="color:#F00"></i>  <i class="icon-caret-right  " style="color:#009"></i>  <span style="color:#f00"><?php echo $_GET['link']; ?>   


</h3>
                    
                    <?php
					if(isset($_GET['dashboard'])){
	include '../laundry/reports.php';
	}
	if(isset($_GET['add_clients'])){
	include '../laundry/add_clients.php';
	}
	if(isset($_GET['receipts'])){
	include '../laundry/receipts.php';
	}
	if(isset($_GET['clients'])){
	include '../laundry/clients_menu.php';
	}
	if(isset($_GET['record_exp'])){
	include '../laundry/our_exp.php';
	}
	if(isset($_GET['service_menu'])){
	include '../laundry/add_servicemenu.php';
	}
	
	if(isset($_GET['our_reports'])){
	include '../laundry/our_reports.php';
	}
	if(isset($_GET['our_appointments'])){
	include '../laundry/our_appointments.php';
	}
	
	if(isset($_GET['multi_add'])){
	include '../laundry/multi_add.php';
	}
	
	
	if(isset($_GET['staff_menu'])){
	include '../laundry/register_staff.php';
	}
	if(isset($_GET['add_types'])){
	include '../laundry/add_types.php';
	}
	if(isset($_GET['add_otherservices'])){
	include '../laundry/add_otherservices.php';
	}
	
	
	if(isset($_GET['adding_services'])){
	include '../laundry/adding_services.php';
	}
	if(isset($_GET['add_services'])){
	include '../laundry/add_services.php';
	}
	if(isset($_GET['servicing_client'])){
	include '../laundry/servicing_client.php';
	}
	
		if(isset($_GET['go_ahead'])){
	include '../laundry/serve.php';
	}			
		
		if(isset($_GET['add_goods'])){
	include '../laundry/categories.php';
	}	
	
		if(isset($_GET['record_goods'])){
	include '../laundry/chosing_categories.php';
	}	
	
	
		if(isset($_GET['recordin_goods'])){
	include '../laundry/add_goods.php';
	}	
	
		
		if(isset($_GET['adding_goods'])){
	include '../laundry/adding_goods.php';
	}		
	
	
		if(isset($_GET['validate'])){
	include '../laundry/checkout.php';
	}		
		if(isset($_GET['daily_income'])){
	include '../laundry/daily_reports.php';
	}
		if(isset($_GET['daily_exp'])){
	include '../laundry/Daily Expenditure.php';
	}	
	if(isset($_GET['income_statement'])){
	include '../laundry/income_state.php';
	}
	if(isset($_GET['debtors'])){
	include '../laundry/debtors.php';
	}	
	if(isset($_GET['more'])){
	include '../laundry/more.php';
	}	
	if(isset($_GET['paying_debts'])){
	include '../laundry/paying_debts.php';
	}
	if(isset($_GET['add_class'])){
	include '../laundry/spending_cats.php';
	}
	if(isset($_GET['record_expense'])){
	include '../laundry/record_expense.php';
	}
	if(isset($_GET['chosing_date'])){
	include '../laundry/recording_expense.php';
	
	}
	if(isset($_GET['recording_expense'])){
	include '../laundry/recording_expense.php';
	
	}
	if(isset($_GET['appointments'])){
	include '../laundry/chose.php';
	
	}
	if(isset($_GET['view_apps'])){
	include '../laundry/all_appoints.php';
	
	}	
	if(isset($_GET['new_style'])){
	include '../laundry/adding_services.php';
	
	}
	if(isset($_GET['recording_services'])){
	include '../laundry/new_style.php';
	
	}
	
	if(isset($_GET['chose_clients'])){
	include '../laundry/chose_clients.php';
	
	}
	if(isset($_GET['my_client'])){
	include '../laundry/our_services12.php';
	
	}
	if(isset($_GET['chosing_style'])){
	include '../laundry/chose_style.php';
	
	}
	if(isset($_GET['my_stylist'])){
	include '../laundry/our_services.php';
	
	}
	if(isset($_GET['my_staff'])){
	include '../laundry/hair_staff.php';
	
	}
	
	if(isset($_GET['all_staff'])){
	include '../laundry/our_staff.php';
	
	}
	
	if(isset($_GET['define_price'])){
	include '../laundry/define_price.php';
	
	}
	
	if(isset($_GET['chose_stylist'])){
	include '../laundry/chose_stylists.php';
	
	}
	if(isset($_GET['plattnow'])){
	include '../laundry/platting.php';
	
	}	
	
	if(isset($_GET['help'])){
	include '../laundry/help.php';
	
	}
	
	if(isset($_GET['best_customers'])){
	include '../laundry/best_customers.php';
	
	}	
	if(isset($_GET['view_more'])){
	include '../laundry/view_more.php';
	
	}	
	
	if(isset($_GET['best_staff'])){
	include '../laundry/best_staff.php';
	
	}	
	if(isset($_GET['see_more'])){
	include '../laundry/see_more.php';
	
	}	
	if(isset($_GET['our_stocks'])){
	include '../laundry/all_mystock.php';
	
	}	
	if(isset($_GET['sales_meter'])){
	include '../laundry/sales_meter.php';
		}	
		if(isset($_GET['supply_meter'])){
	include '../laundry/supply_meter.php';
		}
	
	if(isset($_GET['create_user'])){
	include '../laundry/register.php';
		}
		
		if(isset($_GET['Accounts'])){
	include '../laundry/other_users.php';
		}
	
					?>
                    
                    
                    
                    </div></div>
                           
                 </div>
                    
                
                    
                    
           
        <!--END PAGE CONTENT -->
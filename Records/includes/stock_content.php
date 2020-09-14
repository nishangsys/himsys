
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
                    <h1>Nishang Clouds System <i class="icon-caret-right  " style="color:#F00"></i>  <i class="icon-caret-right  " style="color:#009"></i>  <span style="color:#f00"><?php echo $_GET['link']; ?>   <a href="?adding_goods&link=Adding Goods&add_good">
<button class="btn btn-success"><i class="icon-plus icon-white"></i> UPDATE STOCK</button></a></span> | 

<a href="?record_goods&link=Adding Goods&add_good">
<button class="btn btn-primary"><i class="icon-plus icon-white"></i> NEW STOCK</button></a></span> 



</h1>
                    
                    <?php
					if(isset($_GET['dashboard'])){
	include '../stock/reports.php';
	}
	if(isset($_GET['super_market'])){
	include '../stock/supermarket_stock.php';
	}
	if(isset($_GET['ware_house'])){
	include '../stock/ware_hose.php';
	}
	if(isset($_GET['receipts'])){
	include '../stock/receipts.php';
	}
	if(isset($_GET['clients'])){
	include '../stock/clients_menu.php';
	}
	if(isset($_GET['record_exp'])){
	include '../stock/our_exp.php';
	}
	if(isset($_GET['service_menu'])){
	include '../stock/add_servicemenu.php';
	}
	if(isset($_GET['finished'])){
	include '../stock/finished.php';
	}
	if(isset($_GET['our_reports'])){
	include '../stock/our_reports.php';
	}
	if(isset($_GET['our_appointments'])){
	include '../stock/our_appointments.php';
	}
	
	if(isset($_GET['multi_add'])){
	include '../stock/multi_add.php';
	}
	
	
	if(isset($_GET['staff_menu'])){
	include '../stock/register_staff.php';
	}
	if(isset($_GET['add_types'])){
	include '../stock/add_types.php';
	}
	if(isset($_GET['add_otherservices'])){
	include '../stock/add_otherservices.php';
	}
	
	
	if(isset($_GET['adding_services'])){
	include '../stock/adding_services.php';
	}
	if(isset($_GET['add_services'])){
	include '../stock/add_services.php';
	}
	if(isset($_GET['servicing_client'])){
	include '../stock/servicing_client.php';
	}
	
		if(isset($_GET['go_ahead'])){
	include '../stock/serve.php';
	}			
		
		if(isset($_GET['add_goods'])){
	include '../stock/categories.php';
	}	
	
		if(isset($_GET['record_goods'])){
	include '../stock/chosing_categories.php';
	}	
	
	
		if(isset($_GET['recordin_goods'])){
	include '../stock/add_goods.php';
	}	
	
		
		if(isset($_GET['adding_goods'])){
	include '../stock/adding_goods.php';
	}		
		if(isset($_GET['supermkt_price'])){
	include '../stock/supermkt_price.php';
	}		
	
	if(isset($_GET['supermkt_barcode'])){
	include '../stock/supermkt_barcode.php';
	}	
		if(isset($_GET['validate'])){
	include '../stock/checkout.php';
	}		
		if(isset($_GET['daily_income'])){
	include '../stock/daily_reports.php';
	}
		if(isset($_GET['daily_exp'])){
	include '../stock/Daily Expenditure.php';
	}	
	if(isset($_GET['income_statement'])){
	include '../stock/income_state.php';
	}
	if(isset($_GET['most_profitable'])){
	include '../stock/most_profitable.php';
	}
	if(isset($_GET['best_sales'])){
	include '../stock/most_sales.php';
	}
	if(isset($_GET['debtors'])){
	include '../stock/debtors.php';
	}	
	if(isset($_GET['more'])){
	include '../stock/more.php';
	}	
	if(isset($_GET['paying_debts'])){
	include '../stock/paying_debts.php';
	}
	if(isset($_GET['add_class'])){
	include '../stock/spending_cats.php';
	}
	if(isset($_GET['record_expense'])){
	include '../stock/record_expense.php';
	}
	if(isset($_GET['chosing_date'])){
	include '../stock/recording_expense.php';
	
	}
	if(isset($_GET['recording_expense'])){
	include '../stock/recording_expense.php';
	
	}
	if(isset($_GET['appointments'])){
	include '../stock/chose.php';
	
	}
	if(isset($_GET['view_apps'])){
	include '../stock/all_appoints.php';
	
	}	
	if(isset($_GET['new_style'])){
	include '../stock/adding_services.php';
	
	}
	if(isset($_GET['recording_services'])){
	include '../stock/new_style.php';
	
	}
	
	if(isset($_GET['chose_clients'])){
	include '../stock/chose_clients.php';
	
	}
	if(isset($_GET['my_client'])){
	include '../stock/our_services12.php';
	
	}
	if(isset($_GET['chosing_style'])){
	include '../stock/chose_style.php';
	
	}
	if(isset($_GET['my_stylist'])){
	include '../stock/our_services.php';
	
	}
	if(isset($_GET['my_staff'])){
	include '../stock/hair_staff.php';
	
	}
	
	if(isset($_GET['all_staff'])){
	include '../stock/our_staff.php';
	
	}
	
	if(isset($_GET['define_price'])){
	include '../stock/define_price.php';
	
	}
	
	if(isset($_GET['chose_stylist'])){
	include '../stock/chose_stylists.php';
	
	}
	if(isset($_GET['plattnow'])){
	include '../stock/platting.php';
	
	}	
	
	if(isset($_GET['help'])){
	include '../stock/help.php';
	
	}
	
	if(isset($_GET['best_customers'])){
	include '../stock/best_customers.php';
	
	}	
	if(isset($_GET['view_more'])){
	include '../stock/view_more.php';
	
	}	
	
	if(isset($_GET['best_staff'])){
	include '../stock/best_staff.php';
	
	}	
	if(isset($_GET['see_more'])){
	include '../stock/see_more.php';
	
	}	
	if(isset($_GET['our_stocks'])){
	include '../stock/all_mystock.php';
	
	}	
	if(isset($_GET['sales_meter'])){
	include '../stock/sales_meter.php';
		}	
		if(isset($_GET['supply_meter'])){
	include '../stock/supply_meter.php';
		}
		if(isset($_GET['supermkt_meter'])){
	include '../stock/super_meter.php';
		}
	
	if(isset($_GET['create_user'])){
	include '../stock/register.php';
		}
		
		if(isset($_GET['Accounts'])){
	include '../stock/other_users.php';
		}
		if(isset($_GET['update_name'])){
	include '../stock/update_name.php';
		}
	if(isset($_GET['my_license'])){
	include '../stock/license.php';
		}
		
		if(isset($_GET['updated'])){
	include '../content/adding_goods.php';
	}		
					?>
                    
                    
                    
                    </div></div>
                           
                 </div>
                    
                
                    
                    
           
        <!--END PAGE CONTENT -->
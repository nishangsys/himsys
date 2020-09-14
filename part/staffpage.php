
<?PHP
  	
				 

@session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	
 $level=$_SESSION['banned'];

	

 if($level=='20' or $level=='8'  or  $level=='9' or $level=='20'   ){
		
		
		

?>
<!DOCTYPE html>
<html>
	
<head>
	<title>NISHANG SOFTWARES PRODUCTS</title>
		<meta charset="utf-8">
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
        <link href="style.css" rel="stylesheet" type="text/css" />
       

        
		<!--//webfonts-->
</head>
<script type="text/javascript" src="../calendar.js"></script>
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>


<body>


<?php include 'head.php'; ?>

	<div class="contain">
   <div class="subcontain">
     <div class="subcontain">
       <?php include 'bussersidebar.php'; ?>
       
       <div class="right">
      
         <?php
		 
		
	
	
		 if(isset($_GET['functions'])){
		include '../functions/functions.php';
	}

	////////////////////////////////////////////////header elements*****************************************/
	
	/************************************************ende head*********************************************/
	if(isset($_GET['add_depts'])){
		include 'addnew_depts.php';
	}
	if(isset($_GET['adding_bonus'])){
		include 'adding_bonuses.php';
	}
	if(isset($_GET['adding_deduction'])){
		include 'adding_deductions.php';
	}
	if(isset($_GET['407'])){
		include '407.php';
	}
	
	if(isset($_GET['add_bonus'])){
		include 'add_bonus.php';
	}
	if(isset($_GET['my_bonus'])){
		include 'my_bonus.php';
	}
	if(isset($_GET['my_deduction'])){
		include 'my_deduction.php';
	}
	if(isset($_GET['sanctions'])){
		include 'my_sanction.php';
	}
	if(isset($_GET['adding_sanctions'])){
		include 'adding_sanctions.php';
	}
	if(isset($_GET['empty_deducts'])){
		include 'empty_deducts.php';
	}
	if(isset($_GET['empty_bonuses'])){
		include 'empty_bonus.php';
	}
	if(isset($_GET['emptying_bonus'])){
		include 'emptied.php';
	}
	if(isset($_GET['emptying_deducts'])){
		include 'emptied12.php';
	}
	if(isset($_GET['addnew_quali'])){
		include 'addnew_quali.php';
	}
	
	if(isset($_GET['add_cate'])){
		include 'new_catego.php';
	}
	if(isset($_GET['register_staff'])){
		include 'choose_dept.php';
	}
	if(isset($_GET['departmt'])){
		include 'dept_staffs.php';
	}
	
	if(isset($_GET['employ'])){
		include 'new_staff.php';
	}
	
	if(isset($_GET['all_staffs'])){
		include 'employ_him.php';
	}
	
	if(isset($_GET['edit'])){
		include 'edit_page.php';
	}
	if(isset($_GET['edit_details'])){
		include 'edit_details.php';
	}
	if(isset($_GET['myjob_details'])){
		include 'myjob_details.php';
	}
	
	if(isset($_GET['our_staff'])){
		include 'all_staffs.php';
	}
	
	if(isset($_GET['update_staff'])){
		include 'updating_staff.php';
	}
	
	if(isset($_GET['add_details'])){
		include 'add_details.php';
	}
	
	if(isset($_GET['voucher'])){
		include 'voucher.php';
	}
	
	
	if(isset($_GET['undo_voucher'])){
		include 'undo_voucher.php';
	}
	
	
	if(isset($_GET['before_tax'])){
		include 'before_tax.php';
	}
	
	
	if(isset($_GET['after_tax'])){
		include 'after_tax.php';
	}
	
	if(isset($_GET['note'])){
		include 'note.php';
	}
	if(isset($_GET['generate'])){
		include 'generate.php';
	}
	
	if(isset($_GET['undo_generate'])){
		include 'undo_generate.php';
	}
	
	if(isset($_GET['undo_taxgenerate'])){
		include 'undo_taxgenerates.php';
	}
	if(isset($_GET['redo_taxgenerate'])){
		include 'after_tax.php';
	}
	
	if(isset($_GET['add_deductions'])){
		include 'add_deductions.php';
	}
	if(isset($_GET['addeducts'])){
		include 'adddeducts.php';
	}
	
		if(isset($_GET['our_salaries'])){
		include 'our_salaries.php';
	}
	
		if(isset($_GET['edit_slip'])){
		include 'edit_slip.php';
	}
	if(isset($_GET['edit_b'])){
		include 'edit_bs.php';
	}
	if(isset($_GET['edit_d'])){
		include 'edi_d.php';
	}
	
	if(isset($_GET['dept'])){
		include 'dept_salaries.php';
	}
	if(isset($_GET['change_pic'])){
		include 'change_face.php';
	}
	
	if(isset($_GET['change_photo'])){
		include 'updateme.php';
	}
	
	// onclick="return confirm('Are you Sure that your category and amount matches')"
	
	if(isset($_GET['cust_search'])){
		include 'new_cus.php';
	}
	if(isset($_GET['next_pages'])){
		include 'staff_cash.php';
	}
	
	if(isset($_GET['not_foundname'])){
		include 'not_foundname.php';
	}
	//hourly clients
	
	//----hourly clients
	
	
	//pending payments
	if(isset($_GET['pays'])){
		include 'pending_clients.php';
	}
	if(isset($_GET['sacking'])){
		include 'sack_page.php';
	}
	if(isset($_GET['all_staff'])){
		include 'our_staff.php';
	}
		if(isset($_GET['check_in'])){
		include 'our_register.php';
	}
		if(isset($_GET['check_out'])){
		include 'check_out.php';
	}
	
	
		if(isset($_GET['their_salaries'])){
		include 'their_salaries.php';
	}
		if(isset($_GET['generate_cnsp'])){
		include 'generate_cnps.php';
	}
	
		if(isset($_GET['declare_taxes'])){
		include 'declare_taxes.php';
	}
	
	
	
	
	
	
	
	
	
	
	if(isset($_GET['thismonth_salary'])){
		include 'o_salary.php';
	}
	
	
	
	//-----------receive cash from those owing
	
	if(isset($_GET['you'])){
		include 'paynow.php';
	}
	
	//room_change
	
	
	if(isset($_GET['room_change'])){
		include 'change_room.php';
	}
	if(isset($_GET['changes'])){
		include 'changing_room.php';
	}
	
	//those who have stayed above given dates
	
	if(isset($_GET['overtime'])){
		include 'overtime.php';
	}
	//payimg for over time
	if(isset($_GET['addcheck'])){
		include 'overtime.php';
	}
	//check out board for clients
	if(isset($_GET['checkout'])){
		include 'checkout_list.php';
	}
	
	//check out for that have paid something
	if(isset($_GET['check1'])){
		include 'checklists12.php';
	}
	
	//check out for that have paid nothing
	if(isset($_GET['check2'])){
		include 'checklists22.php';
	}
	//quit today clients
	if(isset($_GET['quit'])){
		include 'checklists123.php';
	}
	
	//quit today clients
	if(isset($_GET['zquit'])){
		include 'checklistszero.php';
	}
	//clients that have overstayed and have paed nothing
	if(isset($_GET['zerout'])){
		include 'payingovtzero.php';
	}
	
	//returniing clients information stored
	if(isset($_GET['return'])){
		//include 'returns.php';
		include 'returning.php';
	}
	//give out room
	if(isset($_GET['id'])){
		/*
		$ch=mysql_query("select * from customers") or die (mysql_error());
		while($ans=mysql_fetch_assoc($ch)){
			echo $re=$ans['photo'];
		}
		if($re=='60'){
			//echo 60;
		}
		else {
			*/
		include 'givehim.php';
		}
		
	
	//Reservations made
	
	if(isset($_GET['reservations'])){
		include 'res_client.php';
	}
	
	if(isset($_GET['allreserves'])){
		include 'allreserves.php';
	}
	
		if(isset($_GET['see_allreserves'])){
		include 'see_allreserves.php';
	}
	
	
	//make reservations and reserve rooms
	
	if(isset($_GET['res'])){
		include 'reserveroom.php';
	}
	
	
	//see all reserveatnaoi
	if(isset($_GET['reserving'])){
		include 'resereroom.php';
	}
	//cancel a reserveatnaoi
	if(isset($_GET['cancelre'])){
		include 'resereroom.php';
	}
	//change reserved room
	if(isset($_GET['roomchange'])){
		include 'resereroom.php';
	}
	//change reserved room
	if(isset($_GET['datechange'])){
		include 'datechange.php';
	}
	if(isset($_GET['changedate'])){
		include 'change_date.php';
	}
	//actual change page
	if(isset($_GET['change'])){
		include 'roomchange.php';
	}
	//report about a room either occupied or resrved
	if(isset($_GET['report'])){
		include '../404.php';
	}
	
	if(isset($_GET['error'])){
		include '../401.php';
	}
	if(isset($_GET['thanks'])){
		include '../401.php';
	}
	//RESERVATIONS CONFIRMATION AND CANCELLATION 
	if(isset($_GET['enter'])){
		include 'enterroom.php';
	}
	if(isset($_GET['cancel'])){
		include 'cancelres.php';
	}

	
	if(isset($_GET['old'])){
		include 'old_client.php';
	}
	//visitors center
	if(isset($_GET['inquiries'])){
		include 'inquiries.php';
	}
	//all visitots log
		if(isset($_GET['all_inquiries'])){
		include 'all_inquiries.php';
	}
	//cahnge client's personal details
		if(isset($_GET['trigger1'])){
		include 'change_info.php';
	}
	//adding rooms panel
	if(isset($_GET['addroom'])){
		include 'addingrooms.php';
	}
	//adding category panel
	if(isset($_GET['addcate'])){
		include 'addingcate.php';
	}
	//////////////////////////////new members
	if(isset($_GET['add_member'])){
		include 'new_member.php';
	}
	if(isset($_GET['add_facil'])){
		include 'facilities.php';
	}
	if(isset($_GET['tosolv_member'])){
		include 'mem_pay.php';
	}
	
	
	if(isset($_GET['yourcontri'])){
		include 'mem_contri.php';
	}
	
	if(isset($_GET['memcontri'])){
		include 'mem_cash.php';
	}
	///////////////////////existing members
	if(isset($_GET['all_members'])){
		include 'all_members.php';
	}
	if(isset($_GET['members_payagain'])){
		include 'members_payagain.php';
	}
	if(isset($_GET['debts'])){
		include 'members_payagain.php';
	}
	if(isset($_GET['change_package'])){
		include 'change_package.php';
	}
	//changing cate page
	if(isset($_GET['changed'])){
		include 'new_pack.php';
	}
	
	//changing cate page
	if(isset($_GET['mem_block'])){
		include 'mem_bolck.php';
	}
	
	//changing cate page
	if(isset($_GET['unmem_block'])){
		include 'mem_unbolck.php';
	}
	////////////////////////member register

	if(isset($_GET['members_receipt'])){
		include 'members_receipt.php';
	}
	//////////////////////chat 
	if(isset($_GET['chat'])){
		include 'chatwith.php';
	}
	
	
	//daily records
	if(isset($_GET['today_rec'])){
		include 'daily_recs.php';
	}
	if(isset($_GET['balsheet'])){
		include 'monthlysheet.php';
	}
	
	if(isset($_GET['download'])){
		include 'downloads.php';
	}
	if(isset($_GET['myown'])){
		include 'myown.php';
	}
	
	
	if(isset($_GET['permission'])){
		include 'grant_permission.php';
	}
	if(isset($_GET['grant'])){
		include 'permit_me.php';
	}
	if(isset($_GET['declare_cnps'])){
		include 'declare_cnps.php';
	}
	
	if(isset($_GET['declare'])){
		include 'declaring.php';
	}
	
	if(isset($_GET['undeclare'])){
		include 'undeclaring.php';
	}
	if(isset($_GET['monthly_details'])){
		include 'monthly_details.php';
	}
	
	if(isset($_GET['monthly_printing'])){
		include 'monthly_printing.php';
	}
	if(isset($_GET['change_cate'])){
		include '../admin/change_cate.php';
	}
	
	if(isset($_GET['changing_cate'])){
		include '../admin/changing_cate.php';
	}
	if(isset($_GET['change_dept'])){
		include '../admin/change_dept.php';
	}
	if(isset($_GET['changing_dept'])){
		include '../admin/changing_dept.php';
	}
	
	if(isset($_GET['change_salary'])){
		include '../admin/change_salary.php';
	}
	if(isset($_GET['changing_salary'])){
		include '../admin/changing_salary.php';
	}
	if(isset($_GET['suspend'])){
		include '../admin/fire_him.php';
	}
	
	if(isset($_GET['sus'])){
		include '../admin/suspening_him.php';
	}
	
	if(isset($_GET['unsuspend_staff'])){
		include '../admin/unsuspend_him.php';
	}
	if(isset($_GET['grant_leave'])){
		include '../admin/grant_leave.php';
	}
	
	if(isset($_GET['leave'])){
		include '../admin/granting_leave.php';
	}
	
	if(isset($_GET['all_onleave'])){
		include '../admin/leave_staff.php';
	}
	if(isset($_GET['month'])){
		include 'months.php';
	}
	
	if(isset($_GET['yes_cancelleave'])){
		include '../admin/canceling_leave.php';
	}
	if(isset($_GET['reinstate'])){
		include '../admin/reinstate.php';
	}
	?>
       
       </div>
     </div>
   </div>
   
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

<?php } } ?>
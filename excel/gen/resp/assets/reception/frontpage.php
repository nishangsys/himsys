

<?PHP
  	
				 

session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

else {
	@session_start();
	
	if(($_SESSION['banned'])!='5'){
		echo "<script>alert('Sorry.Cannot View Page')</script>";
		
		
			
	}
	else {
		
		

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
         <div class="calender">
           <script type="text/javascript">
            calendar();
        </script>
         </div>
         
         
                <div class="calender" style="margin-top:330px; height:auto; overflow:hidden; padding-bottom:20px">
         
         <H1 style="background:#333; color:#FF0">This Month's Statistics</H1>
         <div style="height:20px;  font-weight:bold; float:left; width:220px">Total N<sup>o</sup> Registered so Far :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px"><?php total_clients() ;?></div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:210px; margin-top:20px">Number of Cameroonians :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px; margin-top:20px"><?php national() ;?></div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:210px; margin-top:20px">Number of  Foreigners :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px; margin-top:20px"><?php foreign() ;?></div>
         
         
         
         
         
         </div>
         
         
         <div class="calender" style="margin-top:500px; height:auto; overflow:hidden; padding-bottom:20px">
         
         <H1 style="background:#333; color:#FF0"><?php echo date('Y'); ?> Statistics</H1>
         <div style="height:20px;  font-weight:bold; float:left; width:220px">Total N<sup>o</sup> Registered so Far :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px"><?php allnationas() ;?></div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:210px; margin-top:20px">Number of Cameroonians :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px; margin-top:20px"><?php allnational() ;?></div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:210px; margin-top:20px">Number of  Foreigners :</div>
         
         <div style="height:20px;  font-weight:bold; float:left; width:50px; margin-left:30px; margin-top:20px"><?php allforeign() ;?></div>
         
         
         
         
         
         </div>
      
         <?php
		 
		
	
	
		 if(isset($_GET['functions'])){
		include '../functions/functions.php';
	}

	////////////////////////////////////////////////header elements*****************************************/
	if(isset($_GET['occupied'])){
		include 'all_occpied.php';
	}
	
	if(isset($_GET['unoccupied'])){
		include 'all_unoccpied.php';
	}
	if(isset($_GET['all_reserved'])){
		include 'all_reserved.php';
	}
	if(isset($_GET['customers'])){
		include 'all_cust.php';
	}
	if(isset($_GET['debtors'])){
		include 'all_debtors.php';
	}
	//receipt 
	if(isset($_GET['allrec'])){
		include 'all_receipt.php';
	}
	//stats zone
	if(isset($_GET['stats'])){
		include 'statsa.php';
	}
	if(isset($_GET['2'])){
		include 'page2.php';
	}
	if(isset($_GET['3'])){
		include 'page3.php';
	}
	/************************************************ende head*********************************************/
	if(isset($_GET['allrooms'])){
		include 'rooms.php';
	}
	if(isset($_GET['new_student'])){
		include 'new_client.php';
	}
	//hourly clients
	
	//----hourly clients
	
	if(isset($_GET['hourly_client'])){
		include 'hourly_client.php';
	}
		if(isset($_GET['assign'])){
		include 'all_case.php';
	}
	if(isset($_GET['assigning'])){
		include 'assignroom.php';
	}
	//pending payments
	if(isset($_GET['pays'])){
		include 'pending_clients.php';
	}
	
	//-----------receive cash from those owing
	
	if(isset($_GET['you'])){
		include 'paynow.php';
	}
	
	//room_change
	
	
	if(isset($_GET['room_change'])){
		include 'change_room.php';
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
		include 'checklists.php';
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
	//actual change page
	if(isset($_GET['change'])){
		include 'roomchange.php';
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
	if(isset($_GET['next_pages'])){
		include 'mem_cash.php';
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
	if(isset($_GET['our_register'])){
		include 'our_register.php';
	}
	if(isset($_GET['members_receipt'])){
		include 'members_receipt.php';
	}
	//////////////////////chat 
	if(isset($_GET['chat'])){
		include 'chatwith.php';
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
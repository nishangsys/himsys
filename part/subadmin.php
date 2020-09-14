
<?PHP
  	
				 

@session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}

$level=$_SESSION['banned'];

	

 if($level=='20' or $level=='15'){
		

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

if(isset($_GET['adding_sanctions'])){
      include '../staffs/adding_sanctions.php';	}
	if(isset($_GET['sanctions'])){
		include '../staffs/my_sanction.php';
	}
	if(isset($_GET['sanctionf'])){
		include '../staffs/my_sanction12.php';
	}
	if(isset($_GET['adding_sanctionf'])){
      include '../staffs/adding_sanctionf.php';	}
	 if(isset($_GET['adding_bonus'])){
		include '../staffs/adding_bonuses.php';
	}
	if(isset($_GET['my_bonus'])){
		include '../staffs/my_bonus.php';
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
	if(isset($_GET['our_staff'])){
		include 'all_staffs.php';
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

<?php }  ?>


<?PHP


@session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

}
$level=$_SESSION['banned'];
 if($level=='20' or $level=='8' or  $level=='9' or $level=='14'   ){
		
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
        
<style>
.com1{
	width:30px;

	background:url(../img/com.png);
	
	float:left;
	
}
.com{
	
	background:#f00;
	height:25px;
	padding:0px 5px;
	font-size:12px;
	border-radius:15px 15px 15px 15px;
	color:#fff;
	float:left;
	position:absolute;
	top:0px;
	margin-left:20px;	
}

</style>

       
<script type="text/javascript">
function doCalc(form) {
form.left.value = ((parseInt(form.qty.value)-parseInt(form.bought.value)));

  form.total.value = ((parseInt(form.priz.value)*parseInt(form.bought.value)));

}
</script>
        
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


<?php include 'restauhead.php'; ?>

	<div class="contain" >
   <div class="subcontain">
   <?php include 'restaubar.php'; ?>
       <div class="right">
       <?php
	   
	    if(isset($_GET['excel_upload'])){
		  include 'excel_upload.php';
	   }
	   
	   
	    
	    if(isset($_GET['excel_download'])){
		  include 'download_page.php';
	   }
	   
	     
	    if(isset($_GET['excel_download2'])){
		  include 'download_page2.php';
	   }
	   
	   
	   	 
	   if(isset($_GET['add_dept'])){
		  include 'barcat.php';
	   }
	    if(isset($_GET['stock_sector'])){
		  include 'choose_one.php';
	   }
	    if(isset($_GET['go'])){
		  include 'sent_stocks.php';
	   }
	   
	   
	   if(isset($_GET['barstock'])){
		  include 'barstocks.php';
	   }
	   
	   if(isset($_GET['fixed_assets'])){
		  include 'fixed_assets.php';
	   }
	   
	    if(isset($_GET['all_fixedstocks'])){
		  include 'fixed_stocks.php';
	   }
	   
	   if(isset($_GET['all_stocks'])){
		  include 'warehouse_stocks.php';
	   }
	   if(isset($_GET['remove_stocks'])){
		  include 'remove_stocks.php';
	   }
	     if(isset($_GET['depreciation'])){
		  include 'depreciation.php';
	   }
	   
	    if(isset($_GET['all_returns'])){
		  include 'all_returns.php';
	   }
	   
	    if(isset($_GET['all_depreciation'])){
		  include 'all_depreciation.php';
	   }
	   
	   if(isset($_GET['take_note'])){
		  include 'take_note.php';
	   }
	   
	    if(isset($_GET['depleted_stocks'])){
		  include 'depleted_stocks.php';
	   }
	    if(isset($_GET['daily_supplies'])){
		  include 'daily_supplies.php';
	   }
	   if(isset($_GET['depts'])){
		  include 'departmental.php';
	   }
	   
	   if(isset($_GET['see'])){
		  include 'thisdept.php';
	   }
	    if(isset($_GET['all_reports'])){
		  include 'all_reports.php';
	   }
	    if(isset($_GET['individual'])){
		  include 'individual.php';
	   }
	    if(isset($_GET['depart'])){
		  include 'depts.php';
	   }
	   ?>
    
   </div></div>
  </div>
   
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

<?php }  ?>
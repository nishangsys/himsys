

<?PHP


session_start();

require_once '../functions/functions.php';
if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=login.php">';

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
        <link href="../style.css" rel="stylesheet" type="text/css" />
       
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



	<div class="contain" >
   <div class="subcontain">
     <h1>Products Given out for Free</h1>

<form method="post" action="../bar/printfree.php" target="_blank">
	<table>
    	<tr>
        
              <?php
			  $year=date('Y');
	?>
	
        <td>Month </td><td><select name="month" style="width:170px" />
               
                
              <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				

               </select></td>
                <td>Year</td><td><select name="finy" onBlur="doCalc(this.form)" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day=2015;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td>
               <td><button type="submit" name="print" >PRINT</button></td>
        
        </tr>
    
    </table>    
   

</form>


<h1>Products Given out for Free</h1>
<form method="post" action="">
	<table>
    	<tr>
        
            
	
        <td>Month </td><td><select name="month" style="width:170px" />
               
              <option value="01">January</option>
              <option value="02">Febuary</option>
              <option value="03">March</option>
              <option value="04">April</option>
              <option value="05">May</option>
              <option value="06">June</option>
              <option value="07">July</option>
              <option value="08">August</option>
              <option value="09">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
				
               </select></td>
                  </td>
                <td>Year</td><td><select name="year" onBlur="doCalc(this.form)" required>
					<option value="<?php echo $day; ?>"  onBlur="doCalc(this.form)"></option>
					<?php 
					for($day=2015;$day<=2020;$day++)
					{
					echo "<option value='$day'>$day</option>";
					}
					?>
				</select></td>
               <td><button type="submit" name="seen" >Generate</button></td>
        
        </tr>
    
    </table>    
   

</form>


<?php
if(isset($_POST['seen'])){
	$month=$_POST['month'];
	$month1="0".$_POST['month'];
	$year=$_POST['year'];
$sele="SELECT product,qty,SUM(total),authorize,date,time from basket where tab='free food' or tab='free' and status='2' and  month='$month' or month='$month1' and year='$year' group by id order by id DESC ";
	$runs=mysql_query($sele) or die (mysql_error());
	
	$s=mysql_query("SELECT SUM(total) as totpro from basket where tab='free food' or tab='free' and status='2'  and  month='$month' or month='$month1' and year='$year' group by month   ") or die (mysql_error());
	while($f=mysql_fetch_assoc($s)){
		 echo $totp=$f['totpro'];
	}
	
$num=1;

?>
<H1>Records for the month of <?php echo $month  ?> /<?php echo $year  ?></H1>
<table>

 <tr style="background:#1188AA; padding:10PX 0PX; height:30px; color:#fff; text-align:center; font-weight:bold">
    <td>S/N</td>
    
    <td>PRODUCT</td>
    <td>Qty</td>
    <td>Date</td>
    <td>Time</td>
    <TD>Authorized By</TD>
  
   
        
     <?php while($rows=mysql_fetch_assoc($runs)){
		 
	
		
		 ?>
        
    <tr>
    <?PHP
	if($num%2==0){
		echo "<tr style='background:#eee;height:30px'>";		
	}
	else {
		echo "<tr style='background:#ccc; height:30px'>";
	}
	?>
    <td><?php echo $num++; ?></td>
        <td><?php echo $rows['product']; ?></td>
            <td><?php echo $rows['qty']; ?>
       <td><?php echo $rows['date']; ?></td>
            <td><?php echo $rows['time']; ?>
            <td><?php echo $rows['authorize']; ?></td>
           
    
    </tr>
    
    
	<?php } ?>
    
    <tr style=" border-bottom:1px solid#000; background:#fff" bgcolor="#FF0000">
    <td>.</td>
    <td></td>
    <td></td>
    <td></td>
    </tr>
   <tr>
   <td>Worth</td>
   <td></td>
   <td><?php  $sele="SELECT SUM(qty) FROM basket where tab='free food' or tab='free' and month='$month' or month='$month1'  and  year='$year' and area='15'  GROUP BY month";
	$runs=mysql_query($sele) or die (mysql_error());
	 while($rows=mysql_fetch_assoc($runs)){
		echo  number_format($ROW=$rows['SUM(qty)']);
	 }?> </td>
     
     
   <td style="background:#f00; color:#ff0"><?php  $sele="SELECT SUM(total) FROM basket where tab='free food' or tab='free' and month='$month' or month='$month1'  and  year='$year' and area='15'  GROUP BY month";
	$runs=mysql_query($sele) or die (mysql_error());
	 while($rows=mysql_fetch_assoc($runs)){
		echo  number_format($seen=$rows['SUM(total)']);
	 }?> Frs</td>
   <td style="border-bottom:1px double#000"></td>
   
   </tr>
    </table>
    

			
   
   <?php } ?>
 
  </div>  </div> </div> 
 
  
   
	<div class="clear"></div>
		
	<div class="foot"><br>© Copy Rights <?php echo date('Y'); ?>. All rights reserved by the Programmer<br>
Licensed by PEFSCOM<br>
For any help contact us at 679 135 426 or 671 984 477 </div>		
		 		
</body>
</html>

<?php }  ?>
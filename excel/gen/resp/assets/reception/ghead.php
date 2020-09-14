
<?php 


$cus1="SELECT * from client ";
$run1=mysql_query($cus1) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($run1)){
	 $clients=$rows['name'];
	 $AD=$rows['address'];
	 $TEL=$rows['as1'];
	 $fixed=$rows['pay'];
 }

if(isset($_GET['id'])){
	$id=$_GET['id'];
 $client="SELECT * from historique where category='monthly' GROUP BY cust_id order by hist_id DESC";
$run=mysql_query($client) or die (mysql_error());


 while ($row=mysql_fetch_assoc($run)){
	 $amount=$row['amount'];
	 $paid=$row['paid'];
	 $owed=$row['owed'];
	 $dead=$row['deadline'];
	 $month=$row['month'];
	 $date=$row['date'];
	 $hist=$row['hist_id']; 
 
$cus="SELECT * from customers where cust_id=' $hist' ";
$runs=mysql_query($cus) or die (mysql_error());
 while ($rows=mysql_fetch_assoc($runs)){
	 $name=$rows['name'];
	 $cont=$rows['contact'];
	 $installation=$rows['install'];
	 $fixed=$rows['pay'];
 }


?>

<div class="receipt" style=" height:550px">
<div class="eachrec" style="border-bottom:none;"  >
	<div class="rechead">
    <img src="images/bg (1).jpg" />
    <div class="oth">
    <h1><?php echo $clients; ?></h1>
    <h2><?php echo $AD ?></h2>
    <h2>Tel: <?php echo $TEL ?></h2>
    <h2>Month/Mois: <?php echo date('F'); ?></h2>
    </div></div>
    
    <div class="rechbod">
    <p><b>Client Name/Nom</b> :&nbsp;<?php echo $name; ?><br>
    <b>Contact N<sup>o</sup></b>:&nbsp;<?php echo $cont; ?><br />
    <b>Branch/ Agence:</b>&nbsp;<?php echo $AD ?></br>
    <b>Town/ Ville:</b>&nbsp;</br>
     <b>Billing date/ Date de Facturation:</b>&nbsp;:<?php echo $date; ?></br>    
    </p>
    
     <div class="rightbo">
     <p style="font-size:13px; text-align:center">Deadline / Date limite de paiement<br />
     <span style="font-size:34px"><?php echo $dead; ?></span><BR />
     10 days after receiption date<br />
     10 Jours des reception/<br />     
     </p>    
     </div>
    </div>
    <?php } }?>
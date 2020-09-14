
<?php


function customers (){
	
	
	$_POST = array_map("ucwords", $_POST);
	
		
	  if(isset($_POST['add'])){
		  $_POST = array_map("ucwords", $_POST);
		$name=addslashes($_POST['name']);
		$date=$_POST['date'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$dob="$date/"."$month/"."$year";
		$pof=$_POST['pob'];
		$cm=$_POST['cm'];
		$planum=$_POST['planum'];
		$class=$_POST['class'];
		$year_id=$_POST['ayear'];
		$tel=$_POST['tel'];
		$year=date('Y');
		$time=date('h:is');
		$others=$_POST['others'];
		$email=addslashes($_POST['email']);		
		$gname=addslashes($_POST['gname']);
		$gtec=addslashes($_POST['gtec']);
		$gadd=addslashes($_POST['gadd']);
		$gemail=addslashes($_POST['gemail']);		
		$sex=$_POST['sex'];
		$innum=addslashes($_POST['innum']);
		$olevel=addslashes($_POST['olevels']);
		$alevel=addslashes($_POST['alevels']);
		$install=$_POST['install'];
		$photo=addslashes($_FILES['photo']['name']);
	$photo_temp=$_FILES['photo']['tmp_name'];
	move_uploaded_file($photo_temp,"album/$photo");
	
		
		$dates=date('d-m-Y');
		
		
		
	 $insert="INSERT into customers set stu_name='$name',pof='$pof',dor='$dob',year_id='$ayear',class='$class',reg_date='$dates',
	 install='$install',status='no',level='0',email='$email',tel='$tel',gname='$gname',gtec='$year',gadd='$gadd',gemail='$gemail', innum='$innum',olevel='$olevel',
	 alevel='$alevel',photo='$photo',other1='$others',category='$sex',carmark='$cm',carnum='$planum'";
	$run=mysql_query($insert) or die(mysql_error());
	
	
	
		echo "<script>alert('$name has been registered as daily client.Thank You very Much')</script>";
	echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?assign">';
		
		
	}

	}

///////////////////////////////////reservations
///////////////////////////////////reservations

function company_giveoutroom (){
	
 if(isset($_POST['save'])){
	 $_POST = array_map("ucwords", $_POST);
		   $id=$_POST['id'];
		   $name=$_POST['yname'];
		   $national=$_POST['nation'];
		   $cat=$_POST['parent_cat'];
		   $room=$_POST['sub_cat'];
		   
		   $floor=$_POST['block'];
		   $howlong=$_POST['day'];
		   $staffname=$_POST['sname'];
		   @session_start();
		   $paidto=$_SESSION['user_name'];
		   $discount=$_POST['disc'];
		   $cost=$_POST['expect']-$discount;
		   $disc=$_POST['discount'];
		   
		   $paid=$_POST['paid'];
		   $added=$_POST['added'];		   
		   $bal=($_POST['expect']*$_POST['day'])-$_POST['paid'];
		   $duedate=date("m/d/Y", strtotime("$startDate +".$howlong." days"));
		   $date=date('d-m-Y');
		   $month=date('m');
		   $year=date('Y');
		   $day=date('d');
		   $time=date('G:i');
		   $total=$_POST['expamt'];
		   //check if the minum amount is respected
		   
		    $CHECK=mysql_query("SELECT * FROM categories where cat='$cat' LIMIT 1") or die(mysql_error());
		    while($ro=mysql_fetch_assoc($CHECK)){
		   $last=$ro['lastprice']-$disc;
		    $max=$ro['amt'];
		  
		 
	 }
		   if($cost<$last or $cost>$max ){
			   echo "<script>alert('ERROR. Your Cannot Give out Room ".$room."  for less than ".number_format($last)." FCFA or for more than ".number_format($max)." FCFA ')</script>";

		   }
		
		   else if($bal<0){ 
		   echo "<script>alert('ERROR. Your Clients is paying ".number_format(abs($bal))." FCFA more than the normal Price')</script>";
   
		   }
		   else {
			   
			    //company debts
		    $company=mysql_query("INSERT INTO company_debts set yourid='$id',name='$name',staff='$staffname',room='$room($cat)',cost='$cost',howlong='$howlong',
			paid='$paid',debt='$bal',checkin='$date',checkout='$duedate',agent='$paidto' ") or die(mysql_error());
			//update customers as room given out
			
			  $customers=mysql_query("INSERT INTO customers set status='2',stu_name='$name($staffname)',reg_date='$date',pof='$national',gtec='$year' ") or die(mysql_error());		  
		    $one=mysql_query("INSERT INTO ourclients set yourid='$id',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate',month='$month',year='$year',nation='$national',date='$date'") or die(mysql_error());
			//historique 
		    $histo=mysql_query("INSERT INTO historique set yourid='$id',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate',date='$date',month='$month',year='$year',day='$day'") or die(mysql_error());
		  
		   //finance insertion
		    $finance=mysql_query("INSERT INTO finances set yourid='$id',name='$name',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate',status='1',date='$date',month='$month',year='$year',nation='$national',time='$time',allow='2'") or die(mysql_error());			
			//finance insertion
		    $updaterooms=mysql_query("UPDATE rooms set status='2' where num='$room' and floor='$floor' ") or die(mysql_error());			
			//daily records
			$daily=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',paidto='$paidto',area='0',day='$day',staffname='$name',
			rec='$paid',date='$date',month='$month',year='$year',reason='$staffname',qty='$howlong',price='$cost',total='$total',owed='$total',
			purpose='Reception'") or die(mysql_error());
			
			
			 echo "<script>alert('SUCCESS. ".$name." is now your client till ".$duedate.". THANK YOU for using our software')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?allrooms">';
			
		   }
	   
	}
}

function reserve (){
	
	
	$_POST = array_map("ucwords", $_POST);
	
		
	  if(isset($_POST['add'])){
		  $_POST = array_map("ucwords", $_POST);
		$name=addslashes($_POST['name']);
		$dob=$_POST['dob'];
		$pof=$_POST['pob'];
		$class=$_POST['class'];
		$year_id=$_POST['ayear'];
		$tel=$_POST['tel'];
		$year=date('Y');
		$others=$_POST['others'];
		$email=addslashes($_POST['email']);		
		$gname=addslashes($_POST['gname']);
		$gtec=addslashes($_POST['gtec']);
		$gadd=addslashes($_POST['gadd']);
		$gemail=addslashes($_POST['gemail']);		
		$sex=$_POST['sex'];
		$innum=addslashes($_POST['innum']);
		$olevel=addslashes($_POST['olevels']);
		$alevel=addslashes($_POST['alevels']);
		$install=$_POST['install'];
		$photo=addslashes($_FILES['photo']['name']);
	$photo_temp=$_FILES['photo']['tmp_name'];
	move_uploaded_file($photo_temp,"album/$photo");
	
		
		$dates=date('d-m-Y');
	
		
	 $insert="INSERT into customers set stu_name='$name',pof='$pof',dor='$dob',year_id='$ayear',class='$class',reg_date='$dates',
	 install='$install',status='3',level='0',email='$email',tel='$tel',gname='$gname',gtec='$year',gadd='$gadd',gemail='$gemail', innum='$innum',olevel='$olevel',
	 alevel='$alevel',photo='$photo',other1='reserve',category='$sex'";
	$run=mysql_query($insert) or die(mysql_error());
	
		echo "<script>alert('$name has been registered as student.Thank You very Much')</script>";
	echo '<meta http-equiv="Refresh" content="0; url=../reception/frontpage.php?allreserves">';
		
		
	}

	}



//admission center
function short (){
	
	
	$_POST = array_map("ucwords", $_POST);
	
		
	  if(isset($_POST['addshort'])){
		$name=addslashes($_POST['name']);
		$dob=$_POST['dob'];
		$pof=$_POST['pob'];
		$class=$_POST['class'];
		$year_id=$_POST['ayear'];
		$tel=$_POST['tel'];
		$others=$_POST['others'];
		$email=addslashes($_POST['email']);		
		$gname=addslashes($_POST['gname']);
		$gtec=addslashes($_POST['gtec']);
		$gadd=addslashes($_POST['gadd']);
		$gemail=addslashes($_POST['gemail']);		
		$sex=$_POST['sex'];
		$innum=addslashes($_POST['innum']);
		$olevel=addslashes($_POST['olevels']);
		$alevel=addslashes($_POST['alevels']);
		$install=$_POST['install'];
		$photo=addslashes($_FILES['photo']['name']);
	$photo_temp=$_FILES['photo']['tmp_name'];
	move_uploaded_file($photo_temp,"album/$photo");
	
		
		$dates=date('d-m-Y');
		
		 $CHECH="SELECT * FROM students where stu_name='$name'  AND year_id='$ayear'and class='$class'";
		$ok=mysql_query($CHECH) or die(mysql_error());
		if(mysql_num_rows($ok)>0){
			echo "<script>alert('ERROR. Sorry $name is already a registered student in the $ayear academic Year!')</script>";
		}
		else {
	
		
	 $insert="INSERT into students set stu_name='$name',pof='$pof',dor='$dob',year_id='$ayear',class='$class',reg_date='$dates',
	 install='$install',status='no',level='0',email='$email',tel='$tel',gname='$gname',gtec='$gtec',gadd='$gadd',gemail='$gemail', innum='$innum',olevel='$olevel',
	 alevel='$alevel',photo='$photo',other1='$others',category='$sex'";
	$run=mysql_query($insert) or die(mysql_error());
	
		echo "<script>alert('$name has been registered as student.Thank You very Much')</script>";
	echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?admit12">';
		
		
	}

	}
}




function giveout_room (){
	
 if(isset($_POST['save'])){
	 $_POST = array_map("ucwords", $_POST);
	 
		   $id=$_POST['id'];
		   $name=$_POST['yname'];
		   $national=$_POST['nation'];
		   $cat=$_POST['parent_cat'];
		   $room=$_POST['sub_cat'];
		   $cost=$_POST['expect'];
		   $floor=$_POST['block'];
		   $howlong=$_POST['day'];
		   @session_start();
		   $paidto=$_SESSION['user_name'];
		   
		   $paid=$_POST['paid'];
		   $added=$_POST['added'];		   
		   $bal=($_POST['expect']*$_POST['day'])-$_POST['paid'];
		   $duedate=date("m/d/Y", strtotime("$startDate +".$howlong." days"));
		   $date=date('d-m-Y');
		   $month=date('m');
		   $total=$_POST['expamt'];
		   $year=date('Y');
		   $day=date('d');
		   $time=date('G:i');
		   //check if the minum amount is respected
		   
		    $CHECK=mysql_query("SELECT * FROM categories where cat='$cat' LIMIT 1") or die(mysql_error());
		    while($ro=mysql_fetch_assoc($CHECK)){
		   $last=$ro['lastprice']-$_POST['ydisc'];
		    $max=$ro['amt'];
		  
		 
	 }
		   if($cost<$last or $cost>$max ){
			   echo "<script>alert('ERROR. Your Cannot Give out Room ".$room."  for less than ".number_format($last)." FCFA or for more than ".number_format($max)." FCFA ')</script>";

		   }
		
		   else if($bal<0){ 
		   echo "<script>alert('ERROR. Your Clients is paying ".number_format(abs($bal))." FCFA more than the normal Price')</script>";
						  echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?assign">';
   
		   }
		   else {
			  
		    $one=mysql_query("INSERT INTO ourclients set yourid='$id',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate',month='$month',year='$year',nation='$national',date='$date'") or die(mysql_error());
			//historique 
		    $histo=mysql_query("INSERT INTO historique set yourid='$id',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate',date='$date',month='$month',year='$year',day='$day'") or die(mysql_error());
		  
		   //finance insertion
		    $finance=mysql_query("INSERT INTO finances set yourid='$id',name='$name',cat='$cat',room='$room',cost='$cost',howlong='$howlong',
			paid='$paid',added='$added',bal='$bal',duedate='$duedate',status='1',date='$date',month='$month',year='$year',nation='$national',time='$time'") or die(mysql_error());
			
			//finance insertion
		    $updaterooms=mysql_query("UPDATE rooms set status='2' where num='$room' and floor='$floor' ") or die(mysql_error());
			
			//update customers as room given out
			
			  $customers=mysql_query("UPDATE customers set status='2' where client_id='$id' ") or die(mysql_error());
			//daily records
			$daily=mysql_query("INSERT INTO daily set cust_id='$id',room='$room',paidto='$paidto',day='$day',
			rec='$paid',date='$date',month='$month',year='$year',reason='Lodging',qty='$howlong',price='$cost',total='$total',owed='$bal',purpose='Reception'") or die(mysql_error());
			
			
			
			
			$checkit_now=mysql_query("SELECT * FROM finances,rooms_products where finances.room='".$room."' and finances.status='1' AND rooms_products.room=finances.room order by finances.id DESC LIMIT 1 ") or die(mysql_error());
			if(mysql_num_rows($checkit_now)>=1){
				 echo "<script>alert('SUCCESS. ".$name." is now your client till ".$duedate.". THANK YOU for using our software')</script>";
			
							echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?contine">';

			}
			else {
		
			
			
			 echo "<script>alert('SUCCESS. ".$name." is now your client till ".$duedate.". THANK YOU for using our software')</script>";
			
			 
			echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?new_student">';
			
		   }
		   }
	   
	}
}
//*******************************over time payemnts
function overtimepay(){
	if(isset($_POST['save'])){
				
		$name=($_POST['name']);		
		$id=$_POST['id'];
		$added=$_POST['added'];
		$exp=$_POST['exp'];
		$paid=$_POST['paid'];
		$bal=$_POST['bal'];
		if($bal<0){
			echo "<script>alert('ERROR. The Balance is Negative')</script>";
			exit;
		}
	}
}

/****************renewv contrcats*******************/
function update_situation(){
	
	if(isset($_POST['update'])){
	$_POST = array_map("ucwords", $_POST);
	
		$class=addslashes($_POST['class']);
		$date=date('d-m-Y');
		$month=date('m');
		$year=date('Y');
		$id=$_POST['id'];
		$year_id=$_POST['ayear'];
		$fees=$_POST['expect'];
		$paid=$_POST['paid'];
		$balance=$_POST['bal'];
		$agent=$_SESSION['user_name'];
		if($balance<0){
			echo "<script>alert('Error. This Person is paying more than he/she owes')</script>";
		}
		else {
	  $insert="UPDATE finance set expected='$balance' where stu_id='$id'";
	$run=mysql_query($insert) or die(mysql_error());
	
	$two="INSERT into installment set stu_id='$id',expected='$fees',year_id='$ayear',paid='$paid',date='$date',newdebt='$balance'";
	$runi=mysql_query($two) or die(mysql_error());
	
	$daily="INSERT into daily set stu_id='$id',amt_paid='$paid',status='$date',agent='$agent',monthly='$month'";
	$three=mysql_query($daily) or die(mysql_error());
	
	$histo="INSERT into historique set stu_id='$id', class='$class',newin='$fees',year_id='$ayear',paid='$paid',date='$date',month='$month',year='$year',owed='$balance',newdebt='0'";
	$okk=mysql_query($histo) or die(mysql_error());
	
	
		echo "<script>alert('$name records has been Updated.Thank You very Much')</script>";
		
	}
}
}




function total_stu(){
	
	  $tot_stu="
	 SELECT COUNT(stu_name) as total from admission where year_id='$ac_year'  	";
	$run=mysql_query($tot_stu) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		echo  $all=$row['total'];
	}
	}
	
	
	//total males
	function national(){
		$month=date('m');
		$year=date('Y');
		$all="SELECT COUNT(name)  from finances where month='$month' AND year='$year'  and nation='CAMEROONIAN' or nation='CAMEROON' and yourid>0";
		$run=mysql_query($all) or die(mysql_error());
		while($row=mysql_fetch_assoc($run)){
			$total=$row['COUNT(name)'];
			echo $total;
		}
	}
	
	
	
	
	
	//total female
	function foreign(){
		$month=date('m');
		$year=date('Y');
		$all="SELECT COUNT(name) as fr  from finances where month='$month' AND year='$year' and nation!='CAMEROONIAN' and yourid>0";
		$run=mysql_query($all) or die(mysql_error());
		while($row=mysql_fetch_assoc($run)){
			$total=$row['fr'];
			echo $total;
		}
	}
	//total clients this year
	
	function allnationas(){
		$month=date('m');
		$year=date('Y');
		$all="SELECT COUNT(name)  from finances where  year='$year'  and yourid>0";
		$run=mysql_query($all) or die(mysql_error());
		while($row=mysql_fetch_assoc($run)){
			$total=$row['COUNT(name)'];
			echo $total;
		}
	}	
	
	//total national this yera
	function allnational(){
		$month=date('m');
		$year=date('Y');
		$all="SELECT COUNT(name)  from finances where  year='$year'  and nation='CAMEROONIAN' or nation='CAMEROON' and yourid>0";
		$run=mysql_query($all) or die(mysql_error());
		while($row=mysql_fetch_assoc($run)){
			$total=$row['COUNT(name)'];
			echo $total;
		}
	}	
	//total foreigners this yera
	function allforeign(){
		$month=date('m');
		$year=date('Y');
		$all="SELECT COUNT(name) as fr  from finances where  year='$year' and nation!='CAMEROONIAN' and yourid>0";
		$run=mysql_query($all) or die(mysql_error());
		while($row=mysql_fetch_assoc($run)){
			$total=$row['fr'];
			echo $total;
		}
	}
	
/*****************Function to sell Goods***************/
function receive_cash(){
		if(isset($_POST['cash'])){
	$_POST = array_map("ucwords", $_POST);		
		
	  //$name=$_GET['name']);
	  $name=$_POST['name'];		
	   $who=mysql_real_escape_string($_POST['who']);		
	   $amount=mysql_real_escape_string($_POST['amount']);
	   $paid=mysql_real_escape_string($_POST['paid']);	
	    $bal=mysql_real_escape_string($_POST['bal']);	  
	   	$disc=mysql_real_escape_string($_POST['disc']);	
		$cat=mysql_real_escape_string($_POST['cat']);
		$line=mysql_real_escape_string($_POST['line']);	
		 $install=mysql_real_escape_string($_POST['installation']); 	
		$date=date('d-m-Y');
		$day=date('d');
		$time=date('h:i:s');
		$month=date('m');
	   $year=date('Y');
	   $alls=$paid+$install;	  
	   $salesman=$_SESSION['username'];		
		$state=1;
		$monthowed= ($_POST['bal']/$_POST['amount']);
		if($bal<0){
			echo "<script>alert(' ERROR. You are trying to receive more than what the client owes')</script>";
			
		}
		else if($bal>0){
			/*$debor="INSERT INTO debtors set owed='$bal', category='$cat', cust_id='$who', deadline='$line'";*/
			 
			$dail_records="INSERT INTO daily set cust_id='$who', amount='$amount',paid='$alls',owed='$bal',category='$cat',  date='$date', time='$time', month='$month', agent='$salesman', year='$year',discounted='$disc',installa='$install' ";
		
			
			$hist="INSERT INTO historique set names='$name',cust_id='$who', amount='$amount',paid='$paid',owed='$bal',disc='$disc', category='$cat', deadline='$line', date='$date', time='$time', month='$month', agent='$salesman', status='2',year='$year',action='1',day='$day',contract='2' ";
			 $finance="INSERT INTO finance set cust_id='$who', amount='$amount',paid='$paid',owed='$bal',disc='$disc', category='$cat', deadline='$line', date='$date',  month='$month', agent='$salesman', year='$year',status='2',action='1',day='$day',contract='2',monthowed='$monthowed' ";
			$one=mysql_query($dail_records) or die (mysql_error());
			$two=mysql_query($hist) or die (mysql_error());
			$three=mysql_query($finance) or die (mysql_error());
			
			$message= " $names has been Successfully registered. Thank You";
			echo "<script>alert('Transactions Successful. Thank You')</script>";
			echo "<script>window.open(' paynow.php?roll=$who')</script>";
			
			
		}
		else{
		$hist="INSERT INTO historique set cust_id='$who', amount='$amount',paid='$paid',owed='$bal',disc='$disc', category='$cat', deadline='$line', date='$date', time='$time', month='$month', agent='$salesman', status='1',year='$year' ";
		$finance="INSERT INTO finance set cust_id='$who', amount='$amount',paid='$paid',owed='$bal',disc='$disc', category='$cat', deadline='$line', date='$date', month='$month', agent='$salesman', year='$year' ";
			  $result=mysql_query($hist) or die (mysql_error());
			  $fin=mysql_query($finance) or die (mysql_error());
			  if($result){
			
			$message= " $names has been Successfully registered. Thank You";
			echo "<script>alert(' $names has been Successfully registered. Thank You')</script>";
		}
		 
	}
		}
	}// while ($row=mysql_fetch_array($run))
	
	
	
	function total_clients(){
		$month=date('m');
		$year=date('Y');
		$all="SELECT COUNT(name)  from finances where month='$month' AND year='$year' and yourid>0";
		$run=mysql_query($all) or die(mysql_error());
		while($row=mysql_fetch_assoc($run)){
			$total=$row['COUNT(name)'];
			echo $total;
		}
	}
	//grading system
	
		
		
			
			function makeGrade($score) { //just a rewrite of your own code, exactly the same purpose
			
			$all="SELECT * from grades";
		$run=mysql_query($all) or die(mysql_error());
		while($row=mysql_fetch_assoc($run)){
			$grade=$row['grade'];
			$range=$row['ranges'];
			echo $total;
    if($score>=70)
        return 'A';
    if($score>=60)
        return 'B';
    if($score>=50)
        return 'C';
    if($score>=45)
        return 'D';
    if($score>=40)
        return 'E';
    return 'F';
	}
	
	echo $select="SELECT * from admission,results,students where results.matric='$who' and admission.matric=results.matric and students.co_code=results.code";
	$run=mysql_query($select) or die(mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
			$ca=$row['ca'];
			$exams=$row['exams'];
			echo $total=$ca+$exams;
	}
	}
	
	function convert_number_to_words($number) {

    $hyphen      = '-';
    $conjunction = ' and ';
    $separator   = ', ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                   => 'zero',
        1                   => 'One',
        2                   => 'Two',
        3                   => 'Three',
        4                   => 'Four',
        5                   => 'Five',
        6                   => 'Six',
        7                   => 'Seven',
        8                   => 'Eight',
        9                   => 'Nine',
        10                  => 'Ten',
        11                  => 'Eleven',
        12                  => 'Twelve',
        13                  => 'Thirteen',
        14                  => 'Fourteen',
        15                  => 'Fifteen',
        16                  => 'Sixteen',
        17                  => 'Seventeen',
        18                  => 'Eighteen',
        19                  => 'Nineteen',
        20                  => 'Twenty',
        30                  => 'Thirty',
        40                  => 'Fourty',
        50                  => 'Fifty',
        60                  => 'Sixty',
        70                  => 'Seventy',
        80                  => 'Eighty',
        90                  => 'Ninety',
        100                 => 'Hundred',
        1000                => 'Thousand',
        1000000             => 'Million',
        1000000000          => 'Billion',
        1000000000000       => 'Trillion',
        1000000000000000    => 'Quadrillion',
        1000000000000000000 => 'Quintillion'
    );

    if (!is_numeric($number)) {
        return false;
    }

    if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
        // overflow
        trigger_error(
            'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }

    if ($number < 0) {
        return $negative . convert_number_to_words(abs($number));
    }

    $string = $fraction = null;

    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }

    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . convert_number_to_words($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= convert_number_to_words($remainder);
            }
            break;
    }

    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }

    return $string;
}


function timeAgo($time_ago){
$cur_time 	= time();
$time_elapsed 	= $cur_time - $time_ago;
$seconds 	= $time_elapsed ;
$minutes 	= round($time_elapsed / 60 );
$hours 		= round($time_elapsed / 3600);
$days 		= round($time_elapsed / 86400 );
$weeks 		= round($time_elapsed / 604800);
$months 	= round($time_elapsed / 2600640 );
$years 		= round($time_elapsed / 31207680 );
// Seconds
if($seconds <= 60){
	echo "$seconds seconds ago";
}
//Minutes
else if($minutes <=60){
	if($minutes==1){
		echo "one minute ago";
	}
	else{
		echo "$minutes minutes ago";
	}
}
//Hours
else if($hours <=24){
	if($hours==1){
		echo "an hour ago";
	}else{
		echo "$hours hours ago";
	}
}
//Days
else if($days <= 7){
	if($days==1){
		echo "yesterday";
	}else{
		echo "$days days ago";
	}
}
//Weeks
else if($weeks <= 4.3){
	if($weeks==1){
		echo "a week ago";
	}else{
		echo "$weeks weeks ago";
	}
}
//Months
else if($months <=12){
	if($months==1){
		echo "a month ago";
	}else{
		echo "$months months ago";
	}
}
//Years
else{
	if($years==1){
		echo "one year ago";
	}else{
		echo "$years years ago";
	}
}
}

	
?>
<?php


function customers (){
	
	
	$_POST = array_map("ucwords", $_POST);
	
		
	  if(isset($_POST['add'])){
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
	 install='$instal',status='no',level='0',email='$email',tel='$tel',gname='$gname',gtec='$gtec',gadd='$gadd',gemail='$gemail', innum='$innum',olevel='$olevel',
	 alevel='$alevel',photo='$photo',other1='$others'";
	$run=mysql_query($insert) or die(mysql_error());
	
		echo "<script>alert('$name has been registered as student.Thank You very Much')</script>";
	echo '<meta http-equiv="Refresh" content="0; url=frontpage.php?admit">';
		
		
	}

	}
}


function create_acc(){
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$accnum=$_POST['accnum'];
		$date=date('d/m/Y');
		$inidieop=$_POST['depo'];
		$min=$_POST['minim'];
		$r=mysql_query("DELETE FROM accounts WHERE name='$name' AND ac1='$accnum' ") or die(mysql_error());
		
		 $sql="INSERT INTO accounts set name='$name', ac1='$accnum', ac2='$date', ac3='$inidieop'";
		 $sql1="INSERT INTO limits set ranges='$min', la1='$accnum'";
		$run=mysql_query($sql) or die (mysql_error());
		$run1=mysql_query($sql1) or die (mysql_error());
		
		if($run && $run1){
			echo "<script>alert('Successfully Updated Accounts.Thank You')</script>";
		}
		else{
			
			echo "<script>alert('Sorry. Cannot Update records')</script>";
		}
	}
}



function paying (){
	
	if(isset($_POST['save'])){
	$_POST = array_map("ucwords", $_POST);
	
		$class=addslashes($_POST['class']);
		$date=date('d-m-Y');
		$month=date('m');
		$year=date('Y');
		$id=$_POST['id'];
		$year_id=$_POST['ayear'];
		$depar=$_POST['class'];
		$others=$_POST['added'];
		$fees=$_POST['expect'];
		 $paid=$_POST['paid']+$others;
		$balance=$_POST['bal'];
		$code=$_POST['code'];
		$mat=$_POST['mat'];
		$agent=$_SESSION['user_name'];
		  $one="SELECT * FROM matri where stat='$depar'"; 
		 $re=mysql_query($one) or die(mysql_error());
		 
			 while($row=mysql_fetch_assoc($re)){
				 $newdept= $row['stat'];
				$newre=  $row['statx']+1;
	
			 }
		
		 $upp="UPDATE students set level='3' WHERE stu_id='$id'"; 
		 $rup=mysql_query($upp) or die(mysql_error());
		
	  $insert="INSERT into historique set stu_id='$id', class='$class',newin='$fees',year_id='$ayear',paid='$paid',date='$date',month='$month',year='$year',owed='$balance',newdebt='0'";
	$run=mysql_query($insert) or die(mysql_error());
	
	$two="INSERT into installment set stu_id='$id',expected='$fees',year_id='$ayear',paid='$paid',date='$date',newdebt='$balance'";
	$runi=mysql_query($two) or die(mysql_error());
	
	$daily="INSERT into daily set stu_id='$id',amt_paid='$paid',status='$date',agent='$agent',monthly='$month'";
	$three=mysql_query($daily) or die(mysql_error());
	
	$fin="INSERT into finance set stu_id='$id',paid='$paid',year_id='$ayear',expected='$balance',date='$class',newin='$fees',newdebt='$mat'";
	$four=mysql_query($fin) or die(mysql_error());
	
		echo "<script>alert('$name has been registered as student.Thank You very Much')</script>";
		
	
	

	
}}

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
		$fees=$_POST['amount'];
		$paid=$_POST['paid'];
		$balance=$_POST['bal'];
		$matric=$_POST['matric'];
		$agent=$_SESSION['user_name'];
		if($balance<0){
			echo "<script>alert('Error. This Person is paying more than he/she owes')</script>";
		}
		else {
	  $insert="UPDATE finance set expected='$balance' where newdebt='$matric'";
	$run=mysql_query($insert) or die(mysql_error());
	
	
	$histo="INSERT into historique set stu_id='$id', class='$class',newin='$fees',year_id='$ayear',paid='$paid',date='$date',month='$month',year='$year',owed='$balance',newdebt='0',matric='$matric'";
	$okk=mysql_query($histo) or die(mysql_error());
	
	
		echo "<script>alert('$name records has been Updated.Thank You very Much')</script>";
		echo '<meta http-equiv="Refresh" content="0; url=?update_fees">';
		
	}
}
}




function total_stu(){
		$cure="SELECT * from current where id='1'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $ac_year=$rows['name'];
	}
	  $tot_stu="
	 SELECT COUNT(stu_name) as total from admission where year_id='$ac_year'  	";
	$run=mysql_query($tot_stu) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		echo  $all=$row['total'];
	}
	}
	
	
	//total males
	function male(){
		$cure="SELECT * from current where id='1'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $ac_year=$rows['name'];
	}
	
	$tot_male="
	 SELECT COUNT(sex) as total from admission where year_id='$ac_year' and sex='male'	";
	$run=mysql_query($tot_male) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $male=$row['total'];
	}
	}
	
	
	
	
	
	//total female
	function female(){
		$cure="SELECT * from current where id='1'  ";
	$runs=mysql_query($cure) or die (mysql_error());
	while($rows=mysql_fetch_assoc($runs)){
		 $ac_year=$rows['name'];
	}
	$tot_female="
	 SELECT COUNT(sex) as total from admission where year_id='$ac_year'  and sex='female'	";
	$run=mysql_query($tot_female) or die (mysql_error());
	while($row=mysql_fetch_assoc($run)){
		 echo $female=$row['total'];
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
		$year=date('Y');
		$all="SELECT COUNT(name) from customers where status!='1' AND contract!=1";
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

	
?>
 <style>
 tr,td,th,table {
	 border:1px solid#000;
	 border-collapse:collapse;
 }
 </style>
 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
 <?php
 
 
 
 $con = mysqli_connect('localhost','nishang','google1234','school_finance');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
 $db = mysqli_connect('69.73.180.129','biakahc_ekombes','cpadmin@bhco','biakahc_online'); // Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
 
 ?>
 
 

<div class="row">
        <div class="col-sm-6">
          <div class="well">
          
          <?php 

	
	

$a =$db->query("SELECT * FROM gen_info WHERE status!='2' and fax!='PG'  and id>439 ") or die(mysqli_error($db));


?>
            <table class="table table-bordered">
    <thead>
      <tr>
      <th>S/N</th>
        <th>Name</th>
        <th>DOB</th>
        <th>POB</th>
        
         <th>PROG</th>
        <th>SEX</th>
        <th>TEL</th>
         <th>CODE</th>
      </tr>
    </thead>
    <tbody>
    <?PHP
	$o=1;
	while($rows=$a->fetch_assoc()){
	  $name=$rows['names'];
	    $prog=$rows['choiceone'];
		$dob=$rows['dob'];
	    $pob=$rows['pob'];
		$sex=$rows['gender'];
	    $tel=$rows['tel'];
		 $MATRIC=$rows['matric'];

?>
     
     
       <tr>
      <th></th>
        <th><?php echo $o++;?></th><th><?php
		echo $name;
		$gsgs = $con->query("SELECT names,matric FROM gen_info where names='$name' and  matric='$MATRIC' ") or die(mysqli_error($con));;
		while($rowm=$gsgs->fetch_assoc()){
			$lid=$rowm['lid'];
		}
		$hm=$gsgs->num_rows;
		if($hm>0){
		}
		else {
		
		
 $go = $con->query("INSERT INTO gen_info SET names='$name',tel='$tel' ,dob='$dob',pob='$pob',gender='$sex',choiceone='$prog',matric='$MATRIC' ") or die(mysqli_error($con));;
 
 $gghhjjy = $db->query("UPDATE gen_info SET status='2'  WHERE  id='".$rows['id']."' ") or die(mysqli_error($db));;
 
  //$gghhjjy = $con->query("UPDATE gen_info SET status='100'  WHERE  id='".$lid."' ") or die(mysqli_error($con));;
		}

?></th>
        <th><?php echo $dob; ?></th>
        <th><?php echo $pob; ?></th>
        
         <th><?php echo $prog; ?></th>
        <th><?php echo $sex; ?></th>
        <th><?php echo $tel; ?></th>
         <th><?php echo $MATRIC; ?></th>
      </tr>
      <?PHP } ?>
    </tbody>
  </table>
          

  <table class="table table-striped">
    <thead>




</thead>
</table>



   
          </div>
        </div>
        
        
       
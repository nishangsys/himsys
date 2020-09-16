    
     
     <style type="text/css">

		.gst20{

			margin-top:20px;

		}

		#hdTuto_search{

			display: none;

		}

		.list-gpfrm-list a{

			text-decoration: none !important;

		}

		.list-gpfrm li{

			cursor: pointer;
			padding: 10px 10px;
			border-bottom:1px solid#000;

		}

		.list-gpfrm{

			list-style-type: none;

    		background: #d4e8d7;

		}

		.list-gpfrm li:hover{

			color: white;

			background-color: #3d3d3d;

		}

	</style>
    
    
    
    
    
            
<script src="../Cash/js/jquery_search.js"></script>

<script type="text/javascript">

	$(document).ready(function(){

	//Autocomplete search using PHP, MySQLi, Ajax and jQuery

		//generate suggestion on keyup

		$('#querystr').keyup(function(e){

			e.preventDefault();

			var form = $('#hdTutoForm').serialize();

			$.ajax({

				type: 'POST',

				url: '../Cash/search_students.php',

				data: form,

				dataType: 'json',

				success: function(response){

					if(response.error){

						$('#hdTuto_search').hide();

					}

					else{

						$('#hdTuto_search').show().html(response.data);

					}

				}

			});

		});



		//fill the input

		$(document).on('click', '.list-gpfrm-list', function(e){

			e.preventDefault();

			$('#hdTuto_search').hide();

			var fullname = $(this).data('fullname');

			$('#querystr').val(fullname);

		});

	});

</script>

  <?php
  if(isset($_GET['crecording'])){
   $your=$_POST['dept'];
	$count=$_POST['sex'];
	$rtype=$_POST['rtype'];
	$level=$_POST['level'];
	

 $bal=$_POST['bal'];
  
 $bank=$_POST['bank'];
$bid=$_POST['bid'];
  ?>
  
  <div class="col-sm-12">
  <div class="alert alert-success" style="font-size:18px">
  <strong>Bank: <span style="color:#f00"><?php echo $bank; ?></span>| Current Balance: <span style="color:#f00"><?php echo $bal; ?></span></strong>
</div>
      <div class="well">
 	<div class="row justify-content-center gst20">
<form id="hdTutoForm" method="POST" action="">


    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Full Names:</label>
      <div class="col-sm-10">
      	<input type="text" id="querystr" name="querystr" class="form-control" placeholder="Search Name" aria-describedby="basic-addon2" autocomplete="off">
                    
                    	<input type="hidden" id="querystr" name="names" class="form-control" >
                    


				</div>

			

			<ul class="list-gpfrm" id="hdTuto_search"></ul>


    </div>
    
      
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Sector:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="reason" value="<?php echo $count; ?>" required readonly="readonly">
      </div>
    </div>
    
      
         <div class="form-group">
      <label class="control-label col-sm-2" for="email">Level:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="level" value="<?php echo $level; ?>" required readonly="readonly">
      </div>
    </div>
    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Dept:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="class" value="<?php echo $your; ?>" readonly>
      </div>
    </div>
    
       <div class="form-group">
      <label class="control-label col-sm-2" for="email">Paymt Type:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" style="background:#FF9" name="ptype" value="<?php echo $rtype; ?>" readonly>
      </div>
    </div>

    
      <div class="form-group">
      <label class="control-label col-sm-2" for="email">Academic Year:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email"  name="ayear" value="<?php echo $ayear; ?>" readonly>
      </div>
    </div>
    
   
    
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Amount Paid:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="pwd" name="paid" onBlur="doCalc(this.form)" >
      </div>
    </div>
   
    
   
    
    
    
    <input type="hidden" name="bid" value="<?php echo $bid ?>" />
    
      <input type="hidden" name="cbal" value="<?php echo $bal ?>" />
    
     <input type="hidden" name="levels" value="<?php echo $l ?>" />
    
    
    
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="do" class="btn btn-success">Save it</button>
      </div>
    </div>
  </form>
    
</div></div>
<?php }  ?>


<?php
if(isset($_POST['do'])){
	echo $name=$_POST['username'];
	$dept=$_POST['class'];
	$year_id=$_POST['ayear'];
	$paid=$_POST['paid'];
	$level=$_POST['level'];
	$reason=$_POST['reason'];
	$cbal=$_POST['cbal'];
	$payment_type=$_POST['ptype'];
	@session_start();
	$bank=$_POST['bname'];
	$date=date('d-m-Y');
	$day=date('d');
	$month=date('m');
	$year=date('Y');
	$active=$_SESSION['user_name'];
	$ncurrent=$cbal+$paid;
	$bid=$_POST['bid'];
	
 $daily=$con->query("INSERT INTO daily set cust_id='0',room='$dept',paidto='$active',day='$day',staffname='$name',discount='',rec='$paid',
			date='$date',month='$month',year='$ayear',reason='$reason',qty='1',area='$level',price='$paid',total='$paid',owed='',
			purpose='$reason',company='cash'") or die(mysqli_error($con));
			
			echo "<script>alert('Records Successfull')</script>";
			echo '<meta http-equiv="Refresh" content="0; url=?receipts&link=Print%20Receipts">';	
}

?>

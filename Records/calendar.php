<?php


	 $id=base64_decode($_GET['id']);
	$aa=$conn->query("SELECT * FROM semesters,date_weeks where date_weeks.id='$id' and semesters.s_num=date_weeks.sem ") or die(mysqli_error($conn));
	$i=1;
		while($bb=$aa->fetch_assoc()){
			$date=$bb['date'];
		}
		
?>


<?php 




$query  = "SELECT * FROM special order by prog_name";
$result = mysqli_query($conn, $query);
?>

<script language="javascript" type="text/javascript">

//fuction to return the xml http object
function getXMLHTTP() { 
	var xmlhttp = false;	
	try {
		xmlhttp = new XMLHttpRequest();
	} catch(e) {		
		try {			
			xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
		} catch(e) {
			try {
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
			} catch(e1) {
				xmlhttp = false;
			}
		}
	}
	 	
	return xmlhttp;
}
	
function getState(countryId) {		
	var strURL = "findState.php?country="+countryId;
	var req    = getXMLHTTP();
	if (req) {
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				// only if "OK"
				if (req.status == 200) {						
					document.getElementById('statediv').innerHTML=req.responseText;
					document.getElementById('citydiv').innerHTML='<select name="city" class="form-control">'+
					'<option>Select Subject</option>'+
			        '</select>';						
				} else {
					alert("Problem while using XMLHTTP:\n" + req.statusText);
				}
			}				
		}			
		req.open("GET", strURL, true);
		req.send(null);
	}		
}

function getCity(countryId, stateId) {		
	var strURL = "findCity.php?country="+countryId+"&state="+stateId;
	var req    = getXMLHTTP();
	if (req) {
		req.onreadystatechange = function() {
			if (req.readyState == 4) {
				// only if "OK"
				if (req.status == 200) {						
					document.getElementById('citydiv').innerHTML = req.responseText;						
				} else {
					alert("Problem while using XMLHTTP:\n" + req.statusText);
				}
			}				
		}			
		req.open("GET", strURL, true);
		req.send(null);
	}
}
</script>
	<h2>Recording Attendance for <?php echo $dayName=date("l", strtotime($date)); ?> <?php echo $date; ?></h2>

	<form method="post" action="?class_att" name="form1" class="form-inline" role="form">
	<table class="table table-bordered">
			  <tr>
			    <td  >Program</td>
			    <td  >:</td>
			    <td >
			    	<select name="country" onChange="getState(this.value)" class="form-control" id="sel1">
						<option value="">Select Program</option>
						<?php while ($row = mysqli_fetch_array($result)) { ?>
						<option value="<?php echo $row['id']?>"><?php echo $row['prog_name']?></option>
						<?php } ?>
					</select>
				</td>
			  </tr>
			  <tr style="">
			    <td>Level</td>
			    <td width="50">:</td>
			    <td>
			    	<div id="statediv">
			    		<select name="state" class="form-control" id="sel1">
							<option>Select Level</option>
			        	</select>
			        </div>
			    </td>
			  </tr>
			  <tr style="">
			    <td>Subject</td>
			    <td width="50">:</td>
			    <td>
			    	<div id="citydiv">
			    		<select name="city" class="form-control" id="sel1">
							<option>Select Subject </option>
			        	</select>
			        </div>
			    </td>
			  </tr>
              
                <tr style="">
			    <td>Period : </td>
			    <td width="50">:</td>
			    <td>
			    	
			    		<select name="period" class="form-control" id="sel1" required>
                                             <option></option>
                    <?php
                    $ds=$conn->query("SELECT * FROM periods ") or die(mysqli_error($conn));
                    $i=1;
                        while($bus=$ds->fetch_assoc()){
                            ?>
                                  
                                <option value="<?php echo $bus['per_num']; ?>"> <?php echo $bus['pname']; ?></option>
                <?php } ?>
			        	</select>
			       
			    </td>
			  </tr>
			</table>
		</center>
            <input type="hidden" name="ayear" class="form-control" value="<?php echo $ayear; ?>" id="email">


<input type="hidden" name="month" class="form-control" value="<?php echo $newDate = date("m", strtotime($date));; ?>" id="email">


<input type="hidden" name="year" class="form-control" value="<?php echo $newDate = date("Y", strtotime($date));; ?>" id="email">
         <input type="hidden" name="date" class="form-control" value="<?php echo $id; ?>" id="email">
        <button type="submit" class="btn btn-primary" name="next">Next Step</button>
	</form>
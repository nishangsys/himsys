<?php

 define('_HOST_NAME', 'localhost');
	define('_DATABASE_USER_NAME', 'nishang');
	define('_DATABASE_PASSWORD', 'google1234');
	define('_DATABASE_NAME', 'hims_finance');
	
     $dbConnection = new mysqli(_HOST_NAME, _DATABASE_USER_NAME, _DATABASE_PASSWORD, _DATABASE_NAME);
     if ($dbConnection->connect_error) {
          trigger_error('Connection Failed: '  . $dbConnection->connect_error, E_USER_ERROR);
	 }


$year=date('Y');


if(isset($_POST['search_keyword']))
{
	$search_keyword = $dbConnection->real_escape_string($_POST['search_keyword']);
	
	$sqlCountries="SELECT * FROM gen_info  where year='$year' AND names LIKE '%$search_keyword%'  ";
    $resCountries=$dbConnection->query($sqlCountries);
    if($resCountries === false) {
        trigger_error('Error: ' . $dbConnection->error, E_USER_ERROR);
    }else{
        $rows_returned = $resCountries->num_rows;
    }
	$bold_search_keyword = '<strong>'.$search_keyword.'</strong>';
	if($rows_returned > 0){
		while($rowCountries = $resCountries->fetch_assoc()) {		
			echo '<div class="show" align="left"><span class="country_name">'.str_ireplace($search_keyword,$bold_search_keyword,$rowCountries['names']).'</span><BR></div>'; 	
		}
	}else{
		echo '<div class="show" align="left">No matching records.</div>'; 	
	}
}	
?>
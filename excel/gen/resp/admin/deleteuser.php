
<?php

include '../dbc.php';
require_once '../functions/functions.php'; 

//1. given delete.php?roll=$roll_id
//2. given this the url is user not delete.php for delete.php is the page


if(isset($_GET['user'])){
	 $username=$_GET['user'];
	 if($username=='admin'){
		 echo "<script>alert('You are not permitted to ban this user ')</script>";
		    echo "<script>window.open('adminpage.php?ban','_self')</script>";
	 }
	 else {
				  $update="UPDATE users SET approved='0' where user_name='$username' LIMIT 1"; 
			 $run=mysql_query($update) or die ('could not updated:'.mysql_error());
			 
			  if($run){
				  
				  echo "<script>alert('You have successully ban $username from user this Software ')</script>";
					echo "<script>window.open('adminpage.php?ban','_self')</script>";
			  }
			  else {
				  echo "<script>alert('Error in banning user. Try again ')</script>";
				  echo "<script>window.open('adminpage.php?ban','_self')</script>";
	  }
	 }
	
		
	}

	
	 /*else {
	 $roll=$_GET['user'];//user is from user?<?php //
	 $delet="DELETE from user where username='$roll' LIMIT 1"; 
	 $run=mysql_query($delet) or die ('could not updated:'.mysql_error());
	 
	  if($run){
		  
		  echo "<script>alert('You have successully delete that user ')</script>";
		    echo "<script>window.open('settings.php','_self')</script>";
	  }
	  else {
		  echo "<script>alert('Error in deleting user. Try again ')</script>";
		  echo "<script>window.open('settings.php','_self')</script>";
	  }
}

}
*/
?>
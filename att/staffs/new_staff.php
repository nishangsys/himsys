<?php
//include '../dbc.php';
session_start();

if(!isset($_SESSION['user_name'])){
echo '<meta http-equiv="Refresh" content="1; url=../login.php">';

}

else {

	
?>
<script type="text/javascript">

    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    
	$("#parent_cat").change(function() {
		$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading categories" /></div>');
		$.get('loadsubcat.php?parent_cat=' + $(this).val(), function(data) {
			$("#sub_cat").html(data);
			$('#loader').slideUp(200, function() {
				$(this).remove();
			});
		});	
    });

});
</script>
 <div class="right">
 <?php
  $query_parent = mysql_query("SELECT * FROM all_categories") or die("Query failed: ".mysql_error());

 $dept=$_GET['employ'];
 
 ?>
    <h1 style="background:#4254BE; color:#fff; font-weight:bold;">Registrating  an Employee into <span style="color:#Ff0"><?php echo $dept; ?> Department</span></h1>
     <form method="post" action="<?PHP $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data" >
    
    <table>
         
           <tr><td>Names</td><td><input type="text" name="name"   /></td></tr>
          
               
                <tr><td>Telephone</td><td><input type="text" name="tel"  style="width:300px" /></td></tr>
                   <tr><td>Position</td><td><input type="text" name="age"  style="width:300px" /></td></tr>
                     
            
               
                 <tr><td>Address</td><td><input type="text" name="address"  style="width:300px" /></td></tr> 
                 


 
                 <tr><td>Status</td><td><select name="status"  style="width:300px" required  />
                 <option>--select one--</option>
                 
                 <option value="SINGLE" >SINGLE</option>
                  <option value="MARRIED">MARRIED</option>
                  

                 </select></td></tr>
                 
                 
                   
              <tr><td>Category</td><td><select name="parent_cat" id="parent_cat" >
        <?php while($rowm = mysql_fetch_array($query_parent)): ?>
        <option value="<?php echo $rowm['name']; ?>"><?php echo $rowm['name']; ?></option>
        <?php endwhile; ?>        
        </td></tr>               
                 <tr><td>Category Salary </td><td> <select name="sub_cat" id="sub_cat" ></select></td></tr>  
                                  <tr><td>Agreed Salary</td><td><input type="number" name="agreed" placeholder="no comma, fullstop , Frs or CFA here"  style="width:300px" /></td></tr> 
            
   
                   
                 
                 
                 
           
                 <tr><td>ID Number</td><td><input type="text" name="idcard"  style="width:300px" /></td></tr> 
                 
                  <tr><td>Highest Qualification</td><td><select name="quali" class="input"  style="width:300px" />
                  <option required="required" >----choose one-------</option>
                  <?PHP
				  $D=mysql_query("SELECT * FROM quali order by name") or die(mysql_error());
				  while($r=mysql_fetch_assoc($D)){
                  ?>
                    

               	  <option value="<?php echo $r['name']; ?>"><?php echo $r['name']; ?></option>
             <?php } ?>
             </select>
                              <tr><td>Educational Background</td><td><input type="text" name="field" placeholder="e.g Arts,science, Economics"  style="width:300px"  /></td></tr> 

             </td></tr> 
                                     <tr><td>Nationality</td><td><select name="nation">
  <option value="cameroonian">Cameroonian</option>
  <option value="afghan">Afghan</option>
  <option value="albanian">Albanian</option>
  <option value="algerian">Algerian</option>
  <option value="american">American</option>
  <option value="andorran">Andorran</option>
  <option value="angolan">Angolan</option>
  <option value="antiguans">Antiguans</option>
  <option value="argentinean">Argentinean</option>
  <option value="armenian">Armenian</option>
  <option value="australian">Australian</option>
  <option value="austrian">Austrian</option>
  <option value="azerbaijani">Azerbaijani</option>
  <option value="bahamian">Bahamian</option>
  <option value="bahraini">Bahraini</option>
  <option value="bangladeshi">Bangladeshi</option>
  <option value="barbadian">Barbadian</option>
  <option value="barbudans">Barbudans</option>
  <option value="batswana">Batswana</option>
  <option value="belarusian">Belarusian</option>
  <option value="belgian">Belgian</option>
  <option value="belizean">Belizean</option>
  <option value="beninese">Beninese</option>
  <option value="bhutanese">Bhutanese</option>
  <option value="bolivian">Bolivian</option>
  <option value="bosnian">Bosnian</option>
  <option value="brazilian">Brazilian</option>
  <option value="british">British</option>
  <option value="bruneian">Bruneian</option>
  <option value="bulgarian">Bulgarian</option>
  <option value="burkinabe">Burkinabe</option>
  <option value="burmese">Burmese</option>
  <option value="burundian">Burundian</option>
  <option value="cambodian">Cambodian</option>
  <option value="canadian">Canadian</option>
  <option value="cape verdean">Cape Verdean</option>
  <option value="central african">Central African</option>
  <option value="chadian">Chadian</option>
  <option value="chilean">Chilean</option>
  <option value="chinese">Chinese</option>
  <option value="colombian">Colombian</option>
  <option value="comoran">Comoran</option>
  <option value="congolese">Congolese</option>
  <option value="costa rican">Costa Rican</option>
  <option value="croatian">Croatian</option>
  <option value="cuban">Cuban</option>
  <option value="cypriot">Cypriot</option>
  <option value="czech">Czech</option>
  <option value="danish">Danish</option>
  <option value="djibouti">Djibouti</option>
  <option value="dominican">Dominican</option>
  <option value="dutch">Dutch</option>
  <option value="east timorese">East Timorese</option>
  <option value="ecuadorean">Ecuadorean</option>
  <option value="egyptian">Egyptian</option>
  <option value="emirian">Emirian</option>
  <option value="equatorial guinean">Equatorial Guinean</option>
  <option value="eritrean">Eritrean</option>
  <option value="estonian">Estonian</option>
  <option value="ethiopian">Ethiopian</option>
  <option value="fijian">Fijian</option>
  <option value="filipino">Filipino</option>
  <option value="finnish">Finnish</option>
  <option value="french">French</option>
  <option value="gabonese">Gabonese</option>
  <option value="gambian">Gambian</option>
  <option value="georgian">Georgian</option>
  <option value="german">German</option>
  <option value="ghanaian">Ghanaian</option>
  <option value="greek">Greek</option>
  <option value="grenadian">Grenadian</option>
  <option value="guatemalan">Guatemalan</option>
  <option value="guinea-bissauan">Guinea-Bissauan</option>
  <option value="guinean">Guinean</option>
  <option value="guyanese">Guyanese</option>
  <option value="haitian">Haitian</option>
  <option value="herzegovinian">Herzegovinian</option>
  <option value="honduran">Honduran</option>
  <option value="hungarian">Hungarian</option>
  <option value="icelander">Icelander</option>
  <option value="indian">Indian</option>
  <option value="indonesian">Indonesian</option>
  <option value="iranian">Iranian</option>
  <option value="iraqi">Iraqi</option>
  <option value="irish">Irish</option>
  <option value="israeli">Israeli</option>
  <option value="italian">Italian</option>
  <option value="ivorian">Ivorian</option>
  <option value="jamaican">Jamaican</option>
  <option value="japanese">Japanese</option>
  <option value="jordanian">Jordanian</option>
  <option value="kazakhstani">Kazakhstani</option>
  <option value="kenyan">Kenyan</option>
  <option value="kittian and nevisian">Kittian and Nevisian</option>
  <option value="kuwaiti">Kuwaiti</option>
  <option value="kyrgyz">Kyrgyz</option>
  <option value="laotian">Laotian</option>
  <option value="latvian">Latvian</option>
  <option value="lebanese">Lebanese</option>
  <option value="liberian">Liberian</option>
  <option value="libyan">Libyan</option>
  <option value="liechtensteiner">Liechtensteiner</option>
  <option value="lithuanian">Lithuanian</option>
  <option value="luxembourger">Luxembourger</option>
  <option value="macedonian">Macedonian</option>
  <option value="malagasy">Malagasy</option>
  <option value="malawian">Malawian</option>
  <option value="malaysian">Malaysian</option>
  <option value="maldivan">Maldivan</option>
  <option value="malian">Malian</option>
  <option value="maltese">Maltese</option>
  <option value="marshallese">Marshallese</option>
  <option value="mauritanian">Mauritanian</option>
  <option value="mauritian">Mauritian</option>
  <option value="mexican">Mexican</option>
  <option value="micronesian">Micronesian</option>
  <option value="moldovan">Moldovan</option>
  <option value="monacan">Monacan</option>
  <option value="mongolian">Mongolian</option>
  <option value="moroccan">Moroccan</option>
  <option value="mosotho">Mosotho</option>
  <option value="motswana">Motswana</option>
  <option value="mozambican">Mozambican</option>
  <option value="namibian">Namibian</option>
  <option value="nauruan">Nauruan</option>
  <option value="nepalese">Nepalese</option>
  <option value="new zealander">New Zealander</option>
  <option value="ni-vanuatu">Ni-Vanuatu</option>
  <option value="nicaraguan">Nicaraguan</option>
  <option value="nigerien">Nigerien</option>
  <option value="north korean">North Korean</option>
  <option value="northern irish">Northern Irish</option>
  <option value="norwegian">Norwegian</option>
  <option value="omani">Omani</option>
  <option value="pakistani">Pakistani</option>
  <option value="palauan">Palauan</option>
  <option value="panamanian">Panamanian</option>
  <option value="papua new guinean">Papua New Guinean</option>
  <option value="paraguayan">Paraguayan</option>
  <option value="peruvian">Peruvian</option>
  <option value="polish">Polish</option>
  <option value="portuguese">Portuguese</option>
  <option value="qatari">Qatari</option>
  <option value="romanian">Romanian</option>
  <option value="russian">Russian</option>
  <option value="rwandan">Rwandan</option>
  <option value="saint lucian">Saint Lucian</option>
  <option value="salvadoran">Salvadoran</option>
  <option value="samoan">Samoan</option>
  <option value="san marinese">San Marinese</option>
  <option value="sao tomean">Sao Tomean</option>
  <option value="saudi">Saudi</option>
  <option value="scottish">Scottish</option>
  <option value="senegalese">Senegalese</option>
  <option value="serbian">Serbian</option>
  <option value="seychellois">Seychellois</option>
  <option value="sierra leonean">Sierra Leonean</option>
  <option value="singaporean">Singaporean</option>
  <option value="slovakian">Slovakian</option>
  <option value="slovenian">Slovenian</option>
  <option value="solomon islander">Solomon Islander</option>
  <option value="somali">Somali</option>
  <option value="south african">South African</option>
  <option value="south korean">South Korean</option>
  <option value="spanish">Spanish</option>
  <option value="sri lankan">Sri Lankan</option>
  <option value="sudanese">Sudanese</option>
  <option value="surinamer">Surinamer</option>
  <option value="swazi">Swazi</option>
  <option value="swedish">Swedish</option>
  <option value="swiss">Swiss</option>
  <option value="syrian">Syrian</option>
  <option value="taiwanese">Taiwanese</option>
  <option value="tajik">Tajik</option>
  <option value="tanzanian">Tanzanian</option>
  <option value="thai">Thai</option>
  <option value="togolese">Togolese</option>
  <option value="tongan">Tongan</option>
  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
  <option value="tunisian">Tunisian</option>
  <option value="turkish">Turkish</option>
  <option value="tuvaluan">Tuvaluan</option>
  <option value="ugandan">Ugandan</option>
  <option value="ukrainian">Ukrainian</option>
  <option value="uruguayan">Uruguayan</option>
  <option value="uzbekistani">Uzbekistani</option>
  <option value="venezuelan">Venezuelan</option>
  <option value="vietnamese">Vietnamese</option>
  <option value="welsh">Welsh</option>
  <option value="yemenite">Yemenite</option>
  <option value="zambian">Zambian</option>
  <option value="zimbabwean">Zimbabwean</option>
</select></td></tr>

                
                 <tr><td></td><td><button type="submit" name="update" class="myButton">Save</button></td></tr>
            </table>
    
    </form><?php
	 
		
		 $address=$_POST['address'];
		
$_POST = array_map("ucwords", $_POST);
	if(isset($_POST['update'])){
		$_POST = array_map("ucwords", $_POST);
		$nation=addslashes($_POST['nation']);
		 $address=addslashes($_POST['address']);
		 $age=addslashes($_POST['age']);
		 $tel=addslashes($_POST['tel']);
		 $email=addslashes($_POST['email']);
		  $quali=addslashes($_POST['quali']);
		 $field=addslashes($_POST['field']);
		$idcard=addslashes($_POST['idcard']);
		$cate=addslashes($_POST['parent_cat']);
		$agreed=addslashes($_POST['agreed']);
		$salary=addslashes($_POST['sub_cat']);
		if(empty($agreed)){
			$salary=addslashes($_POST['sub_cat']);
		}
		else {
			$salary=addslashes($_POST['agreed']);
		}
				
				$day=$_POST['day'];
				$month=$_POST['month'];
				$year=$_POST['year'];
				$dob=$day."/".$month."/".$year;

		 $name=addslashes($_POST['name']);
		 $status=addslashes($_POST['status']);
		 $date=date('d-m-Y');
		
		 $photo=mysql_real_escape_string($_FILES['userImage']['name']);
		
	$photo_temp=$_FILES['userImage']['tmp_name'];
	move_uploaded_file($photo_temp,"album/$photo");
			
		
		
		
		
		$image=mysql_query("INSERT INTO staffs set idcard='$idcard',name='$name',photo='$photo',cate='$cate',
		salary='$salary',level='$status',age='$age',tel='$tel',adress='$address',email='$email',dept='$dept',date='$date',
		 nation='$nation',quali='$quali',field='$field'")
		or die (mysql_error());
				echo "<script>alert('SUCCESS.".$name." Is registered. Thank You')</script>";
					echo '<meta http-equiv="Refresh" content="0; url=staffpage.php?all_staffs">';



		
	}
	

	

		
	?>
    
   
    </div>
   
   
	
    
   
			
		 		
</body>
</html>
<?php }  ?> 	

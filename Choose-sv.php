<?php 
include "includes/common.php";
include "includes/config.php";
include "includes/classes/class.Login.php";
include "includes/classes/class.datamanage.php";
$objlogin = new Login();
$objDatamanage = new Datamanage();
$objlogin->check();
//print_r($_SESSION);
$zone = $objDatamanage->getzonelist();

if(isset($_REQUEST['submit']))
{
	$_SESSION['zonal']=$_REQUEST['zone'];
	$_SESSION['supervisor']=$_REQUEST['super'];
	header("location: tqm-teamwork.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<script type="text/javascript" src="js/jquery-latest.js">
</script>
<title>GK AUDIT</title>

</head>
<script>
function validate()
{
	if(document.getElementById("zone").value == "0")	
    {
	  document.getElementById('valid').innerHTML="Please select the zone";
      document.getElementById('zone').focus();
           return false;
    }
   if(document.getElementById("super").value == "0")	
   {
	 document.getElementById('valid').innerHTML="Please select the supervisor";
     document.getElementById('super').focus();
          return false;
   }
}

function getzonal(val){
	
	$.ajax({
		url: 'getsv.php',
		type: "POST",
		data:"zonal="+val,
		success: function(data) {
			
			document.getElementById("superOpt").innerHTML=data;
				
		}
	});
}
</script>
<body>
<body style="margin:0px;">
<div class="header" style="background: #0CC866 none repeat scroll 0% 0%;">
<div class="container">
	<!-- <div class="header-logo"></div> -->
		<div class="header1">
	<h1><span>Daily Management Diagnosis</span>
	<span style="float:right;"><a class="logout" href="Logout.php">Logout</a></span>
	<span class="header-logo2" style="float:right"></span>
	<span class="alliance" style="float:right;margin-right:20px;"></span>
	</h1>
	</div>
	</div>
</div>
<div class="logo"></div>
<div class="login-block" style="margin:0 auto;">

    <h1>choose your sv</h1>
    <form name="csv" method="post" action="">
    <div id="error" style="color:red; align: center;"><span id="valid"></span></div>
    <!-- <input type="text" id="zone" name="zone" value="" placeholder="Enter your Zone" class="sv-login" onkeyup="getzonal(this.value);" />-->
	 <!--<select id="group" name="group" onchange="getgroup(this.value);">
		<option value="0">Select group</option>
		<?php

						    if(!empty($zone))
						    {
						    	while($row=mysql_fetch_array($group))
						    		{
						           		?><option value="<?php echo $row['Id'];?>" ><?php echo $row['Group_name'];?></option><?php 
						    		}    
						   }else{
						        echo '<option value="">Group not available</option>';
						    }
					    ?>
	</select>
	
	-->
	<select id="zone" name="zone" onchange="getzonal(this.value);">
		<option value="0">Select Zone</option>
		<?php

						    if(!empty($zone))
						    {
						    	while($row=mysql_fetch_array($zone))
						    		{
						           		//echo '<option value="'.$sw['Id'].'">'.$sw['DepartmentName'].'</option>';
						           		?><option value="<?php echo $row['Id'];?>" ><?php echo $row['Zonal_name'];?></option><?php 
						    		}    
						   }else{
						        echo '<option value="">Zone not available</option>';
						    }
					    ?>
	</select>
    <div id="superOpt">
	<select id="super" name="super" >
	<option value="0" >Select supervisor</option>
	</select>
	</div>
    <button type="submit" name="submit" id="submit" onclick="return validate();">Submit</button>
    </form>
</div>
</body>

</html>
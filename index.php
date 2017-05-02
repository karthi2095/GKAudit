<?php 
	include "includes/common.php";
	include "includes/config.php";
	include "includes/classes/class.Login.php";
	$objlogin = new Login();
	//echo 'tesy';
	//$objlogin->check();
	if(isset($_POST['submit']))
	{
		
		$objlogin->adminlogin();
	}
	
$Currentmonth = date('F').' - '.date('Y');
$Curmonthnum = date('m').'-'.date('Y');
$Prevmonth = date('F - Y', strtotime('-1 month'));
$Prevmonthnum = date('m-Y', strtotime('-1 month'));
?>
<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>GK AUDIT</title>

</head>
<script>
function validate()
{
	document.getElementById('valid').innerHTML="";
	if(document.getElementById("user").value == "")	
     {
	   document.getElementById('valid').innerHTML="Please enter username";
       document.getElementById('user').focus();
            return false;
     }
    if(document.getElementById("pass").value == "")	
     {
	   document.getElementById('valid').innerHTML="Please enter password";
       document.getElementById('pass').focus();
            return false;
     }
  /*  if(document.getElementById("month").value == "")	
    {
	   document.getElementById('valid').innerHTML="Please select month of the year";
      document.getElementById('month').focus();
           return false;
    }*/
}
</script>
<body style="margin:0px;">
<div class="header" style="background: #0CC866 none repeat scroll 0% 0%;">
<div class="container">
	<!-- <div class="header-logo"></div> -->
		<div class="header1">
	<h1><span>Daily Management Diagnosis</span>
	<span class="header-logo2" style="float:right"></span>
	<span class="alliance" style="float:right;margin-right: 20px;"></span>
	</h1>
	</div>
	</div>
</div>

<div class="container">
<div><img src="images/apwimage.png" style="width: 380px; float: left;margin-top: 136px;"/></div>
<div style="float: left;">
<div class="logo"></div>
<div class="login-block">
    <h1>Login</h1>
   	<div id="error" style="color:red; align: center;"><span id="valid"><?php if($_REQUEST['err']== 1){ echo "Invalid login credentials";}?></span></div>
     <form name="login" method="post" action="">
    <input type="text" name="user" id="user" value="" placeholder="Username" class="username" />
    <input type="password" name="pass" id="pass" value="" placeholder="Password" class="password" />
	<select name="month" id="month">
	<option value="<?php echo $Prevmonthnum;?>"><?php echo $Prevmonth;?></option>
		<option value="<?php echo $Curmonthnum;?>" selected=selected><?php echo $Currentmonth;?></option>
	
	</select>
	 <button type="submit" name="submit" id="submit" onclick="return validate();">Login</button>
    
    </form>
</div>
</div>
<div><img src="images/image2.png" style="width: 385px; float: right;margin-top: 136px;" /></div>

<div class="clear"></div>
</div>
<div class="container" style="margin-top:20px;">
<table>
<tbody>
<tr class="head">
<th style="width:10%;"></th>
<th style="width:17%">Level 1 (PLAN)</th>
<th style="width:17%">Level 2 (DO)</th>
<th style="width:17%" >Level 3 (CHECK)</th>
<th style="width:17%" >Level 4 (ACT)</th>
<th style="width:17%"  class="big">Level 5 (WTB)</th>
</tr>
<tr class="head1"></tr>

<tr class="level-sep" style="background:#fff;">
        <td class="">ACTIONS</td>
        <td class="">APW standards are in place in the shopfloor</td>
        <td class="">APW standards are applied in the shopfloor</td>
		<!-- <ul>
		<li>5S definitions</li>
		<li>5S standards</li>
	    </ul> 
		</td>  -->
	    <td class="">Issues and improvement opportunities are identified through routine checks and initial analysis</td>
		<td class="">Improvements to current standards and permanent countermeasures are implemented through root cause analysis</td>

		
		<td class="">
		 <!-- <ul>
		 <li>5S definitions are posted.</li>
		<li>APW 5S standards have been established for the zone</li>
		 </ul> -->
		 Pro-Active management is routine and problems are resolved before impacting performence.
		</td>
		
	</tr>
	
	<tr class="level-sep ro">
        <td class="">RESULTS</td>
        <td class="">
		<ul>
		<li>SV can explain and demonstrate APW knowledge/application</li>
		<li>Objectives, Targets and Plans are in place</li>
		<li>Appropriate training has been provided for the shopfloor</li>
		</ul>
		</td>
        <td class="">
		<ul>
		<li>Shopfloor is working according to standards</li>
		<li>Daily management is being performed to the correct standard (frequences, accuracy, ....)</li>
	    </ul> 
		</td> 
	    <td class="">
		<ul>
		<li>Non compliance are quickly returned to standard</li>
		<li>Containment and temporary countermeasures are  implemented</li>
		</ul>
		</td>
		<td class="">
		<ul>
		<li>Recurrence is decreasing</li>
		<li>Performance is improving</li>
		</ul>
		</td>
		<td class="">
		 <ul>
		 <li>Performance is at Bench Mark target levels</li>
		<li>Proactive and autonomous management culture exisits</li>
		 </ul>
		</td>
		
	</tr>
</tbody>
</table>
</div>


</body>

</html>
<?php
include "includes/common.php";
include "includes/classes/class.Login.php";

$objlogin = new Login();
$objlogin->check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>:- DM Diagnosis :-</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style1.css" rel="stylesheet">
<script src="js/jquery-latest.js" type="text/javascript"></script>
<script src="js/calculation.js" type="text/javascript"></script>
<script src="js/categoryrank-calc.js" type="text/javascript"></script>
<script>
function save()
{
	
	//alert("hi");
	 
	var str= $("form").serialize();
	//alert(str);
	$.ajax({
		url: 'save-quality.php',
		type: "POST",
		async: false,
		data:"&"+str,
		success: function(data) {
			//alert(data);
								if(data== 1){
									
									window.location.href='quality-management.php?msg=1';
									return false;
						
								}else if(data == 2)
									{
										//alert(data);	
										window.location.href ='quality-management.php?msg=2';
										return false;
									}else if(data == 0)			
										{				
											//alert(data);
											window.location.href ='quality-management.php?msg=3';
											return false;
										}
        					}
		});
	return false;
	
	
}
function validatecomments() 
{
	  
	
	if(document.getElementById('diagnosis_result_dnp').value == '')
	{
		
		alert("Please fill your comments");
		document.getElementById("diagnosis_result_dnp").focus();
		return false;
	}
	if(document.getElementById('kaizen_idea_dnp').value == '')
	{
		
		alert("Please fill your comments");
		document.getElementById("kaizen_idea_dnp").focus();
		return false;
	}
	if(document.getElementById('diagnosis_result_dnr').value == '')
	{
		
		alert("Please fill your comments");
		document.getElementById("diagnosis_result_dnr").focus();
		return false;
	}
	if(document.getElementById('kaizen_idea_dnr').value == '')
	{
		
		alert("Please fill your comments");
		document.getElementById("kaizen_idea_dnr").focus();
		return false;
	}

	document.getElementById("hdaction1").value=1;
	//return true;
	 save();
	
}
</script>
</head>

<body>
	<div class="container">
		<div class="title">
			
			<?php
			include "header.php";
			?>
			<h3>Diagnosis Category : Quality Management</h3>
			<span id="details-tag" style="width: 100%; text-align: right; float: right;">
			<td class="border0 padd1"><b>Auditee:</b></td>
			<td class="border0 edit-data"><?php echo $super['Name'];?></td><br>
			<td class="border0 padd1"><b>Auditor:</b></td>
			<td class="border0 edit-data"><?php echo $_SESSION['username'];?> </td>
			</span>

		</div>
		<div id="message"
			style="color: green; text-align: center; font-weight: bold;">
			<?php
			if($_REQUEST['msg'] == 1)
			{
				echo "Your audit has been saved successfully";
			}
			?>
		</div>
		<div id="message"
			style="color: red; text-align: center; font-weight: bold;">
			<?php
			if($_REQUEST['msg'] == 2)
			{
				echo "No changes to be saved";
			}
			if($_REQUEST['msg'] == 3)
			{
				echo "Failed to save";
			}

			?>
		</div>
		&nbsp; &nbsp; &nbsp; &nbsp;
		<div class="table-div">
			<form name="quality" method="post">
				<table cellpadding="0" cellspacing="0">
				<?php
				$itemqdp=$objlogin->Getitemscore(17);
				?>
					<input type="hidden" name="hdaction1" id="hdaction1" value="">
					<input type="hidden" name="level_totaldnp1" id="level_totaldnp1"
						value="<?php if($itemqdp['Level_total1'] != ""){ echo $itemqdp['Level_total1'];}else{ echo "0"; }?>">
					<input type="hidden" name="level_totaldnp2" id="level_totaldnp2"
						value="<?php if($itemqdp['Level_total2'] != ""){ echo $itemqdp['Level_total2'];}else{ echo "0"; }?>">
					<input type="hidden" name="level_totaldnp3" id="level_totaldnp3"
						value="<?php if($itemqdp['Level_total3'] != ""){ echo $itemqdp['Level_total3'];}else{ echo "0"; }?>">
					<input type="hidden" name="level_totaldnp4" id="level_totaldnp4"
						value="<?php if($itemqdp['Level_total4'] != ""){ echo $itemqdp['Level_total4'];}else{ echo "0"; }?>">
					<input type="hidden" name="level_totaldnp5" id="level_totaldnp5"
						value="<?php if($itemqdp['Level_total5'] != ""){ echo $itemqdp['Level_total5'];}else{ echo "0"; }?>">
					<input type="hidden" name="sub_total" id="sub_total" value="">

					<!-- <div id="msg1" style="text-align: center; color: green;"></div>
	<div id="msg3" style="text-align: center; color: red;"></div>
	<div id="msg2" style="text-align: center; color: red;"></div>
	<div id="msg4" style="text-align: center; color: green;"></div> -->
					<tbody>
						<tr class="bg-gray">
							<th style="width: 10%;" rowspan="2">Evaluation Item</th>
							<th style="width: 7%" class="small" colspan="5">Level</th>
							<th style="width: 20%;" rowspan="2">Alliance Compliance
								Requirement</th>
							<th style="width: 20%;" rowspan="2">Check Item</th>
							<th style="width: 7%" class="small" colspan="4">How</th>
							<th class="big" rowspan="2">Evaluation / Scoring Standard to
								achieve level</th>
						</tr>
						<tr class="bg-gray">
							<th style="width: 1%">1</th>
							<th style="width: 1%">2</th>
							<th style="width: 1%">3</th>
							<th style="width: 1%">4</th>
							<th style="width: 1%">5</th>
							<th>S</th>
							<th>D</th>
							<th>O</th>
							<th>G</th>

						</tr>

						<!--1st row -->
						<?php
						$level11=$objlogin->GetauditById(17,1,1);
						?>
						<input type="hidden" name="hidp11" id="hidp11"
							value="<?php echo $level11['Id'];?>">
						<tr>
							<td rowspan="16" class="text-center"><b>Never produce Defects</b>
							</td>
							<td class="padd0 text-center"><select name="dnp_11" id="dnp_11"
								onchange="dnp_level11(this); actualscorequality1();">
									<option value="0" <?php  if($level11['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level11['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1.1 The SV understands & can demonstrate the Quality
								Assurance requirements within the zone & can explain the purpose
								of the appropriate documents</td>
							<td>
								<ul>
									<li>- Engineering OS</li>
									<li>- Inspection standards</li>
									<li>- Operation Requirement Table</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<h3>The SV knows and can explain :</h3>
								<ul>
									<li>where to get his quality assurance checks from</li>
									<li>the purpose of the documents</li>
								</ul>
							</td>

						</tr>

						<!--2nd row -->
						<?php
						$level12=$objlogin->GetauditById(17,1,2);
						?>
						<input type="hidden" name="hidp12" id="hidp12"
							value="<?php echo $level12['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="dnp_12" id="dnp_12"
								onchange="dnp_level12(this); actualscorequality1();">
									<option value="0" <?php if($level12['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level12['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-2 There is a 4M change management system in place and the
								Supervisor can explain the purpose of 4M change management <span
								class="colorred">(planned or un-planned).</span>
							</td>
							<td>
								<ul>
									<li>- 4 M Change management</li>
									<li>- SV knowledge</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>The SV
								<ul>
									<li>- knows and can explain the 4M change Management system</li>
								</ul>
							</td>

						</tr>
						<!--2nd A row -->
						<?php
						$level13=$objlogin->GetauditById(17,1,3);
						?>
						<input type="hidden" name="hidp13" id="hidp13"
							value="<?php echo $level13['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="dnp_13" id="dnp_13"
								onchange="dnp_level13(this); actualscorequality1();">
									<option value="0" <?php if($level13['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level13['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-3 Operators who work on an assignment with an Important
								A/B/C (Nissan), CSR (Renault) components or characteristics have
								been trained and certified to do so</td>
							<td>
								<ul>
									<li>- Importance A/B/C & CSR Training records</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>The SV can demonstrate that Team members assigned to
								A/B/C/CSR operations in ILU planning have been trained and
								certified</td>

						</tr>
						<!--3rd row -->
						<?php
						$level21=$objlogin->GetauditById(17,2,1);
						?>
						<input type="hidden" name="hidp21" id="hidp21"
							value="<?php echo $level21['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_21" id="dnp_21"
								onchange="dnp_level21(this); actualscorequality2();">
									<option value="0" <?php if($level21['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_lev_1"
								id="quality_lev_1"
								value="<?php if($level21['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 The Control Item List is being used to manage the quality
								within the zone.</td>
							<td>
								<ul>
									<li>- Control item list</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>The SV show :</b>
								<ul>
									<li>CIL is being used to carry out daily confirmation checks at
										the correct frequency</li>
									<li>CIL contains relevant quality confirmation checks</li>
								</ul>
							</td>
							</td>



						</tr>
						<!--4th row -->
						<?php
						$level22=$objlogin->GetauditById(17,2,2);
						?>
						<input type="hidden" name="hidp22" id="hidp22"
							value="<?php echo $level22['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_22" id="dnp_22"
								onchange="dnp_level22(this); actualscorequality2();">
									<option value="0" <?php if($level22['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level22['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_lev_2"
								id="quality_lev_2"
								value="<?php if($level22['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-2 Tool and Gauge calibration is taking place in accordance
								with the standards.</td>
							<td>
								<ul>
									<li>- Tool & gauge calibration records</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>The SV can show Tool & Gauge calibration has been completed
								to the correct standard (frequency and specification)</td>
						</tr>
						<!--4th A row -->
						<?php
						$level23=$objlogin->GetauditById(17,2,3);
						?>
						<input type="hidden" name="hidp23" id="hidp23"
							value="<?php echo $level23['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_23" id="dnp_23"
								onchange="dnp_level23(this); actualscorequality2();">
									<option value="0" <?php if($level23['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level23['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_lev_3"
								id="quality_lev_3"
								value="<?php if($level23['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-3 The Supervisor can demonstrate recent 4M Change control <span
								class="colorred">(planned or un-planned) 
							
							</td>
							<td>
								<ul>
									<li>- 4M changes</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>The SV can show examples of recent of <span class="colorred">planned
									and un-planned </span>4M Change management</td>
						</tr>

						<!--4th B row -->
						<?php
						$level24=$objlogin->GetauditById(17,2,4);
						?>
						<input type="hidden" name="hidp24" id="hidp24"
							value="<?php echo $level24['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_24" id="dnp_24"
								onchange="dnp_level24(this); actualscorequality2();">
									<option value="0" <?php if($level24['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level24['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_lev_4"
								id="quality_lev_4"
								value="<?php if($level24['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-4 A/B/C (Nissan), CSR (Renault) processes are carried out
								according to required QA standards.</td>
							<td>
								<ul>
									<li>- A/B/C/CSR operation</li>
								</ul>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td class="text-center">0</td>
							<td>Validate :
								<ul>
									<li>the operator is performing the operation according to
										standard operation</li>
									<li>QA compliance within workstation (parts on floor, caps on,
										…)</li>
								</ul>
							</td>
						</tr>

						<!--4th C row -->
						<?php
						$level25=$objlogin->GetauditById(17,2,5);
						?>
						<input type="hidden" name="hidp25" id="hidp25"
							value="<?php echo $level25['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_25" id="dnp_25"
								onchange="dnp_level25(this); actualscorequality2();">
									<option value="0" <?php if($level25['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level25['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_lev_5"
								id="quality_lev_5"
								value="<?php if($level25['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-5 The zone has a register of Poka Yoke systems <span
								class="textline colorred">(Fail Safe)</span> and daily checks
								for zone Poka Yoke are being performed according to standard.</td>
							<td>
								<ul>
									<li>- Poka yoke register/List</li>
									<li>- Poka yoke check records</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>Poka Yoke (PY) register/List exist and include all current PY
								systems.
								<ul>
									<li>Check sheets are up to date</li>
									<li>Checking process is performed to standard (when possible)</li>
								</ul>
							</td>
						</tr>

						<!--4th D row -->
						<?php
						$level26=$objlogin->GetauditById(17,2,6);
						?>
						<input type="hidden" name="hidp26" id="hidp26"
							value="<?php echo $level26['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_26" id="dnp_26"
								onchange="dnp_level26(this); actualscorequality2();">
									<option value="0" <?php if($level26['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level26['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_lev_6"
								id="quality_lev_6"
								value="<?php if($level26['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-6 The zone demonstrates 'Quality Mindset' during all
								aspects of product handling, processing and storage to prevent
								potential quality concerns.</td>
							<td>
								<ul>
									<li>- Shop floor</li>
								</ul>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td class="text-center">0</td>
							<td>If 2 or more examples/evidence of poor Quality Mindset which
								could cause poor quality being produced, then this level is not
								achieved.</td>
						</tr>
						<!--5th row -->
						<?php
						$level31=$objlogin->GetauditById(17,3,1);
						?>
						<input type="hidden" name="hidp31" id="hidp31"
							value="<?php echo $level31['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_31" id="dnp_31"
								onchange="dnp_level31(this); actualscorequality3();">
									<option value="0" <?php if($level31['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_qdp_31"
								id="quality_qdp_31"
								value="<?php if($level31['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td>3-1 Issues identified using the Control Item List (CIL) are
								quickly <span class="colorred textline">identified &</span>
								corrected.</td>
							<td>
								<ul>
									<li>- Control Item List</li>
									<li>- Quick actions</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>When concerns are found they are corrected quickly to return
								to standard</td>

						</tr>

						<!--5th row -->
						<?php
						$level32=$objlogin->GetauditById(17,3,2);
						?>
						<input type="hidden" name="hidp32" id="hidp32"
							value="<?php echo $level32['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_32" id="dnp_32"
								onchange="dnp_level32(this); actualscorequality3();">
									<option value="0" <?php if($level32['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level32['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_qdp_32"
								id="quality_qdp_32"
								value="<?php if($level32['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td>3-2 Issues identified during zone Poka Yoke checks are
								quickly corrected.</td>
							<td>
								<ul>
									<li>- Poka yoke check records</li>
									<li>- Quick actions</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>When concerns are found they are rectified quickly to return
								to standard</td>

						</tr>

						<!--5th row -->
						<?php
						$level33=$objlogin->GetauditById(17,3,3);
						?>
						<input type="hidden" name="hidp33" id="hidp33"
							value="<?php echo $level33['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_33" id="dnp_33"
								onchange="dnp_level33(this); actualscorequality3();">
									<option value="0" <?php if($level33['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level33['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_qdp_33"
								id="quality_qdp_33"
								value="<?php if($level33['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td>3-3 Issues identified during Tool and Gauge calibration are
								quickly corrected.</td>
							<td>
								<ul>
									<li>- Tool and gauge calibration records</li>
									<li>- Quick actions</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>- When concerns are found they are rectified quickly to
								return to standard</td>

						</tr>

						<!--5th row -->
						<?php
						$level34=$objlogin->GetauditById(17,3,4);
						?>
						<input type="hidden" name="hidp34" id="hidp34"
							value="<?php echo $level34['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_34" id="dnp_34"
								onchange="dnp_level34(this); actualscorequality3();">
									<option value="0" <?php if($level34['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level34['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_qdp_34"
								id="quality_qdp_34"
								value="<?php if($level34['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td>3-4 Quality confirmation checks are taking place according to
								standard and issues identified are quickly corrected.</td>
							<td>
								<ul>
									<li>- Quality confirmation check records ( for example Torque
										Confirmation, Body Chisel Check, Paint Film Thickness records,
										Neighbour Checks compliance to standard op, C&R etc.)</li>
									<li>- Quick actions</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>Quality confirmation checks must be carried out in
										accordance with the standards</li>
									<li>Any deviation from specification must be documented and
										rectified quickly to return to standard</li>
								</ul>
							</td>

						</tr>


						<!--6th row -->
						<?php
						$level41=$objlogin->GetauditById(17,4,1);
						?>
						<input type="hidden" name="hidp41" id="hidp41"
							value="<?php echo $level41['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_41" id="dnp_41"
								onchange="dnp_level41(this); actualscorequality4();">
									<option value="0" <?php if($level41['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td>4-1 Supervisor is <b>pro-actively</b> implementing quality
								improvement activities to eliminate the <b>potential</b> for
								defects.</td>
							<td>
								<ul>
									<li>- Before/After condition for potential defects ( Poka Yoke
										<span class="colorred textline">fail safe</span> to eliminate
										human error in the process, Tune/optimise control limits to
										ensure specification closer to nominal, New line balance,
										implementation of kitting, part selection, commonisation of
										Bolts/nuts, successful design change, secondary damage
										prevention, <span class="colorred">Line balance to reduce the
											chance of defects. Improvements identified in Job
											Observation…..)</span></li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>SV can produce recent & relevant examples of proactive
								quality improvement activity.<br /> <span class="colorred">Improvement
									must be within previous 3 months. 
							
							</td>

						</tr>


						<!--5th row -->
						<?php
						$level51=$objlogin->GetauditById(17,5,1);
						?>
						<input type="hidden" name="hidp51" id="hidp51"
							value="<?php echo $level51['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_51" id="dnp_51"
								onchange="dnp_level51(this); actualscorequality5();">
									<option value="0" <?php if($level51['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level51['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td>5-1 Supervisor has implemented quality improvement ideas
								against human error that <b>has eliminated the need for
									inspection (NVA) within the process. 
							
							</td>
							<td>
								<ul>
									<li>- Improvement for elimination of inspection (poka yoke,
										design change…)</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>SV can produce recent & relevant examples of inspection
								reduction.</td>

						</tr>


						<!--5th row -->
						<?php
						$level52=$objlogin->GetauditById(17,5,2);
						?>
						<input type="hidden" name="hidp52" id="hidp52"
							value="<?php echo $level52['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnp_52" id="dnp_52"
								onchange="dnp_level52(this); actualscorequality5();">
									<option value="0" <?php if($level52['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($level52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-2 The Supervisor <span class="colorred">demonstrates
									'Quality Mindset' and </span>develops best practices suitable
								for horizontal deployment.</td>
							<td>
								<ul>
									<li>- Creation of Best practices & innovation</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>SV can produce recent & relevant examples of <b>best
									practices innovation</b>
							</td>

						</tr>

						<!--score row -->
						<input type="hidden" name="itemiddnp" id="itemiddnp"
							value="<?php echo $itemqdp['Id'];?>">
						<input type="hidden" name="item_scorednp" id="item_scorednp"
							value="<?php if($itemqdp['Itemscore'] != ""){ echo $itemqdp['Itemscore'];}else{ echo "0"; }?>">
						<tr>
							<td class="text-center score-tit">Item Score</td>
							<td colspan="5" class="text-center"><span id="total_itemdnp"><?php if($itemqdp['Itemscore'] != ""){ echo $itemqdp['Itemscore'];}else{ echo "0"; }?>
							</span></td>
							<td colspan="7" class="bg-gray"></td>

						</tr>
						<!--- for comments form auditor ---->
						<?php 	$commentdnp=$objlogin->GetComment(17); ?>
					<input type="hidden" name="Commentiddnp" id="Commentiddnp"
							value="<?php echo $commentdnp['Comment_id'];?>">
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" id="diagnosis_result_dnp" name="diagnosis_result_dnp" style="width: 99%;" ><?php echo stripslashes($commentdnp['Diagnosis_Result']); ?></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" id="kaizen_idea_dnp" name="kaizen_idea_dnp" style="width: 99%;" ><?php echo stripslashes($commentdnp['Kaizen_Idea']); ?></textarea></td>
						</tr>
						<!--- for comments form auditor  ------------->
						

						<!--Do not rceive row -->

						<!--1st row -->
						<?php
						$itemdnr=$objlogin->Getitemscore(36);
						?>
						<input type="hidden" name="hdaction2" id="hdaction2" value="">

						<input type="hidden" name="level_totaldnr1" id="level_totaldnr1"
							value="<?php if($itemdnr['Level_total1'] != ""){ echo $itemdnr['Level_total1'];}else{ echo "0"; }?>">
						<input type="hidden" name="level_totaldnr2" id="level_totaldnr2"
							value="<?php if($itemdnr['Level_total2'] != ""){ echo $itemdnr['Level_total2'];}else{ echo "0"; }?>">
						<input type="hidden" name="level_totaldnr3" id="level_totaldnr3"
							value="<?php if($itemdnr['Level_total3'] != ""){ echo $itemdnr['Level_total3'];}else{ echo "0"; }?>">
						<input type="hidden" name="level_totaldnr4" id="level_totaldnr4"
							value="<?php if($itemdnr['Level_total4'] != ""){ echo $itemdnr['Level_total4'];}else{ echo "0"; }?>">
						<input type="hidden" name="level_totaldnr5" id="level_totaldnr5"
							value="<?php if($itemdnr['Level_total5'] != ""){ echo $itemdnr['Level_total5'];}else{ echo "0"; }?>">
						<input type="hidden" name="sub_totaldnr" id="sub_totaldnr"
							value="">
							<?php
							$leveldr11=$objlogin->GetauditById(36,1,1);
							?>
						<input type="hidden" name="hidr11" id="hidr11"
							value="<?php echo $leveldr11['Id'];?>">
						<tr>
							<td rowspan="14" class="text-center"><b>Never receive, Never pass
									Defects</b></td>
							<td class="padd0 text-center"><select name="dnr_11" id="dnr_11"
								onchange="dnr_level11(this); actualscorequality1();">
									<option value="0" <?php if($leveldr11['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr11['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_qdr_11"
								id="quality_qdr_11"
								value="<?php if($leveldr11['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-1 The Supervisor has a defined standard for when to use &
								how to react to the 'QRQC call' <span class="colorred textline">/
									line stop</span> system when defects occur.</td>
							<td>
								<ul>
									<li>* QRQC call standard</li>
							
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>

									<li>* QRQC Call standard exists and contains details on when to
										activate and how to react, including upstream communication</li>

								</ul>
							</td>

						</tr>
						<!-- 2nd row-->
						<?php
						$leveldr12=$objlogin->GetauditById(36,1,2);
						?>
						<input type="hidden" name="hidr12" id="hidr12"
							value="<?php echo $leveldr12['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="dnr_12" id="dnr_12"
								onchange="dnr_level12(this); actualscorequality1();">
									<option value="0" <?php if($leveldr12['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr12['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_qdr_12"
								id="quality_qdr_12"
								value="<?php if($leveldr12['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-2 For zones with in-line QC assignment, the zone has a
								training and assessment process for Defect Detection, Quality
								Judgment and Defect Repair capability where appropriate.</td>
							<td>
								<ul>
									<li>* training material</li>
									<li>* training records</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Training material exists for in zone check man and
										includes Detection, Judgment and Repair (where required)</li>
									<li>* Training and certification records exists for assigned
										check persons</li>
								</ul>
							</td>

						</tr>
						<!-- 3 rd row-->
						<?php
						$leveldr13=$objlogin->GetauditById(36,1,3);
						?>
						<input type="hidden" name="hidr13" id="hidr13"
							value="<?php echo $leveldr13['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="dnr_13" id="dnr_13"
								onchange="dnr_level13(this); actualscorequality1();">
									<option value="0" <?php if($leveldr13['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr13['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_qdr_13"
								id="quality_qdr_13"
								value="<?php if($leveldr13['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-3 Procedure or Action Standards are established to manage
								defects leaving the zone.</td>
							<td>
								<ul>
									<li>* Action standard for defect outflow</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>Defect Outflow Action Standard exist and contains:
								<ul>
									<li>* Defect Containment.</li>
									<li>* Establishment of defect cut-off / clean point</li>
									<li>* Communication of cut-off / clean point and CM to Customer
										(Downstream process).</li>
								</ul>
							</td>

						</tr>
						<!-- 3rd A row-->
						<?php
						$leveldr14=$objlogin->GetauditById(36,1,4);
						?>
						<input type="hidden" name="hidr14" id="hidr14"
							value="<?php echo $leveldr14['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="dnr_14" id="dnr_14"
								onchange="dnr_level14(this); actualscorequality1();">
									<option value="0" <?php if($leveldr14['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr14['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_qdr_14"
								id="quality_qdr_14"
								value="<?php if($leveldr14['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-4 The Supervisor understands and can explain the zones
								quality assurance items within the QA check stations (out of
								zone)</td>
							<td>
								<ul>
									<li>Quality map / matrix</li>
									<li>In-line check station job allocation</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>Supervisor can :
								<ul>
									<li>* explain what the checks are</li>
									<li>* demonstrate where the checks take place</li>
								</ul>
							</td>

						</tr>


						<!-- row4-->
						<?php
						$leveldr21=$objlogin->GetauditById(36,2,1);
						?>
						<input type="hidden" name="hidr21" id="hidr21"
							value="<?php echo $leveldr21['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_21" id="dnr_21"
								onchange="dnr_level21(this); actualscorequality2();">
									<option value="0" <?php if($leveldr21['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 QRQC call is being used for quality defects within the
								process & data is recorded.</td>
							<td>
								<ul>
									<li>* QRQC Call Standard compliance</li>
									<li>* Help Call data</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* There is documented evidence that QRQC call standard was
										applied for recent Help Calls.</li>
								</ul>
							</td>

						</tr>
						<!-- row4A-->
						<?php
						$leveldr22=$objlogin->GetauditById(36,2,2);
						?>
						<input type="hidden" name="hidr22" id="hidr22"
							value="<?php echo $leveldr22['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_22" id="dnr_22"
								onchange="dnr_level22(this); actualscorequality2();">
									<option value="0" <?php if($leveldr22['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr22['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-2 If the zone has an In-Line Quality check station. The Job
								Allocation is dynamic and based on the zones quality performance
								and includes sufficient time for feedback cycle.</td>
							<td>
								<ul>
									<li>* Check man Job Allocation (S0S)</li>
									<li>* QA Item list (for long cycle times)</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Allocation reflects sufficient time to perform checks and
										feedback.</li>
									<li>* Check person is following JA.</li>
									<li>* Allocation reflects recent 4M changes.</li>
									<li>* QA item list exist (for long cycle times).</li>
								</ul>
							</td>
							<!-- row4B-->
							<?php
							$leveldr23=$objlogin->GetauditById(36,2,3);
							?>
							<input type="hidden" name="hidr23" id="hidr23"
								value="<?php echo $leveldr23['Id'];?>">
						</tr>
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_23" id="dnr_23"
								onchange="dnr_level23(this); actualscorequality2();">
									<option value="0" <?php if($leveldr23['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr23['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-3 Procedure or Action Standards are implemented when
								defects are passed to the customer (leave the zone)</td>
							<td>
								<ul>
									<li>* Defect Outflow Action Standard compliance</li>
									<li>* Operator defect tracking log</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Defect Outflow Action Standard has been followed for
										recent defects</li>
									<li>* Operators are assigned responsibility for all defects
										that pass from zone including to the in zone check station.</li>
								</ul>
							</td>

							<!-- row5-->
							<?php
							$leveldr31=$objlogin->GetauditById(36,3,1);
							?>
							<input type="hidden" name="hidr31" id="hidr31"
								value="<?php echo $leveldr31['Id'];?>">
						
						
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_31" id="dnr_31"
								onchange="dnr_level31(this); actualscorequality3();">
									<option value="0" <?php if($leveldr31['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-1 QRQC call data (number of calls, reason for call, etc.)
								are sorted and analysed to understand concerns. Quick actions
								are taken to return to standard.</td>
							<td>
								<ul>
									<li>* QRQC Call data</li>
									<li><span class="colorred textline">* Root Cause Analysis</span>
									</li>
									<li>* Quick Action</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>

									<li>* QRQC Call data has been sorted by Abnormality, Station,
										Operator.</li>
									<li>* Supervisor can produce documented evidence that Quick
										action was taken for recent QRQC calls (upstream feedback,
										return to standard)</li>
								</ul>
							</td>

						</tr>
						<!-- row5B-->
						<?php
						$leveldr32=$objlogin->GetauditById(36,3,2);
						?>
						<input type="hidden" name="hidr32" id="hidr32"
							value="<?php echo $leveldr32['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_32" id="dnr_32"
								onchange="dnr_level32(this); actualscorequality3();">
									<option value="0" <?php if($leveldr32['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr32['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-2 All defects which leave the zone are sorted and analysed
								to understand concerns. Appropriate actions are identified.
								Quick actions are taken to return to standard.</td>
							<td>
								<ul>
									<li>* Defect Outflow data</li>
									<li><span class="colorred textline">* Root cause analysis</span>
									</li>
									<li>* Quick Action</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* All zone defect outflow is collated, analysed and
										prioritised (critical and major defects).</li>
									<li>* Quick Action has taken place for all defect outflow.</li>
								</ul>
							</td>

						</tr>
						<!-- row6-->
						<?php
						$leveldr41=$objlogin->GetauditById(36,4,1);
						?>
						<input type="hidden" name="hidr41" id="hidr41"
							value="<?php echo $leveldr41['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_41" id="dnr_41"
								onchange="dnr_level41(this); actualscorequality4();">
									<option value="0" <?php if($leveldr41['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-1 Countermeasures are implemented to solve the concerns
								related to QRQC Calls. <span class="colorred textline">(including
									defects that are received and produced)</span></td>
							<td>
								<ul>
									<li>* Countermeasure for QRQC Calls</li>
									<li>* QRQC Call data</li>
									<li><span class="colorred ">* Root Cause Analysis</span></li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>

									<li>* It is evident that Countermeasures are in place and
										eliminate root cause.</li>
									<li><span class="colorred">* Root cause analysis has been
											performed.</span></li>
									<li>* Data indicates that related QRQC Calls are declining and
										or eliminated.</li>
								</ul>
							</td>

						</tr>

						<!-- row6 B-->
						<?php
						$leveldr42=$objlogin->GetauditById(36,4,2);
						?>
						<input type="hidden" name="hidr42" id="hidr42"
							value="<?php echo $leveldr42['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_42" id="dnr_42"
								onchange="dnr_level42(this); actualscorequality4();">
									<option value="0" <?php if($leveldr42['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr42['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-2 Countermeasures are taken against defects that have
								passed to the customer (downstream process) to prevent
								recurrence</span></td>
							<td>
								<ul>
									<li>* Root cause analysis</li>
									<li>* Countermeasure confirmation</li>
									<li>* SOS</li>
									<li>* Outflow data</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Root cause analysis has been performed based on priority.</li>
									<li>* Countermeasures have been communicated to the Operator.</li>
									<li>* It is evident that Countermeasures are in place and
										eliminate root cause.</li>
									<li>* SOS / Standards have been revised to reflect the improved
										condition.</li>
									<li>* Defect has not reoccurred.</li>
								</ul>
							</td>

						</tr>
						<!-- row8-->
						<?php
						$leveldr51=$objlogin->GetauditById(36,5,1);
						?>
						<input type="hidden" name="hidr51" id="hidr51"
							value="<?php echo $leveldr51['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_51" id="dnr_51"
								onchange="dnr_level51(this); actualscorequality5();">
									<option value="0" <?php if($leveldr51['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr51['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-1 All defects (received and passed) are investigated and
								robust countermeasures are implemented to prevent re-occurrence.</td>
							<td>
								<ul>
									<li>* Countermeasure for All defect outflow</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Supervisor can explain and provide documented evidence
										that all defects received have been fedback and defects
										produced and passed are investigated and countermeasured and
										defects do not reoccur.</li>
								</ul>
							</td>

						</tr>

						<!-- row7-->
						<?php 
	$leveldr52=$objlogin->GetauditById(36,5,2);	
?>
						<input type="hidden" name="hidr52" id="hidr52"
							value="<?php echo $leveldr52['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_52" id="dnr_52"
								onchange="dnr_level52(this); actualscorequality5();">
									<option value="0" <?php if($leveldr52['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-2 Through robust application of QC, the zone <span
								class="colorred textline">is achieving it's Quality targets and
							</span>has achieved zero defects outflow (zone
								responsibility)from the zone for the previous 3 months.</td>
							<td>
								<ul>
									<li>* Control charts</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>

									<li>Control Charts show <span class="colorred textline">that
											all quality KPI's are achieving target and </span>no defects
										that were the zones responsibility have 'out flowed' in the
										previous 3 months.</li>
								</ul>
							</td>

						</tr>



						<!-- row8B-->
						<?php 
	$leveldr53=$objlogin->GetauditById(36,5,3);	
?>
						<input type="hidden" name="hidr53" id="hidr53"
							value="<?php echo $leveldr53['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="dnr_53" id="dnr_53"
								onchange="dnr_level53(this); actualscorequality5();">
									<option value="0" <?php if($leveldr53['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveldr53['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-3 The Supervisor knows the Alliance quality KPI benchmarks
								for the <span class="colorred textline">zone </span>Shop and
								results <span class="colorred textline">from the zone is </span>are
								achieving TOP3 level.</td>
							<td>
								<ul>
									<li>* SV Knowledge</li>
									<li>* Alliance Benchmark data</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>

									<li>* Supervisor can provide quality Bench Mark results
										relating to their Shop</li>
									<li>* Shop is achieving TOP 3 Alliance quality KPI results.</li>
								</ul></td>

						</tr>
						<!--score row -->
						<input type="hidden" name="itemiddnr" id="itemiddnr"
							value="<?php echo $itemdnr['Id'];?>">
						<input type="hidden" name="item_scorednr" id="item_scorednr"
							value="<?php if($itemdnr['Itemscore'] != ""){ echo $itemdnr['Itemscore'];}else{ echo "0"; }?>">
						<tr>
							<td class="text-center score-tit">Item Score</td>
							<td colspan="5" class="text-center"><span id="total_itemdnr"><?php if($itemdnr['Itemscore'] != ""){ echo $itemdnr['Itemscore'];}else{ echo "0"; }?>
							</span></td>
							<td colspan="7" class="bg-gray"></td>

						</tr>
						<!--- for comments form auditor ---->
						<?php 	$commentdnr=$objlogin->GetComment(36); ?>
					<input type="hidden" name="Commentiddnr" id="Commentiddnr"
							value="<?php echo $commentdnr['Comment_id'];?>">
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" id="diagnosis_result_dnr" name="diagnosis_result_dnr" style="width: 99%;" ><?php echo stripslashes($commentdnr['Diagnosis_Result']); ?></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" id="kaizen_idea_dnr" name="kaizen_idea_dnr" style="width: 99%;" ><?php echo stripslashes($commentdnr['Kaizen_Idea']); ?></textarea></td>
						</tr>
						<!--- for comments form auditor  ------------->

						<tr class="item1">
							<td colspan="6"><b>Category Score<b>
							
							</td>
							<td colspan="2" rowspan="5" class="item2"><b class="score-tit">Diagnosis
									Method:</b><br> 1. Commence diagnosis for level 1 for each
								Evaluation Item.<br> 2. Continue the diagnosis by level, if the
								Supervisors fails to deliver the Compliance Requirement within a
								level, complete the rest of the level and stop the diagnosis
								scoring for that particular Evaluation Item. If item is not
								applicable give the score and move to next item.<br> 3. For
								Diagnosis categories with more than 1 Evaluation Item, repeat
								step 2 for the next Evaluation Item.</td>
							<td colspan="5" rowspan="5" class="item2"><b class="score-tit">Key:</b><br>
								S = Talk to and request information from the Supervisor.<br> D =
								Request to see and then validate documentation.<br> O = Talk to
								and request information from the Operator.<br> G = Validate the
								actual condition in the Genba (shop floor).</td>

						</tr>
						<?php
		$getrank = $objlogin->Getcategory(17);
	?>
						<input type="hidden" name="c_id" id="c_id"
							value="<?php echo $getrank['ID'];?>">
						<input type="hidden" name="score1" id="score1"
							value="<?php if($getrank['Actual_score1'] != ""){ echo $getrank['Actual_score1'];}else{ echo "0"; }?>">
						<input type="hidden" name="score2" id="score2"
							value="<?php if($getrank['Actual_score2'] != ""){ echo $getrank['Actual_score2'];}else{ echo "0"; }?>">
						<input type="hidden" name="score3" id="score3"
							value="<?php if($getrank['Actual_score3'] != ""){ echo $getrank['Actual_score3'];}else{ echo "0"; }?>">
						<input type="hidden" name="score4" id="score4"
							value="<?php if($getrank['Actual_score4'] != ""){ echo $getrank['Actual_score4'];}else{ echo "0"; }?>">
						<input type="hidden" name="score5" id="score5"
							value="<?php if($getrank['Actual_score5'] != ""){ echo $getrank['Actual_score5'];}else{ echo "0"; }?>">
						<tr>
							<td>Available score</td>
							<td>/7</td>
							<td>/9</td>
							<td>/6</td>
							<td>/3</td>
							<td>/5</td>
						</tr>
						<tr>
							<td>Actual Score</td>
							<td id="level1"><?php if($getrank['Actual_score1'] != ""){ echo $getrank['Actual_score1'];}else{ echo "0"; }?>
							</td>
							<td id="level2"><?php if($getrank['Actual_score2'] != ""){ echo $getrank['Actual_score2'];}else{ echo "0"; }?>
							</td>
							<td id="level3"><?php if($getrank['Actual_score3'] != ""){ echo $getrank['Actual_score3'];}else{ echo "0"; }?>
							</td>
							<td id="level4"><?php if($getrank['Actual_score4'] != ""){ echo $getrank['Actual_score4'];}else{ echo "0"; }?>
							</td>
							<td id="level5"><?php if($getrank['Actual_score5'] != ""){ echo $getrank['Actual_score5'];}else{ echo "0"; }?>
							</td>
						</tr>
						<input type="hidden" name="achieve1" id="achieve1"
							value="<?php if($getrank['Achievement1'] !=""){ echo $getrank['Achievement1']; }else{ echo "0"; }?>">
						<input type="hidden" name="achieve2" id="achieve2"
							value="<?php if($getrank['Achievement2'] !=""){ echo $getrank['Achievement2']; }else{ echo "0"; }?>">
						<input type="hidden" name="achieve3" id="achieve3"
							value="<?php if($getrank['Achievement3'] !=""){ echo $getrank['Achievement3']; }else{ echo "0"; }?>">
						<input type="hidden" name="achieve4" id="achieve4"
							value="<?php if($getrank['Achievement4'] !=""){ echo $getrank['Achievement4']; }else{ echo "0"; }?>">
						<input type="hidden" name="achieve5" id="achieve5"
							value="<?php if($getrank['Achievement5'] !=""){ echo $getrank['Achievement5']; }else{ echo "0"; }?>">
						<tr>
							<td>Achievement %</td>
							<td id="achievement1"><?php if($getrank['Achievement1'] !=""){ echo $getrank['Achievement1']; }else{ echo "0"; }?>%</td>
							<td id="achievement2"><?php if($getrank['Achievement2'] !=""){ echo $getrank['Achievement2']; }else{ echo "0"; }?>%</td>
							<td id="achievement3"><?php if($getrank['Achievement3'] !=""){ echo $getrank['Achievement3']; }else{ echo "0"; }?>%</td>
							<td id="achievement4"><?php if($getrank['Achievement4'] !=""){ echo $getrank['Achievement4']; }else{ echo "0"; }?>%</td>
							<td id="achievement5"><?php if($getrank['Achievement5'] !=""){ echo $getrank['Achievement5']; }else{ echo "0"; }?>%</td>
						</tr>
						<tr>
							<td>Category Rank</td>
							<input type="hidden" name="categorydnp" id="categorydnp"
								value="<?php if($getrank['Category_rank'] !=""){ echo $getrank['Category_rank']; }else{ echo "0.0"; }?>">
							<td colspan="5" class="text-center" id="category-rankdnp"><?php if($getrank['Category_rank'] !=""){ echo $getrank['Category_rank']; }else{ echo "0.0"; }?>
							</td>
						</tr>




					</tbody>

					</div>
				</table>

				<div style="float: right">
					<button type="button" class="next"
						onclick="validatecomments();">Submit</button>
			
			</form>


		</div>

	</div>

</body>
</html>

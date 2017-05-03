<?php
include "includes/common.php";
include "includes/config.php";
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
<script src="js/calculation2.js" type="text/javascript"></script>
<script src="js/categoryrank-calc.js" type="text/javascript"></script>
<script src="js/validatequestion.js" type="text/javascript"></script>
<script>
  function savesop()
  { 
	  //alert("");  	

  var str= $("form").serialize();
  	//alert(str);
  	$.ajax({
  		url: 'save_sop.php',
  		type: "POST",
  		async: false,
  		data:"&"+str,
  		success: function(data) {
  		//	alert(data);
						  			if(data== 1){
										
										window.location.href='standard-operation.php?msg=1';
										return false;
							
									}else if(data == 2)
										{
											//alert(data);	
											window.location.href ='standard-operation.php?msg=2';
											return false;
										}else if(data == 0)			
											{				
												//alert(data);
												window.location.href ='standard-operation.php?msg=3';
												return false;
											}
								}
			});
  	return false;
  	
  }
  function validatecomments() 
  {
		var sop1 = document.getElementById('diagnosis_result_sop').value;
	    var sop2 = document.getElementById('kaizen_idea_sop').value; 
	
	if(sop1.trim() == '')
	{
		
		alert("Please enter the comments");
		document.getElementById("diagnosis_result_sop").focus();
		return false;
	}
	if(sop2.trim() == '')
	{
		
		alert("Please enter the comments");
		document.getElementById("kaizen_idea_sop").focus();
		return false;
	}
	
	document.getElementById("hdaction").value=1;
	//return true;
	 savesop();
	
}
  </script>
</head>

<body>
	<div class="container">
		<div class="title">
			
			<?php
			include "header.php";
			?>
			<h3>Diagnosis Category : Standard Operation</h3>
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
			<form name="SOP" method="post" action="">
				<table cellpadding="0" cellspacing="0">
				<?php
				$itemsop=$objlogin->Getitemscore(49);
				?>
					<input type="hidden" name="hdaction" id="hdaction" value="">
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

							<!--Standar opertation row -->

							<!--1st row -->
							<?php
							$level11=$objlogin->GetauditById(49,1,1);
							?>
							<input type="hidden" name="hisop11" id="hisop11"
								value="<?php echo $level11['Id'];?>">
						
						
						<tr>
							<td rowspan="14" class="text-center"><b>Standard Operation</b></td>
							<td class="padd0 text-center"><select name="sop_11" id="sop_11"
								onchange="level11sop();">
									<option value="0" <?php  if($level11['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level11['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_sop_11"
								id="quality_sop_11"
								value="<?php if($leveldr11['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-1 All operations with Engineering Operation Sheets have
								Standard Operation Sheets (SOS) and they are written in
								accordance with A-TWI standards. Including QA Checks.</td>
							<td>
								<ul>
									<li>* OS Sheets</li>
									<li>* SOS (Analysis, Procedure, Flow, Combination)</li>

								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Supervisor explains that all zone processes(cyclic) have
										SOS.</li>
									<li>* SOS is in correct format (Analysis for Cyclic, Procedure
										for Non cyclic).</li>
									<li>* SOS's have been created based on OS according to ATWI.</li>
									<li>* Main Steps and Key points have been correctly identified
									</li>
								</ul>
							</td>

						</tr>
						<!-- 2nd row-->
						<?php
						$level12=$objlogin->GetauditById(49,1,2);
						?>
						<input type="hidden" name="hisop12" id="hisop12"
							value="<?php echo $level12['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="sop_12" id="sop_12"
								onchange="level12sop();">
									<option value="0" <?php  if($level12['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level12['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_sop_12"
								id="quality_sop_12"
								value="<?php if($leveldr11['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-2 Non cyclic operations which could impact on the quality
								of the product have Standard Operation Sheets i.e. Tool
								calibration, sealer barrel change, Quality checks, TPM, backup
								procedures etc.</td>
							<td>
								<ul>
									<li>* SOS (Procedure, Flow)</li>

								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Supervisor explains that all zone processes (Non cyclic)
										have SOS.</li>
									<li>* SOS is correct format.</li>
									<li>* SOS have been created based on OS according to ATWI.</li>
									<li>* Main Steps and Key points have been correctly identified.</li>
								</ul>
							</td>

						</tr>
						<!-- 3 rd row-->
						<?php
						$level13=$objlogin->GetauditById(49,1,3);
						?>
						<input type="hidden" name="hisop13" id="hisop13"
							value="<?php echo $level13['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="sop_13" id="sop_13"
								onchange="level13sop();">
									<option value="0" <?php  if($level13['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level13['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_sop_13"
								id="quality_sop_13"
								value="<?php if($leveldr11['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-3 Job Allocation Sheets are created for each assignment.</td>
							<td>
								<ul>
									<li>* Job Allocation SOS</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Each assignment has Job Allocation sheet based on current
										line balance.</li>
									<li>* JA sheet includes Main Steps, Time, Key Points and
										Walking Path.</li>

								</ul>
							</td>

						</tr>
						<!-- 3rd A row-->
						<?php
						$level14=$objlogin->GetauditById(49,1,4);
						?>
						<input type="hidden" name="hisop14" id="hisop14"
							value="<?php echo $level14['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="sop_14" id="sop_14"
								onchange="level14sop();">
									<option value="0" <?php  if($level14['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level14['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_sop_14"
								id="quality_sop_14"
								value="<?php if($leveldr11['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-4 Authors of the SOS have been trained to write them during
								formal A-TWI education.</td>
							<td>
								<ul>
									<li>* ATWI Training records</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* A-TWI training records exists for Supervisor and Leaders
										of the zone.</li>

								</ul>
							</td>
						</tr>
						<?php
						$level15=$objlogin->GetauditById(49,1,5);
						?>
						<input type="hidden" name="hisop15" id="hisop15"
							value="<?php echo $level15['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="sop_15" id="sop_15"
								onchange="level15sop();">
									<option value="0" <?php  if($level15['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level15['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select> <input type="hidden" name="quality_sop_15"
								id="quality_sop_15"
								value="<?php if($leveldr11['Audit_Check'] == 1){ echo '1'; }else{ echo '0';}?>">
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-5 The Supervisor has a schedule to review Standard
								Operation Sheets (for example every 6 months) and complete Job
								Observations (every job every month).</td>
							<td>
								<ul>
									<li>* SOS Review Schedule</li>
									<li>* Job Observation Schedule</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* SOS review schedule exists.</li>
									<li>* Job Observation schedule has been created based on
										observing every assignment, every month.</li>
								</ul>
							</td>

						</tr>

						<!-- row4-->
						<?php
						$level21=$objlogin->GetauditById(49,2,1);
						?>
						<input type="hidden" name="hisop21" id="hisop21"
							value="<?php echo $level21['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="sop_21" id="sop_21"
								onchange="level21sop();">
									<option value="0" <?php  if($level21['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 The Supervisor has completed the shop Basic Skills
								program and can perform all cyclic operations in the zone <span
								class="colorred">to 'I' level (cycle time achievement not
									required)</span>
							</td>
							<td>
								<ul>
									<li>* Basic Skills records</li>
									<li>* Shop Floor practical skill / knowledge</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Validate Basic Skill records</li>
									<li>* Validate practical skill for performing actual operations</li>

								</ul>
							</td>

						</tr>
						<!-- row4A-->
						<?php
						$level22=$objlogin->GetauditById(49,2,2);
						?>
						<input type="hidden" name="hisop22" id="hisop22"
							value="<?php echo $level22['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="sop_22" id="sop_22"
								onchange="level22sop();">
									<option value="0" <?php  if($level22['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level22['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-2 Operators are working in compliance with SOS / Job
								Allocation and fully understand the Key Points of the operation.</td>
							<td>
								<ul>
									<li>* Operator SOS compliance</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Operators must follow the detail and sequence as
										specified in the SOS / Job Allocation for each Operation
										reviewed.</li>
									<li>* Key Points must be carried out exactly as specified in
										the SOS.</li>
								</ul>
							</td>
							<!-- row4B-->
							<?php
							$level23=$objlogin->GetauditById(49,2,3);
							?>
							<input type="hidden" name="hisop23" id="hisop23"
								value="<?php echo $level23['Id'];?>">
						</tr>
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="sop_23" id="sop_23"
								onchange="level23sop();">
									<option value="0" <?php  if($level23['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level23['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-3 Non Cyclic operations are being carried out in accordance
								with the SOS.</td>
							<td>
								<ul>
									<li>* Operator SOS compliance</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Operators must follow the detail sequence as specified in
										the SOS for each Operation reviewed.</li>
									<li>* Key Points must be carried out exactly as specified in
										the SOS.</li>
									<ul>
							
							</td>

							<!-- row5-->
							<?php
							$level31=$objlogin->GetauditById(49,3,1);
							?>
							<input type="hidden" name="hisop31" id="hisop31"
								value="<?php echo $level31['Id'];?>">
						
						
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="sop_31" id="sop_31"
								onchange="level31sop();">
									<option value="0" <?php  if($level31['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-1 Job Observations are conducted to validate that the
								operator is working in accordance with the standard operations
								and to identify improvement opportunities within the assignment.
								Quick actions are taken to return to standard.</td>
							<td>
								<ul>
									<li>* Job Observation sheets</li>
									<li><span class="textline colorred">* Job allocation</span>*
										SOS</li>
									<li>* Supervisor Job Observation compliance</li>
									<li>* Quick Actions</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Supervisor is conducting Job Observations using APW Job
										Observation sheet and with SOS.</li>
									<li>* There is documented evidence that the Supervisor took
										Quick Action when deviation from standard was identified.</li>

								</ul>
							</td>

						</tr>
						<!-- row5B-->
						<?php
						$level32=$objlogin->GetauditById(49,3,2);
						?>
						<input type="hidden" name="hisop32" id="hisop32"
							value="<?php echo $level32['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="sop_32" id="sop_32"
								onchange="level32sop();">
									<option value="0" <?php  if($level32['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level32['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-2 Standard Operation Sheets are reviewed in accordance with
								plant review guideline. If improvement opportunity is
								identified, implement quick action to resolve the issue.</td>
							<td>
								<ul>
									<li>* SOS review compliance</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Reviwed SOS's have been reviewed in accordance with the
										plant guidelines.</li>

								</ul>
							</td>

						</tr>
						<!-- row6-->
						<?php
						$level41=$objlogin->GetauditById(49,4,1);
						?>
						<input type="hidden" name="hisop41" id="hisop41"
							value="<?php echo $level41['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="sop_41" id="sop_41"
								onchange="level41sop();">
									<option value="0" <?php  if($level41['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-1 SOS are revised where applicable, following a 4M change.
								This should include process changes following countermeasures to
								defects.</td>
							<td>
								<ul>
									<li>* SOS revisions</li>
									<li>* Communication to Operators</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td>
								<ul>
									<li>* Validate latest 3 SOS revisions.</li>
									<li>* There is documented evidence that SOS revisions have been
										communicated to Operators.</li>
								</ul>
							</td>

						</tr>

						<!-- row6 B-->
						<?php
						$level42=$objlogin->GetauditById(49,4,2);
						?>
						<input type="hidden" name="hisop42" id="hisop42"
							value="<?php echo $level42['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="sop_42" id="sop_42"
								onchange="level42sop();">
									<option value="0" <?php  if($level42['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level42['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-2 Improvement opportunities identified during Job
								Observation have been implemented.</span></td>
							<td>
								<ul>
									<li>* Countermeasure implementation</li>
									<li>* Job Observation sheets</li>
									<li>* Facts and Data</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Countermeasure is in place.</li>
									<li>* Supervisor can demonstrate the improvement using facts
										and data.</li>
								</ul>
							</td>

						</tr>
						<!-- row8-->
						<?php
						$level51=$objlogin->GetauditById(49,5,1);
						?>
						<input type="hidden" name="hisop51" id="hisop51"
							value="<?php echo $level51['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="sop_51" id="sop_51"
								onchange="level51sop();">
									<option value="0" <?php  if($level51['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level51['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-1 Svr is actively looking to improve current best method
								using SOS. There are no issues with any of the SOS viewed.</td>
							<td>
								<ul>
									<li>* SOS</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* At least 5 Standard Operations are improved based on
										pro-active process development within the last 6 months.</li>
									<li>* 80% of work stations do not produce defects,
										injuries/incidents and zero line stops for the previous month.</li>
								</ul>
							</td>

						</tr>

						<!-- row7-->
						<?php
						$level52=$objlogin->GetauditById(49,5,2);
						?>
						<input type="hidden" name="hisop52" id="hisop52"
							value="<?php echo $level52['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="sop_52" id="sop_52"
								onchange="level52sop();">
									<option value="0" <?php  if($level52['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-2 There are no operator related quality defects in the zone
								>3 months.</td>
							<td>
								<ul>
									<li>* Zone Quality data</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Documented evidence that no Operator has produced a
										defect within previous 3 months.</li>
								</ul>
							</td>

						</tr>
					
						<!--score row
	
	<input type="hidden" name="itemidsop" id="itemidsop" value="<?php echo $itemsop['Id'];?>">
	<input type="hidden" name="itemscoresop" id="itemscoresop" value="<?php echo $itemsop['Itemscore'];?>">
<tr>
<td class="text-center score-tit">Item Score</td>
<td colspan="5" class="text-center" id="total_itemsop">0.0</td>
<td colspan="7" class="bg-gray"></td>

</tr> -->
						<!--- for comments form auditor ---->
						<?php 	$commentsop=$objlogin->GetComment(49); ?>
					<input type="hidden" name="Commentidsop" id="Commentidsop"
							value="<?php echo $commentsop['Comment_id'];?>">
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" id="diagnosis_result_sop" name="diagnosis_result_sop" style="width: 99%;" ><?php echo stripslashes($commentsop['Diagnosis_Result']); ?></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" id="kaizen_idea_sop" name="kaizen_idea_sop" style="width: 99%;" ><?php echo stripslashes($commentsop['Kaizen_Idea']); ?></textarea></td>
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
		$getrank = $objlogin->Getcategory(49);
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
							<td>/5</td>
							<td>/3</td>
							<td>/2</td>
							<td>/2</td>
							<td>/2</td>
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
							<input type="hidden" name="category" id="category"
								value="<?php if($getrank['Category_rank'] !=""){ echo $getrank['Category_rank']; }else{ echo "0.0"; }?>">
							<td colspan="5" class="text-center" id="category-rank"><?php if($getrank['Category_rank'] !=""){ echo $getrank['Category_rank']; }else{ echo "0.0"; }?>
							</td>
						</tr>




					</tbody>

				</table>
				<div style="float: right">
					<button type="button" class="next" onclick="validatecomments();">Submit</button>
				</div>
			</form>

		</div>

	</div>

</body>
</html>

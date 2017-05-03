<?php

include "includes/common.php";
include "includes/config.php";
include "includes/classes/class.Login.php";

$objlogin = new Login();
$objlogin->check();
//$data=$objlogin->getdata();
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
<script src="js/validatequestion.js" type="text/javascript"></script>
<script type="text/javascript">
 function savewal()
{
	
	var str= $("form").serialize();
	//alert(str);
	$.ajax({
		url: 'save_wal.php',
		type: "POST",
		async: false,
		data:"&"+str,
		success: function(data) {
			//alert(data);
									if(data== 1){
										
										window.location.href='work-allocation.php?msg=1';
										return false;
							
									}else if(data == 2)
										{
											//alert(data);	
											window.location.href ='work-allocation.php?msg=2';
											return false;
										}else if(data == 0)			
											{				
												//alert(data);
												window.location.href ='work-allocation.php?msg=3';
												return false;
											}
								}
		});
	return false;
	
}
 function validatecomments() 
 {
 	  var wal1 = document.getElementById('diagnosis_result_wal').value;
 	  var wal2 = document.getElementById('kaizen_idea_wal').value;
 	
 	if(wal1.trim() == '')
 	{
 		
 		alert("Please enter the comments");
 		document.getElementById("diagnosis_result_wal").focus();
 		return false;
 	}
 	if(wal2.trim() == '')
 	{
 		
 		alert("Please enter the comments");
 		document.getElementById("kaizen_idea_wal").focus();
 		return false;
 	}
 	
 	document.getElementById("hdaction").value=1;
 	//return true;
 	 savewal();
 	
 }
</script>
</head>

<body>
	<div class="container">
		<div class="title">
			
			<?php
			include "header.php";
			?>
			<h3>Diagnosis Category : Work Allocation & Assignment Layout</h3>
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
			<form name="WAL" method="post" action="">
				<table cellpadding="0" cellspacing="0">
					<tbody>
						<input type="hidden" name="hdaction" id="hdaction" value="">
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
							$level11=$objlogin->GetauditById(79,1,1);
							?>
							<input type="hidden" name="hiwal11" id="hiwal11"
								value="<?php echo $level11['Id'];?>">
						
						
						<tr>
							<td rowspan="12" class="text-center"><b>Work Allocation (Line
									Balance) & Assignment Layout</b></td>
							<td class="padd0 text-center"><select name="wal_11" id="wal_11"
								onchange="level11wal();">
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
							<td>1-1 Operator allocation is clearly defined. The number of
								Operators and Man Assignments can be explained. Absence and
								holiday cover should be included.</td>
							<td>
								<ul>
									<li>* Man map / ILU / Line balance chart etc…</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* There is documentation that shows number of Operators
										ROR, RTO and includes absentee and holiday coverage plans.</li>

								</ul>
							</td>

						</tr>
						<!-- 2nd row-->
						<?php
						$level12=$objlogin->GetauditById(79,1,2);
						?>
						<input type="hidden" name="hiwal12" id="hiwal12"
							value="<?php echo $level12['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="wal_12" id="wal_12"
								onchange="level12wal();">
									<option value="0" <?php  if($level12['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level12['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-2 The zone has a line balance based on current cycle time
								of the line.</td>
							<td>
								<ul>
									<li>* Line balance system</li>
									<li>* Job Allocation sheet</li>
									<li><span class="colorred">* Capacity Planning document /
											Production Plan</span></li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Current cycle time is reflected on Line Balance System,
										Job Allocation sheet.</li>

								</ul>
							</td>

						</tr>


						<!-- row4-->
						<?php
						$level21=$objlogin->GetauditById(79,2,1);
						?>
						<input type="hidden" name="hiwal21" id="hiwal21"
							value="<?php echo $level21['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="wal_21" id="wal_21"
								onchange="level21wal();">
									<option value="0" <?php  if($level21['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 The line balance displays accurate times by assignment
								for average model and include times for each individual model
								derivatives.</td>
							<td>
								<ul>
									<li>Line balance</li>
									<li>Job Allocation sheet</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Actual times for each model derivative and average model
										times must be in place for the current model mix within the
										Line Balance method.</li>

								</ul>
							</td>

						</tr>
						<!-- row4A-->
						<?php
						$level22=$objlogin->GetauditById(79,2,2);
						?>
						<input type="hidden" name="hiwal22" id="hiwal22"
							value="<?php echo $level22['Id'];?>">

						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="wal_22" id="wal_22"
								onchange="level22wal();">
									<option value="0" <?php  if($level22['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level22['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-2 The line balance system clearly shows the split between
								Value Added (VA) and Non Value Added (NVA) operations.</td>
							<td>
								<ul>
									<li>* Line balance</li>
									<li>* Job Allocation sheet,<span class="colorred">* Man/Machine
											Chart …..</span></li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* NVA and VA information must be in place in the Line
										Balance method.</li>
							
							</td>
							<!-- row4B-->
							<?php
							$level23=$objlogin->GetauditById(79,2,3);
							?>
							<input type="hidden" name="hiwal23" id="hiwal23"
								value="<?php echo $level23['Id'];?>">
						</tr>
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="wal_23" id="wal_23"
								onchange="level23wal();">
									<option value="0" <?php  if($level23['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level23['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-3 Assignment Layout for parts and tools location has been
								defined - all part locations are correctly labeled with part
								number and all locations for tooling are clearly identified and
								items are in the correct location.</td>
							<td>
								<ul>
									<li>* Tools and Parts layout</li>

								</ul>
							</td>

							<td></td>
							<td></td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>In the workstations reviewed, all parts have been clearly
										labeled with part number and all items / parts are in the
										correct locations.</li>
									<li>All tool locations are clearly defined and are in the
										correct location.</li>
								</ul>
							</td>

							<!-- row 2-4-->
							<?php
							$level24=$objlogin->GetauditById(79,2,4);
							?>
							<input type="hidden" name="hiwal24" id="hiwal24"
								value="<?php echo $level24['Id'];?>">
						</tr>
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="wal_24" id="wal_24"
								onchange="level24wal();">
									<option value="0" <?php  if($level24['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level24['Audit_Check'] == 1 ){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-4 Production lead time is considered when producing parts
								to stock and no over production occurs.<br>Min and Max stock
								levels should be specified / identified.</td>
							<td>
								<ul>
									<li>Sub Assembly Workstations (Main Line and Line side)</span>
									</li>
								</ul>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* There is no over-production of sub assemblies in any
										workstation.</li>
									<li>* Min and Max stock levels have been decided (where
										applicable).</li>
								</ul>
							</td>

							<!-- row 2-4-->
							<?php
							$level25=$objlogin->GetauditById(79,2,5);
							?>
							<input type="hidden" name="hiwal25" id="hiwal25"
								value="<?php echo $level25['Id'];?>">
						</tr>
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="wal_25" id="wal_25"
								onchange="level25wal();">
									<option value="0" <?php  if($level25['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level25['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-5 Stock rotation First in First Out (FIFO) is applied and
								Lot Control procedure is followed where applicable.</td>
							<td>
								<ul>
									<li>* Workstations with line side stock requirements</li>
									<li>* Lot control records</li>
								</ul>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>Parts must be presented and stored in order to ensure FIFO
										is achieved.</li>
									<li>Lot Control methods must be in use and the procedure being
										followed where they have been specified.</li>
								</ul>
							</td>

							<!-- row5-->
							<?php
							$level31=$objlogin->GetauditById(79,3,1);
							?>
							<input type="hidden" name="hiwal31" id="hiwal31"
								value="<?php echo $level31['Id'];?>">
						
						
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="wal_31" id="wal_31"
								onchange="level31wal();">
									<option value="0" <?php  if($level31['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-1 The 12 principles of Work Allocation is is used to
								identify issues (Bottle necks, excessive NVA, low utilisation,
								model mix, assignment layout etc.) which prevent an efficient
								line balance are understood and can be explained.</td>
							<td>
								<ul>
									<li>* Line balance</li>

								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* The Supervisor can explain the issues and uses the Line
										Balance system to support the identification of issues with
										actual data.</li>


								</ul>
							</td>

						</tr>

						<!-- row6-->
						<?php
						$level41=$objlogin->GetauditById(79,4,1);
						?>
						<input type="hidden" name="hiwal41" id="hiwal41"
							value="<?php echo $level41['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="wal_41" id="wal_41"
								onchange="level41wal();">
									<option value="0" <?php  if($level41['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-1 The Supervisor is actively looking to improve the
								efficiency of the line balance and countermeasures are taken
								against issues with line balance and assignment layout.</td>
							<td>
								<ul>
									<li>* Countermeasures for Line Balance issues</li>
									<li>* Line Balance</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Improvements can be seen both on the shop floor and
										through appropriate reporting methods.</li>
									<li>* The Line Balance system can demonstrate the improved
										condition and has been updated.</li>

								</ul>
							</td>

						</tr>


						<!-- row8-->
						<?php
						$level51=$objlogin->GetauditById(79,5,1);
						?>
						<input type="hidden" name="hiwal51" id="hiwal51"
							value="<?php echo $level51['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="wal_51" id="wal_51"
								onchange="level51wal();">
									<option value="0" <?php  if($level51['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level51['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-1 All tooling is located within the 'Strike Zone / Point'.</td>
							<td>
								<ul>
									<li>* Workstations</li>

								</ul>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* 100% of zone tooling is located within the Strike Zone /
										Point.</li>
								</ul>
							</td>

						</tr>

						<!-- row7-->
						<?php
						$level52=$objlogin->GetauditById(79,5,2);
						?>
						<input type="hidden" name="hiwal52" id="hiwal52"
							value="<?php echo $level52['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="wal_52" id="wal_52"
								onchange="level52wal();">
									<option value="0" <?php  if($level52['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-2 All Parts are located within the 'Strike Zone / Point'.</td>
							<td>
								<ul>
									<li>* Workstations</li>

								</ul>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* 100% of zone parts is located within the Strike Zone /
										Point.</li>
								</ul>
							</td>

						</tr>
						<!-- row7-->
						<?php
						$level53=$objlogin->GetauditById(79,5,3);
						?>
						<input type="hidden" name="hiwal53" id="hiwal53"
							value="<?php echo $level53['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="wal_53" id="wal_53"
								onchange="level53wal();">
									<option value="0" <?php  if($level53['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level53['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-3 All assignments are balanced to 98% of the line cycle
								time.5-3 All assignments are balanced to 98% of the line cycle
								time.</td>
							<td>
								<ul>
									<li>* Line balance graph</li>
									<li>* Line Balance Graph Validation</li>
									<li>* Capacity Planning</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Supervisor must be able to demonstrate through the Line
										Balance system that all Allocation loss is gathered in 1
										operation and other operations are balanced to 98%. with
										minimal NVA. If there is any evidence to the contrary (e.g. on
										the Genba) then the level is not achieved.</li>
								</ul>
							</td>

						</tr>
						<!--- for comments form auditor ---->
						<?php 	$commentwal=$objlogin->GetComment(79); ?>
					<input type="hidden" name="Commentidwal" id="Commentidwal"
							value="<?php echo $commentwal['Comment_id'];?>">
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" id="diagnosis_result_wal" name="diagnosis_result_wal" style="width: 99%;" ><?php echo stripslashes($commentwal['Diagnosis_Result']); ?></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" id="kaizen_idea_wal" name="kaizen_idea_wal" style="width: 99%;" ><?php echo stripslashes($commentwal['Kaizen_Idea']); ?></textarea></td>
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
						$getrank = $objlogin->Getcategory(79);
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
							<td>/2</td>
							<td>/5</td>
							<td>/1</td>
							<td>/1</td>
							<td>/3</td>
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

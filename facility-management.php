
<?php
include "includes/common.php";

include "includes/classes/class.Login.php";

$objlogin = new Login();
$objlogin->check();

?>

<!DOCTYPE hfaml>
<html lang="en">
<head>
<title>:- DM Diagnosis :-</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style1.css" rel="stylesheet">
<script src="js/jquery-latest.js" type="text/javascript"></script>
<script src="js/facility-calc.js" type="text/javascript"></script>
<!--  <script src="js/validatequestion.js" type="text/javascript"></script>-->

<script>
function save_fam()
{
	
	var str= $("form").serialize();
	//alert(str);
	$.ajax({
		url: 'save_fam.php',
		type: "POST",
		async: false,
		data:"&"+str,
		success: function(data) {		
									if(data==1){
										
										window.location.href='facility-management.php?msg=1';
										return false;
							
									}else if(data == 2)
										{
											//alert(data);	
											window.location.href ='facility-management.php?msg=2';
											return false;
										}else if(data == 0)			
											{				
												//alert(data);
												window.location.href ='facility-management.php?msg=3';
												return false;
											}
								}
			});
}

</script>

</head>

<body>
	<div class="container">
		<div class="title">
			
			<?php
			include "header.php";
			?>
			<h3>Diagnosis Category : Facility Management</h3>
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
			<table cellpadding="0" cellspacing="0">
				<tbody>
					<form name="cost_manage">
						<input type="hidden" id="hdaction" name="hdaction" value="">
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
							$level11=$objlogin->GetauditById(91,1,1);
							?>
							<input type="hidden" name="hifam11" id="hifam11"
								value="<?php echo $level11['Id'];?>">
						
						
						<tr>
							<td rowspan="12" class="text-center"><b>Facility Management</b>
							</td>
							<td class="padd0 text-center"><select name="fam_11" id="fam_11"
								onchange="level11fam();">
									<option value="0" <?php  if($level11['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level11['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level11['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-1 The Supervisor has a list of all facilities in the zone
								with a TPM status which includes facility priority grading,
								activity timing and current TPM Stage attainment.</td>
							<td>
								<ul>
									<li>* TPM Activity Schedule</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* TPM Activity staus exists and contains priority grading,
										activity timing and current stage attainment.</li>
								</ul></td>

						</tr>
						<!-- 2nd row-->
						<?php
						$level12=$objlogin->GetauditById(91,1,2);
						?>
						<input type="hidden" name="hifam12" id="hifam12"
							value="<?php echo $level12['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="fam_12" id="fam_12"
								onchange="level12fam();">
									<option value="0" <?php  if($level12['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level12['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level12['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-2 Risk assessments have been completed for each facility to
								identify and mitigate the potential for injury whilst completing
								TPM activity.</td>
							<td>
								<ul>
									<li>* TPM Risk Assessment</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>* Risk Assessments must have been completed for TPM activity
								on each facility.</td>

						</tr>

						<!-- 2nd row-->
						<?php
						$level13=$objlogin->GetauditById(91,1,3);
						?>
						<input type="hidden" name="hifam13" id="hifam13"
							value="<?php echo $level13['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="fam_13" id="fam_13"
								onchange="level13fam();">
									<option value="0" <?php  if($level13['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level13['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level13['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-3 TPM Standards exist for each facility, which clearly
								prescribe What, When, Who and How to carry out preventative
								maintenance checks. Time to complete the task should be
								specified on the check sheet.</td>
							<td>
								<ul>
									<li>* TPM Standards.</li>
									<li>* TPM Check Sheet.</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* TPM standards exist and contain details on Who, What,
										When and How checks will be performed.</li>
									<li>* There must be supporting standard for each TPM check
										item.</li>
									<ul>
							
							</td>

						</tr>
						<!-- 2nd row-->
						<?php
						$level14=$objlogin->GetauditById(91,1,4);
						?>
						<input type="hidden" name="hifam14" id="hifam14"
							value="<?php echo $level14['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="fam_14" id="fam_14"
								onchange="level14fam();">
									<option value="0" <?php  if($level14['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level14['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level14['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-4 Operators who perform the TPM activity have been trained
								and records of training exist.</td>
							<td>
								<ul>
									<li>* TPM Training Records.</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Training records exist for all Operators who are assigned
										to perform TPM.</li>
									<ul>
							
							</td>

						</tr>

						<!-- row4-->
						<?php
						$level21=$objlogin->GetauditById(91,2,1);
						?>
						<input type="hidden" name="hifam21" id="hifam21"
							value="<?php echo $level21['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="fam_21" id="fam_21"
								onchange="level21fam();">
									<option value="0" <?php  if($level21['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level21['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 TPM activity is carried out to the required standards
								based on the zone schedule.</td>
							<td>
								<ul>
									<li>* TPM Check compliance</li>
									<li>* TPM Check Sheet.</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Operator performs TPM check according to standard.</li>
									<li>* TPM check sheet is up to date.</li>
								</ul></td>

						</tr>

						<!-- row5-->
						<?php
						$level31=$objlogin->GetauditById(91,3,1);
						?>
						<input type="hidden" name="hifam31" id="hifam31"
							value="<?php echo $level31['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="fam_31" id="fam_31"
								onchange="level31facility();">
									<option value="0" <?php  if($level31['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level31['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td>3-1 All concerns identified during TPM activity are recorded
								and responsibility for remedial action is assigned. Where
								appropriate, quick actions are taken to return to standard.</td>
							<td>
								<ul>
									<li>* TPM concerns / opportunities</li>
									<li>* Quick Action</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* There is documented evidence of concerns / opportunities
										that were identified while performing TPM.</li>
									<li>* Quick Action been taken when facility is not in standard
										condition.</li>
								</ul></td>

						</tr>

						<!--row5-->
						<?php
						$level32=$objlogin->GetauditById(91,3,2);
						?>
						<input type="hidden" name="hifam32" id="hifam32"
							value="<?php echo $level32['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="fam_32" id="fam_32"
								onchange="level32fam();">
									<option value="0" <?php  if($level32['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level32['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level32['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td>3-2 Zone OEE performance is measured and managed.</td>
							<td>
								<ul>
									<li>* Control Chart (OEE / Line Stops)</li>
									<li>* Line Stop analysis</li>
								</ul></td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* OEE / Line Stops are being measured per facility or area.</li>
									<li>* Supervisor is analysing Line Stops and looking for OEE
										improvement opportunities.</li>
								</ul></td>

						</tr>

						<!--row5-->
						<?php
						$level33=$objlogin->GetauditById(91,3,3);
						?>
						<input type="hidden" name="hifam33" id="hifam33"
							value="<?php echo $level33['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="fam_33" id="fam_33"
								onchange="level33fam();">
									<option value="0" <?php  if($level33['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level33['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level33['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td>3-3 Validation activity is performed to ensure TPM Stage
								attainment criteria is achieved.</td>
							<td>
								<ul>
									<li>* TPM Stage Progress</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Documented evidence that TPM stage validation is being
										checked.</li>
								</ul></td>

						</tr>


						<!-- row6-->
						<?php
						$level41=$objlogin->GetauditById(91,4,1);
						?>
						<input type="hidden" name="hifam41" id="hifam41"
							value="<?php echo $level41['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="fam_41" id="fam_41"
								onchange="level41facility();">
									<option value="0" <?php  if($level41['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level41['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td>4-1 Concerns with OEE and TPM activity have been rectified
								with appropriate (may include temporary countermeasures)
								remedial action and have plan for permanent countermeasures.</td>
							<td>
								<ul>
									<li>* Countermeasures for OEE / Line Stops, TPM opportunities.</li>
									<li>* OEE / Line Stop data</li>
								</ul></td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* Countermeasures have been implemented for OEE / Line
										Stops and TPM concerns.</li>
									<li>* Supervisor can support Countermeasure effectiveness with
										facts and data</li>
								</ul></td>

						</tr>

						<!-- row6-->
						<?php
						$level42=$objlogin->GetauditById(91,4,2);
						?>
						<input type="hidden" name="hifam42" id="hifam42"
							value="<?php echo $level42['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>

							<td class="padd0 text-center"><select name="fam_42" id="fam_42"
								onchange="level42fam();">
									<option value="0" <?php  if($level42['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level42['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level42['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td>4-2 TPM Standards Sheets are modified with lessons learnt
								from OEE monitoring .</td>
							<td>
								<ul>
									<li>* Revised TPM Standards</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* TPM standards are revised in line with 4M change and / or
										Kaizen improvement.</li>
								</ul></td>

						</tr>
						<!-- row8-->
						<?php
						$level51=$objlogin->GetauditById(91,5,1);
						?>
						<input type="hidden" name="hifam51" id="hifam51"
							value="<?php echo $level51['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="fam_51" id="fam_51"
								onchange="level51facility();">
									<option value="0" <?php  if($level51['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level51['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level51['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td>5-1 All facilities have attained a minimum level of
								'Cleaning, lubrication and mechanical check standards are
								established'. All grade A rank facilities (facilities which will
								stop Production) have achieved the TPM Stage of 'Standardised,
								Controlled and Autonomous'.</td>
							<td>* TPM Stage Attainment</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>* All facilities must have attained a minimum of 'Cleaning,
								lubrication and mechanical check standards are established'. All
								grade A rank facilities (facilities which will stop Production)
								have achieved the TPM Stage of 'Standardised, Controlled and
								Autonomous'.</td>

						</tr>

						<!-- row7-->
						<?php
						$level52=$objlogin->GetauditById(91,5,2);
						?>
						<input type="hidden" name="hifam52" id="hifam52"
							value="<?php echo $level52['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="fam_52" id="fam_52"
								onchange="level52fam();">
									<option value="0" <?php  if($level52['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level52['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td>5-2 Autonomous maintenance is evident in the zone, with OEE
								showing a positive trend above target level for 3 consecutive
								months.</td>
							<td>
								<ul>
									<li>* Control Chart (OEE).</li>
								</ul></td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Autonomous maintenance is evident in the zone. OEE must
										be showing a positive trend above target level for 3
										consecutive months.</li>
								</ul></td>

						</tr>
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
						$getrank = $objlogin->Getcategory(91);
						?>
						<input type="hidden" name="c_id" id="c_id"
							value="<?php echo $getrank['ID'];?>"> <input type="hidden"
							name="score1" id="score1"
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
							<td>/4</td>
							<td>/1</td>
							<td>/3</td>
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
						<td>Category Rank</td> <input type="hidden" name="category"
							id="category"
							value="<?php if($getrank['Category_rank'] !=""){ echo $getrank['Category_rank']; }else{ echo "0.0"; }?>">
						<td colspan="5" class="text-center" id="category-rank"
							name="category-rank"><?php if($getrank['Category_rank'] !=""){ echo $getrank['Category_rank']; }else{ echo "0.0"; }?>
						</td>
						</tr>
				
				</tbody>

			</table>


		</div>

	</div>
	<div style="float: right">
		<button type="button" class="next" onclick="save_fam();">Submit</button>
		</form>

</body>
</html>

<?php
include "includes/common.php";
include "includes/config.php";
include "includes/classes/class.Login.php";

$objlogin = new Login();
$objlogin->check();

?>
<!DOCTYPE hskml>
<html lang="en">
<head>
<title>:- DM Diagnosis :-</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style1.css" rel="stylesheet">
<script src="js/jquery-latest.js" type="text/javascript"></script>
<script src="js/categoryrank-calc.js" type="text/javascript"></script>
<script src="js/validatequestion.js" type="text/javascript"></script>
<script>
function saveskm()
{
	//alert("hi");
	var str= $("form").serialize();
	//alert(str);
	$.ajax({
		url: 'save_skm.php',
		type: "POST",
		async: false,
		data:"&"+str,
		success: function(data) {
						//alert(data);
									if(data== 1){
										
										window.location.href='skill-management.php?msg=1';
										return false;
							
									}else if(data == 2)
										{
											//alert(data);	
											window.location.href ='skill-management.php?msg=2';
											return false;
										}else if(data == 0)			
											{				
												//alert(data);
												window.location.href ='skill-management.php?msg=3';
												return false;
											}
								}
		 });
	return false;
	
}

</script>
</head>

<body>
	<div class="container">
		<div class="title">
			
				<?php
				include "header.php";
				?>
				<h3>Diagnosis Category : HR Development & Skill Management</h3>
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
			<form name="SKM" method="post" action="">
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
							$level11=$objlogin->GetauditById(63,1,1);
							?>
							<input type="hidden" name="hiskm11" id="hiskm11"
								value="<?php echo $level11['Id']?>">
						
						
						<tr>
							<td rowspan="16" class="text-center"><b>Skill Management</b></td>
							<td class="padd0 text-center"><select name="skm_11" id="skm_11"
								onchange="level11skm();">
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
							<td>1-1 There is a standard Shop Induction method for all new
								operators which includes an introduction to the Company, Shop
								and the Zone.</td>
							<td>
								<ul>
									<li>* Shop specific information for new Team Member</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td><b>Shop Induction package</b> should include all information
								about the company that the employee would need i.e. Management
								structure, shift pattern, Terms & Conditions, Expectations (5S,
								Safety, QRQC call etc.).</td>

						</tr>
						<!-- 2nd row-->
						<?php
						$level12=$objlogin->GetauditById(63,1,2);
						?>
						<input type="hidden" name="hiskm12" id="hiskm12"
							value="<?php echo $level12['Id']?>">
						<tr>
							<td class="padd0 text-center"><select name="skm_12" id="skm_12"
								onchange="level12skm();">
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
							<td>1-2 There is an Operator Training Module which includes an
								Off Line Basic Skills program which all operators attend prior
								to commencing On Line training.</td>
							<td>
								<ul>
									<li>* Shop specific Basic Skills program.</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* The shop has a Basic Skills training area / program.</li>
									<li>* All newcomers have attended before commencing on-line
										training.</li>
									<ul>
							
							</td>

						</tr>
						<!-- 3 rd row-->
						<?php
						$level13=$objlogin->GetauditById(63,1,3);
						?>
						<input type="hidden" name="hiskm13" id="hiskm13"
							value="<?php echo $level13['Id']?>">
						<tr>
							<td class="padd0 text-center"><select name="skm_13" id="skm_13"
								onchange="level13skm();">
									<option value="0" <?php  if($level13['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level13['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-3 The Supervisor has training plans that meet the needs of
								his zone - this should also include non cyclic
								operations.Operator personal development for succession planning
								is considered.</td>
							<td>
								<ul>
									<li>* ILU Planning Matrix.</li>
									<li>* Annual Training plan.</li>
									<li><span class="colorred">* Personal development plans.</span>
									</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* There is an Annual and Monthly training plan for the
										zone.</li>
									<li>* Annual plan reflects long term needs to achieve WTB.</li>
									<li><span class="colorred">*Succession Plans in place with
											names and skill requirements.</span></li>
									<ul>
							
							</td>

						</tr>
						<!-- 3rd A row-->
						<?php
						$level14=$objlogin->GetauditById(63,1,4);
						?>
						<input type="hidden" name="hiskm14" id="hiskm14"
							value="<?php echo $level14['Id']?>">
						<tr>
							<td class="padd0 text-center"><select name="skm_14" id="skm_14"
								onchange="level14skm();">
									<option value="0" <?php  if($level14['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level14['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-4 Skills and knowledge requirements for the zone are
								specified in the Operation Requirement Table (ORT) and the
								training material is available.</td>
							<td>
								<ul>
									<li>* Operation Requirement Table .</li>
									<li>* Knowledge and Skill training material.</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* ORT contains knowledge and skill requirements for the
										zone.</li>
									<li>* Training material exists for zone Knowledge and Skill
										requirements as specified in ORT.</li>
									<ul>
							
							</td>

							<!-- row4-->
							<?php
							$level21=$objlogin->GetauditById(63,2,1);
							?>
							<input type="hidden" name="hiskm21" id="hiskm21"
								value="<?php echo $level21['Id']?>">
						
						
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="skm_21" id="skm_21"
								onchange="level21skm();">
									<option value="0" <?php  if($level21['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 Training records exist for all operators and include
								details of Induction, Basic Skills, On line assignments and
								special skills / personal development training.</td>
							<td>
								<ul>
									<li>* Training records</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Required Training Records exists for all Operators
										reviewed.</li>
								</ul>
							</td>

						</tr>
						<!-- row4A-->
						<?php
						$level22=$objlogin->GetauditById(63,2,2);
						?>
						<input type="hidden" name="hiskm22" id="hiskm22"
							value="<?php echo $level22['Id']?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="skm_22" id="skm_22"
								onchange="level22skm();">
									<option value="0" <?php  if($level22['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level22['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-2 The ILU criteria is defined.Training Plan / ILU for the
								current month meets the needs of the zone and reflects the
								actual skill levels of operators.</td>
							<td>
								<ul>
									<li>* ILU Criteria.</li>
									<li>* ILU Matrix.</li>
									<li>* Data to support ILU criteria (Training Plans).</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* ILU criteria has been defined and includes both Time and
										Quality.</li>
									<li>* Current monthly plan reflects the needs of thezone.</li>
									<li>* Reviewed Operators meet criteria for assigned level.</li>
								</ul>
							</td>
							<!-- row4B-->
							<?php
							$level23=$objlogin->GetauditById(63,2,3);
							?>
							<input type="hidden" name="hiskm23" id="hiskm23"
								value="<?php echo $level23['Id']?>">
						</tr>
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="skm_23" id="skm_23"
								onchange="level23skm();">
									<option value="0" <?php  if($level23['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level23['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-3 Training is carried out by competent persons that have
								been instructed how to teach using 3 Step Teaching Method.</td>
							<td>
								<ul>
									<li>* 3 Step training capability.</li>
								</ul>
							</td>

							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td>
								<ul>
									<li>* Supervisor and Leader can demonstrate 3 Step Training
										correctly.</li>
							
							</td>

							<!-- row 2-4-->
							<?php
							$level24=$objlogin->GetauditById(63,2,4);
							?>
							<input type="hidden" name="hiskm24" id="hiskm24"
								value="<?php echo $level24['Id']?>">
						</tr>
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="skm_24" id="skm_24"
								onchange="level24skm();">
									<option value="0" <?php  if($level24['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level24['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-4 Assignments for new operators is based on assignment
								grading in ORT.</td>
							<td>
								<ul>
									<li>* ILU Planning Matrix.</li>
									<li>* ORT.</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* New Team Members are assigned to "C" level operations
										within the zone.</li>
								</ul>
							</td>

							<!-- row5-->
							<?php
							$level31=$objlogin->GetauditById(63,3,1);
							?>
							<input type="hidden" name="hiskm31" id="hiskm31"
								value="<?php echo $level31['Id']?>">
						
						
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="skm_31" id="skm_31"
								onchange="level31skm();">
									<option value="0" <?php  if($level31['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-1 There is a method in place to validate training progress
								and 'L' level attainment.</td>
							<td>
								<ul>
									<li>* Job Observation sheet</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>There is documented evidence that the Supervisor is
										validating Operators training progress at each level (ILU)</li>
								</ul>
							</td>

						</tr>
						<!-- row5B-->
						<?php
						$level32=$objlogin->GetauditById(63,3,2);
						?>
						<input type="hidden" name="hiskm32" id="hiskm32"
							value="<?php echo $level32['Id']?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="skm_32" id="skm_32"
								onchange="level32skm();">
									<option value="0" <?php  if($level32['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level32['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-2 Where training has varied from plan, the Supervisor
								understands the issues (volume fluctuation, headcount changes
								etc.) and can demonstrate the changes this has caused and
								explain future plans.</td>
							<td>
								<ul>
									<li>* Monthly / Annual Training plan</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Supervisor understands future changes that will affect
										the needs of the zone.</li>
									<li>* Training plans (Annual / Monthly) reflect training needs
										based on future 4M changes.</li>
								</ul>
							</td>

						</tr>

						<!-- row5B-->
						<?php
						$level33=$objlogin->GetauditById(63,3,3);
						?>
						<input type="hidden" name="hiskm33" id="hiskm33"
							value="<?php echo $level33['Id']?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="skm_33" id="skm_33"
								onchange="level33skm();">
									<option value="0" <?php  if($level33['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level33['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-3 The Supervisor is giving the people identified in their
								succession plans, the opportunity to practice the skills.</td>
							<td>
								<ul>
									<li>* Records of skill practice ( Performance Appraisal,
										Personal Fact Files, Training records …)</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>* The Supervisor can demonstrate how the candidates practice
								the skills required for succession.</td>

						</tr>

						<!-- row6-->
						<?php
						$level41=$objlogin->GetauditById(63,4,1);
						?>
						<input type="hidden" name="hiskm41" id="hiskm41"
							value="<?php echo $level41['Id']?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="skm_41" id="skm_41"
								onchange="level41skm();">
									<option value="0" <?php  if($level41['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-1 100% achievement of 1Man 2Jobs and 1Job 2Men at 'L'
								level.(Exclude new starters less than 6 months in the zone).</td>
							<td>
								<ul>
									<li>* ILU Matrix</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>* All Operators who have been in the zone for six months can
								complete two jobs to 'L' level and each job can be covered by
								two 'L' level Operators.</td>

						</tr>

						<!-- row6 B-->
						<?php
						$level42=$objlogin->GetauditById(63,4,2);
						?>
						<input type="hidden" name="hiskm42" id="hiskm42"
							value="<?php echo $level42['Id']?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="skm_42" id="skm_42"
								onchange="level42skm();">
									<option value="0" <?php  if($level42['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level42['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-2 100% achievement of 1M3J and 1J3M at L level.(Exclude new
								starters less than 6 months in the zone).</span></td>
							<td>
								<ul>
									<li>* ILU Matrix</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>* All Operators who have been in the zone for six months can
								complete three jobs to 'L' level and each job can be covered by
								three 'L' level Operators.</td>

						</tr>
						<!-- row8-->
						<?php
						$level51=$objlogin->GetauditById(63,5,1);
						?>
						<input type="hidden" name="hiskm51" id="hiskm51"
							value="<?php echo $level51['Id']?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="skm_51" id="skm_51"
								onchange="level51skm();">
									<option value="0" <?php  if($level51['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level51['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-1 Optimum Job Flexibility is attained.100% achievement of
								3MAJ at L level.</td>
							<td>
								<ul>
									<li>* ILU Matrix</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>* There are three Operators who are at 'L' level for all of
								the Operations within the zone.</td>

						</tr>

						<!-- row7-->
						<?php
						$level52=$objlogin->GetauditById(63,5,2);
						?>
						<input type="hidden" name="hiskm52" id="hiskm52"
							value="<?php echo $level52['Id']?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="skm_52" id="skm_52"
								onchange="level52skm();">
									<option value="0" <?php  if($level52['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-2 All Quality objectives are achieving target level for >1
								month.</td>
							<td>
								<ul>
									<li>* Quality Data.</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>* There are no defects which can be attributed to Operator
								error within the last month.</td>

						</tr>
						<!-- row7-->
						<?php
						$level53=$objlogin->GetauditById(63,5,3);
						?>
						<input type="hidden" name="hiskm53" id="hiskm53"
							value="<?php echo $level53['Id']?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="skm_53" id="skm_53"
								onchange="level53skm();">
									<option value="0" <?php  if($level53['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($level53['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-3 Team Leaders have been trained at all work stations in
								the zone before and after their process (Customer & Supplier)
								and can perform at least 1 job at L level. Validation of L level
								takes place every month.</span></td>
							<td>
								<ul>
									<span class="colorred">
										<li>* ILU</li>
										<li>* Training Records</li> </span>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td><span class="colorred">* Training records must contain
									evidence that up & down stream flexibility exists.</span>
							</td>

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
		$getrank = $objlogin->Getcategory(63);
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
							<td>/4</td>
							<td>/4</td>
							<td>/3</td>
							<td>/2</td>
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
						<button type="button" class="next" onclick="saveskm();">Submit</button>
					</div>
				</form>

			
		</div>
	</div>

</body>
</html>

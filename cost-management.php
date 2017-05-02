<?php
include "includes/common.php";
include "includes/config.php";
include "includes/classes/class.Login.php";

$objlogin = new Login();
$objlogin->check();
//$objlogin->Getcategory($_REQUEST["cathidden"]);
// $objlogin->Getitemscore($_REQUEST["itemscore"]);
//$objlogin->Getcategoryrank($_REQUEST["catrankhidden"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>:- DM Diagnosis :-</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="css/style1.css" rel="stylesheet">
<script src="js/categoryrank-calc.js" type="text/javascript"></script>
<script src="js/validatequestion.js" type="text/javascript"></script>
<script src="js/jquery-latest.js" type="text/javascript"></script>
<script>
function save_commanage()
{
	
	var str= $("form").serialize();
	//alert(str);
	$.ajax({
		url: 'save_com.php',
		type: "POST",
		async: false,
		data:"&"+str,
		success: function(data) {
		//	alert(data);
									if(data== 1){
										
										window.location.href='cost-management.php?msg=1';
										return false;
							
									}else if(data == 2)
										{
											//alert(data);	
											window.location.href ='cost-management.php?msg=2';
											return false;
										}else if(data == 0)			
											{				
												//alert(data);
												window.location.href ='cost-management.php?msg=3';
												return false;
											}
								}
		});
}
/*window.onload=function(){
	actualscorecom1();
	actualscorecom2();
	actualscorecom3();
	actualscorecom4();
	actualscorecom5();
}*/
</script>

</head>

<body>
	<div class="container">
		<div class="title">
			
			<?php
			include "header.php";
			?>
			<h3>Diagnosis Category : Cost Management</h3>
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
						<?php
						$getrank = $objlogin->Getcategory(127);
						//$itemtm=$objlogin->Getitemscore(127);
						?>
						<!--  <input type="hidden" name="c_id" id="c_id" value="<?php echo $getrank['ID'];?>">
   <input type="hidden" id="Costlevel1" name="Costlevel1"  value="<?php if($itemtm['Actual_score1']!=""){ echo $itemtm['Actual_score1'];}else {echo "0";}?>">
   <input type="hidden" id="Costlevel2" name="Costlevel2" value="0">
    <input type="hidden" id="Costlevel3" name="Costlevel3" value="0">
     <input type="hidden" id="Costlevel4" name="Costlevel4" value="0">
      <input type="hidden" id="Costlevel5" name="Costlevel5" value="0">
	  
   <input type="hidden" name="itemscore" id="itemscore" value=""> 
   <input type="hidden" name="cathidden" id="cathidden">
    <input type="hidden" name="catrankhidden" id="catrankhidden" value="">
   
   <input type="hidden" id="Achievelevel1" name="Achievelevel1" value="">
   <input type="hidden" id="Achievelevel2" name="Achievelevel2" value="">
    <input type="hidden" id="Achievelevel3" name="Achievelevel3" value="">
     <input type="hidden" id="Achievelevel4" name="Achievelevel4" value="">
      <input type="hidden" id="Achievelevel5" name="Achievelevel5" value="">   -->

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

							<!--Cost management row -->

							<!--1st row -->
							<?php
							$level11=$objlogin->GetauditById(127,1,1);
							?>
							<input type="hidden" name="hicom11" id="hicom11"
								value="<?php echo $level11['Id'];?>">
						
						
						<tr>
							<td rowspan="13" class="text-center"><b>Cost Management</b></td>
							<td class="padd0 text-center"><select name="costlevel_11"
								id="costlevel_11" onchange="level11com();">
									<option value="0" <?php  if($level11['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level11['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level11['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-1 The zone has target values to manage Headcount.</td>
							<td>
								<ul>
									<li>* Zone Headcount Target</li>
							
							</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Headcount target has been established for the zone.</li>

								</ul>
							</td>

						</tr>
						<!-- 2nd row-->
						<?php
						$level12=$objlogin->GetauditById(127,1,2);
						?>
						<input type="hidden" name="hicom12" id="hicom12"
							value="<?php echo $level12['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="costlevel_12"
								id="costlevel_12" onchange="level12com();">
									<option value="0" <?php  if($level12['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level12['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level12['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-2 The zone has budget allocated and has target values to
								manage Overheads.</td>
							<td>
								<ul>
									<li>* Overheads Budget / Target</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* The zone must have a budget / target to manage Overheads.</li>

								</ul>
							</td>

						</tr>

						<!-- 2nd row-->
						<?php
						$level13=$objlogin->GetauditById(127,1,3);
						?>
						<input type="hidden" name="hicom13" id="hicom113"
							value="<?php echo $level13['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="costlevel_13"
								id="costlevel_13" onchange="level13com();">
									<option value="0" <?php  if($level13['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level13['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level13['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-3 The zone has budget allocated and has target values to
								manage Non Production Overtime.</td>
							<td>
								<ul>
									<li>Zone OT Budget / Target</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Non-Production OT target and tracking exist for the zone.</li>

								</ul>
							</td>

						</tr>
						<!-- 2nd row-->
						<?php
						$level14=$objlogin->GetauditById(127,1,4);
						?>
						<input type="hidden" name="hicom14" id="hicom14"
							value="<?php echo $level14['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="costlevel_14"
								id="costlevel_14" onchange="level14com();">
									<option value="0" <?php  if($level14['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level14['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level14['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-4 The zone has budget allocated and has target values to
								manage Scrap.</td>
							<td>
								<ul>
									<li>* Zone Scrap Budget / Target</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Scrap target and tracking exist for the zone.</li>

								</ul>
							</td>

						</tr>

						<!-- row4-->
						<?php
						$level21=$objlogin->GetauditById(127,2,1);
						?>
						<input type="hidden" name="hicom21" id="hicom121"
							value="<?php echo $level21['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_21"
								id="costlevel_21" onchange="level21com();">
									<option value="0" <?php  if($level21['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level21['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 The zone has a method for managing / controlling
								Headcount and can demonstrate Monthly control of Headcount /
								DSTR verses target.</td>
							<td>
								<ul>
									<li>* Headcount tracking</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* The zone must have a method for managing / controlling
										Headcount.Monthly control of Headcount against target exist</li>

								</ul>
							</td>

						</tr>
						<!-- row4-->
						<?php
						$level22=$objlogin->GetauditById(127,2,2);
						?>
						<input type="hidden" name="hicom22" id="hicom22"
							value="<?php echo $level22['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_22"
								id="costlevel_22" onchange="level22com();">
									<option value="0" <?php  if($level22['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level22['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level22['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-2 The zone has a method for managing / controlling
								Overheads and can demonstrate daily control of expenditure
								verses target.</td>
							<td>
								<ul>
									<li>* Overheads tracking</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* The zone must have a method for managing / controlling
										Overheads.Daily control of Overheads against target is a must.</li>

								</ul>
							</td>
							<?php
							$level23=$objlogin->GetauditById(127,2,3);
							?>
							<input type="hidden" name="hicom23" id="hicom23"
								value="<?php echo $level23['Id'];?>">
						</tr>
						<!-- row4-->
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_23"
								id="costlevel_23" onchange="level23com();">
									<option value="0" <?php  if($level23['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level23['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level23['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-3 The zone has a method for managing / controlling Non
								Production Overtime and can demonstrate daily control of
								expenditure verses target.</td>
							<td>
								<ul>
									<li>* Zone OT tracking</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* The zone must have a method for managing / controlling
										Non Production Overtime.</li>
									<li>* Daily control of Non Production Overtime against target
										is a must.</li>
								</ul>
							</td>

						</tr>
						<!-- row4-->
						<?php
						$level24=$objlogin->GetauditById(127,2,4);
						?>
						<input type="hidden" name="hicom24" id="hicom24"
							value="<?php echo $level24['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_24"
								id="costlevel_24" onchange="level24com();">
									<option value="0" <?php  if($level24['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level24['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level24['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-4 The zone has a method for managing / controlling Scrap
								and can demonstrate daily control of expenditure verses target.</td>
							<td>
								<ul>
									<li>* Zone Scrap Tracking</span></li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* The zone must have a daily control method for managing /
										controlling scrap.</li>
							
							</td>

						</tr>
						<!-- row5-->
						<?php
						$level31=$objlogin->GetauditById(127,3,1);
						?>
						<input type="hidden" name="hicom31" id="hicom31"
							value="<?php echo $level31['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_31"
								id="costlevel_31" onchange="level31com();">
									<option value="0" <?php  if($level31['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level31['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-1 Issues that are preventing the zone achieving it's cost
								targets are understood and can be explained. Where appropriate,
								quick actions are taken to return to standard.</td>
							<td>
								<ul>
									<li>* Control Charts / Tracking Documentation</li>

								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* The Supervisor must be able to explain the issues
										preventing the zone achieving it's cost targets.</li>


								</ul>
							</td>

						</tr>



						<!-- row6-->
						<?php
						$level41=$objlogin->GetauditById(127,4,1);
						?>
						<input type="hidden" name="hicom41" id="hicom41"
							value="<?php echo $level41['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_41"
								id="costlevel_41" onchange="level41com();">
									<option value="0" <?php  if($level41['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level41['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-1 The Supervisor has cost reduction strategies in place and
								has implemented countermeasures to issues affecting budget
								achievement.</td>
							<td>
								<ul>
									<li>* Countermeasures for Cost reduction Opportunities.</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* The Supervisor must have cost reduction strategies in
										place and countermeasures to issues affecting budget
										achievement.</li>

								</ul>
							</td>

						</tr>


						<!-- row8-->
						<?php
						$level51=$objlogin->GetauditById(127,5,1);
						?>
						<input type="hidden" name="hicom51" id="hicom51"
							value="<?php echo $level51['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_51"
								id="costlevel_51" onchange="level51com();">
									<option value="0" <?php  if($level51['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level51['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level51['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-1 All year-to-date Cost targets are achieved.</td>
							<td>
								<ul>
									<li>* Control Charts / Tracking</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* All year-to-date Cost targets must be achieved.</li>
								</ul>
							</td>

						</tr>

						<!-- row7-->
						<?php
						$level52=$objlogin->GetauditById(127,5,2);
						?>
						<input type="hidden" name="hicom52" id="hicom52"
							value="<?php echo $level52['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_52"
								id="costlevel_52" onchange="level52com();">
									<option value="0" <?php  if($level52['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level52['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-2 The zone is actively looking to reduce Costs and can
								demonstrate adoption of Best Practice cost reduction ideas from
								other areas / Plants. These should include cost reduction for
								Direct Materials usage.</td>
							<td>
								<ul>
									<li>* Best Practice adoption</li>

								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* The Supervisor must be able to demonstrate adoption of
										Best Practice cost reduction ideas from other areas / Plants.
										These should include cost reduction for Direct Materials
										usage.</li>
								</ul>
							</td>

						</tr>
						<!-- row7-->
						<?php
						$level53=$objlogin->GetauditById(127,5,3);
						?>
						<input type="hidden" name="hicom53" id="hicom53"
							value="<?php echo $level53['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="costlevel_53"
								id="costlevel_53" onchange="level53com();">
									<option value="0" <?php  if($level53['Audit_Check'] == 0){?>
										selected="selected"
										<?php } if($level53['Audit_Check'] ==""){?>
										selected="selected" <?php }?>>0</option>
									<option value="1" <?php  if($level53['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-3 The zone can demonstrate examples of innovation for cost
								reduction which are worthy of sharing with other Plants as Best
								Practice.</td>
							<td>
								<ul>
									<li>* Creation of Best Practices for Cost Reduction</li>

								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<ul>
									<li>* The Supervisor must be able to demonstrate examples of
										innovation for cost reduction idea's which are worthy of
										sharing with other Plants as Best Practice.</li>
								</ul>
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
		$getrank = $objlogin->Getcategory(127);
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
							<td>/4</td>
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


		</div>

	</div>
	<div style="float: right">
		<button type="button" class="next" onclick="save_commanage();">Submit</button>
		</form>

</body>
</html>

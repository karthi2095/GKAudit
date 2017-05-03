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
<script src="js/safety-calc.js" type="text/javascript"></script>
<script src="js/jquery-latest.js" type="text/javascript"></script>
<script>
    
   function save_safety()
{
	var str= $("form").serialize();
	//alert(str);
	$.ajax({
		url: 'save_safety.php',
		type: "POST",
		async: false,
		data:"&"+str,
		success: function(data) {
			//alert(data);
									if(data== 1){
										
										window.location.href='safety-environment.php?msg=1';
										return false;
							
									}else if(data == 2)
										{
											//alert(data);	
											window.location.href ='safety-environment.php?msg=2';
											return false;
										}else if(data == 0)			
											{				
												alert(data);
												window.location.href ='safety-environment.php?msg=3';
												return false;
											}
								}
		});
}
   function validatecomments() 
   {
   	  var safety1 = document.getElementById('diagnosis_result_sfy').value;
   	  var safety2 = document.getElementById('kaizen_idea_sfy').value;
   	  var fives1 = document.getElementById('diagnosis_result_5s').value;
   	  var fives2 = document.getElementById('kaizen_idea_5s').value;
   	  var envy1 = document.getElementById('diagnosis_result_envy').value;
   	  var envy2 = document.getElementById('kaizen_idea_envy').value; 	  
   	  var ergo1 = document.getElementById('diagnosis_result_ergo').value;
   	  var ergo2 = document.getElementById('kaizen_idea_ergo').value;
   	if(safety1.trim() == '')
   	{
   		
   		alert("Please enter the comments");
   		document.getElementById("diagnosis_result_sfy").focus();
   		return false;
   	}
   	if(safety2.trim() == '')
   	{
   		
   		alert("Please enter the comments");
   		document.getElementById("kaizen_idea_sfy").focus();
   		return false;
   	}
   	
	if(fives1.trim() == '')
   	{
   		
   		alert("Please enter the comments");
   		document.getElementById("diagnosis_result_5s").focus();
   		return false;
   	}
   	if(fives2.trim() == '')
   	{
   		
   		alert("Please enter the comments");
   		document.getElementById("kaizen_idea_5s").focus();
   		return false;
   	}

   	if(envy1.trim() == '')
   	{
   		
   		alert("Please enter the comments");
   		document.getElementById("diagnosis_result_envy").focus();
   		return false;
   	}
   	if(envy2.trim() == '')
   	{
   		
   		alert("Please enter the comments");
   		document.getElementById("kaizen_idea_envy").focus();
   		return false;
   	}

	if(ergo1.trim() == '')
   	{
   		
   		alert("Please enter the comments");
   		document.getElementById("diagnosis_result_ergo").focus();
   		return false;
   	}
   	if(ergo2.trim() == '')
   	{
   		
   		alert("Please enter the comments");
   		document.getElementById("kaizen_idea_ergo").focus();
   		return false;
   	}
   	document.getElementById("hdaction1").value=1;
   	//return true;
   	 save_safety();
   	
   }
</script>
</head>

<body>
	<form name="safety_environment">
		<input type="hidden" id="hdaction1" name="hdaction1" value="">
		<?php
		$itemtqm=$objlogin->Getitemscore(103);
		?>
		<input type="hidden" name="itemsfyid" id="itemsfyid"
			value="<?php echo $itemtqm['Id'];?>"> <input type="hidden"
			id="level_totalsafety1" name="level_totalsafety1"
			value="<?php if($itemtqm['Level_total1'] != "" ){ echo $itemtqm['Level_total1']; }else{ echo "0"; } ?>">
		<input type="hidden" id="level_totalsafety2" name="level_totalsafety2"
			value="<?php if($itemtqm['Level_total2'] != "" ){ echo $itemtqm['Level_total2']; }else{ echo "0"; } ?>">
		<input type="hidden" id="level_totalsafety3" name="level_totalsafety3"
			value="<?php if($itemtqm['Level_total3'] != "" ){ echo $itemtqm['Level_total3']; }else{ echo "0"; } ?>">
		<input type="hidden" id="level_totalsafety4" name="level_totalsafety4"
			value="<?php if($itemtqm['Level_total4'] != "" ){ echo $itemtqm['Level_total4']; }else{ echo "0"; } ?>">
		<input type="hidden" id="level_totalsafety5" name="level_totalsafety5"
			value="<?php if($itemtqm['Level_total5'] != "" ){ echo $itemtqm['Level_total5']; }else{ echo "0"; } ?>">


		<input type="hidden" id="Achievelevel1" name="Achievelevel1" value="">
		<input type="hidden" id="Achievelevel2" name="Achievelevel2" value="">
		<input type="hidden" id="Achievelevel3" name="Achievelevel3" value="">
		<input type="hidden" id="Achievelevel4" name="Achievelevel4" value="">
		<input type="hidden" id="Achievelevel5" name="Achievelevel5" value="">
		<input type="hidden" id="category" name="category" value="">
		<div class="container">
			<div class="title">
				
				<?php
				include "header.php";
				?>
				<h3>Diagnosis Category : Safety & Environment</h3>
				<span id="details-tag" style="width: 100%; text-align: right; float: right;">
				<td class="border0 padd1"><b>Auditee:</b></td>
				<td class="border0 edit-data"><?php echo $super['Name'];?></td><br>
				<td class="border0 padd1"><b>Auditor:</b></td>
				<td class="border0 edit-data"><?php echo $_SESSION['username'];?> </td>
				</span>
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
							$level11=$objlogin->GetauditById(103,1,1);
							?>
							<input type="hidden" name="hisfy11" id="hisfy11"
								value="<?php echo $level11['Id'];?>">
							<tr>
								<td rowspan="9" class="text-center"><b>Safety</b></td>
								<td class="padd0 text-center"><select name="safety_11"
									id="safety_11"
									onchange="itemscore_level11(this); actualscore1();">
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
								<td>1-1 Safety rules for the workplace have been determined and
									are on display as a constant reminder to all staff.</td>
								<td>
									<ul>
										<li>* Zone Specific Safety Rules.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>* Safety rules must be established and on display as a
									constant reminder to all staff.</td>

							</tr>

							<!--2st row -->
							<?php
							$level12=$objlogin->GetauditById(103,1,2);
							?>
							<input type="hidden" name="hisfy12" id="hisfy12" value="<?php echo $level12['Id'];?>">
							<tr>
								<td class="padd0 text-center"><select name="safety_12"
									id="safety_12"
									onchange="itemscore_level12(this); actualscore1();">
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
								<td>1-2 Shop / Zone specific Safety education (training)
									material has been developed.</td>
								<td>
									<ul>
										<li>* Zone Specific Safety Training Material.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									</ul> * Shop / Zone specific Safety education (training)
									material must be have been developed.</td>

							</tr>
							<!--3rd row -->
							<?php
							$level21=$objlogin->GetauditById(103,2,1);
							?>
							<input type="hidden" name="hisfy21" id="hisfy21"
								value="<?php echo $level21['Id'];?>">
							<tr>
								<td></td>
								<td class="padd0 text-center"><select name="safety_21"
									id="safety_21"
									onchange="itemscore_level21(this); actualscore2();">
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
								<td>2-1 Safety education is provided for new operators and for
									those returning from long term absence.</td>
								<td>
									<ul>
										<li>* Safety Training Records</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td class="text-center">0</td>
								<td></td>
								<td>* Safety education must be provided for new operators and
									for those returning from long term absence.</td>



							</tr>
							<!--4th row -->
							<?php
							$level22=$objlogin->GetauditById(103,2,2);
							?>
							<input type="hidden" name="hisfy22" id="hisfy22" value="<?php echo $level22['Id'];?>">
							<tr>
								<td></td>
								<td class="padd0 text-center"><select name="safety_22"
									id="safety_22"
									onchange="itemscore_level22(this); actualscore2();">
										<option value="0" <?php  if($level22['Audit_Check'] == 0){?> selected="selected" 
											<?php } if($level22['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level22['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td>2-2 Operators follow the safety rules at all times and are
									wearing appropriate Personal Protective Equipment (PPE) as
									specified.</td>
								<td>
									<ul>
										<li>* Operator Safety Compliance.</li>
									</ul>
								</td>

								<td></td>
								<td></td>
								<td></td>
								<td class="text-center">0</td>
								<td>* Operators must be following the safety rules at all times
									and are wearing appropriate Personal Protective Equipment
									(PPE).</td>
							</tr>

							<!--5th row -->
							<?php
							$level31=$objlogin->GetauditById(103,3,1);
							?>
							<input type="hidden" name="hisfy31" id="hisfy31" value="<?php echo $level31['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="safety_31"
									id="safety_31"
									onchange="itemscore_level31(this); actualscore3();">
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
								<td>3-1 Pro-active Safety checks are performed to identify
									potential safety concerns. Where appropriate, quick actions are
									taken to return to standard.</td>
								<td>
									<ul>
										<li>* Safety Patrols / Audits</li>
										<li>* Quick Action</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* Documented evidence exists that Pro-active Safety checks
											(audits) are being performed to identify potential safety
											concerns.</li>
										<li>* Supervisor is taking Quick Action when concerns with
											compliance has been identified.</li>
									</ul>
								</td>

							</tr>

							<!--5th row -->
							<?php
							$level32=$objlogin->GetauditById(103,3,2);
							?>
							<input type="hidden" name="hisfy32" id="hisfy32"
								value="<?php echo $level32['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="safety_32"
									id="safety_32"
									onchange="itemscore_level32(this); actualscore3();">
										<option value="0" <?php  if($level32['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level32['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level32['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td>3-2 The Supervisor is promoting "close call" /"near miss "
									reporting from operators. Quick actions are taken to return to
									standard.</td>
								<td>
									<ul>
										<li>* Close Call / Near Miss tracking</li>
										<li>* Quick Action</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* Supervisor is tracking Close Call / Near Misses for
											their area.</li>
										<li>* There is documented evidence that the Supervisor is
											taking Quick Action when concerns with compliance has been
											identified.</li>
									</ul>
								</td>

							</tr>
							<!--6th row -->
							<?php
							$level41=$objlogin->GetauditById(103,4,1);
							?>
							<input type="hidden" name="hisfy41" id="hisfy41"
								value="<?php echo $level41['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="safety_41"
									id="safety_41"
									onchange="itemscore_level41(this); actualscore4();">
										<option value="0" <?php  if($level41['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level41['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level41['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select></td>
								<td></td>
								<td>4-1 Countermeasures are applied to all Safety related issues
									identified during pro-active Safety audits.</td>
								<td>
									<ul>
										<li>* Countermeasures</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td class="text-center">0</td>
								<td>* Countermeasures must be applied or planned to be
									implemented for all Safety related issues identified during
									pro-active Safety audits.</td>

							</tr>


							<!--5th row -->
							<?php
							$level51=$objlogin->GetauditById(103,5,1);
							?>
							<input type="hidden" name="hisfy51" id="hisfy51"
								value="<?php echo $level51['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="safety_51"
									id="safety_51"
									onchange="itemscore_level51(this); actualscore5();">
										<option value="0" <?php  if($level51['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level51['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level51['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>

								<td>5-1 Actions are taken to prevent similar incidents or
									concerns that have occurred in other zones, shops and Plants.</td>
								<td>
									<ul>
										<li>* Incident Communication</li>
										<li>* Safety Patrol / Job Observation</li>
									</ul>
								</td>
								<td class="text-center">0</td>
								<td class="text-center">0</td>
								<td class="text-center">0</td>
								<td class="text-center">0</td>
								<td>
									<ul>
										<li>* Incidents / Concerns identifed in other areas are posted
											and have been communicated to Operators.</li>
										<li>* There is documented evidence that the Supervisor has
											checked their zone for incidents and concerns identified in
											other areas.</li>
									</ul>
								</td>

							</tr>


							<!--5th row -->
							<?php
							$level52=$objlogin->GetauditById(103,5,2);
							?>
							<input type="hidden" name="hisfy52" id="hisfy52"
								value="<?php echo $level52['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="safety_52"
									id="safety_52"
									onchange="itemscore_level52(this); actualscore5();">
										<option value="0" <?php  if($level52['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level52['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level52['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td>5-2 There have been no accidents/injuries in the zone for
									>12 months.</td>
								<td>
									<ul>
										<li>* Control Chart.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* Zero accidents/injuries in the zone for >12 months.</li>
									</ul>
								</td>

							</tr>

							<!--score row -->

							<tr>
								<td class="text-center score-tit">Item Score</td>
								<input type="hidden" id="total_itemsafety"
									name="total_itemsafety"
									value="<?php if($itemtqm['Itemscore'] != "" ){ echo $itemtqm['Itemscore']; }else{ echo "0"; } ?>">
								<td colspan="5" class="text-center" name="itemscoresfy"
									id="itemscoresfy"><?php if($itemtqm['Itemscore'] != "" ){ echo $itemtqm['Itemscore']; }else{ echo "0"; } ?>
								</td>
								<td colspan="7" class="bg-gray"></td>

							</tr>
					<!--- for comments form auditor ---->
						
						<?php 	$commentsfy=$objlogin->GetComment(103); ?>
					<input type="hidden" name="Commentidsfy" id="Commentidsfy"
							value="<?php echo $commentsfy['Comment_id'];?>">
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" id="diagnosis_result_sfy" name="diagnosis_result_sfy" style="width: 99%;" ><?php echo stripslashes($commentsfy['Diagnosis_Result']); ?></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" id="kaizen_idea_sfy" name="kaizen_idea_sfy" style="width: 99%;" ><?php echo stripslashes($commentsfy['Kaizen_Idea']); ?></textarea></td>
						</tr>
						<!--- for comments form auditor  ------------->
							<!-- 5S  row -->

							<!--1st row -->
							<?php
							$item5s=$objlogin->Getitemscore(112);
							?>
							<input type="hidden" name="item5sid" id="item5sid"
								value="<?php echo $item5s['Id'];?>">
							<input type="hidden" id="level_total5s1" name="level_total5s1"
								value="<?php if($item5s['Level_total1'] != "" ){ echo $item5s['Level_total1']; }else{ echo "0"; } ?>">
							<input type="hidden" id="level_total5s2" name="level_total5s2"
								value="<?php if($item5s['Level_total2'] != "" ){ echo $item5s['Level_total2']; }else{ echo "0"; } ?>">
							<input type="hidden" id="level_total5s3" name="level_total5s3"
								value="<?php if($item5s['Level_total3'] != "" ){ echo $item5s['Level_total3']; }else{ echo "0"; } ?>">
							<input type="hidden" id="level_total5s4" name="level_total5s4"
								value="<?php if($item5s['Level_total4'] != "" ){ echo $item5s['Level_total4']; }else{ echo "0"; } ?>">
							<input type="hidden" id="level_total5s5" name="level_total5s5"
								value="<?php if($item5s['Level_total5'] != "" ){ echo $item5s['Level_total5']; }else{ echo "0"; } ?>">
								<?php
								$level211=$objlogin->GetauditById(112,1,1);
								?>
							<input type="hidden" name="his11" id="his11"
								value="<?php echo $level211['Id'];?>">
							<tr>
								<td rowspan="5" class="text-center"><b>5S</b></td>
								<td class="padd0 text-center"><select name="S_11" id="S_11"
									onchange="itemscore_level5s11(this); actualscore1();">
										<option value="0" <?php  if($level211['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level211['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level211['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>1-1 5S is clearly defined and Standards are established for
									the zone and 5S responsibilities are assigned to all staff in
									the zone.</td>
								<td>
									<ul>
										<li>* 5S definitions</li>
										<li>* 5S standards</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* 5S definitions are posted.</li>
										<li>* APW 5S standards have been established for the zone</li>
									</ul>
								</td>

							</tr>



							<!-- row4-->
							<?php
							$level221=$objlogin->GetauditById(112,2,1);
							?>
							<input type="hidden" name="his21" id="his21"
								value="<?php echo $level221['Id'];?>">
							<tr>
								<td></td>
								<td class="padd0 text-center"><select name="S_21" id="S_21"
									onchange="itemscore_level5s21(this); actualscore2();">
										<option value="0" <?php  if($level221['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level221['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level221['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td>2-1 The Supervisor is actively engaged in 5S activity
									through delegation of responsibilities. The condition of the
									zone is in accordance with the 5S Standards.</td>
								<td>
									<ul>
										<li>* 5S Standard Check Sheet</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td class="text-center">0</td>

								<td>
									<ul>
										<li>* The Supervisor must be able to explain how
											responsibility for 5S has been delegated.</li>
										<li>* The condition of the zone must be in accordance with the
											5S Standards.</li>
										<li>* Less than 3 minor issues per assignment is acceptable.</li>
									</ul>
								</td>

							</tr>


							<!-- row5-->
							<?php
							$level231=$objlogin->GetauditById(112,3,1);
							?>
							<input type="hidden" name="his31" id="his31"
								value="<?php echo $level231['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="S_31" id="S_31"
									onchange="itemscore_level5s31(this); actualscore3();">
										<option value="0" <?php  if($level231['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level231['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level231['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td>3-1 5S Diagnosis activity is taking place within the zone to
									identify improvement opportunity. Where appropriate, quick
									actions are taken to return to standard.</td>
								<td>
									<ul>
										<li>* 5S patrol / audit.</li>
										<li>* Quick Action.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* Documented evidence that Supervisor is identifying 5S
											improvement opportunities.</li>
										<li>* Documented evidence that Quick Action has been taken for
											5S non compliance.</li>
									</ul>
								</td>

							</tr>
							<!-- row6-->
							<?php
							$level241=$objlogin->GetauditById(112,4,1);
							?>
							<input type="hidden" name="his41" id="his41"
								value="<?php echo $level241['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="S_41" id="S_41"
									onchange="itemscore_level5s41(this); actualscore4();">
										<option value="0" <?php  if($level241['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level241['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level241['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td>4-1 Countermeasures are applied to all 5S related issues
									identified during 5S Diagnosis.</td>
								<td>
									<ul>
										<li>* 5S Countermeasures.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td class="text-center">0</td>
								<td>
									<ul>
										<li>* Countermeasures must be applied or planned to be
											implemented for all 5S related issues identified during 5S
											Diagnosis.</li>
									</ul>
								</td>

							</tr>
							<!-- row7-->
							<?php
							$level251=$objlogin->GetauditById(112,5,1);
							?>
							<input type="hidden" name="his51" id="his51"
								value="<?php echo $level251['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="S_51" id="S_51"
									onchange="itemscore_level5s51(this); actualscore5();">
										<option value="0" <?php  if($level251['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level251['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level251['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td>5-1 An autonomous 5S condition is Sustained.</td>
								<td>
									<ul>
										<li>* 5S condition</li>
									</ul>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-center">0</td>
								<td>
									<ul>
										<li>* All workstations are in compliance with 5S standards.</li>
									</ul>
								</td>

							</tr>


							<!--score row -->

							<tr>
								<td class="text-center score-tit">Item Score</td>
								<td colspan="5" class="text-center" id="itemscore5s_value"><?php if($item5s['Itemscore'] != ""){ echo $item5s['Itemscore'];} else{ echo "0";} ?>
								</td>
								<input type="hidden" id="total_item5s" name="total_item5s"
									value="<?php if($item5s['Itemscore'] != ""){ echo $item5s['Itemscore'];} else{ echo "0";} ?>">
								<td colspan="7" class="bg-gray"></td>
							</tr>
							<!--- for comments form auditor ---->
						
						<?php 	$comment5s=$objlogin->GetComment(112); ?>
					<input type="hidden" name="Commentid5s" id="Commentid5s"
							value="<?php echo $comment5s['Comment_id'];?>">
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" id="diagnosis_result_5s" name="diagnosis_result_5s" style="width: 99%;" ><?php echo stripslashes($comment5s['Diagnosis_Result']); ?></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" id="kaizen_idea_5s" name="kaizen_idea_5s" style="width: 99%;" ><?php echo stripslashes($comment5s['Kaizen_Idea']); ?></textarea></td>
						</tr>
						<!--- for comments form auditor  ------------->
							<!-- Environment  row -->

							<!--1st row -->
							<?php
							$itemenv=$objlogin->Getitemscore(117);
							?>
							<input type="hidden" name="itemenvid" id="itemenvid"
								value="<?php echo $itemenv['Id'];?>">
							<input type="hidden" id="level_totalenv1" name="level_totalenv1"
								value="<?php if($itemenv['Level_total1'] != ""){ echo $itemenv['Level_total1'];} else{ echo "0";} ?>">
							<input type="hidden" id="level_totalenv2" name="level_totalenv2"
								value="<?php if($itemenv['Level_total2'] != ""){ echo $itemenv['Level_total2'];} else{ echo "0";} ?>">
							<input type="hidden" id="level_totalenv3" name="level_totalenv3"
								value="<?php if($itemenv['Level_total3'] != ""){ echo $itemenv['Level_total3'];} else{ echo "0";} ?>">
							<input type="hidden" id="level_totalenv4" name="level_totalenv4"
								value="<?php if($itemenv['Level_total4'] != ""){ echo $itemenv['Level_total4'];} else{ echo "0";} ?>">
							<input type="hidden" id="level_totalenv5" name="level_totalenv5"
								value="<?php if($itemenv['Level_total5'] != ""){ echo $itemenv['Level_total5'];} else{ echo "0";} ?>">
								<?php
								$level311=$objlogin->GetauditById(117,1,1);
								?>
							<input type="hidden" name="hise11" id="hise11"
								value="<?php echo $level311['Id'];?>">
							<tr>
								<td rowspan="5" class="text-center"><b>Environment</b></td>
								<td class="padd0 text-center"><select name="Environment_11"
									id="Environment_11"
									onchange="itemscore_levelenv11(this); actualscore1();">
										<option value="0" <?php  if($level311['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level311['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level311['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>1-1 The Supervisor can demonstrate Environmental compliance
									requirements for the zone.</td>
								<td>
									<ul>
										<li>* Environmental Standards</li>
									</ul>
								</td>
								<td class="text-center">0</td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* The Supervisor must be able to explain the Environmental
											compliance requirements for the zone.</li>
										<li>* Plant Environmental Policy is posted in the zone.</li>
									</ul>
								</td>

							</tr>



							<!-- row4-->
							<?php
							$level321=$objlogin->GetauditById(117,2,1);
							?>
							<input type="hidden" name="hise21" id="hise21"
								value="<?php echo $level321['Id'];?>">
							<tr>
								<td></td>
								<td class="padd0 text-center"><select name="Environment_21"
									id="Environment_21"
									onchange="itemscore_levelenv21(this); actualscore2();">
										<option value="0" <?php  if($level321['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level321['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level321['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td>2-1 The zone is working in accordance with the applicable
									Environmental procedures.Waste streams are identified and
									adhered to.</td>
								<td>
									<ul>
										<li>* Environmental Standard Compliance.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td class="text-center">0</td>

								<td>
									<ul>
										<li>* There should be no deviance from the applicable
											Environmental procedures when viewing on the shop floor.</li>
									</ul>
								</td>

							</tr>


							<!-- row5-->
							<?php
							$level331=$objlogin->GetauditById(117,3,1);
							?>
							<input type="hidden" name="hise31" id="hise31"
								value="<?php echo $level331['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="Environment_31"
									id="Environment_31"
									onchange="itemscore_levelenv31(this); actualscore3();">
										<option value="0" <?php  if($level331['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level331['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level331['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td>3-1 Any Environmental issues that are identified are quickly
									returned to standard where appropriate.</td>
								<td>
									<ul>
										<li>* Environmental Opportunities.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* All Environmental non compliance are documented and
											returned to standard condition where appropriate.</li>
									</ul>
								</td>

							</tr>
							<!-- row6-->
							<?php
							$level341=$objlogin->GetauditById(117,4,1);
							?>
							<input type="hidden" name="hise41" id="hise41"
								value="<?php echo $level341['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="Environment_41"
									id="Environment_41"
									onchange="itemscore_levelenv41(this); actualscore4();">
										<option value="0" <?php  if($level341['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level341['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level341['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td>4-1 Countermeasures are applied to the root cause of
									Environmental non compliance.</td>
								<td>
									<ul>
										<li>* Countermeasures for Environmental opportunities.</li>
									</ul>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-center">0</td>
								<td>
									<ul>
										<li>* Coutnermeausres have been implemented to eliminate
											environmental non compliance.</li>
									</ul>
								</td>

							</tr>
							<!-- row7-->
							<?php
							$level351=$objlogin->GetauditById(117,5,1);
							?>
							<input type="hidden" name="hise51" id="hise51"
								value="<?php echo $level351['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="Environment_51"
									id="Environment_51"
									onchange="itemscore_levelenv51(this); actualscore5();">
										<option value="0" <?php  if($level351['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level351['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level351['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td>5-1 There have been no Environmental non-compliance issues
									in the last 12 months.</td>
								<td>
									<ul>
										<li>* Environmental Report.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* Zero Environmental non-compliance issues in the last 12
											months.</li>
									</ul>
								</td>

							</tr>


							<!--score row -->

							<tr>
								<td class="text-center score-tit">Item Score</td>
								<td colspan="5" class="text-center" id="item_environment"><?php if($itemenv['Itemscore'] != ""){ echo $itemenv['Itemscore']; }else{ echo "0";} ?>
								</td>
								<input type="hidden" id="total_envy" name="total_envy"
									value="<?php if($itemenv['Itemscore'] != ""){ echo $itemenv['Itemscore']; }else{ echo "0";} ?>">
								<td colspan="7" class="bg-gray"></td>
							</tr>
						<!--- for comments form auditor ---->
						
						<?php 	$commentenvy=$objlogin->GetComment(117); ?>
					<input type="hidden" name="Commentidenvy" id="Commentidenvy"
							value="<?php echo $commentenvy['Comment_id'];?>">
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" id="diagnosis_result_envy" name="diagnosis_result_envy" style="width: 99%;" ><?php echo stripslashes($commentenvy['Diagnosis_Result']); ?></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" id="kaizen_idea_envy" name="kaizen_idea_envy" style="width: 99%;" ><?php echo stripslashes($commentenvy['Kaizen_Idea']); ?></textarea></td>
						</tr>
						<!--- for comments form auditor  ------------->
							<!-- Ergoimics  row -->

							<!--1st row -->
							<?php
							$itemergo=$objlogin->Getitemscore(122);
							?>
							<input type="hidden" name="itemegoid" id="itemegoid"
								value="<?php echo $itemergo['Id'];?>">
							<input type="hidden" id="level_totalergo1"
								name="level_totalergo1"
								value="<?php if($itemergo['Level_total1'] != ""){ echo $itemergo['Level_total1']; }else{ echo "0";}?>">
							<input type="hidden" id="level_totalergo2"
								name="level_totalergo2"
								value="<?php if($itemergo['Level_total2'] != ""){ echo $itemergo['Level_total2']; }else{ echo "0";}?>">
							<input type="hidden" id="level_totalergo3"
								name="level_totalergo3"
								value="<?php if($itemergo['Level_total3'] != ""){ echo $itemergo['Level_total3']; }else{ echo "0";}?>">
							<input type="hidden" id="level_totalergo4"
								name="level_totalergo4"
								value="<?php if($itemergo['Level_total4'] != ""){ echo $itemergo['Level_total4']; }else{ echo "0";}?>">
							<input type="hidden" id="level_totalergo5"
								name="level_totalergo5"
								value="<?php if($itemergo['Level_total5'] != ""){ echo $itemergo['Level_total5']; }else{ echo "0";}?>">


								<?php
								$level411=$objlogin->GetauditById(122,1,1);
								?>
							<input type="hidden" name="hisc11" id="hisc11"
								value="<?php echo $level411['Id'];?>">
							<tr>
								<td rowspan="5" class="text-center"><b>Ergonomics</b></td>
								<td class="padd0 text-center"><select name="Ergonomic_11"
									id="Ergonomic_11"
									onchange="itemscore_levelergo11(this); actualscore1();">
										<option value="0" <?php  if($level411['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level411['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level411['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td>1-1 Rules and standards for Ergonomic Assessment have been
									established (New Model introduction, new facility installation,
									new line balance which is +/- 10% change in volume).</td>
								<td>
									<ul>
										<li>* Ergonomic rules and standards.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* If rules and standards exist, then level is achieved.</li>
									</ul>
								</td>

							</tr>



							<!-- row4-->
							<?php
							$level421=$objlogin->GetauditById(122,2,1);
							?>
							<input type="hidden" name="hisc21" id="hisc21"
								value="<?php echo $level421['Id'];?>">
							<tr>
								<td></td>
								<td class="padd0 text-center"><select name="Ergonomic_21"
									id="Ergonomic_21"
									onchange="itemscore_levelergo21(this); actualscore2();">
										<option value="0" <?php  if($level421['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level421['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level421['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td>2-1 Ergonomic Assessments have been conducted for each
									assignment. Operator Rotation is based on the Ergonomic
									Assessment results.</td>
								<td>
									<ul>
										<li>* Ergonomics Assessments</li>
										<li>* Operator Rotation</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* If Ergonomic Assessment results exist and operator
											rotation is taking place based on the results, then level is
											achieved.</li>
									</ul>
								</td>

							</tr>


							<!-- row5-->
							<?php
							$level431=$objlogin->GetauditById(122,3,1);
							?>
							<input type="hidden" name="hisc31" id="hisc31"
								value="<?php echo $level431['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="Ergonomic_31"
									id="Ergonomic_31"
									onchange="itemscore_levelergo31(this); actualscore3();">
										<option value="0" <?php  if($level431['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level431['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level431['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td></td>
								<td>3-1 Any Ergonomic issues that are identified are quickly
									returned to standard where appropriate. They are re-evaluated
									after a major 4M Change.</td>
								<td>
									<ul>
										<li>* Ergonomic Assessments.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* Ergonomic Assessments must have been conducted for each
											assignment.</li>
										<li>* They must be re-evaluated following a major 4M Change
											(New Model introduction, new facility installation, new line
											balance).</li>
									</ul>
								</td>

							</tr>
							<!-- row6-->
							<?php 
	$level441=$objlogin->GetauditById(122,4,1);	
?>
							<input type="hidden" name="hisc41" id="hisc41"
								value="<?php echo $level441['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="Ergonomic_41"
									id="Ergonomic_41"
									onchange="itemscore_levelergo41(this); actualscore4();">
										<option value="0" <?php  if($level441['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level441['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level441['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td></td>
								<td>4-1 Countermeasures are applied to all Operator care related
									issues identified during Ergonomic Assessment.</td>
								<td>
									<ul>
										<li>* Countermeasures for Ergonomic opportunities.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td class="text-center">0</td>
								<td>
									<ul>
										<li>*Countermeasures are applied to all Operator care related
											issues identified during Ergonomic Assessment.</li>
									</ul>
								</td>

							</tr>
							<!-- row7-->
							<?php 
	$level451=$objlogin->GetauditById(122,5,1);	
?>
							<input type="hidden" name="hisc51" id="hisc51"
								value="<?php echo $level451['Id'];?>">
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="padd0 text-center"><select name="Ergonomic_51"
									id="Ergonomic_51"
									onchange="itemscore_levelergo51(this); actualscore5();">
										<option value="0" <?php  if($level451['Audit_Check'] == 0){?>
											selected="selected"
											<?php } if($level451['Audit_Check'] ==""){?>
											selected="selected" <?php }?>>0</option>
										<option value="1" <?php  if($level451['Audit_Check'] == 1){?>
											selected="selected" <?php }?>>1</option>
								</select>
								</td>
								<td>5-1 There are no A or B rank operations within the zone and
									all assignments are C grade or less for Ergonomic Assessment.</td>
								<td>
									<ul>
										<li>* Ergonomics assessments.</li>
									</ul>
								</td>
								<td></td>
								<td class="text-center">0</td>
								<td></td>
								<td></td>
								<td>
									<ul>
										<li>* If no A or B rank assignments, then the level is
											achieved.</li>
									</ul>
								</td>

							</tr>


							<!--score row -->

							<tr>
								<td class="text-center score-tit">Item Score</td>
								<td colspan="5" class="text-center" id="total_itemergo"><?php if($itemergo['Itemscore'] != ""){ echo $itemergo['Itemscore']; }else{ echo "0";} ?>
								</td>
								<input type="hidden" id="item_scoreergo" name="item_scoreergo"
									value="<?php if($itemergo['Itemscore'] != ""){ echo $itemergo['Itemscore']; }else{ echo "0";} ?>">
								<td colspan="7" class="bg-gray"></td>
							</tr>
						<!--- for comments form auditor ---->
						
						<?php 	$commentergo=$objlogin->GetComment(122); ?>
					<input type="hidden" name="Commentidergo" id="Commentidergo"
							value="<?php echo $commentergo['Comment_id'];?>">
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" id="diagnosis_result_ergo" name="diagnosis_result_ergo" style="width: 99%;" ><?php echo stripslashes($commentergo['Diagnosis_Result']); ?></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" id="kaizen_idea_ergo" name="kaizen_idea_ergo" style="width: 99%;" ><?php echo stripslashes($commentergo['Kaizen_Idea']); ?></textarea></td>
						</tr>
						<!--- for comments form auditor  ------------->
							<tr class="item1">
								<td colspan="6"><b>Category Score<b>
								
								</td>
								<td colspan="2" rowspan="5" class="item2"><b class="score-tit">Diagnosis
										Method:</b><br> 1. Commence diagnosis for level 1 for each
									Evaluation Item.<br> 2. Continue the diagnosis by level, if the
									Supervisors fails to deliver the Compliance Requirement within
									a level, complete the rest of the level and stop the diagnosis
									scoring for that particular Evaluation Item. If item is not
									applicable give the score and move to next item.<br> 3. For
									Diagnosis categories with more than 1 Evaluation Item, repeat
									step 2 for the next Evaluation Item.</td>
								<td colspan="5" rowspan="5" class="item2"><b class="score-tit">Key:</b><br>
									S = Talk to and request information from the Supervisor.<br> D
									= Request to see and then validate documentation.<br> O = Talk
									to and request information from the Operator.<br> G = Validate
									the actual condition in the Genba (shop floor).</td>

							</tr>
							<?php
		$getrank = $objlogin->Getcategory(103);
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
								<td>/5</td>
								<td>/5</td>
								<td>/4</td>
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
								<td colspan="5" class="text-center" id="category-rank"><?php if($getrank['Category_rank'] !=""){ echo $getrank['Category_rank']; }else{ echo "0.0"; }?>
								</td>
							</tr>

						</tbody>

					</table>


				</div>

			</div>
			<div style="float: right">
				<button type="button" class="next" onclick="validatecomments();">Submit</button>
			</div>
				<!-- onclick="save_com(); getActualScore(); " -->
	
	</form>
</body>
</html>

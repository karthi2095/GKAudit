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

<script>  
  function save()
	{
	//alert("1");
	
	var str= $("form").serialize();
	//alert(str);
	$.ajax({
		url: 'save_tqm.php',
		type: "POST",
		async: false,
		data:"&"+str,
		success: function(data) {
			//alert(data);
						if(data== '1'){
							
										window.location.href='tqm-teamwork.php?msg=1';
										return false;
							
									}else if(data == '2')
										{
											//alert(data);	
											window.location.href ='tqm-teamwork.php?msg=2';
											return false;
										}else if(data == '0')			
											{				
												//alert(data);
												window.location.href ='tqm-teamwork.php?msg=3';
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

			<h3>Diagnosis Category : TQM & Teamwork</h3>
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
			if($_REQUEST['msg'] == '1')
			{
				echo "Your audit has been saved successfully";
			}
			?>
		</div>
		<div id="message"
			style="color: red; text-align: center; font-weight: bold;">
			<?php
			if($_REQUEST['msg'] == '2')
			{
				echo "No changes to be saved";
			}
			if($_REQUEST['msg'] == '3')
			{
				echo "Failed to save";
			}

			?>
		</div>
		&nbsp; &nbsp; &nbsp; &nbsp;

		<div class="table-div">
			<form name="tqm-team" method="post" action="">
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
						<?php
						$itemtqm=$objlogin->Getitemscore(1);
						?>
						<input type="hidden" name="hdaction1" id="hdaction1" value="">
						<input type="hidden" name="level_totaltqm1" id="level_totaltqm1"
							value="<?php if($itemtqm['Level_total1'] != ""){ echo $itemtqm['Level_total1']; }else{ echo "0";} ?>">
						<input type="hidden" name="level_totaltqm2" id="level_totaltqm2"
							value="<?php if($itemtqm['Level_total2'] != ""){ echo $itemtqm['Level_total2']; }else{ echo "0";} ?>">
						<input type="hidden" name="level_totaltqm3" id="level_totaltqm3"
							value="<?php if($itemtqm['Level_total3'] != ""){ echo $itemtqm['Level_total3']; }else{ echo "0";} ?>">
						<input type="hidden" name="level_totaltqm4" id="level_totaltqm4"
							value="<?php if($itemtqm['Level_total4'] != ""){ echo $itemtqm['Level_total4']; }else{ echo "0";} ?>">
						<input type="hidden" name="level_totaltqm5" id="level_totaltqm5"
							value="<?php if($itemtqm['Level_total5'] != ""){ echo $itemtqm['Level_total5']; }else{ echo "0";} ?>">
						<input type="hidden" name="sub_total" id="sub_total" value="">


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
						$leveltqm11=$objlogin->GetauditById(1,1,1);
						?>

						<input type="hidden" name="hitqm11" id="hitqm11"
							value="<?php echo $leveltqm11['Id'];?>">
						<tr>
							<td rowspan="8" class="text-center"><b>TQM</b></td>
							<td class="padd0 text-center"><select name="tqm_11" id="tqm_11"
								onchange="itemscore_level11(this); actualscore1();">
									<option value="0" <?php  if($leveltqm11['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($leveltqm11['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-1 The Supervisor has an Annual Objective Plan and can
								explain the content, deployment logic and link to the Plant/Shop
								direction.</td>
							<td>
								<ul>
									<li>* SSV AOP</li>
									<li>* SV AOP</li>
									<li>* Sv's knowledge</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<h3>SV is able to explain the AOP content and deployment logic
									AOP must contain :</h3>
								<ul>
									<li>* targets & strategy and control items</li>
									<li>* correct deployment from Senior's AOP</li>
								</ul>
							</td>

						</tr>

						<!--2st row -->
						<?php
						$leveltqm12=$objlogin->GetauditById(1,1,2);
						?>
						<input type="hidden" name="hitqm12" id="hitqm12"
							value="<?php echo $leveltqm12['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="tqm_12" id="tqm_12"
								onchange="itemscore_level12 (this); actualscore1();">
									<option value="0" <?php  if($leveltqm12['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($leveltqm12['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-2 The Supervisor has a TQM visual Management board to
								display the Control Charts showing performance against the
								Targets and Strategies.</td>
							<td>
								<h3>TQM Visual Management board</h3>
								<ul>
									<li>* Control charts for Policy objectives & strategies of the
										zone</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								</ul> TQM Visual Management board has Control Charts for Policy
								Objectives and Strategies</td>

						</tr>
						<!--3rd row -->
						<?php
						$leveltqm21=$objlogin->GetauditById(1,2,1);
						?>
						<input type="hidden" name="hitqm21" id="hitqm21"
							value="<?php echo $leveltqm21['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="tqm_21" id="tqm_21"
								onchange="itemscore_level21(this); actualscore2();">
									<option value="0" <?php  if($leveltqm21['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($leveltqm21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 The Annual Objective Plan includes the relevant SQCTP
								KPI's, targets that challenge current zone performance and
								robust strategies to manage the zone's performance.</td>
							<td>
								<ul>
									<li>* SSV AOP</li>
									<li>* SV AOP</li>
									<li>* SV target setting logic</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<h3>SV is able to explain the targets & strategies AOP must
									contain :</h3>
								<ul>
									<li>* challenging targets targets for relevant SQCTP based on
										facts & data</li>
									<li>* Robust & quantifiable strategies to achieve the
										objectives 3 or less minor issues are OK</li>
								</ul>
							</td>



						</tr>
						<!--4th row -->
						<?php
						$leveltqm22=$objlogin->GetauditById(1,2,2);
						?>
						<input type="hidden" name="hitqm22" id="hitqm22"
							value="<?php echo $leveltqm22['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="tqm_22" id="tqm_22"
								onchange="itemscore_level22(this); actualscore2();">
									<option value="0" <?php  if($leveltqm22['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($leveltqm22['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-2 The TQM Visual Management board contains the latest
								performance results from the previous month. Daily month to date
								performance for Quality and Delivery can be demonstrated.</td>
							<td>
								<h3>TQM Visual Management board</h3>
								<ul>
									<li>* RF1</li>
									<li>* Monthly Control charts</li>
									<li>* Month to date or daily management of Quality and delivery
										KPI</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>- Daily month to date data available for quality & delivery
										KPI</li>
									<li>- Monthly Control Charts updated by the 10th of the month</li>
									<li>- RF1 document with latest performance results.</li>
								</ul>
							</td>
						</tr>

						<!--5th row -->
						<?php
						$leveltqm31=$objlogin->GetauditById(1,3,1);
						?>
						<input type="hidden" name="hitqm31" id="hitqm31"
							value="<?php echo $leveltqm31['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="tqm_31" id="tqm_31"
								onchange="itemscore_level31(this); actualscore3();">
									<option value="0" <?php  if($leveltqm31['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($leveltqm31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-1 Monthly AOP performance reviews are taking place.Quick
								actions are taken to return to standard.</td>
							<td>
								<ul>
									<li>* Monthly performance review (RF1)</li>
									<li>* control charts</li>
									<li>* Quick actions</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<h3>SV can :</h3>
								<ul>
									<li>* demonstrate the performance Review is taking place using
										RF1</li>
									<li>* show the reasons for deviation on control charts</li>
									<li>* explain his improvement plan for the deviance to targets</li>
									<li>* explain quick actions to return to standard where
										appropriate</li>
								</ul>
							</td>

						</tr>


						<!--6th row -->
						<?php
						$leveltqm41=$objlogin->GetauditById(1,4,1);
						?>
						<input type="hidden" name="hitqm41" id="hitqm41"
							value="<?php echo $leveltqm41['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="tqm_41" id="tqm_41"
								onchange="itemscore_level41(this); actualscore4();">
									<option value="0" <?php  if($leveltqm41['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($leveltqm41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select></td>
							<td></td>
							<td>4-1 Countermeasures have been implemented for all causes of
								failed targets or kaizen Plans are in place to manage
								improvements.</td>
							<td>
								<ul>
									<li>* Kaizen Plan</li>
									<li>* Root cause analysis</li>
									<li>* Countermeasure</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<h3>SV can :</h3>
								<ul>
									<li>* Demonstrate correct root cause analysis</li>
									<li>* Show countermeasures for root cause analysis are in place
										on genba</li>
									<li>* Validate effectiveness of countermeasure or Kaizen Plan.</li>
								</ul>
							</td>

						</tr>


						<!--5th row -->
						<?php
						$leveltqm51=$objlogin->GetauditById(1,5,1);
						?>
						<input type="hidden" name="hitqm51" id="hitqm51"
							value="<?php echo $leveltqm51['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="tqm_51" id="tqm_51"
								onchange="itemscore_level51(this); actualscore5();">
									<option value="0" <?php  if($leveltqm51['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php  if($leveltqm51['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>

							<td>5-1 All of the QCT targets are challenging Global Best of the
								Best performance</td>
							<td>
								<ul>
									<li>* Benchmark knowledge</li>
									<li>* Control charts</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<h3>SV can :</h3>
								<ul>
									<li>* Show evidence of global benchmark targets</li>
									<li>KPI targets challenge global benchmark</li>
								</ul>
							</td>

						</tr>


						<!--5th row -->
						<?php
						$leveltqm52=$objlogin->GetauditById(1,5,2);
						?>
						<input type="hidden" name="hitqm52" id="hitqm52"
							value="<?php echo $leveltqm52['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="tqm_52" id="tqm_52"
								onchange="itemscore_level52(this); actualscore5();">
									<option value="0" <?php if($leveltqm52['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltqm52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-2 Best practices are implemented and All KPI are achieving
								target condition to improve profitability and competitiveness</td>
							<td>
								<ul>
									<li>* Best practices adoption</li>
									<li>* Control charts</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<h3>SV can :</h3>
								<ul>
									<li>* show evidence of best practices adoption All KPI's are
										achieving target condition for the 3 previous months.</li>
								</ul>
							</td>

						</tr>

						<!--score row -->

						<input type="hidden" name="itemtqm" id="itemtqm"
							value="<?php echo $itemtqm['Id'];?>">
						<input type="hidden" name="total_item" id="total_itemtqm"
							value="<?php if($itemtqm['Itemscore'] != ""){ echo $itemtqm['Itemscore'];}else{ echo "0"; }?>">
						<tr>
							<td class="text-center score-tit">Item Score</td>
							<td colspan="5" class="text-center"><span id="item_scoretqm"><?php if($itemtqm['Itemscore'] != ""){ echo $itemtqm['Itemscore'];}else{ echo "0"; }?>
							</span>
							</td>
							<td colspan="7" class="bg-gray"></td>

						</tr>
						<!--- for comments form auditor  ------------->
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" style="width: 100%;"></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" style="width: 100%;"></textarea></td>
						</tr>
						<!--- for comments form auditor  ------------->
						
						
						
						<!--Team Work  row -->

						<!--1st row -->
						<?php
						$itemtm=$objlogin->Getitemscore(9);
						?>
						<input type="hidden" name="hdaction2" id="hdaction2" value="">
						<input type="hidden" name="level_totaltm1" id="level_totaltm1"
							value="<?php if($itemtm['Level_total1'] != ""){ echo $itemtm['Level_total1']; }else{ echo "0"; }?>">
						<input type="hidden" name="level_totaltm2" id="level_totaltm2"
							value="<?php if($itemtm['Level_total2'] != ""){ echo $itemtm['Level_total2']; }else{ echo "0"; }?>">
						<input type="hidden" name="level_totaltm3" id="level_totaltm3"
							value="<?php if($itemtm['Level_total3'] != ""){ echo $itemtm['Level_total3']; }else{ echo "0"; }?>">
						<input type="hidden" name="level_totaltm4" id="level_totaltm4"
							value="<?php if($itemtm['Level_total4'] != ""){ echo $itemtm['Level_total4']; }else{ echo "0"; }?>">
						<input type="hidden" name="level_totaltm5" id="level_totaltm5"
							value="<?php if($itemtm['Level_total5'] != ""){ echo $itemtm['Level_total5']; }else{ echo "0"; }?>">
						<input type="hidden" name="sub_totaltm" id="sub_totaltm" value="">
						<tr>
							<td rowspan="8" class="text-center"><b>Team Work</b></td>
							<?php
							$leveltm11=$objlogin->GetauditById(9,1,1);
							?>
							<input type="hidden" name="hitm11" id="hitm11"
								value="<?php echo $leveltm11['Id'];?>">
							<td class="padd0 text-center"><select name="tm_11" id="tm_11"
								onchange="return teamwork_level11(this); actualscore1();">
									<option value="0" <?php if($leveltm11['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltm11['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-1 The Supervisor has communicated the Annual Objectives and
								main SQCT KPI targets for the zone to their team.</td>
							<td>
								<ul>
									<li>* AOP communication</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<h3>SV can :</h3>
								<ul>
									<li>* explain how AOP objectives and targets are communicated</li>
								</ul>
							</td>

						</tr>

						<?php
						$leveltm12=$objlogin->GetauditById(9,1,2);
						?>
						<input type="hidden" name="hitm12" id="hitm12"
							value="<?php echo $leveltm12['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="tm_12" id="tm_12"
								onchange="return teamwork_level12(this); actualscore1();">
									<option value="0" <?php if($leveltm12['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltm12['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-2 The Supervisor holds a daily communication session with
								his team to review the shifts SQCT performance levels.</td>
							<td>
								<ul>
									<li>* Start of shift briefing</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>
								<ul>
									<li>* Time is allocated for the start of shift briefing</li>
									<li>* The SV can show documented evidence of start of shift</li>
								</ul>
							</td>

						</tr>

						<?php
						$leveltm13=$objlogin->GetauditById(9,1,3);
						?>
						<input type="hidden" name="hitm13" id="hitm13"
							value="<?php echo $leveltm13['Id'];?>">
						<tr>
							<td class="padd0 text-center"><select name="tm_13" id="tm_13"
								onchange="return teamwork_level13(this); actualscore1();">
									<option value="0" <?php if($leveltm13['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltm13['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>1-3 The Supervisor ensures a robust handover session with
								their counterpart on the opposite shift.</td>
							<td>
								<ul>
									<li>* Zone supervisor handover</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>The SV can show documented evidence of supervisor handover</td>

						</tr>


						<!-- row4-->
						<?php
						$leveltm21=$objlogin->GetauditById(9,2,1);
						?>
						<input type="hidden" name="hitm21" id="hitm21"
							value="<?php echo $leveltm21['Id'];?>">
						<tr>
							<td></td>
							<td class="padd0 text-center"><select name="tm_21" id="tm_21"
								onchange="return teamwork_level21(this); actualscore2();">
									<option value="0" <?php if($leveltm21['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltm21['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td>2-1 The team members know the key Quality and Delivery KPI
								targets and current performance against these key targets.</td>
							<td>
								<ul>
									<li>* Team members awareness</li>
								</ul>
							</td>
							<td></td>
							<td></td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td>Team members can explain Quality and Delivery targets and
								current performance. This should include the last quality defect
								from the work station.</td>

						</tr>


						<!-- row5-->
						<?php
						$leveltm31=$objlogin->GetauditById(9,3,1);
						?>
						<input type="hidden" name="hitm31" id="hitm31"
							value="<?php echo $leveltm31['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="tm_31" id="tm_31"
								onchange="return teamwork_level31(this); actualscore3();">
									<option value="0" <?php if($leveltm31['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltm31['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td></td>
							<td>3-1 Through 2-way communication, issues and suggestions for
								improvement are generated and recorded for follow-up and
								countermeasure. Where appropriate, quick actions are taken to
								return to standard.</td>
							<td>
								<ul>
									<li>* Team members suggestions</li>
									<li>* Quick actions</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<h3>The SV can :</h3>
								<ul>
									<li>- show documented evidence of improvements suggested by
										team members</li>
									<li>- show Quick actions implemented where appropriate</li>
								</ul>
							</td>

						</tr>
						<!-- row6-->
						<?php
						$leveltm41=$objlogin->GetauditById(9,4,1);
						?>
						<input type="hidden" name="hitm41" id="hitm41"
							value="<?php echo $leveltm41['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="tm_41" id="tm_41"
								onchange="return teamwork_level41(this); actualscore4();">
									<option value="0" <?php if($leveltm41['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltm41['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td></td>
							<td>4-1 Countermeasures are applied to the issues raised through
								effective 2-way communication.</td>
							<td>
								<ul>
									<li>* Countermeasures implementation</li>
								</ul>
							</td>
							<td></td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td>
								<h3>The SV can show:</h3>
								<ul>
									<li>- countermeasures for team member improvement suggestions
										are implemented in a reasonable time frame</li>
								</ul>
							</td>

						</tr>
						<!-- row7-->
						<?php
						$leveltm51=$objlogin->GetauditById(9,5,1);
						?>
						<input type="hidden" name="hitm51" id="hitm51"
							value="<?php echo $leveltm51['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="tm_51" id="tm_51"
								onchange="return teamwork_level51(this); actualscore5();">
									<option value="0" <?php if($leveltm51['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltm11['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-1 All zone issues and suggestions resulting from effective
								communication are implemented by zone staff to promote operator
								engagement and teamwork.</td>
							<td>
								<ul>
									<li>* Team members involvement</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td></td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td>The SV can show improvements every month made with direct
								involvement from Team member</td>

						</tr>

						<!-- row8-->
						<?php
						$leveltm52=$objlogin->GetauditById(9,5,2);
						?>
						<input type="hidden" name="hitm52" id="hitm52"
							value="<?php echo $leveltm52['Id'];?>">
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td class="padd0 text-center"><select name="tm_52" id="tm_52"
								onchange="return teamwork_level52(this); actualscore5();">
									<option value="0" <?php if($leveltm52['Audit_Check'] == 0){?>
										selected="selected" <?php }?> selected="selected">0</option>
									<option value="1" <?php if($leveltm52['Audit_Check'] == 1){?>
										selected="selected" <?php }?>>1</option>
							</select>
							</td>
							<td>5-2 The Operators receive Recognition for positive
								contribution.</td>
							<td>
								<ul>
									<li>* Recognition activity</li>
								</ul>
							</td>
							<td class="text-center">0</td>
							<td class="text-center">0</td>
							<td></td>
							<td></td>
							<td>The SV can show that recognition has been given to team
								members every month for good suggestions and involvement</td>

						</tr>
						<!--score row -->

						<input type="hidden" name="itemidtm" id="itemidtm"
							value="<?php echo $itemtm['Id'];?>">
						<input type="hidden" name="item_scoretm" id="item_scoretm"
							value="<?php if($itemtm['Itemscore'] != ""){ echo $itemtm['Itemscore'];}else{ echo "0"; }?>">
						<tr>
							<td class="text-center score-tit">Item Score</td>
							<td colspan="5" class="text-center"><span id="total_itemtm"><?php if($itemtm['Itemscore'] != ""){ echo $itemtm['Itemscore'];}else{ echo "0"; }?>
							</span></td>
							<td colspan="7" class="bg-gray"></td>

						</tr>
						<!--- for comments form auditor  ------------->
						<tr >
							
							<td colspan="7" style="text-align: center;"><b>Diagnosis Result<br>
												(Result comments from Auditor)<b></td>
							<td colspan="6" style="text-align: center; color: blue;"><b >Kaizen Idea<br>
												(Recommended actions from the Auditor)</b></td>
						</tr>
						<tr >
							<td colspan="7" class="item2"><textarea rows="7" cols="50" style="width: 98%;"></textarea></td>
							<td colspan="6" class="item2"><textarea rows="7" cols="50" style="width: 98%;"></textarea></td>
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
		$getrank = $objlogin->Getcategory(1);
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
							<td>/4</td>
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
						
						<tr >
							<td colspan="6" style="border: none;"></td>
							<td colspan="1" style="text-align: right;"><b>Comments:</b></td>
							<td colspan="6"><textarea rows="4" cols="50"style="width: 98%;"></textarea></td>
							
						</tr>
						
					</tbody>
				</table>
				
				<div style="float: right">
					<button type="button" class="next" onclick="save();">Submit</button>
				</div>
			</form>


		</div>

	</div>

</body>
</html>

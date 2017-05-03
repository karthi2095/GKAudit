<?php 
	include "includes/common.php";
	
	include "includes/classes/class.Login.php";
	//print_r($_SESSION);
	$objlogin = new Login();
	$objlogin->check();

	/*---- get itemscore of TQM & TEAMWORK----*/
		$tqm=$objlogin->Getcategoryrank(1);
		//$team=$objlogin->Getcategoryrank(9);
		
	/*---- get itemscore of Qualitymanagement----*/
		$qdp=$objlogin->Getcategoryrank(17);
		//$qdr=$objlogin->Getcategoryrank(36);
		
	/*---- get itemscore of Standard operation----*/
		
		$sop=$objlogin->Getcategoryrank(49);
		
	/*---- get itemscore of Skill management----*/
		
		$skm=$objlogin->Getcategoryrank(63);
		
	/*---- get itemscore of Work Allocation----*/
		
		$wal=$objlogin->Getcategoryrank(79);
		
	/*---- get itemscore of Facility Management----*/
		
		$fam=$objlogin->Getcategoryrank(91);
		
	/*---- get itemscore of Safety and Environment----*/
		$safety=$objlogin->Getcategoryrank(103);
		//$fives=$objlogin->Getcategoryrank(112);
		//$envy=$objlogin->Getcategoryrank(117);
		//$ergo=$objlogin->Getcategoryrank(122);
		
	/*---- get itemscore of Cost Managementt----*/
	
		$cost=$objlogin->Getcategoryrank(127);
		
		/*---- get Details of Supervisor----*/
		
		$super=$objlogin->Getsupervisordata();
		
		/*---- get Details of Zone----*/
		
		$zone=$objlogin->Getzonedata();
	?>
	
	

<!DOCTYPE html>
<html>

<head>
<title>:- DM Diagnosis :-</title>


<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> -->

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href="css/style1.css" rel="stylesheet"> 
  <link href="css/style.css" rel="stylesheet"> 
  <script src="js/jquery-latest.js" type="text/javascript"></script>
  <script src="js/calculation.js" type="text/javascript"></script>
<!-- <script src="http://code.jquery.com/jquery-latest.min.js"    type="text/javascript"></script> -->

<!--Js for Export to CSV -->

<!--  <script src="js/excellentexport.js"></script>-->

<!--Js for Export to CSV -->


<script>


window.onload=function()
{
	var multip_one= 1;
	var multip_two = 2;
	var mulip_five=5;
	
	var item1 = document.getElementById('result1').value;
	var item2 = document.getElementById('result2').value;
	var item3 = document.getElementById('result3').value;
	var item4 = document.getElementById('result4').value;
	var item5 = document.getElementById('result5').value;
	var item6 = document.getElementById('result6').value;
	var item7 = document.getElementById('result7').value;
	var item8 = document.getElementById('result8').value;
	//alert(item1);
	
	if(item1 == "")
	{
		item1 =0;
	}	
	if(item2 == "")
	{
		item2 =0;
	}
	if(item3 == "")
	{
		item3 =0;
	}
	if(item4 == "")
	{
		item4 =0;
	}
	if(item5 == "")
	{
		item5 =0;
	}
	if(item6 == "")
	{
		item6 =0;
	}
	if(item7 == "")
	{
		item7 =0;
	}
	if(item8 == "")
	{
		item8 =0;
	}
		
	
	var score1 = parseInt(multip_two) * parseFloat(item1);
	var score2 = parseInt(multip_two) * parseFloat(item2);
	var score3 = parseInt(mulip_five) * parseFloat(item3);
	var score4 = parseInt(multip_two) * parseFloat(item4);
	var score5 = parseInt(multip_one) * parseFloat(item5);
	var score6 = parseInt(multip_one) * parseFloat(item6);
	var score7 = parseInt(multip_two) * parseFloat(item7);
	var score8 = parseInt(multip_one) * parseFloat(item8);
//alert(score1);
	//document.getelementById('scoretot1').innerHTML = score1;
	document.getElementById('scoretot1').innerHTML = score1.toFixed(1);	
	document.getElementById('scoretot2').innerHTML = score2.toFixed(1);
	document.getElementById('scoretot3').innerHTML = score3.toFixed(1);
	document.getElementById('scoretot4').innerHTML = score4.toFixed(1);
	document.getElementById('scoretot5').innerHTML = score5.toFixed(1);
	document.getElementById('scoretot6').innerHTML = score6.toFixed(1);
	document.getElementById('scoretot7').innerHTML = score7.toFixed(1);
	document.getElementById('scoretot8').innerHTML = score8.toFixed(1);
	document.getElementById('score_1').value=score1.toFixed(1);
	document.getElementById('score_2').value=score2.toFixed(1);
	document.getElementById('score_3').value=score3.toFixed(1);
	document.getElementById('score_4').value=score4.toFixed(1);
	document.getElementById('score_5').value=score5.toFixed(1);
	document.getElementById('score_6').value=score6.toFixed(1);
	document.getElementById('score_7').value=score7.toFixed(1);
	document.getElementById('score_8').value=score8.toFixed(1);
	
	
	var Total= parseFloat(score1) + parseFloat(score2) + parseFloat(score3) + parseFloat(score4) +parseFloat(score5) + parseFloat(score6) + parseFloat(score7) + parseFloat(score8)

	document.getElementById('totalscore').innerHTML=Total.toFixed(1);
	document.getElementById('total_value').value=Total.toFixed(1);

	var Level = (parseFloat(Total) / 80)* 5;

	document.getElementById('level').innerHTML=Level.toFixed(1);
	document.getElementById('total_level').value=Level.toFixed(1);
	
};

</script>

</head>

<body style="background:#fff; padding:0; margin:0;">
<div class="container">
<form class="download" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="export-form">

<div class="title">

  
<?php 
	include "header.php";
?>
</div>
<h3>Diagnosis Category: Report</h3>
<div class="contant-page">
<table id="report_table">
<tbody>

<tr style="width:100%;" >
<td colspan="5" class="border0">
<table>
<tbody>
	<td class="border0 padd1"><b>Audit Month/Year:</b></td>
	<td class="border0 edit-data"><?php echo date(m); echo"/";  echo date(Y);?></td>
	<input type="hidden" name="audit_date" id="audit_date" value="<?php echo date(m); echo"/";  echo date(Y);?>">
	<td class="border0 padd1"><b>Auditee:</b></td>
	<td class="border0 edit-data"><?php echo $super['Name'];?></td>
		<input type="hidden" name="super_name" id="super_name" value="<?php echo $super['Name'];?>">
	
	<td class="border0 padd1"><b>Zone:</b></td>
	<td class="border0 edit-data"><?php echo $zone['Zonal_name'];?></td>
			<input type="hidden" name="Zonal_name" id="Zonal_name" value="<?php echo $zone['Zonal_name'];?>">
	
	<td class="border0 padd1"><b>Auditor:</b></td>
	<td class="border0 edit-data"><?php echo $_SESSION['username'];?> </td>
			<input type="hidden" name="username" id="username" value="<?php echo $_SESSION['username'];?>">
	
	
</tbody>
</table>
</td>
</tr>

<tr style="display:none;">

</tr>
<tr>
<td colspan="5" class="border0">
<table class="report">
<thead>
<tr>
<td colspan="2" class="head">Category</td>
<td style="width: 38%;border-left: 0;border-right: 0;" class="head">Diagnosis Result<br>
(Result comments from Auditor)</td>
<td style="width: 38%; float:right;" class="head">Kaizen Idea<br>
(Recommended actions from the Auditor)</td>
</tr>
</thead>
<tbody>
<tr>
<td rowspan="2" style="width:6.2%;/*! float: left; */">TQM &amp; Teamwork</td>
<?php 	$commenttqm=$objlogin->GetComment(1); ?>
<td style="width:11%;">TQM</td>
<td style="width:30%;">
<?php echo stripslashes($commenttqm['Diagnosis_Result']); ?></td>
<td style="width:29%;"><?php echo stripslashes($commenttqm['Kaizen_Idea']); ?></td>
</tr>
<?php 	$commenttm=$objlogin->GetComment(9); ?>
<tr>
<td style="">Team Management</td>
<td style=""><?php echo $commenttm['Diagnosis_Result']; ?></td>
<td style=""><?php echo $commenttm['Kaizen_Idea']; ?></td>
</tr>
<?php 	$commentdnp=$objlogin->GetComment(17); ?>
<tr>
<td rowspan="2" style="width:6.2%;/*! float: left; */">Quality Management</td>
<td style="width:11%;">Quality Assurance </td>
<td style="width:30%;"><?php echo stripslashes($commentdnp['Diagnosis_Result']); ?></td>
<td style="width:29%;"><?php echo stripslashes($commentdnp['Kaizen_Idea']); ?></td>
</tr>
<?php 	$commentdnr=$objlogin->GetComment(36); ?>
<tr>
<td style="">Quality Management</td>
<td style=""><?php echo stripslashes($commentdnr['Diagnosis_Result']); ?></td>
<td style=""><?php echo stripslashes($commentdnr['Kaizen_Idea']); ?></td>
</tr>
<?php 	$commentsop=$objlogin->GetComment(49); ?>
<tr>
<td colspan="2" style="width:17.2%;/*! float: left; */">Standard Operation</td>
<!-- <td style="width:11%;">Quality Assurance </td> -->
<td style="width:30%;"><?php echo stripslashes($commentsop['Diagnosis_Result']); ?></td>
<td style="width:29%;"><?php echo stripslashes($commentsop['Kaizen_Idea']); ?></td>
</tr>
<?php 	$commentskm=$objlogin->GetComment(63); ?>
<td colspan="2" style="width:17.2%;/*! float: left; */">Skill Management</td>
<!-- <td style="width:11%;">Quality Assurance </td> -->
<td style="width:30%;"><?php echo stripslashes($commentskm['Diagnosis_Result']); ?></td>
<td style="width:29%;"><?php echo stripslashes($commentskm['Kaizen_Idea']); ?></td>
</tr>

<?php 	$commentwal=$objlogin->GetComment(79); ?>
<td colspan="2" style="width:17.2%;/*! float: left; */">Work Allocation</td>
<!-- <td style="width:11%;">Quality Assurance </td> -->
<td style="width:30%;"><?php echo stripslashes($commentwal['Diagnosis_Result']); ?></td>
<td style="width:29%;"><?php echo stripslashes($commentwal['Kaizen_Idea']); ?></td>
</tr>

<?php 	$commentfam=$objlogin->GetComment(91); ?>
<td colspan="2" style="width:17.2%;/*! float: left; */">Facility Management</td>
<!-- <td style="width:11%;">Quality Assurance </td> -->
<td style="width:30%;"><?php echo stripslashes($commentfam['Diagnosis_Result']); ?></td>
<td style="width:29%;"><?php echo stripslashes($commentfam['Kaizen_Idea']); ?></td>
</tr>
<?php 	$commentsfy=$objlogin->GetComment(103); ?>
<tr>
<td rowspan="4" style="width:6.2%;/*! float: left; */">Safety & Environment</td>
<td style="width:11%;">Safety </td>
<td style="width:30%;"><?php echo stripslashes($commentsfy['Diagnosis_Result']); ?></td>
<td style="width:29%;"><?php echo stripslashes($commentsfy['Kaizen_Idea']); ?></td>
</tr>
<?php 	$comment5s=$objlogin->GetComment(112); ?>
<tr>
<td style="">5S</td>
<td style=""><?php echo stripslashes($comment5s['Diagnosis_Result']); ?></td>
<td style=""><?php echo stripslashes($comment5s['Kaizen_Idea']); ?></td>
</tr>
<?php 	$commentenvy=$objlogin->GetComment(117); ?>
<tr>
<td style="">Environment</td>
<td style=""><?php echo stripslashes($commentenvy['Diagnosis_Result']); ?></td>
<td style=""><?php echo stripslashes($commentenvy['Kaizen_Idea']); ?></td>
</tr>
<?php 	$commentergo=$objlogin->GetComment(122); ?>
<tr>
<td style="">Ergonomics</td>
<td style=""><?php echo stripslashes($commentergo['Diagnosis_Result']); ?></td>
<td style=""><?php echo stripslashes($commentergo['Kaizen_Idea']); ?></td>
</tr>
<?php 	$commentcom=$objlogin->GetComment(127); ?>
<tr>
<td colspan="2" style="width:17.2%;/*! float: left; */">Cost Management</td>
<!-- <td style="width:11%;">Quality Assurance </td> -->
<td style="width:30%;"><?php echo stripslashes($commentcom['Diagnosis_Result']); ?></td>
<td style="width:29%;"><?php echo stripslashes($commentcom['Kaizen_Idea']); ?></td>
</tr>


</tbody>
</table>
</td>
</tr>
<tr>
<td class="main-head border0">Evaluation Level</td>
</tr>


<tr class="head">
	<th class="big3" rowspan="2">Item</th>
	<th class="small2" rowspan="2">Target</th>
	<th class="small2" rowspan="2">Result</th>
	<th class="small2" rowspan="2">Importance</th>
	<th rowspan="2" class="small2">Score</th>
</tr>
<tr class="head1"></tr>
<tr class="level-sep">
        <td class="big3">TQM & Team Management</td>
        <td class="small2">5.0</td>
        <td class="small2" id="item1"><?php if($tqm['Category_rank'] != ""){ echo $tqm['Category_rank']; }else { echo "0";}?></td>
        <input type="hidden" name="result1" id="result1" value="<?php if($tqm['Category_rank'] != ""){ echo $tqm['Category_rank']; }else { echo "0";}?>">
       	<td class="small2">2</td>
		<td class="small2 txt-right" id="scoretot1">0.0 </td>
		 <input type="hidden" name="score_1" id="score_1" value="">
</tr>

<tr class="level-sep">
        <td class="big3">Quality Management</td>
         <td class="small2">5.0</td>
        <td class="small2" id="item2"><?php if($qdp['Category_rank'] != ""){ echo $qdp['Category_rank']; }else{ echo "0";}?></td>
        <input type="hidden" name="result2" id="result2" value="<?php if($qdp['Category_rank'] != ""){ echo $qdp['Category_rank']; }else{ echo "0";}?>">
       	<td class="small2">2</td>
		<td class="small2 txt-right" id="scoretot2">0.0 </td>
		 <input type="hidden" name="score_2" id="score_2" value="">
</tr>

<tr class="level-sep">
        <td class="big3">Standard Operation</td>
        <td class="small2">5.0</td>
        <td class="small2"><?php if($sop['Category_rank'] != ""){ echo $sop['Category_rank']; }else{ echo "0";}?></td>
        <input type="hidden" name="result3" id="result3" value="<?php if($sop['Category_rank'] != ""){ echo $sop['Category_rank']; }else{ echo "0";}?>">
       	<td class="small2">5</td>
		<td class="small2 txt-right" id="scoretot3">0.0 </td>
		 <input type="hidden" name="score_3" id="score_3" value="">
</tr>

<tr class="level-sep">
        <td class="big3">Skill Management</td>
        <td class="small2">5.0</td>
        <td class="small2"><?php if($skm['Category_rank'] != ""){echo $skm['Category_rank']; }else{ echo "0"; }?></td>
        <input type="hidden" name="result4" id="result4" value="<?php if($skm['Category_rank'] != ""){echo $skm['Category_rank']; }else{ echo "0"; }?>">
       	<td class="small2">2</td>
		<td class="small2 txt-right" id="scoretot4">0.0 </td>
		 <input type="hidden" name="score_4" id="score_4" value="">
</tr>

<tr class="level-sep">
        <td class="big3">Work Allocation & Assignment Layout</td>
        <td class="small2">5.0</td>
        <td class="small2"><?php if($wal['Category_rank'] != ""){ echo $wal['Category_rank']; }else{ echo "0"; }?></td>
        <input type="hidden" name="result5" id="result5" value="<?php if($wal['Category_rank'] != ""){ echo $wal['Category_rank']; }else{ echo "0"; }?>">
       	<td class="small2">1</td>
		<td class="small2 txt-right" id="scoretot5">0.0</td>
		 <input type="hidden" name="score_5" id="score_5" value="">
</tr>

<tr class="level-sep">
        <td class="big3">Facility Management</td>
        <td class="small2">5.0</td>
        <td class="small2"><?php if($fam['Category_rank'] != "" ){ echo $fam['Category_rank']; }else{ echo "0"; }?></td>
        <input type="hidden" name="result6" id="result6" value="<?php if($fam['Category_rank'] != "" ){ echo $fam['Category_rank']; }else{ echo "0"; }?>">
       	<td class="small2">1</td>
		<td class="small2 txt-right" id="scoretot6">0.0 </td>
		 <input type="hidden" name="score_6" id="score_6" value="">
</tr>

<tr class="level-sep">
        <td class="big3">Safety & Environment</td>
        <td class="small2">5.0</td>
        <td class="small2"><?php if($safety['Category_rank'] != ""){ echo $safety['Category_rank']; }else{ echo "0";}?></td>
        <input type="hidden" name="result7" id="result7" value="<?php if($safety['Category_rank'] != ""){ echo $safety['Category_rank']; }else{ echo "0";}?>">
       	<td class="small2">2</td>
		<td class="small2 txt-right" id="scoretot7">0.0 </td>
		 <input type="hidden" name="score_7" id="score_7" value=""/>
</tr>

<tr class="level-sep">
        <td class="big3">Cost Management	</td>
        <td class="small2">5.0</td>
        <td class="small2"><?php if($cost['Category_rank'] != ""){ echo $cost['Category_rank']; }else{ echo "0";}?></td>
        <input type="hidden" name="result8" id="result8" value="<?php if($cost['Category_rank'] != ""){ echo $cost['Category_rank']; }else{ echo "0";}?>">
       	<td class="small2">1</td>
		<td class="small2 txt-right" id="scoretot8">0.0 </td>
		 <input type="hidden" name="score_8" id="score_8" value=""/>
</tr>

<tr class="level-sep border0">
        <td class="big3 border0"></td>
        <td class="small2 border0"></td>
        <td class="small2 border0"></td>
       	<td class="small2 txt-right"><b>Total</b></td>
		<td class="small2 txt-right" id="totalscore"><b>0.0</b></td>
		 <input type="hidden" name="total_value" id="total_value" value="0.0"/>
</tr>

<tr class="level-sep border0">
        <td class="big3 border0"></td>
        <td class="small2 border0"></td>
        <td class="small2 border0"></td>
       	<td class="small2 txt-right"><b>Level</b></td>
		<td class="small2 txt-right" id="level"><b>0.0</b></td>
		 <input type="hidden" name="total_level" id="total_level" value="0.0"/>
</tr>
</tbody>
</table>

<!-------------------------------- FOR CHART --------------------------------------->

	<!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script src="js/indexbackup.js"></script>-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	 <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	 <script type="text/javascript" src="js/fusioncharts.js?cacheBust=8232"></script>
	 -->
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>

<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
var result1=document.getElementById('result1').value;
var result2=document.getElementById('result2').value;
var result3=document.getElementById('result3').value;
var result4=document.getElementById('result4').value;
var result5=document.getElementById('result5').value;
var result6=document.getElementById('result6').value;
var result7=document.getElementById('result7').value;
var result8=document.getElementById('result8').value;

  FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'radar',
    renderAt: 'chart',
    width: '500',
    height: '350',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Show rating across parameters",
            "subCaption": "Based on Senior Supervisor Audit Result",
            "numberPreffix": "$",
            "theme": "fint",
            "radarfillcolor": "#ffffff"
        },
        "categories": [{
            "category": [{
                "label": "TQM & Team Management"
            }, {
                "label": "Quality Management"
            }, {
                "label": "Standard Operation"
            }, {
                "label": "Skill Management"
            },
            {
                "label": "Work Allocation & Assignment Layout"
            },
            {
                "label": "Facility Management"
            }, {
                "label": "Safety & Environment"
            }, {
                "label": "Cost Management "
            }
            ]
        }],
        "dataset": [{
            "seriesname": "Supervisor Ratings",
            "data": [{
                "value": result1
            }, {
                "value": result2
            }, {
                "value": result3
            }, 
            {
                "value": result4
            },
            {
                "value": result5
            },{
                "value": result6
            }, {
                "value": result7
            }, {
                "value": result8
            }]
        }]
    }
}
);
    fusioncharts.render();
});
</script>
	

<div class="container" style="margin: 20px 0px auto;text-align: center;">
<!--<img src="images/ss.png">-->
<div id="chart"></div>




</div>
<div class="container">
 <div id="radarmsg" style="text-align: center; color: blue;">
<!--<button class="next" style="height: 45px;"> <a href="file://///SRINODE37/www/GKaudit/gkaudit.xlsx" target="_blank" download> <span class="exl-icon"></span><span style="position: relative; top: -12px;padding-left: 5px;">Export to csv</span></a></button>
</div> -->
<!--<script type="text/javascript" src="export/tableExport.js"></script>
<script type="text/javascript" src="export/jquery.base64.js"></script>
<script type="text/javascript" src="export/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="export/jspdf/jspdf.js"></script>
<script type="text/javascript" src="export/jspdf/libs/base64.js"></script>-->
<script>

function goExport(){
	//alert("");
	var str = $("form").serialize();
	window.location="reportExport.php?"+str;
	
}
</script>

<div style="float:right">
<!--   <input class="next exl-icon1" id="export-menu" type="button" onclick="goExport();" value="Export"> -->
  <a><input class="next exl-icon1" id="export-menu" type="button" onclick="goExport();" value="Export"></a> 

<!--<input class="next exl-icon1"  type="button" value="Export" onClick="$('#report_table').tableExport({type:'excel',tableName:'Report',escape:'false'});">-->



</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>
</form>
</body>

</html>

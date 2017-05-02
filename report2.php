<?php 
	include "includes/common.php";
	include "includes/config.php";
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
<title>GK AUDIT</title>


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
  <script src="js/jquery-latest.js" type="text/javascript"></script>
  <script src="js/calculation.js" type="text/javascript"></script>
<!-- <script src="http://code.jquery.com/jquery-latest.min.js"    type="text/javascript"></script> -->

<!--Js for Export to CSV -->

<script src="js/excellentexport.js"></script>

<!--Js for Export to CSV -->

<script  type="text/javascript">
function tool(link) 
{
	link.download = '<?php echo $super['Name'];?>_DMD_Report.xls'; // name of xls file
}

</script>

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
	document.getElementById('scoretot1').innerHTML = score1;	
	document.getElementById('scoretot2').innerHTML = score2;
	document.getElementById('scoretot3').innerHTML = score3;
	document.getElementById('scoretot4').innerHTML = score4;
	document.getElementById('scoretot5').innerHTML = score5;
	document.getElementById('scoretot6').innerHTML = score6;
	document.getElementById('scoretot7').innerHTML = score7;
	document.getElementById('scoretot8').innerHTML = score8;
	document.getElementById('score_1').value=score1;
	document.getElementById('score_2').value=score2;
	document.getElementById('score_3').value=score3;
	document.getElementById('score_4').value=score4;
	document.getElementById('score_5').value=score5;
	document.getElementById('score_6').value=score6;
	document.getElementById('score_7').value=score7;
	document.getElementById('score_8').value=score8;
	
	
	var Total= parseFloat(score1) + parseFloat(score2) + parseFloat(score3) + parseFloat(score4) +parseFloat(score5) + parseFloat(score6) + parseFloat(score7) + parseFloat(score8)

	document.getElementById('totalscore').innerHTML=Total.toFixed(1);
	document.getElementById('total_value').value=Total.toFixed(1);

	var Level = (parseFloat(Total) / 80)* 5;

	document.getElementById('level').innerHTML=Level.toFixed(1);
	document.getElementById('total_level').innerHTML=Level.toFixed(1);
	
};

</script>

</head>

<body style="background:#fff; padding:0; margin:0;">
<div class="container">
<form class="download" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="export-form">

<div class="title">

  <h2 style="text-align:center">Daily Management Diagnosis <span style="float:right;"><a class="logout" href="Logout.php">Logout</a></span> </h2>
<?php 
	include "header.php";
?>
</div>
<h3>Diagnosis Category: Report</h3>
<div class="contant-page">
<input type="hidden" value='' id='hidden-type' name='ExportType'/>

<div class="details-shows">
<form name="auditee_details" type="post" action="">
<!--  <div class="sub-div">
	<span>Date:</span> <span><input type="text" id="date" name="date" value="07/04/2017" disabled ></span>
</div>
<div class="sub-div">		
	<span>Shop:</span> <span><input type="text" id="shop" name="shop" value="" disabled ></span>
</div>-->
<div class="sub-div">	
	<span>Auditee:</span> <span><input type="text" id="auditee" name="auditee" value="<?php echo $super['Name'];?>" disabled ></span>
</div>
<!--  <div class="sub-div">	
	<span>Experience in zone:</span> <span><input type="text" id="experience" name="experience" value="" disabled ></span>
	
</div>-->

<div class="sub-div">
	<span>Zone:</span> <span><input type="text" id="zone" name="zone" value="<?php echo $zone['Zonal_name'];?>" disabled ></span>
</div>
<div class="sub-div">		
	<span>Auditor:</span> <span><input type="text" id="auditor" name="auditor" value="<?php echo $_SESSION['username'];?>" disabled ></span>
</div>
<div class="sub-div">		
	<span>Month/Year:</span> <span><input type="text" id="auditor" name="auditor" value="<?php echo $_SESSION['month']; echo "/"; echo $_SESSION['year'];?>" disabled ></span>
</div>
<!-- <div class="sub-div">
	<span>No of models:</span> <span><input type="text" id="no_of_models" name="no_of_models" value="" disabled ></span> 
	
</div>
<div class="sub-div">
	<span>ROR:</span> <span><input type="text" id="ror" name="ror" value="" disabled ></span>
</div>
<div class="sub-div">		
	<span>RTO:</span> <span><input type="text" id="rto" name="rto" value="" disabled ></span>
</div>
<div class="sub-div">	
	<span>Cycle time:</span> <span><input type="text" id="cycle_time" name="cycle_time" value="" disabled ></span>
</div>
<div class="sub-div">
	<span>No of shifts:</span> <span><input type="text" id="no_of_shifts" name="no_of_shifts" value="" disabled ></span>
</div>
<div class="sub-div">
	<span>% Temp ratio:</span> <span><input type="text" id="temp_ratio" name="temp_ratio" value="" disabled ></span>
</div>
<div class="sub-div">
	<span>No of Teamleaders:</span> <span><input type="text" id="no_teamleaders" name="no_teamleaders" value="" disabled ></span>
</div>-->

</form> 
</div>


<table id="report_table">
<tbody>

<tr style="width:100%; visibility: hidden;" >
<td colspan="5" class="border0">
<table>
<tbody>
	<td class="border0"><b>Auditee:</b></td>
	<td class="border0 edit-data"><?php echo $super['Name'];?></td>
	<td class="border0"><b>Zone:</b></td>
	<td class="border0 edit-data"><?php echo $zone['Zonal_name'];?></td>
	<td class="border0"><b>Auditor:</b></td>
	<td class="border0 edit-data"><?php echo $_SESSION['username'];?> </td>
	<td class="border0"><b>Month/Year:</b></td>
	<td class="border0 edit-data"><?php echo $_SESSION['month']; echo " / "; echo $_SESSION['year'];?></td>
</tbody>
</table>
</td>
</tr>

<tr style="display:none;">

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
		 <input type="hidden" name="total_value" id="total_value" value=""/>
</tr>

<tr class="level-sep border0">
        <td class="big3 border0"></td>
        <td class="small2 border0"></td>
        <td class="small2 border0"></td>
       	<td class="small2 txt-right"><b>Level</b></td>
		<td class="small2 txt-right" id="level"><b>0.0</b></td>
		 <input type="hidden" name="total_level" id="total_level" value=""/>
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
	var str = $("form").serialize();
	window.location="reportExport.php?"+str;
	
}
</script>

<div style="float:right">
<a href="javascript:void(0);" onclick="tool(this); ExcellentExport.excel(this,'report_table');"><input class="next exl-icon1" id="export-menu" type="button" value="Export"></a>
<!-- <a href="javascript:void(0);" onclick="tool(this); ExcellentExport.excel(this,'report_table');"><input class="next exl-icon1" id="export-menu" type="button" value="Export"></a> -->

<!--<input class="next exl-icon1"  type="button" value="Export" onClick="$('#report_table').tableExport({type:'excel',tableName:'Report',escape:'false'});">-->


</form>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div>

</body>

</html>

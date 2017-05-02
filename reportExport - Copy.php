<?php
include "includes/common.php";
include "includes/classes/class.Login.php";
$objlogin = new Login();
$super=$objlogin->Getsupervisordata();
   

$csvFilenew=array('Audit month & Year:',
				$_REQUEST['audit_date'],
				'Auditee:',
				$_REQUEST['super_name'],
				'Zone:',
				$_REQUEST['Zonal_name'],
				'Auditor:',
				$_REQUEST['username']);

$output = fopen('php://output', 'w');
fputcsv($output, $csvFilenew);

$csvFilenew1=array('',
				'',
				'',
				'',
				'',
				'',
				'',
				'');


fputcsv($output, $csvFilenew1);


$csvFile=array('Item',
				'Target',
				'Result',
				'Importance',
				'Score');


fputcsv($output, $csvFile);

$csvFile1 =array("TQM & Teamwork",
					"5.0",
					$_REQUEST['result1'],
					"2",
					$_REQUEST['score_1']);
fputcsv($output, $csvFile1);
	$csvFile2 =array("Quality Management",
					"5.0",
					$_REQUEST['result2'],
					"2",
					$_REQUEST['score_2']);
   fputcsv($output, $csvFile2);
	$csvFile3 =array("Standard Operation",
					"5.0",
					$_REQUEST['result3'],
					"5",
					$_REQUEST['score_3']);
	fputcsv($output, $csvFile3);
	$csvFile4 =array("Skill Management",
					"5.0",
					$_REQUEST['result4'],
					"2",
					$_REQUEST['score_4']);
		fputcsv($output, $csvFile4);			
	$csvFile5 =array("Work Allocation & Assignment Layout",
					"5.0",
					$_REQUEST['result5'],
					"1",
					$_REQUEST['score_5']);
	fputcsv($output, $csvFile5);
    $csvFile6 =array("Facility Management",
					"5.0",
					$_REQUEST['result6'],
					"1",
					$_REQUEST['score_6']);
	fputcsv($output, $csvFile6);				
	$csvFile7 =array("Safety & Environment",
					"5.0",
					$_REQUEST['result7'],
					"2",
					$_REQUEST['score_7']);
	fputcsv($output, $csvFile7);				
	$csvFile8 =array("Cost Management ",
					"5.0",
					$_REQUEST['result8'],
					"1",
					$_REQUEST['score_8']);	
	fputcsv($output, $csvFile8);
	$csvFile9 =array("",
					"",
					"",
					"Total",
					$_REQUEST['total_value']);
		fputcsv($output, $csvFile9);			
	$csvFile10 =array("",
					"",
					"",
					"Level",
					$_REQUEST['total_level']);
	
	
fputcsv($output, $csvFile10);

fclose($output);
header("Content-type: application/octet-stream");
header("Content-disposition:attachment; filename=".$super['Name']."_DMD_Report_".date(Ymd).".csv");
//echo $csvFile;
?>

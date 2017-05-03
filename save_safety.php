<?php


include 'includes/common.php';
include "includes/classes/class.datamanage.php";
$objDatamanage = new Datamanage();
$svid=$_SESSION['supervisor'];
$month=$_SESSION['month'];
$year=$_SESSION['year'];
$sspid=$_SESSION['userid'];
if($_REQUEST['hdaction1'] == 1)
{
	
	if(empty($_REQUEST['hisfy11']) || $_REQUEST['hisfy11'] == "")
	{
		$InsQuery= "insert into `saveaudit`
							(
								`Sv_id`,
								`Category_id`,
								`Level`,
								`Sub_level`,
								`Audit_Check`,
								`audit_month`,
								`audit_year`,
								`Status`,
								`Created_on`,
								`Audit_By`
							) 
								values
							(
								'$svid',
								'103',
								'1',
								'1',
								'".$_REQUEST['safety_11']."',
								'".$month."',
								'".$year."',
								'1',
								now(),
								'".$sspid."'
							)";
		$result1=mysql_query($InsQuery);
		$auditId1=mysql_insert_id();
	}
	else
	{

		 $upquery= "update `saveaudit` set
									`Audit_Check`='".$_REQUEST['safety_11']."',
									Last_update=now() 
									where 
									Id='".$_REQUEST['hisfy11']."'
							";

		$res1=mysql_query($upquery);
		$auditId1=$_REQUEST['hisfy11'];
	}
		if(empty($_REQUEST['hisfy12']) || $_REQUEST['hisfy12'] == "")
	{
		$InsQuery= "insert into `saveaudit`
				 					(
					 					`Sv_id`,
					 					`Category_id`,
						 				`Level`,
						 				`Sub_level`,
						 				`Audit_Check`,
						 				`audit_month`,
						 				`audit_year`,
						 				`Status`,
						 				`Created_on`,
						 				`Audit_By`
					 			    )
					 			     	values
					 			   (
					 					'$svid',
					 					'103',
					 					'1',
					 					'2',
					 					'".$_REQUEST['safety_12']."',
					 					'".$month."',
					 					'".$year."',
					 					'1',
					 					now(),
					 					'".$sspid."'
					 			   )";
		$result21=mysql_query($InsQuery);
		$auditId21=mysql_insert_id();
	}else{

		$upQuery2= "update `saveaudit` set `Audit_Check`='".$_REQUEST['safety_12']."',Last_update=now() where Id='".$_REQUEST['hisfy12']."'";

		$res21=mysql_query($upQuery2);			
		$auditId21=$_REQUEST['hisfy12'];
	}
	if(empty($_REQUEST['hisfy21']) || $_REQUEST['hisfy21'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','103','2','1',
					 '".$_REQUEST['safety_21']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result2=mysql_query($InsQuery);
		$auditId2=mysql_insert_id();
	}else{

//echo "3";
		$UpQuery1= "update saveaudit set
									Audit_Check='".$_REQUEST['safety_21']."'
									where 
									Id='".$_REQUEST['hisfy21']."'";
		
		$res=mysql_query($UpQuery1);
		$auditId2=$_REQUEST['hisfy21'];
	}
	
	
	
		if(empty($_REQUEST['hisfy22']) || $_REQUEST['hisfy22'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','103','2','2',
					 '".$_REQUEST['safety_22']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result22=mysql_query($InsQuery);

		$auditId22=mysql_insert_id();
	}else{


		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['safety_22']."',Last_update=now() where Id='".$_REQUEST['hisfy22']."'";
		$result22=mysql_query($InsQuery);

		$auditId22=$_REQUEST['hisfy22'];
	}
	
		if(empty($_REQUEST['hisfy31']) || $_REQUEST['hisfy31'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','103','3','1',
					 '".$_REQUEST['safety_31']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result3=mysql_query($InsQuery);
		$auditId3=mysql_insert_id();
	}else{
		//echo "4";
		 $InsQuery= "update `saveaudit` set 
								`Audit_Check`='".$_REQUEST['safety_31']."',
								Last_update=now() 
								where 
								Id='".$_REQUEST['hisfy31']."'
				       ";
		$result3=mysql_query($InsQuery);
		$auditId3=$_REQUEST['hisfy31'];
	}
	
		if(empty($_REQUEST['hisfy32']) || $_REQUEST['hisfy32'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','103','3','2',
					 '".$_REQUEST['safety_32']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result23=mysql_query($InsQuery);

		$auditId23=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set 
						`Audit_Check`='".$_REQUEST['safety_32']."',
						Last_update=now() 
						where 
						Id='".$_REQUEST['hisfy32']."'
				  ";
		$result23=mysql_query($InsQuery);

		$auditId23=$_REQUEST['hisfy32'];
	}
	
	
		if(empty($_REQUEST['hisfy41']) || $_REQUEST['hisfy41'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','103','4','1',
					 '".$_REQUEST['safety_41']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result4=mysql_query($InsQuery);
		$auditId4=mysql_insert_id();
	}else{

		 $InsQuery= "update `saveaudit` set 
								`Audit_Check`='".$_REQUEST['safety_41']."',
								Last_update=now() 
								where 
								Id='".$_REQUEST['hisfy41']."'
				       ";
		$result4=mysql_query($InsQuery);
		$auditId4=$_REQUEST['hisfy41'];
	}
	
	
	if(empty($_REQUEST['hisfy51']) || $_REQUEST['hisfy51'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','103','5','1',
					 '".$_REQUEST['safety_51']."',
					'".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result5=mysql_query($InsQuery);

		$auditId5=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['safety_51']."',Last_update=now() where Id='".$_REQUEST['hisfy51']."'";
		$result5=mysql_query($InsQuery);

		$auditId5=$_REQUEST['hisfy51'];
	}
	
		if(empty($_REQUEST['hisfy52']) || $_REQUEST['hisfy52'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','103','5','2',
					 '".$_REQUEST['safety_52']."',
					'".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result24=mysql_query($InsQuery);

		$auditId24=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['safety_52']."',Last_update=now() where Id='".$_REQUEST['hisfy52']."'";
		$result24=mysql_query($InsQuery);

		$auditId24=$_REQUEST['hisfy52'];
	}
	
	/* save itemscore*/
			
	if(empty($_REQUEST['itemsfyid']) || $_REQUEST['itemsfyid'] == "")
	{
		$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,
									`Itemscore`,
									`Level_total1`,
									`Level_total2`,
									`Level_total3`,
									`Level_total4`,
									`Level_total5`,
									 `Month`,`Year`,`Created_on`,`Audit_By`) values
									 ('103','$svid',
									 '".$_REQUEST['total_itemsafety']."',
									 '".$_REQUEST['level_totalsafety1']."',
									 '".$_REQUEST['level_totalsafety2']."',
									 '".$_REQUEST['level_totalsafety3']."',
									 '".$_REQUEST['level_totalsafety4']."',
									 '".$_REQUEST['level_totalsafety5']."',
									 '".$month."',
									 '".$year."',
									 now(),'".$sspid."')";
		$result11=mysql_query($InsQuery);
		$auditId01=mysql_insert_id();
	}else{

		$InsQuery= "update `tbl_itemscore`
											set `Itemscore`='".$_REQUEST['total_itemsafety']."',
												`Level_total1`='".$_REQUEST['level_totalsafety1']."',
												`Level_total2`='".$_REQUEST['level_totalsafety2']."',
												`Level_total3`='".$_REQUEST['level_totalsafety3']."',
												`Level_total4`='".$_REQUEST['level_totalsafety4']."',
												`Level_total5`='".$_REQUEST['level_totalsafety5']."',
											Last_Update=now() 
											where Id='".$_REQUEST['itemsfyid']."'";

		$resultu11=mysql_query($InsQuery);
		$auditId01=$_REQUEST['itemsfyid'];
	}
	
		/*--------------- SAVE COMMENTS for safety--------------*/
						
						if(empty($_REQUEST['Commentidsfy']) || $_REQUEST['Commentidsfy'] == "")
							{
								$InsQuery= "insert into `tbl_comments` (`Category_id`,
															`Sv_id`,
															`Diagnosis_Result`,
															`Kaizen_Idea`,
															 `Month`,`Year`,
															 `Created_on`,
															 `Audit_By`
															) 
															 values
														    (
															 '103',
															 '$svid',
															 '".addslashes($_REQUEST['diagnosis_result_sfy'])."',
															 '".addslashes($_REQUEST['kaizen_idea_sfy'])."',
															 '".$month."',
															 '".$year."',
															 now(),
															 '".$sspid."'
															)
											 ";
								$result11=mysql_query($InsQuery);
								$auditCMTIDsfy=mysql_insert_id(); 
				  }else{
							
					 $UpQuery= "update `tbl_comments` 
										set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_sfy'])."',
											`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_sfy'])."',
										`Last_Update`=now() 
										where Comment_id='".$_REQUEST['Commentidsfy']."'
									 ";
						 
								$resultu11=mysql_query($UpQuery);
								$auditCMTIDsfy=$_REQUEST['Commentidsfy'];
							} 
	/* save 5s audit*/
	if(empty($_REQUEST['his11']) || $_REQUEST['his11'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','112','1','1',
					 '".$_REQUEST['S_11']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result6=mysql_query($InsQuery);

		$auditId6=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['S_11']."',Last_update=now() where Id='".$_REQUEST['his11']."'";

		$result6=mysql_query($InsQuery);
			
		$auditId6=$_REQUEST['his11'];
	}
	
	
			
	if(empty($_REQUEST['his21']) || $_REQUEST['his21'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','112','2','1',
					 '".$_REQUEST['S_21']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result7=mysql_query($InsQuery);

		$auditId7=mysql_insert_id();
	}else{


		 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['S_21']."',Last_update=now() where Id='".$_REQUEST['his21']."'";
		$result7=mysql_query($InsQuery);

		$auditId7=$_REQUEST['his21'];
	}
	
	if(empty($_REQUEST['his31']) || $_REQUEST['his31'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','112','3','1',
					 '".$_REQUEST['S_31']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result8=mysql_query($InsQuery);

		$auditId8=mysql_insert_id();
	}else{

		 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['S_31']."',Last_update=now() where Id='".$_REQUEST['his31']."'";
		$result8=mysql_query($InsQuery);

		$auditId8=$_REQUEST['his31'];
	}
	
		if(empty($_REQUEST['his41']) || $_REQUEST['his41'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','112','4','1',
					 '".$_REQUEST['S_41']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result9=mysql_query($InsQuery);

		$auditId9=mysql_insert_id();
	}else{

		 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['S_41']."',Last_update=now() where Id='".$_REQUEST['his41']."'";
		$result9=mysql_query($InsQuery);

		$auditId9=$_REQUEST['his41'];
	}
	
	if(empty($_REQUEST['his51']) || $_REQUEST['his51'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','112','5','1',
					 '".$_REQUEST['S_51']."',
					'".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result10=mysql_query($InsQuery);

		$auditId10=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['S_51']."',Last_update=now() where Id='".$_REQUEST['his51']."'";
		$result10=mysql_query($InsQuery);

		$auditId10=$_REQUEST['his51'];
	}
	
	
	
	/*--------- save Itemscore-----------*/
		
	if(empty($_REQUEST['item5sid']) || $_REQUEST['item5sid'] == "")
	{
		$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,
									`Itemscore`,
									`Level_total1`,
									`Level_total2`,
									`Level_total3`,
									`Level_total4`,
									`Level_total5`,
									 `Month`,`Year`,`Created_on`,`Audit_By`) values
									 ('112','$svid',
									 '".$_REQUEST['total_item5s']."',
									 '".$_REQUEST['level_total5s1']."',
									 '".$_REQUEST['level_total5s2']."',
									 '".$_REQUEST['level_total5s3']."',
									 '".$_REQUEST['level_total5s4']."',
									 '".$_REQUEST['level_total5s5']."',
									 '".$month."',
									 '".$year."',
									 now(),'".$sspid."')";
		$result11=mysql_query($InsQuery);
		$auditId02=mysql_insert_id();
	}else{

		$InsQuery= "update `tbl_itemscore`
											set `Itemscore`='".$_REQUEST['total_item5s']."',
												`Level_total1`='".$_REQUEST['level_total5s1']."',
												`Level_total2`='".$_REQUEST['level_total5s2']."',
												`Level_total3`='".$_REQUEST['level_total5s3']."',
												`Level_total4`='".$_REQUEST['level_total5s4']."',
												`Level_total5`='".$_REQUEST['level_total5s5']."',
											Last_Update=now() 
											where Id='".$_REQUEST['item5sid']."'";

		$resultu11=mysql_query($InsQuery);
		$auditId02=$_REQUEST['item5sid'];
	}

	/*--------------- SAVE COMMENTS for 5s--------------*/
						
						if(empty($_REQUEST['Commentid5s']) || $_REQUEST['Commentid5s'] == "")
							{
								$InsQuery= "insert into `tbl_comments` (`Category_id`,
															`Sv_id`,
															`Diagnosis_Result`,
															`Kaizen_Idea`,
															 `Month`,`Year`,
															 `Created_on`,
															 `Audit_By`
															) 
															 values
														    (
															 '112',
															 '$svid',
															 '".addslashes($_REQUEST['diagnosis_result_5s'])."',
															 '".addslashes($_REQUEST['kaizen_idea_5s'])."',
															 '".$month."',
															 '".$year."',
															 now(),
															 '".$sspid."'
															)
											 ";
								$result11=mysql_query($InsQuery);
								$auditCMTID5s=mysql_insert_id(); 
				  }else{
							
					 $UpQuery= "update `tbl_comments` 
										set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_5s'])."',
											`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_5s'])."',
										`Last_Update`=now() 
										where Comment_id='".$_REQUEST['Commentid5s']."'
									 ";
						 
								$resultu11=mysql_query($UpQuery);
								$auditCMTID5s=$_REQUEST['Commentid5s'];
							}
							
					/* save audit of environment*/

	if(empty($_REQUEST['hise11']) || $_REQUEST['hise11'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','117','1','1',
					 '".$_REQUEST['Environment_11']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result11=mysql_query($InsQuery);

		$auditId11=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Environment_11']."' , Last_update=now() where Id='".$_REQUEST['hise11']."'";

		$result11=mysql_query($InsQuery);
			
		$auditId11=$_REQUEST['hise11'];
	}
		
		
	if(empty($_REQUEST['hise21']) || $_REQUEST['hise21'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','117','2','1',
					 '".$_REQUEST['Environment_21']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result12=mysql_query($InsQuery);

		$auditId12=mysql_insert_id();
	}else{


		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Environment_21']."',Last_update=now() where Id='".$_REQUEST['hise21']."'";
		$result12=mysql_query($InsQuery);

		$auditId12=$_REQUEST['hise21'];
	}
	
	if(empty($_REQUEST['hise31']) || $_REQUEST['hise31'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','117','3','1',
					 '".$_REQUEST['Environment_31']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result13=mysql_query($InsQuery);

		$auditId13=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Environment_31']."', Last_update=now() where Id='".$_REQUEST['hise31']."'";
		$result13=mysql_query($InsQuery);

		$auditId13=$_REQUEST['hise31'];
	}


	if(empty($_REQUEST['hise41']) || $_REQUEST['hise41'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','117','4','1',
					 '".$_REQUEST['Environment_41']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result14=mysql_query($InsQuery);

		$auditId14=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Environment_41']."' , Last_update=now() where Id='".$_REQUEST['hise41']."'";
		$result8=mysql_query($InsQuery);

		$auditId14=$_REQUEST['hise41'];
	}
	
	if(empty($_REQUEST['hise51']) || $_REQUEST['hise51'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','117','5','1',
					 '".$_REQUEST['Environment_51']."',
					'".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result15=mysql_query($InsQuery);

		$auditId15=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Environment_51']."' , Last_update=now() where Id='".$_REQUEST['hise51']."'";
		$result15=mysql_query($InsQuery);

		$auditId15=$_REQUEST['hise51'];
	}
		
			
	if(empty($_REQUEST['itemenvid']) || $_REQUEST['itemenvid'] == "")
	{
		$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,
									`Itemscore`,
									`Level_total1`,
									`Level_total2`,
									`Level_total3`,
									`Level_total4`,
									`Level_total5`,
									 `Month`,`Year`,`Created_on`,`Audit_By`) values
									 ('117','$svid',
									 '".$_REQUEST['total_envy']."',
									 '".$_REQUEST['level_totalenv1']."',
									 '".$_REQUEST['level_totalenv2']."',
									 '".$_REQUEST['level_totalenv3']."',
									 '".$_REQUEST['level_totalenv4']."',
									 '".$_REQUEST['level_totalenv5']."',
									 '".$month."',
									 '".$year."',
									 now(),'".$sspid."')";
		$result11=mysql_query($InsQuery);
		$auditId03=mysql_insert_id();
	}
	else{

		$InsQuery= "update `tbl_itemscore`
											set `Itemscore`='".$_REQUEST['total_envy']."',
												`Level_total1`='".$_REQUEST['level_totalenv1']."',
												`Level_total2`='".$_REQUEST['level_totalenv2']."',
												`Level_total3`='".$_REQUEST['level_totalenv3']."',
												`Level_total4`='".$_REQUEST['level_totalenv4']."',
												`Level_total5`='".$_REQUEST['level_totalenv5']."',
											Last_Update=now() 
											where Id='".$_REQUEST['itemenvid']."'";

		$resultu11=mysql_query($InsQuery);
		$auditId03=$_REQUEST['itemenvid'];
	}
/*--------------- SAVE COMMENTS for envy--------------*/
						
						if(empty($_REQUEST['Commentidenvy']) || $_REQUEST['Commentidenvy'] == "")
							{
								$InsQuery= "insert into `tbl_comments` (`Category_id`,
															`Sv_id`,
															`Diagnosis_Result`,
															`Kaizen_Idea`,
															 `Month`,`Year`,
															 `Created_on`,
															 `Audit_By`
															) 
															 values
														    (
															 '117',
															 '$svid',
															 '".addslashes($_REQUEST['diagnosis_result_envy'])."',
															 '".addslashes($_REQUEST['kaizen_idea_envy'])."',
															 '".$month."',
															 '".$year."',
															 now(),
															 '".$sspid."'
															)
											 ";
								$result11=mysql_query($InsQuery);
								$auditCMTIDenvy=mysql_insert_id(); 
				  }else{
							
					 $UpQuery= "update `tbl_comments` 
										set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_envy'])."',
											`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_envy'])."',
										`Last_Update`=now() 
										where Comment_id='".$_REQUEST['Commentidenvy']."'
									 ";
						 
								$resultu11=mysql_query($UpQuery);
								$auditCMTIDenvy=$_REQUEST['Commentidenvy'];
							}
	/*--------- save Ergonomic-----------*/


	if(empty($_REQUEST['hisc11']) || $_REQUEST['hisc11'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','122','1','1',
					 '".$_REQUEST['Ergonomic_11']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result16=mysql_query($InsQuery);

		$auditId16=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Ergonomic_11']."',Last_update=now() where Id='".$_REQUEST['hisc11']."'";

		$result16=mysql_query($InsQuery);
			
		$auditId16=$_REQUEST['hisc11'];
	}
	
			
		
	if(empty($_REQUEST['hisc21']) || $_REQUEST['hisc21'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','122','2','1',
					 '".$_REQUEST['Ergonomic_21']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result17=mysql_query($InsQuery);

		$auditId17=mysql_insert_id();
	}else{


		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Ergonomic_21']."',Last_update=now() where Id='".$_REQUEST['hisc21']."'";
		$result17=mysql_query($InsQuery);

		$auditId17=$_REQUEST['hisc21'];
	}
	
	
	if(empty($_REQUEST['hisc31']) || $_REQUEST['hisc31'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','122','3','1',
					 '".$_REQUEST['Ergonomic_31']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result18=mysql_query($InsQuery);

		$auditId18=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Ergonomic_31']."',Last_update=now() where Id='".$_REQUEST['hisc31']."'";
		$result18=mysql_query($InsQuery);

		$auditId18=$_REQUEST['hisc31'];
	}


	if(empty($_REQUEST['hisc41']) || $_REQUEST['hisc41'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','122','4','1',
					 '".$_REQUEST['Ergonomic_41']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result19=mysql_query($InsQuery);

		$auditId19=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Ergonomic_41']."' , Last_update=now() where Id='".$_REQUEST['hisc41']."'";
		$result19=mysql_query($InsQuery);

		$auditId19=$_REQUEST['hisc41'];
	}
	if(empty($_REQUEST['hisc51']) || $_REQUEST['hisc51'] == "")
	{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','122','5','1',
					 '".$_REQUEST['Ergonomic_51']."',
					'".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
		$result20=mysql_query($InsQuery);

		$auditId20=mysql_insert_id();
	}else{

		$InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['Ergonomic_51']."',Last_update=now() where Id='".$_REQUEST['hisc51']."'";
		$result20=mysql_query($InsQuery);

		$auditId20=$_REQUEST['hisc51'];
	}
	
		if(empty($_REQUEST['itemegoid']) || $_REQUEST['itemegoid'] == "")
	{
		$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,
									`Itemscore`,
									`Level_total1`,
									`Level_total2`,
									`Level_total3`,
									`Level_total4`,
									`Level_total5`,
									 `Month`,`Year`,`Created_on`,`Audit_By`) values
									 ('122','$svid',
									 '".$_REQUEST['item_scoreergo']."',
									 '".$_REQUEST['level_totalergo1']."',
									 '".$_REQUEST['level_totalergo2']."',
									 '".$_REQUEST['level_totalergo3']."',
									 '".$_REQUEST['level_totalergo4']."',
									 '".$_REQUEST['level_totalergo5']."',
									 '".$month."',
									 '".$year."',
									 now(),'".$sspid."')";
		$result11=mysql_query($InsQuery);
		$auditId04=mysql_insert_id();
	}else{

		$InsQuery= "update `tbl_itemscore`
											set `Itemscore`='".$_REQUEST['item_scoreergo']."',
												`Level_total1`='".$_REQUEST['level_totalergo1']."',
												`Level_total2`='".$_REQUEST['level_totalergo2']."',
												`Level_total3`='".$_REQUEST['level_totalergo3']."',
												`Level_total4`='".$_REQUEST['level_totalergo4']."',
												`Level_total5`='".$_REQUEST['level_totalergo5']."',
											Last_Update=now() 
											where Id='".$_REQUEST['itemegoid']."'";

		$resultu11=mysql_query($InsQuery);
		$auditId04=$_REQUEST['itemegoid'];
	}

/*--------------- SAVE COMMENTS for envy--------------*/
						
						if(empty($_REQUEST['Commentidergo']) || $_REQUEST['Commentidergo'] == "")
							{
								$InsQuery= "insert into `tbl_comments` (`Category_id`,
															`Sv_id`,
															`Diagnosis_Result`,
															`Kaizen_Idea`,
															 `Month`,`Year`,
															 `Created_on`,
															 `Audit_By`
															) 
															 values
														    (
															 '122',
															 '$svid',
															 '".addslashes($_REQUEST['diagnosis_result_ergo'])."',
															 '".addslashes($_REQUEST['kaizen_idea_ergo'])."',
															 '".$month."',
															 '".$year."',
															 now(),
															 '".$sspid."'
															)
											 ";
								$result11=mysql_query($InsQuery);
								$auditCMTIDergo=mysql_insert_id(); 
				  }else{
							
					 $UpQuery= "update `tbl_comments` 
										set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_ergo'])."',
											`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_ergo'])."',
										`Last_Update`=now() 
										where Comment_id='".$_REQUEST['Commentidergo']."'
									 ";
						 
								$resultu11=mysql_query($UpQuery);
								$auditCMTIDergo=$_REQUEST['Commentidergo'];
							}
	
	if(empty($_REQUEST['c_id']) || $_REQUEST['c_id'] == "")
	{
		$InsQuery= "insert into `tbl_categoryscore`
							(
								`Category_id`,
								`Sv_id`,
								`Actual_score1`,
								`Actual_score2`,
								`Actual_score3`,
								`Actual_score4`,
								`Actual_score5`,
								`Achievement1`,
								`Achievement2`,
								`Achievement3`,
								`Achievement4`,
								`Achievement5`,
								`Category_rank`,
								`Month`,
								`Year`,
								`Created_on`,
								`Audit_By`
							) 
								values
							(
								'103',
								'$svid',
								'".$_REQUEST['score1']."',
								'".$_REQUEST['score2']."',
								'".$_REQUEST['score3']."',
								'".$_REQUEST['score4']."',
								'".$_REQUEST['score5']."',
								'".$_REQUEST['achieve1']."',
								'".$_REQUEST['achieve2']."',
								'".$_REQUEST['achieve3']."',
								'".$_REQUEST['achieve4']."',
								'".$_REQUEST['achieve5']."',
								'".$_REQUEST['category']."',
								'".$month."',
								'".$year."',
								now(),
								'".$sspid."'
							)";
		$result10=mysql_query($InsQuery);
		$auditIdcr=mysql_insert_id();
	}else{

		$UPQuery= "UPDATE `tbl_categoryscore` SET
							`Actual_score1`='".$_REQUEST['score1']."',
							`Actual_score2`='".$_REQUEST['score2']."',
							`Actual_score3`='".$_REQUEST['score3']."',
							`Actual_score4`='".$_REQUEST['score4']."',
							`Actual_score5`='".$_REQUEST['score5']."',
							`Achievement1`='".$_REQUEST['achieve1']."',
							`Achievement2`='".$_REQUEST['achieve2']."',
							`Achievement3`='".$_REQUEST['achieve3']."',
							`Achievement4`='".$_REQUEST['achieve4']."',
							`Achievement5`='".$_REQUEST['achieve5']."',
							`Category_rank`='".$_REQUEST['category']."',
							Last_updated=now() 
							WHERE 
							ID='".$_REQUEST['c_id']."'
							";
		$result10=mysql_query($UPQuery);
		$auditIdcr=$_REQUEST['c_id'];
	}
	
	/*-------------------- For counters ------------------------*/
	
	if($auditId1 != '' && $auditId2 != '' && $auditId4 != '' && $auditId5 != '' && $auditId3 != '' && $auditId6 != ''
	&& $auditId7 != '' && $auditId8 != '' && $auditId9 != '' && $auditId10 != '' && $auditId01 != '' && $auditId02 != ''
	&& $auditId03 != ''&& $auditId04 != ''&& $auditId12 != ''&& $auditId13 != ''&& $auditId11 != ''&& $auditId14 != ''
	&& $auditId15 != ''&& $auditId16 != ''&& $auditId17 != ''&& $auditId18 != ''&& $auditId19 != ''&& $auditId20 != '' && $auditId21 != ''&& $auditId22 != ''&& $auditId23 != ''&& $auditId24!= ''
	&& $auditIdcr != '' && $auditCMTIDsfy != '' && $auditCMTID5s != '' && $auditCMTIDenvy != '' && $auditCMTIDergo != '' )
	{

		echo '1';
	}
	else
	{
		echo '0';
	}
	
	
}
else 
{
	echo '2';
}

?>
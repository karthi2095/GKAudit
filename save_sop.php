<?php

include 'includes/common.php';
include "includes/classes/class.datamanage.php";
	$objDatamanage = new Datamanage();

				$svid=$_SESSION['supervisor'];
				$month=$_SESSION['month'];
	        	$year=$_SESSION['year'];
				$sspid=$_SESSION['userid'];
	if($_REQUEST['hdaction'] == "1")
	{
			
	  if(empty($_REQUEST['hisop11']) || $_REQUEST['hisop11'] == "")
		{        	
		 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','49','1','1',
			 '".$_REQUEST['sop_11']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			 $result1=mysql_query($InsQuery);
			 
			 $auditId1=mysql_insert_id();
			}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_11']."',
				 			Last_update=now() where Id='".$_REQUEST['hisop11']."'";
			 
				 $result1=mysql_query($InsQuery);
						 
				 $auditId1=$_REQUEST['hisop11'];
				} 	
		if(empty($_REQUEST['hisop12']) || $_REQUEST['hisop12'] == "")
			{		 
				 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
				 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
				 ('$svid','49','1','2',
				 '".$_REQUEST['sop_12']."',
				 '".$month."',
				 '".$year."',
				 '1',
				 now(),'".$sspid."')";
				 
				 $result2=mysql_query($InsQuery);
				 $auditId2=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_12']."',
				 			Last_update=now() where Id='".$_REQUEST['hisop12']."'";
			 
				 $result2=mysql_query($InsQuery);
				 $auditId2=$_REQUEST['hisop12'];
				} 

		if(empty($_REQUEST['hisop13']) || $_REQUEST['hisop13'] == "")
			{
			 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','49','1','3',
			 '".$_REQUEST['sop_13']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			 
			 $result3=mysql_query($InsQuery);
			 $auditId3=mysql_insert_id();
				 
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_13']."',
				 			Last_update=now() where Id='".$_REQUEST['hisop13']."'";
			 
				 $result3=mysql_query($InsQuery);
			     $auditId3=$_REQUEST['hisop13'];
				} 
		if(empty($_REQUEST['hisop14']) || $_REQUEST['hisop14'] == "")
			{		 
			 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','49','1','4',
			 '".$_REQUEST['sop_14']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			$result4=mysql_query($InsQuery);
			 $auditId4=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_14']."',
				 		Last_update=now() where Id='".$_REQUEST['hisop14']."'";
			 $result4=mysql_query($InsQuery);
			 $auditId4=$_REQUEST['hisop14'];
				} 	 
				
		if(empty($_REQUEST['hisop15']) || $_REQUEST['hisop15'] == "")
			{		
			  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','49','1','5',
			 '".$_REQUEST['sop_15']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			$result5=mysql_query($InsQuery);
			 $auditId5=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_15']."',
				 		Last_update=now() where Id='".$_REQUEST['hisop15']."'";
			 $result5=mysql_query($InsQuery);
			 $auditId5=$_REQUEST['hisop15'];
				} 	 	

		if(empty($_REQUEST['hisop21']) || $_REQUEST['hisop21'] == "")
			{	
			 $InsQuery="insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','49','2','1',
			 '".$_REQUEST['sop_21']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			$result6=mysql_query($InsQuery);
			 $auditId6=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_21']."'
				 		,Last_update=now() where Id='".$_REQUEST['hisop21']."'";
			 $result6=mysql_query($InsQuery);
			 $auditId6=$_REQUEST['hisop21'];
				} 	 	 
		
		if(empty($_REQUEST['hisop22']) || $_REQUEST['hisop22'] == "")
			{		 
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','49','2','2',
					 '".$_REQUEST['sop_22']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result7=mysql_query($InsQuery);
			 		$auditId7=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_22']."',
				 			Last_update=now() where Id='".$_REQUEST['hisop22']."'";
			 $result7=mysql_query($InsQuery);
			 $auditId7=$_REQUEST['hisop22'];
				} 	 
		if(empty($_REQUEST['hisop23']) || $_REQUEST['hisop23'] == "")
			{				 
			$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
				 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
				 ('$svid','49','2','3',
				 '".$_REQUEST['sop_23']."',
				 '".$month."',
				 '".$year."',
				 '1',
				 now(),'".$sspid."')";
				$result8=mysql_query($InsQuery);
				 $auditId8=mysql_insert_id();
			}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_23']."',
				 		Last_update=now() where Id='".$_REQUEST['hisop23']."'";
				$result8=mysql_query($InsQuery);
				 $auditId8=$_REQUEST['hisop23'];
				} 	

	if(empty($_REQUEST['hisop31']) || $_REQUEST['hisop31'] == "")
			{
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','49','3','1',
			 '".$_REQUEST['sop_31']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			$result9=mysql_query($InsQuery);
			 $auditId9=mysql_insert_id(); 	 
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_31']."',
				 		Last_update=now() where Id='".$_REQUEST['hisop31']."'";
			 $result9=mysql_query($InsQuery);
			 $auditId9=$_REQUEST['hisop31']; 
				} 
		if(empty($_REQUEST['hisop32']) || $_REQUEST['hisop32'] == "")
			{			 
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','49','3','2',
					 '".$_REQUEST['sop_32']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result10=mysql_query($InsQuery);
					 $auditId10=mysql_insert_id(); 	 
			}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_32']."',
				 		Last_update=now() where Id='".$_REQUEST['hisop32']."'";
					 $result10=mysql_query($InsQuery);
					 $auditId10=$_REQUEST['hisop32'];
				} 
		if(empty($_REQUEST['hisop41']) || $_REQUEST['hisop41'] == "")
			{	 
			  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','49','4','1',
					 '".$_REQUEST['sop_41']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result11=mysql_query($InsQuery);
					 $auditId11=mysql_insert_id(); 
		}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_41']."',
						 		Last_update=now() where Id='".$_REQUEST['hisop41']."'";
					 $result11=mysql_query($InsQuery);
					 $auditId11=$_REQUEST['hisop41']; 
						} 
						
		if(empty($_REQUEST['hisop42']) || $_REQUEST['hisop42'] == "")
			{
			  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','49','4','2',
					 '".$_REQUEST['sop_42']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result12=mysql_query($InsQuery);
					 $auditId12=mysql_insert_id(); 
			 }else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_42']."',
						 	Last_update=now() where Id='".$_REQUEST['hisop42']."'";
					$result12=mysql_query($InsQuery);
					 $auditId12=$_REQUEST['hisop42']; 
						} 
						
		if(empty($_REQUEST['hisop51']) || $_REQUEST['hisop51'] == "")
			{			
				  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','49','5','1',
						 '".$_REQUEST['sop_51']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result13=mysql_query($InsQuery);
						 $auditId13=mysql_insert_id(); 
			  }else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_51']."',
						 				Last_update=now() where Id='".$_REQUEST['hisop51']."'";
					 $result13=mysql_query($InsQuery);
						 $auditId13=$_REQUEST['hisop51']; 
						} 
		if(empty($_REQUEST['hisop52']) || $_REQUEST['hisop52'] == "")
			{ 
			$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','49','5','2',
			 '".$_REQUEST['sop_52']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			$result14=mysql_query($InsQuery);
			 $auditId14=mysql_insert_id();
	}else{
			
			 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['sop_52']."',
			 			Last_update=now() where Id='".$_REQUEST['hisop52']."'";
		 $result14=mysql_query($InsQuery);
			 $auditId14=$_REQUEST['hisop52'];
						} 
						
		
				/*--------------- SAVE COMMENTS for DNP--------------*/
						
						if(empty($_REQUEST['Commentidsop']) || $_REQUEST['Commentidsop'] == "")
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
															 '49',
															 '$svid',
															 '".addslashes($_REQUEST['diagnosis_result_sop'])."',
															 '".addslashes($_REQUEST['kaizen_idea_sop'])."',
															 '".$month."',
															 '".$year."',
															 now(),
															 '".$sspid."'
															)
											 ";
								$result11=mysql_query($InsQuery);
								$auditCMTIDsop=mysql_insert_id(); 
				  }else{
							
					 $UpQuery= "update `tbl_comments` 
										set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_sop'])."',
											`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_sop'])."',
										`Last_Update`=now() 
										where Comment_id='".$_REQUEST['Commentidsop']."'
									 ";
						 
								$resultu11=mysql_query($UpQuery);
								$auditCMTIDsop=$_REQUEST['Commentidsop'];
							} 		
			/* --------------   Save Category Score   -------    */
		
			if(empty($_REQUEST['c_id']) || $_REQUEST['c_id'] == "")
				{
					 $InsQuery= "insert into `tbl_categoryscore` (`Category_id`,`Sv_id`,
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
								`Month`,`Year`,`Created_on`,`Audit_By`) values
								('49','$svid',
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
							 now(),'".$sspid."')";
							$result10=mysql_query($InsQuery);
							$auditIdcr=mysql_insert_id(); 
				}else{
						
					$InsQuery= "UPDATE `tbl_categoryscore` SET 
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
							Last_updated=now() WHERE ID='".$_REQUEST['c_id']."'";
							 $result10=mysql_query($InsQuery);
							 $auditIdcr=$_REQUEST['c_id'];
					} 
/************************************================== FOR COUNTERS ===================*****************************************/
	
		if($auditId1 != '' && $auditId2 != '' && $auditId3 != '' && $auditId4 != '' && $auditId5 != '' && $auditId6 != '' && $auditId7 != ''
		 && $auditId8 != '' && $auditId9 != '' && $auditId10 != '' && $auditId11 != '' && $auditId12 != '' && $auditId13 != '' && $auditId14 != ''
		 && $auditIdcr != '' && $auditCMTIDsop != '')
		{
			
			echo '1';
		}else 
		{
			echo '0';
		}
	}else{
		echo "2";
	}	 
?>
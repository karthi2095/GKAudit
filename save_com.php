<?php 
include 'includes/common.php';
include "includes/classes/class.datamanage.php";
	$objDatamanage = new Datamanage();

				$svid=$_SESSION['supervisor'];
				$month=$_SESSION['month'];
	        	$year=$_SESSION['year'];
				$sspid=$_SESSION['userid'];
		if($_REQUEST['hdaction'] == 1)
		{		
				
		if(empty($_REQUEST['hicom11']) || $_REQUEST['hicom11'] == "")
				{    
		 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','1','1',
						 '".$_REQUEST['costlevel_11']."',
						 '".$month."', 
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result1=mysql_query($InsQuery);
						 
						 $auditId1=mysql_insert_id();
					}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_11']."',
					 			Last_update=now() where Id='".$_REQUEST['hicom11']."'";
				 $result1=mysql_query($InsQuery);
						 
						 $auditId1=$_REQUEST['hicom11'];
						} 	 
		 if(empty($_REQUEST['hicom12']) || $_REQUEST['hicom12'] == "")
			{ 		
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','1','2',
						 '".$_REQUEST['costlevel_12']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result2=mysql_query($InsQuery);
						 
						 $auditId2=mysql_insert_id();
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_12']."',Last_update=now() where Id='".$_REQUEST['hicom12']."'";
				 $result2=mysql_query($InsQuery);
						 
						 $auditId2=$_REQUEST['hicom12'];
				} 				 
					
				
	 if(empty($_REQUEST['hicom13']) || $_REQUEST['hicom13'] == "")
		{ 	
				 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','1','3',
						 '".$_REQUEST['costlevel_13']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result3=mysql_query($InsQuery);
						 
						 $auditId3=mysql_insert_id();
					 
			}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_13']."',Last_update=now() where Id='".$_REQUEST['hicom13']."'";
			$result3=mysql_query($InsQuery);
						 
						 $auditId3=$_REQUEST['hicom13'];
			}
			
			
			if(empty($_REQUEST['hicom14']) || $_REQUEST['hicom14'] == "")
				{ 		 
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','1','4',
						 '".$_REQUEST['costlevel_14']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result4=mysql_query($InsQuery);
						 
						 $auditId4=mysql_insert_id();
					 
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_14']."',Last_update=now() where Id='".$_REQUEST['hicom14']."'";
				 $result4=mysql_query($InsQuery);
						 
						 $auditId4=$_REQUEST['hicom14'];
				} 	

			if(empty($_REQUEST['hicom21']) || $_REQUEST['hicom21'] == "")
				{ 	
					 $InsQuery="insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','2','1',
						 '".$_REQUEST['costlevel_21']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result5=mysql_query($InsQuery);
						 
						 $auditId5=mysql_insert_id();
					 
			}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_21']."',Last_update=now() where Id='".$_REQUEST['hicom21']."'";
			 $result5=mysql_query($InsQuery);
						 
						 $auditId5=$_REQUEST['hicom21'];
			} 

			if(empty($_REQUEST['hicom22']) || $_REQUEST['hicom22'] == "")
		{ 
			
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','2','2',
						 '".$_REQUEST['costlevel_22']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result6=mysql_query($InsQuery);
						 
						 $auditId6=mysql_insert_id();
						 
				 
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_22']."' Last_update=now() where Id='".$_REQUEST['hicom22']."'";
				 $result6=mysql_query($InsQuery);
						 
						 $auditId6=$_REQUEST['hicom22'];
						 
				} 	
			if(empty($_REQUEST['hicom23']) || $_REQUEST['hicom23'] == "")
					{ 		 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','2','3',
						 '".$_REQUEST['costlevel_23']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result7=mysql_query($InsQuery);
						 
						 $auditId7=mysql_insert_id();	 
				
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_23']."',Last_update=now() where Id='".$_REQUEST['hicom23']."'";
					 $result7=mysql_query($InsQuery);
						 
						 $auditId7=$_REQUEST['hicom23'];
					} 			 
				if(empty($_REQUEST['hicom24']) || $_REQUEST['hicom24'] == "")
		{
			 					 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','2','4',
						 '".$_REQUEST['costlevel_24']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result8=mysql_query($InsQuery);
						 
						 $auditId8=mysql_insert_id();	 
					
				}else{
			
			 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_24']."',Last_update=now() where Id='".$_REQUEST['hicom24']."'";
		 $result8=mysql_query($InsQuery);
						 
						 $auditId8=$_REQUEST['hicom24'];	
		} 	
		if(empty($_REQUEST['hicom31']) || $_REQUEST['hicom31'] == "")
		{		 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','3','1',
						 '".$_REQUEST['costlevel_31']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result9=mysql_query($InsQuery);
						 
						 $auditId9=mysql_insert_id(); 	 
				}else{
			
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_31']."',Last_update=now() where Id='".$_REQUEST['hicom31']."'";
				 $result9=mysql_query($InsQuery);
						 
						 $auditId9=$_REQUEST['hicom31'];
				} 	
				if(empty($_REQUEST['hicom41']) || $_REQUEST['hicom41'] == "")
				{		 
					  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','4','1',
						 '".$_REQUEST['costlevel_41']."',
							'".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result10=mysql_query($InsQuery);
						 
						 $auditId10=mysql_insert_id(); 
			}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_41']."',Last_update=now() where Id='".$_REQUEST['hicom41']."'";
				 $result10=mysql_query($InsQuery);
						 
						 $auditId10=$_REQUEST['hicom41'];
				} 	
				
				if(empty($_REQUEST['hicom51']) || $_REQUEST['hicom51'] == "")
				{
				 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','5','1',
						 '".$_REQUEST['costlevel_51']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result11=mysql_query($InsQuery);
						 
						 $auditId11=mysql_insert_id(); 
						 
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_51']."',Last_update=now() where Id='".$_REQUEST['hicom51']."'";
				 $result11=mysql_query($InsQuery);
						 
						 $auditId11=$_REQUEST['hicom51'];
				} 	

				if(empty($_REQUEST['hicom52']) || $_REQUEST['hicom52'] == "")
					{
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','5','2',
						 '".$_REQUEST['costlevel_52']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result12=mysql_query($InsQuery);
						$auditId12=mysql_insert_id();
					}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_52']."',Last_update=now() where Id='".$_REQUEST['hicom52']."'";
				 $result12=mysql_query($InsQuery);
						 
						 $auditId12=$_REQUEST['hicom52'];
				} 	
				if(empty($_REQUEST['hicom53']) || $_REQUEST['hicom53'] == "")
				{		
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','127','5','3',
						 '".$_REQUEST['costlevel_53']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						
					$result13=mysql_query($InsQuery);
						$auditId13=mysql_insert_id();
					}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['costlevel_53']."',Last_update=now() where Id='".$_REQUEST['hicom53']."'";
				
					 $result13=mysql_query($InsQuery);
						$auditId13=$_REQUEST['hicom53'];
				} 	
				
				/*--------------- SAVE COMMENTS for FAM--------------*/
						
						if(empty($_REQUEST['Commentidcom']) || $_REQUEST['Commentidcom'] == "")
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
															 '127',
															 '$svid',
															 '".addslashes($_REQUEST['diagnosis_result_com'])."',
															 '".addslashes($_REQUEST['kaizen_idea_com'])."',
															 '".$month."',
															 '".$year."',
															 now(),
															 '".$sspid."'
															)
											 ";
								$result11=mysql_query($InsQuery);
								$auditCMTIDcom=mysql_insert_id(); 
				  }else{
							
					 $UpQuery= "update `tbl_comments` 
										set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_com'])."',
											`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_com'])."',
										`Last_Update`=now() 
										where Comment_id='".$_REQUEST['Commentidcom']."'
									 ";
						 
								$resultu11=mysql_query($UpQuery);
								$auditCMTIDcom=$_REQUEST['Commentidcom'];
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
								('127','$svid',
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
							$resultIdcr=mysql_query($InsQuery);
							$auditIdcr=mysql_insert_id(); 
				}else{
						 $_REQUEST['category'];
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
							 $resultIdcr=mysql_query($InsQuery);
							 $auditIdcr=$_REQUEST['c_id'];
					} 
					
/************************************================== FOR COUNTERS ===================*****************************************/
			
		if($auditId1 != '' && $auditId2 != '' && $auditId3 != '' && $auditId4 != '' && $auditId5 != '' && $auditId6 != ''
			&& $auditId7 != '' && $auditId8 != '' && $auditId9 != '' && $auditId10 != '' && $auditId11 != '' && $auditId12 != '' 
			&& $auditId13 != '' && $auditIdcr != '' && $auditCMTIDcom != '')
			{	
				echo '1';
			}else 
			{
				echo '0';
			}	
		}else{
			echo '2';
		}
		
?>
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
	
			 if(empty($_REQUEST['hifam11']) || $_REQUEST['hifam11'] == "")
			{ 	
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','1','1',
							 '".$_REQUEST['fam_11']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result1=mysql_query($InsQuery);
							 
							 $auditId1=mysql_insert_id();
				}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_11']."',Last_update=now() where Id='".$_REQUEST['hifam11']."'";
			 
				 $result1=mysql_query($InsQuery);
						 
				 $auditId1=$_REQUEST['hifam11'];
				} 				 
			if(empty($_REQUEST['hifam12']) || $_REQUEST['hifam12'] == "")
				{			 
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','1','2',
							 '".$_REQUEST['fam_12']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result2=mysql_query($InsQuery);
							 
							 $auditId2=mysql_insert_id();
					}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_12']."',Last_update=now() where Id='".$_REQUEST['hifam12']."'";
				 
					 $result2=mysql_query($InsQuery);
					 
					 $auditId2=$_REQUEST['hifam12'];
					} 	 			 
			if(empty($_REQUEST['hifam13']) || $_REQUEST['hifam13'] == "")
					{
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','1','3',
							 '".$_REQUEST['fam_13']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result3=mysql_query($InsQuery);
							 
							 $auditId3=mysql_insert_id();
					}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_13']."',Last_update=now() where Id='".$_REQUEST['hifam13']."'";
				 
					$result3=mysql_query($InsQuery);
							 
							 $auditId3=$_REQUEST['hifam13'];
					} 
			if(empty($_REQUEST['hifam14']) || $_REQUEST['hifam14'] == "")
					{	 		 
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','1','4',
							 '".$_REQUEST['fam_14']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result4=mysql_query($InsQuery);
							 
							 $auditId4=mysql_insert_id();
					}else{
				
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_14']."',Last_update=now() where Id='".$_REQUEST['hifam14']."'";
				 
					 $result4=mysql_query($InsQuery);
							 
							 $auditId4=$_REQUEST['hifam14'];
					} 	 		 

					if(empty($_REQUEST['hifam21']) || $_REQUEST['hifam21'] == "")
					{	
						$InsQuery="insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','2','1',
							 '".$_REQUEST['fam_21']."',
							  '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result5=mysql_query($InsQuery);
							 
							 $auditId5=mysql_insert_id();
						}else{
				
				
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_21']."',Last_update=now() where Id='".$_REQUEST['hifam21']."'";
					 $result5=mysql_query($InsQuery);
						 
						 $auditId5=$_REQUEST['hifam21'];
							} 			 
				
				if(empty($_REQUEST['hifam31']) || $_REQUEST['hifam31'] == "")
					{	
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','3','1',
							 '".$_REQUEST['fam_31']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result6=mysql_query($InsQuery);
							 
							 $auditId6=mysql_insert_id(); 	 
						}else{
				
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_31']."',Last_update=now() where Id='".$_REQUEST['hifam31']."'";
					 $result6=mysql_query($InsQuery);
							 
							 $auditId6=$_REQUEST['hifam31']; 
							} 	 	 
				
				if(empty($_REQUEST['hifam32']) || $_REQUEST['hifam32'] == "")
					{
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','3','2',
							 '".$_REQUEST['fam_32']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result7=mysql_query($InsQuery);
							 
							 $auditId7=mysql_insert_id(); 	 
						}else{
				
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_32']."',Last_update=now() where Id='".$_REQUEST['hifam32']."'";
					 $result7=mysql_query($InsQuery);
							 
							 $auditId7=$_REQUEST['hifam32']; 
							} 	 	 

				if(empty($_REQUEST['hifam33']) || $_REQUEST['hifam33'] == "")
					{
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','3','3',
							 '".$_REQUEST['fam_33']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result8=mysql_query($InsQuery);
							 
							 $auditId8=mysql_insert_id(); 	 
							 
					}else{
				
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_33']."',Last_update=now() where Id='".$_REQUEST['hifam33']."'";
					 $result8=mysql_query($InsQuery);
					 
					 $auditId8=$_REQUEST['hifam33']; 
							} 	 	

							
				if(empty($_REQUEST['hifam41']) || $_REQUEST['hifam41'] == "")
					{				
					  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','4','1',
							 '".$_REQUEST['fam_41']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result9=mysql_query($InsQuery);
							 
							 $auditId9=mysql_insert_id(); 
				}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_41']."',Last_update=now() where Id='".$_REQUEST['hifam41']."'";
					$result9=mysql_query($InsQuery);
							 
							 $auditId9=$_REQUEST['hifam41']; 
						}

				if(empty($_REQUEST['hifam42']) || $_REQUEST['hifam42'] == "")
					{		
					  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','4','2',
							 '".$_REQUEST['fam_42']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result10=mysql_query($InsQuery);
							 
							 $auditId10=mysql_insert_id(); 
					 }else{
				
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_42']."',Last_update=now() where Id='".$_REQUEST['hifam42']."'";
					$result10=mysql_query($InsQuery);
							 
							 $auditId10=$_REQUEST['hifam42']; 
						}	 
						
				if(empty($_REQUEST['hifam51']) || $_REQUEST['hifam51'] == "")
					{		 		 
					  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','5','1',
							 '".$_REQUEST['fam_51']."',
							
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result11=mysql_query($InsQuery);
							 
							 $auditId11=mysql_insert_id(); 
						}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_51']."',Last_update=now() where Id='".$_REQUEST['hifam51']."'";
					 $result11=mysql_query($InsQuery);
						 
						 $auditId11=$_REQUEST['hifam51']; 
						} 	 	 
				if(empty($_REQUEST['hifam52']) || $_REQUEST['hifam52'] == "")
					{ 		 
							$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','91','5','2',
							 '".$_REQUEST['fam_52']."',
							
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result12=mysql_query($InsQuery);
							$auditId12=mysql_insert_id();
						}else{
			
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['fam_52']."',Last_update=now() where Id='".$_REQUEST['hifam52']."'";
					 		$result12=mysql_query($InsQuery);
							 $auditId12=$_REQUEST['hifam52'];
						} 
				/*--------- save Itemscore-----------*/
					
		/*if(empty($_REQUEST['itemfam']) || $_REQUEST['itemfam'] == "")
				{
					$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,`Itemscore`,
					 `Month`,`Year`,`Created_on`,`Audit_By`) values
					 ('91','$svid',
					 '".$_REQUEST['itemscorefam']."',
					 '".$month."',
					 '".$year."',
					 now(),'".$sspid."')";
					$result01=mysql_query($InsQuery);
					 
					 $auditId01=mysql_insert_id(); 
			  }else{
						
						$InsQuery= "update `tbl_itemscore` set `Itemscore`='".$_REQUEST['itemscorefam']."',Last_Update=now() where Id='".$_REQUEST['itemfam']."'";
					 
							$result01=mysql_query($InsQuery);
							$auditId01=$_REQUEST['itemfam'];
						} */
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
								('91','$svid',
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
			
			
		if($auditId1 != '' && $auditId2 != '' && $auditId3 != '' && $auditId4 != '' && $auditId5 != '' && $auditId6 != ''
		&& $auditId7 != '' && $auditId8 != '' && $auditId9 != '' && $auditId10 != '' && $auditId11 != '' && $auditId12 != '')
		{
			echo '1';
		}
		else 
		{
			echo '0';
		}	
		}else{
			echo '2';
		} 
	?>
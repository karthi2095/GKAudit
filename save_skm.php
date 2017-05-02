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
	   if(empty($_REQUEST['hiskm11']) || $_REQUEST['hiskm11'] == "")
		{        	
		 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','63','1','1',
					 '".$_REQUEST['skm_11']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result1=mysql_query($InsQuery);					 
					 $auditId1=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_11']."',Last_update=now() where Id='".$_REQUEST['hiskm11']."'";
			 
				 $result1=mysql_query($InsQuery);						 
				 $auditId1=$_REQUEST['hiskm11'];
				} 	

		if(empty($_REQUEST['hiskm12']) || $_REQUEST['hiskm12'] == "")
			{			
			 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','63','1','2',
			 '".$_REQUEST['skm_12']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			$result2=mysql_query($InsQuery);
			 
			 $auditId2=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_12']."',Last_update=now() where Id='".$_REQUEST['hiskm12']."'";
			 
				 $result2=mysql_query($InsQuery);				 
				 $auditId2=$_REQUEST['hiskm12'];
				} 

	   if(empty($_REQUEST['hiskm13']) || $_REQUEST['hiskm13'] == "")
			{		
			 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','63','1','3',
			 '".$_REQUEST['skm_13']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			 
			$result3=mysql_query($InsQuery);			 
			 $auditId3=mysql_insert_id();
			 
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_13']."',Last_update=now() where Id='".$_REQUEST['hiskm13']."'";
			 
				 $result3=mysql_query($InsQuery);			 
			     $auditId3=$_REQUEST['hiskm13'];
				} 

	 if(empty($_REQUEST['hiskm14']) || $_REQUEST['hiskm14'] == "")
			{	
			 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','63','1','4',
			 '".$_REQUEST['skm_14']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
			 
			$result4=mysql_query($InsQuery);			 
			  $auditId4=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_14']."',
				 Last_update=now() where Id='".$_REQUEST['hiskm14']."'";

				 $result4=mysql_query($InsQuery);			 
				 $auditId4=$_REQUEST['hiskm14'];
				} 
					 
		if(empty($_REQUEST['hiskm21']) || $_REQUEST['hiskm21'] == "")
			{	
				
			 $InsQuery="insert into `saveaudit`(`Sv_id`,`Category_id`,
				 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
				 ('$svid','63','2','1',
				 '".$_REQUEST['skm_21']."',
				 '".$month."',
				 '".$year."',
				 '1',
				 now(),'".$sspid."')";
			 
				$result5=mysql_query($InsQuery);				 
				 $auditId5=mysql_insert_id();
			}else{
				
		
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_21']."',
				 	Last_update=now() where Id='".$_REQUEST['hiskm21']."'";

				 $result5=mysql_query($InsQuery);				 
				 $auditId5=$_REQUEST['hiskm21'];
				} 	 	 
	if(empty($_REQUEST['hiskm22']) || $_REQUEST['hiskm22'] == "")
			{		 
			 
		$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','63','2','2',
			 '".$_REQUEST['skm_22']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
		
			$result6=mysql_query($InsQuery);			 
			 $auditId6=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_22']."',
				 			Last_update=now() where Id='".$_REQUEST['hiskm22']."'";

				 $result6=mysql_query($InsQuery);			 
				 $auditId6=$_REQUEST['hiskm22'];
				} 	 
				
	if(empty($_REQUEST['hiskm23']) || $_REQUEST['hiskm23'] == "")
			{		 
			$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
				 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
				 ('$svid','63','2','3',
				 '".$_REQUEST['skm_23']."',
				 '".$month."',
				 '".$year."',
				 '1',
				 now(),'".$sspid."')";
				$result7=mysql_query($InsQuery);				 
				 $auditId7=mysql_insert_id();
			}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_23']."',
				 			Last_update=now() where Id='".$_REQUEST['hiskm23']."'";
			
				 $result7=mysql_query($InsQuery);				 
				 $auditId7=$_REQUEST['hiskm23'];
				} 	

		if(empty($_REQUEST['hiskm24']) || $_REQUEST['hiskm24'] == "")
			{		
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','63','2','4',
					 '".$_REQUEST['skm_24']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
				
					$result8=mysql_query($InsQuery);			 
					 $auditId8=mysql_insert_id();
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_24']."',
				 			Last_update=now() where Id='".$_REQUEST['hiskm24']."'";
			
				 $result8=mysql_query($InsQuery);				 
				 $auditId8=$_REQUEST['hiskm24'];
				} 	

		if(empty($_REQUEST['hiskm31']) || $_REQUEST['hiskm31'] == "")
			{
				
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','63','3','1',
					 '".$_REQUEST['skm_31']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result9=mysql_query($InsQuery);					 
					 $auditId9=mysql_insert_id(); 	 
			 }else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_31']."',
				 			Last_update=now() where Id='".$_REQUEST['hiskm31']."'";
			 
				 $result9=mysql_query($InsQuery);			 
			 	 $auditId9=$_REQUEST['hiskm31']; 
				} 
		if(empty($_REQUEST['hiskm32']) || $_REQUEST['hiskm32'] == "")
			{			
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','63','3','2',
					 '".$_REQUEST['skm_32']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result10=mysql_query($InsQuery);
					 $auditId10=mysql_insert_id(); 	 
			}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_32']."',
				 			Last_update=now() where Id='".$_REQUEST['hiskm32']."'";

				    $result10=mysql_query($InsQuery);
					 $auditId10=$_REQUEST['hiskm32'];
				} 
	if(empty($_REQUEST['hiskm33']) || $_REQUEST['hiskm33'] == "")
			{				 
	   $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
			 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
			 ('$svid','63','3','3',
			 '".$_REQUEST['skm_33']."',
			 '".$month."',
			 '".$year."',
			 '1',
			 now(),'".$sspid."')";
	   
			$result11=mysql_query($InsQuery);			 
			 $auditId11=mysql_insert_id(); 	 
			 
		}else{
				
				 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_33']."',
				 				Last_update=now() where Id='".$_REQUEST['hiskm33']."'";

				 $result11=mysql_query($InsQuery);			 
			     $auditId11=$_REQUEST['hiskm33']; 	 
				} 	 
		if(empty($_REQUEST['hiskm41']) || $_REQUEST['hiskm41'] == "")
			{		
				  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','63','4','1',
						 '".$_REQUEST['skm_41']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result12=mysql_query($InsQuery);						 
						 $auditId12=mysql_insert_id(); 

			}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_41']."',
						 				Last_update=now() where Id='".$_REQUEST['hiskm41']."'";
					
						 $result12=mysql_query($InsQuery);						 
						 $auditId12=$_REQUEST['hiskm41'];  
						} 

		if(empty($_REQUEST['hiskm42']) || $_REQUEST['hiskm42'] == "")
			{			
				  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','63','4','2',
						 '".$_REQUEST['skm_42']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result13=mysql_query($InsQuery);
						 
						 $auditId13=mysql_insert_id(); 
			  }else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_42']."',
						 			Last_update=now() where Id='".$_REQUEST['hiskm42']."'";

						 $result13=mysql_query($InsQuery);						 
						 $auditId13=$_REQUEST['hiskm42']; 
						} 
		if(empty($_REQUEST['hiskm51']) || $_REQUEST['hiskm51'] == "")
			{					
			  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','63','5','1',
					 '".$_REQUEST['skm_51']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result14=mysql_query($InsQuery);					 
					 $auditId14=mysql_insert_id(); 
				 }else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_51']."',
						 			Last_update=now() where Id='".$_REQUEST['hiskm51']."'";

						 $result14=mysql_query($InsQuery);						 
						 $auditId14=$_REQUEST['hiskm51']; 
						} 	 
			if(empty($_REQUEST['hiskm52']) || $_REQUEST['hiskm52'] == "")
				{ 	 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','63','5','2',
					 '".$_REQUEST['skm_52']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					
					$result15=mysql_query($InsQuery);
					$auditId15=mysql_insert_id();
					
				}else{
			
			 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_52']."',
			 			Last_update=now() where Id='".$_REQUEST['hiskm52']."'";
			 
		 		$result15=mysql_query($InsQuery);
				 $auditId15=$_REQUEST['hiskm52'];
						} 
						
		if(empty($_REQUEST['hiskm53']) || $_REQUEST['hiskm53'] == "")
				{		
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','63','5','3',
					 '".$_REQUEST['skm_53']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result16=mysql_query($InsQuery);
					$auditId16=mysql_insert_id();
				}else{
			
			 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['skm_53']."',
			 				Last_update=now() where Id='".$_REQUEST['hiskm53']."'";
			
					$result16=mysql_query($InsQuery);
					$auditId16=$_REQUEST['hiskm53'];
						} 
						
			/*--------- save Itemscore-----------
					
			if(empty($_REQUEST['itemskm']) || $_REQUEST['itemskm'] == "")
				{
					$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,`Itemscore`,
					 `Month`,`Year`,`Created_on`,`Audit_By`) values
					 ('63','$svid',
					 '".$_REQUEST['itemscoreskm']."',
					 '".$month."',
					 '".$year."',
					 now())";
					$result01=mysql_query($InsQuery);
					 
					 $auditId01=mysql_insert_id(); 
	  }else{
				
				$InsQuery= "update `tbl_itemscore` set `Itemscore`='".$_REQUEST['itemscoreskm']."',Last_Update=now() where Id='".$_REQUEST['itemskm']."'";
			 
					$result01=mysql_query($InsQuery);
					$auditId01=mysql_insert_id();
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
								('63','$svid',
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
		&& $auditId7 != '' && $auditId8 != '' && $auditId9 != '' && $auditId10 != '' && $auditId11 != '' && $auditId12 != '' 
		&& $auditId13 != '' && $auditId14 != '' && $auditId15 != '' && $auditId16 != '' && $auditIdcr != '' )
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
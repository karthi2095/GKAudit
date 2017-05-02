
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
			     if(empty($_REQUEST['hiwal11']) || $_REQUEST['hiwal11'] == "")
					{   	
			        	$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','1','1',
							 '".$_REQUEST['wal_11']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result1=mysql_query($InsQuery);
							 
							 $auditId1=mysql_insert_id();
						}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_11']."',
						 				Last_update=now() where Id='".$_REQUEST['hiwal11']."'";
					 
						 $result1=mysql_query($InsQuery);								 
						 $auditId1=$_REQUEST['hiwal11'];
						} 	
		
					if(empty($_REQUEST['hiwal12']) || $_REQUEST['hiwal12'] == "")
					{	
						 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','1','2',
							 '".$_REQUEST['wal_12']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result2=mysql_query($InsQuery);
							 
							 $auditId2=mysql_insert_id();
						}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_12']."',
						 				Last_update=now() where Id='".$_REQUEST['hiwal12']."'";
					 
						 $result2=mysql_query($InsQuery);						 
						 $auditId2=$_REQUEST['hiwal12'];
						} 	 
							
					if(empty($_REQUEST['hiwal21']) || $_REQUEST['hiwal21'] == "")
							{			 
							 $InsQuery="insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','2','1',
							 '".$_REQUEST['wal_21']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result3=mysql_query($InsQuery);							 
							 $auditId3=mysql_insert_id();
					}else{
						
				
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_21']."',
						 				Last_update=now() where Id='".$_REQUEST['hiwal21']."'";

						 $result5=mysql_query($InsQuery);						 
						 $auditId3=$_REQUEST['hiwal21'];
						} 	
						
					if(empty($_REQUEST['hiwal22']) || $_REQUEST['hiwal22'] == "")
						{			 
							 
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','2','2',
							 '".$_REQUEST['wal_22']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result6=mysql_query($InsQuery);
							 
							 $auditId4=mysql_insert_id();
						}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_22']."',
						 				Last_update=now() where Id='".$_REQUEST['hiwal22']."'";
					 $result6=mysql_query($InsQuery);					 
					 $auditId4=$_REQUEST['hiwal22'];
						} 	 
		
				if(empty($_REQUEST['hiwal23']) || $_REQUEST['hiwal23'] == "")
					{	
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','2','3',
							 '".$_REQUEST['wal_23']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result7=mysql_query($InsQuery);
							 
							 $auditId5=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_23']."',
						 					Last_update=now() where Id='".$_REQUEST['hiwal23']."'";
					
						 $result7=mysql_query($InsQuery);						 
						 $auditId5=$_REQUEST['hiwal23'];
						} 	
		
					if(empty($_REQUEST['hiwal24']) || $_REQUEST['hiwal24'] == "")
					{		
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','2','4',
							 '".$_REQUEST['wal_24']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result8=mysql_query($InsQuery);							 
							 $auditId6=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_24']."',
						 			Last_update=now() where Id='".$_REQUEST['hiwal24']."'";
					
						 $result8=mysql_query($InsQuery);						 
						 $auditId6=$_REQUEST['hiwal24'];
						} 	
		
					if(empty($_REQUEST['hiwal25']) || $_REQUEST['hiwal25'] == "")
						{	
					    $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','2','5',
							 '".$_REQUEST['wal_25']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result10=mysql_query($InsQuery);							 
							 $auditId7=mysql_insert_id();
						}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_25']."',
						 			Last_update=now() where Id='".$_REQUEST['hiwal25']."'";

						 $result8=mysql_query($InsQuery);						 
						 $auditId7=$_REQUEST['hiwal25'];
						} 	
					if(empty($_REQUEST['hiwal31']) || $_REQUEST['hiwal31'] == "")
						{		 
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','3','1',
							 '".$_REQUEST['wal_31']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result9=mysql_query($InsQuery);
							 
							 $auditId8=mysql_insert_id(); 	 
						 }else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_31']."',
						 			Last_update=now() where Id='".$_REQUEST['hiwal31']."'";
					 $result9=mysql_query($InsQuery);					 
					 $auditId8=$_REQUEST['hiwal31']; 
						} 	 
						
				if(empty($_REQUEST['hiwal41']) || $_REQUEST['hiwal41'] == "")
					{			 
					  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','4','1',
							 '".$_REQUEST['wal_41']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result12=mysql_query($InsQuery);							 
							 $auditId9=mysql_insert_id(); 
				
					 }else{
								
								 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_41']."',
								 			Last_update=now() where Id='".$_REQUEST['hiwal41']."'";
							$result12=mysql_query($InsQuery);								 
								 $auditId9=$_REQUEST['hiwal41'];  
								} 
				if(empty($_REQUEST['hiwal51']) || $_REQUEST['hiwal51'] == "")
					{			 
					  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','5','1',
							 '".$_REQUEST['wal_51']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result11=mysql_query($InsQuery);							 
							 $auditId10=mysql_insert_id(); 
						}else{
								
								 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_51']."',
								 			Last_update=now() where Id='".$_REQUEST['hiwal51']."'";
							 $result14=mysql_query($InsQuery);								 
								 $auditId10=$_REQUEST['hiwal51']; 
								} 	 	 
					if(empty($_REQUEST['hiwal52']) || $_REQUEST['hiwal52'] == "")
						{ 		 
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','5','2',
							 '".$_REQUEST['wal_52']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result15=mysql_query($InsQuery);
							$auditId11=mysql_insert_id();
						}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_52']."',
					 			Last_update=now() where Id='".$_REQUEST['hiwal52']."'";
				 		$result15=mysql_query($InsQuery);
						 $auditId11=$_REQUEST['hiwal52'];
								} 
								
				if(empty($_REQUEST['hiwal53']) || $_REQUEST['hiwal53'] == "")
						{			
					  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','79','5','3',
							 '".$_REQUEST['wal_53']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result16=mysql_query($InsQuery);
							$auditId12=mysql_insert_id();
					}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['wal_53']."',
					 				Last_update=now() where Id='".$_REQUEST['hiwal53']."'";
							$result16=mysql_query($InsQuery);
							$auditId12=$_REQUEST['hiwal53'];
								} 
								
						/*--------- save Itemscore-----------
							
					if(empty($_REQUEST['itemwal']) || $_REQUEST['itemwal'] == "")
						{
							$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,`Itemscore`,
							 `Month`,`Year`,`Created_on`) values
							 ('79','$svid',
							 '".$_REQUEST['itemscorewal']."',
							 '".$month."',
							 '".$year."',
							 now())";
							$result01=mysql_query($InsQuery);
							 
							 $auditId01=mysql_insert_id(); 
			  }else{
						
						$InsQuery= "update `tbl_itemscore` set `Itemscore`='".$_REQUEST['itemscorewal']."',Last_Update=now() where Id='".$_REQUEST['itemwal']."'";
					 
							$result01=mysql_query($InsQuery);
							$auditId01=mysql_insert_id();
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
								('79','$svid',
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
				&& $auditIdcr != '' )
			{
				
				echo '1';
			}else 
			{
				echo '0';
			}
		}else 
			{
				echo '2';
			}		 
?>
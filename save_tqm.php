<?php
include 'includes/common.php';
include "includes/classes/class.datamanage.php";
	$objDatamanage = new Datamanage();
//print_r($_REQUEST);
			$svid=$_SESSION['supervisor'];
	        $month=$_SESSION['month'];
	        $year=$_SESSION['year'];
			$sspid=$_SESSION['userid'];
		if($_REQUEST['hdaction1'] == 1 || $_REQUEST['hdaction2'] == 1)
		{
		  		if(empty($_REQUEST['hitqm11']) || $_REQUEST['hitqm11'] == "")
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
									) values
								 	(
								 		'$svid','1','1','1',
								 		'".$_REQUEST['tqm_11']."',
								 		'".$month."',
								 		'".$year."', 
								 		'1',
								 		now(),
								 		'".$sspid."')";
								$result1=mysql_query($InsQuery);
								$auditIdtqm1=mysql_insert_id();
					}else{
							 $UpQuery= "update `saveaudit` set 
												`Audit_Check`='".$_REQUEST['tqm_11']."',
												Last_update=now() 
												where 
												Id='".$_REQUEST['hitqm11']."'
											";
						
           						$resultu1=mysql_query($UpQuery);
								$auditIdtqm1=$_REQUEST['hitqm11'];
					} 
					
					if(empty($_REQUEST['hitqm12']) || $_REQUEST['hitqm12'] == "")
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
									'1',
									'1',
									'2',
									'".$_REQUEST['tqm_12']."',
									'".$month."',
									'".$year."',
									'1',
								 	now(),
								 	'".$sspid."'
							   )";
							$result2=mysql_query($InsQuery);
							$auditIdtqm2=mysql_insert_id();
					}else{
						
							$UpQuery= "update `saveaudit` set 
							 					`Audit_Check`='".$_REQUEST['tqm_12']."',
												Last_update=now() 
												where Id='".$_REQUEST['hitqm12']."'
										";
							$resultu2=mysql_query($UpQuery);
							$auditIdtqm2=$_REQUEST['hitqm12'];
					} 

					if(empty($_REQUEST['hitqm21']) || $_REQUEST['hitqm21'] == "")
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
							 				'1',
							 				'2',
							 				'1',
							 				'".$_REQUEST['tqm_21']."',
									 		'".$month."',
							 				'".$year."',
							 				'1',
							 				now(),
							 				'".$sspid."'
							 			)";
							
							$result3=mysql_query($InsQuery);
							$auditIdtqm3=mysql_insert_id();
					}else{
							$UpQuery= "update `saveaudit` 
										set `Audit_Check`='".$_REQUEST['tqm_21']."',
										Last_update=now() 
										where Id='".$_REQUEST['hitqm21']."'";
						 
							$resultu3=mysql_query($UpQuery);
							$auditIdtqm3=$_REQUEST['hitqm21'];
					} 

					if(empty($_REQUEST['hitqm22']) || $_REQUEST['hitqm22'] == "")
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
							 			'1',
							 			'2',
							 			'2',
							 			'".$_REQUEST['tqm_22']."',
							 			'".$month."',
							 			'".$year."',
							 			'1',
										now(),
										'".$sspid."'
									)";
							
							$result4=mysql_query($InsQuery);
							$auditIdtqm4=mysql_insert_id();

					}else{
						 $UpQuery= "update `saveaudit` set 
						 				`Audit_Check`='".$_REQUEST['tqm_22']."',
										Last_update=now() 
										where 
										Id='".$_REQUEST['hitqm22']."'
									";
							
							$resultu4=mysql_query($UpQuery);
							$auditIdtqm4=$_REQUEST['hitqm22'];
					} 
					

					if(empty($_REQUEST['hitqm31']) || $_REQUEST['hitqm31'] == "")
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
							 				'1',
							 				'3',
							 				'1',
							 				'".$_REQUEST['tqm_31']."',
							 				'".$month."',
							 				'".$year."',
							 				'1',
							 				now(),
							 				'".$sspid."'
							 		  )";
							
							$result5=mysql_query($InsQuery);
							$auditIdtqm5=mysql_insert_id(); 

						}else{
						 $UpQuery= "update `saveaudit` 
									 set `Audit_Check`='".$_REQUEST['tqm_31']."',
									 Last_update=now() 
									 where Id='".$_REQUEST['hitqm31']."'";
						
							$resultu5=mysql_query($UpQuery);
							$auditIdtqm5=$_REQUEST['hitqm31'];
					} 	 
							 
					if(empty($_REQUEST['hitqm41']) || $_REQUEST['hitqm41'] == "")
					{	  
							$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','1','4','1',
							 '".$_REQUEST['tqm_41']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							 $result6=mysql_query($InsQuery);
							 $auditIdtqm6=mysql_insert_id(); 
							 
						}else{
						 $UpQuery= "update `saveaudit` 
									set `Audit_Check`='".$_REQUEST['tqm_41']."',
									Last_update=now() 
									where Id='".$_REQUEST['hitqm41']."'";
						
							$resultu6=mysql_query($UpQuery);
							$auditIdtqm6=$_REQUEST['hitqm41'];
					} 	 	 
					
					if(empty($_REQUEST['hitqm51']) || $_REQUEST['hitqm51'] == "")
					{	 
							 
							 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','1','5','1',
							 '".$_REQUEST['tqm_51']."',
							'".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							
							$result7=mysql_query($InsQuery);
							$auditIdtqm7=mysql_insert_id(); 

					  }else{
						 $UpQuery= "update `saveaudit` 
									set `Audit_Check`='".$_REQUEST['tqm_51']."',
									Last_update=now() 
									where Id='".$_REQUEST['hitqm51']."'";
							
							$resultu7=mysql_query($UpQuery);
							$auditIdtqm7=$_REQUEST['hitqm51'];
					} 	 	 

					if(empty($_REQUEST['hitqm52']) || $_REQUEST['hitqm52'] == "")
					{	
							  $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
							 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
							 ('$svid','1','5','2',
							 '".$_REQUEST['tqm_52']."',
							 '".$month."',
							 '".$year."',
							 '1',
							 now(),'".$sspid."')";
							$result8=mysql_query($InsQuery);
							$auditIdtqm8=mysql_insert_id(); 
							 
					 }else{
						 $UpQuery= "update `saveaudit` 
									set `Audit_Check`='".$_REQUEST['tqm_52']."',
									Last_update=now() 
									where Id='".$_REQUEST['hitqm52']."'";
						
							$resultu8=mysql_query($UpQuery);
							$auditIdtqm8=$_REQUEST['hitqm52'];
					} 	 	
					/*--------------- SAVE ITEMSCORE for TQM--------------*/
							if(empty($_REQUEST['itemtqm']) || $_REQUEST['itemtqm'] == "")
								{
									$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,
									`Itemscore`,
									`Level_total1`,
									`Level_total2`,
									`Level_total3`,
									`Level_total4`,
									`Level_total5`,
									`Month`,`Year`,`Created_on`,`Audit_By`) values
									 ('1','$svid',
									 '".$_REQUEST['total_item']."',
									 '".$_REQUEST['level_totaltqm1']."',
									 '".$_REQUEST['level_totaltqm2']."',
									 '".$_REQUEST['level_totaltqm3']."',
									 '".$_REQUEST['level_totaltqm4']."',
									 '".$_REQUEST['level_totaltqm5']."',
									 '".$month."',
									 '".$year."',
									 now(),'".$sspid."')";
									$result11=mysql_query($InsQuery);
									$auditIdtqmit=mysql_insert_id(); 
					  }else{
								
								$UpQuery= "update `tbl_itemscore` 
											set `Itemscore`='".$_REQUEST['total_item']."',
												`Level_total1`='".$_REQUEST['level_totaltqm1']."',
												`Level_total2`='".$_REQUEST['level_totaltqm2']."',
												`Level_total3`='".$_REQUEST['level_totaltqm3']."',
												`Level_total4`='".$_REQUEST['level_totaltqm4']."',
												`Level_total5`='".$_REQUEST['level_totaltqm5']."',
												Last_Update=now() 
											    where Id='".$_REQUEST['itemtqm']."'";
							 
									$resultu11=mysql_query($UpQuery);
									$auditIdtqmit=$_REQUEST['itemtqm'];
								} 
								
								/*--------------- SAVE COMMENTS for TQM--------------*/
							if(empty($_REQUEST['Commentidtqm']) || $_REQUEST['Commentidtqm'] == "")
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
																 '1',
																 '$svid',
																 '".addslashes($_REQUEST['diagnosis_result_tqm'])."',
																 '".addslashes($_REQUEST['kaizen_idea_tqm'])."',
																 '".$month."',
																 '".$year."',
																 now(),
																 '".$sspid."'
																)
												 ";
									$result11=mysql_query($InsQuery);
									$auditCMTIDtqm=mysql_insert_id(); 
					  }else{
								
						 $UpQuery= "update `tbl_comments` 
											set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_tqm'])."',
												`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_tqm'])."',
											`Last_Update`=now() 
											where Comment_id='".$_REQUEST['Commentidtqm']."'
										 ";
							 
									$resultu11=mysql_query($UpQuery);
									$auditCMTIDtqm=$_REQUEST['Commentidtqm'];
								} 
		/************************************================== FOR COUNTERS ===================*****************************************/
							
					// if($auditId1 != '' && $auditId2 != '' && $auditId3 != '' && $auditId4 != '' && $auditId5 != '' && $auditId6 != ''
					// && $auditId7 != '' && $auditId8 != '' && $auditId11 != '')
					// {
						
						// echo '1';
					// }
							
		
		
			 if(empty($_REQUEST['hitm11']) || $_REQUEST['hitm11'] == "")
				{
				$InsQuery="insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','9','1','1',
					 '".$_REQUEST['tm_11']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					
					$result1=mysql_query($InsQuery);
					$auditIdtm1=mysql_insert_id();
				}else{
					
					 $UpQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['tm_11']."',
									Last_update=now() where Id='".$_REQUEST['hitm11']."'";
					$result1=mysql_query($UpQuery);
					$auditIdtm1=$_REQUEST['hitm11'];
				} 

			if(empty($_REQUEST['hitm12']) || $_REQUEST['hitm12'] == "")
				{
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','9','1','2',
					 '".$_REQUEST['tm_12']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result2=mysql_query($InsQuery);
					$auditIdtm2=mysql_insert_id();
				}else{
					
					 $UpQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['tm_12']."',
							Last_update=now() where Id='".$_REQUEST['hitm12']."'";
						$result2=mysql_query($UpQuery);
						$auditIdtm2=$_REQUEST['hitm12'];
				} 

				if(empty($_REQUEST['hitm13']) || $_REQUEST['hitm13'] == "")
				{	
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','9','1','3',
					 '".$_REQUEST['tm_13']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$resulttm3=mysql_query($InsQuery);
					$auditIdtm3=mysql_insert_id();
				}else{
					
					$UpQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['tm_13']."',
							Last_update=now() where Id='".$_REQUEST['hitm13']."'";
				 
					$result3=mysql_query($UpQuery);
					$auditIdtm3=$_REQUEST['hitm13'];
				} 

			 if(empty($_REQUEST['hitm21']) || $_REQUEST['hitm21'] == "")
				{
					
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','9','2','1',
					 '".$_REQUEST['tm_21']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result4=mysql_query($InsQuery);
					$auditIdtm4=mysql_insert_id();
				}else{
						
						$UpQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['tm_21']."',
									Last_update=now() where Id='".$_REQUEST['hitm21']."'";
					 $result4=mysql_query($UpQuery);
					 $auditIdtm4=$_REQUEST['hitm21'];
					} 
					 
			if(empty($_REQUEST['hitm31']) || $_REQUEST['hitm31'] == "")
				{
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','9','3','1',
					 '".$_REQUEST['tm_31']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result5=mysql_query($InsQuery);
					$auditIdtm5=mysql_insert_id(); 
				}else{
						
						$UpQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['tm_31']."',
								Last_update=now() where Id='".$_REQUEST['hitm31']."'";
					 $result5=mysql_query($UpQuery);
					$auditIdtm5=$_REQUEST['hitm31'];
					} 
					 
					 
			if(empty($_REQUEST['hitm41']) || $_REQUEST['hitm41'] == "")
				{	  
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','9','4','1',
					 '".$_REQUEST['tm_41']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result6=mysql_query($InsQuery);
					$auditIdtm6=mysql_insert_id(); 
					 
				}else{
						
						$UpQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['tm_41']."',
									Last_update=now() where Id='".$_REQUEST['hitm41']."'";
					 $result6=mysql_query($UpQuery);
					 $auditIdtm6=$_REQUEST['hitm41'];
					} 	 
					 

			if(empty($_REQUEST['hitm51']) || $_REQUEST['hitm51'] == "")
				{
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','9','5','1',
					 '".$_REQUEST['tm_51']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result7=mysql_query($InsQuery);
					$auditIdtm7=mysql_insert_id(); 

			  }else{
						
						$UpQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['tm_51']."',
								Last_update=now() where Id='".$_REQUEST['hitm51']."'";
					 $result7=mysql_query($UpQuery);
					$auditIdtm7=$_REQUEST['hitm51'];
					} 	 

			if(empty($_REQUEST['hitm52']) || $_REQUEST['hitm52'] == "")
				{
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','9','5','2',
					 '".$_REQUEST['tm_52']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result8=mysql_query($InsQuery);
					$auditIdtm8=mysql_insert_id(); 
			  }else{
						
						$UpQuery= "update `saveaudit` set 
									`Audit_Check`='".$_REQUEST['tm_52']."',
									Last_update=now() where Id='".$_REQUEST['hitm52']."'
									";
					 $result8=mysql_query($UpQuery);
					$auditIdtm8=$_REQUEST['hitm52'];
					} 	
		/*---------------   Save Item score of Team work   -----------*/
		
				if(empty($_REQUEST['itemidtm']) || $_REQUEST['itemidtm'] == "")
						{
							$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,
								`Itemscore`,
								`Level_total1`,
								`Level_total2`,
								`Level_total3`,
								`Level_total4`,
								`Level_total5`,
								`Month`,`Year`,`Created_on`,`Audit_By`) values
								('9','$svid',
								'".$_REQUEST['item_scoretm']."',
								'".$_REQUEST['level_totaltm1']."',
								'".$_REQUEST['level_totaltm2']."',
								'".$_REQUEST['level_totaltm3']."',
								'".$_REQUEST['level_totaltm4']."',
								'".$_REQUEST['level_totaltm5']."',
							 '".$month."',
							 '".$year."',
							 now(),'".$sspid."')";
							$result9=mysql_query($InsQuery);
							$auditIdtmit=mysql_insert_id(); 
			  }else{
						
						$UpQuery = "update `tbl_itemscore` 
						set `Itemscore`='".$_REQUEST['item_scoretm']."',
							`Level_total1`='".$_REQUEST['level_totaltm1']."',
							`Level_total2`='".$_REQUEST['level_totaltm2']."',
							`Level_total3`='".$_REQUEST['level_totaltm3']."',
							`Level_total4`='".$_REQUEST['level_totaltm4']."',
							`Level_total5`='".$_REQUEST['level_totaltm5']."',
						Last_Update=now() where Id='".$_REQUEST['itemidtm']."'";
					 $result9=mysql_query($UpQuery);
							 
							 $auditIdtmit=$_REQUEST['itemidtm'];
						} 
				
						/*--------------- SAVE COMMENTS for TM--------------*/
						
							if(empty($_REQUEST['Commentidtm']) || $_REQUEST['Commentidtm'] == "")
								{
									$INSERTQUERY= "INSERT into `tbl_comments` (`Category_id`,
																`Sv_id`,
																`Diagnosis_Result`,
																`Kaizen_Idea`,
																 `Month`,`Year`,
																 `Created_on`,
																 `Audit_By`
																) 
																 VALUES
															    (
																 '9',
																 '$svid',
																 '".addslashes($_REQUEST['diagnosis_result_tm'])."',
																 '".addslashes($_REQUEST['kaizen_idea_tm'])."',
																 '".$month."',
																 '".$year."',
																 now(),
																 '".$sspid."'
																)
												 ";
									$result11=mysql_query($INSERTQUERY);
									$auditCMTIDtm=mysql_insert_id(); 
					  }else{
								
								$UpQuery= "update `tbl_comments` 
											set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_tm'])."',
												`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_tm'])."',
											`Last_Update`=now() 
											where Comment_id='".$_REQUEST['Commentidtm']."'";
							 
									$resultu11=mysql_query($UpQuery);
									$auditCMTIDtm=$_REQUEST['Commentidtm'];
					  	}
		/* --------------   Save Category Score   -------    */
		
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
										'1',
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
						
					$UpQuery = "UPDATE `tbl_categoryscore` SET 
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
					 $result10=mysql_query($UpQuery);							 
					 $auditIdcr=$_REQUEST['c_id'];
					} 
	/************************************================== FOR COUNTERS ===================*****************************************/
			
		if($auditIdtqm1 != '' && $auditIdtqm2 != '' && $auditIdtqm3 != '' && $auditIdtqm4 != '' && $auditIdtqm5 != '' && $auditIdtqm6 != '' 
		&& $auditIdtqm7 != '' && $auditIdtqm8 != '' && $auditIdtqmit != '' && $auditIdtm1 != '' && $auditIdtm2 != '' && $auditIdtm3 != ''
		&& $auditIdtm4 != '' && $auditIdtm5 != '' && $auditIdtm6 != '' && $auditIdtm7 != '' && $auditIdtm8 != '' && $auditIdtmit != '' 
		&& $auditIdcr != '' && $auditCMTIDtqm != '' && $auditCMTIDtm != '')
		{
			
			echo '1';
		}else{
			echo '0';
		}
	}else{
		echo "2";
		}
?>
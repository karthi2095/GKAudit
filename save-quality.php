<?php
include 'includes/common.php';


			$svid=$_SESSION['supervisor'];
			$month=$_SESSION['month'];
	        $year=$_SESSION['year'];
	        $sspid=$_SESSION['userid'];
	if($_REQUEST['hdaction1'] == 1 || $_REQUEST['hdaction2'] == 1)
		{
				
			  if(empty($_REQUEST['hidp11']) || $_REQUEST['hidp11'] == "")
				{    
					  
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','17','1','1',
						 '".$_REQUEST['dnp_11']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result=mysql_query($InsQuery);
						 
						 $auditIddp1=mysql_insert_id();
						
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_11']."',
					 Last_update=now() where Id='".$_REQUEST['hidp11']."'";
				 $result1=mysql_query($InsQuery);
						 
						 $auditIddp1=$_REQUEST['hidp11'];
				} 

			 if(empty($_REQUEST['hidp12']) || $_REQUEST['hidp12'] == "")
				{ 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','17','1','2',
						 '".$_REQUEST['dnp_12']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result2=mysql_query($InsQuery);
						 
						 $auditIddp2=mysql_insert_id();

				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_12']."',
								 Last_update=now() where Id='".$_REQUEST['hidp12']."'";
				 $result2=mysql_query($InsQuery);
						 
						 $auditIddp2=$_REQUEST['hidp12'];
				} 		 

				
			 if(empty($_REQUEST['hidp13']) || $_REQUEST['hidp13'] == "")
				{ 	
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','17','1','3',
						 '".$_REQUEST['dnp_13']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result3=mysql_query($InsQuery);
						 
						 $auditIddp3=mysql_insert_id();
					 
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_13']."',
								Last_update=now() where Id='".$_REQUEST['hidp13']."'";
				 $result3=mysql_query($InsQuery);
						 
						 $auditIddp3=$_REQUEST['hidp13'];
				} 		 

			 if(empty($_REQUEST['hidp21']) || $_REQUEST['hidp21'] == "")
				{ 	
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','2','1',
					 '".$_REQUEST['dnp_21']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result4=mysql_query($InsQuery);
					 
					 $auditIddp4=mysql_insert_id();
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_21']."',
								Last_update=now() where Id='".$_REQUEST['hidp21']."'";
				 $result4=mysql_query($InsQuery);
					 
					 $auditIddp4=$_REQUEST['hidp21'];
				} 		

				if(empty($_REQUEST['hidp22']) || $_REQUEST['hidp22'] == "")
				{ 
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','2','2',
					 '".$_REQUEST['dnp_22']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result5=mysql_query($InsQuery);
					 
					 $auditIddp5=mysql_insert_id();
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_22']."',
								Last_update=now() where Id='".$_REQUEST['hidp22']."'";
				 $result5=mysql_query($InsQuery);
					 
					 $auditIddp5=$_REQUEST['hidp22'];
				} 	

			if(empty($_REQUEST['hidp23']) || $_REQUEST['hidp23'] == "")
				{ 
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','2','3',
					 '".$_REQUEST['dnp_23']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result6=mysql_query($InsQuery);
					 
					 $auditIddp6=mysql_insert_id();
				
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_23']."',
								Last_update=now() where Id='".$_REQUEST['hidp23']."'";
				 $result6=mysql_query($InsQuery);
					 
					 $auditIddp6=$_REQUEST['hidp23'];
				} 	

				if(empty($_REQUEST['hidp24']) || $_REQUEST['hidp24'] == "")
				{
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','2','4',
					 '".$_REQUEST['dnp_24']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result7=mysql_query($InsQuery);
					 
					 $auditIddp7=mysql_insert_id();

				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_24']."',
									Last_update=now() where Id='".$_REQUEST['hidp24']."'";
					$result7=mysql_query($InsQuery);
					 
					 $auditIddp7=$_REQUEST['hidp24'];
					 
				} 	
				
				if(empty($_REQUEST['hidp25']) || $_REQUEST['hidp25'] == "")
				{
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','2','5',
					 '".$_REQUEST['dnp_25']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result8=mysql_query($InsQuery);
					 
					 $auditIddp8=mysql_insert_id();
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_25']."',
									Last_update=now() where Id='".$_REQUEST['hidp25']."'";
				$result8=mysql_query($InsQuery);
					 
					 $auditIddp8=$_REQUEST['hidp25'];
				} 		 

				if(empty($_REQUEST['hidp26']) || $_REQUEST['hidp26'] == "")
				{
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','17','2','6',
						 '".$_REQUEST['dnp_26']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result9=mysql_query($InsQuery);
						 
						 $auditIddp9=mysql_insert_id();
					}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_26']."',
								Last_update=now() where Id='".$_REQUEST['hidp26']."'";
				$result9=mysql_query($InsQuery);
						 
						 $auditIddp9=$_REQUEST['hidp26'];
				} 	 
					 

				if(empty($_REQUEST['hidp31']) || $_REQUEST['hidp31'] == "")
				{	 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','3','1',
					 '".$_REQUEST['dnp_31']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result10=mysql_query($InsQuery);
					 
					 $auditIddp10=mysql_insert_id(); 
					}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_31']."',
								Last_update=now() where Id='".$_REQUEST['hidp31']."'";
				 $result10=mysql_query($InsQuery);
						 
						 $auditIddp10=$_REQUEST['hidp31'];
				} 	

				if(empty($_REQUEST['hidp32']) || $_REQUEST['hidp32'] == "")
				{
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','3','2',
					 '".$_REQUEST['dnp_32']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result11=mysql_query($InsQuery);
					 
					 $auditIddp11=mysql_insert_id(); 
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_32']."',
								Last_update=now() where Id='".$_REQUEST['hidp32']."'";
				 $result11=mysql_query($InsQuery);
						 
						 $auditIddp11=$_REQUEST['hidp32'];
				} 	
				if(empty($_REQUEST['hidp33']) || $_REQUEST['hidp33'] == "")
				{	 
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','3','3',
					 '".$_REQUEST['dnp_33']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result12=mysql_query($InsQuery);
					 
					 $auditIddp12=mysql_insert_id(); 
				}else{
					
					 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_33']."',
								Last_update=now() where Id='".$_REQUEST['hidp33']."'";
				 $result12=mysql_query($InsQuery);
						 
						 $auditIddp12=$_REQUEST['hidp33'];
				} 		 

				if(empty($_REQUEST['hidp34']) || $_REQUEST['hidp34'] == "")
				{
				$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','3','4',
					 '".$_REQUEST['dnp_34']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result13=mysql_query($InsQuery);
					 
					 $auditIddp13=mysql_insert_id(); 
				}else{
							
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_34']."',
											Last_update=now() where Id='".$_REQUEST['hidp34']."'";
						 $result13=mysql_query($InsQuery);
								 
								 $auditIddp13=$_REQUEST['hidp34'];
						} 		
							 
					 
			if(empty($_REQUEST['hidp41']) || $_REQUEST['hidp41'] == "")
				{	  
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','4','1',
					 '".$_REQUEST['dnp_41']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result14=mysql_query($InsQuery);
					 
					 $auditIddp14=mysql_insert_id(); 
				}else{
							
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_41']."',
										Last_update=now() where Id='".$_REQUEST['hidp41']."'";
						 $result14=mysql_query($InsQuery);
								 
								 $auditIddp14=$_REQUEST['hidp41'];
						} 		 
					 
					 
				if(empty($_REQUEST['hidp51']) || $_REQUEST['hidp51'] == "")
				{	 
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','5','1',
					 '".$_REQUEST['dnp_51']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result15=mysql_query($InsQuery);
					 
					 $auditIddp15=mysql_insert_id(); 
					 
				}else{
							
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_51']."',
										Last_update=now() where Id='".$_REQUEST['hidp51']."'";
						$result15=mysql_query($InsQuery);
					 
					 $auditIddp15=$_REQUEST['hidp51']; 
						} 	

			if(empty($_REQUEST['hidp52']) || $_REQUEST['hidp52'] == "")
				{		
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
					 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
					 ('$svid','17','5','2',
					 '".$_REQUEST['dnp_52']."',
					 '".$month."',
					 '".$year."',
					 '1',
					 now(),'".$sspid."')";
					$result16=mysql_query($InsQuery);
					 
					 $auditIddp16=mysql_insert_id(); 
			}else{
							
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnp_52']."',
										Last_update=now() where Id='".$_REQUEST['hidp52']."'";
						 $result16=mysql_query($InsQuery);
					 
					 $auditIddp16=$_REQUEST['hidp52'];
						} 	
					/*--------------- SAVE ITEMSCORE--------------*/
					
				if(empty($_REQUEST['itemiddnp']) || $_REQUEST['itemiddnp'] == "")
						{
							$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,
								`Itemscore`,
								`Level_total1`,
								`Level_total2`,
								`Level_total3`,
								`Level_total4`,
								`Level_total5`,
								 `Month`,`Year`,`Created_on`,`Audit_By`) values
								 ('17','$svid',
								 '".$_REQUEST['item_scorednp']."',
								 '".$_REQUEST['level_totaldnp1']."',
								 '".$_REQUEST['level_totaldnp2']."',
								 '".$_REQUEST['level_totaldnp3']."',
								 '".$_REQUEST['level_totaldnp4']."',
								 '".$_REQUEST['level_totaldnp5']."',
								 '".$month."',
								 '".$year."',
								 now(),'".$sspid."')";
								$result11=mysql_query($InsQuery);
								 $auditIddpit=mysql_insert_id(); 
			  }else{
						
						$InsQuery= "update `tbl_itemscore` set `Itemscore`='".$_REQUEST['item_scorednp']."',
										`Level_total1`='".$_REQUEST['level_totaldnp1']."',
										`Level_total2`='".$_REQUEST['level_totaldnp2']."',
										`Level_total3`='".$_REQUEST['level_totaldnp3']."',
										`Level_total4`='".$_REQUEST['level_totaldnp4']."',
										`Level_total5`='".$_REQUEST['level_totaldnp5']."',
										 Last_Update=now() where Id='".$_REQUEST['itemiddnp']."'";
					 
							$result11=mysql_query($InsQuery);
							$auditIddpit=$_REQUEST['itemiddnp'];
						} 
				/*--------------- SAVE COMMENTS for DNP--------------*/
						
							if(empty($_REQUEST['Commentiddnp']) || $_REQUEST['Commentiddnp'] == "")
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
																 '17',
																 '$svid',
																 '".addslashes($_REQUEST['diagnosis_result_dnp'])."',
																 '".addslashes($_REQUEST['kaizen_idea_dnp'])."',
																 '".$month."',
																 '".$year."',
																 now(),
																 '".$sspid."'
																)
												 ";
									$result11=mysql_query($InsQuery);
									$auditCMTIDdnp=mysql_insert_id(); 
					  }else{
								
						 $UpQuery= "update `tbl_comments` 
											set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_dnp'])."',
												`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_dnp'])."',
											`Last_Update`=now() 
											where Comment_id='".$_REQUEST['Commentiddnp']."'
										 ";
							 
									$resultu11=mysql_query($UpQuery);
									$auditCMTIDdnp=$_REQUEST['Commentiddnp'];
								} 
								
					/* save AUDIT FOR DNR   */
								
								
			if(empty($_REQUEST['hidr11']) || $_REQUEST['hidr11'] == "")
					{ 
					$InsQuery="insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','1','1',
						 '".$_REQUEST['dnr_11']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result=mysql_query($InsQuery);
						$auditIddr1=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_11']."'
									,Last_update=now() where Id='".$_REQUEST['hidr11']."'";
					 
						$result1=mysql_query($InsQuery);
						$auditIddr1=$_REQUEST['hidr11'];
					} 	 

				if(empty($_REQUEST['hidr12']) || $_REQUEST['hidr12'] == "")
					{ 	 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','1','2',
						 '".$_REQUEST['dnr_12']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result2=mysql_query($InsQuery);
						$auditIddr2=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_12']."',
									Last_update=now() where Id='".$_REQUEST['hidr12']."'";
						$result2=mysql_query($InsQuery);
						$auditIddr2=$_REQUEST['hidr12'];
					} 		 
					
					if(empty($_REQUEST['hidr13']) || $_REQUEST['hidr13'] == "")
					{ 	 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','1','3',
						 '".$_REQUEST['dnr_13']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result3=mysql_query($InsQuery);
						$auditIddr3=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_13']."',
									Last_update=now() where Id='".$_REQUEST['hidr13']."'";
						$result3=mysql_query($InsQuery);
						$auditIddr3=$_REQUEST['hidr13'];
					} 	
					
					if(empty($_REQUEST['hidr14']) || $_REQUEST['hidr14'] == "")
					{ 	 
				   $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','1','4',
						 '".$_REQUEST['dnr_14']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result4=mysql_query($InsQuery);
						$auditIddr4=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_14']."',
									Last_update=now() where Id='".$_REQUEST['hidr14']."'";
							$result4=mysql_query($InsQuery);
							$auditIddr4=$_REQUEST['hidr14'];
					} 

					 if(empty($_REQUEST['hidr21']) || $_REQUEST['hidr21'] == "")
					{ 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','2','1',
						 '".$_REQUEST['dnr_21']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result5=mysql_query($InsQuery);
						$auditIddr5=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_21']."',
									Last_update=now() where Id='".$_REQUEST['hidr21']."'";
							$result5=mysql_query($InsQuery);
							$auditIddr5=$_REQUEST['hidr21'];
					} 		

					
					if(empty($_REQUEST['hidr22']) || $_REQUEST['hidr22'] == "")
					{ 
						 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','2','2',
						 '".$_REQUEST['dnr_22']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result6=mysql_query($InsQuery);
						$auditIddr6=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_22']."',
									Last_update=now() where Id='".$_REQUEST['hidr22']."'";
							$result6=mysql_query($InsQuery);
							$auditIddr6=$_REQUEST['hidr22'];
					} 	

					if(empty($_REQUEST['hidr23']) || $_REQUEST['hidr23'] == "")
					{ 
						 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','2','3',
						 '".$_REQUEST['dnr_23']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result7=mysql_query($InsQuery);
						$auditIddr7=mysql_insert_id();
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_23']."',
										Last_update=now() where Id='".$_REQUEST['hidr23']."'";
							$resultdr7=mysql_query($InsQuery);
							$auditIddr7=$_REQUEST['hidr23'];
					} 		 
							 
					if(empty($_REQUEST['hidr31']) || $_REQUEST['hidr31'] == "")
					{			 
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','3','1',
						 '".$_REQUEST['dnr_31']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result10=mysql_query($InsQuery);
						$auditIddr10=mysql_insert_id(); 
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_31']."',
									Last_update=now() where Id='".$_REQUEST['hidr31']."'";
							$result10=mysql_query($InsQuery);
							$auditIddr10=$_REQUEST['hidr31'];
					} 	

					if(empty($_REQUEST['hidr32']) || $_REQUEST['hidr32'] == "")
					{
						 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','3','2',
						 '".$_REQUEST['dnr_32']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result11=mysql_query($InsQuery);
						 $auditIddr11=mysql_insert_id(); 
					}else{
						
						 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_32']."',
									Last_update=now() where Id='".$_REQUEST['hidr32']."'";
							$result11=mysql_query($InsQuery);
							$auditIddr11=$_REQUEST['hidr32'];
					} 		 
						
					if(empty($_REQUEST['hidr41']) || $_REQUEST['hidr41'] == "")
					{	  
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','4','1',
						 '".$_REQUEST['dnr_41']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result12=mysql_query($InsQuery);
						 $auditIddr12=mysql_insert_id(); 
					}else{
							
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_41']."',
										Last_update=now() where Id='".$_REQUEST['hidr41']."'";
									$result12=mysql_query($InsQuery);
									$auditIddr12=$_REQUEST['hidr41'];
							} 		 
				if(empty($_REQUEST['hidr42']) || $_REQUEST['hidr42'] == "")
					{				 
					$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','4','2',
						 '".$_REQUEST['dnr_42']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result13=mysql_query($InsQuery);
						$auditIddr13=mysql_insert_id(); 
						 
					}else{
							
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_42']."',
										Last_update=now() where Id='".$_REQUEST['hidr42']."'";
									$result13=mysql_query($InsQuery);
									$auditIddr13=$_REQUEST['hidr42'];
							} 		 	 
						 
					if(empty($_REQUEST['hidr51']) || $_REQUEST['hidr51'] == "")
					{	 	 
						 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','5','1',
						 '".$_REQUEST['dnr_51']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result14=mysql_query($InsQuery);
						 $auditIddr14=mysql_insert_id(); 
						 
					}else{
								
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_51']."',
										Last_update=now() where Id='".$_REQUEST['hidr51']."'";
									$resultdr14=mysql_query($InsQuery);
									$auditIddr14=$_REQUEST['hidr51'];
							} 	
					if(empty($_REQUEST['hidr52']) || $_REQUEST['hidr52'] == "")
					{				 
						$InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','5','2',
						 '".$_REQUEST['dnr_52']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result15=mysql_query($InsQuery);
						 $auditIddr15=mysql_insert_id(); 
					}else{
								
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_52']."',
										Last_update=now() where Id='".$_REQUEST['hidr52']."'";
									$resultdr15=mysql_query($InsQuery);
									$auditIddr15=$_REQUEST['hidr52'];
							} 	
				if(empty($_REQUEST['hidr53']) || $_REQUEST['hidr53'] == "")
					{			 
					 $InsQuery= "insert into `saveaudit`(`Sv_id`,`Category_id`,
						 `Level`,`Sub_level`,`Audit_Check`,`audit_month`,`audit_year`,`Status`,`Created_on`,`Audit_By`) values
						 ('$svid','36','5','3',
						 '".$_REQUEST['dnr_53']."',
						 '".$month."',
						 '".$year."',
						 '1',
						 now(),'".$sspid."')";
						$result16=mysql_query($InsQuery);
						 $auditIddr16=mysql_insert_id(); 
				}else{
							
							 $InsQuery= "update `saveaudit` set `Audit_Check`='".$_REQUEST['dnr_53']."',
										Last_update=now() where Id='".$_REQUEST['hidr53']."'";
									$result16=mysql_query($InsQuery);
									$auditIddr16=$_REQUEST['hidr53'];
							} 	
						
						
		/*-----------------------=*** save Itemscore ***=------------------------*/
								
								
						if(empty($_REQUEST['itemiddnr']) || $_REQUEST['itemiddnr'] == "")
							{
								$InsQuery= "insert into `tbl_itemscore` (`Category_id`,`Sv_id`,`Itemscore`,
											`Level_total1`,
											`Level_total2`,
											`Level_total3`,
											`Level_total4`,
											`Level_total5`,
											`Month`,`Year`,`Created_on`,`Audit_By`) values
											('36','$svid',
											'".$_REQUEST['item_scorednr']."',
											'".$_REQUEST['level_totaldnr1']."',
											'".$_REQUEST['level_totaldnr2']."',
											'".$_REQUEST['level_totaldnr3']."',
											'".$_REQUEST['level_totaldnr4']."',
											'".$_REQUEST['level_totaldnr5']."',
											 '".$month."',
											 '".$year."',
											 now(),'".$sspid."')";
											$result11=mysql_query($InsQuery);
											 $auditIddrit=mysql_insert_id(); 
				  }else{
							
							$InsQuery= "update `tbl_itemscore` set `Itemscore`='".$_REQUEST['item_scorednr']."',
										`Level_total1`='".$_REQUEST['level_totaldnr1']."',
										`Level_total2`='".$_REQUEST['level_totaldnr2']."',
										`Level_total3`='".$_REQUEST['level_totaldnr3']."',
										`Level_total4`='".$_REQUEST['level_totaldnr4']."',
										`Level_total5`='".$_REQUEST['level_totaldnr5']."',
										Last_Update=now() where Id='".$_REQUEST['itemiddnr']."'";
						 
								$result11=mysql_query($InsQuery);
								$auditIddrit=$_REQUEST['itemiddnr'];
							} 
							
					/*--------------- SAVE COMMENTS for DNP--------------*/
						
						if(empty($_REQUEST['Commentiddnr']) || $_REQUEST['Commentiddnr'] == "")
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
															 '36',
															 '$svid',
															 '".addslashes($_REQUEST['diagnosis_result_dnr'])."',
															 '".addslashes($_REQUEST['kaizen_idea_dnr'])."',
															 '".$month."',
															 '".$year."',
															 now(),
															 '".$sspid."'
															)
											 ";
								$result11=mysql_query($InsQuery);
								$auditCMTIDdnr=mysql_insert_id(); 
				  }else{
							
					 $UpQuery= "update `tbl_comments` 
										set `Diagnosis_Result`='".addslashes($_REQUEST['diagnosis_result_dnr'])."',
											`Kaizen_Idea`='".addslashes($_REQUEST['kaizen_idea_dnr'])."',
										`Last_Update`=now() 
										where Comment_id='".$_REQUEST['Commentiddnr']."'
									 ";
						 
								$resultu11=mysql_query($UpQuery);
								$auditCMTIDdnr=$_REQUEST['Commentiddnr'];
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
								('17','$svid',
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
								'".$_REQUEST['categorydnp']."',
							 '".$month."',
							 '".$year."',
							 now(),'".$sspid."')";
							$result10=mysql_query($InsQuery);
							$auditIdcr=mysql_insert_id(); 
				}else{
						
					$InsQuery= "UPDATE `tbl_categoryscore` SET `Actual_score1`='".$_REQUEST['score1']."',
							`Actual_score2`='".$_REQUEST['score2']."',
							`Actual_score3`='".$_REQUEST['score3']."',
							`Actual_score4`='".$_REQUEST['score4']."',
							`Actual_score5`='".$_REQUEST['score5']."',
							`Achievement1`='".$_REQUEST['achieve1']."',
							`Achievement2`='".$_REQUEST['achieve2']."',
							`Achievement3`='".$_REQUEST['achieve3']."',
							`Achievement4`='".$_REQUEST['achieve4']."',
							`Achievement5`='".$_REQUEST['achieve5']."',
							`Category_rank`='".$_REQUEST['categorydnp']."',
							Last_updated=now() WHERE ID='".$_REQUEST['c_id']."'";
					
					 $result10=mysql_query($InsQuery);
					 $auditIdcr=$_REQUEST['c_id'];
					} 
		/************************************================== FOR COUNTERS ===================*****************************************/
					
		if($auditIddp1 != '' && $auditIddp2 != '' && $auditIddp3 != '' && $auditIddp4 != '' && $auditIddp5 != '' && $auditIddp6 != '' 
		&& $auditIddp7 != '' && $auditIddp8 != '' && $auditIddp9 != '' && $auditIddp10 != '' && $auditIddp11 != '' && $auditIddp12 != ''
		&& $auditIddp13 != '' && $auditIddp14 != '' && $auditIddp15 != '' && $auditIddp16 != '' && $auditIddpit != '' && $auditIddr1 != '' 
		&& $auditIddr2 != '' && $auditIddr3 != '' && $auditIddr4 != '' && $auditIddr5 != '' && $auditIddr6 != '' && $auditIddr7 != '' 
		&& $auditIddr10 != '' && $auditIddr11 != '' && $auditIddr12 != '' && $auditIddr13 != '' && $auditIddr14 != '' && $auditIddr15 != ''
		&& $auditIddr16 != '' && $auditIddrit != '' && $auditIdcr != '' && $auditCMTIDdnp != '' && $auditCMTIDdnr != '')
		{
			
			echo '1';
		}else{
			echo '0';
		}	
	}else{
		
		  echo '2';
		}
			
		  
?>
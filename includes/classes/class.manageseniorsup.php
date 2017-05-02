<?php 
class Manageseniorsup extends MysqlFns
{
	function Manageseniorsup()
	{
		/*global $config;
		$this->MysqlFns();
		$this->Offset			= 0;
		$this->Limit			= 10;
		$this->page				= 0;
		$this->Keyword			= '';
		$this->Operator			= '';
		$this->PerPage			= '';*/
		
		global $config;
		$this->MysqlFns();
		$this->Offset			= 0;
		$this->Limit			= 10;
		$this->Limit_ven		= 5;
		$this->page				= 0;
		$this->Keyword			= '';
		$this->Operator			= '';
		$this->PerPage			= '';
	}
function test()
	{
		global $objSmarty,$objPage;
		$where_condition="";
		
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.="and t2.Name like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by t1.Senior_Supervisor desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by t1.Senior_Supervisor asc";
			if($_REQUEST['flag']=="3")
			$where_condition.=" order by t1.Supervisor_Id desc";
			if($_REQUEST['flag']=="4")
			$where_condition.=" order by t1.Supervisor_Id asc";
			if($_REQUEST['flag']=="5")
			$where_condition.=" order by t1.Zonal_Id desc";
			if($_REQUEST['flag']=="6")
			$where_condition.=" order by t1.Zonal_Id asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by t1.Id desc";
		}

	 $SelQuery	= "SELECT *,t1.Id as mapId, t2.Name as senior,t.Name as supervisor FROM `tbl_mapping` AS t1 
			LEFT JOIN seniorsupervisor AS t2 ON t1.Senior_Supervisor = t2.Id
			LEFT JOIN supervisor AS t ON t1.Supervisor_Id = t.Id
			LEFT JOIN zonal AS t3 ON t1.Zonal_Id = t3.Id
					WHERE t1.Status =1 "." $where_condition";
			//$ExeUpQuery= $this->ExecuteQuery($SelQuery,"select");
			$i=1;
		$objSmarty->assign("i",$i);
	if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);
		$this->Limit=10;
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		if ( ($listing_split->number_of_rows > 0) )
		{
			$pagenos=round($listing_split->number_of_rows/$this->Limit);
			$rem=($listing_split->number_of_rows%$this->Limit);
			if($rem>0 && $rem <5 ){
				$pagenos=$pagenos+1;
			}
			if($_REQUEST['page']!="")
			{
				if($_REQUEST['page']-$pagenos>0)
				{
					$pagenos=$_REQUEST['page']-1;
					$i= ($this->Limit * $pagenos )-$this->Limit +1;
					$objSmarty->assign("i",$i);
				}
				if($this->Limit==$listing_split->number_of_rows)
				{
					$objSmarty->assign("i",1);
				}
			}
			$objSmarty->assign("LinkPage",$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign("PerPageNavigation",TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y'))));
		}

		if ($listing_split->number_of_rows > 0)
		{
			$rows = 0;
			$Res_Tickets	= $this->ExecuteQuery($listing_split->sql_query, "select");
		}

		if(!empty($Res_Tickets)&& is_array($Res_Tickets))
		$objSmarty->assign("CatList",$ExeUpQuery);
	}

	
	
	
function manage_seniorsup()
	{
		global $objSmarty,$objPage;
		$where_condition="";
		if($_REQUEST['pagelimit']==''){
			$this->Limit			= 10;
		}else{
		 $this->Limit=$_REQUEST['pagelimit'];
		}
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.=" where `Name` like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by Employeeid desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by Employeeid asc";
			if($_REQUEST['flag']=="3")
			$where_condition.=" order by Name desc";
			if($_REQUEST['flag']=="4")
			$where_condition.=" order by Name asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by `Name` asc";
		}

	$SelQuery	= "select * from `seniorsupervisor`"
		." $where_condition";
			
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		if ( ($listing_split->number_of_rows > 0) )
		{
			$pagenos=round($listing_split->number_of_rows/$this->Limit);
			$rem=($listing_split->number_of_rows%$this->Limit);
			if($rem>0 && $rem <5 ){
				$pagenos=$pagenos+1;
			}
			if($_REQUEST['page']!="")
			{
				if($_REQUEST['page']-$pagenos>0)
				{
					$pagenos=$_REQUEST['page']-1;
					$i= ($this->Limit * $pagenos )-$this->Limit +1;
					$objSmarty->assign("i",$i);
				}
				if($this->Limit==$listing_split->number_of_rows)
				{
					$objSmarty->assign("i",1);
				}
			}
			$objSmarty->assign("LinkPage",$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign("PerPageNavigation",TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y'))));
		}

		if ($listing_split->number_of_rows > 0)
		{
			$rows = 0;
			$Res_Tickets	= $this->ExecuteQuery($listing_split->sql_query, "select");
		}

		if(!empty($Res_Tickets)&& is_array($Res_Tickets))
		$objSmarty->assign("CatList",$Res_Tickets);
	}
function manage_seniorsup1()
	{
		global $objSmarty,$objPage;
		$where_condition="";
		if($_REQUEST['pagelimit']==''){
			$this->Limit			= 10;
		}else{
		 $this->Limit=$_REQUEST['pagelimit'];
		}
	
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.="where te.Name like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by te.Name desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by te.Name asc";
			if($_REQUEST['flag']=="3")
			$where_condition.=" order by tes.Name desc";
			if($_REQUEST['flag']=="4")
			$where_condition.=" order by tes.Name asc";
			if($_REQUEST['flag']=="5")
			$where_condition.=" order by tez.Zonal_name desc";
			if($_REQUEST['flag']=="6")
			$where_condition.=" order by tez.Zonal_name asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by t.Id desc";
		}

	 $SelQuery	= "select *,t.Id as mapId,t.Status as mapStatus, te.Name as senior,tes.Name as supervisor  from `tbl_mapping` as t 
	LEFT JOIN seniorsupervisor as te ON t.Senior_Supervisor = te.Id 
	LEFT JOIN supervisor as tes ON t.Supervisor_Id = tes.Id
	LEFT JOIN zonal AS tez ON t.Zonal_Id = tez.Id
	 $where_condition";
			
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		if ( ($listing_split->number_of_rows > 0) )
		{
			$pagenos=round($listing_split->number_of_rows/$this->Limit);
			$rem=($listing_split->number_of_rows%$this->Limit);
			if($rem>0 && $rem <5 ){
				$pagenos=$pagenos+1;
			}
			if($_REQUEST['page']!="")
			{
				if($_REQUEST['page']-$pagenos>0)
				{
					$pagenos=$_REQUEST['page']-1;
					$i= ($this->Limit * $pagenos )-$this->Limit +1;
					$objSmarty->assign("i",$i);
				}
				if($this->Limit==$listing_split->number_of_rows)
				{
					$objSmarty->assign("i",1);
				}
			}
			$objSmarty->assign("LinkPage",$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign("PerPageNavigation",TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y'))));
		}

		if ($listing_split->number_of_rows > 0)
		{
			$rows = 0;
			$Res_Tickets	= $this->ExecuteQuery($listing_split->sql_query, "select");
		}

		if(!empty($Res_Tickets)&& is_array($Res_Tickets))
		$objSmarty->assign("CatList",$Res_Tickets);
	}	
	
	
	
	
function add_seniorsup()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `seniorsupervisor`"
		              ." WHERE `Name`='".addslashes($_REQUEST['sspName'])."'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery){
		
		
		$InsQuery	= "INSERT INTO `seniorsupervisor`
						   (
							 `Employeeid`,
							 `Name`,
							 `Group_Id`,
							 `Username`,
							 `Password`,
							 `Status`,
							 `Created_on`
							 ) 
							VALUES
							(
							'".addslashes($_REQUEST['empid'])."',
							'".addslashes($_REQUEST['sspName'])."',
							'".addslashes($_REQUEST['groupname'])."',
							'".addslashes($_REQUEST['username'])."',
							'".addslashes($_REQUEST['password'])."',
								'1',
								now()
							)  "; 
									 
			$ExeInsQuery=$this->ExecuteQuery($InsQuery,"insert");
			$objSmarty->assign("SuccessMessage","Details has been added successfully");
		
			$objSmarty->assign("",$_REQUEST);
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Details already exists");
			$objSmarty->assign("vid",$_REQUEST);
		}
	}
function selectsspById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
			$selQuery="select * from `seniorsupervisor` where Id='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("seniorsup",$result);
		}
		else
		{
			redirect('manage_supervisor.php');
		}
	}
	
	
function selectssupervisorById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
			$selQuery="select * from `supervisor` where Id='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("seniorsup",$result);
		}
		else
		{
			redirect('manage_seniorsup.php');
		}
	}	
	
	
function update_seniorsup()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `seniorsupervisor`
						WHERE 
						`Name`='".addslashes($_REQUEST['sspName'])."' and Id !='".$_REQUEST['Ident']."'";

		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$upQuery="update `seniorsupervisor` set
										`Name`='".addslashes($_REQUEST['sspName'])."',
										`Employeeid`='".addslashes($_REQUEST['empid'])."',
										 `Group_Id`='".addslashes($_REQUEST['groupname'])."',
										`Username`='".addslashes($_REQUEST['username'])."',
										`Password`='".addslashes($_REQUEST['password'])."',
										
										`Last_update`=NOW() 
										
										where Id='".$_REQUEST['Ident']."'";
			$this->ExecuteQuery($upQuery,"update");
			$objSmarty->assign("SuccessMessage","Details has been updated successfully");
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Details already exists");
		}

	}
	
	function update_supervisor()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `supervisor`
						WHERE 
						`Name`='".addslashes($_REQUEST['sspName'])."' and Id !='".$_REQUEST['Ident']."'";

		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$upQuery="update `supervisor` set
										`Name`='".addslashes($_REQUEST['sspName'])."',
										`Employeeid`='".addslashes($_REQUEST['empid'])."',
										`Group_Id`='".addslashes($_REQUEST['groupname'])."',
										`Zonal_id`='".addslashes($_REQUEST['zonalid'])."',
										`Last_update`=NOW() 										
										where Id='".$_REQUEST['Ident']."'";
			$this->ExecuteQuery($upQuery,"update");
			$objSmarty->assign("SuccessMessage","Details has been updated successfully");
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Details already exists");
		}

	}

	
function manage_supervisor()
	{
		global $objSmarty,$objPage;
		$where_condition="";
		if($_REQUEST['pagelimit']==''){
			$this->Limit			= 10;
		}else{
		 $this->Limit=$_REQUEST['pagelimit'];
		}
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.=" where `Name` like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by Employeeid desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by Employeeid asc";
			if($_REQUEST['flag']=="3")
			$where_condition.=" order by Name desc";
			if($_REQUEST['flag']=="4")
			$where_condition.=" order by Name asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by `Name` asc";
		}

		$SelQuery	= "SELECT * FROM `seniorsupervisor` "
						." $where_condition";
			
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		if ( ($listing_split->number_of_rows > 0) )
		{
			$pagenos=round($listing_split->number_of_rows/$this->Limit);
			$rem=($listing_split->number_of_rows%$this->Limit);
			if($rem>0 && $rem <5 ){
				$pagenos=$pagenos+1;
			}
			if($_REQUEST['page']!="")
			{
				if($_REQUEST['page']-$pagenos>0)
				{
					$pagenos=$_REQUEST['page']-1;
					$i= ($this->Limit * $pagenos )-$this->Limit +1;
					$objSmarty->assign("i",$i);
				}
				if($this->Limit==$listing_split->number_of_rows)
				{
					$objSmarty->assign("i",1);
				}
			}
			$objSmarty->assign("LinkPage",$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign("PerPageNavigation",TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y'))));
		}

		if ($listing_split->number_of_rows > 0)
		{
			$rows = 0;
			$Res_Tickets	= $this->ExecuteQuery($listing_split->sql_query, "select");
		}

		if(!empty($Res_Tickets)&& is_array($Res_Tickets))
		$objSmarty->assign("CatList",$Res_Tickets);
	}

function getzonalbyid($id)
	{
		global $objSmarty;
		$selquery="select  * from zonal where Id='$id'";
		$ExeUpQuery= $this->ExecuteQuery($selquery,"select");
		$objSmarty->assign("zonal",$ExeUpQuery);
	}
function getzonalname()
	{
		global $objSmarty;
		$selquery="select  * from zonal";
		$ExeUpQuery= $this->ExecuteQuery($selquery,"select");
		$objSmarty->assign("zonalname",$ExeUpQuery);
	}
function getsupername()
	{
		global $objSmarty;
		$selquery="select  * from supervisor";
		$ExeUpQuery= $this->ExecuteQuery($selquery,"select");
		$objSmarty->assign("super",$ExeUpQuery);
	}
function getseniorsuper()
	{
		global $objSmarty;
		$selquery="select  * from seniorsupervisor";
		$ExeUpQuery= $this->ExecuteQuery($selquery,"select");
		$objSmarty->assign("senior",$ExeUpQuery);
	}
function add_supervisor()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `supervisor`"
		              ." WHERE `Name`='".addslashes($_REQUEST['sspName'])."'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery){
		
		
		$InsQuery	= "INSERT INTO `supervisor`
						   (
							 `Employeeid`,
							 `Name`,
							 `Group_Id`,
							 `Zonal_id`,
							 `Status`,
							 `Created_on`
							 ) 
							VALUES
							(
							'".addslashes($_REQUEST['empid'])."',
							'".addslashes($_REQUEST['sspName'])."',
							'".addslashes($_REQUEST['groupname'])."',
							'".addslashes($_REQUEST['zonalid'])."',
								'1',
								now()
							)  "; 
									 
			$ExeInsQuery=$this->ExecuteQuery($InsQuery,"insert");
			$objSmarty->assign("SuccessMessage","Details has been added successfully");
		
			$objSmarty->assign("",$_REQUEST);
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Details already exists");
			$objSmarty->assign("vid",$_REQUEST);
		}
	}
function test_supervisor()
	{
		global $objSmarty,$objPage;
		$where_condition="";
		if($_REQUEST['pagelimit']==''){
			$this->Limit			= 10;
		}else{
		 $this->Limit=$_REQUEST['pagelimit'];
		}
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.=" where `Name` like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by Employeeid desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by Employeeid asc";
			if($_REQUEST['flag']=="3")
			$where_condition.=" order by Name desc";
			if($_REQUEST['flag']=="4")
			$where_condition.=" order by Name asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by `Name` asc";
		}

	$SelQuery	= "select * from `supervisor`"
		." $where_condition";
			
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		if ( ($listing_split->number_of_rows > 0) )
		{
			$pagenos=round($listing_split->number_of_rows/$this->Limit);
			$rem=($listing_split->number_of_rows%$this->Limit);
			if($rem>0 && $rem <5 ){
				$pagenos=$pagenos+1;
			}
			if($_REQUEST['page']!="")
			{
				if($_REQUEST['page']-$pagenos>0)
				{
					$pagenos=$_REQUEST['page']-1;
					$i= ($this->Limit * $pagenos )-$this->Limit +1;
					$objSmarty->assign("i",$i);
				}
				if($this->Limit==$listing_split->number_of_rows)
				{
					$objSmarty->assign("i",1);
				}
			}
			$objSmarty->assign("LinkPage",$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign("PerPageNavigation",TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y'))));
		}

		if ($listing_split->number_of_rows > 0)
		{
			$rows = 0;
			$Res_Tickets	= $this->ExecuteQuery($listing_split->sql_query, "select");
		}

		if(!empty($Res_Tickets)&& is_array($Res_Tickets))
		$objSmarty->assign("CatList",$Res_Tickets);
	}
	
function getZonalNameById($id)
{
	
	global $objSmarty;
		$selquery="select  * from zonal where Id='$id'";
		$ExeUpQuery= $this->ExecuteQuery($selquery,"select");
		return $ExeUpQuery[0]['Zonal_name'];
}	



							/* ---- Manage Mapping ----- */
function manage_Teams(){
		global $objSmarty,$objPage;
		$where_condition="";
		
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.="and t2.Name like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by t1.Senior_Supervisor desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by t1.Senior_Supervisor asc";
			if($_REQUEST['flag']=="3")
			$where_condition.=" order by t1.Supervisor_Id desc";
			if($_REQUEST['flag']=="4")
			$where_condition.=" order by t1.Supervisor_Id asc";
			if($_REQUEST['flag']=="5")
			$where_condition.=" order by t1.Zonal_Id desc";
			if($_REQUEST['flag']=="6")
			$where_condition.=" order by t1.Zonal_Id asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by t1.Id desc";
		}

		/*$SelQuery	= "SELECT *,t1.Id as mapId, t2.Name as senior,t.Name as supervisor FROM `tbl_mapping` AS t1 
						LEFT JOIN seniorsupervisor AS t2 ON t1.Senior_Supervisor = t2.Id
						LEFT JOIN supervisor AS t ON t1.Supervisor_Id = t.Id
						LEFT JOIN zonal AS t3 ON t1.Zonal_Id = t3.Id
					WHERE t1.Status =1 "." $where_condition";*/
		$SelQuery	= "SELECT * FROM `tbl_mapping` 
					WHERE t1.Status =1 ";
         					 if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
         					 $i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
         					 else
         					 $i=1;
         					 $objSmarty->assign("i",$i);

         					 $listing_split = new MsplitPageResults($SelQuery, $this->Limit);
         					 if ( ($listing_split->number_of_rows > 0) )
         					 {
         					 	$pagenos=round($listing_split->number_of_rows/$this->Limit);
         					 	$rem=($listing_split->number_of_rows%$this->Limit);
         					 	if($rem>0 && $rem <5 ){

         					 		$pagenos=$pagenos+1;
         					 	}
         					 	if($_REQUEST['page']!="")
         					 	{
         					 		if($_REQUEST['page']-$pagenos>0)
         					 		{

         					 			$pagenos=$_REQUEST['page']-1;
         					 			$i= ($this->Limit * $pagenos )-$this->Limit +1;
         					 			$objSmarty->assign("i",$i);
         					 			$objSmarty->assign("pageno",$pagenos);
         					 		}
         					 		if($this->Limit==$listing_split->number_of_rows)
         					 		{
         					 			$objSmarty->assign("i",1);
         					 		}
         					 	}
         					 	$objSmarty->assign("LinkPage",$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
         					 	$objSmarty->assign("PerPageNavigation",TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y'))));
         					 }

         					 if ($listing_split->number_of_rows > 0)
         					 {
         					 	$rows = 0;
         					 	$Res_Tickets	= $this->ExecuteQuery($listing_split->sql_query, "select");
         					 }

         					 if(!empty($Res_Tickets)&& is_array($Res_Tickets))
         					 $objSmarty->assign("CatList",$Res_Tickets);
	}
	




	
	/* ---- Add Mapping ----- */
	
	function add_mapping()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `tbl_mapping`"
		              ." WHERE `Supervisor_Id`='".addslashes($_REQUEST['supervisor'])."'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery){
		
		
		$InsQuery	= "INSERT INTO `tbl_mapping`
						   (
							 `Senior_Supervisor`,
							 `Zonal_Id`,
							 `Supervisor_Id`,
							 `Status`,
							 `Created_on`
							 ) 
							VALUES
							(
							'".addslashes($_REQUEST['Seniorsuper'])."',
							'".addslashes($_REQUEST['zonalid'])."',
							'".addslashes($_REQUEST['supervisor'])."',
							'1',
								now()
							)  "; 
									 
			$ExeInsQuery=$this->ExecuteQuery($InsQuery,"insert");
			$objSmarty->assign("SuccessMessage","Details has been added successfully");
		
			$objSmarty->assign("",$_REQUEST);
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Details already exists");
			$objSmarty->assign("vid",$_REQUEST);
		}
	}
	
	
	function update_mapping()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `tbl_mapping`"
		              ." WHERE `Supervisor_Id`='".addslashes($_REQUEST['supervisor'])."'and Id!='".$_REQUEST['Ident']."'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$upQuery="update `tbl_mapping` set
										`Senior_Supervisor`='".addslashes($_REQUEST['Seniorsuper'])."',
										`Zonal_id`='".addslashes($_REQUEST['zonalid'])."',
										`Supervisor_Id`='".addslashes($_REQUEST['supervisor'])."',
										`Last_update`=NOW() 										
										 where Id='".$_REQUEST['Ident']."'";
			$this->ExecuteQuery($upQuery,"update");
			$objSmarty->assign("SuccessMessage","Details has been updated successfully");
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Details already exists");
		}

	}
	function selectsenoirsupById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
		 $selQuery="select * from `seniorsupervisor`";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("seniorsup",$result);
		}
		else
		{
			redirect('manage_mapping.php');
		}
	}
function selectmappingById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
		 $selQuery="select * from `tbl_mapping` where Id='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("map",$result);
		}
		else
		{
			redirect('manage_mapping.php');
		}
	}
function selectsuperById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
		 $selQuery="select * from `supervisor`";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("super",$result);
		}
		else
		{
			redirect('manage_mapping.php');
		}
	}
	
	
	
	function getsupernameId($id)
	{
		global $objSmarty;
		$selquery="select  * from supervisor where Id='".$id."'";
		 $row1 = mysql_query($selquery);
		  $ressup=mysql_fetch_array($row1);
          return $ressup['Name'];
	}
	function getseniorsuperId($id)
	{
		global $objSmarty;
		$selquery="select  * from seniorsupervisor where Id='".$id."'";
		  $row1 = mysql_query($selquery);
		  $res = mysql_fetch_array($row1);
          return $res['Name'];
		
	}
	function getzonalnameId($id)
	{
		global $objSmarty;
		  $selquery="select  * from zonal where Id='$id'";
		  $row1 = mysql_query($selquery);
		  $reszon = mysql_fetch_array($row1);
          return $reszon['Zonal_name'];
		
	}
	
function getgroup()
	{
		global $objSmarty;
		$selquery="select  * from `tbl_group`";
		$ExeUpQuery= $this->ExecuteQuery($selquery,"select");
		$objSmarty->assign("group",$ExeUpQuery);
	}
	
	
	
										/* ---- Cross Check ----- */
	
	function manage_cross()
	{
		global $objSmarty,$objPage;
		$where_condition="";
		if($_REQUEST['pagelimit']==''){
			$this->Limit			= 10;
		}else{
		 $this->Limit=$_REQUEST['pagelimit'];
		}
	
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.="where se.Name like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by se.Name desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by se.Name asc";
			if($_REQUEST['flag']=="3")
			$where_condition.=" order by tes.Name desc";
			if($_REQUEST['flag']=="4")
			$where_condition.=" order by tes.Name asc";
			if($_REQUEST['flag']=="5")
			$where_condition.=" order by cr.Name desc";
			if($_REQUEST['flag']=="6")
			$where_condition.=" order by cr.Name asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by cr.Id desc";
		}

	 $SelQuery	= "select *,cr.Id as mapId,cr.Status as mapStatus,cr.Name as crossname,cr.Password as crosspass,se.Name as senior,tes.Name as supervisor  from `tbl_cross` as cr
	LEFT JOIN seniorsupervisor as se ON cr.Senior_Supervisor = se.Id 
	LEFT JOIN supervisor as tes ON cr.Supervisor = tes.Id
	$where_condition";
			
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		if ( ($listing_split->number_of_rows > 0) )
		{
			$pagenos=round($listing_split->number_of_rows/$this->Limit);
			$rem=($listing_split->number_of_rows%$this->Limit);
			if($rem>0 && $rem <5 ){
				$pagenos=$pagenos+1;
			}
			if($_REQUEST['page']!="")
			{
				if($_REQUEST['page']-$pagenos>0)
				{
					$pagenos=$_REQUEST['page']-1;
					$i= ($this->Limit * $pagenos )-$this->Limit +1;
					$objSmarty->assign("i",$i);
				}
				if($this->Limit==$listing_split->number_of_rows)
				{
					$objSmarty->assign("i",1);
				}
			}
			$objSmarty->assign("LinkPage",$listing_split->display_count(TEXT_DISPLAY_NUMBER_OF_RESULT));
			$objSmarty->assign("PerPageNavigation",TEXT_RESULT_PAGE1 . ' ' . $listing_split->display_links($this->Limit, get_all_get_params(array('page', 'info', 'x', 'y'))));
		}

		if ($listing_split->number_of_rows > 0)
		{
			$rows = 0;
			$Res_Tickets	= $this->ExecuteQuery($listing_split->sql_query, "select");
		}

		if(!empty($Res_Tickets)&& is_array($Res_Tickets))
		$objSmarty->assign("CatList",$Res_Tickets);
	}	
	
	
	
	function add_cross()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `tbl_Cross`"
		              ." WHERE `Senior_Supervisor`='".addslashes($_REQUEST['Seniorsuper'])."' and `Supervisor`='".addslashes($_REQUEST['supervisor'])."'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery){
		
		
		$InsQuery	= "INSERT INTO `tbl_Cross`
						   (
							 `Senior_Supervisor`,
							 `Supervisor`,
							 `Name`,
							 `Password`,
							 `Status`,
							 `CreatedDate`
							 ) 
							VALUES
							(
							'".addslashes($_REQUEST['Seniorsuper'])."',
							'".addslashes($_REQUEST['supervisor'])."',
							'".addslashes($_REQUEST['name'])."',
							'".addslashes($_REQUEST['pass'])."',
							'1',
								now()
							) "; 
									 
			$ExeInsQuery=$this->ExecuteQuery($InsQuery,"insert");
			$objSmarty->assign("SuccessMessage","Details has been added successfully");
		
			$objSmarty->assign("",$_REQUEST);
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Details already exists");
			$objSmarty->assign("vid",$_REQUEST);
		}
	}
	
	
	function update_cross()
	{
		global $objSmarty;
	 $SelQuery	= "SELECT * from `tbl_cross`"
		              ." WHERE `Senior_Supervisor`='".addslashes($_REQUEST['Seniorsuper'])."' and `Supervisor`='".addslashes($_REQUEST['supervisor'])."'and Id!='".$_REQUEST['Ident']."'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$upQuery="update `tbl_cross` set
										`Senior_Supervisor`='".addslashes($_REQUEST['Seniorsuper'])."',
										`Supervisor`='".addslashes($_REQUEST['supervisor'])."',
										`Name`='".addslashes($_REQUEST['name'])."',
										`Password`='".addslashes($_REQUEST['pass'])."',
										
										`updatedDate`=NOW() 										
										 where Id='".$_REQUEST['Ident']."'";
			$this->ExecuteQuery($upQuery,"update");
			$objSmarty->assign("SuccessMessage","Details has been updated successfully");
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Details already exists");
		}

	}
	
	function selectcrossById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
		 $selQuery="select * from `tbl_cross` where Id='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("cross",$result);
		}
		else
		{
			redirect('manage_cross.php');
		}
	}
	
}
?>
	
<?php 
class Managesuper extends MysqlFns
{
	function Managesuper()
	{
		global $config;
		$this->MysqlFns();
		$this->Offset			= 0;
		$this->Limit			= 10;
		$this->page				= 0;
		$this->Keyword			= '';
		$this->Operator			= '';
		$this->PerPage			= '';
	}


function manage_mapping()
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
			$where_condition.=" order by t1.Id desc";
			//$where_condition.=" order by `Name` asc";
		}

	 $SelQuery="SELECT * FROM `tbl_mapping` AS t1 
			LEFT JOIN seniorsupervisor AS t2 ON t1.Senior_Supervisor = t2.Id
			LEFT JOIN supervisor AS t ON t1.Supervisor_Id = t.Id
			LEFT JOIN zonal AS t3 ON t1.Zonal_Id = t3.Id
					WHERE t1.Status =1"." $where_condition";		
			//$ExeQuery=mysql_query($selQuery);
	/*if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
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

		if(!empty($Res_Tickets)&& is_array($Res_Tickets))*/
		$objSmarty->assign("CatList",$Res_Tickets);
	}
}
?>	
	
<?php
/*	Class Function for Admin	*/

class ManageAds extends MysqlFns
{
	function ManageAds()
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
	function manage_duration()
	{
		global $objSmarty,$objPage;

		$where_condition="";

		if($_REQUEST['keyword']!="")
		$where_condition.=" where `AdsDuration` like '%".addslashes(trim($_REQUEST['keyword']))."%'";
			
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by AdsDuration asc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by AdsDuration desc";

		}else{
			$where_condition.=" order by `ID` desc";
		}
		$SelQuery	= "select * from `tbl_adsduration`"
		."$where_condition";
			
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='' )
		$_REQUEST['page']="";
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
		$objSmarty->assign("PriceList",$Res_Tickets);
	}


	function manage_servicecharge()
	{
		global $objSmarty,$objPage;

		$where_condition="";

		if($_REQUEST['keyword']!="")
		$where_condition.=" where `AdsDuration` like '%".addslashes(trim($_REQUEST['keyword']))."%'";
			
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by AdsDuration asc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by AdsDuration desc";

		}else{
			$where_condition.=" order by `ID` desc";
		}
		$SelQuery	= "select * from `tbl_servicecharge`"
		."$where_condition";
			
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='' )
		$_REQUEST['page']="";
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
		$objSmarty->assign("PriceList",$Res_Tickets);
	}

	function add_duration(){
		global $objSmarty;
		$selQuery="select * from tbl_adsduration where AdsDuration='".addslashes($_REQUEST['period'])."'";
		$result=$this->ExecuteQuery($selQuery,"select");
		if(!$result)
		{
			$insQuery="insert into tbl_adsduration(`AdsDuration`,`Price`,`UpdateDate`,`Status`)
		
									values ('".addslashes($_REQUEST['period'])."','".addslashes($_REQUEST['price'])."',now(),'1') ";
			$this->ExecuteQuery($insQuery,"insert");
			$objSmarty->assign("price",'');
			$objSmarty->assign("SuccessMessage","Ads price has been added successfully");
		}else{
			$objSmarty->assign("ErrorMessage","Ads Price already exist");
		}
	}

	function selectDurationById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!=''){
			$selQuery="select * from tbl_adsduration where ID='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("Duration",$result);
		}
		else{
			redirect('manage_adsDuration.php');
		}
	}

	function selectServiceChargeById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
			$selQuery="select * from `tbl_servicecharge` where ID='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("Service",$result);
		}
		else
		{
			redirect('manage_servicecharge.php');
		}
	}

	function update_duration()
	{
		global $objSmarty;
		$upQuery="update `tbl_adsduration` set
										Price='".addslashes($_REQUEST['price'])."',
										UpdateDate=now()
										where ID='".$_REQUEST['Ident']."'";
		$this->ExecuteQuery($upQuery,"update");
		$objSmarty->assign("SuccessMessage","Ads Price has been updated successfully");

	}
	function advsrch()
	{
		global $objSmarty;
		$this->Limit			= 12;
		$selQuery="select * from product order by CreatedDate desc";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$ExeSelQuery= $this->ExecuteQuery($SelQuery,"select");
	   	//$objSmarty->assign("product",$ExeSelQuery);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
	}
	
	function brandproduct()
	{
		global $objSmarty;
		$this->Limit			= 12;
       	$selQuery="select * from brands where brandId !='' GROUP BY brandName ";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		$objSmarty->assign("searchWhere",$whereCondition);
	}
	
function sortproductforadvsrch($sortBy){
		global $objSmarty;
		$this->Limit			= 12;
		$objSmarty->assign("sortBy",$sortBy);
		if($sortBy=='hightolow'){
			$whereCondition="order by SalePrice desc";
		}else if($sortBy=='lowtohigh'){
			$whereCondition="order by SalePrice asc";
		}else if($sortBy=='mostviewed'){
			$whereCondition="AND Mostview='1'";
		}else if($sortBy=='featured'){
			$whereCondition="AND  feature='1'";
		}else{
			$whereCondition="";
		}
		$selQuery="select * from product where ID!='' $whereCondition";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		$objSmarty->assign("searchWhere",$whereCondition);
		//echo $resultCnt;
	}


	function newproduct()
	{
		global $objSmarty;
		$this->Limit			= 12;
		/*$SelQuery	= "SELECT * from `tbl_brands`"
		 ." WHERE `Status`='1' or `Id`=(select `brand_id` from `product`"
		 ." WHERE `ID`='".$_REQUEST['Ident']."') GROUP BY brand_name";*/

		$SelQuery	= "select * from product order by CreatedDate desc  ";
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
		$objSmarty->assign("product",$Res_Tickets);
		//$ExeSelQuery= $this->ExecuteQuery($SelQuery,"select");
		//$objSmarty->assign("product",$ExeSelQuery);
		$resultCnt=$this->ExecuteQuery($SelQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		return $ExeSelQuery;
	}
	
function sortproductfornew($sortBy){
		global $objSmarty;
		$this->Limit			= 12;
		$objSmarty->assign("sortBy",$sortBy);
		if($sortBy=='hightolow'){
			$whereCondition="order by SalePrice desc";
		}else if($sortBy=='lowtohigh'){
			$whereCondition="order by SalePrice asc";
		}else if($sortBy=='mostviewed'){
			$whereCondition=" AND Mostview='1'";
		}else if($sortBy=='featured'){
			$whereCondition="AND  feature='1'";
		}else{
			$whereCondition="";
		}
		$selQuery="select * from product where ID!=''$whereCondition";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		$objSmarty->assign("searchWhere",$whereCondition);
		//echo $resultCnt;
	}

	function update_service()
	{
		global $objSmarty;
		$upQuery="update `tbl_servicecharge` set
										`ServiceCharge`='".addslashes($_REQUEST['price'])."',
										UpdateDate=now()
										where ID='".$_REQUEST['Ident']."'";
		$this->ExecuteQuery($upQuery,"update");
		$objSmarty->assign("SuccessMessage","Service Charge has been updated successfully");

	}

	/* ------------------- Manage Adds Start Here ---------------------*/

	function manage_ads()
	{
		global $objSmarty,$objPage;

		$where_condition="";

		if($_REQUEST['keyword']!="")
		$where_condition.=" where `ProductName` like '%".addslashes(trim($_REQUEST['keyword']))."%'";

		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by ProductName asc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by ProductName desc";

		}else{
			$where_condition.=" order by `ProductName` desc";
		}
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$_REQUEST['page']="";
		$SelQuery	= "select * from `product`"
		."$where_condition";

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
		$objSmarty->assign("AdsList",$Res_Tickets);
	}
	function feature($id){
		global $objSmarty;

		$selQuery="select * from product where ID='$id'";
		$result=$this->ExecuteQuery($selQuery,"select");
			
			
		$upQuery="update product set `feature`='1'
			where ID='".$id."'"; 
		$this->ExecuteQuery($upQuery,"update");
	}

	function setFeatured($type,$status,$id){
		global $objSmarty;
			
		if($type =='1'){
			$upQuery="update product set `feature`='".$status."'
			where ID='".$id."'";
			$this->ExecuteQuery($upQuery,"update");
		}
		if($type=='2'){
			$upQuery="update product set `Mostview`='".$status."'
			where ID='".$id."'"; 
			$this->ExecuteQuery($upQuery,"update");
		}
	    if($type=='3'){
			$upQuery="update product set `Giftset`='".$status."'
			where ID='".$id."'"; 
			$this->ExecuteQuery($upQuery,"update");
		}
		$objSmarty->assign("SuccessMessage","The product has been updated successfully");
	}
	
function setTopsellers($type,$id){
		global $objSmarty;
		
		$upQuery="update brands set `Topsellers`='".$type."'
			where brandId='".$id."'";
			$this->ExecuteQuery($upQuery,"update");
		     
	}
	
function getTopsellersproduct()
            {
		global $objSmarty;
		$this->Limit			= 12;
	 $SelQuery	= "select * from product as p
           left join brands as b on p.Brand=b.brandId
           where b.Topsellers='1'";
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
		    $objSmarty->assign("product",$Res_Tickets);
		   $resultCnt=$this->ExecuteQuery($SelQuery, "norows");
		    $objSmarty->assign("resultCnt",$resultCnt);
			$result=$this->ExecuteQuery($SelQuery,"select");
			//$objSmarty->assign("product",$result);
		     
	}
	
function setGiftset($type,$id)
    {
		
	        global $objSmarty;
			$upQuery="update product set `Giftset`='".$status."'
			where productId='".$id."'";
			$this->ExecuteQuery($upQuery,"update");
		     
	}
	
function getgiftproduct()
            {
		global $objSmarty;
		
		$this->Limit			= 12;
		  $SelQuery	= "select * from product where Giftset=1";
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
		$objSmarty->assign("product",$Res_Tickets);
			
			$resultCnt=$this->ExecuteQuery($SelQuery, "norows");
		    $objSmarty->assign("resultCnt",$resultCnt);
			//$result=$this->ExecuteQuery($SelQuery,"select");
			//$objSmarty->assign("product",$result);
		     $objSmarty->assign("SuccessMessage","The product has been updated successfully");
	}
	

	function add_ads(){

		global $objSmarty;
		if ($_FILES["ImageAds"]["size"] > 2097152)
		{
			$objSmarty->assign("ErrorMessage","Only .jpg and .png images below 2 MB can be uploaded");
		}
		else
		{
			$filename =time().$_FILES['ImageAds']['name'];
			$add="../Slides/$filename";
			@move_uploaded_file($_FILES['ImageAds']['tmp_name'], $add);
			$MyThumb = new Thumbnail("../Slides/$filename", 234, 165, "../Slides/"."thumb_".$filename);
			$MyThumb->Output();

			$insQuery="insert into tbl_ads(`CompanyName`,`Image`,`URL`,`Desc`,`DisplayPeriod`,`PaidAmount`,`UpdateDate`,`Status`)
			    values ('".addslashes($_REQUEST['CompanyName'])."','$filename','".addslashes($_REQUEST['URL'])."','".addslashes($_REQUEST['description'])."','".addslashes($_REQUEST['duration'])."','".addslashes($_REQUEST['amount'])."',now(),'1') ";
			$this->ExecuteQuery($insQuery,"insert");
			$objSmarty->assign("ads",'');
			redirect('add_ads.php?suc=1');

		}

	}

	function selectproduct(){
		global $objSmarty;
		$this->Limit			= 12;
		$selQuery="select * from product where ID!=''and SecondaryCategory='Women-perfume'";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		$whereCondition="and SecondaryCategory='Women-perfume'";
		$objSmarty->assign("searchWhere",$whereCondition);
		//echo $resultCnt;
	}

	function sortproductforwomen($sortBy){
		global $objSmarty;
		$this->Limit			= 12;
		$objSmarty->assign("sortBy",$sortBy);
		if($sortBy=='hightolow'){
			$whereCondition="AND SecondaryCategory='Women-perfume' order by SalePrice desc";
		}else if($sortBy=='lowtohigh'){
			$whereCondition="AND SecondaryCategory='Women-perfume' order by SalePrice asc";
		}else if($sortBy=='mostviewed'){
			$whereCondition="AND SecondaryCategory='Women-perfume' AND Mostview='1'";
		}else if($sortBy=='featured'){
			$whereCondition="AND SecondaryCategory='Women-perfume' AND feature='1'";
		}else{
			$whereCondition="AND SecondaryCategory='Women-perfume'";
		}
		$selQuery="select * from product where ID!='' $whereCondition";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		$objSmarty->assign("searchWhere",$whereCondition);
		//echo $resultCnt;
	}

	function getproductbyid($id){
		global $objSmarty;

		$selQuery="select * from product where ID='$id'";

		$result=$this->ExecuteQuery($selQuery,"select");
		$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		//echo $resultCnt;
	}
	function getProductName($id){
		global $objSmarty;
		$selQuery="select * from product where ID='".$id."'";
		$result=$this->ExecuteQuery($selQuery,"select");
		$str = $result[0][ProductName];
		$name=explode("-",$str);
		// echo $name[0];
		$objSmarty->assign("productname",$name[0]);
		$objSmarty->assign("product1",$name[1]);
		//return $name[0];
	}
function selectproduct1(){
		global $objSmarty;
		$this->Limit			= 12;
		$selQuery="select * from product where ID!='' and SecondaryCategory='Men-cologne'";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		$whereCondition="and SecondaryCategory='Men-cologne'";
		$objSmarty->assign("searchWhere",$whereCondition);
	}

function sortproductformen($sortBy){
		global $objSmarty;
		$this->Limit			= 12;
		$objSmarty->assign("sortBy",$sortBy);
		if($sortBy=='hightolow'){
			$whereCondition="AND SecondaryCategory='men-cologne' order by SalePrice desc";
		}else if($sortBy=='lowtohigh'){
			$whereCondition="AND SecondaryCategory='men-cologne' order by SalePrice asc";
		}else if($sortBy=='mostviewed'){
			$whereCondition="AND SecondaryCategory='men-cologne' AND Mostview='1'";
		}else if($sortBy=='featured'){
			$whereCondition="AND SecondaryCategory='men-cologne' AND feature='1'";
		}else{
			$whereCondition="AND SecondaryCategory='men-cologne'";
		}
		$selQuery="select * from product where ID!=''$whereCondition";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		$objSmarty->assign("searchWhere",$whereCondition);
		//echo $resultCnt;
	}

function sortproductforsrch($sortBy,$search){
		global $objSmarty;
		$this->Limit			= 12;
		$objSmarty->assign("sortBy",$sortBy);
		if($sortBy=='hightolow'){
			$whereCondition=" order by SalePrice desc";
		}else if($sortBy=='lowtohigh'){
			$whereCondition=" order by SalePrice asc";
		}else if($sortBy=='mostviewed'){
			$whereCondition=" AND Mostview='1'";
		}else if($sortBy=='featured'){
			$whereCondition="  AND feature='1'";
		}else{
			$whereCondition="'";
		}
		$selQuery="select * from product where ID!='' and  ProductName like '%".$search."%' $whereCondition";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
		$objSmarty->assign("searchWhere",$whereCondition);
		//echo $resultCnt;
	}

	function searchproduct1(){
		global $objSmarty;
		$this->Limit			= 12;
		$selQuery="select * from product where  Productname like '%".$_REQUEST[search]."%'";
		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);

		$listing_split = new MsplitPageResults($selQuery, $this->Limit);
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
		$objSmarty->assign("product",$Res_Tickets);
		//$result=$this->ExecuteQuery($selQuery,"select");
		//$objSmarty->assign("product",$result);
		$resultCnt=$this->ExecuteQuery($selQuery, "norows");
		$objSmarty->assign("resultCnt",$resultCnt);
	}
	function Men($id){
		global $objSmarty;
		$selQuery="select * from product where ID='".$id."'";
		$result=$this->ExecuteQuery($selQuery,"select");
		$str = $result[0][ProductName];
		$names=explode("-",$str);
		// echo $name[0];
		$objSmarty->assign("productname",$names[0]);
		$objSmarty->assign("product2",$names[1]);
		//return $name[0];
	}

	function selectAdsById(){
		global $objSmarty;
		if($_REQUEST['Ident']!=''){
			//$selQuery="select * ,DATE_FORMAT(EndDate, '%b %d, %Y') as EndDate,DATE_FORMAT(StartDate, '%b %d, %Y') as StartDate from tbl_ads where AdsID='".$_REQUEST['Ident']."'";
			$selQuery="select * from product where ProductID='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("Ads",$result);
			$res=$result[0][ProductImageURL];
		}
		else{
			redirect('manage_ads.php');
		}

		if($result[0]['Country']!=""){
			$sequery3="SELECT Country_Name from tbl_country where Country_Id = ".$result[0]['Country'];
			$result3=$this->ExecuteQuery($sequery3,"select");
			$objSmarty->assign("Countryname",$result3[0]['Country_Name']);
		}
	}
	function update_ads(){
		global $objSmarty;
		if($_FILES['ImageAds']['name']!=''){
			if ($_FILES["ImageAds"]["size"] > 2097152)
			{
				$objSmarty->assign("ErrorMessage","Only .jpg and .png images below 2 MB can be uploaded");
			}
			else
			{
				$filename =time().$_FILES['ImageAds']['name'];
				$add="../Slides/$filename";
				@move_uploaded_file($_FILES['ImageAds']['tmp_name'], $add);
				$MyThumb = new Thumbnail("../Slides/$filename", 234, 165, "../Slides/"."thumb_".$filename);
				$MyThumb->Output();
				$upQuery="update tbl_ads set
											`CompanyName`='".addslashes($_REQUEST['CompanyName'])."',
											`URL`='".addslashes($_REQUEST['URL'])."',
											`Image`='$filename',
											`Desc`='".addslashes($_REQUEST['description'])."',
											`DisplayPeriod`='".addslashes($_REQUEST['duration'])."',
											`PaidAmount`='".addslashes($_REQUEST['amount'])."',
											`UpdateDate`=now()
											where AdsID='".$_REQUEST['Ident']."'";
				$this->ExecuteQuery($upQuery,"update");
				$objSmarty->assign("SuccessMessage","Ads has been updated successfully");
			}
		}else{
			$upQuery="update tbl_ads set
											`CompanyName`='".addslashes($_REQUEST['CompanyName'])."',
											`URL`='".addslashes($_REQUEST['URL'])."',
											`Desc`='".addslashes($_REQUEST['description'])."',
											`DisplayPeriod`='".addslashes($_REQUEST['duration'])."',
											`PaidAmount`='".addslashes($_REQUEST['amount'])."',
											`UpdateDate`=now()
											where AdsID='".$_REQUEST['Ident']."'";
			$this->ExecuteQuery($upQuery,"update");
			$objSmarty->assign("SuccessMessage","Ads has been updated successfully");
		}
	}
	function SelectActiveDuration()
	{
		global $objSmarty;
		$selQuery="select * from tbl_adsduration where 	Status = '1'";
		$result=$this->ExecuteQuery($selQuery,"select");
		$objSmarty->assign("AdsDuration",$result);
	}
	function SelectDuration($id)
	{
		global $objSmarty;
		$selQuery="select * from tbl_adsduration where Status = '1' or (Status='0' and ID='$id')";
		$result=$this->ExecuteQuery($selQuery,"select");
		$objSmarty->assign("AdsDuration",$result);
	}

	function GetPriceQuote($PriceDurId)
	{
		if($PriceDurId !="")
		{
			$sql = "select * from tbl_adsduration where ID = '".$PriceDurId."' limit 1";
			$result=$this->ExecuteQuery($sql,"select");
			echo $result[0]['Price'];
		}
	}

	/* ---------------- Manage Ads End Here ------------- */


	/* ---------------- Manage ads from user side starts here ------------ */

	function viewAdList(){
		global $objSmarty,$objPage;
		$now = date('Y-m-d');
		$selQuery="select * from employee where `EmployeeID`='".$_SESSION['LoginId']."'";
		$ExeSQL = $this->ExecuteQuery($selQuery,"select");
		$uname=$ExeSQL[0][EmployeeUsername];
		$email=$ExeSQL[0][EmployeeEmailAddress];


		$sel="select * from employer where `EmployerUsername`='".$uname."' and `EmployerEmailAddress`='".$email."'";
		$ExeSQL1 = $this->ExecuteQuery($sel,"select");
		$emprname=$ExeSQL1[0][EmployerUsername];
		$emprid=$ExeSQL1[0][EmployerID];
		//echo"$emprid";
		$objSmarty->assign("emplogin",$ExeSQL1);
		$objSmarty->assign("employerid",$emprid);
		if($_SESSION['LoginType'] == 'Employer'){
			//echo"if";
			$SelQuery	= "select *,DATE_FORMAT(UpdateDate, '%b %d, %Y') as UpdateDate,DATE_FORMAT(EndDate, '%b %d, %Y') as EndDate,DATE_FORMAT(StartDate, '%b %d, %Y') as StartDate  from `tbl_ads` where PostedByType='Employer' and PostedBy=".$_SESSION['LoginId']."";
		}
		else{
			//echo "else";
			$SelQuery	= "select *,DATE_FORMAT(UpdateDate, '%b %d, %Y') as UpdateDate,DATE_FORMAT(EndDate, '%b %d, %Y') as EndDate,DATE_FORMAT(StartDate, '%b %d, %Y') as StartDate  from `tbl_ads` where PostedByType='Employer' and PostedBy='$emprid'";

		}
		//echo"$now";
		$ResEvents = $this->ExecuteQuery($SelQuery,"select");
		//print_r($ResEvents);
		if(!empty($ResEvents)&& is_array($ResEvents))
		$objSmarty->assign("AdList",$ResEvents);
		$objSmarty->assign("AdListCnt",count($ResEvents));

	}
	function SelectAllDuration()
	{
		global $objSmarty;
		$selQuery="select * from tbl_adsduration where Status = '1'";
		$result=$this->ExecuteQuery($selQuery,"select");
		$objSmarty->assign("AdsDuration",$result);
	}
	function viewAds(){
		global $objSmarty;
		$selQuery="select * from employee where `EmployeeID`='".$_SESSION['LoginId']."'";
		$ExeSQL = $this->ExecuteQuery($selQuery,"select");
		$uname=$ExeSQL[0][EmployeeUsername];
		$email=$ExeSQL[0][EmployeeEmailAddress];


		$sel="select * from employer where `EmployerUsername`='".$uname."' and `EmployerEmailAddress`='".$email."'";
		$ExeSQL1 = $this->ExecuteQuery($sel,"select");
		$emprname=$ExeSQL1[0][EmployerUsername];
		$emprid=$ExeSQL1[0][EmployerID];
		//echo"$emprid";
		$objSmarty->assign("emplogin",$ExeSQL1);
		$objSmarty->assign("employerid",$emprid);
		if($_REQUEST['typ'] != 'Empr1' &&  $_SESSION['LoginType'] == 'Employer'){
			//echo"if";
			if($_REQUEST['Ident']!=''){
				$SelQuery	= "SELECT *,
					   date_format(StartDate,'%m-%d-%Y') as StartDate,
					   date_format(EndDate,'%m-%d-%Y') as EndDate
					   from tbl_ads 
					   where AdsID = '".$_REQUEST['Ident']."'
					   AND PostedBy = '".$_SESSION['LoginId']."'
					   AND PostedByType = 'Employer'";

				$ExeSelQuery= $this->ExecuteQuery($SelQuery,"select");
				$sql="select * from tbl_radius where Radius='".$ExeSelQuery[0]['Radius']."'";
				$res=$this->ExecuteQuery($sql,"select");
				$objSmarty->assign("RAmount",$res[0]['Amount']);
				/*echo "<pre>";
				 print_r($ExeSelQuery);
				 echo "</pre>";*/
				$objSmarty->assign("Ads",$ExeSelQuery);

				if($ExeSelQuery[0]['JobState']!=""){
					$sequery2="SELECT State_Name from tbl_state where State_Name = '".$ExeSelQuery[0]['State']."'";
					$result2=$this->ExecuteQuery($sequery2,"select");
					$objSmarty->assign("Statename",$result2[0]['State_Name']);
				}
				$objSmarty->assign("startDate",strtolower(($_REQUEST['interview_start_date']?$_REQUEST['interview_start_date']:$ExeSelQuery[0]['StartDate'])));
				$objSmarty->assign("endDate",strtolower(($_REQUEST['interview_end_date']?$_REQUEST['interview_end_date']:$ExeSelQuery[0]['EndDate'])));
			}
			else{
				redirect('jobList.php');
			}
		}
		else //if ($_REQUEST['typ'] == 'Empr1' && $_SESSION['LoginType'] != 'Employer')
		{
			//echo "else";
			if($_REQUEST['Ident']!=''){
				$SelQuery	= "SELECT *,
					   date_format(InterviewFromDate,'%m-%d-%Y %H:%i') as StartDate,
					   date_format(InterviewToDate,'%m-%d-%Y %H:%i') as EndDate
					   from tbl_ads 
					   where AdsID = '".$_REQUEST['Ident']."'
					   AND PostedBy = '".$emprid."'
					   AND PostedByType = 'Employer'";

				$ExeSelQuery= $this->ExecuteQuery($SelQuery,"select");
				$sql="select * from tbl_radius where Radius='".$ExeSelQuery[0]['Radius']."'";
				$res=$this->ExecuteQuery($sql,"select");
				$objSmarty->assign("RAmount",$res[0]['Amount']);
				/*echo "<pre>";
				 print_r($ExeSelQuery);
				 echo "</pre>";*/
				$objSmarty->assign("Ads",$ExeSelQuery);


				if($ExeSelQuery[0]['JobState']!=""){
					$sequery2="SELECT State_Name from tbl_state where State_Name = '".$ExeSelQuery[0]['State']."'";
					$result2=$this->ExecuteQuery($sequery2,"select");
					$objSmarty->assign("Statename",$result2[0]['State_Name']);
				}
					
				$objSmarty->assign("startDate",strtolower(($_REQUEST['interview_start_date']?$_REQUEST['interview_start_date']:$ExeSelQuery[0]['InterviewFromDate'])));
				$objSmarty->assign("endDate",strtolower(($_REQUEST['interview_end_date']?$_REQUEST['interview_end_date']:$ExeSelQuery[0]['InterviewToDate'])));
			}
			else{
				redirect('jobList.php');
			}
			//echo "else";
		}

	}

	function add_ads_employer(){
		global $objSmarty;

		if ($_FILES["ImageAds"]["size"] > 2097152)
		{
			//echo "hai";
			//$objSmarty->assign("ErrorMessage","Only .jpg and .png images below 2 MB can be uploaded");
			$_SESSION['exErr']="Only .jpg and .png images below 2 MB can be uploaded";
		}
		else
		{
			$filename =time().$_FILES['ImageAds']['name'];
			$add="Slides/$filename";
			@move_uploaded_file($_FILES['ImageAds']['tmp_name'], $add);
			$MyThumb = new Thumbnail("Slides/$filename", 234, 165, "Slides/"."thumb_".$filename);
			$MyThumb->Output();
			list($mo,$datt,$yrr) = explode("-",$_REQUEST['interview_start_date']);
			$startdate = $yrr.'-'.$mo.'-'.$datt;
			//$startdate = $yrr.'-'.$mo.'-'.$datt .$hrs.':'.$mins ;

			list($mo,$datt,$yrr) = explode("-",$_REQUEST['interview_end_date']);
			$enddate = $yrr.'-'.$mo.'-'.$datt;

			echo $insQuery="insert into tbl_ads(`Image`,`URL`,`Desc`,`PaymentAmount`,`UpdateDate`,`Status`,`StartDate`,`EndDate`,`PostedBy`,`PostedByType`,`Country`,`State`,`City`,`Zipcode`,`Radius`,`Latitude`,`Longitude`)
			
										values ('$filename','".addslashes($_REQUEST['URLad'])."','".addslashes($_REQUEST['description'])."','".addslashes($_REQUEST['amount'])."',now(),'0','".$startdate."','".$enddate."','".$_SESSION['LoginId']."','Employer','".$_REQUEST['jobcountry']."','".$_REQUEST['jobstate']."','".$_REQUEST['jobcity']."','".$_REQUEST['jobzipcode']."','".$_REQUEST['radius']."','".$_REQUEST['jobsearchlat']."','".$_REQUEST['jobsearchlong']."') ";
			$insertedid=$this->ExecuteQuery($insQuery,"insert");
			$objSmarty->assign("ads",'');
			$_SESSION['adsID']=$insertedid;
			//echo "$startdate";
			header('Location: makepayment.php?suc=1');
		}

	}
	function edit_ads_employer(){
		global $objSmarty;
		$selquery="select * from tbl_ads WHERE `AdsID`='".$_REQUEST['Ident']."'
					 AND PostedBy = '".$_SESSION['LoginId']."'
					 AND PostedByType = 'Employer'";
		$exequery=$this->ExecuteQuery($selquery,"select");
		$enddatedb=$exequery[0]['EndDate'];
		$lat=$exequery[0]['Latitude'];
		$long=$exequery[0]['Longitude'];
		if($_REQUEST['jobsearchlat']=='' && $_REQUEST['jobsearchlong']=='')
		{
			$adlat=$lat;
			$adlong=$long;
		}
		else
		{
			$adlat=$_REQUEST['jobsearchlat'];
			$adlong=$_REQUEST['jobsearchlong'];

		}
		if ($_FILES["ImageAds"]["size"] > 2097152)
		{
			//echo "hai";
			//$objSmarty->assign("ErrorMessage","Only .jpg and .png images below 2 MB can be uploaded");
			$_SESSION['exErr']="Only .jpg and .png images below 2 MB can be uploaded";
		}
		else
		{

			if($_FILES['ImageAds']['name']!='')
			$filename =time().$_FILES['ImageAds']['name'];
			else
			$filename=$_REQUEST['imageval'];


			$add="Slides/$filename";
			@move_uploaded_file($_FILES['ImageAds']['tmp_name'], $add);
			$MyThumb = new Thumbnail("Slides/$filename", 234, 165, "Slides/"."thumb_".$filename);
			$MyThumb->Output();
			list($mo,$datt,$yrr,$hrs,$mins) = explode("-",$_REQUEST['interview_start_date']);
			$startdate = $yrr.'-'.$mo.'-'.$datt  ;
			//echo "$startdate";
			list($mo,$datt,$yrr) = explode("-",$_REQUEST['interview_end_date']);
			$enddate = $yrr.'-'.$mo.'-'.$datt;

			$insQuery="update tbl_ads SET
				`Image`='$filename',
				`URL`='".addslashes($_REQUEST['URLad'])."',
				`Desc`='".addslashes($_REQUEST['description'])."',
				`PaymentAmount`='".addslashes($_REQUEST['amount'])."',
				`UpdateDate`=now(),
				`Status`='0',
				`StartDate`='".$startdate."',
				`EndDate`='".$enddate."',
				`PostedBy`='".$_SESSION['LoginId']."',
				`PostedByType`='Employer',
				`Country`='".$_REQUEST['jobcountry']."',
				`State`='".$_REQUEST['jobstate']."',
				`City`='".$_REQUEST['jobcity']."',
				`Zipcode`='".$_REQUEST['jobzipcode']."',
				`Radius`='".$_REQUEST['radius']."',
				`Status`='1',
				`Latitude`='".$adlat."',
				`Longitude`='".$adlong."'"
				." WHERE `AdsID`='".$_REQUEST['Ident']."'
					 AND PostedBy = '".$_SESSION['LoginId']."'
					 AND PostedByType = 'Employer'";
				/* values ('$filename',
				 '".addslashes($_REQUEST['URLad'])."',
				 '".addslashes($_REQUEST['description'])."',
				 '".addslashes($_REQUEST['amount'])."',
				 now(),'0',
				 '".$startdate."',
				 '".$enddate."',
				 '".$_SESSION['LoginId']."',
				 'Employer',
				 '".$_REQUEST['jobcountry']."',
				 '".$_REQUEST['jobstate']."',
				 '".$_REQUEST['jobcity']."',
				 '".$_REQUEST['jobzipcode']."',
				 '".$_REQUEST['radius']."',
				 '".$_REQUEST['jobsearchlat']."',
				 '".$_REQUEST['jobsearchlong']."') ";*/
				$insertedid=$this->ExecuteQuery($insQuery,"update");
				$objSmarty->assign("ads",'');
				$_SESSION['adsID']=$_REQUEST['Ident'];
				if($enddatedb==$enddate)
				header('Location: adList.php?suc=1');
				else {
					$upQuery="update tbl_ads SET
				TransactionID=''"
				." WHERE `AdsID`='".$_REQUEST['Ident']."'
					 AND PostedBy = '".$_SESSION['LoginId']."'
					 AND PostedByType = 'Employer'";
				$exe=$this->ExecuteQuery($upQuery,"update");
				header('Location: makepayment.php?suc=1');
				}
		}

	}
	function getAd($id){

		global $objSmarty,$objPage;
		$SelQuery	= "select *,DATE_FORMAT(UpdateDate, '%b %d, %Y') as UpdateDate,DATE_FORMAT(EndDate, '%b %d, %Y') as EndDate,DATE_FORMAT(StartDate, '%b %d, %Y') as StartDate  from `tbl_ads` where AdsID='".$id."'";
		//echo"$id";
		$ResEvents = $this->ExecuteQuery($SelQuery,"select");
		$start_date = strtotime($ResEvents[0]['StartDate']);
		$end_date = strtotime($ResEvents[0]['EndDate']);
		$datediff = $end_date - $start_date;
		$days= floor($datediff/(60*60*24))+1;

		$objSmarty->assign("AdList",$ResEvents);

		//	$SelQuery1	= "select * from `tbl_adsduration` where ID='1'";

		//$ResEvents1 = $this->ExecuteQuery($SelQuery1,"select");
		$SelQuery1	= "select * from `tbl_radius` where Radius='".$ResEvents[0]['Radius']."'";

		$ResEvents1 = $this->ExecuteQuery($SelQuery1,"select");

		//$objSmarty->assign("RAmount",$ResEvents1[0][Amount]);
		//if(!empty($ResEvents)&& is_array($ResEvents))
		//echo $ResEvents[0][Price];
		$amount=$days*$ResEvents1[0][Amount];
		$amount=number_format(round($amount,2),2);
		$objSmarty->assign("TotalAmount",$amount);

		$sel="select * from tbl_servicecharge where ID='1'";
		$exesel=$this->ExecuteQuery($sel,"select");
		$servicecharge=$exesel[0][ServiceCharge];
			
		$final=$amount+$servicecharge;
			
		$objSmarty->assign("FinalAmount",$final);
	}

	function getSubs($id){
		global $objSmarty,$objPage;
		$SelQuery	= "select *,DATE_FORMAT(EndDate, '%b %d, %Y') as EndDate,DATE_FORMAT(StartDate, '%b %d, %Y') as StartDate  from `employer` where EmployerID='".$id."'";
		$ResEvents = $this->ExecuteQuery($SelQuery,"select");
		$start_date = strtotime($ResEvents[0]['StartDate']);
		$end_date = strtotime($ResEvents[0]['EndDate']);
		$datediff = $end_date - $start_date;
		$days= floor($datediff/(60*60*24))+1;

		$objSmarty->assign("SubsList",$ResEvents);

		/*$SelQuery1	= "select * from `tbl_adsduration` where ID='1'";

		$ResEvents1 = $this->ExecuteQuery($SelQuery1,"select");
		//if(!empty($ResEvents)&& is_array($ResEvents))
		//echo $ResEvents[0][Price];
		$amount=$days*$ResEvents1[0][Price];
		$amount=number_format(round($amount,2),2);
		$objSmarty->assign("TotalAmount",$amount);*/
	}

	function getAdAmount(){
		global $objSmarty,$objPage;
		$SelQuery	= "select *  from `tbl_adsduration` where ID='1'";

		$ResEvents = $this->ExecuteQuery($SelQuery,"select");
		//if(!empty($ResEvents)&& is_array($ResEvents))
		//echo $ResEvents[0][Price];
		$objSmarty->assign("AdAmount",$ResEvents[0][Price]);
	}

	function getServiceCharge(){
		global $objSmarty,$objPage;
		$SelQuery	= "select *  from `tbl_servicecharge` where ID='1'";

		$ResEvents = $this->ExecuteQuery($SelQuery,"select");
		//if(!empty($ResEvents)&& is_array($ResEvents))
		//echo $ResEvents[0][Price];
		$objSmarty->assign("ServiceCharge",$ResEvents[0][ServiceCharge]);
	}

	function add_ads_external(){
		global $objSmarty;
		if ($_FILES["ImageAds"]["size"] > 2097152)
		{

			$_SESSION['adsID']="";
			$objSmarty->assign("ErrorMessage2","Only .jpg and .png images below 2 MB can be uploaded");
			$_SESSION['exErr']="Only .jpg and .png images below 2 MB can be uploaded";
			header('Location:usersignup.php?adval=po');
		}
		else
			
		{
			$filename =time().$_FILES['ImageAds']['name'];
			$add="Slides/$filename";
			@move_uploaded_file($_FILES['ImageAds']['tmp_name'], $add);
			$MyThumb = new Thumbnail("Slides/$filename", 234, 165, "Slides/"."thumb_".$filename);
			$MyThumb->Output();
			list($mo,$datt,$yrr) = explode("-",$_REQUEST['interview_start_date']);
			$startdate = $yrr.'-'.$mo.'-'.$datt;

			list($mo,$datt,$yrr) = explode("-",$_REQUEST['interview_end_date']);
			$enddate = $yrr.'-'.$mo.'-'.$datt;

			$insQuery="insert into tbl_ads(`CompanyName`,`URL`,`Image`,`Desc`,`PaymentAmount`,`UpdateDate`,`Status`,`StartDate`,`EndDate`,`PostedBy`,`PostedByType`,`Country`,`State`,`City`,`Zipcode`,`Radius`,`Latitude`,`Longitude`)
			
										values ('".addslashes($_REQUEST['companynamead'])."','".addslashes($_REQUEST['URLad'])."','$filename','".addslashes($_REQUEST['descriptionad'])."','".addslashes($_REQUEST['amount'])."',now(),'0','".$startdate."','".$enddate."','0','External','".$_REQUEST['jobcountry']."','".$_REQUEST['jobstate']."','".$_REQUEST['jobcity']."','".$_REQUEST['jobzipcode']."','".$_REQUEST['radius']."','".$_REQUEST['jobsearchlat']."','".$_REQUEST['jobsearchlong']."') ";
			$insertedid=$this->ExecuteQuery($insQuery,"insert");
			//$objSmarty->assign("ads",'');
			$_SESSION['adsID']=$insertedid;
			$_SESSION['adradius']=$_REQUEST['radius'];
			//exit;
			//header('Location: makepayment.php?suc=1');


		}

	}
	function getemployerdetails($id){
		global $objSmarty,$objPage;
		$SelQuery	= "select *  from `employer` where EmployerID='".$id."'";

		$objSmarty->assign("companyname","");
		$objSmarty->assign("companyurl","");

		$ResEvents = $this->ExecuteQuery($SelQuery,"select");
		//if(!empty($ResEvents)&& is_array($ResEvents))
		//echo $ResEvents[0][Price];
		$objSmarty->assign("companyname",$ResEvents[0][EmployerCompanyName]);
		$objSmarty->assign("companyurl",$ResEvents[0][EmployerURL]);
	}

	/* ---------------- Manage ads from user side ends here ------------ */
	/* ------------------- Manage Radius Start Here ---------------------*/

	function manage_radius()
	{
		global $objSmarty,$objPage;

		$where_condition="";

		if($_REQUEST['keyword']!="")
		$where_condition.=" where `Radius` like '%".addslashes(trim($_REQUEST['keyword']))."%'";

		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by Radius asc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by Radius desc";

		}else{
			$where_condition.=" order by `Id` desc";
		}
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$_REQUEST['page']="";
		$SelQuery	= "select * from `tbl_radius`"
		."$where_condition";

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
		$objSmarty->assign("RadiusList",$Res_Tickets);
	}

	function add_radius(){

		global $objSmarty;
		$SelQuery	= "SELECT * from `tbl_radius` WHERE Radius='".addslashes($_REQUEST['radius'])."' ";
			
			
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery){
			$insQuery="insert into tbl_radius(`Radius`,`Amount`,`Status`)
			
										values ('".addslashes($_REQUEST['radius'])."','".addslashes($_REQUEST['cost'])."','1') ";
			$this->ExecuteQuery($insQuery,"insert");
			$objSmarty->assign("SuccessMessage","Radius has been added successfully");

		}	else
		{
			$objSmarty->assign("rad",$_REQUEST);
			$objSmarty->assign("ErrorMessage","Radius already exists");
		}

	}
	function selectRadiusById(){
		global $objSmarty;
		if($_REQUEST['Ident']!=''){
			$selQuery="select *  from tbl_radius where Id='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("Radiusval",$result);
		}

	}
	function update_radius(){
		global $objSmarty;

		$selQuery="select *  from tbl_radius where `Radius`='".addslashes($_REQUEST['radius'])."' and Id!='".$_REQUEST['Ident']."'";
		$result=$this->ExecuteQuery($selQuery,"norows");
		if($result==0){
			$upQuery="update tbl_radius set
											`Radius`='".addslashes($_REQUEST['radius'])."',
											`Amount`='".addslashes($_REQUEST['cost'])."'
											where Id='".$_REQUEST['Ident']."'";
			$this->ExecuteQuery($upQuery,"update");
			$objSmarty->assign("SuccessMessage","Radius has been updated successfully");
		}else{
			$objSmarty->assign("ErrorMessage","Radius already exists");
		}

			
	}

}
?>

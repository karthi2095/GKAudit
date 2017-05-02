<?php
/*	Class Function for Admin	*/
class Category extends MysqlFns
{
	function Category()
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
	function manage_category()
	{
		 
		global $objSmarty,$objPage;

		$where_condition="";

		if($_REQUEST['keyword']!="")
		$where_condition.="and `ProductCategory` like '%".addslashes(trim($_REQUEST['keyword']))."%'";

	if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition1.=" order by `ProductCategory` asc";
			if($_REQUEST['flag']=="2")
			$where_condition1.=" order by `ProductCategory` desc";
				
		}else{
			$where_condition1.=" order by `ProductCategory` asc";
		}
	$SelQuery	= "select distinct ProductCategory from  `product` where  ProductCategory!='' ".$where_condition .$where_condition1 ;
			
		/*if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$SelQuery.=" order by `CategoryName` asc";
			if($_REQUEST['flag']=="2")
			$SelQuery.=" order by `CategoryName` desc";
				
		}else{
			$SelQuery.=" order by `CategoryId` desc";
		}*/

		if(isset($_REQUEST['page']) && $_REQUEST['page'] >1)
		$i= ($this->Limit * $_REQUEST['page'] )-$this->Limit +1;
		else
		$i=1;
		$objSmarty->assign("i",$i);
		$objSmarty->assign("pageno",$_REQUEST['page']);
		$listing_split = new MsplitPageResults($SelQuery, $this->Limit);
		
		if ( ($listing_split->number_of_rows > 0) )
		{
				
				
			$pagenos=round($listing_split->number_of_rows/$this->Limit)."<br/>";
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
					$objSmarty->assign("pageno",$pagenos);
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
	
	function GetInstrumentLists()
	{
		global $objSmarty,$objPage;
		$where_condition="";
		if($_REQUEST['pagelimit']==''){
			$this->Limit			= 10;
		}else{
		 $this->Limit=$_REQUEST['pagelimit'];
		}
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.=" where `zonal_name` like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by zonal_name desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by zonal_name asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by `zonal_name` asc";
		}

		$SelQuery	= "select * from `zonal`"
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
function add_zonal()
	{

		global $objSmarty,$objPage;
		$SelQuery	= "SELECT * from `zonal`
						WHERE 
						`zonal_name`='".addslashes($_REQUEST['zonalName'])."'";

		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$InsQuery	= "INSERT INTO `zonal`
											    (
											      `zonal_name`,					      
											      `Status`
											      
											    )
											     VALUES 
											    (
											       '".addslashes($_REQUEST['zonalName'])."',								       
											       '1'
											        )";
			$ExeInsQuery=$this->ExecuteQuery($InsQuery,"insert");
			$objSmarty->assign("SuccessMessage","Zonal has been added successfully");
		}
		else
		{
			$objSmarty->assign('instrument',$_REQUEST);
			$objSmarty->assign("ErrorMessage","Zonal name already exists");
		}

	}
function selectzonalById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
			$selQuery="select * from `zonal` where Id='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("zonal",$result);
		}
		else
		{
			redirect('manage_zonal.php');
		}
	}
	
	
	function update_zonal()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `zonal`
						WHERE 
						`Zonal_name`='".addslashes($_REQUEST['zonalName'])."' and Id !='".$_REQUEST['Ident']."'";

		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$upQuery="update `zonal` set
										`Zonal_name`='".addslashes($_REQUEST['zonalName'])."'
										
										where Id='".$_REQUEST['Ident']."'";
			$this->ExecuteQuery($upQuery,"update");
			$objSmarty->assign("SuccessMessage","Zonal has been updated successfully");
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Zonal name already exists");
		}

	}
	
	
function getsubCategories($id)
	{
		global $objSmarty;

		$SelQuery	= "SELECT distinct SecondaryCategory from `product` where `ProductCategory`='".$id."'";
		$res= $this->ExecuteQuery($SelQuery,"select");
		return $res[0][SecondaryCategory].'<br/>'.$res[1][SecondaryCategory];
		
	}
function getsubCategories1($id)
	{
		global $objSmarty;
		$SelQuery	= "SELECT  * from `product` where `ID`='".$id."'";
		$res= $this->ExecuteQuery($SelQuery,"select");
		return $res[0][SecondaryCategory];
		
	}
	
	function add_category()
	{

		global $objSmarty,$objPage;
		$SelQuery	= "SELECT * from `tbl_category`
						WHERE 
						`CategoryName`='".addslashes($_REQUEST['categoryName'])."'";

		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$InsQuery	= "INSERT INTO `tbl_category`
											    (
											      `CategoryName`,
											      `CategoryDesc`,
											      `ImageName`,											      
											      `Status`,
											      `CreatedDate`
											    )
											     VALUES 
											    (
											       '".addslashes($_REQUEST['categoryName'])."',
											       '".addslashes($_REQUEST['categoryDesc'])."',
											       '".addslashes($_REQUEST['imgName'])."',											       										       
											       '1',
											       now())";
			$ExeInsQuery=$this->ExecuteQuery($InsQuery,"insert");
			$objSmarty->assign("SuccessMessage","Category has been added successfully");
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Category name already exists");
		}

	}

	function update_category()
	{
		global $objSmarty,$objPage;
		 $SelQuery	= "SELECT * from `tbl_category`
						WHERE 
						`CategoryName`='".addslashes($_REQUEST['categoryName'])."' and CategoryId !='".$_REQUEST['Ident']."'";

		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$UPQuery	= "Update `tbl_category` set
						`CategoryName`='".addslashes($_REQUEST['categoryName'])."',
						`CategoryDesc`='".addslashes($_REQUEST['categoryDesc'])."',
						`ImageName`='".addslashes($_REQUEST['imgName'])."'
						 where CategoryId=".$_REQUEST['Ident'];

			$ExeInsQuery=$this->ExecuteQuery($UPQuery,"update");
			$objSmarty->assign("SuccessMessage","Category has been updated successfully");
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Category name already exists");
		}
	}

	function getCategories()
	{
		global $objSmarty;

		$SelQuery	= "SELECT * from `tbl_category`";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"select");
		$objSmarty->assign("Category",$ExeSelQuery);
	}	
	
	
	function getCategoryById(){
		global $objSmarty;
		if($_REQUEST['Ident']!=''){
			$selQuery="select * from tbl_category where CategoryId='".$_REQUEST['Ident']."'";
			$res=$this->ExecuteQuery($selQuery, "select");
			$objSmarty->assign("Category",$res);
		}else{
			redirect('manage_category.php');
		}
	}
	
	function Set_Status_category($tablename,$id,$word)
	{
		global $objSmarty,$objPage;
		$UpQuery="UPDATE ".$tablename." SET `Status`='".$_REQUEST['setStatus']."'"
		. " WHERE $id='".$_REQUEST['Ident']."'";
			
		if($_REQUEST['setStatus']==0){

			$ExeUpQuery= $this->ExecuteQuery($UpQuery,"update");
			$objSmarty->assign("SuccessMessage","$word has been deactivated successfully");

		}
		else{
			$ExeUpQuery= $this->ExecuteQuery($UpQuery,"update");
			$objSmarty->assign("SuccessMessage","$word has been activated successfully");
		}
	}	
	
	function Change_Table_Category($tablename,$id,$word)
	{
		global $objSmarty,$objPage;
		$case=$_REQUEST['ActionType'];
		$select=$_REQUEST['ConId'];
		for($i=1;$i<count($_REQUEST['ConId']);$i++)
		{
			if($case == "Active") {
				$UpQuery="UPDATE ".$tablename." SET `Status`='1'"
				. " WHERE $id = '".$select[$i]."'";
				$ExeUpQuery= $this->ExecuteQuery($UpQuery,"update");
				$objSmarty->assign("SuccessMessage","$word(s) has been activated successfully");
			}
			else if($case == "InActive") {
					
				$UpQuery="UPDATE ".$tablename." SET `Status`='0'"
				. " WHERE $id = '".$select[$i]."'";
				$ExeUpQuery= $this->ExecuteQuery($UpQuery,"update");
				$objSmarty->assign("SuccessMessage","$word(s) has been deactivated successfully");
				//}
			}
			else if($case == "Delete") {
					
				$UpQuery="DELETE FROM ".$tablename." WHERE $id = '".$select[$i]."'";
				$ExeUpQuery= $this->ExecuteQuery($UpQuery,"delete");
				$objSmarty->assign("SuccessMessage","$word(s) has been deleted successfully");
					
				//$flag=$this->productExists_Country($select[$i]);
			}
		}
	}	

	function Delete_Category_Record($tablename,$id,$word)
	{
		global $objSmarty,$objPage;
		$UpQuery="DELETE FROM $tablename"
			. " WHERE $id = '".$_REQUEST['hdIdent']."'";
		$ExeUpQuery= $this->ExecuteQuery($UpQuery,"delete");
		$objSmarty->assign("SuccessMessage","$word has been deleted successfully");

	}		

	function getCategoryByExpOrder($flag){
		global $objSmarty;
		//$SelQuery = "select * from `tbl_category` order by rand() limit 0,3";
		
		if($flag == '1'){
			$SelQuery	= "select * from `tbl_category` where Status=1 order by CategoryName asc LIMIT 0, 4";
			$res=$this->ExecuteQuery($SelQuery, "select");

		} else {
			$SelQuery	= "select * from `tbl_category` where Status=1 order by CategoryName desc LIMIT 0, 4";
			$res=$this->ExecuteQuery($SelQuery, "select");		
		}
        $objSmarty->assign("CategoryList",$res);
	}		


	function getCategoryCount(){
		global $objSmarty;
		/*$SelQuery	= "select * from `tbl_category` where Status=1";
		$count=$this->ExecuteQuery($selQuery, "norows");
        $objSmarty->assign("categoryCount",$count);		*/
		
		$SelQuery1	= "select * from `tbl_category` where Status=1";
		$res1=mysql_query($SelQuery1);
		$categoryCount=mysql_num_rows($res1);

		$objSmarty->assign("categoryCount", $categoryCount);
	}	
		
	/***************************Grouping************************************/
	
	
function Manage_group()
	{
		global $objSmarty,$objPage;
		$where_condition="";
		if($_REQUEST['pagelimit']==''){
			$this->Limit			= 10;
		}else{
		 $this->Limit=$_REQUEST['pagelimit'];
		}
		if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
		$where_condition.=" where `Group_Name` like '%".addslashes(trim($_REQUEST['keyword']))."%'";
		if($_REQUEST['flag']!=""){
			if($_REQUEST['flag']=="1")
			$where_condition.=" order by Group_Name desc";
			if($_REQUEST['flag']=="2")
			$where_condition.=" order by Group_Name asc";
				
		}else{
			//$where_condition.=" order by `ID` desc";
			$where_condition.=" order by `Group_Name` asc";
		}

		$SelQuery	= "select * from `tbl_group`"
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
	
	
	
	/*********************add grouping*******************/
	
	
	
function add_group()
	{

		global $objSmarty,$objPage;
		$SelQuery	= "SELECT * from `tbl_group`
						WHERE 
						`Group_Name`='".addslashes($_REQUEST['GroupName'])."'";

		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$InsQuery	= "INSERT INTO `tbl_group`
											    (
											      `Group_Name`,					      
											      `Status`,
											      `CreatedDate`
											      
											    )
											     VALUES 
											    (
											       '".addslashes($_REQUEST['GroupName'])."',								       
											       '1',
											       now()
											        )";
			$ExeInsQuery=$this->ExecuteQuery($InsQuery,"insert");
			$objSmarty->assign("SuccessMessage","Group has been added successfully");
		}
		else
		{
			$objSmarty->assign('instrument',$_REQUEST);
			$objSmarty->assign("ErrorMessage","Group name already exists");
		}

	}
	
	/****************Update Group*****************/
	
	
function update_group()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `tbl_group`
						WHERE 
						`Group_Name`='".addslashes($_REQUEST['GroupName'])."' and Id !='".$_REQUEST['Ident']."'";

		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"norows");
		if(!$ExeSelQuery)
		{
			$upQuery="update `tbl_group` set
										`Group_Name`='".addslashes($_REQUEST['GroupName'])."',
										`UpdatedDate`=now()
										
										where Id='".$_REQUEST['Ident']."'";
			$this->ExecuteQuery($upQuery,"update");
			$objSmarty->assign("SuccessMessage","Group has been updated successfully");
		}
		else
		{
			$objSmarty->assign("ErrorMessage","Group name already exists");
		}

	}
	
	
	
	
	function selectgroupById()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
			$selQuery="select * from `tbl_group` where Id='".$_REQUEST['Ident']."'";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("group",$result);
		}
		else
		{
			redirect('manage_group.php');
		}
	}
function selectgroupByName()
	{
		global $objSmarty;
		if($_REQUEST['Ident']!='')
		{
			$selQuery="select * from `tbl_group`";
			$result=$this->ExecuteQuery($selQuery,"select");
			$objSmarty->assign("group",$result);
		}
		else
		{
			redirect('manage_group.php');
		}
	}
	
	
}

?>
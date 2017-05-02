<?php 
class Datamanage extends MysqlFns
{
	function Datamanage()
	{
		global $config;
        $this->MysqlFns();
		$this->Offset			= 0;
		$this->Limit			= 15;
		$this->page				= 0;
		$this->Keyword			= '';
		$this->Operator			= '';
		$this->PerPage			= '';
	}
	
	function getzonelist()
	{
		
	 $selectQuery="SELECT * FROM `tbl_mapping` AS te 
			LEFT JOIN zonal AS t ON te.Zonal_Id = t.Id
		WHERE `Senior_Supervisor` ='".$_SESSION['userid']."' and te.Status=1
		GROUP BY `Zonal_Id`";
		$execute=mysql_query($selectQuery);
		return $execute;
	}
	
	
/*function getzonelist()
	{
		
	 $selectQuery="SELECT * FROM `tbl_mapping` AS te 
			LEFT JOIN zonal AS t ON te.Zonal_Id = t.Id
		WHERE `Senior_Supervisor` ='".$_SESSION['userid']."' and te.Status=1
		GROUP BY `Zonal_Id`";
		$execute=mysql_query($selectQuery);
		return $execute;
	}*/

}
	?>
<?php 
	include "includes/common.php";
	include "includes/config.php";
	include "includes/classes/class.Login.php";
	$objlogin = new Login();
    $zonal=$_REQUEST['zonal'];
	
	$SelQuery	= "SELECT *FROM `tbl_mapping` AS te 
			LEFT JOIN supervisor AS t ON te.Supervisor_Id = t.Id 
							WHERE `Senior_Supervisor`='".$_SESSION['userid']."' 
							and te.Zonal_Id='".$_REQUEST['zonal']."' 
							and te.Status=1";
	$res=mysql_query($SelQuery);
	
	$count=mysql_num_rows($res); 
	
?>
 <select name="super" id="super" class="select-value editable"  >
<option value="0">Select supervisor</option>
<?php 
if($count!='0')
{
while($view=mysql_fetch_array($res))
{

?>
<option value="<?php echo $view['Id'];?>"><?php echo $view['Name'];?></option>
<?php 
} 
 
}?>
</select>
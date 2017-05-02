<?php
class Login extends MysqlFns
{
	function Login()
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
	
	function adminlogin()
	{
				if(isset($_REQUEST['month']) && $_REQUEST['month']!=''){
				$month2=explode("-",$_REQUEST['month']);
				$month=$month2[0];
				$year=$month2[1];
				}
				if(isset($_REQUEST['user']) && $_REQUEST['user']!=''){
				$username=$_REQUEST['user'];
				}
				if(isset($_REQUEST['pass']) && $_REQUEST['pass']!=''){
				$password=($_REQUEST['pass']);
				}

				 $selectUser="select * from seniorsupervisor where Username='".$username."' and Password='".$password."'";
				 $exeUser=$this->ExecuteQuery($selectUser, 'select');
				$countUser=$this->ExecuteQuery($selectUser, "norows");
				if($countUser > 0)
					{
								
						$_SESSION['userid']=$exeUser[0]['Id'];
						$_SESSION['username']=$exeUser[0]['Name'];
						$_SESSION['usertype']="ssp";
						$_SESSION['month']=$month;
						$_SESSION['year']=$year;
						$_SESSION['date']=$_REQUEST['month'];
						header('Location: Choose-sv.php');
					
					}else{
						header('Location: index.php?err=1');
					}
	}
	/*function check()
	       {
	       	if(isset($_SESSION["userid"]) && !empty($_SESSION['username'])) 
	       	{
	       		echo "if";
	       		//header("location: index.php");
	       	
	       	}else{
	       		echo "else";
	       	}
	       }*/
		   
	function check()
	{
		global $_SESSION;
		if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
			return true;
		} else{
			Redirect("index.php");
		}
	}
		   
		   
		   
   function getdata()
   {
   			$month = $_SESSION['month'];
   			$svid = $_SESSION['supervisor'];
   	    $selectUser="select * from saveaudit where Sv_id= '$svid' AND MONTH(Created_on) = '$month'";
				 $exeUser=$this->ExecuteQuery($selectUser, 'select');
				$countUser=$this->ExecuteQuery($selectUser, "norows");
				return $exeUser;
   }
	
	function GetauditById($cat,$levelId,$subLevel)
   {
   			$month = $_SESSION['month'];
			$year = $_SESSION['year'];
   			$svid = $_SESSION['supervisor'];
   			$sspid = $_SESSION['userid'];
		 $selectUser="select * from saveaudit where Sv_id= '$svid' AND audit_month = '$month' and audit_year = '$year' and Category_id = '$cat' and Level='$levelId' and Sub_level= '$subLevel' and Audit_By = '$sspid'";
				 $execute=mysql_query($selectUser);
				 $row=mysql_fetch_array($execute);
			//$exeUser=$this->ExecuteQuery($selectUser, 'select');
				//$countUser=$this->ExecuteQuery($selectUser, "norows");
				return $row;
   }
function Getitemscore($cat)
   {
   			$month = $_SESSION['month'];
			$year = $_SESSION['year'];
   			$svid = $_SESSION['supervisor'];
   			$sspid = $_SESSION['userid'];
		 $selectUser="select * from `tbl_itemscore` where Sv_id= '$svid' AND Month = '$month' and Year = '$year' and Category_id = '$cat' and Audit_By = '$sspid'";
				 $execute=mysql_query($selectUser);
				 $row=mysql_fetch_array($execute);
			//$exeUser=$this->ExecuteQuery($selectUser, 'select');
				//$countUser=$this->ExecuteQuery($selectUser, "norows");
				return $row;
   }
function GetComment($cat)
   {
   			$month = $_SESSION['month'];
			$year = $_SESSION['year'];
   			$svid = $_SESSION['supervisor'];
   			$sspid = $_SESSION['userid'];
		 $selectUser="select * from `tbl_comments` where Sv_id= '$svid' AND Month = '$month' and Year = '$year' and Category_id = '$cat' and Audit_By = '$sspid'";
				 $execute=mysql_query($selectUser);
				 $row=mysql_fetch_array($execute);
			//$exeUser=$this->ExecuteQuery($selectUser, 'select');
				//$countUser=$this->ExecuteQuery($selectUser, "norows");
				return $row;
   }
 function Getcategory($cat)
   {
   			$month = $_SESSION['month'];
			$year = $_SESSION['year'];
   			$svid = $_SESSION['supervisor'];
   			$sspid = $_SESSION['userid'];
		 $selectUser="select * from `tbl_categoryscore` where Sv_id= '$svid' AND Month = '$month' AND Year = '$year' AND Category_id = '$cat' and Audit_By = '$sspid'";
				 $execute=mysql_query($selectUser);
				 $row=mysql_fetch_array($execute);
			//$exeUser=$this->ExecuteQuery($selectUser, 'select');
				//$countUser=$this->ExecuteQuery($selectUser, "norows");
				return $row;
   }
function Getcategoryrank($cat)
   {
   			$month = $_SESSION['month'];
			$year = $_SESSION['year'];
   			$svid = $_SESSION['supervisor'];
   			$sspid = $_SESSION['userid'];
   			
		 $selectUser="select * from `tbl_categoryscore` where Sv_id= '$svid' AND Month = '$month' and Year = '$year' and Category_id = '$cat' and Audit_By = '$sspid'";
				 $execute=mysql_query($selectUser);
				 $row=mysql_fetch_array($execute);
			//$exeUser=$this->ExecuteQuery($selectUser, 'select');
				//$countUser=$this->ExecuteQuery($selectUser, "norows");
				return $row;
   }
  function Getsupervisordata()
  {
  			$svid = $_SESSION['supervisor'];
  	
  	  $selectUser="select * from `supervisor` where Id= '$svid'";

  	  			$execute=mysql_query($selectUser);
				 $row=mysql_fetch_array($execute);
				 return $row;
  }
function Getzonedata()
  {
  			$zoneid = $_SESSION['zonal'];
  	
  	 $selectUser="select * from `zonal` where Id= '$zoneid'";

  	  			$execute=mysql_query($selectUser);
				 $row=mysql_fetch_array($execute);
				 return $row;
  }
  function GetGroupById($id)
  { 	
  	 $selectUser="select * from `tbl_group` where Id= '$id'";

  	  			$execute=mysql_query($selectUser);
				 $row=mysql_fetch_array($execute);
				 return $row;
  }
  
  
	function forgotStudentPass()
	{
		global $objSmarty,$config;
		$sql = "SELECT * FROM `tbl_student`"
		       ." WHERE `Email` = '".$_REQUEST['email']."'";
		       
		$Count		= $this->ExecuteQuery($sql, "norows");
		if($Count > 0){
			$details = $this->ExecuteQuery($sql, "select");
			$Email = $details[0]['Email'];			
			$UserName=$details[0]['Username'];
			$Password=$details[0]['Password'];
			$subject = "Bookwormz - Password Request!!!";
			$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<title>Password Retrival</title>
				<link href="melslifecss.css" rel="stylesheet" type="text/css" />
				</head>
				
				<body>
				<table width="75%" border="0" align="center" bgcolor="#e7f2f7" cellpadding="5" cellspacing="0" class="border_grey">
				  <tr>
					<td width="100%" height="" align="left" bgcolor="#fff" class="normal_txt7"><img src="http://rajasriglobal.com/tutorwebsite/images/logo.jpg" /></td>
				  </tr>
				  <tr>
					<td><table width="100%"  cellspacing="0" cellpadding="0">

					  <tr>
						<td width="8">&nbsp;</td>
						<td colspan="2" align="left" valign="middle" style="font-family: Arial, Helvetica, sans-serif;
								font-size: 14px;
								font-weight: bolder;
								color: #fd0803;">Bookwormz</td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2" ></td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
						<td colspan="2" align="left" valign="middle" ><div align="justify" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: normal;color: #000000;text-decoration: none;" >Your login details:</div></td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2"></td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
						<td colspan="2" align="left" valign="middle" ><span style="font-family: Arial, Helvetica, sans-serif;	font-size: 12px; font-weight: bold;	color: #000000;	text-decoration: none;" >Username: &nbsp;</span><b>'.$UserName.'</b></td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
						<td colspan="2" align="left" valign="middle" ><span style="font-family: Arial, Helvetica, sans-serif;	font-size: 12px; font-weight: bold;	color: #000000;	text-decoration: none;" >Password: &nbsp;</span><b>'.$Password.'</b></td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2"></td>
					  </tr>
					  <tr>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
						<td colspan="2">&nbsp;</td>
					  </tr>						  					  
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2" align="left">Thanks,</td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2" align="left">Bookwormz Team</td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2"></td>
					  </tr>
					</table></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
				  </tr>				  				  
				</table>
				</body>
				
				</html>';
			$headers = 'From: '.$config['AdminMail']."\r\n";
			$headers.= 'Reply-To: '.$config['AdminMail']."\r\n";
			$headers.= "MIME-Version: 1.0\r\n";
			$headers.= "Content-type: text/html; charset=iso-8859-1\r\n";		
			//echo $message; exit;
			
			//echo $Email . " $subject ". " $message " . $headers; exit;
			@mail($Email,$subject,$message,$headers);
			$objSmarty->assign("SuccessMessage", "Login details has been sent successfully. Please check your mail");
			$objSmarty->assign("Student","");			
		}else{
			$objSmarty->assign("ErrorMessage", "Given email is not available in our database. Please check the email you have entered");
		}
	}
	
	function SelectUser()
	{
	    global $objSmarty;
		$SelQuery	= "SELECT * FROM `customers`"
					  ." WHERE `customers_id`='".$_SESSION['LoginId']."'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"select");
		$objSmarty->assign("SelectUser",$ExeSelQuery);
	}
	
	function UpdateUser()
	{
	    global $objSmarty;
		$up="UPDATE `customers` SET `customers_firstname` = '".$_REQUEST['firstname']."',
		`customers_lastname` = '".$_REQUEST['lastname']."',
		`customer_username` = '".$_REQUEST['username']."',
		`city` = '".$_REQUEST['area']."',
		`state` = '".$_REQUEST['state']."',
		`country` = '".$_REQUEST['country']."',
		`customers_email_address` = '".$_REQUEST['email']."',
		`customers_telephone` = '".$_REQUEST['phone']."' WHERE `customers_id`=".$_SESSION['LoginId'] ; //echo $up; exit;
		$this->ExecuteQuery($up, "update");
		$objSmarty->assign('SuccessMessage',"Profile has been updated successfully");
	}
	
	function UpdatePassword()
	{
	    global $objSmarty;	
		$sql = "SELECT * FROM `customers`"
		       ." WHERE binary `customers_password`='".$_POST['oldpassword']."'";
		$sle		= $this->ExecuteQuery($sql, "select");
		$Count		= $this->ExecuteQuery($sql, "norows");
		if($Count > 0){				
			$up="UPDATE `customers` SET `customers_password` = '".$_REQUEST['newpassword']."' WHERE `customers_id`=".$_SESSION['LoginId'] ;
			$this->ExecuteQuery($up, "update");
			$objSmarty->assign('SuccessMessage',"Password has been updated Successfully");
		} else {
			$objSmarty->assign("ErrorMessage", "Invalid Old Password");
		}		
	}
	
	/*function Update_Mode()
	{
	    global $objSmarty;
		if($_REQUEST['mode']=="Bank Transfer"){
			$var=" , `Accnum`='".$_REQUEST['accno']."', `SwiftBic`='".$_REQUEST['code']."', `IBAN`='".$_REQUEST['IBAN']."', `BankName`='".$_REQUEST['bankname']."', BankAdd='".$_REQUEST['bankadd']."'";
		}
		$up="UPDATE `tbl_member` SET `TransferMode` = '".$_REQUEST['mode']."', `AmtBal`='".$_REQUEST['amt']."', `joined_date`=now() $var WHERE `member_id`=".$_SESSION['LoginId'] ;
		$this->ExecuteQuery($up, "update");
		$objSmarty->assign('SuccessMessage',"Your account details has sent to administrator successfully");
	}*/
	
	function get_home()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `tbl_staticpages` where pagename = 'home'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"select");
		$objSmarty->assign("Cat",$ExeSelQuery);
	}
	
    function get_contact()
	{
		global $objSmarty;
		$SelQuery	= "SELECT * from `tbl_staticpages` where pagename = 'Contact'";
		$ExeSelQuery= $this->ExecuteQuery($SelQuery,"select");
		$objSmarty->assign("Cat",$ExeSelQuery);
	}
	

	/******************************************************************************
	 */
	
	function MakeTutorLogin()
	{
		global $objSmarty;
		$sql = "SELECT * FROM `tbl_tutor`"
		       ." WHERE 
		       binary `Username`='".$_REQUEST['username']."' 
		       AND
		       binary `Password`='".addslashes($_REQUEST['pword'])."'";
		       
		$sle		= $this->ExecuteQuery($sql, "select");
		$Count		= $this->ExecuteQuery($sql, "norows");
					
		if($Count > 0){
			$sle[0]['Status'];
			if($sle[0]['Status']==1){
				$details = $this->ExecuteQuery($sql, "select");
				session_start();
				$_SESSION['TutorId']=$details[0]['TutorId'];			
				$_SESSION['TutorName']=$details[0]['Username'];
				/*$_SESSION['FirstName']=$details[0]['FirstName'];
				$_SESSION['LastName']=$details[0]['LastName'];
				$_SESSION['Email']=$details[0]['Email'];*/
				$_SESSION['session_id']=session_id();
				header("Location:tutorprofile.php"); 
			}else{
				$objSmarty->assign("ErrorMessage", "Tutor has been deactivated. Please contact Admin");
			}
		}else{
			$objSmarty->assign("ErrorMessage", "Invalid Login");
		}
	}
	
	function chkTutorLogin()
	{
		global $_SESSION;
		global $objSmarty;		
		if(isset($_SESSION['TutorId']) && !empty($_SESSION['TutorId'])) {
			$objSmarty->assign("TutorId", $_SESSION['TutorId']);
			$objSmarty->assign("UserName", $_SESSION['TutorName']);	
		} else {
			$objSmarty->assign("TutorId", '');
			$objSmarty->assign("TutorName", '');			
			$objSmarty->assign("ErrorMessage", "Invalid Login");			
			Redirect("index.php");
		//echo "check user login block...";
		}
	} 
	
	function MakeTutorLogout()
	{	
		unset($_SESSION['TutorName']);
		unset($_SESSION['FirstName']);
		unset($_SESSION['LastName']);
		unset($_SESSION['Email']);
		unset($_SESSION['TutorId']);
		unset($_SESSION['session_id']);
		
		header("Location:index.php");
	}

	function forgotTutorPass()
	{
		global $objSmarty,$config;
		$sql = "SELECT * FROM `tbl_tutor`"
		       ." WHERE `Email` = '".$_REQUEST['email']."'";
		       
		$Count	= $this->ExecuteQuery($sql, "norows");
		if($Count > 0){
			$details = $this->ExecuteQuery($sql, "select");
			$Email = $details[0]['Email'];			
			$UserName=$details[0]['Username'];
			$Password=$details[0]['Password'];
			$subject = "Bookwormz - Password Request!!!";
			$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
				<title>Password Retrival</title>
				<link href="melslifecss.css" rel="stylesheet" type="text/css" />
				</head>
				
				<body>
				<table width="75%" border="0" align="center" bgcolor="#e7f2f7" cellpadding="5" cellspacing="0" class="border_grey">
				  <tr>
					<td width="100%" height="" align="left" bgcolor="#fff" class="normal_txt7"><img src="http://rajasriglobal.com/tutorwebsite/images/logo.jpg" /></td>
				  </tr>
				  <tr>
					<td><table width="100%"  cellspacing="0" cellpadding="0">

					  <tr>
						<td width="8">&nbsp;</td>
						<td colspan="2" align="left" valign="middle" style="font-family: Arial, Helvetica, sans-serif;
								font-size: 14px;
								font-weight: bolder;
								color: #fd0803;">Bookwormz</td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2" ></td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
						<td colspan="2" align="left" valign="middle" ><div align="justify" style="font-family: Arial, Helvetica, sans-serif;font-size: 12px;font-weight: normal;color: #000000;text-decoration: none;" >Your login details:</div></td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2"></td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
						<td colspan="2" align="left" valign="middle" ><span style="font-family: Arial, Helvetica, sans-serif;	font-size: 12px; font-weight: bold;	color: #000000;	text-decoration: none;" >Username: &nbsp;</span><b>'.$UserName.'</b></td>
					  </tr>
					  <tr>
						<td>&nbsp;</td>
						<td colspan="2" align="left" valign="middle" ><span style="font-family: Arial, Helvetica, sans-serif;	font-size: 12px; font-weight: bold;	color: #000000;	text-decoration: none;" >Password: &nbsp;</span><b>'.$Password.'</b></td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2"></td>
					  </tr>
					  <tr>
						<td colspan="2">&nbsp;</td>
					  </tr>
					  <tr>
						<td colspan="2">&nbsp;</td>
					  </tr>						  					  
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2" align="left">Thanks,</td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2" align="left">Bookwormz Team</td>
					  </tr>
					  <tr>
						<td height="8"></td>
						<td height="8" colspan="2"></td>
					  </tr>
					</table></td>
				  </tr>
				  <tr>
					<td>&nbsp;</td>
				  </tr>				  				  
				</table>
				</body>
				</html>';
			$headers = 'From: '.$config['AdminMail']."\r\n";
			$headers.= 'Reply-To: '.$config['AdminMail']."\r\n";
			$headers.= "MIME-Version: 1.0\r\n";
			$headers.= "Content-type: text/html; charset=iso-8859-1\r\n";		

			//echo $Email . " $subject ". " $message " . $headers; exit;
			@mail($Email,$subject,$message,$headers);
			$objSmarty->assign("SuccessMessage", "Login details has been sent successfully. Please check your mail");
			$objSmarty->assign("Student","");			
		}else{
			$objSmarty->assign("ErrorMessage", "Given email is not available in our database. Please check the email you have entered");
		}
	}	
	
}	
?>
<?php 
/*   Global Variables   */

##############################

	$config['SiteGlobalPath']				= "http://srinode41/GKaudit";

	$config['SiteLocalPath']				= $_SERVER['DOCUMENT_ROOT']."/GKaudit/";

	$config['SiteClassPath']				= $_SERVER['DOCUMENT_ROOT']."/GKaudit/includes/classes/";

	$config['SiteTemplatesPath']			= $config['SiteLocalPath']."templates/";

	$config['SiteTemplatesHeader']			= $config['SiteTemplatesPath']."header.tpl";

	$config['SiteTemplatesFooter']			= $config['SiteTemplatesPath']."footer.tpl";

 
/*   Global Site Variables   */

##############################

	$config['SiteTitle']	  	= "GKaudit";

	

/*local	Database Settings	*/

##############################



	$config['DBHostName']	= "localhost";

	$config['DBUserName']	= "root";

	$config['DBPassword']	= "";

	$config['DBName']		= "gkaudit";
	
	

/*	Page Navigation Settings	*/

##############################

	$config['Limit'] = 20;	

/* Setting some necessary values Here */

	#######################################

	$config['today']=date('Y-m-d');
	
	$config['HoursInGMT'] = "-6";
	$config['MinutesInGMT'] = "0";

/* Setting some necessary values Here */
	
	#######################################
?>
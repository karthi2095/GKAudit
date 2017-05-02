
<?php  
//include "includes/common.php";
$super=$objlogin->Getsupervisordata(); 
 ?>

<h2 style="text-align: center; display: inline-block; width: 100%;">
				Daily Management Diagnosis  <span style="float: right;"><a
					class="logout" href="Logout.php">Logout</a> </span>
</h2>
<?php 
	$url=$_SERVER['REQUEST_URI'];
	$exp=explode("/",$url);
	$exp1=explode(".",$exp[2]);
	$active=$exp1[0];
	?>
<div>
<ul class="menu">
<li> <a <?php if($active=="tqm-teamwork"){?> class="active" <?php }?> href="tqm-teamwork.php">TQM & Teamwork</a></li>
<li> <a <?php if($active=="quality-management"){?> class="active" <?php }?> href="quality-management.php">Quality Management</a></li>
<li> <a <?php if($active=="standard-operation"){?> class="active" <?php }?> href="standard-operation.php">Standard Operation</a></li>
<li> <a <?php if($active=="skill-management"){?> class="active" <?php }?> href="skill-management.php">Skill Management</a></li>
<li> <a <?php if($active=="work-allocation"){?> class="active" <?php }?> href="work-allocation.php">Work Allocation</a></li>
<li> <a <?php if($active=="facility-management"){?> class="active" <?php }?> href="facility-management.php">Facility Management</a></li>
<li> <a <?php if($active=="safety-environment"){?> class="active" <?php }?> href="safety-environment.php">Safety & Environment</a></li>
<li> <a <?php if($active=="cost-management"){?> class="active" <?php }?> href="cost-management.php">Cost Management</a></li>
<li> <a <?php if($active=="report"){?> class="active" <?php }?> href="report.php" style="border-right:none;">Report</a></li>
<div class="clear"></div>
</ul>

</div>
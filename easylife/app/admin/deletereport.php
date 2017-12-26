<?php 
	$admin="admin";
	require_once "../../service/report_serviec.php"; 
	require_once "../../service/member_service.php"; 
?>
<?php
	$reportCode=$_GET['reportCode'];
	$report=getReportByCode($reportCode);
	$member=getMemberById($report['Member_ID']);
	$report['Status']="1";
	editReport($report);
	
?>
<?php


<html>
	<h3>Are you sure you want to delete this report?</h3>
	<br>
	<br>
	<br>
	<table>
		<tr >
			<td width="20%">Report ID :</td>
			<td><?=$report['Report_Code']?></td>
		</tr>
		<tr>
			<td>Report Title :</td>
			<td><?=$report['Report_Title']?></td>
		</tr>
		<tr>
			<td>Reported By :</td>
			<td><a href="uview.php?memberID=<?=$report['Member_ID']?>"><?=$member['Name']?></a></td>
		</tr>
		<tr>
			<td>Report Time :</td>
			<td><?=$report['Date']?></td>
		</tr>
		<tr height="150">
			<td >
				Report Desctiption :
			</td>
			<td><?=$report['Description']?></td>
		</tr>
	</table>
	<br>
	<a href="treports.php"><button>Yes</button></a>
	<a href="treports.php"><button>No</button></a>	
</html>
		
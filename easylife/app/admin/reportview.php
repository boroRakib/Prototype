<?php 
	$admin="admin";
	require_once "../../service/report_serviec.php"; 
	require_once "../../service/member_service.php"; 
?>
<?php
	$reportCode=$_GET['reportCode'];
	$report=getReportByCode($reportCode);
	
?>

<html>
	<table>
		<tr >
			<td width="20%">Report ID :</td>
			<td><?=$report['Report_Code']?></td>
		</tr>
		<tr>
			<td>Report Title :</td>
			<td>Defect Product</td>
		</tr>
		<tr>
			<td>Reported By :</td>
			<td><a href="udetails.php">Efti</a></td>
		</tr>
		<tr>
			<td>Report Time :</td>
			<td>21/12/2017</td>
		</tr>
		<tr>
			<td>Report Title :</td>
			<td>Defect Product</td>
		</tr>
		<tr height="150">
			<td >
				Report Desctiption :
			</td>
			<td>On 19/12/2017, I bought a Kakasgi tshirt.<br>
				Unfortunately, your product had some loose stiches.<br>
				To resolve the problem, I would appreciate if you replace the product.<br>
				I look forward to your reply and a resolution to my problem. I will wait 3 days before seeking third-party assistance. Please contact me by phone 01912345678.
			</td>
		</tr>
	</table>
	<a href="treports.php"><button>Back</button></a>
</html>
		
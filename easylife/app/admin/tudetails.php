<?php require_once "../../service/validation_service.php"; ?>
<?php 
 	$admin="admin";
 	require_once "../../service/member_service.php"; 
?>
<html>
	<table >
		<tr >
			<td width="40%">
				<p>Search by:<p><select>
					<option>ID</option>
					<option>Name</option>
					<option>Email</option>
				</select>
				
			</td>
			<td>
				<input type="text"/><input type="submit" value="Search Admin"/>
			</td>
		</tr>
	</table>
	<br>
	<br>
	<fieldset>
		<legend>All Admins</legend>
			<table border=1 width=100%>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Total Purchases</th>
					<th>Last Active</th>
					<th>Status</th>
				</tr>
				<?php
					$members=getAllUsers();
					$cy=(int)date("Y");
					$cm=(int)date("m");
					$cd=(int)date("d");
					foreach($members as $member)
					{
						$y=(int)explode("-",$member['Last_Logged_in'])[0];
						$m=(int)explode("-",$member['Last_Logged_in'])[1];
						$d=(int)explode("-",$member['Last_Logged_in'])[2];
						
						if($cy==$y)
						{
							if($cm==$m)
							{
								if(($cd==$d)||($cd<$d))
								{
									$log="Today";
								}
								else
								{
									$log=($cd-$d)." day(s) ago";
								}
							}
							else
							{
								$log=($cm-$m)." month(s) ago";
							}
						}
						else
						{
							$log=($cy-$y)." year(s) ago";
						}
						
						echo	"<tr>
									<td>".$member['Member_ID']."</td>
									<td>".$member['Name']."</td>
									<td>".$member['Email']."</td>
									<td>".$member['Total_Purchase']."</td>
									<td>".$log."</td>
									<td>".$member['Status']."</td>
									<td><a href=\"Editprofile.php?memberID=".$member['Member_ID']."\">edit</a></td>
									<td><a href=\"deleteuser.php?memberID=".$member['Member_ID']."\">delete</a></td></tr>";
							
					}
					?>
			</table>
	</fieldset>
	<br>
</html>

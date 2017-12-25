<?php require_once "../../data/member_data_access.php"; ?>
<?php
	$memberID=$_GET['memberID'];
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
					<th>Last Active</th>
				</tr>
				<?php
					$members=getAllMembersFromDB();
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
									<td>".$log."</td>
									<td><a href=\"Editprofile.php?memberID=".$member['Member_ID']."\">edit</a></td>";
						if($member['Member_ID']!=$memberID)
							{
								echo	"<td><a href=\"deleteadmin.php?memberID=".$member['Member_ID']."&id=".$memberID."\">delete</a></td></tr>";
							}
					}
					?>
			</table>
	</fieldset>
	<br>
	<a href="dashboard.php"><button>Back</button></a>
</html>

<html>
	<table >
		<tr >
			<td width="40%">
				<p>Search by:<p><select>
					<option>ID</option>
					<option>Name</option>
					<option>Email</option>
					<option>Status</option>
				</select>
				
			</td>
			<td>
				<input type="text"/><input type="submit" value="Search User"/>
			</td>
		</tr>
	</table>
	<br>
	<br>
	<fieldset>
		<legend>All Users</legend>
			<table border=1 width=100%>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Total Purchases</th>
					<th>Last Active</th>
					<th>Status</th>
				</tr>
				<tr>
					<td>15-29750-2</td>
					<td>Efti</td>
					<td>12</td>
					<td>1d ago</td>
					<td><input type="checkbox" >Blocked</td>
					<td><a href="uedit.php">edit</a></td>
					<td><a href="deleteuser.php">delete</a></td>
				</tr>
				<tr>
					<td>15-29521-2</td>
					<td>Rakib</td>
					<td>15</td>
					<td>1d ago</td>
					<td><input type="checkbox" checked="checked">Blocked</td>
					<td><a href="uedit.php">edit</a></td>
					<td><a href="deleteuser.php">delete</a></td>
				</tr>
				<tr>
					<td>15-29774-2</td>
					<td>Rajesh</td>
					<td>20</td>
					<td>1d ago</td>
					<td><input type="checkbox">Blocked</td>
					<td><a href="uedit.php">edit</a></td>
					<td><a href="deleteuser.php">delete</a></td>
				</tr>
			</table>
	</fieldset>
	<br>
	<a href="dashboard.php"><button>Back</button></a>
</html>

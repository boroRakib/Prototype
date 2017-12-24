<html>
	<table >
		<tr >
			<td width="40%">
				<p>Search by:<p><select>
					<option>ID</option>
					<option>Title</option>
					<option>User ID</option>
					<option>Status</option>
				</select>
				
			</td>
			<td>
				<input type="text"/><input type="submit" value="Search Report"/>
			</td>
		</tr>
	</table>
	<br>
	<br>
	<fieldset>
		<legend>All Reports</legend>
			<table border=1 width=100%>
				<tr>
					<th>Report ID</th>
					<th>Report Title</th>
					<th>Reported By</th>
					<th>Report Time</th>
					<th>Status</th>
				</tr>
				<tr>
					<td>15-2</td>
					<td>Defect Product</td>
					<td><a href="udetails.php">Efti</a></td>
					<td>1d ago</td>
					<td>Seen</td>
					<td><a href="reportview.php">view</a></td>
					<td><a href="deletereport.php">delete</a></td>
				</tr>
				<tr>
					<td>15-3</td>
					<td>Return Product</td>
					<td><a href="udetails.php">Rajesh</a></td>
					<td>2d ago</td>
					<td>Unseen</td>
					<td><a href="reportview.php">view</a></td>
					<td><a href="deletereport.php">delete</a></td>
				</tr>
				<tr>
					<td>15-4</td>
					<td>Poor Delivery</td>
					<td><a href="udetails.php">Rakib</a></td>
					<td>3d ago</td>
					<td>Seen</td>
					<td><a href="reportview.php">view</a></td>
					<td><a href="deletereport.php">delete</a></td>
				</tr>
			</table>
	</fieldset>
	<br>
	<a href="dashboard.php"><button>Back</button></a>
</html>

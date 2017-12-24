<html>
	<table >
			<tr >
				<td width="40%">
					<p>Search by:<p><select>
						<option>Invoice Code</option>
						<option>Date</option>
						<option>Buyer</option>
						<option>Invoice Status</option>
					</select>
					
				</td>
				<td>
					<input type="text"/><input type="submit" value="Search Invoice"/>
				</td>
			</tr>
		</table>
		<br>
		<br>
<fieldset >
							<legend><h3>Invoice</h3></legend>
								<table border="1" width=100%>
									<tr>
										<th>Invoice Code</th>
										<th>Buyer</th>
										<th>Date</th>
										<th>Order Status</th>
										<th>Payment Status</th>
									</tr>
									<tr>
										<td>I-1-297</td>
										<td><a href="udetails.php">Efti</a></td>
										<td>18/12/2017</td>
										<td><input type="radio" name="status" checked="checked">Pending
											<input type="radio"  name="status">Delivered</td>
										<td>Not Payed</td>
										<td><a href="viewinvoice.php">view</td>
										<td><a href="deleteinvoice.php">delete</td>
									</tr>
									<tr>
										<td>I-1-297</td>
										<td><a href="udetails.php">Efti</a></td>
										<td>18/12/2017</td>
										<td><input type="radio" name="status1" >Pending
											<input type="radio"  name="status1" checked="checked">Delivered</td>
										<td>Payed</td>
										<td><a href="viewinvoice.php">view</td>
										<td><a href="deleteinvoice.php">delete</td>
									</tr>
									<tr>
										<td>I-1-297</td>
										<td><a href="udetails.php">Efti</a></td>
										<td>18/12/2017</td>
										<td><input type="radio" name="status2" checked="checked">Pending
											<input type="radio"  name="status2">Delivered</td>	
										<td>Payed</td>
										<td><a href="viewinvoice.php">view</td>
										<td><a href="deleteinvoice.php">delete</td>
									</tr>
								</table>
					</fieldset>
					<br>
	<a href="dashboard.php"><button>Back</button></a>
					
</html>
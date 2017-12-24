<html>
	<table >
			<tr >
				<td width="40%">
					<p>Search by:<p><select>
						<option>Product Code</option>
						<option>Name</option>
						<option>Buyer</option>
						<option>Order Status</option>
					</select>
					
				</td>
				<td>
					<input type="text"/><input type="submit" value="Search Order"/>
				</td>
			</tr>
		</table>
		<br>
		<br>
<fieldset >
							<legend><h3>Orders</h3></legend>
								<table border=1 width=100%>
									<tr>
										<th>Order Code</th>
										<th>Product Code</th>
										<th>Invoice</th>
										<th>Order Placed</th>
										<th>Product</th>
										<th>Order Status</th>
										<th>Payment Status</th>
									</tr>
									<tr>
										<td>O-1-297</td>
										<td>S-1-895</td>
										<td>I-1-297</td>
										<td>18/12/2017</td>
										<td>Kakashi T-Shirt</td>
										<td><input type="radio" name="status" checked="checked">Pending
											<input type="radio"  name="status">Delivered</td>
										<td>Not Paid</td>
									</tr>
									<tr>
										<td>O-1-297</td>
										<td>S-1-895</td>
										<td>I-1-297</td>
										<td>18/12/2017</td>
										<td>Kakashi T-Shirt</td>
										<td><input type="radio" name="status1" >Pending
											<input type="radio"  name="status1" checked="checked">Delivered</td>
										<td>Paid</td>	
									</tr>
									<tr>
										<td>O-1-297</td>
										<td>S-1-895</td>
										<td>I-1-297</td>
										<td>18/12/2017</td>
										<td>Kakashi T-Shirt</td>
										<td><input type="radio" name="status2" checked="checked">Pending
											<input type="radio"  name="status2">Delivered</td>	
										<td>Paid</td>
									</tr>
								</table>
					</fieldset>
					<br>
	<a href="dashboard.php"><button>Back</button></a>
					
</html>
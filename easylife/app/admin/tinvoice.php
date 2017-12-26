<?php 
 	$admin="admin";
 	require_once "../../service/invoice_serviece.php";
	require_once "../../service/member_service.php";
	
?>
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
									<?php
									$invoices=getAllInvoices();
									$cy=(int)date("Y");
									$cm=(int)date("m");
									$cd=(int)date("d");
									foreach($invoices as $invoice)
									{
									$member=getMemberById($invoice['Member_ID']);
									$y=(int)explode("-",explode(" ",$invoice['Date'])[0])[0];
									$m=(int)explode("-",explode(" ",$invoice['Date'])[0])[1];
									$d=(int)explode("-",explode(" ",$invoice['Date'])[0])[2];
									
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
									echo
									"<tr>
										<td>".$invoice['Invoice_Code']."</td>
										<td><a href=\"uview.php?memberID=".$invoice['Member_ID']."\">".$member['Name']."</a></td>
										<td>".$log."</td>
										<td>".$invoice['Status']."</td>
										<td>".$invoice['Payment_Status']."</td>
										<td><a href=\"viewinvoice.php?invoiceCode=".$invoice['Invoice_Code']."\">view</td>
										<td><a href=\"deleteinvoice.php?invoiceCode=".$invoice['Invoice_Code']."\">delete</td>
									</tr>";
									}
									?>
									
								</table>
					</fieldset>
					
</html>
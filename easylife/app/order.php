<?php session_start(); ?>
<?php
	if($_SESSION['member_name']!="")
	{
		$memberName=$_SESSION['member_name'];
		$memberID=$_SESSION['member_id'];
	}
	else
	{
		$memberID="";
		echo "<script>				
			document.location='LogIn_Cart.php';
		 </script>";
	}
	
	if(isset($_COOKIE['user_qty']))
	{
		$qty=$_COOKIE['user_qty'];
		$noOfProduct=count($_COOKIE['user_qty']);
	}
	else
	{
		$noOfProduct=0;
	}
?>
<html>
	<head>
		<title>Order</title>
	</head>
	<body>
		<table  width="100%" bgcolor="Gainsboro">
			<tr>
				<td align="center">Trusted Online Shopping Site In Bangladesh</td>
				<td align="center"><img src="resources/contact.jpg" height="30" width="30"/>01851-851405,01759-833364(10am-10pm)</td>
				<td align="center"><a href="howToBuy.php">How To Buy</a></td>
				
			</tr>
			<tr>
				<td align="center" colspan="3">
					<table  width="100%">
						<tr>
							<td align="center"><a href="home.php"><img src="resources/e.jpg" height="60" width="120" /></a></td>
							<form action="product_by_search.php"><td align="center"><input size="40" name="search" placeholder="Search products"/><input type="submit" value="Search"/></td></form>
							<td align="center">(<?=$noOfProduct?>)items<a href="shoppingCart.php"><img src="resources/c.jpg" height="30" width="30"/></a></td>
							<td align="center"><a href="trackProductSearch.php"><button>Track Product</button></td>
							<td align="center">
								<table border="1">
									<tr>
										<td><img src="resources/m.jpg" height="30" width="30"/></td>
										
										<?php if($memberID=="") { ?>
										<td><a href="Registration.php">Registartion</a></td>
										<?php } ?>
										<?php if($memberID!="") { ?>
										<td><a href="personalInfo.php?memberID=<?=$memberID?>"><?=$memberName?></a></td>
										<?php } ?>
										
									</tr>
									<tr align="right">
										<?php if($memberID!="") { ?>
										<td colspan="2"><a href="LogOut.php">Log Out</a></td>
										<?php } ?>
										
										<?php if($memberID=="") { ?>
										<td colspan="2"><a href="logIn.php">Log In</a></td>
										<?php } ?>
									</tr>
									
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr height="600">
				<td colspan="3" align="center">
					<table  width="100%" height="600">
						<tr>
							<th colspan="5"><h2>Order Information<h2></th>
						<tr>
						<tr>
							<td><b>ORDER #12867</b><br>Order Date: Tuesday, December 19, 2017<br>Order Status: Pending<br>Order Total: Tk 1840</td>
							<td></td>
						</tr>
						<tr>
							<td><b>BILLING ADDRESS</b>
								<br>Efti
								<br>Email: macefti276@gmail.com
								<br>Phone: 01912311234
								<br>Mirpur
								<br>Dhaka</td>
							<td><b>SHIPPING ADDRESS</b>
								<br>Efti
								<br>Email: macefti276@gmail.com
								<br>Phone: 01912311234
								<br>Mirpur
								<br>Dhaka</td>
							
						</tr>
						<tr>
							<td><b>PAYMENT</b>
								<br>Payment Method: Cash On Delivery (COD)
								<br>Payment Status: Pending</td>
							<td><b>SHIPPING</b>
								<br>Shipping Method:
								<br>Shipping Status: Not yet shipped</td>
							
						</tr>
						<tr >
							<td colspan="2" >
							<table width="100%">
								<tr>
									<td></td>
									<td><b>Price</b></td>
									<td><b>Quality</b></td>
									<td><b>Total</b></td>
								</tr>
								<tr >
									<td width="800">
										<table >
										<tr>
											<td width="50">
												<img src="resources/tshirt1.jpg" height="40" width="40"/>
											</td>
											<td>"Kakashi T-Shirt" Product Code: S-1-895</td>
										</tr>
										</table>
									</td>
									<td>600 Tk</td>
									<td>1</td>
									<td>600 Tk</td>
								</tr>
								<tr >
									<td width="800">
										<table  >
										<tr>
											<td width="50">
												<img src="resources/tshirt2.jpg" height="40" width="40"/>
											</td>
											<td>"Kakashi T-Shirt" Product Code: S-1-895</td>
										</tr>
										</table>
									</td>
									<td>600 Tk</td>
									<td>2</td>
									<td>1200 Tk</td>
								</tr>
								<tr height="50">
									<td></td>
									<td></td>
									<td>Shipping bill</td>
									<td>40 tk</td>
								</tr>
								<tr height="50">
									<td></td>
									<td></td>
									<td><b>Net Total</b></td>
									<td><b>1840 tk</b></td>
								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<th colspan="2"><a href="home.php">Back</a></th>
						<tr>
					
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<table>
						<tr>
							<td ><a href="https://www.facebook.com/"><img src="resources/f.jpg" height="30" width="30" /></a>
							<a href="https://www.instagram.com/"><img src="resources/i.jpg" height="30" width="30" /></a>
							<a href="https://twitter.com/"><img src="resources/t.jpg" height="30" width="30" /></a>
							<a href="https://www.youtube.com/"><img src="resources/y.jpg" height="30" width="30" /></a></td>
							
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td align="center" colspan="3">
					<table width="100%">
						<tr>
							<td align="center">
								<p><b>Information</b></p>
								<a href="aboutUs.php">About Us</a></br>
								<a href="contactUs.php">Contact Us</a>
							</td>
							<td align="center">
								<p><b>Customer Serviece</b></p>
								<a href="securityPolicy.php">Security Policy</a></br>
								<a href="shipping.php">Shipping & Replacement</a></br>
								<a href="privacyPolicy.php">Privacy Policy</a></br>
								<a href="termsOfuse.php">Terms Of Use</a>
							</td>
							<td align="center">
								<p><b>My Account</b></p>
								<a href="<?php if($memberID!="") { ?>personalInfo.php<?php } ?><?php if($memberID=="") { ?>login.php<?php } ?>">Personal Info</a></br>
								
								<a href="order.php">Orders</a></br>
								<a href="shoppingCart.php">Shopping Cart</a></br>
								<a href="<?php if($memberID!="") { ?>report.php<?php } ?><?php if($memberID=="") { ?>login.php<?php } ?>">Report</a></br>
							</td>
							<td align="center">
								<p><b>Visit Us</b></p>
								<img src="resources/l.jpg" height="20" width="20" />Dhanmondi, Dhaka-1205 </br>
								<img src="resources/mail.jpg" height="20" width="20" />admin@easylife.com </br>
								<img src="resources/mobile.jpg" height="20" width="20" />09636-102030
								
							</td>
						</tr>
						
					</table>
						<tr>
							<td align="center" colspan="3"><img src="resources/bkash.jpg" height="40" width="40" />
							<img src="resources/rocket.jpg" height="40" width="40" /></td>
						</tr>
						<tr>
							<td align="center">Powered By easylife</td>
							<td></td>
							<td align="center">Copyright &copy 2017 easylife.com. All rights reserved. 2017 </td>
						</tr>
				</td>
			</tr>
		
		</table>
	</body>

</html>

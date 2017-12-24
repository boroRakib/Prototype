<?php require_once "../service/product_serviec.php"; ?>
<?php
	$catagory=$_GET['catagory'];
	$products=getProductsByCatagory($catagory);

?>

<html>
	<head>
		<title>Men</title>
	</head>
	<body>
		<table   width="100%" bgcolor="Gainsboro" >
			<tr height="20">
				<td align="center">Trusted Online Shopping Site In Bangladesh</td>
				<td align="center"><img src="resources/contact.jpg" height="30" width="30"/>01851-851405,01759-833364(10am-10pm)</td>
				<td align="center"><a href="howToBuy.php">How To Buy</a></td>
				
			</tr>
			<tr height="80">
				<td align="center" colspan="3">
					<table   width="100%" bgcolor="WhiteSmoke " height="80">
						<tr>
							<td align="center"><a href="home.php"><img src="resources/e.jpg" height="60" width="150" /></a></td>
							<td align="center"><input size="40" name="search" placeholder="Search products"/><input type="submit" value="Search"/></td>
							<td align="center">(2)items<a href="shoppingCart.php"><img src="resources/c.jpg" height="30" width="30"/></a></td>
							<td align="center"><a href="trackProduct.php">Track Product</a></td>
							<td align="center">
								<table  >
									<tr rowspan="2">
										<td><img src="resources/m.jpg" height="30" width="30"/></td>
										<td><a href="Registration.php">Registartion</a></td>
									</tr>
									<tr>
										<td><a href="home.php">Log Out</a></td>
										<td><a href="logIn.php">Log In</a></td>
									</tr>
									
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<table width="100%">
						<tr>
							<td width="20%" valign="top">
								<table height="400" width="100%" valign="top" bgcolor="RosyBrown    ">
								<tr height="50">
									<td><h2><?=$catagory?></h2><hr/></td>
								</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;" >
												<option value="home.php">Winter Collection</option>
												<option value="product_by_category.php?catagory=Gents Winter Collection">Gents Winter Collection</option>
												<option value="product_by_category.php?catagory=Ladies Winter Collection">Ladies Winter Collection</option>
												<option value="kid.php">Kids Winter Collection</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="home.php">Womens Clothing</option>
												<option value="women.php">Hijab And Dupatta</option>
												<option value="women.php">Saree</option>
												<option value="women.php">Three Piece</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="home.php">Mens Clothing</option>
												<option value="men.php">Shirt</option>
												<option value="men.php">Panjabi</option>
												<option value="men.php">Pant</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="home.php">Kids Clothing</option>
												<option value="kid.php">T-Shirt</option>
												<option value="kid.php">Trouser</option>
												<option value="kid.php">Cap</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="home.php">Accessories</option>
												<option value="accessories.php">Ear Rings</option>
												<option value="accessories.php">Money Bag</option>
												<option value="accessories.php">Watch</option>
												<option value="accessories.php">Necklace</option>
												<option value="accessories.php">Sunglass</option>
												<option value="accessories.php">Bag</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="home.php">Footwear</option>
												<option value="footWear.php">Mens Footwear</option>
												<option value="footWear.php">Womens Footwear</option>
												<option value="footWear.php">Kids Footwear</option>
											</select>
										</td>
									</tr>
									<tr>
										<td height="50">
											<select onchange="location = this.value;">
												<option value="home.php">Brand</option>
												<option value="brand.php">Eacstasy</option>
												<option value="brand.php">Aarong</option>
												<option value="brand.php">Yellow</option>
											</select>
										</td>
									</tr>
								</table>
								
							</td>
							<td align="center" width="80%">
								<table width="100%">
									<tr>
										<td >
											
										</td>
									</tr>
									<tr>
										<td width="800">
											<table align="center" width="100%" bgcolor="white">
											<?php $count=0; ?>
											
											<?php  for($p=1;$p<=(count($products)/3);$p++) { ?>
												<tr>
												<?php for($q=1;$q<=3;$q++) { ?>
													<td align="center" height="300">
														<a href="details.php?product_name=<?=$products[$count]['Name']?>"><img src="resources/<?= $products[$count]['Name'] ?>.jpg" height="200"/></a>
														<br/><?= $products[$count]['Name'] ?><br/>
														<b>Tk <?= $products[$count]['Price'] ?></b>
														
													</td>
													<?php $count++; } ?>
												</tr>
											<?php } ?>
												
												
											<?php if(((count($products)%3)==1)|| count($products)==1) {?>
												<tr>
													<td align="center" height="300">
														<a href="details.php?product_name=<?=$products[$count]['Name']?>"><img src="resources/<?= $products[$count]['Name'] ?>.jpg" height="200"/></a>
														<br/><?= $products[$count]['Name'] ?><br/>
														<b>Tk <?= $products[$count]['Price'] ?></b>
														
													</td>
												</tr>
											<?php } ?>
												
												
											<?php if(((count($products)%3)==2)||count($products)==2) {?>
												<tr>
													<?php for($q=1;$q<=2;$q++) { ?>
													<td align="center" height="300">
														<a href="details.php?product_name=<?=$products[$count]['Name']?>"><img src="resources/<?= $products[$count]['Name'] ?>.jpg" height="200"/></a>
														<br/><?= $products[$count]['Name'] ?><br/>
														<b>Tk <?= $products[$count]['Price'] ?></b>
														
													</td>
													<?php $count++; } ?>
												</tr>
												<?php } ?>
												
												
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
						
					</table>
				</td>
			</tr>
			<tr bgcolor="WhiteSmoke ">
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
								<a href="personalInfo.php">Personal Info</a></br>
								
								<a href="order.php">Orders</a></br>
								<a href="shoppingCart.php">Shopping Cart</a></br> <a href="report.php">Report</a></br>
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
<?php require_once "../service/product_serviec.php"; ?>
<?php
	$product_name=$_GET['product_name'];
	$product=getProductsByName($product_name);
	//var_dump($product);
	if(!isset($_COOKIE['easylife_cart']))
	{
		 $cookie_name = "easylife_cart[0]";
		 $cookie_value = $product[0]['Name'];
		 setcookie($cookie_name,$cookie_value,time() + 3600,"/");
	}
	else
	{
		 $i=count($_COOKIE['easylife_cart']);
		 $cookie_name = "easylife_cart[$i]";
		 $cookie_value = $product[0]['Name'];
		 setcookie($cookie_name,$cookie_value,time() + 3600,"/");
	}
	echo "<script>				
			document.location='shoppingCart.php';
		 </script>";
?>
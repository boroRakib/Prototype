<?php
	$id=$_GET['id'];
	setcookie("user_qty[$id]","",time() - 3600,"/");
	setcookie("easylife_cart[$id]","",time() - 3600,"/");
	
	echo "<script>				
		document.location='shoppingCart.php?';
	 </script>";
?>

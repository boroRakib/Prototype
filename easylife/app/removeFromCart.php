<?php
	$id=$_GET['id'];
	setcookie("user_qty[$id]","",time() - 3600,"/");
	setcookie("easylife_cart[$id]","",time() - 3600,"/");
	// var_dump($_COOKIE['user_qty']);
	// var_dump($_COOKIE['easylife_cart']);
	
	echo "<script>				
		document.location='sortCart.php?id=$id';
	 </script>";
?>

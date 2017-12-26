<?php
	if(isset($_COOKIE['user_qty']))
	{
		$noOfCookie=count($_COOKIE['user_qty']);
		$id=$_GET['id'];

		if($id!=$noOfCookie)
		{
			for($i=$id;$i<$noOfCookie-$id;$i++)
			{
				 setcookie("easylife_cart[$i]",$_COOKIE['easylife_cart'][$i+1],time() + 3600,"/");
				 setcookie("user_qty[$i]",$_COOKIE['user_qty'][$i+1],time() + 3600,"/");
			}
			
			setcookie("easylife_cart[$noOfCookie]","",time() - 3600,"/");
			setcookie("user_qty[$noOfCookie]","",time() - 3600,"/");
		}
	}
	
		echo "<script>				
		document.location='shoppingCart.php';
	 </script>";
	 


	
?>
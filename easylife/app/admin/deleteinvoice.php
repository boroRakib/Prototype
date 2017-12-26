<?php 
 	$admin="admin";
 	require_once "../../service/invoice_serviece.php";
	require_once "../../service/member_service.php";
	require_once "../../service/order_product-serviec.php";
	require_once "../../service/product_serviec.php";
	$page=(explode(".",(explode("/",$_SERVER['SCRIPT_FILENAME'])[8]))[0]);
	$invoiceCode=$_GET['invoiceCode'];
	$invoice=getInvoiceByCode($invoiceCode);
	$orders=getOrdersByInvoice($invoiceCode);
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		if($_POST['button']=="Yes")
		{
            foreach($orders as $order)
			{
				deleteOrder($order);
			}
			deleteInvoice($invoice);
			
        }
		
		echo 	"<script>document.location='tinvoice.php';</script>";
		die();
		
       
	}
?>
<html>
<form method="post">
	<h3>Are you sure you want to delete this report?</h3>
	<br>
	<br>
	<input type="submit" name="button" value="Yes"/>
	<input type="submit" name="button" value="No"/>	
	<br>
	<iframe frameborder="0" width="100%" height="380" src="viewinvoice.php?invoiceCode=<?=$invoiceCode?>&page=delete"></iframe>
					
	<br>
</form>
</html>
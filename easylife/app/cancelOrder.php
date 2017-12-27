<?php require_once "../service/validation_service.php"; ?>
<?php require_once "../service/order_product-serviec.php"; ?>
<?php require_once "../service/invoice_serviece.php"; ?>

<?php
	$icode=$_GET['del'];
	var_dump($icode);
	$invoice=getInvoiceByCodeFromDB($icode);
	var_dump($invoice);
	$order=getOrdersByInvoice($icode);
	var_dump($order);

	
?>
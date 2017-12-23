<?php require_once "data_access.php"; ?>
<?php
	function addProductToDB($product)
	{
        $sql = "INSERT INTO '$product[product'$product[ (Product Code,Name,Quantity,Total Sells,Price,Last Sold,Image,Catagory,Brand,Size,Description) VALUES ('$product[Product Code]', '$product[Name]', '$product[Quantity]', 0, '$product[Price]', NULL, '$product[Image]', '$product[Catagory]', '$product[Brand]', '$product[Size]', '$product[Description]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	function editProductToDb($product){
        $sql = "UPDATE person SET name='$person[name]', email='$person[email]' WHERE id=$person[id]";
        $result = executeSQL($sql);
        return $result;
    }
	
	
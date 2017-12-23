<?php require_once "data_access.php"; ?>
<?php
	function addProductToDB($product)
	{
        $sql = "INSERT INTO product (Product_Code,Name,Quantity,Total_Sells,Price,Last_Sold,Image,Catagory,Brand,Size,Description) VALUES ('$product[Product_Code]', '$product[Name]', '$product[Quantity]', 0, '$product[Price]', NULL, '$product[Image]', '$product[Catagory]', '$product[Brand]', '$product[Size]', '$product[Description]')";
        $result = executeSQL($sql);
        return $result;
    }
	
	function editProductToDb($product){
        $sql = "UPDATE product SET Product_Code='$product[Product_Code]',Name='$product[Name]',Quantity='$product[Quantity]',Total_Sells='$product[Total_Sells]',Price='$product[Price]',Last_Sold='$product[Last_Sold]',Image='$product[Image]',Catagory='$product[Catagory]',Brand='$product[Brand]',Size='$product[Size]',Description='$product[Description]'";
        $result = executeSQL($sql);
        return $result;
    }
	
	function deleteProductFromDB($product)
	{
		$sql = "DELETE FROM product WHERE Product_Code='$product[Product_Code]'";        
        $result = executeSQL($sql);
        return $result;
	}
	
	function getAllProductsFromDB(){
        $sql = "SELECT * FROM product";        
        $result = executeSQL($sql);
        
        $products = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $products[$i] = $row;
        }
        
        return $products;
    }
	
	function getProductByCodeFromDB($Product_code){
        $sql = "SELECT * FROM product WHERE Product_code=$Product_code";        
        $result = executeSQL($sql);
        
        $product = mysqli_fetch_assoc($result);
        
        return $product;
    }
	
	function getProductsByNameFromDB($Name){
        $sql = "SELECT * FROM product WHERE Name LIKE '%$Name%'";
        $result = executeSQL($sql);
        
        $products = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $products[$i] = $row;
        }
        
        return $products;
    }
	
	function getProductsByPriceFromDB($Price){
        $sql = "SELECT * FROM product WHERE Price=$Price";
        $result = executeSQL($sql);
        
        $products = array();
        for($i=0; $row = mysqli_fetch_assoc($result); ++$i){
            $products[$i] = $row;
        }
        
        return $products;
    }
?>
	
	
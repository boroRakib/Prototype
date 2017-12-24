<?php require_once "../data/product_data_access.php"; ?>
<?php
    function addProduct($product){
        return addProductToDb($product);
    }
    
    function editProduct($product){
        return editProductToDb($product);
    }
    
    function deleteProduct($productId){
        return deleteProductFromDb($productId);
    }
    
    function getAllProducts(){
        return getAllProductsFromDb();
    }
    
     function getProductByCode($Product_Code){
        return getProductByCodeFromDBFromDb($Product_Code);
    }
	function getProductsByName($Name)
	{
		return getProductsByNameFromDB($Name);
	}
	function getProductsByPrice($Price)
	{
		return getProductsByPriceFromDB($Price);
	}
?>
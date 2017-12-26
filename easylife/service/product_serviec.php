<?php 
 	if(empty($admin))
 	{
 		require_once "../data/product_data_access.php";
 	}
 	else
 	{
 		require_once "../../data/product_data_access.php";
 	}
?>
<?php
    function addProduct($product){
        return addProductToDb($product);
    }
    
    function editProduct($product){
        return editProductToDb($product);
    }
    
    function deleteProduct($productId){
        return deleteProductFromDB($productId);
    }
    
    function getAllProducts(){
        return getAllProductsFromDB();
    }
	
	function isUniqueProductName($name){
         $products  = getAllProducts();
         $isUnique = true;
         foreach($products as $product){
             if($product['Name']==$name){
                 $isUnique = false;
                 break;
             }
         }
         return $isUnique;
     }
    
     function getProductByCode($Product_Code){
        return getProductByCodeFromDB($Product_Code);
	 }

	function getProductsByName($Name)
	{
		return getProductsByNameFromDB($Name);
	}
	function getProductsByFullName($Name)
	{
		return getProductsByFullNameFromDB($Name);
	}
	function getProductsByPrice($Price)
	{
		return getProductsByPriceFromDB($Price);
	}
	function getProductsByCatagory($Catagory)
	{
		return getProductsByCatagoryFromDB($Catagory);
	}
	function getProductsByBrand($Brand)
	{
		return getProductsByBrandFromDB($Brand);
	}
?>
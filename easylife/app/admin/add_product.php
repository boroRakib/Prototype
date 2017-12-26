<?php require_once "../../service/validation_service.php"; ?>
<?php require_once "../../data/product_data_access.php"; ?>
<?php
	$name=$price=$size=$Quantity=$Product_Feature=$brand=$catagory="";
	$nameErr=$sizeErr=$brandErr=$CategoryErr=$QuantityErr=$priceErr="";
?>
<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name=$_POST['name'];
		$price=$_POST['price'];
		$size=$_POST['size'];
		$Quantity=$_POST['Quantity'];
		$Product_Feature=$_POST['Product_Feature'];
		$brand=$_POST['brand'];
		$catagory=$_POST['catagory'];
		
		$isValid=true;
		
		if(empty($name)){
            $isValid = false;
            $nameErr = "*";
        }
		
		if(empty($size)){
            $isValid = false;
            $sizeErr = "*";
        }
		
		if(empty($brand)){
            $isValid = false;
            $brandErr = "*";
        }
		
		if(empty($catagory)){
            $isValid = false;
            $CategoryErr= "*";
        }
		
		if(empty($Quantity)){
            $isValid = false;
            $QuantityErr = "*";
        }
		// else if(isValidPersonNum($Quantity)==false)
		// {
			// $isValid = false;
            // $QuantityErr = "Invalid Quantity";
		// }
		
		if(empty($price)){
            $isValid = false;
            $priceErr = "*";
        }
		
		// else if(isValidPersonNum($price)==false)
		// {
			// $isValid = false;
            // $priceErr = "Invalid price";
		// }
		
		if($isValid==true)
		{
			$id=getLastProductCodeFromDB()['MAX(`Product _Code`)'];
			$product['Product _Code']=$id+1;
			$product['Name']=$name;
			$product['Quantity']=(int)$Quantity;
			$product['Price']=(int)$price;
			$product['Catagory']=$catagory;
			$product['Brand']=$brand;
			$product['Size']=$size;
			$product['Description']=$Product_Feature;
			var_dump($product);
			if(addProductToDB($product)==true){
                echo "<script>
                        document.location='successproduct.php?ProductCode=".$product['Product_Code']."';
                     </script>";
                 die();
            }
            else{
                echo "Internal Error<hr/>";
            }
		}
	}		
?>
<form method="post">
<fieldset>
    <legend><b>Add Product</b></legend>
        <br/>
		<table>
		<tr>
		<td>
        <table width="100%">
            <tr>
                <td width="130"></td>
                <td width="10"></td>
                <td width="230"></td>
                <td></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td>:</td>
                <td><input name="name" type="text" value="<?=$name?>" /></td>
                <td><font color="red"><?=$nameErr?></td>
            </tr>				
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Price</td>
                <td>:</td>
                <td><input name="price" type="text"value="<?=$price?>">Tk</td>
                <td><font color="red"><?=$priceErr?></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Size</td>
                <td>:</td>
                <td><input name="size" type="text"value="<?=$size?>"></td>
                <td><font color="red"><?=$sizeErr?></td>
            </tr>		
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Quantity</td>
                <td>:</td>
                <td><input name="Quantity"value="<?=$Quantity?>"></td>
                <td><font color="red"><?=$QuantityErr?></td>
            </tr>	
			<tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Brand</td>
                <td>:</td>
                <td>
					<select name="brand">
					<option></option>
					<option value="Local">Local</option>
					<option  value="Easy">Easy</option>
					<option  value="Eacstasy">Eacstasy</option>
					<option  value="Yellow">Yellow</option>
					<option  value="Aarong">Aarong</option>
					</select>
                </td>
                <td><font color="red"><?=$brandErr?></td>
            </tr>
			<tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Category</td>
                <td>:</td>
                <td>
					<select name="catagory">
					<option></option>
					<option  value="Winter Collection">Winter Collection</option>
					<option  value="Gents Winter Collection">Gents Winter Collection</option>
					<option  value="Ladies Winter Collection">Ladies Winter Collection</option>
					<option  value="Kids Winter Collection">Kids Winter Collection</option>
					<option  value="Womens Clothing">Womens Clothing</option>
					<option  value="Hijab And Dupatta">Hijab And Dupatta</option>
					<option  value="Saree">Saree</option>
					<option  value="Three Piece">Three Piece</option>
					<option  value="Mens Clothing">Mens Clothing</option>
					<option  value="Shirt">Shirt</option>
					<option  value="Panjabi">Panjabi</option>
					<option  value="Kids Clothing">Kids Clothing</option>
					<option  value="T-Shirt">T-Shirt</option>
					<option  value="Trouser">Trouser</option>
					<option  value="Cap">Cap</option>
					<option  value="Accessories">Accessories</option>
					<option  value="Ear Rings">Ear Rings</option>
					<option  value="Money Bag">Money Bag</option>
					<option  value="Watch">Watch</option>
					<option  value="Necklace">Necklace</option>
					<option  value="Sunglass">Sunglass</option>
					<option  value="Bag">Bag</option>
					<option  value="Footwear">Footwear</option>
					<option  value="Mens Footwear">Mens Footwear</option>
					<option  value="Womens Footwear">Womens Footwear</option>
					<option  value="Kids Footwear">Kids Footwear</option>
					</select>
                </td>
                <td><font color="red"><?=$CategoryErr?></td>
            </tr>
            <tr><td colspan="4"><hr/></td></tr>
            <tr>
                <td>Product Feature</td>
                <td>:</td>
                <td><input name="Product_Feature" value="<?=$Product_Feature?>"></td>
                <td></td>
            </tr>		
           
        </table>
		</td>
		<td>
		<table>
									<tr><td><img align="bottom" src="../resources/Image1.JPG" width="167"/></td></tr>
									<tr><td><input type="file" name="propic" accept="image/*"/></td></tr>
								</table>
								</td>
								</tr>
								</table>
        <hr/>
        <input type="submit" value="Add"/>
        <input type="reset"/>
</fieldset>
</form>
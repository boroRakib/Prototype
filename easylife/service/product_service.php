<?php require_once "data_access.php"; ?>
<?php
	function addProduct($product){
        $sql = "INSERT INTO `product` (`Product Code`, `Name`, `Quantity`, `Total Sells`, `Price`, `Last Sold`, `Image`, `Catagory`, `Brand`, `Size`, `Description`) VALUES ('P-000001', 'kakashi tshirt', '100', '0', '640', NULL, 'P-000001', 'Gents Winter Collection', 'Esctasy', 'L', 'High Quality Fabric: 150-180 GSM.Anti-Wrinkle. Fully Export Quality. High Quality Rubber Print. Long Lasting color.Nicely Sewed.')";
        $result = executeSQL($sql);
        return $result;
    }
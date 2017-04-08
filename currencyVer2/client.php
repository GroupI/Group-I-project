<?php 
include "represent.php";
$index_currency=(int)$_GET["q"];
$newObj = new CurrencyObject($index_currency);
$json = $newObj->passJson();
echo $json;	
?>
<?php 

include "represent.php";
$newObj = new CurrencyObject((int)$_GET["q"]);
return $newObj->passJson();

	
?>
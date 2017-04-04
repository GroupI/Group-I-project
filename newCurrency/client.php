<?php header("Content-Type: text/html; charset=utf-8");
include "currency_class.php";


$currencyObj = new Representator();
$currencyObj->showInfo();
?>
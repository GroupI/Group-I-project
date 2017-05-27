<?php
include "jsonWeather.php";
	
$obj = new JsonWeather((int)$_GET["q"]);
echo $obj->passJson();
	
?>
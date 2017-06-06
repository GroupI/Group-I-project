<?php 

include "newsObject.php";
$newObj = new NewsObject((int)$_GET["q"]);
echo ( $newObj->passJson());

	
?>
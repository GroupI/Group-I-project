<?php
require 'http://localhost/project/mvc/ToDoList';
$newObj = new ToDoList();
$json=$newObj->xhrGetListings();
echo $json;
?>
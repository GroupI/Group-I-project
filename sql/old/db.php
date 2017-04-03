<?php
   $connection=mysqli_connect('localhost','root','','login_db');
    if(!$connection){
        die("Database connection failed");
    }

<?php header("Content-Type: text/html; charset=utf-8");?>

<DOCTYPE html>

<html>
    <head>
    <title>Currency Widget</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="currentScripts.js"></script>
	<meta charset="utf-8" />
	<meta http-equiv="refresh" content="43200">
	<link rel="stylesheet" type="text/css" href="style.css">
    </head>
	
	<body>
    <div id="container">
  
    <select id="curr_index">

                    <option value="0" selected>Dollar USA</option>
                    <option value="1">Pound Great Britain</option>
                    <option value="2">Yen Japan</option>
                    <option value="3">Euro</option>
                    <option value="4">Dollar Australia</option>
		            <option value="5">Dollar Canada</option>
		            <option value="6">Krone Denmark</option>
		            <option value="7">Krone Norway</option>
		            <option value="8">Rand South Africa</option>
		            <option value="9">Krona Sweden</option>
		            <option value="10">Franc Switzerland</option>
		            <option value="11">Dinar Jordan</option>
		            <option value="12">Pound Lebanon</option>
		            <option value="13">Pound Egypt</option>
  
    </select>
  
    <div id="result">
    </div>	

	<br> 
    <input type="button" value="Reset widget to default" onClick="window.location.reload()"> 
  
  
  </div>
  </body> 
   
  
</html>
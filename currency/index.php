<html>
 <head>
 <script src="currencyScripts.js"></script> 
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>

 <form id="container">
 <p>
 Convert to:
 <select name="curr_to">
 <option value="NIS">NIS</option>
 </select>
 </p>
 <p>Insert quantity to convert: <input type="number" id="input"><br></p>
 <p>
 Select a wanted currency:
 <select name="curr_from" onchange="showInfo(this.value)">
                    <option value="">Insert wanted currency</option>
                    <option value="0  ">Dollar USA</option>
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
 </p>
   
 
 <p><div id="informer"><b>Insert currency quantity to get information</b></div></p>
 <p><div id="sum"><b></b></div></p>
 <p><div id="color"><b></b></div></p>

 </form>
 </body>
</html>
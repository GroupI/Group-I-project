<html>
 <head>
 
 <script src="weatherScripts.js"></script> 
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 
 <form id="container">
 <p>
 Select a wanted city to get weather:
 <select name="curr_from" onchange="showWeather(this.value)">
                    <option value="">Insert wanted city</option>
					<option value="1">Ashdod</option>
                    <option value="0">Eilat</option>
                    <option value="2">Beer Sheva</option>
                    <option value="3">Bet Shean</option>
                    <option value="4">Haifa</option>
		            <option value="5">Tiberias</option>
		            <option value="6">Jerusalem</option>
		            <option value="7">Lod</option>
		            <option value="8">Mizpe Ramon</option>
		            <option value="9">Nazareth</option>
		            <option value="10">En Gedi</option>
		            <option value="11">Afula</option>
		            <option value="12">Zefat</option>
		            <option value="13">Qazrin</option>
					<option value="14">Tel Aviv - Yafo</option>
 </select>
 </p>
 
 <div class="flex-container">
  <div class="flex-item">
  
  <p id="date"></p>
  <p id="max_temperature"></p>
  <p id="min_temperature"></p>
  <p id="max_humidity"></p>
  <p id="min_humidity"></p>
  <p id="wind_direction"></p>
  
  
  </div>
  <div  class="flex-item">
  
  <p id="date1"></p>
  <p id="max_temperature1"></p>
  <p id="min_temperature1"></p>
  
  </div>
  
  <div class="flex-item">
  
  <p id="date2"></p> 
  <p id="max_temperature2"></p>
  <p id="min_temperature2"></p>
  
  </div>
  <div class="flex-item">
  <p id="date3"></p>
  <p id="max_temperature3"></p>
  <p id="min_temperature3"></p>
  
  </div>    
</div>

</form>

</body>
</html>
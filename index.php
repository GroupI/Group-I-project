<?php



$i=0;


$url = "http://www.boi.org.il/currency.xml";





if ($curl = curl_init()) {
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    $xml = simplexml_load_string($result);
	$update = $xml->LAST_UPDATE;
    $objectName = $xml->CURRENCY[$i]->NAME;
	$objectUnit = $xml->CURRENCY[$i]->UNIT;
	$objectCurrencyCode = $xml->CURRENCY[$i]->CURRENCYCODE;
	$objectCountry = $xml->CURRENCY[$i]->COUNTRY;
	$objectRate = $xml->CURRENCY[$i]->RATE;
	$objectChange = $xml->CURRENCY[$i]->CHANGE;
	
	
		
    $name = $objectName. '';
	$unit = $objectUnit. '';
	$currencyCode=$objectCurrencyCode. '';
	$country=$objectCountry. '';
	$rate=$objectRate. '';
	$change=$objectChange. '';
	$lastUpdate=$update. '';


$json = array('Name'=> $name, 'Unit' => $unit, 'Code' => $currencyCode,'Country' => $country,'Rate' => $rate,'Change'=>$change );


if($change>0){
$color="#33ff33";

}

if($change<0){
$color="#ff0000";



}



}

?>





<DOCTYPE html>
<html>
  <head>
    <title>Widget</title>
	<style>
	#container{
	width: 400px;
	height: 450px;
	border: 1px solid #000;
	background-color: #2f2f2f;
	overflow: hidden;
	border-radius: 3px;
	color: #fefdfb;
	}
	
	#name{
	font-size: 30px;
	color: white;
	}
	
	#other{
	font-size: 20px;
	color: white;
	}
	
	</style>
	
	
	
	

	
	
	
	
	
  </head>
  
  <body>
  <div id="container">
  <table width="100%">
  
  
  <tr>
  <h1 align="left" rowspan="3" width="100%" id="name">Name of currency is : <?php echo $json['Name']; ?></h1>
  </tr>
  
  <tr>
  <h2 align="left" style="color:white;">Unit is : <?php echo $json['Unit']; ?></h2>
  </tr>
  
  
  <tr>
  <h2 align="left" style="color:white;">Currency Code is : <?php echo $json['Code']; ?></h2>
  </tr>
  
  <tr>
  <h2 align="left" style="color:white;">Country is : <?php echo $json['Country']; ?></h2>
  </tr>
  
  <tr>
  <h2 align="left" style="color:white;">Rate is : <?php echo $json['Rate']; ?></h2>
  </tr>
  
  <tr>
  <h2 align="left" style="color:<?php echo $color; ?>;">Change is : <?php echo $json['Change']; ?></h2>
  </tr>
  
  <tr>
  <h2 align="left" style="color:gray;">Updated on : <?php echo $lastUpdate; ?></h2>
  </tr>
  
  
  
 

 
                <select name="SelectCurr">
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
				
              

				
  
  </table>
  
  <input type="button" value="Reset widget to default" onClick="window.location.reload()">
  </div>
 
  
  
  </body>
  
</html>
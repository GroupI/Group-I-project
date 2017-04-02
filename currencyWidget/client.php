<?php header("Content-Type: text/html; charset=utf-8");
include "currency_representator.php";

$index_currency = (int)$_POST["currency_id"];
$url = "http://www.boi.org.il/currency.xml";

if ($curl = curl_init()) {
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
	
    $xml = simplexml_load_string($result);
	//print_r($xml);

	$update = $xml->LAST_UPDATE;
    $objectName = $xml->CURRENCY[$index_currency]->NAME;
	$objectUnit = $xml->CURRENCY[$index_currency]->UNIT;
	$objectCurrencyCode = $xml->CURRENCY[$index_currency]->CURRENCYCODE;
	$objectCountry = $xml->CURRENCY[$index_currency]->COUNTRY;
	$objectRate = $xml->CURRENCY[$index_currency]->RATE;
	$objectChange = $xml->CURRENCY[$index_currency]->CHANGE;
	
	
		
    $name = $objectName. '';
	$unit = $objectUnit. '';
	$currencyCode=$objectCurrencyCode. '';
	$country=$objectCountry. '';
	$rate=$objectRate. '';
	$change=$objectChange. '';
	$lastUpdate=$update. '';
	

    echo json_encode(array(
	'Name'=> $name, 
	'Unit' => $unit, 
	'Code' => $currencyCode,
	'Country' => $country,
	'Rate' => $rate,
	'Change'=>$change ));
	

    
	}
	
	
?>
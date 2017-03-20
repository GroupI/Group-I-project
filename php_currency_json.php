<?php

$url = "http://www.boi.org.il/currency.xml";

$i=3;


if ($curl = curl_init()) {
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    $xml = simplexml_load_string($result);
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
	


echo json_encode(array('Name'=> $name, 'Unit' => $unit, 'Currency Code' => $currencyCode,'Country' => $country,'Rate' => $rate,'Change'=>$change ));


}

?>
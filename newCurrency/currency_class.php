<?php header("Content-Type: text/html; charset=utf-8");

class Representator {
	
	private $info;
	
	function __construct(){
	
	$index_currency = (int)$_POST["currency_id"];
    $url = "http://www.boi.org.il/currency.xml";

    if ($curl = curl_init()) {
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
	
    $xml = simplexml_load_string($result);

	$update = $xml->LAST_UPDATE. '';
    $objectName = $xml->CURRENCY[$index_currency]->NAME. '';
	$objectUnit = $xml->CURRENCY[$index_currency]->UNIT. '';
	$objectCurrencyCode = $xml->CURRENCY[$index_currency]->CURRENCYCODE. '';
	$objectCountry = $xml->CURRENCY[$index_currency]->COUNTRY. '';
	$objectRate = $xml->CURRENCY[$index_currency]->RATE. '';
	$objectChange = $xml->CURRENCY[$index_currency]->CHANGE. '';

	

    $this->info = json_encode(array(
	'Name'=> $objectName, 
	'Unit' => $objectUnit, 
	'Code' => $objectCurrencyCode,
	'Country' => $objectCountry,
	'Rate' => $objectRate,
	'Change'=>$objectChange ));
	}
}
    

    function showInfo(){
		echo "<br>";
		$json = json_decode($this->info, true);
		print_r($json);
}
	
}
	
?>
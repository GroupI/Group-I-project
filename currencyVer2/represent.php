<?php

class CurrencyObject{
	
	private $info;
	private $index_currency;
	
	function __construct($index){
		
	$this->index_currency=(int)$index;
    $url = "http://www.boi.org.il/currency.xml";

    if ($curl = curl_init()) {
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    
    $xml = simplexml_load_string($result);
	

	$update = $xml->LAST_UPDATE. '';
    $objectName = $xml->CURRENCY[$this->index_currency]->NAME. '';
	$objectUnit = $xml->CURRENCY[$this->index_currency]->UNIT. '';
	$objectCurrencyCode = $xml->CURRENCY[$this->index_currency]->CURRENCYCODE. '';
	$objectCountry = $xml->CURRENCY[$this->index_currency]->COUNTRY. '';
	$objectRate = $xml->CURRENCY[$this->index_currency]->RATE. '';
	$objectChange = $xml->CURRENCY[$this->index_currency]->CHANGE. '';
	
	$this->info = json_encode(array(
	'Update' => $update,
	'Name'=> $objectName, 
	'Unit' => $objectUnit, 
	'Code' => $objectCurrencyCode,
	'Country' => $objectCountry,
	'Rate' => $objectRate,
	'Change'=>$objectChange ));	
	}
	}
	
	function passJson(){
		echo $this->info;
	}
}	
?>
<?php

include "weather.php";
include "weatherExtended.php";


class WeatherArray{

		private $weatherObj=array();
        private $index_weather;
		private $url = "http://www.ims.gov.il/ims/PublicXML/isr_cities.xml";
	
	    function __construct($index){
		  $this->index_weather=$index;
		  $weatherArray=array();
	      $xml = file_get_contents($this->url);
		  $xmlSimple=simplexml_load_string($xml) or die("Error,can not load information");
		  $city = $xmlSimple->Location[$this->index_weather]; 
		  $partToday = $city->LocationData->TimeUnitData[0];
		  array_push($weatherArray,$partToday->Date."");
		  for($i=0;$i<6;$i++){
              array_push($weatherArray,$partToday->Element[$i]->ElementValue."");
			  }  
	      $obj = new WeatherExtended($weatherArray);
		  $this->weatherObj[] = $obj;
		  reset($weatherArray);
		  for($i=1;$i<4;$i++){
			  $part = $city->LocationData->TimeUnitData[$i];
			  array_push($weatherArray,$part->Date."");
			  for($j=0;$j<2;$j++){
                  array_push($weatherArray,$part->Element[$j]->ElementValue."");
			  }
			  $obj = new Weather($weatherArray);
			  $this->weatherObj[] = $obj;
		  }	
          }
		  function getWeatherArray(){
			  return($this->weatherObj);
		  }
		 	
}
	
?>
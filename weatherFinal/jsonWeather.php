<?php 
include "weatherArray.php";

class JsonWeather{
	
	private $weatherObjectArray;
	
	function __construct($index){
		
		$this->weatherObjectArray = new WeatherArray($index);
		$arr = $this->weatherObjectArray->getWeatherArray();
		$this->buildJson($arr);
	
	}
	
	function buildJson($arr){
		
		$this->weatherObjectArray = json_encode(array(

	    'CurrentDate' => $arr[0]->getWeatherDate(),
        'TodayMinTemp' => $arr[0]->getMinTemp(),			
	    'TodayMaxTemp' => $arr[0]->getMaxTemp(), 
	    'TodayMinHumidity' => $arr[0]->getMinHumidity(),
	    'TodayMaxHumidity' => $arr[0]->getMaxHumidity(),
	    'TodayWindDirection' => $arr[0]->getWindDirAndSpeed(),
			
	    'CurrentDate1'=> $arr[1]->getWeatherDate(),
	    'MinTemp1' => $arr[1]->getMinTemp(),			
	    'MaxTemp1' => $arr[1]->getMaxTemp(),

	    'CurrentDate2'=> $arr[2]->getWeatherDate(),
	    'MinTemp2' => $arr[2]->getMinTemp(),			
	    'MaxTemp2' => $arr[2]->getMaxTemp(),

	    'CurrentDate3'=> $arr[3]->getWeatherDate(),
	    'MinTemp3' => $arr[3]->getMinTemp(),			
	    'MaxTemp3' => $arr[3]->getMaxTemp()
  			
			));
			
	}
	
	function passJson(){
		echo $this->weatherObjectArray; 
	}
}
?>
<?php


class WeatherExtended extends Weather{
	
        private $weatherCode;
		private $maxHumidity;
		private $minHumidity;
		private $windDirAndSpeed;
		
		
	    function __construct($parameters){
			$this->windDirAndSpeed=array_pop($parameters);
			$this->weatherCode=array_pop($parameters);
			Weather::setMinTemp(array_pop($parameters));
			$this->minHumidity=array_pop($parameters);
			Weather::setMaxTemp(array_pop($parameters));
			$this->maxHumidity=array_pop($parameters);
			Weather::setWeatherDate(array_pop($parameters));
			
			
		}
		
		function getWeatherCode(){
		    return $this->weatherCode;
			}
		
		function getMinHumidity(){
		    return $this->minHumidity;
			}
		
		function getMaxHumidity(){
		    return $this->maxHumidity;
			}
			
		function getWindDirAndSpeed(){
		    return $this->windDirAndSpeed;
			}
			
		
			
}
?>
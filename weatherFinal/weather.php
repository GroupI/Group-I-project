<?php

class Weather{

		private $weatherDate;
		private $maxTemp;
		private $minTemp;
        
		
	
	    function __construct($parameters){
		
	        $this->minTemp=array_pop($parameters);
		    $this->maxTemp=array_pop($parameters);
			$this->weatherDate=array_pop($parameters);
		}
		
		
		
		function getMinTemp(){
		    return $this->minTemp;
			}
		
		function getMaxTemp(){
		    return $this->maxTemp;
			}
			
			
		function getWeatherDate(){
		    return $this->weatherDate;
			}
			
		function setMinTemp($minTemp){
		    $this->minTemp=$minTemp;
			}
		
		function setMaxTemp($maxTemp){
		    $this->maxTemp=$maxTemp;
			}
			
			
		function setWeatherDate($weatherDate){
		    $this->weatherDate=$weatherDate;
			}	
			
}
?>
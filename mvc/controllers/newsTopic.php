<?php


class NewsTopic{

		private $topicArray=array(" ","_world","_africa","_americas","_asia","_europe",
		                          "_meast","_us","_technology","_space","_entertainment",
								  "_sport","_football","_golf","_motorsport","_tennis","_travel");
   
		private $url = "http://rss.cnn.com/rss/edition";
		private $topicUrl;
	
	    function __construct($index){
			
			$this->topicUrl=$this->url.$this->topicArray[$index];
		  
		  }	
 
		  function getLink(){
			  return $this->topicUrl;
		  }
		 	
}
	
?>
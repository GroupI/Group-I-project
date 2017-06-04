<?php
include "newsTopic.php";

class NewsObject{

	    private $info;
		private $url;
	
	    function __construct($index){
			$newsTopic = new NewsTopic($index);
			$this->url=$newsTopic->getLink();
			$titles = array();
			$descriptions = array();
			$links = array();
			$date = array();
			$xml = file_get_contents($this->url);
		    $xmlSimple=simplexml_load_string($xml) or die("Error,can not load information");
			$quantity = sizeof($xmlSimple->channel->item);//quantity of articles
			$part = $xmlSimple->channel;
			for($i=0;$i<$quantity;$i++){
				array_push($titles,$part->item[$i]->title."");
				array_push($descriptions,$part->item[$i]->description."");
				array_push($links,$part->item[$i]->link."");
				array_push($date,$part->item[$i]->pubDate."");
				
				
			}
			
				
				
			$this->info=json_encode(array(
			'Size'=> $quantity,
			'Title' => $titles,
		    'Description' => $descriptions,
			'Link' => $links,
			'PubDate' => $date));
		
		    
		}
		
		function passJson(){
		    echo $this->info;
	}
}
?>
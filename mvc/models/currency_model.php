<?php

class currency_model extends Model
{
    private $info;
    private $index_currency;
    private $url = "http://www.boi.org.il/currency.xml";

    function __construct(){
        parent::__construct();

    }

    function passJson(){
        $index=((int)$_GET["q"]);
        $this->index_currency=(int)$index;
        $fileContents= file_get_contents($this->url);
        $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
        $fileContents = trim(str_replace('"', "'", $fileContents));
        $simpleXml = simplexml_load_string($fileContents);
        $this->info = json_encode($simpleXml->CURRENCY[$this->index_currency]);
        echo $this->info;
    }

}
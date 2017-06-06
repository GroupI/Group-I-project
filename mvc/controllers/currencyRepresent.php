<?php

class currencyRepresent
{
    private $info;
    private $index_currency;
    private $url = "http://www.boi.org.il/currency.xml";

    function __construct($index){

        $this->index_currency=(int)$index;
        $fileContents= file_get_contents($this->url);
        $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
        $fileContents = trim(str_replace('"', "'", $fileContents));
        $simpleXml = simplexml_load_string($fileContents);
        $this->info = json_encode($simpleXml->CURRENCY[$this->index_currency]);
    }


    function passJson(){
        echo $this->info;
    }

}
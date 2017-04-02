<?php

class CurrencyRepresentator {

	
   private var $name = "";
   private var $unit = 0;
   private var $code = "";
   private var $country = "";
   private var $rate = 0;
   private var $change = 0;


   function __construct($name_,$unit_,$code_,$country_,$rate_,$change_)
   {
       $this->name = $name_;
       $this->unit = $unit_;
       $this->code = $code_;
       $this->country = $country_;
       $this->rate = $rate_;
       $this->change = $change_;
   }

   function what_color()
   {
       if $this->change < 0;
           return "red";
	   else
		   return "green";
   }

   function representInfo()
   {
       echo "Currency name is : ".$this->name;
       echo "Quantity of units is : ".$this->unit;
       echo "Currency code is : ".$this->code;
       echo "Currency country is : ".$this->country;
       echo "Currency rate is : ".$this->rate;
       echo "Currency change is : ".$this->change;
   }
}

?>
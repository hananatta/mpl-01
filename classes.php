<?php
class product {
    var $code;
    var $name;
    var $price;
    var $image_name;
function __construct($code, $name, $price, $image_name)
{
    $this->code = $code; 
    $this->name = $name; 
    $this->price = $price; 
    $this->image_name = $image_name;  
}


}
   


?>
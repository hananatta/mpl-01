 <?php

 $prodectes = array();
 $i=0;

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


$myfile = fopen("./data/products.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {

       $prod =  fgets($myfile). "\n";
     
    $prod = explode(",",$prod);
 // print_r($prod);
 $prodectes = new product($id, $name, $price, $image_name);
 array_push($prod, $prodectes);
   
 
  
    }
fclose($myfile);
print_r($prod);
/*foreach ($prod as $value){
    $prodectes = new product($id, $name, $price, $image_name);
    array_push($prodectes, $value);
}

//echo "hello".$prodectes[1];
echo $prodectes[1];
////////
$token = strtok($productes, ",");
 
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(",");
   }
////////*/


//echo $arrlength;

?> 
 <?php
 $prodectes = array();
 $arrlength = count($prodectes);
 $i=0;
$myfile = fopen("./data/products.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {

    //echo fgets($myfile) . ",,";
    $prod =  fgets($myfile). "\n";
    //$prod = strtok($prod, ",");
   $prod = trim ($prod);

    $prodectes[]=$prod;
    echo $prodectes[$i]. "\n";
    $i++;
    }
fclose($myfile);
echo $prodectes[1];
/*////////
$token = strtok($productes, ",");
 
while ($token !== false)
   {
   echo "$token<br>";
   $token = strtok(",");
   }
////////
class product {
    var $code;
    var $name;
    var $price;
    var $image_name;
function __construct($prodectes)
{
    $this->code = $code; 
    $this->name = $name; 
    $this->price = $price; 
    $this->image_name = $image_name;  
}


}*/

//echo $arrlength;

?> 
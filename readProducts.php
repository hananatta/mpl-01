<?php 
    $prodectes = array();
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
    //set functiones
    function setCode($code)
    {
        $this->code = $code;
    }  

    function setname($name)
    {
        $this->name = $name;
    }

    function setprice($price)
    {
        $this->price = $price;
    }

    function setImag($image_name)
    {
        $this->image_name = $image_name;
    }

    //get functiones

    function getCode()
    {
        return $this->code;
    }  

    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getImag()
    {
        return $this->image_name;
    }

    }

  /*  $prod = new product(1,'ab',10,'a1');
    $products = array(
            new product(2,'cd',20,'a2'),
            new product(3,'ef',30,'a3')
    );
    echo $prod->getName();
    print_r($products);*/

    /// open file to read data

    $myfile = fopen("./data/products.txt", "r") or die("Unable to open file!");

while(!feof($myfile)) {

       $prod =  fgets($myfile). "\n";
       $prod = explode(",",$prod);
        // print_r($prod); 
       $prodectes = array ( new product($prod[0], $prod[1], $prod[2], $prod[3]));
      // array_push($prodectes, $prod);
       // print_r($prodectes);
       foreach($prodectes as $pr)
        {
             echo $pr->getName().'<br>';
        }
  
    }
fclose($myfile);




?>
<?php 
    require('./config/config.php') ; 
    spl_autoload_register(function($className) { 
        require("./modules/$className.php"); 
    } )  ; 
    $product=new Product();
    $products=$product->getProduct("select * from products");  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    foreach($products as $product)   {
        if($product["id"] == $_GET["id"]) { 
            echo $product["description"]; 
            //echo("<img class='card-img-top' alt='err' src='public/images/".$product['image']."'/>"); 
        }
    }
?>

</body>
</html>
    
    

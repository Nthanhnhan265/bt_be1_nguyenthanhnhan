<?php 
    require('./config/config.php') ; 
    spl_autoload_register(function($className) { 
        require("./modules/$className.php"); 
    } )  ; 
    $product=new Product();
    $productDetail=$product->getProductByID( $_GET["id"]);  
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
    echo($productDetail["description"]); 
?>

</body>
</html>
    
    

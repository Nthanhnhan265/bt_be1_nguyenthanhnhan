<?php 
    require_once('config/database.php'); 
    //auto loading Classes
    spl_autoload_register(function ($className) {
        require('models/'.$className.'.php'); 
        
    }); 
    $products=new Product; 
    $products= $products->getProduct("select * from products"); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h1>Danh sach san pham</h1>
    <ul>
        <?php 
            foreach($products as $product): 
                ?> 
            <li><?php echo($product["description"]) ?></li>
                <?php
            endforeach
        ?>

    </ul>
    <div>
         <div class="container p-5">
                <div class="row">



                </div>


         </div>

    </div>            

</body>
</html>
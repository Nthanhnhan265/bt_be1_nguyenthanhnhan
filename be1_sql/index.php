<?php 
    require_once('config/database.php'); 
    require_once('models/Database.php'); 
    require_once('models/Product.php'); 
    $products=new Product; 
    $products= $products->getProduct("select * from products"); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>
</html>
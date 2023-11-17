<?php 
     require('./config/config.php') ; 
     spl_autoload_register(function($className) { 
         require("./modules/$className.php"); 
     } )  ; 
     $productModule=new Product(); 
     $products=$productModule->getProductsByCategory($_GET['id']); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <style>
        body { 
            width: fit-content;
            display: block; 
            margin: 0 auto; 

        }
     </style>
</head>
<body>
     <?php
     static $i=0; 
            foreach($products as $product) {
                if($i==0) { 
                    echo('<div class="card-deck d-flex mb-2">'); 
                }
        ?>
        
            <div class="card mx-2 px-2" style="width: 18rem;">
                <img class="card-img-top" src="public/images/<?php echo($product["image"]); ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-name"><a href="chitiet.php?id=<?php echo($product['id']);  ?>"><?php echo($product["name"]); ?></a></h5>
                    <h6 class="card-price"><?php echo($product["price"]); ?></h6>
                    <p class="card-desc">
                        <?php
                            $html = $product["description"];
                            $textContent = trim(strip_tags($html)); // Remove HTML tags and trim 
                            
                            $subStr=mb_substr($textContent,0,mb_strpos($textContent,' ',99)); 
                            
                            echo($subStr); 

                        ?>
                    </p>
                 
                </div>
            </div>
        <?php
            $i++;
            if($i>2) { 
                $i=0; 
                echo("</div>"); 
            }
        
            }
        ?>
</body>
</html>

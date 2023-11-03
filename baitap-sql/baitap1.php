<?php 
     require('./config/config.php'); 
    spl_autoload_register(function ($className) { 
        require("./modules/$className.php"); 
    }); 
    $prd=new Product(); 
    $products=$prd->getProduct("select * from products"); 
    static $i=0; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San pham</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .text-desc { 
            font-size: 14px ; 
        }
    </style>
</head>
<body>
    
        <?php
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
                            $textContent = strip_tags($html); // Remove HTML tags
                            // Split the text into an array of words
                            $words = explode(' ',$textContent); 
                            
                            // Get the first 100 words
                            $first_100_words = implode(' ', array_slice($words, 0, 99));
                            echo("<p class='text-desc'>".$first_100_words."..."."</p>")
                             
                        ?>


                    </p>
                 
                </div>
            </div>
            
         
        <?php
            $i++;
            if($i>5) { 
                $i=0; 
                echo("</div>"); 
            }
        
            }
        ?>
  </div>

</body>
</html>
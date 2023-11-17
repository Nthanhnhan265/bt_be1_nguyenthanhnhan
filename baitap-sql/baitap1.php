<?php 
    require('./config/config.php'); 
    spl_autoload_register(function ($className) { 
        require("./modules/$className.php"); 
    }); 
    $prdModule=new Product; 
    $products=$prdModule->getProductAndCategories(); 
    static $i=0; 
    $CategoryModule=new Category; 
    $Categories=$CategoryModule->getAllCategories(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San pham</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .tags {
            padding: 2px 7px; 
            border-radius: 20px; 
            color: #fff; 
            background:#007bff; 
         }

        .text-desc { 
            font-size: 14px ; 
        }
        a { 
            text-decoration:none;
            font-size:14px; 
        }
        body { 
            padding: 0 20px; 
            
        }
        .center { 
            display: block; 
            width: fit-content;
            margin: 0 auto; 
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">BE1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <?php
        foreach ($Categories as $category) {
        ?>
      <li class="nav-item active">
        <a class="nav-link" href="category_product.php?id=<?php echo($category['category_ID']); ?>"><?php echo $category["name"]; ?></a>
      </li>
        <?php 
        }
        ?>
    </ul>
  </div>
</nav>
<div class="center">
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
                            $textContent = trim(strip_tags($html)); // Remove HTML tags and trim 
                            
                            $subStr=mb_substr($textContent,0,mb_strpos($textContent,' ',99)); 
                            
                            echo($subStr); 

                        ?>
                        
                    </p>
                    <div>
                        <?php
                            $categoriesOfProduct=explode(",",$product["DanhMuc"]); 
                           foreach($categoriesOfProduct as $category) { 
                            $category=explode('-',$category); 
                        ?>
                            <span class="tags"><a href="category_product.php?id=<?php echo($category[0]); ?>" style="color:#fff"><?php echo($category[1]); ?></a></span>
                        <?php 

                            }
                        ?>
                    </div> 
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
  </div>
</div>
       
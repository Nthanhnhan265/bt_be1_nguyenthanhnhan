<?php 
    spl_autoload_register(function ($className) { 
        require("../modules/$className.php"); 
    }); 
    $CategoryModule=new Category; 
    $Categories=$CategoryModule->getAllCategories(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if(!empty($title)) { 
            echo $title; 
        }
        ?>
    </title>
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

<div class="p-5">
<?php
        if(!empty($slot)) { 
            echo $slot; 
        }
        ?>

</div>


<footer class="bg-dark text-white py-3">BE1</footer>
</body>
</html>
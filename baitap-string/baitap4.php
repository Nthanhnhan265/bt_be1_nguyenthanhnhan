
<?php 
$products= array(
    "0" => array (
        "id" => "1",
        "name" => "Apple iPhone 5S Silver 16GB", 
        "price" => "219.95",
        "desc" => "This Certified Refurbished product is tested and Certified to look and work like new, with limited to No wear. The refurbishing process includes functionality testing, inspection, and repackaging. The product is backed by a minimum 90-day warranty, and may arrive in a generic box. The product ships with a charger and cable, but does not include headphone, Manual or SIM card. Only select sellers who maintain a high performance bar may offer Certified Refurbished products on Amazon.",
        "image" => "iphone5s.jpg" ),
    "1" => array (
        "id" => "2",
        "name" => "Apple iPhone 5C White 16GB", 
        "price" => "183.95",
        "desc" => "Factory unlocked iPhones are GSM models and are ONLY compatible with GSM carriers like AT&T and T-Mobile as well as other GSM networks around the world. They WILL NOT WORK with CDMA carriers like Sprint, Verizon and the likes. The phone requires a nano SIM card (not included in the package).",
        "image" => "iphone5c.jpg" ),
    "2" => array (
        "id" => "3",
        "name" => "Apple iPhone 6 16GB Space Grey", 
        "price" => "449.99",
        "desc" => "Unlocked cell phones are compatible with GSM carriers like AT&T and T-Mobile as well as with GSM SIM cards (e.g. H20, Straight Talk, and select prepaid carriers). Unlocked cell phones will not work with CDMA Carriers like Sprint, Verizon, Boost or Virgin.",
        "image" => "iphone6.jpg" ),
    "3" => array(
        "id" => "4",
        "name" => "Apple iPhone 12 128GB blue",
        "price" => "449.99",
        "desc" => "Unlocked cell phones are compatible with GSM carriers like AT&T and T-Mobile as well as with GSM SIM cards (e.g. H20, Straight Talk, and select prepaid carriers). Unlocked cell phones will not work with CDMA Carriers like Sprint, Verizon, Boost or Virgin.",
        "image" => "iphone6.jpg"),
    );
    

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyen Thanh Nhan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            display:flex; 
            justify-content: center;
        }
        .imgs { 
            width:200px; 
            height: 200px;
        }
        .container { 
            display: flex; 
            padding-bottom: 40px; 
        }
        .title { 
            display:block; 
        }
        .link-product { 
            text-decoration: none; 
        }

    </style>
</head>
<body>
    <div id="products">
        <?php
            foreach($products as $product) { 
                static $i=0;
                static $str;  
                static $imgStr;
                ?> 
                <div id="product">
                    <div class="container">
                         
                <?php 
                foreach($product as $property) 
                 { 
                    if($i==1) { 
                        $str=("<h4 class='title'><a href='#' class='link-product'>$property</a></h4>");
                    } elseif($i==2) { 
                        $str.=("<p>Price: $property</p>"); 
                    }
                    elseif($i==3) { 
                        $substr=substr($property,0,80); 
                        $str.=("<p>Desc: <span class='desc'> $substr <a href='#'>[...]</a></span></p>"); 
                    }
                    elseif($i==4) { 
                        $imgStr=("<img src='baitap4/public/images/$property' alt='err' class='imgs'/> "); 
                
                    }

                    $i++; 
                    ?> 
                    <?php
                }
                echo($imgStr);
                ?> 
                <div class="">
                        <?php
                        $str.="<a class='btn btn-info'>Add to cart</a>";
                        echo($str);
                        $str=""; 
                        ?> 
                </div>
                    <?php
                    $imgStr="";
                    $i=0; 
                    ?> 
                    
                </div>
            </div>
            <?php
                
            }
        ?>


<script>
    const strDesc= <?php 
        static $str; 
        foreach($products as $product) { 
            $str.=$product['desc']."#"; 
        }
        echo($str);
    ?> 
    const arrDes=strDesc.spit("#"); 
    
    // Get references to all the buttons
    var buttons = document.querySelectorAll("button");
    
    // Add a click event listener to each button
    buttons.forEach(function(button, index) {
        button.addEventListener("click", function(event) {
            var buttonPosition = index;
            
        });
    });

</script>



</div>

</body>
</html>
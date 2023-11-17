
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
       
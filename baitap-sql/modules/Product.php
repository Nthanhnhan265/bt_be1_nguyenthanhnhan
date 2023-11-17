<?php
    class Product extends Database { 
        function getProduct($sqlQuery)  {
            $sql=parent::$connect->prepare($sqlQuery); 
            return parent::select($sql); 
        }

        function getProductByID($id) {
            $sql=parent::$connect->prepare("select * from products where id=?"); 
            $sql->bind_param('i',$id); 
            return parent::select($sql)[0]; 
        }
        function getProductsByCategory($category_id) { 
             $sql=parent::$connect->prepare("select * from category_product inner join products on product_ID=id where category_ID=?"); 
            $sql->bind_param('i',$category_id); 
            return parent::select($sql); 
        }
        public function getProductAndCategories() { 
            $sql = parent::$connect->prepare('SELECT DISTINCT products.*, (
                SELECT GROUP_CONCAT(categories.category_ID,"-",categories.name) FROM category_product
                INNER JOIN categories 
                ON categories.category_ID=category_product.category_ID
                WHERE category_product.product_ID=products.id
            ) as DanhMuc 
            FROM products 
            INNER JOIN category_product
            ON products.id=category_product.product_ID');
            
            return parent::select($sql); 
        }
    }


?>
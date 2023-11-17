<?php
    class Category extends Database { 
        function getAllCategories() { 
            $sql=parent::$connect->prepare("Select * from categories"); 
            return parent::select($sql); 
        }
        function getCategoriesByProductID($id) { 
            $sql=parent::$connect->prepare("SELECT * FROM `category_product` INNER JOIN `categories` ON category_product.category_ID = categories.category_ID 
            WHERE product_ID=?");
            $sql->bind_param('i',$id); 
            return parent::select($sql); 
        }

    }



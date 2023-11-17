<?php 
class Product extends Database {
    
    public function getProduct($sqlQuery) { 
        $sql = parent::$connection->prepare($sqlQuery); 
        return parent::select($sql); 
    }

    public function getProductAndCategories() { 
        $sql = parent::$connection->prepare('select * from products');
        
        return parent::select($sql); 
    }
}

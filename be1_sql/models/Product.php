<?php 

class Product extends Database {
    
    public function getProduct($sqlQuery) { 
        $sql=parent::$connection->prepare($sqlQuery); 
        return parent::select($sql); 
    }

}
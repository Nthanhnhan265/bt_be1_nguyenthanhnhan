<?php
    class Product extends Database { 
        function getProduct($sqlQuery)  {
            $sql=parent::$connect->prepare($sqlQuery); 
            return parent::select($sql); 
        }

    }


?>
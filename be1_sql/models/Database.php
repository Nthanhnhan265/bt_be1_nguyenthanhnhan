<?php 
     
    class Database { 
        public static $connection=null; 
        //construct 
        public function __construct() {
             if(!self::$connection) { 
                self::$connection =new mysqli(DB_LOCALHOST,DB_USER,DB_PASS,DB_NAME);
                self::$connection->set_charset('utf8mb4'); 
             }
        }
        //method
        public function select($sql)  {
            $sql->execute(); 
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC); 
            return $items; 
        }

    }


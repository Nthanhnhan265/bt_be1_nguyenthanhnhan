<?php
class Database { 
    public static $connect=null; 

    public function __construct() {
        if(!self::$connect) { 
            self::$connect= new mysqli(DB_LOCALHOST,DB_USER,DB_PASS,DB_NAME);
            self::$connect->set_charset('utf8mb4'); 
        }
    }
    public function select($sql) {
        $sql->execute(); 
        $item=$sql->get_result()->fetch_all(MYSQLI_ASSOC);
        return $item; 
    }

}


?> 
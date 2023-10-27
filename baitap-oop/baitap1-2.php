<?php 
class User { 
    //declare properties 
    protected $username; 
    protected $password; 
    protected $fistName; 
    protected $lastName; 
    //constructor 
    public function __construct($username,$password,$fistName,$lastName) {
        $this->username=$username;
        $this->password=password_hash($password,PASSWORD_DEFAULT);
        $this->fistName=$fistName;
        $this->lastName=$lastName;
    }
    //methods 
    public function getFullname() { 
        return "$this->lastName $this->fistName";   
    }
    public function getUsername() {
        return "$this->username"; 
    }
    public static function login($username, $password) { 
        if($username!="admin") return false; 
        if(password_verify($password,password_hash("12345",PASSWORD_DEFAULT))==false) return false; 
        return true; 
    }
}


?> 
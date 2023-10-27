<?php
require('baitap1-2.php'); 

class Student extends User {
    //properties 
    private $gpa;
    //constructor 
    public function __construct($username,$password,$fistName,$lastName,$gpa) {
        parent::__construct($username, $password, $fistName, $lastName);
        $this->gpa=$gpa; 
    } 
    //methods
    public function getGPA() { 
        return $this->gpa; 
    }
    public function studentClassify() { 
        if($this->gpa < 5) { 
            return "Yếu"; 
        }else if($this->gpa>=5 && $this->gpa<7) { 
            return "Trung bình";  
        } else if($this->gpa>=7 && $this->gpa<8) { 
            return "Khá";  
        } else { 
            return "Giỏi"; 
        }
    }
}




?>
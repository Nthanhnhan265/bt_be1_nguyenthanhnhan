<?php
require('baitap1-2.php'); 
require('baitap6-interface.php'); 

class Student extends User implements Printable{
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
    //implement interface 
    public function PrintInfo() { 
        return "Họ tên: ".$this->getFullname().", GPA: $this->gpa, Xếp loại: ".$this->studentClassify(); 
    }
}




?>
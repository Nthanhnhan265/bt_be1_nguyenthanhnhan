<?php
     require('./config/config.php') ; 
     spl_autoload_register(function($className) { 
         require("./modules/$className.php"); 
     } )  ;
     $prdModule=new Product; 
    $products=$prdModule->getProductAndCategories(); 
    static $i=0; 
    $CategoryModule=new Category; 
    $Categories=$CategoryModule->getAllCategories(); 
    
     $temp=new Template();
     $data=[
        'title'=>'Trang chu',
        'slot'=>'<h1>hello</h1>'
     ] ; 
     $temp->View('layout',$data); 


<?php 

class Template { 
    
    public function View($view, $data) { 
        extract($data); 
        include(__DIR__ . '/../view/' . $view . '.php');

    } 
    public function Render($view, $data) { 
        ob_start(); 
        extract($data); 
        include(__DIR__ . '/../view/' . $view . '.php');
        return ob_get_clean(); 
    } 
}
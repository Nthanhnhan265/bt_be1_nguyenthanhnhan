<?php 
    $sinhVien=array(
        'sv1'=>array('Tinhoc'=>10,'KTLT'=>8,'MMT'=>10), 
        'sv2'=>array('Tinhoc'=>8,'KTLT'=>8,'MMT'=>9), 
        'sv3'=>array('Tin Hoc'=>9,'KTLT'=>7,'MMT'=>8),); 

    header('Content-Type: application/json');  
  
        if(isset($_GET['baitap'])) { 
            $id=$_GET['baitap'];
            if($id=='1') { 
                $jsonFile=json_encode($sinhVien); 
                echo($jsonFile);
            } else if($id==2) { 
                $jsonFile=json_encode();
            }
            else { 
                
            }
        }
    
    







?> 

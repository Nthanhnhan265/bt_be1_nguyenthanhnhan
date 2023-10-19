<?php
$date=""; 
$strDate=""; 
if(isset($_POST["dateTime"])) { 
    $date=$_POST["dateTime"]; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ket Qua</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center">
    <div>
        <h1>Kết Quả</h1>
        <p>Ngày đã nhập: <?php
        echo(date("d/m/Y",strtotime($date))); 
        ?> </p> 
     <ul>
        <li>
            <?php 
                $arrDate=explode("-",$date); 
                $strDate.="ngày ".$arrDate[2]." ";
                $strDate.="tháng ".$arrDate[1]." ";
                $strDate.="năm ".$arrDate[0];
                echo($strDate);
            ?>            
        </li>
        <li>
            <?php 
                echo(date("l,F, jS, Y",strtotime($date))); 
            ?>

        </li>
     </ul>
    </div>
</body>
</html>
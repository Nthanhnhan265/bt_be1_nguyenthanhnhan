<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 2-Nguyen Thanh Nhan</title>
</head>
<body>
    <p style='color:red'>hello</p>
    <?php 
        for ($i=1; $i <=30 ; $i++) { 
            if($i%2==0) { 
                echo("<p'>$i</p>"); 
            }else {              
    ?>
                <p style="color:blue"><strong><?php echo($i) ?></strong></p>
    <?php 
            }
        }
    ?> 
    
</body>
</html>
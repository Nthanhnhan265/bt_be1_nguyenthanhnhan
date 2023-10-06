<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <select name="" id="">
        <?php
        $colors=['red','green','blue']; 
        for ($i = 1; $i < 13; $i++) {
            echo "<option>thang $i</option>"; //phai co ; trong php  
        }
        ?>
    </select>


    <select name="" id="">
        <?php
        foreach ($colors as $color) {
        ?>
            <option value="" style="color:red font-size:30px"><?php echo "$color"?></option>

        <?php
        }
        ?>
    </select>
</body>
<?php ?>
</html>
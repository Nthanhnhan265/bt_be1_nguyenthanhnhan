<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 4-Nguyen Thanh Nhan</title>
    <style>
        label { 
            margin-right: 30px; 
        }

    </style>
</head>
<body>
    <!-- Ngay -->
    <label for="ngay">Ngày: 
        <select name="ngay" id="ngay">
           <?php for ($i=1; $i <=31 ; $i++) { 
            ?> 
            <option value=<?php echo($i)?>><?php echo($i)?></option>
            <?php 
           }
           ?> 
        </select>
    </label>
    <!-- Thang -->
    <label for="thang">Tháng: 
        <select name="thang" id="thang">
           <?php for ($i=1; $i <=12 ; $i++) { 
            ?> 
            <option value=<?php echo($i)?>><?php echo($i)?></option>
            <?php 
           }
           ?> 
        </select>
    </label>
    <!-- Nam -->
    <label for="nam">Năm: 
        <select name="nam" id="nam">
           <?php for ($i=1990; $i <=2020 ; $i++) { 
            ?> 
            <option value=<?php echo($i)?>><?php echo($i)?></option>
            <?php 
           }
           ?> 
        </select>
    </label>
</body>
</html>
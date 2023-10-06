<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 3-Nguyen Thanh Nhan</title>
    <style> 
        table, th, td { 
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style> 
</head>
<body>
     <table> 
         <?php 
            for ($i=0; $i <=100 ; $i++) { 
               if($i==0) { 
                    ?>                               
                    <tr>
                        <th>
                            <?php echo("STT") ?>
                        </th>
                        <th>
                            <?php echo("Tiêu Đề 1") ?>
                        </th>
                        <th>
                            <?php echo("Tiêu Đề 2") ?>
                        </th>
                        <th>
                            <?php echo("Tiêu Đề 3") ?>
                        </th>
                    </tr> 
            <?php 
               }
               else { 
                ?> 
                <tr>
                        <td>
                            <?php echo($i) ?>
                        </td>
                        <td>
                            <?php echo("Cột 1, Hàng ".$i) ?>
                        </td>
                        <td>
                            <?php echo("Cột 2, Hàng ".$i) ?>
                        </td>
                        <td>
                            <?php echo("Cột 3, Hàng ".$i) ?>
                        </td>
                    </tr> 
                <?php
               }
            }
            ?> 
    </table> 
    
</body>
</html>
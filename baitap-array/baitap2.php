
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyen Thanh Nhan</title>
</head>
<body>
  

    <form action="./baitap2.php" method="get">
        <input type="text" placeholder="tu khoa" name="keyword">
        <input type="submit">
    </form>
    <?php 
    if (isset($_GET['keyword'])) { 
        echo($_GET['keyword']); 
    }
    ?>
</body>
</html>

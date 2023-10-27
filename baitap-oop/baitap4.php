<?php 
    require_once("baitap1-2.php"); 
    $username=""; 
    $password=""; 

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nguyen thanh nhan </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <style>
        #form-display { 
            width:  30%;
            text-align: left;  
            margin-left: 5%; 
            margin-top: 3%; 
            margin: 0 auto; 
        }
        #result { 
            color: red; 
        }
    </style>
</head>
<body>
<div id="form-display">
    <form action="baitap4.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input class="form-control" id="username" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div id="result" class="pt-2"><?php
        $result=""; 
        if(User::login($username,$password)) { 
            echo("loged in successfully"); 
        } else { 
            echo("log in failed"); 
            
        }
    
    
    ?></div>

</div>
</body>
</html>
<?php 
    require_once("baitap1-2.php");
    $arrUsers= array(); 
    $username=""; 
    $password=""; 
    $fName=""; 
    $lName=""; 
    static $i=0; 
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fName = $_POST['firstname'];
        $lName = $_POST['lastname'];
        array_push($arrUsers,new User($username, $password, $fName, $lName));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyen thanh nhan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        #form-display { 
            width:  50%;
            text-align: left;  
            margin-left: 5%; 
            margin-top: 2%; 
        }
        tr>th { 
            border: 1px solid; 
            padding: 0px 50px; 
        }
    </style>

</head>
<body>
<div class="container text-center">
  <div class="row align-items-start">
    <div class="col-6">
        <div id="form-display">
    <form action="baitap3.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input class="form-control" id="username" name="username" value="<?php echo $username; ?>">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" value="<?php echo $password; ?>">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input class="form-control" id="lastname" name="lastname" value="<?php echo $lName; ?>">
        </div>
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input class="form-control" id="firstname" name="firstname" value="<?php echo $fName; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    </div>
    <div class="col-6 pt-3">
      
        <table id="display-info"> 
            <tr> 
                <th>Username</th>
                <th>Full Name</th>
            </tr>
            <?php 
                foreach($arrUsers as $user) { 
                    echo("<tr> 
                    <td>".$user->getUsername()."</td>
                    <td>".$user->getFullname()."</td>
                </tr>"); 
                
                }
             ?>
        </table> 
    </div>
  </div>
</div>
    
</body>
</html>
<?php 
    require_once("baitap5-student.php");
    $username=""; 
    $password=""; 
    $fName=""; 
    $lName=""; 
    $gpa=""; 
    static $user; 
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['lastname'])&& !empty($_POST['gpa'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $fName = $_POST['firstname'];
        $lName = $_POST['lastname'];
        $gpa=$_POST['gpa']; 
        $user=new Student($username,$password,$fName,$lName,$gpa); 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align:center; 
        }
        th { 
            padding: 0 30px; 
        }
        body { 
            display: flex; 
            justify-content: center; 
            padding-top: 30px ;
        }
    </style>
</head>
<body>
<table id="display-info"> 
            <tr> 
                <th>Username</th>
                <th>Full Name</th>
                <th>GPA</th>
                <th>Xếp loại</th>
            </tr>
            <?php 
                    echo("<tr> 
                    <td>".$user->getUsername()."</td>
                    <td>".$user->getFullname()."</td>
                    <td>".$user->getGPA()."</td>
                    <td>".$user->studentClassify()."</td>
                </tr>");        
             ?>
        </table> 
</body>
</html>
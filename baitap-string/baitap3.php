<?php
    $num1=""; 
    $num2=""; 
    $phepTinh=""; 
    $ketQua=""; 
    $flag=true; 
    if(isset($_GET["num1"])) { 
        $num1=$_GET["num1"]; 
    } else { 
        $flag=false; 
    }
    if(isset($_GET["num2"])) { 
        $num2=$_GET["num2"]; 
    } else { 
        $flag=false; 
    }
    if(isset($_GET["pheptinh"])) { 
        $phepTinh=$_GET["pheptinh"]; 
    } else { 
        $flag=false; 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyen thanh nhan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        #pheptinh > label { 
            margin-left: 15px; 
        }
        #pheptinh > label >input {
            margin: 10px 13px;
        }
        #num1 ,#num2 { 
            width: 80%;
        }
    </style>
</head>
<body class="d-flex justify-content-center">
    <div class="bg-info pt-4 pb-5 px-5">
        <h2>Phép Tính</h2>
        <form class="container"  action="baitap3.php" method="get">
            <div class="form-group mb-2">
                <label for="num1">Num 1: </label>
                <input type="text" name="num1" id="num1" placeholder="Enter Num 1" value=<?php echo($num1); ?>>
            </div>
            <div class="form-group">
                <label for="num2">Num 2: </label>
                <input type="text" name="num2" id="num2" placeholder="Enter Num 2 " value=<?php echo($num2); ?>>
            </div>
            <p class="mb-0 mt-2">Chọn phép tính:</p>
            <div class="form-group" id="pheptinh">
                <label for="cong">Cộng <input type="radio" name="pheptinh" id="cong" value="cong"></label>
                <label for="tru">Trừ <input type="radio" name="pheptinh" id="tru" value="tru"></label>
                <label for="nhan">Nhân <input type="radio" name="pheptinh" id="nhan" value="nhan"></label>             
                <label for="chia">Chia <input type="radio" name="pheptinh" id="chia" value="chia"></label>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Gửi</button>
        </form>

        <div class="pt-2 mt-1">
            <h3>Kết Quả</h3> 
            <p>
                <?php  
                 if($flag==true) { 
                    switch ($phepTinh) {
                        case 'cong':
                            $ketQua="Tổng $num1 và $num2 là ".($num1+$num2); 
                            break;
                        case 'tru':
                             $ketQua="Hiệu $num1 và $num2 là ".($num1-$num2); 
                            break; 
                        case 'nhan':
                            $ketQua="Tích $num1 và $num2 là ".($num1*$num2); 
                            break; 
                        case 'chia':
                            if($num2!=0) { 
                                $ketQua="Thương $num1 và $num2 là ".($num1/$num2); 
                            } else { 
                                $ketQua="Không thể chia cho 0!"; 
                            }
                            break; 
                    }   
                    echo($ketQua); 
                 }
                ?> 
            </p>
        </div>
    </div>
    
</body>
</html>
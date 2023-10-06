<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <style> 
        table, th, td { 
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style> 
</head>
<body>
    <h1>Danh sách sản phẩm</h1>
    <table>
        <tr>
            <th>Trang tru</th>
            <th>San pham</th>
            <th>Gioi Thieu</th>
            <th>Dich Vu</th>
            <th>Lien He</th>
        </tr>
        <tr>
            <td></td>
            <td><a href="?product=1">San pham 1</a></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td></td>
            <td><a href="?product=2">San pham 2</a></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td></td>
            <td><a href="?product=3">San pham 3</a></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td></td>
            <td><a href="?product=4">San pham 4</a></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
        <td></td>
            <td><a href="?product=5">San pham 5</a></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>

    <h2>Thông tin sản phẩm:</h2>
    <div id="productInfo" style="color:red">
        <?php
        $arr=["San Pham 1","San Pham 2","San Pham 3","San Pham 4","San Pham 5"];   
        //isset(): Kiem tra 'product' co trong $_GET hay khong     
        if(isset($_GET['product']))
        {
            $index=$_GET['product']; 
            switch($index) {
                case "all":
                    foreach($arr as $product) { 
                        echo($product." "); 
                    }
                        break; 
                default: 
                    $index--; 
                    echo("$arr[$index]"); 
                break; 
            }                
        }
        ?>
    </div>

    <p><a href="?product=all">Danh sách Sản Phẩm</a></p>

</body>
</html>

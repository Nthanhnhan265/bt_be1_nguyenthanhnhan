<?php 
    $arrMark=array(); 


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyen Thanh Nhan </title>
    <style>
        #form { 
            width: 150px; 
             
        }
    </style>
</head>
<body>
    <form action="baitap3-plus.php" id="form">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
        <label>Mark: </label>
        <div id="markField">
        </div>
        <input type="button" value="+" id="btnAdd">
        <br>
        <input type="submit">
    </form>
    <ul id="result">
    <?php 
        if(isset($_GET['mon']) && isset($_GET['name'])) { 
            static $i=1; 
            $arrMark=$_GET['mon']; 
            echo("<li> Name: :".$_GET['name']."</li>"); 
             foreach($arrMark as $element) { 
                echo("<li> Mon ".$i.": ".$element."</li>"); 
                $i++; 
             }        
        }
    ?> 
    </ul>
    <script>
        let i = 1;
const btnAdd = document.querySelector("#btnAdd");
let markField = document.querySelector("#markField");

btnAdd.addEventListener('click', () => {
    const label = document.createElement('label');
        label.setAttribute('for', `mon${i}`);
        label.textContent = `Mon ${i}`;

        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('name', 'mon[]');
        input.setAttribute('id', `mon${i}`);

        markField.appendChild(label);
        markField.appendChild(input);
        i++;
});
    </script>
</body>
</html>
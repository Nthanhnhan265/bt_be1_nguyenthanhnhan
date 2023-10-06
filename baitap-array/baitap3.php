<?php if ($_SERVER["REQUEST_METHOD"] === "POST") {
           // Create an associative array with form data
    $arr = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'website' => $_POST['website'],
        'comment' => $_POST['comment'],
        'gender' => $_POST['gender'],
    ];
    
    // Convert the array to a JSON string
    $json = json_encode($arr);
    header('Content-Type: application/json');
    // Return the JSON string as a response
    echo $json;
}      
?>
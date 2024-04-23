<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "../database.php";
    if (!isset($_POST)) {
        echo 
        "<script> alert('Invalid Choice !');</script>";
        }
    $id = $_POST["arr"]["0"];
    $elems = mysqli_query($conn, "SELECT * FROM Car WHERE id=$id");
    $elem = mysqli_fetch_array($elems);
    echo $elem['model'];
?>    
</body>
</html>
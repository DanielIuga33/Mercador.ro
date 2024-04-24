<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carInfo.css">
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
    ?>
    <div class="container">
        <div class="title">
            <h1><?php echo $elem['title'];?></h1>
        </div>
        <img src="../img/<?php echo $elem['img']?>" alt="Imagine Masina"> 
    </div>
</body>
</html>
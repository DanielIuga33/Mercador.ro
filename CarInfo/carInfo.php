<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carInfo.css">
</head>
<body>
    <header>
        <button id="back">Back</button>
    </header>
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
        <h1><?php echo $elem['title'];?></h1>
        <?php $arr = explode(',', $elem['img']);?> 
        <div class="car">
            <?php foreach ($arr as $e) : ?>
            <img src="../img/<?php echo $e ?>" alt="Imagine Masina"><br> 
        <?php endforeach; ?> 
        </div>
    </div>
    <script src="carInfo.js"></script>
</body>
</html>
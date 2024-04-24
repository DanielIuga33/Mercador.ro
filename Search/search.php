<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="search.css">
</head>
<body>
    <header>
        <h2 style="color:rgb(173, 105, 16); text-align: center"> WELCOME TO MERCADOR, WE HOPE YOU FIND THE CAR FOR YOU !</h2>
        <hr>
    </header>
    <div class="container">
        <div class="sidebar">
            <button id="home">Home</button>
            <!-- Filtre de căutare -->
            <h2>Filtre de Căutare</h2>
            <input type="text" style="background-color: #ccc;" placeholder="Căutare...">
            <button style="background-color: #1d1d23dc">Caută</button>
            <!-- Alte elemente de filtrare -->
        </div>
        <div class="divider"></div> <!-- Bară separată -->
        <div class="main-content">
            <!-- Conținutul principal al paginii -->
            <ul>
                <?php
                    include "../database.php";
                    $rows = mysqli_query($conn, "SELECT * FROM Car");
                ?>
                <?php foreach ($rows as $row) : ?>
                <form action="carInfo.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="arr[]" value="<?php echo $row['id']; ?>">
                    <div class="car" onclick="this.parentNode.submit()">
                        <img src="../img/<?php $arr = explode(',', $row['img']); echo $arr[0]; ?>" alt="Imagine mașină">
                        <div class="car-details">
                            <h2><?php echo $row['brand'] . ' ' . $row['model']; ?></h2>
                            <label id="state"><?php echo $row['state']; ?></label>
                            <p><?php echo $row['price']; ?></p>
                            <p id="city"><?php echo $row['city']; ?></p>
                            
                        </div>
                    </div>
                </form>
                <br>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <footer>
        <hr>
    </footer>
    <script src="search.js"></script>
</body>
</html>
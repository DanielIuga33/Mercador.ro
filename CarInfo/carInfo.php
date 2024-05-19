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
        <hr>
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
    <span class="container-parent">
        <div class="container">
            <div class="title">
                <h1><?php echo $elem['title']; ?></h1>
            </div>
            <?php $arr1 = explode(',', $elem['img']);
            $arr = array_reverse($arr1); ?>
            <div class="car">
                <?php foreach ($arr as $e) : ?>
                <span class="car-show">
                    <img src="../img/<?php echo $e ?>" alt="Imagine Masina">
                </span>
                <br>
                <?php endforeach; ?>
            </div>
            <div class=box>
                <div class="box2">
                    <?php if ($elem['brand']){?>
                    <p> <span class="bold"> Brand:</span> <?php echo $elem['brand'] ?> </p>
                    <?php } ?>
                    <?php if ($elem['model']){?>
                    <p> <span class="bold"> Model:</span> <?php echo $elem['model'] ?> </p>
                    <?php } ?>
                    <?php if ($elem['km'] > 0){?>
                    <p> <span class="bold"> Milleage:</span> <?php echo $elem['km'] ?> </p>
                    <?php } ?>
                    <?php if ($elem['vin']){?>
                    <p> <span class="bold"> VIN:</span> <?php echo $elem['vin'] ?> </p>
                    <?php } ?>
                    <?php if ($elem['price'] > 0){?>
                    <p> <span class="bold"> Price:</span> <?php echo $elem['price'] . $elem['currency'] ?> </p>
                    <?php } ?>
                    <?php if ($elem['cm3'] > 0){?>
                    <p> <span class="bold"> Engine capacity:</span> <?php echo $elem['cm3'] . ' cm3' ?> </p>
                    <?php } ?>
                    <?php if ($elem['hp'] > 0){?>
                    <p> <span class="bold"> Horsepower:</span> <?php echo $elem['hp'] . 'cp' ?> </p>
                    <?php } ?>
                </div>
                <div class="box3">
                    <?php if ($elem['body']){?>
                    <p> <span class="bold"> Body type:</span> <?php echo $elem['body'] ?> </p>
                    <?php } ?>
                    <?php if ($elem['fuel']){?>
                    <p> <span class="bold"> Fuel:</span> <?php echo $elem['fuel'] ?> </p>
                    <?php } ?>
                    <?php if ($elem['year'] > 0){?>
                    <p> <span class="bold"> Year:</span> <?php echo $elem['year'] ?></p>
                    <?php } ?>
                    <?php if ($elem['doors'] > 0){?>
                    <p> <span class="bold"> Number of doors:</span> <?php echo $elem['doors'] ?></p>
                    <?php } ?>
                    <?php if ($elem['color']){?>
                    <p> <span class="bold"> Color:</span> <?php echo $elem['color'] ?></p>
                    <?php } ?>
                    <?php if ($elem['gearbox']){?>
                    <p> <span class="bold"> Gearbox type:</span> <?php echo $elem['gearbox'] ?></p>
                    <?php } ?>
                    <?php if ($elem['steeringwheel']){?>
                    <p> <span class="bold"> Steering wheel:</span> <?php echo $elem['steeringwheel'] ?></p>
                    <?php } ?>
                </div>
                <div class="box4">
                    <?php if ($elem['phone']){?>
                    <p> <span class="bold"> Owner Phone number:</span> <?php echo $elem['phone'] ?></p>
                    <?php } ?>
                    <?php if ($elem['city']){?>
                    <p> <span class="bold"> Location :</span> <?php echo $elem['city'] ?></p>
                    <?php } ?>
                </div>
            </div>
            <?php if ($elem['description']) { $text=$elem['description'];?>
            <div class="box1" id="textArea">
                <p><span class="bold"> Description:</span>
                <div class="descr"><?php echo "<br>" . "<pre>$text</pre>"; ?></div>
                </p>
            </div>
            <?php } ?>
            <br>
        </div>
    </span>
    <hr>
    <footer>
        <p>&copy; 2024 Car Posting Site. All rights reserved.</p>
    </footer>
    <script src="carInfo.js"></script>
</body>

</html>
<?php
    include "../database.php";


    
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        exit("POST request method required");
    }
    $title = $_POST["title"];
    $model = $_POST["model"];
    $brand = $_POST["brand"];

    $vin = $_POST["vin"];
    $price = $_POST["price"];

    $phone = $_POST["phone"];

    $cm3 = $_POST["cm3"];
    $hp = $_POST["hp"];

    $fuel = $_POST["fuel"];
    $body = $_POST["body"];

    $km = $_POST["km"];
    $color = $_POST["color"];

    $year = $_POST["year"];
    
    $doors = $_POST["doors"];
    $state = $_POST["new/used"];
    $gearbox = $_POST["man/aut"];
    $steeringwheel = $_POST["lf/rg"];
    //$img = $_POST["image"];
    $desc = $_POST["description"];

    $sql = "INSERT INTO Car (title, brand, model, vin, price, phone, cm3, hp, fuel, body,
                            km, color, year, doors, state, gearbox, steeringwheel,
                            description)
            VALUES ('{$title}','{$brand}', '{$model}', '{$vin}', '{$price}', '{$phone}', 
                    '{$cm3}', '{$hp}', '{$fuel}', '{$body}', '{$km}', '{$color}',
                    '{$year}', '{$doors}', '{$state}', '{$gearbox}', '{$steeringwheel}', '{$desc}')";
    try{
        if ($title = "" || $model=="" || $brand == "" || $price == "" || $phone == "" || $fuel == "" || $body =="" || $year == ""){
            throw new Exception('Car cannot be added');
        }
        try{
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            header("Location: ../Home/homepage.html");
        }
        catch(mysqli_sql_exception){
            echo "Could not register the Car";
            header("Location: ../PostACar/anunt.html");
        }
    }
    catch(Exception $e){
        echo 'Caught exception: ', $e->getMessage(), "\n";
        header("Location: ../PostACar/anunt.html");
    }
?>

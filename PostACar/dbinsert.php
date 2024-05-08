<?php
    include "../database.php";


    
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        exit("POST request method required");
    }
    $title = $_POST["title"];
    $model = $_POST["model"];
    $brand = $_POST["brand"];
    $vin = $_POST["vin"];

    $tmp = $_POST["price"];
    $elems = explode(" ", $tmp);
    $price = intval($elems[0]);
    $currency = $elems[1];
    $phone = $_POST["phone"];
    $cm3 = $_POST["cm3"];
    $hp = $_POST["hp"];
    $fuel = $_POST["fuel"];
    $body = $_POST["body"];
    $km = $_POST["km"];
    $color = $_POST["color"];
    $year = $_POST["year"];
    $city = $_POST["city"];
    $doors = $_POST["doors"];
    $state = $_POST["new/used"];
    $gearbox = $_POST["man/aut"];
    $steeringwheel = $_POST["lf/rg"];
    $img = $_FILES["image"];
    $desc = $_POST["description"];
    $file = $_FILES['image'];
    if($_FILES['image']['error'] === 4){
        echo
        "<script> alert('Image Does Not Exist');</script>"
        ;
        header("Location: ../PostACar/anunt.html");

    }
    else{
        $finalImage = "";
        print_r($_FILES);
        for($i = 0; $i < count($_FILES["image"]["name"]); $i++){
            $fileName = $_FILES["image"]["name"][$i];
            $fileSize = $_FILES["image"]["size"][$i];
            $tmpName = $_FILES["image"]["tmp_name"][$i];

            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            if (!in_array($imageExtension, $validImageExtension)){
                echo
                "<script> alert('Invalid Image Extension');</script>"
                ;
            }
            else if($fileSize > 10000000){
                echo
                "<script> alert('Image Size Is Too Large');</script>"
                ;
            }
            else{
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;

                move_uploaded_file($tmpName, '../img/' . $newImageName);
                $finalImage .= $newImageName . ',';
            }
        }
        $finalImage = rtrim($finalImage, ',');
    }


    $sql = "INSERT INTO Car (title, brand, model, vin, currency, price, phone, cm3, hp, fuel, body,
                            km, color, year, doors, state, gearbox, steeringwheel, img, 
                            description, city)
            VALUES ('{$title}','{$brand}', '{$model}', '{$vin}', '{$currency}', '{$price}', '{$phone}', 
                    '{$cm3}', '{$hp}', '{$fuel}', '{$body}', '{$km}', '{$color}',
                    '{$year}', '{$doors}', '{$state}', '{$gearbox}', '{$steeringwheel}',
                     '{$finalImage}', '{$desc}', '{$city}')";
    try{
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("Location: ../Home/index.html");
    }
    catch(mysqli_sql_exception){
        echo "Could not register the Car";
        header("Location: ../PostACar/anunt.html");
    }
?>

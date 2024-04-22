<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="discover.css">
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
            <input type="text" placeholder="Căutare...">
            <button>Caută</button>
            <!-- Alte elemente de filtrare -->
        </div>
        <div class="divider"></div> <!-- Bară separată -->
        <div class="main-content">
            <!-- Conținutul principal al paginii -->
            <h1>Conținut Principal</h1>
            <p>Aici este conținutul principal al paginii.</p>
            <ul>
                <?php
                    include "../database.php";
        
                    $sql = "SELECT * FROM Car";
                    $result = mysqli_query($conn, $sql);
                
                    if (mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_all($result);
                        foreach($row as $elem){
                            echo $elem[1] . "<br>";
                        }
                    }
                ?>
            </ul>
        </div>
    </div>
    <script src="discover.js"></script>
</body>
</html>
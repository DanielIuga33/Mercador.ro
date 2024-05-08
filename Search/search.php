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
        <hr>
        <div class="bar">
            <button id="home">Home</button>
            <h2 style="color:rgb(173, 105, 16); text-align: center"> WELCOME TO MERCADOR, WE HOPE YOU FIND THE CAR FOR YOU !</h2>
        </div>
        <hr>
    </header>
    <div class="container">
        <div class="sidebar">
            <!-- Filtre de căutare -->
            <h2>Filtre de Căutare</h2>
            <form action="search.php" method="post" enctype="multipart/form-data">
            <input type="text" id="cauta" name="cauta" style="background-color: #ccc; width: 242px" placeholder="Search...">
            <button id="submit" name="submit "style="background-color: darkgray">Caută</button>
            <!-- Alte elemente de filtrare -->
            <div id="brand1" class="row">Brand</div>
            <select id="brand" name="brand" style="width: 180px; height: 21px;">
                <option value="" selected>see all</option>
                <option value="Abart">Abart</option>
                <option value="Acura">Acura</option>
                <option value="Aixam">Aixam</option>
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Aro">Aro</option>
                <option value="Aston Martin">Aston Martin</option>
                <option value="Audi">Audi</option>
                <option value="Austin">Austin</option>
                <option value="Baic">Baic</option>
                <option value="Bentley">Bentley</option>
                <option value="BMW">BMW</option>
                <option value="Bugatti">Bugatti</option>
                <option value="Buick">Buick</option>
                <option value="Cadillac">Cadillac</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Chrysler">Chrysler</option>
                <option value="Citroen">Citroen</option>
                <option value="Comarth">Comarth</option>
                <option value="Dacia">Dacia</option>
                <option value="Daewoo">Daewoo</option>
                <option value="Daihatsu">Daihatsu</option>
                <option value="DFSK">DFSK</option>
                <option value="Dodge">Dodge</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="Fisker">Fisker</option>
                <option value="Ford">Ford</option>
                <option value="Minibus">Minibus</option>
                <option value="Honda">Honda</option>
                <option value="Hummer">Hummer</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Ineos">Ineos</option>
                <option value="Infiniti">Infiniti</option>
                <option value="Isuzu">Isuzu</option>
                <option value="Jaguar">Jaguar</option>
                <option value="Jeep">Jeep</option>
                <option value="KG Mobility">KG Mobility</option>
                <option value="Kia">Kia</option>
                <option value="Lada">Lada</option>
                <option value="Lamborghini">Lamborghini</option>
                <option value="Lancia">Lancia</option>
                <option value="Land Rover">Land Rover</option>
                <option value="Lexus">Lexus</option>
                <option value="Ligier">Ligier</option>
                <option value="Lincoln">Lincoln</option>
                <option value="Lotus">Lotus</option>
                <option value="Lucid">Lucid</option>
                <option value="Lynk&Co">Lynk&Co</option>
                <option value="Maserati">Maserati</option>
                <option value="Mazda">Mazda</option>
                <option value="McLaren">McLaren</option>
                <option value="Maybach">Maybach</option>
                <option value="Merceds-Benz">Merceds-Benz</option>
                <option value="MG">MG</option>
                <option value="Microlinio">Microlinio</option>
                <option value="Mini">Mini</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Microcar">Microcar</option>
                <option value="Morgan">Morgan</option>
                <option value="Nissan">Nissan</option>
                <option value="Opel">Opel</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Plymouth">Plymouth</option>
                <option value="Pontiac">Pontiac</option>
                <option value="Porsche">Porsche</option>
                <option value="Renault">Renault</option>
                <option value="Rolls-Royce">Rolls-Royce</option>
                <option value="Rover">Rover</option>
                <option value="Saab">Saab</option>
                <option value="Seat">Seat</option>
                <option value="Skoda">Skoda</option>
                <option value="Smart">Smart</option>
                <option value="SsangYong">SsangYong</option>
                <option value="Skywell">Skywell</option>
                <option value="Subaru">Subaru</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Tesla">Tesla</option>
                <option value="Tata">Tata</option>
                <option value="Tazzari">Tazzari</option>
                <option value="Toyota">Toyota</option>
                <option value="Trabant">Trabant</option>
                <option value="Triumph">Triumph</option>
                <option value="Vauxhall">Vauxhall</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="Volvo">Volvo</option>
                <option value="Weismann">Weismann</option>
                <option value="Alte marci">Alte marci</option>
                <option value="JAC">JAC</option>
                <option value="SWM">SWM</option>
                <option value="Forthing">Forthing</option>
                <option value="XEV">XEV</option>
            </select><br>
            <div id="body1" class="row">Car Body</div>
            <select id="body" name="body" style="width: 180px; height: 21px;">
                <option value="" selected>choose</option>
                <option value="Cabrio">Cabrio</option>
                <option value="Sedan">Sedan</option>
                <option value="Coupe">Coupe</option>
                <option value="Pickup">Pickup</option>
                <option value="HatchBack">HatchBack</option>
                <option value="Break">Break</option>
                <option value="Off-road">Off-road</option>
                <option value="Minibus">Minibus</option>
                <option value="Monovolum">Monovolum</option>
                <option value="SUV">SUV</option>
            </select><br>
            <div id="km" class="row">Milleage</div>
            <input type="number" name="kmStart" class="input" placeholder="From" style="width: 75px">
            <input type="number" name="kmEnd" class ="input" placeholder="To" style="width: 75px"> 
            <br><br>
            <div id="years" class="row">Year of fabricatiom</div>
            <input type="number" name="yearStart" class="input" placeholder="From" style="width: 75px">
            <input type="number" name="yearEnd" class ="input" placeholder="To" style="width: 75px"> 
            <br><br>
            <div id="prices" class="row">Price</div>
            <input type="number" name="priceStart" class="input" placeholder="From" style="width: 75px">
            <input type="number" name="priceEnd" class ="input" placeholder="To" style="width: 75px"> 
            <br><br>
            <div id="fuel1" class="row">Fuel</div>
            <select id="fuel" name="fuel" style="width: 180px; height: 21px;">
                <option value="" selected>see all</option>
                <option value="Petrol">Petrol</option>
                <option value="Diesel">Diesel</option>
                <option value="GPL">GPL</option>
                <option value="Hybrid">Hybrid</option>
                <option value="Electric">Electric</option>
            </select>
            <br>
            <div id="gearBox1" class="row">Gearbox</div>
            <select id="gearBox" name="gearBox" style="width: 180px; height: 21px;">
                <option value="" selected>see all</option>
                <option value="Manual">Manual</option>
                <option value="Automatic">Automatic</option>
            </select>
            </form>
        </div>
        <div class="divider"></div> <!-- Bară separată -->
        <div class="main-content">
            <!-- Conținutul principal al paginii -->
            <ul>
                <?php
                    include "../database.php";
                    $cauta = "";
                    $sql = "SELECT * FROM Car WHERE 1=1 ";
                    if (!empty($_POST)){
                        if ($_POST["cauta"] != "") {
                            $cauta = strtolower($_POST["cauta"]);
                        }
                        if ($_POST["brand"] != "") {
                            $elem = $_POST["brand"];
                            $sql .= " AND brand = '$elem'";
                        }
                        if ($_POST["body"] != "") {
                            $elem = $_POST["body"];
                            $sql .= " AND body = '$elem'";
                        }
                        if ($_POST["kmStart"] != "") {
                            $elem = $_POST["kmStart"];
                            $sql .= " AND km >= '$elem'";
                        }
                        if ($_POST["kmEnd"] != "") {
                            $elem = $_POST["kmEnd"];
                            $sql .= " AND km <= '$elem'";
                        }
                        if ($_POST["yearStart"] != "") {
                            $elem = $_POST["yearStart"];
                            $sql .= " AND year >= '$elem'";
                        }
                        if ($_POST["yearEnd"] != "") {
                            $elem = $_POST["yearEnd"];
                            $sql .= " AND year <= '$elem'";
                        }
                        if ($_POST["priceStart"] != "") {
                            $elem = $_POST["priceStart"];
                            $sql .= " AND price >= '$elem'";
                        }
                        if ($_POST["priceEnd"] != "") {
                            $elem = $_POST["kmEnd"];
                            $sql .= " AND km <= '$elem'";
                        }
                        if ($_POST["fuel"] != "") {
                            $elem = $_POST["fuel"];
                            $sql .= " AND fuel = '$elem'";
                        }
                        if ($_POST["gearBox"] != "") {
                            $elem = $_POST["gearBox"];
                            $sql .= " AND gearBox = '$elem'";
                        }
                    }
                    $rows = mysqli_query($conn, $sql);
                ?>
                <?php $i=0; foreach ($rows as $row) : if ($cauta != "" && strpos(strtolower($row["title"]), $cauta) === false){continue;}?>
                <form action="../CarInfo/carInfo.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="arr[]" value="<?php echo $row['id']; ?>">
                    <div class="car" onclick="this.parentNode.submit()">
                        <img src="../img/<?php $arr = explode(',', $row['img']); echo $arr[0]; ?>" alt="Imagine mașină">
                        <div class="car-details">
                            <h2><?php echo $row['title'] ?></h2>
                            <label id="state"><?php echo $row['state']; ?></label>
                            <p><?php echo $row['price'] . $row['currency']; ?></p>
                            <p><?php echo $row['year']; ?></p>
                            <p><?php echo $row['km'] . " km"; ?></p><br><br>
                            <p id="city"><?php echo $row['city']; ?></p>
                            <?php $i++; ?>
                            
                        </div>
                    </div>
                </form>
                <br>
                <?php endforeach; ?>
                <?php if ($i === 0){ ?>
                    <div class="grid">
                    <h3 for="text"> Nothing to show !</h3>
                    </div>
                <?php }?>
            </ul>
        </div>
    </div>
    <footer>
        <hr>
    </footer>
    <script src="search.js"></script>
</body>
</html>
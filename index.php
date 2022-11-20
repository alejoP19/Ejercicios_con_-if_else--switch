<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heladeria</title>
</head>

<body style="background-color:lemonchiffon">
    <?php
    $helados = ["Sin topping" => "900", "Oreo" => "1000", "KitKat" => "1500", "Brownie" => "750", "Vainilla" => "950", "Fresa" => "1800", "Arequipe" => "1200", "Tiramisu" => "1550"];

    ?>
    <h1 style="font-family:Chiller; font-size:80px;">Heladeria ¡Congelados!</h1>
    <img srcset="https://img.icons8.com/color-glass/344/cookie-monster.png 2x" alt="icon" loading="lazy" style="width: 172px; height: 172px;margin-left:10%">
    <h2 style="font-family:Showcard Gothic; font-size:30px;">Tabla de precios</h2>
    <table style="border-style: double;font-family:Showcard Gothic;">
        <thead style="border-style: double;">
            <tr>
                <th style="border-style: double;color:red;">Sabor</th>
                <th style="border-style: double;color:blue">Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($helados as $sabor => $precio) {
                echo "<tr>
            <th style='color: black '>$sabor</th><th style='color:green'>$precio<th/>
            </tr>";
            }; ?>
        </tbody>
    </table>
    <br><br>
    <form action="index.php" method="post"></br> </br>
        <label for="" style='color:green;font-family:Showcard Gothic;font-size: 22px'>Seleccione sus sabores favoritos:</label><br> <br>
        <select name="sabor" id="sabor"><br> <br>
            <?php
            foreach ($helados as $sabor => $precio) {

                echo "<option value='$sabor'>$sabor</option>";
            }
            ?>





        </select>
        <br> <br>
        <select name="sabor2" id="sabor2">
            <?php
            foreach ($helados as $sabor => $precio) {

                echo "<option value='$sabor'>$sabor</option>";
            }
            ?>



        </select>
        <br> <br>
        <select name="sabor3" id="sabor3">
            <?php
            foreach ($helados as $sabor => $precio) {

                echo "<option value='$sabor'>$sabor</option>";
            }
            ?>




        </select>
        <br><br>
        <input type="submit" value="Pedido"> <br> <br>
    </form>
    <br><br>

</body>

</html>

<?php

if (!empty($_POST)) {

    $topping = $_POST["sabor"];

    foreach ($helados as $sabor => $precio) {


        if ($topping == $sabor) {
            echo   "<strong style='color:black;font-family:Showcard Gothic; font-size: 20px' >El topping escogido es</strong> <strong style='color:red;font-family:Showcard Gothic; font-size: 22px;' >$topping</strong> <strong style='color:black;font-family:Showcard Gothic;font-size: 20px' >y el precio es</strong> <strong style='color:blue;font-family:Showcard Gothic; font-size: 22px' >$precio</strong><br><br>";
        }
    }
}
if (!empty($_POST)) {

    $topping = $_POST["sabor2"];

    foreach ($helados as $sabor => $precio) {


        if ($topping == $sabor) {
            echo   "<strong style='color:black;font-family:Showcard Gothic; font-size: 20px' >El topping escogido es</strong> <strong style='color:red;font-family:Showcard Gothic; font-size: 22px;' >$topping</strong> <strong style='color:black;font-family:Showcard Gothic;font-size: 20px' >y el precio es</strong> <strong style='color:blue;font-family:Showcard Gothic; font-size: 22px' >$precio</strong><br><br>";
        }
    }
}
if (!empty($_POST)) {

    $topping = $_POST["sabor3"];

    foreach ($helados as $sabor => $precio) {


        if ($topping == $sabor) {
            echo  "<strong style='color:black;font-family:Showcard Gothic; font-size: 20px' >El topping escogido es</strong> <strong style='color:red;font-family:Showcard Gothic; font-size: 22px;' >$topping</strong> <strong style='color:black;font-family:Showcard Gothic;font-size: 20px' >y el precio es</strong> <strong style='color:blue;font-family:Showcard Gothic; font-size: 22px' >$precio</strong><br><br>";
        }
    }
}
if (!empty($_POST)) {

    $sabor1 =  $_POST["sabor"];
    $sabor2 =  $_POST["sabor2"];
    $sabor3 =  $_POST["sabor3"];
    foreach ($helados as $sabor => $precio) {
        
        if ($sabor1 == $sabor) {
            echo "<br>";
            $precio1=$precio;
            
        }
        if ($sabor2 == $sabor) {
            echo " ";
            $precio2=$precio;
        }
        if ($sabor3 == $sabor) {
            echo " ";
            $precio3=$precio;
        }
        
        
    }
    $totalVenta=$precio1+$precio2+$precio3;
    echo"<strong style='color:red;font-family:Showcard Gothic;font-size: 30px;'>El total de su cuenta es : </strong><strong style='color:blue;font-family:Showcard Gothic;font-size: 30px;' >$totalVenta";
}

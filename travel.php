<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $distance = 500;
        $fuel_consumption = 10;
        $fuel_price = 57;
        $fuelneeded = $distance / $fuel_consumption;
        $travelcost = $fuelneeded * $fuel_price;

        echo "The total distance to travel is $distance kilometers","<br>";
        echo "The vehicle travels $fuel_consumption kilometers per liter","<br>";
        echo "The fuel price per liter is ₱$fuel_price","<br>";
        echo "The total fuel needed is $fuelneeded liters","<br>";
        echo "The estimated travel cost is ₱$travelcost";
    ?>
</body>
</html>
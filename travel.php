<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>Whats the distance(km):</label><br>
        <input name="distance" type="number" step="0.01"><br>
        <label>How much fuel consumed per km(liter):</label><br>
        <input name="fuel" type="number" step="0.01"><br>
        <label>How much does 1 liter of fuel cost:</label><br>
        <input name="price" type="number" step="0.01"><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $distance = $_POST["distance"];
        $fuel_consumption = $_POST["fuel"];
        $fuel_price = $_POST["price"];
        $fuelneeded = $distance / $fuel_consumption;
        $travelcost = $fuelneeded * $fuel_price;

        echo "The total distance to travel is $distance kilometers","<br>";
        echo "The vehicle travels $fuel_consumption kilometers per liter","<br>";
        echo "The fuel price per liter is ₱$fuel_price","<br>";
        echo "The total fuel needed is $fuelneeded liters","<br>";
        echo "The estimated travel cost is ₱$travelcost";
    }else{
        echo "Input Values";
    }
    ?>
</body>
</html>
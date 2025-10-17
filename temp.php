<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>Temperature(Celsius):</label><br>
        <input name="temp" type="number" step="0.01"><br>
        <button type="submit">Submit</button> <br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius= $_POST["temp"];
        $fahrenheit= ($celsius*(9/5))+32;
        echo "It is $celsius degrees Celsius currently","<br>";
        echo "It is $fahrenheit degrees in Fahrenheit";
    } else {
        echo "Input Values";
    }
    ?>
</body>
</html>
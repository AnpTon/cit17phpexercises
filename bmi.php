<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
</head>
<body>
    <h1>BMI Calculatior</h1>
    <form method="post" action="">
        <label>Your weight(kg):</label><br>
        <input name="weight" type="number" step="0.01" required><br>
        <label>Your height(meters):</label><br>
        <input name="height" type="number" step="0.01" required><br>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST["weight"];
        $height = $_POST["height"];
        $bmi = $weight / ($height * $height);

        echo "The weight is $weight kilograms","<br>";
        echo "The height is $height meters","<br>";
        echo "The calculated BMI is $bmi";
    }else{
        echo "Input Values";
    }
    ?>
</body>
</html>
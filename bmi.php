<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $weight = 70;
        $height = 1.75;
        $bmi = $weight / ($height * $height);

        echo "The weight is $weight kilograms","<br>";
        echo "The height is $height meters","<br>";
        echo "The calculated BMI is $bmi";
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Math</title>
</head>
<body>
    <h1>Simple Math</h1>
    <form method="post" action="">
        <label>A:</label><br>
        <input name="first" type="number" step="0.01" required><br>
        <label>B:</label><br>
        <input name="second" type="number" step="0.01" required><br>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["first"];
        $b = $_POST["second"];
        $sum = $a + $b;
        $difference = $a - $b;
        $product = $a * $b;
        $quotient = $a / $b;
        echo "The value of A is $a", "<br>";
        echo "The value of B is $b", "<br>";
        echo "The sum of A and B is $sum", "<br>";
        echo "The difference of A and B is $difference", "<br>";
        echo "The product of A and B is $product", "<br>";
        echo "The quotient of A and B is $quotient";    
    } else{
        echo "Input Values";
    }   
    ?>
</body>
</html>

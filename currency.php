<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>Amount(PHP):</label><br>
        <input name="amount" type="number" step="0.01"><br>
        <button type="submit">Submit</button> <br>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amountphp = $_POST["amount"];
        $usd = 0.017;
        $eur = 0.015;
        $jpy = 2.58;

        $amountusd = $amountphp * $usd;
        $amounteur = $amountphp * $eur;
        $amountjpy = $amountphp * $jpy;

        echo "The original amount is ₱$amountphp","<br>";
        echo "The equivalent amount in USD is $$amountusd","<br>";
        echo "The equivalent amount in EUR is €$amounteur","<br>";
        echo "The equivalent amount in JPY is ¥$amountjpy";
        } else{
            echo "Input Values";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $amountphp = 10000;
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
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $balance = 10000;
        $deposit = 5000; 
        $withdraw = 4000;
        $depositbalance = $balance + $deposit;
        $depositwithdraw = $depositbalance - $withdraw;

        echo "The initial balance was ₱$balance","<br>";
        echo "The deposited amount is ₱$deposit, bringing the balance to ₱$depositbalance","<br>";
        echo "The withdrawn amount is ₱$withdraw, leaving the balance at ₱$depositwithdraw";
        ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Account Simulation</title>
</head>
<body>
    <h1>Bank Account Simulation</h1>
    <form method="post" action="">
        <label>What's your current Balance:</label><br>
        <input name="balance" type="number" required><br>
        <label>Are you withdrawing(Input 0 for No):</label><br>
        <input name="withdraw" type="number" required><br>
        <label>>Are you depositing(Input 0 for No):</label><br>
        <input name="deposit" type="number" required><br>
        <button type="submit">Calculate</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $balance = $_POST["balance"];
        $deposit = $_POST["withdraw"]; 
        $withdraw = $_POST["deposit"];
        $depositbalance = $balance + $deposit;
        $depositwithdraw = $depositbalance - $withdraw;

        echo "The initial balance was ₱$balance","<br>";
        echo "The deposited amount is ₱$deposit, bringing the balance to ₱$depositbalance","<br>";
        echo "The withdrawn amount is ₱$withdraw, leaving the balance at ₱$depositwithdraw";
        }else{
            echo "Input Values";
        }
    ?>
</body>
</html>
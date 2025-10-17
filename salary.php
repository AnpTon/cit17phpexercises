<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>Whats your Salary:</label><br>
        <input name="salary" type="number" step="0.01"><br>
        <label>Whats your Allowance:</label><br>
        <input name="allowance" type="number" step="0.01"><br>
        <label>Any Deductions:</label><br>
        <input name="deduction" type="number" step="0.01"><br>
        <button type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $basic_salary = $_POST["salary"];
        $allowance = $_POST["allowance"];
        $deduction = $_POST["deduction"];
        $net_salary = ($basic_salary + $allowance)-$deduction;
        echo "Your basic salary is $basic_salary", "<br>";
        echo "You have an allowance of $allowance", "<br>";
        echo "You have a deduction of $deduction", "<br>";
        echo "Your net salary is $net_salary";
    } else{
        echo "Input Values";
    }
    ?>
</body>
</html>
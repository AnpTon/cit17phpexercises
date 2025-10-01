<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $basic_salary = 5000;
        $allowance = 1000;
        $deduction = 500;
        $net_salary = ($basic_salary + $allowance)-$deduction;
        echo "Your basic salary is $basic_salary", "<br>";
        echo "You have an allowance of $allowance", "<br>";
        echo "You have a deduction of $deduction", "<br>";
        echo "Your net salary is $net_salary";
    ?>
</body>
</html>
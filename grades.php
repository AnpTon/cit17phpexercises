<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $math = 85;
        $english = 90;
        $science = 87;
        $average = ($math + $english + $science) / 3;

        if ($average >= 90) {
            $grade = "A";
        } elseif ($average >= 80) {
            $grade = "B";
        } elseif ($average >= 70) {
            $grade = "C";
        } elseif ($average >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        echo "The Math score is $math","<br>";
        echo "The English score is $english","<br>";
        echo "The Science score is $science","<br>";
        echo "The average score is $average","<br>";
        echo "The final grade is $grade";
    ?>
</body>
</html>
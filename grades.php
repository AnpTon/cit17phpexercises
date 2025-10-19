<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Grading System</title>
</head>
<body>
    <h1>Simple Grading System</h1>
    <form method="post" action="">
        <label>Grade in Math:</label><br>
        <input name="Math" type="number" step="0.01" required><br>
        <label>Grade in English:</label><br>
        <input name="English" type="number" step="0.01" required><br>
        <label>Grade in Science:</label><br>
        <input name="Science" type="number" step="0.01" required><br>
        <button type="submit">Submit</button>
    </form>   
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $math = $_POST["Math"];
        $english = $_POST["English"];
        $science = $_POST["Science"];
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
    }else{
        echo "Input Values";
    }
    ?>
</body>
</html>
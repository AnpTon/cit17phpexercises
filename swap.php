<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swapping Variables</title>
</head>
<body>
    <h1>Swapping Variables</h1>
    <form method="post" action="">
        <label>A:</label><br>
        <input name="first" type="number" step="0.01" required><br>
        <label>B:</label><br>
        <input name="second" type="number" step="0.01" required><br>
        <button type="submit">Submit</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST["first"];
        $b = $_POST["second"];    
        echo "Before swapping: a = $a, b = $b", "<br>"; 
        $temp = $a; 
        $a = $b;   
        $b = $temp;     
        echo "After swapping: a = $a, b = $b";
        } else {
            echo "Input Values";
        }
    ?>
</body>
</html>
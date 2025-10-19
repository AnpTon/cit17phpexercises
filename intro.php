<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>
</head>
<body>
    <h1>Introduce Yourself</h1>
    <form method="post" action="">
        <label>What's your name:</label><br>
        <input name="name" type="text" required><br>
        <label>How old are you:</label><br>
        <input name="age" type="number" required><br>
        <label>What's your favorite color:</label><br>
        <input name="color" type="text" required><br>
        <button type="submit">Submit</button>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name= $_POST["name"];
        $age = $_POST["age"];
        $color = $_POST["color"];
        echo "Hi, I'm $name, I am $age years old, and my favorite color is $color";
        } else {
            echo "Input Values";
        }
    ?>   
</body>
</html>

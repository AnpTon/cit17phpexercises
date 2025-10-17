<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>length:</label><br>
        <input name="length" type="number" step="0.01"><br>
        <label>width:</label><br>
        <input name="width" type="number" step="0.01"><br>
        <button type="submit">Submit</button> <br>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $length= $_POST["length"];
        $width= $_POST["width"];
        $area= $length*$width;
        $perimeter= 2*($length+$width);
        echo "The length of the rectangle is $length", "<br>";
        echo "The width of the rectangle is $width", "<br>";
        echo "The area of the rectangle is $area", "<br>";
        echo "The perimeter of the rectangle is $perimeter";
        } else {
            echo "Input Values";
        }
    ?>
</body>
</html>
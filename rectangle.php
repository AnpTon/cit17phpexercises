<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $length= 12;
        $width= 30;
        $area= $length*$width;
        $perimeter= 2*($length+$width);
        echo "The length of the rectangle is $length", "<br>";
        echo "The width of the rectangle is $width", "<br>";
        echo "The area of the rectangle is $area", "<br>";
        echo "The perimeter of the rectangle is $perimeter";

    ?>
</body>
</html>
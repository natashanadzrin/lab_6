<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>
    <?php
        // Receives width and height, returns the area
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 13;
        $height = 27;
        $area = calculateArea($width, $height);

        echo "<b>The area of a rectangle with a width of $width and a height of $height is $area</b>";
    ?>
</body>
</html>
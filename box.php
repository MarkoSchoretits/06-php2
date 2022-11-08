<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box</title>
</head>
<body>
    <?php

    function calc_box($width, $heigth, $depth)
    {
        $area = $width * $heigth;
        $volume = $area * $depth;
        $results = array ($area, $volume);
        return $results;
    };
    $returned_result = calc_box(2, 7, 5);
    echo "Area: " . $returned_result[0] . "<br>";
    echo "Volume: " . $returned_result[1] . "<br><br>";

/*     function area($width, $heigth)
    {
        $area = $width * $heigth;
        return $area;
    }
    function volume($width, $heigth, $depth)
    {
        $volume = $width * $heigth * $depth;
        return $volume;
    }
    $returned_area = area(2, 7, 5);
    $returned_volume = volume (2, 7, 5);
    echo $returned_area . "<br>";
    echo $returned_volume . "<br><br>";
 */
    ?>
</body>
</html>
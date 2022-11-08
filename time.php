<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time in hours and minutes</title>
</head>
<body>
    <?php
    function min_to_h_min($mintotal)
    {
        $hours = floor($mintotal / 60);
        $minutes = $mintotal - $hours * 60;
        echo $mintotal . " minutes equal <br>";
        echo $hours . " hours and ";
        echo $minutes . " minutes. <br><br>";
    }
    min_to_h_min(50);
    min_to_h_min(60);
    min_to_h_min(100);
    min_to_h_min(200);
    min_to_h_min(500);
    min_to_h_min(1000);
    min_to_h_min(2000);
    ?>
</body>
</html>
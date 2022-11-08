<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit to Celsius</title>
</head>
<body>
    <?php
    function F2C($F)
    {
        $C = round(($F - 32) /1.8);
        echo $F . "°F equal " . $C . "°C.<br>";
        if ($C < 0)
            echo "That's almost absolute zero. Inuit pee ice cubes.";
            elseif ($C < 12)
            echo "Your ideal temperature for beer.";
            elseif ($C < 20)
            echo "That's perfect room temperature.";
            elseif ($C < 36)
            echo "Your darling needs a hug and a blanket.";
            elseif ($C < 38)
            echo "Your darling's perfect temperature";
            elseif ($C < 42)
            echo "Your darling needs a cold beer.";
            else
            echo "Your darling won't need a beer ever again.";            
            echo "<br><br>";
    }

    F2C(0);
    F2C(10);
    F2C(30);
    F2C(40);
    F2C(60);
    F2C(80);
    F2C(96);
    F2C(105);
    F2C(110);

    ?>
</body>
</html>
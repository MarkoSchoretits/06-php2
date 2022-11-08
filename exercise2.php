<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calculations($a, $b)
    {
        $sum = $a + $b;
        $product = $a * $b;
        $quotient = $a / $b;
        echo "The sum of " . $a . " and " . $b . " is " . $sum . ".<br>";
        echo "Their product is " . $product . ",<br>";
        echo "whilest their quotient equals " . $quotient . ".<br><br>";
    }

    calculations(2, 3);
    calculations(17, 42);
    calculations(3.14, 0.618);
?>
</body>
</html>
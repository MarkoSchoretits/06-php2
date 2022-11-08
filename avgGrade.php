<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>avgGrade</title>
</head>
<body>
    <?php
    function grading($math, $physics, $english)
    {
        $sum = $math + $physics + $english;
        $avg_grade = $sum / 3;
        echo "Math: " . $math . "<br>";
        echo "Physics: " . $physics . "<br>";
        echo "English: " . $english . "<br>";
        echo "Sum: " . $sum . "<br>";
        echo "avgGrade: " . $avg_grade . "<br><br>";
    }

    grading (1, 1, 1);
    grading (1, 2, 1);
    grading (2, 3, 4);
    grading (4, 3, 4);
    grading (1, 4, 4);

    ?>
</body>
</html>
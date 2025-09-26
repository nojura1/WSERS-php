<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        //for ($a = 200; $a <= 250; ++$a) {
        //    if ($a & 1) echo $a . "<br>";
        //}

        //for ($a = 200; $a <= 300; ++$a) {
        //    if ($a % 5 == 0) echo "<div class = 'red'>" . $a . "<br></div>";
        //    else echo $a . "<br>";
        //}

        $acc = 0;
        $next = 1;

        for ($a = 0; $a < 1500; ++$a) {
            $tmp = $next;
            $next += $acc;
            $acc = $tmp;
            echo $acc . "<br>";
        }
    ?>
</body>
</html>
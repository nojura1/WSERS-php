<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css? <?= time(); ?> ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Products - Grip Shop</title>
</head>

<body>
    <?php
    include_once("navbar.php");
    navbar($tArray["ProductBtn"]);
    ?>
    <h1>Products</h1>
    <div class="products">
        <?php
        $fhandler = fopen("products.csv", "r");
        fgets($fhandler);

        while (!feof($fhandler)) {
            $line = fgets($fhandler);
            $atoms = explode(";", $line);
            if (count($atoms) != 6) {
                ?>
                <div class="prod">
                    <div><?php ?></div>
                    <img src="pics/<?php $atoms[2] ?>" alt="C++ coach">
                    <div><?php ?></div>
                    <div><?php ?></div>
                </div>

            <?php }
        } ?>
    </div>
</body>

</html>
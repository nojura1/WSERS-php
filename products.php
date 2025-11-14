<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css? <?= time(); ?> ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Products - Mentorship Shop</title>
</head>

<body>
    <script src="script.js?<?= time(); ?>"></script>
    <?php
    include_once("navbar.php");
    navbar($tArray["ProductBtn"]);
    ?>

    <main class="page">
        <h1>Products</h1>

        <div class="products">
            <?php
            $fhandler = fopen("products.csv", "r");
            fgets($fhandler);

            while (!feof($fhandler)) {
                $line = fgets($fhandler);
                $atoms = explode(";", $line);
                if (count($atoms) == 6) {
                    ?>
                    <div class="prod">
                        <div>
                            <?php $lang == "EN" ? print $atoms[0] : print $atoms[1]; ?>
                        </div>

                        <img src="pics/<?php print $atoms[2]; ?>"
                            alt="<?php $lang == "EN" ? print $atoms[0] : print $atoms[1]; ?>">

                        <div>
                            <?php print $atoms[3]; ?>
                        </div>

                        <div>
                            <span class="price">
                                <?php $lang == "EN" ? print $atoms[4] : print $atoms[5]; ?>
                            </span>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </main>
</body>

</html>
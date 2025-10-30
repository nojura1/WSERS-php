<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css? <?= time(); ?> ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Welcome - Grip Shop</title>
</head>

<body>
    <script src="script.js"></script>
    <?php
    include_once("navbar.php");
    navbar($tArray["HomeBtn"]);
    ?>
    <h1>Grip Shop</h1>
    <p>Crush it. Build your grip.</p>
    <h2>Start here</h2>
    <p>New to grippers? Begin with 40 kgs.</p>
</body>

</html>
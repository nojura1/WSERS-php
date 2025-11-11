<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css? <?= time(); ?> ">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Contact - Grip Shop</title>
</head>

<body>
    <?php
    include_once("navbar.php");
    navbar($tArray["ContactBtn"]);
    ?>
    <h1>Contact us</h1>
    <form method="post">
        <label>Name <input name="name" required></label>
        <label>Password <input type="password" name="pass" required></label>
        <label>Message <textarea name="message" required></textarea></label>
        <button type="submit">Send</button>
    </form>
    <address>Luxembourg +352 00 00 00 hello@grip.shop</address>
</body>

</html>
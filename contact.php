<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>Contact - Grip Shop</title>
</head>
<body>
<?php
    include_once("navbar.php");
    navbar();
?>
<h1>Contact us</h1>
<form action="/contact" method="post">
<label>Name <input name="name" required></label>
<label>Email <input type="email" name="email" required></label>
<label>Message <textarea name="message" rows="4" required></textarea></label>
<button type="submit">Send</button>
</form>
<address>Luxembourg · +352 00 00 00 · hello@grip.shop</address>
</body>
</html>
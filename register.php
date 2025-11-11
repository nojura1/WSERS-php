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
    navbar($tArray["RegisterBtn"]);
    ?>
    <h1>Registration form</h1>
    <?php
    function check($user)
    {
        if (filesize("clients.csv") <= 0)
            return false;

        $fhandler = fopen("clients.csv", "r");
        $mass = fread($fhandler, filesize("clients.csv"));
        $temp = str_replace(";", " ", $mass);
        $strarr = explode(" ", $temp);

        for ($i = 0; $i < count($strarr); $i += 2) {
            if ($strarr[$i] == $user) {
                return true;
            }
        }

        fclose($fhandler);
        return false;
    }

    $flag = true;
    if (isset($_POST["username"], $_POST["pass"], $_POST["passconf"])) {
        $flag = false;

        if (check($_POST["username"])) {
            $flag = true;
            echo "username is already taken";
        } else if ($_POST["pass"] != $_POST["passconf"]) {
            $flag = true;
            echo "password is not confirmed";
        } else {
            $fhandler = fopen("clients.csv", "a");
            echo "registration has been successfully completed";
            fwrite($fhandler, "\n" . $_POST["username"] . ";" . $_POST["pass"]);
            fclose($fhandler);
        }
    }
    ?>

    <?php if ($flag) { ?>
        <form class="register-form" method="post">
            <label>Username <input name="username" required></label>
            <label>name <input name="name" required></label>
            <label>Email <input type="email" name="email" required></label>
            <label>Password <input type="password" name="pass" required></label>
            <label>Password confirmation<input type="password" name="passconf" required></label>
            <button type="submit">Send</button>
        </form>
    <?php } ?>
</body>

</html>
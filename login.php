<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login - Mentorship Shop</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <script src="script.js?<?= time(); ?>"></script>
    <?php
    include_once("navbar.php");
    include_once("ccode.php");
    navbar($tArray["LoginBtn"]);
    ?>

    <main class="page">
        <section class="login-form">
            <h2><?= $tArray["LoginLogin"] ?></h2>
            <form method="post">
                <label>
                    <?= $tArray["UnameEmail"] ?>
                    <input type="text" name="login" required>
                </label>

                <label>
                    <?= $tArray["PasswordLogin"] ?>
                    <input type="password" name="password" required>
                </label>

                <button type="submit"><?= $tArray["LoginBtn"] ?></button>
            </form>
        </section>
    </main>
    <?php
    if (isset($_POST["login"], $_POST["password"])) {
        if (
            (columnExists($_POST["login"], 0) || columnExists($_POST["login"], 2)) &&
            columnExists($_POST["password"], 3)
        ) {
            echo "<div class='alert alert-success'>login has been successfully completed</div>";
        } else {
            echo "<div class='alert alert-error'>The username/email or password do not match.</div>";
        }
    }
    ?>
</body>

</html>
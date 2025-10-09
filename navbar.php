<?php
function navbar($callee)
{
    ?>
    <nav>
        <ul>
            <li <?php if ($callee == "home")
                print ("class='highlight'") ?>><a href="welcome.php">Home</a></li>
                <li <?php if ($callee == "products")
                print ("class='highlight'") ?>><a href="products.php">Shop</a></li>
                <li <?php if ($callee == "contact")
                print ("class='highlight'") ?>><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

    <?php
}
?>
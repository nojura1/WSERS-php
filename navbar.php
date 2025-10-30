<?php
$lang = "EN";
if (isset($_GET["lang"])) {
    $lang = $_GET["lang"];
}

$tFile = fopen("translation.csv", "r");
$tArray = [];

function defLang($l)
{
    switch ($l) {
        case "EN":
            return 1;
        case "UA":
            return 2;
        default:
            return 1;
    }
}

while (!feof($tFile)) {
    $line = fgets($tFile);
    $columns = explode(";", $line);
    $tArray[$columns[0]] = $columns[defLang($lang)];
}
function navbar($page)
{
    global $lang;
    global $tArray;
    $navbarTable = [
        $tArray["HomeBtn"] => "welcome.php",
        $tArray["ProductBtn"] => "products.php",
        $tArray["ContactBtn"] => "contact.php",
        $tArray["RegisterBtn"] => "register.php"
    ];

    ?>
    <nav>
        <ul>
            <?php foreach ($navbarTable as $key => $value) { ?>
                <li <?php if ($page == $key)
                    print ("class='highlight'"); ?>><a href=<?php print ("'" . $value . "?lang=" . $lang . "'"); ?>> <?php print ($key); ?></a></li>
            <?php } ?>
            <form id="f">
                <select name="lang" onchange="this.form.submit()">
                    <option value="EN" <?php if ($lang == "EN")
                        print ("selected"); ?>>English</option>
                    <option value="UA" <?php if ($lang == "UA")
                        print ("selected"); ?>>Ukrainian</option>
                </select>
            </form>
        </ul>
    </nav>

    <?php
}
?>
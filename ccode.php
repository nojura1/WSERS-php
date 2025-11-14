<?php
function columnExists($columnName, $columnNumber)
{
    $fhandler = fopen("clients.csv", "r");
    fgets($fhandler);

    while (!feof($fhandler)) {
        $line = fgets($fhandler);
        $columns = explode(";", $line);
        if (trim($columns[$columnNumber]) == trim($columnName)) {
            fclose($fhandler);
            return true;
        }
    }

    fclose($fhandler);
    return false;
}
?>
<?php

const URL_BASE = "C:\\xampp\\htdocs\\PW2-V2\\web\\inc\\files\\";

function readFiles($fileName)
{
    if ($fileName == null || $fileName == "" && !file_exists($fileName)) {
        die("Comprobar archivo");
    }

    $text = "";
    $file = fopen(URL_BASE . $fileName, "r") or die("No se encuentra el archivo");

    while (!feof($file)) {
        $text . fgets($file);
    }

    fclose($file);
    return $text;
}


function getContentJson($fileName)
{
    if ($fileName == null || $fileName == "" && !file_exists($fileName)) {
        die("Comprobar archivo");
    }

    $jsonFileContents = file_get_contents(URL_BASE . $fileName);

    return $jsonFileContents;
}

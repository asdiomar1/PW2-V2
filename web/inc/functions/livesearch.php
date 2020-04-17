<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // Verifico que el método de solicitud sea POST
    if (!empty($_POST['searchText'])) {
        $searchText = strtolower(trim(htmlspecialchars($_POST['searchText'])));
        $products = json_decode(getContentJson2("new_collection.json"), true);
        $array = [];

        foreach ($products as $key => $value) {
            if (
                strpos($searchText, strtolower($value["brand"])) !== false ||
                strpos($searchText, strtolower($value["nombre"])) !== false
            ) { //filtro manual del JSON (crear lógica para filtrar BD)

                $post_data = array(
                    'product' => array(
                        'name' => $value["nombre"],
                        'picture' => $value["images"]["searchImg"],
                        'description' => $value["titleDescription"]
                    )
                );

                array_push($array, $post_data);
            }
        }
        echo json_encode($array);
    } else {
        echo (json_encode("El texto de búsqueda no puede estar vacío."));
    }
} else {
    echo (json_encode("El tipo de petición no es POST."));
}

//En tiempo de ejecución no consigue la función definina en el archivo read_file.php
function getContentJson2($fileName)
{
    $URL_BASE = "C:\\xampp\\htdocs\\PW2-DaVinci\\web\\inc\\files\\";
    if ($fileName == null || $fileName == "" && !file_exists($fileName)) {
        die("Comprobar archivo");
    }

    $jsonFileContents = file_get_contents($URL_BASE . $fileName);

    return $jsonFileContents;
}

<?php
    include 'inc/functions/read_file.php';
    //Obtener ID por parametro y realizar busqueda en el JSON para filtrar el elemento correcto
    $specifications = json_decode(getContentJson("new_collection.json"), true);

    foreach($specifications as $specs) {
        if($specs['id'] == 1) { // Modificar para recibir este ID por parametro
            $finalSpecs = $specs;
        }
    }

    foreach ($finalSpecs["specs"] as $key => $value) {

        if ($key != "id") {
            echo "<tr><td><h5>" . $key . "</h5></td>";
            echo "<td><h5>" . $value . "</h5></td></tr>";
        }
    }
?>
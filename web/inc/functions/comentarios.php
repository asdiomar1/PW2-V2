<?php
include_once 'utils.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $puntuacion = $_POST['puntaje'];
    $message = $_POST['message'];
    $id_producto = $_POST['id_producto'];

    if (isset($name) && isset($message) && isset($id_producto)) {
        $comments = GetComments();

        $date = DateTime::createFromFormat('U.u', number_format(microtime(true), 6, '.', ''));
        $formatted_date = $date->format("Y-m-d H:i:s.u");

        $new_comment = array(
            "id_producto" => intval($id_producto),
            "fecha" => $formatted_date,
            "puntuacion" => intval($puntuacion),
            "nombre" => $name,
            "comentario" => $message
        );

        array_unshift($comments, $new_comment);
        $json = json_encode($comments, JSON_PRETTY_PRINT);

        WriteCommentsTojsonFile($json);
    } else {
        header("Content-Type: text/json; charset=utf8");
        echo json_encode(array("success" => false, "error" => "Faltan datos por completar"));
    }
}

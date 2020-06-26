<?php
include 'read_file.php';
// Función hecha para reutilizar los botones interactivos
function botones_interactivos()
{
    return "<div class=\"prd-bottom\">
        <a href=\"\" class=\"social-info\">
            <span class=\"ti-bag\"></span>
            <p class=\"hover-text\">comprar</p>
        </a>
        <a href=\"\" class=\"social-info\">
            <span class=\"lnr lnr-heart\"></span>
            <p class=\"hover-text\">lo deseo</p>
        </a>
        <a href=\"\" class=\"social-info\">
            <span class=\"lnr lnr-move\"></span>
            <p class=\"hover-text\">ver más</p>
        </a>
        </div>";
}

function GetProducts()
{
    return json_decode(getContentJson("products.json"), true);
}

function GetComments()
{
    $all = json_decode(getContentJson("comments.json"), true);
    return array_slice($all, 0, 10);
}

function GetCategories()
{
    return json_decode(getContentJson("category.json"), true);
}

function GetBrands()
{
    return json_decode(getContentJson("brands.json"), true);
}

function WriteCommentsTojsonFile($json)
{
    $full_path = URL_BASE . "comments.json";
    file_put_contents($full_path, $json);
}

function filterByCategory($products, $idCategory) {
    $temp_products = array_filter($products, function ($item) use ($idCategory) {
        if ($item['category'] === $idCategory) { 
            return true;
        } else {
            return false;
        }
    });

    return $temp_products;
}

function remover ($valor, $arr)
{
    foreach($arr as $value) {
        if($value['id'] == $valor) {
            unset($value['id']);
        }
    }

    return $arr;
}

function remove_element(&$array,$value) {
    if(($key = array_search($value,$array)) !== false) {
       unset($array[$key]);
  }    
}
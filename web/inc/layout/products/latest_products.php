
<?php
    // Llamado API, lectura archivo o BD
    $html = "";
    for ($i = 1; $i <= 8; $i++) {

        $html = "<div class=\"col-lg-3 col-md-6\">" .
            "<div class=\"single-product\">" .
            "<img class=\"img-fluid\" src=" . "img/product/p{$i}.jpg" . " alt=\"descripcion\">" .
            "<div class=\"product-details\">" .
            "<h6>addidas New Hammer sole para deportistas</h6>" .
            "<div class=\"price\"> <h6>$150.00</h6>" .
            "<h6 class=\"l-through\">$210.00</h6></div>" . botones_interactivos() .
            " </div> </div> </div>";

        echo  $html;
    }
?>
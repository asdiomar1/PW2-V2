


<div class="single-product-slider">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Últimos productos</h1>
                    <p>TEXTO DESCRIPTIVO PARA MOSTRAR ESTA SECCIÓN</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                // Llamado API, lectura archivo o BD
                $html = "";
                for ($i = 1; $i <= 8; $i++) {
                    
                    $html = "<div class=\"col-lg-3 col-md-6\">".
                    "<div class=\"single-product\">".
                    "<img class=\"img-fluid\" src=" . "img/product/p{$i}.jpg" . " alt=\"descripcion\">".
                    "<div class=\"product-details\">" .
                    "<h6>addidas New Hammer sole para deportistas</h6>".
                    "<div class=\"price\"> <h6>$150.00</h6>".
                    "<h6 class=\"l-through\">$210.00</h6></div>" . botones_interactivos() . 
                    " </div> </div> </div>" ;

                    echo  $html;
                }
            ?>
        </div>
    </div>
</div>

<?php

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

?>


<div class="single-product-slider">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h1>Próximas llegadas</h1>
                    <p>TEXTO DESCRIPTIVO PARA MOSTRAR ESTA SECCIÓN</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // Llamado API, lectura archivo o BD
            $html = "";
                for ($i = 1; $i <= 8; $i++) {

                    $num = random_int(1, 8);

                    $html = "<div class=\"col-lg-3 col-md-6\">" .
                            "<div class=\"single-product\">" .
                            "<img class=\"img-fluid\" src=" . "img/product/p{$num}.jpg" . " alt=\"descripcion\">" .
                            "<div class=\"product-details\">" .
                            "<h6>addidas New Hammer sole para deportistas</h6>" .
                            "<div class=\"price\"> <h6>$150.00</h6>" .
                            "<h6 class=\"l-through\">$210.00</h6></div>" . botones_interactivos() .
                            "</div> </div> </div>";

                    echo $html;
                }
            ?>
        </div>
    </div>
</div>
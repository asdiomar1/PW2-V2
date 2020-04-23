<div class="container">
    <div class="row fullscreen align-items-center justify-content-start">
        <div class="col-lg-12">
            <div class="active-banner-slider owl-carousel">
                <?php
                    include 'inc/functions/read_file.php';

                    $products = json_decode(getContentJson("products.json"), true);

                    foreach ($products as $key => $value) {

                        echo "<div class=\"row single-slide align-items-center d-flex\">";
                        echo "<div class=\"col-lg-5 col-md-6\">";
                        echo "<div class=\"banner-content\">";
                        echo "<h1>" . $value["nombre"] . "</h1>";
                        echo "<h3>Lo más reciente de <strong>" . $value["brand"] . "</strong>!</h3>";
                        echo "<p>" . $value["titleDescription"] . "</p>";
                        echo "<div class=\"add-bag d-flex align-items-center\">";
                        echo "<a class=\"add-btn\" href=\"#\"><span class=\"lnr lnr-cross\"></span></a>";
                        echo "<span class=\"add-text text-uppercase\">Ver más detalles</span></div></div></div>";
                        echo "<div class=\"col-lg-7\"> <div class=\"banner-img\">";
                        echo "<img class=\"img-fluid\" src=\"img/banner/" . $value["images"]["bannerImg"] . "\" alt=\"\">";
                        echo "</div></div></div>";
                    }
                ?>
            </div>
        </div>
    </div>
</div>
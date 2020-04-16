<div class="container">
    <div class="row">

        <?php
            // Llamado API, lectura archivo o BD
            $html = "";
            for ($i = 1; $i <= 5; $i++) {

                $html = "<a class=\"col single-img\" href=\"#\">".
                "<img class=\"img-fluid d-block mx-auto\" src=\"img/brand/{$i}.png\" alt=\"\"> </a>";

                echo $html;
            }
        ?>
    </div>
</div>
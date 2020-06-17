<div class="container">
    <div class="row fullscreen align-items-center justify-content-start">
        <div class="col-lg-12">
            <div class="active-banner-slider owl-carousel">
                <?php
                $products = GetProducts();

                foreach ($products as $key => $value) { ?>

                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content">
                                <h1> <?php echo ($value["nombre"]); ?> </h1>
                                <h3> Lo más reciente de <strong> <?php echo ($value["brand"]); ?></strong>!</h3>
                                <p> <?php echo ($value["titleDescription"]); ?></p>
                                <div class="add-bag d-flex align-items-center">
                                    <a id="<?php echo($value['id']); ?>" class="add-btn" href="<?php echo ("single-product.php?product_id=" . $value['id']); ?>"><span class="lnr lnr-cross"></span></a>
                                    <span class="add-text text-uppercase">Ver más detalles</span>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="banner-img">
                                <img class="img-fluid" src="<?php echo ("img/banner/" . $value["images"]["bannerImg"]); ?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>
	$(".banner-content .add-bag").on("click", "a", function() {
	   location.href = "single-product.php?product_id=" + this.id;
	});
</script>
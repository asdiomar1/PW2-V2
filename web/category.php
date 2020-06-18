<?php include 'inc/layout/header.php' ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Categorías Karma</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">Inicio<span class="lnr lnr-arrow-right"></span></a>
					<a href="#">Tienda<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.php">Categorías</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->
<div class="container">
	<div class="row">
		<div class="col-xl-3 col-lg-4 col-md-5">
			<div class="sidebar-categories">
				<div class="head">Examinar categorías</div>
				<ul class="main-categories">
					<li class="main-nav-list">
						<a data-toggle="collapse" href="#zapatos" aria-expanded="false" aria-controls="fruitsVegetable">
							<?php
								include 'inc/functions/utils.php';
								$products = GetProducts();
							?>
							<span class="lnr lnr-arrow-right"></span>Zapatos<span class="number">(<?php echo count($products); ?>)</span></a>
						<ul class="collapse" id="zapatos" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
							<?php
							foreach ($products as $key => $value) {	 ?>
								<li id="<?php echo $value["id"] ?>" class="main-nav-list child">
									<a href="<?php echo ("single-product.php?product_id=" . $value["id"]); ?>"><?php echo $value["nombre"] ?><span class="number"></span></a>
								</li>
							<?php } ?>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-xl-9 col-lg-8 col-md-7">
			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center" style="height: 60px;">
				<div class="sorting">
				</div>
				<div class="sorting mr-auto">
				</div>
				<div class="pagination">
				</div>
			</div>
			<!-- End Filter Bar -->

			<!-- Start Best Seller -->
			<section class="lattest-product-area pb-40 category-list">
				<div class="row">

					<?php
					foreach ($products as $key => $value) { ?>

						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<a href="single-product.php?product_id=<?php echo($value['id']); ?>"><img class="img-fluid" src="img/product/<?php echo($value['images']['detail1']); ?>" alt=""></a>
								<div class="product-details">
									<h6><?php echo($value['nombre']); ?></h6>
									<div class="price">
										<h6><?php echo($value['precio']);?></h6>
										<h6 class="l-through">$<?php echo rand(400, 1000)?></h6>
									</div>

									<div class="prd-bottom">
										<a href="single-product.php?product_id=<?php echo($value['id']); ?>" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">comprar</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</section>
			<!-- End Best Seller -->

			<!-- Start Filter Bar -->
			<div class="filter-bar d-flex flex-wrap align-items-center" style="height: 60px;">
				<div class="sorting">
				</div>
				<div class="sorting mr-auto">
				</div>
				<div class="pagination">
				</div>
			</div>
			<!-- End Filter Bar -->
		</div>
	</div>
</div>

<!-- Start related-product Area -->
<section class="related-product-area section_gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h1>Promociones de la semana</h1>
					<p>Los mejores productos seleccionados y más vendidos de la semana</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r1.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Tacones Altos Negros</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$<?php echo rand(400, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r2.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Remera de Hombre</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$<?php echo rand(200, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r3.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Remera de Mujer Negra</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through"><?php echo rand(250, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r5.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Remera de Mujer Turquesa</a>
								<div class="price">
									<h6>$75.10</h6>
									<h6 class="l-through">$<?php echo rand(190, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r6.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Tacones Bajos Rojos</a>
								<div class="price">
									<h6>$95.00</h6>
									<h6 class="l-through">$<?php echo rand(195, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r7.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Remera de Hombre Deportiva</a>
								<div class="price">
									<h6>$130.00</h6>
									<h6 class="l-through">$<?php echo rand(180, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r9.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Buzo de Hombre Gris</a>
								<div class="price">
									<h6>$176.00</h6>
									<h6 class="l-through">$<?php echo rand(260, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r10.jpg" alt="" ></a>
							<div class="desc">
								<a href="#" class="title">Vestido Negro</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$<?php echo rand(300, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r11.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Tacones Altos Amarillos</a>
								<div class="price">
									<h6>$110.00</h6>
									<h6 class="l-through">$<?php echo rand(150, 1000)?></h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="ctg-right">
					<a href="#" target="_blank">
						<img class="img-fluid d-block mx-auto" src="img/category/c5.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End related-product Area -->

<?php include 'inc/layout/footer.php' ?>
<script src="js/functions/shop.js"></script>
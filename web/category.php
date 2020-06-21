<?php 
	include 'inc/layout/header.php';
	include 'inc/functions/utils.php';
	
	$products = GetProducts();
	
	if(isset($_GET['filter'])){
		$filter_text = $_GET['filter'];
		$temp_products = array_filter($products, function ($item) use ($filter_text) {
			if (stripos($item['brand'], $filter_text) !== false || stripos($item['nombre'], $filter_text) !== false) {
				return true;
			}
		});

		$products = $temp_products;
	}
?>

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
	<?php include('inc/layout/promotions.php') ?>
</section>
<!-- End related-product Area -->

<?php include 'inc/layout/footer.php' ?>
<script src="js/functions/shop.js"></script>
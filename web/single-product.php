<?php include 'inc/layout/header.php'; ?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Detalle del Producto</h1>
				<nav class="d-flex align-items-center">
					<a href="index.php">inicio<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.php">Tienda<span class="lnr lnr-arrow-right"></span></a>
					<a href="single-product.php" style="pointer-events: none;">Detalle del Producto</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<?php
	$id = $_GET['product_id'];
	$products = json_decode(file_get_contents("C:\\xampp\\htdocs\\PW2-DaVinci\\web\\inc\\files\\" . "products.json"), true);
	$all_comments = json_decode(file_get_contents("C:\\xampp\\htdocs\\PW2-DaVinci\\web\\inc\\files\\" . "comments.json"), true);

	$product_comments = array_filter($all_comments, function ($item) use ($id) {
		if (stripos($item['id_producto'], $id) !== false) {
			return true;
		}
	});

	$product_comments =  array_slice($product_comments, 0, 10);

	$selproduct = array_filter($products, function ($item) use ($id) {
		if (stripos($item['id'], $id) !== false) {
			return true;
		}
	});

	$selected_product = [];
	foreach($selproduct as $record){
		$selected_product[] = $record;
	}
?>

<!--================Single Product Area =================-->
<div class="product_image_area">
	<div class="container">
		<div class="row s_product_inner">
			<div class="col-lg-6">
				<div class="s_Product_carousel">
					<div class="single-prd-item">
						<img class="img-fluid" src="<?php echo("img//category//" . $selected_product[0]['images']['detail1']); ?>" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="<?php echo("img//category//" . $selected_product[0]['images']['detail2']); ?>" alt="">
					</div>
					<div class="single-prd-item">
						<img class="img-fluid" src="<?php echo("img//category//" . $selected_product[0]['images']['detail3']); ?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-5 offset-lg-1">
				<div class="s_product_text">
					<h3><?php echo ($selected_product[0]['nombre']) ?></h3>
					<h2><?php echo ($selected_product[0]['precio']) ?></h2>
					<ul class="list">
						<li><span>Categoría</span>: <?php echo ($selected_product[0]['category']) ?></li>
						<li><span>Disponibilidad</span>: <?php echo ($selected_product[0]['disponibilidad']) ?> </li>
					</ul>
					<p><?php echo ($selected_product[0]['detailDescription']) ?></p>
					<div class="product_count">
						<label for="qty">Cantidad:</label>
						<input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty" disabled>
						<button id="subirCantidad" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
						<button id="bajarCantidad" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
					</div>
					<div class="card_area d-flex align-items-center">
						<a class="primary-btn" href="#">Comprar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================End Single Product Area =================-->

<!--================Product Description Area =================-->
<section class="product_description_area">
	<div class="container">
		<ul class="nav nav-tabs" id="myTab" role="tablist">
			<li class="nav-item">
				<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descripción</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Especificaciones</a>
			</li>
			<li class="nav-item">
				<a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comentarios</a>
			</li>
		</ul>
		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
				<p><?php echo($selected_product[0]["description"]) ?></p>
			</div>
			<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
				<div class="table-responsive">
					<table class="table">
						<tbody>
							<?php 

							foreach ($selected_product[0]["specs"] as $key => $value) {

								if ($key != "id") {
									echo "<tr><td><h5>" . $key . "</h5></td>";
									echo "<td><h5>" . $value . "</h5></td></tr>";
								}
							} ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">
				<div class="row">
					<div class="col-lg-6">
						<?php 
							foreach ($product_comments as $clave => $valor) { ?>
								<div class="comment_list">
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="https://loremflickr.com/70/71/brazil,rio" alt="" width="70" height="71">
											</div>
											<div class="media-body">
												<h4><?php echo($valor['nombre']) ?></h4>
												<h5><?php echo($valor['fecha']) ?></h5>
											</div>
										</div>
										<p><?php echo($valor['comentario']) ?></p>
									</div>
								</div>
						<?php } 
						if(sizeof($product_comments) == 0) {
							echo("<h4>Este producto no tiene comentarios</h4>");
						} ?>
					</div>
					<div class="col-lg-6">
						<div class="review_box">
							<h4>Agrega un comentario</h4>
							<form class="row contact_form" method="post" id="commentForm">
								
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name_comment" name="name" placeholder="Nombres">
									</div>
								</div>
								<div class="form-group">
									<input type="hidden" class="form-control" id="id_producto" name="id_producto" value="<?php echo($id); ?>">
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea class="form-control" name="message" id="message_comment" rows="1" placeholder="Mensaje"></textarea>
										<div style="float: right">
											<input disabled maxlength="3" size="3" value="350" id="counter" style="margin-top: 5px; text-align:center;">
											<p>Carácteres disponibles</p>
										</div>
									</div>
								</div>
								<div class="col-md-12 text-right">
									<button id="enviar_comentario" type="submit" value="submit" class="btn primary-btn">Submit Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Product Description Area =================-->

<!-- Start related-product Area -->
<section class="related-product-area section_gap_bottom">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 text-center">
				<div class="section-title">
					<h1>Deals of the Week</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua.</p>
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
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r2.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r3.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r5.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r6.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r7.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r9.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r10.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="single-related-product d-flex">
							<a href="#"><img src="img/r11.jpg" alt=""></a>
							<div class="desc">
								<a href="#" class="title">Black lace Heels</a>
								<div class="price">
									<h6>$189.00</h6>
									<h6 class="l-through">$210.00</h6>
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
<script src="js/functions/comments.js"></script>

<script>
	$("#subirCantidad").click(function() {
		var result = document.getElementById('sst');
		var sst = result.value;
		if (!isNaN(sst)) result.value++;

		return false;
	});

	$("#bajarCantidad").click(function() {
		var result = document.getElementById('sst');
		var sst = result.value;

		if (!isNaN(sst) && sst !== "0" && sst !== "1") {
			result.value--;
		}
		return false;
	});
</script>
<?php include 'inc/layout/header.php'; ?>

<!-- ==============   IMPORTANTE   ==============
	Los slider que tienen next y prev se define en el main.js
	linea 70 y 95. Cambiar imagen para que tenga solo la flecha
 =============================================================== -->

 <?php include_once 'inc/functions/utils.php'; ?>

<!-- Baner destacados-->
<section class="banner-area">
	<?php include 'inc/layout/products/outstanding/outstanding_banner.php'; ?>
</section>
<!-- Fin baner destacados -->

<!-- Inicio area de caracteristicas -->
<section class="features-area section_gap">
	<div class="container">
		<div class="row features-inner">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon1.png" alt="">
					</div>
					<h6>Envío gratis</h6>
					<p>Para todos los productos</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon2.png" alt="">
					</div>
					<h6>Políticas de devolución</h6>
					<p>Ver sección de ayuda</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon3.png" alt="">
					</div>
					<h6>Soporte 24/7</h6>
					<p>Las 24 hs del día!</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-features">
					<div class="f-icon">
						<img src="img/features/f-icon4.png" alt="">
					</div>
					<h6>Pagos seguros</h6>
					<p>Seguridad garantizada</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fin area de caracteristicas -->

<!-- Productos Destacados -->


<section class="features-area section_gap">
			<div class="container">
			
			
				
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
						<h1>Productos Destacados</h1>
						</div>
					</div>
				</div>	

				<section class="lattest-product-area pb-40 category-list">
					<div class="row"> 

						<?php
							include_once('destacados.php');
								?>
								<div class="single-new-arrival single-new-arrival-bh">
									<!--<div class="single-new-arrival-bg"> este pone fondo blanco-->
									<div class="row-fluid">
									<ul class="thumbnail">
											<?php
												$fp = fopen('inc/files/products.json','r');
												$pArray = json_decode(fread($fp,filesize('inc/files/products.json')),true);
												fclose($fp);
												foreach($pArray as $prod){ 
													$flagPrint = true;
													if(!empty($_GET['mejores'])  AND $flagPrint ){
														if($_GET['mejores'] == $prod['mejores']){
															$flagPrint = true;
														}else{
															$flagPrint = false;
														}
													}
											
													if($flagPrint){
											?>
									

													
									<a href="single-product.php?product_id=<?php echo $prod['id']?>"><img src="img/product/<?php echo $prod['imagenDes']?>" alt="new-arrivals images"></a>	
											
		

									

								<!--de aca saque el array de productos -->
								<!--el php de abajo es para cerrar el foreach de arriba -->
											<?php }
										}?>
											</ul>
									<!--</div>-->
						
								</div>	
						
							</div>



					</div>
				</section>
			</div>

		</section>


<!-- inicio area de categorias -->
<section class="category-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-12">
				<div class="row">
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c1.jpg" alt="">
							<a href="img/category/c1.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Zapatos deportivos</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c2.jpg" alt="">
							<a href="img/category/c2.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Zapatos deportivos</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c3.jpg" alt="">
							<a href="img/category/c3.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Productos para parejas</h6>
								</div>
							</a>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="single-deal">
							<div class="overlay"></div>
							<img class="img-fluid w-100" src="img/category/c4.jpg" alt="">
							<a href="img/category/c4.jpg" class="img-pop-up" target="_blank">
								<div class="deal-details">
									<h6 class="deal-title">Zapatos deportivos</h6>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-deal">
					<div class="overlay"></div>
					<img class="img-fluid w-100" src="img/category/c5.jpg" alt="">
					<a href="img/category/c5.jpg" class="img-pop-up" target="_blank">
						<div class="deal-details">
							<h6 class="deal-title">Zapatos deportivos</h6>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fin area de categorias -->

<!-- incio deals -->
<section class="exclusive-deal-area">
	<div class="container-fluid">
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-6 no-padding exclusive-left">
				<div class="row clock_sec clockdiv" id="clock">
					<div class="col-lg-12">
						<h1>Oferta especial exclusiva termina pronto!</h1>
						<p>Quienes están extremadamente enamorados del sistema ecológico.</p>
					</div>
					<div class="col-lg-12">
						<div class="row clock-wrap">
							<div class="col clockinner1 clockinner">
								<h1 class="days">150</h1>
								<span class="smalltext">Días</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="hours">23</h1>
								<span class="smalltext">Horas</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="minutes">47</h1>
								<span class="smalltext">Mins</span>
							</div>
							<div class="col clockinner clockinner1">
								<h1 class="seconds">59</h1>
								<span class="smalltext">Segs</span>
							</div>
						</div>
					</div>
				</div>
				<a href="" class="primary-btn">Comprar ahora</a>
			</div>
			<div class="col-lg-6 no-padding exclusive-right">
				<div class="active-exclusive-product-slider">
					<!-- single exclusive carousel -->
					<div class="single-exclusive-slider">
						<img class="img-fluid" src="img/product/e-p1.png" alt="">
						<div class="product-details">
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<h4>addidas New Hammer sole
								for Sports person</h4>
							<div class="add-bag d-flex align-items-center justify-content-center">
								<a class="add-btn" href=""><span class="ti-bag"></span></a>
								<span class="add-text text-uppercase">Añadir al carro</span>
							</div>
						</div>
					</div>
					<!-- single exclusive carousel -->
					<div class="single-exclusive-slider">
						<img class="img-fluid" src="img/product/e-p1.png" alt="">
						<div class="product-details">
							<div class="price">
								<h6>$150.00</h6>
								<h6 class="l-through">$210.00</h6>
							</div>
							<h4>addidas New Hammer sole
								for Sports person</h4>
							<div class="add-bag d-flex align-items-center justify-content-center">
								<a class="add-btn" href=""><span class="ti-bag"></span></a>
								<span class="add-text text-uppercase">Add to Bag</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- fin deals -->

<!-- Inicio Marcas -->
<section class="brand-area section_gap">
	<?php include 'inc/layout/brands/brands.php' ?>
</section>
<!-- Fin marcas -->

<?php include 'inc/layout/footer.php' ?>

<script>
	$(document).ready(function() {
		$('.nav li.active').removeClass('active');
		$('.home').addClass('active');
	});

	$(".banner-content .add-bag").on("click", "a", function() {
	   location.href = "single-product.php?product_id=" + this.id;
	});
</script>

<script src="js/functions/search.js"></script>
<?php include 'inc/layout/header.php' ?>

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Contáctanos</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Inicio<span class="lnr lnr-arrow-right"></span></a>
						<a href="#">Contacto</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
			<div id="mapBox" class="mapBox" data-lat="40.701083" data-lon="-74.1522848" data-zoom="13" data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
			 data-mlat="40.701083" data-mlon="-74.1522848">
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>Buenos Aires, Argentina</h6>
							<p>Capital Federal</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">+54 9 11 6865 5462</a></h6>
							<p>Lu a Vi 9am a 6 pm</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">support@karmashop.com</a></h6>
							<p>¡Envíenos su consulta en cualquier momento!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su Nombre y Apellido" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su Nombre y Apellido'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su Email'">
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su Teléfono" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese su Teléfono'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Ingrese Área a Consultar" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingrese Área a Consultar'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Deje su Mensaje" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Deje su Mensaje'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Enviar Mensaje</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

<?php include 'inc/layout/footer.php' ?>

<script>
	$(document).ready(function () {
		$('.nav li.active').removeClass('active');
        $('.contact').addClass('active');
    });
</script>

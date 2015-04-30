<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-us">
	<head>

		<?php include "head.php"; ?>
	
	</head>
	<body>

	<!-- Global Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<?include "navsuperior.php"; ?>
		<!-- END Header -->

	<!-- Page Header -->
	<header class="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-title pull-left">Contacto</h1>
					<ol class="breadcrumb pull-right">
						<li><a href="./">Inicio</a></li>
						<li class="active">Contacto</li>
					</ol>
				</div>
			</div>
		</div>
	</header> <!-- END Page Header -->

	<section class="section large-padding page-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-4 sm-box2">
					<h3 class="box-title mt0">INUEDE</h3>
					<p class="mb40">Instituto Europeo de Dirección Empresarial - Accredited Member European Council for Business Education (ECBE). En Brison 1832 Chamby Switzerland. ECBE is an affiliate of de European Association of Quality Assurance in Higher Education (ENQA). European Association of Quality Assurance in Higher Education (ENQA) SECRETARIAT - Avenue de Teruuren 38-boître 4 - 1040 Brussels, Belgium. "EXCELLENCE IN BUSINESS EDUCATION" </p>
				</div>
				<div class="col-md-8">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3170.776126843595!2d-5.9838216000000175!3d37.3714738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd126c27f3c849ff%3A0x1216349388be6982!2sCalle+Valpara%C3%ADso%2C+5%2C+41013+Sevilla!5e0!3m2!1ses!2ses!4v1425920196911"></iframe>
				</div>
			</div>
		</div>
	</section>


	<section class="contact-section section-3 m0 large-padding custom-bg parallax" data-bg="images/demo/s-201.jpg">
		<div class="bg-layer"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-5 sm-box">
					<h2 class="section-title st2 text-left mt10 mb25">Contacta con nosotros</h2>
					<p class="contact-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt nemo enim pariatur nesciunt id voluptatibus non!</p>
					<address class="mb50">
						<p><i class="fa fa-map-marker box-icon color-white"></i>  C/ Valparaiso Nº 5</p>
						<p><i class="fa fa-phone box-icon color-white"></i>  902 889 655</p>
						<p><i class="fa fa-fax box-icon color-white"></i>  902 889 443</p>
						<p><i class="fa fa-envelope box-icon color-white"></i>  info@inuede.com</p>
					</address>

				</div>
				<div class="col-sm-12 col-md-6 col-md-offset-1">
					<!-- Working contact form -->
					<form class="working-contact-form form" method="post" action="mail.php">
						<!-- Success and error Alerts -->
						<div class="alert alert-success hidden br0" id="contact-success">
							<span class="glyphicon glyphicon-ok "></span> &nbsp;
							<strong>¡Enviado!</strong> Muchas gracias por tu interés.
						</div>
						<div class="alert alert-danger hidden br0" id="contact-error">
							<span class="glyphicon glyphicon-remove "></span> &nbsp;
							<strong>¡Error!</strong> Vaya, parece que algo falló.
						</div>
						<!-- Form Fields -->
						<div>
							<div class="form-group">
								<div class="form-icon icon-user">
			 						<input name="name" id="name" type="text" required class="form-control" placeholder="Nombre">
			 					</div>
							</div>
							<div class="form-group">
								<div class="form-icon icon-email">
			 						<input name="email" id="email" type="email" required class="form-control" placeholder="Correo">
			 					</div>
							</div>
							<div class="form-group">
								<div class="form-icon icon-message">
			 						<textarea name="message" id="message" cols="30" rows="8" required class="form-control" placeholder="Mensaje"></textarea>
			 					</div>
							</div>
					 		<input type="submit" value="Enviar">
				 		</div> <!-- END Form Fields -->
					</form>
				</div>
			</div>
		</div> <!-- END Container -->
	</section> 

		<!-- Footer Wrapper -->
		<?php include "footer.php"; ?>
		<!-- END Footer -->


		
	</div> <!-- END Global Wrapper -->




		<!-- Javascript files -->
		<?php include "jsfooter.php"; ?>


		


	</body>
</html>
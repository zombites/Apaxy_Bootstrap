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
					<h1 id="cat-contenido" class="page-title pull-left">Contenido</h1>
					<ol class="breadcrumb pull-right">
						<li><a href="./">Inicio</a></li>
						<li class="active">Contenido</li>
					</ol>
				</div>
			</div>
		</div>
	</header> <!-- END Page Header -->

		<section class="section-4">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-9 space-right">
						<div class="row">
							<div class="col-sm-12">
								<section class="section-7">
									<?php 

									switch ($_GET['link']) {

										// Tratamiento para la gestión de contenidos
										case 'todo':
											include "contents/all-contents.php";
											break;

										case 'listado':
											if( isset( $_SESSION[ 'USUARIO' ] ) )
												include "contents/contents.php";
											else
												echo "<script>window.location.replace('contenido/acceso-denegado')</script>";
											break;

										case 'nuevo':
											if( isset( $_SESSION[ 'USUARIO' ] ) )
												include "contents/addcontent.php";
											else 
												echo "<script>window.location.replace('contenido/acceso-denegado')</script>";
											break;

										// Tratamiento para la gestión de contenidos dinámicos, contenidos estáticos en page.php
										case ExisteContenido( $_GET['link'] ) !== FALSE :
											include "contents/showcontent.php";
											break;

										default:
											// TODO: Redirección más adecuada
											echo "<script>window.location.replace('contenido')</script>";
											break;
									}

									?>
								</section>
							</div>
						</div>
					</div>
					<div class="col-sm-5 col-md-3">
						<aside class="sidebar">
							<?php include "navlateral.php"; ?>
						</aside>
					</div>
				</div>
			</div>
		</section>

		<!-- Footer Wrapper -->
		<?php include "footer.php"; ?>
		<!-- END Footer -->


		
	</div> <!-- END Global Wrapper -->




		<!-- Javascript files -->
		<?php include "jsfooter.php"; ?>


		


	</body>
</html>
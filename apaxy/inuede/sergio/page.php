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

<?php
	$url = explode ( "/", $_SERVER[ 'REQUEST_URI' ] );
	$sitio = $url[ count($url)-2 ]; // Se extrae el nombre del apartado de la URL

	if( substr( $sitio , -4) == "cion" ) $page = str_replace( "on", "ón", $sitio);
	elseif ( $_GET[ 'link' ] == "empleo") $page = "Empleo";
	else $page = $sitio;
?>

	<!-- Page Header -->
	<header class="titlebar">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-title pull-left"><?php echo $page; ?></h1>
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

									$enlaces = ObtenerEnlaces();
									
									switch ($_GET['link']) {

										// Tratamiento para la gestión de usuarios
										case 'login':
											include "users/login.php";
											break;

										case 'logout':
											Logout();
											echo "<script>window.location.replace('index')</script>";
											break;

										case 'lista-usuarios':
											if( isset( $_SESSION[ 'USUARIO' ] ) )
												include "users/users.php";
											else
												echo "<script>window.location.replace('page/acceso-denegado')</script>";
											break;

										case 'nuevo-usuario':
											if( isset( $_SESSION[ 'USUARIO' ] ) && $_SESSION[ 'USUARIO' ][ 'rol' ] == 1 )
												include "users/adduser.php";
											else 
												echo "<script>window.location.replace('page/acceso-denegado')</script>";
											break;

										case strncmp($_GET['link'], 'editar-usuario', 14) == 0:
											if( isset( $_SESSION[ 'USUARIO' ] ) && $_SESSION[ 'USUARIO' ][ 'rol' ] == 1 )
												include "users/edituser.php";
											else 
												echo "<script>window.location.replace('page/acceso-denegado')</script>";
											break;

										// Tratamiento para la gestión de contenidos estáticos, contenidos dinámicos en content.php
										case in_array( $_GET[ 'link' ], $enlaces ):
											include "contenido.php";
											break;

										default:
											// TODO: Redirección más adecuada
											echo "<script>window.location.replace('page')</script>";
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
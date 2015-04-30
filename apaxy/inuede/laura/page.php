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

		<!-- Secciones comunes -->
		<?php include "seccionesbase.php"; ?>
		<!-- END Secciones comunes -->

		<section class="section-4">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-9 space-right">
						<div class="row">
							<div class="col-sm-12">
								<section class="section-7">
									<?php 
									
									switch ($_GET['link']) {
										case 'login':
											include "login.php";
											break;

										case 'logout':
											Logout();
											echo "<script>window.location.replace('page')</script>";
											break;

										case 'lista-usuarios':
											include "users.php";
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
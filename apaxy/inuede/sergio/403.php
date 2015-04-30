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
	<header class="titlebar titlebar3 custom-bg parallax" data-bg="images/demo/s-202.jpg">
		<div class="bg-layer op6"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="page-title pull-left">Acceso denegado</h1>
					<ol class="breadcrumb pull-right">
						<li><a href="./">Home</a></li>
						<li class="active">Error</li>
					</ol>
				</div>
			</div>
		</div>
	</header> <!-- END Page Header -->

	<section class="page-404 page-403">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-md-offset-1">
					<div class="content-404">
						<div class="relative">
							<div class="text-404"><i class="fa fa-lock"></i></div>
							<h2 class="section-title over-404">Access Denied</h2>
						</div>
						<p class="mt20">Sorry, but you do not have permissions to visit this page! If you think there is an error with this page please <a href="page_contact.html">contact us.</a></p>
						<div class="mt40">
							<a href="./" class="btn voyo-btn-2 rounded"><i class="fa fa-long-arrow-left"></i> Go back to Home</a>
						</div>
					</div>
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
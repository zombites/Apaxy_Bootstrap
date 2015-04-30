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
					<h1 class="page-title pull-left">Contacto</h1>
					<ol class="breadcrumb pull-right">
						<li><a href="#">Home</a></li>
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
					<h3 class="box-title mt0">About us</h3>
					<p class="mb40">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quae, nam nobis animi blanditiis soluta iure mollitia dolorum officiis quas non quasi unde cupiditate eos numquam repudiandae excepturi, optio consequatur dolorum ispusm consectetur.</p>
					<h3 class="box-title mt0">Headquarters</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit quae, nam nobis animi blanditiis soluta.</p>
					<p>
						<a href="#" class="btn btn-bg bg-dark wide">London</a>
						<a href="#" class="btn btn-bg bg-dark boxed">Dublin</a>
						<a href="#" class="btn btn-bg bg-dark boxed">Los Angeles</a>
					</p>
				</div>
				<div class="col-md-8">
					<iframe src="https://maps.google.com/?ie=UTF8&amp;ll=34.053477,-118.241086&amp;spn=0.031112,0.038581&amp;t=m&amp;z=15&amp;output=embed"></iframe>
				</div>
			</div>
		</div>
	</section>


	<section class="contact-section section-3 m0 large-padding custom-bg parallax" data-bg="images/demo/s-201.jpg">
		<div class="bg-layer"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-5 sm-box">
					<h2 class="section-title st2 text-left mt10 mb25">Get in touch with us</h2>
					<p class="contact-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum sunt nemo enim pariatur nesciunt id voluptatibus non!</p>
					<address class="mb50">
						<p><i class="fa fa-map-marker"></i>  1800 Los Angeles, USA</p>
						<p><i class="fa fa-phone"></i>  0 800-55-22-55</p>
						<p><i class="fa fa-envelope"></i> support@abusinesstheme.com</p>
					</address>
					<ul class="nav nav-tabs">
					  	<li class="active"><a href="#tab-contact" data-toggle="tab">Contact us</a></li>
					 	<li><a href="#tab-subscribe" data-toggle="tab">Subscribe</a></li>
					</ul>
				</div>
				<div class="col-sm-12 col-md-6 col-md-offset-1">
					<div class="tab-content">
						<div class="tab-pane fade in active" id="tab-contact">
							<!-- Working contact form -->
							<form class="working-contact-form form" method="post" action="php/contact.php">
								<!-- Success and error Alerts -->
								<div class="alert alert-success hidden br0" id="contact-success">
									<span class="glyphicon glyphicon-ok "></span> &nbsp;
									<strong>Success!</strong> Thank you for your message.
								</div>
								<div class="alert alert-danger hidden br0" id="contact-error">
									<span class="glyphicon glyphicon-remove "></span> &nbsp;
									<strong>Error!</strong> Oops, something went wrong.
								</div>
								<!-- Form Fields -->
								<div>
									<div class="form-group">
										<div class="form-icon icon-user">
					 						<input name="name" id="name" type="text" required class="form-control" placeholder="Name">
					 					</div>
									</div>
									<div class="form-group">
										<div class="form-icon icon-email">
					 						<input name="email" id="email" type="email" required class="form-control" placeholder="Email">
					 					</div>
									</div>
									<div class="form-group">
										<div class="form-icon icon-message">
					 						<textarea name="message" id="message" cols="30" rows="8" required class="form-control" placeholder="Message"></textarea>
					 					</div>
									</div>
							 		<input type="submit" value="Submit">
						 		</div> <!-- END Form Fields -->
							</form>
					  	</div>
					  	<div class="tab-pane fade" id="tab-subscribe">
					  		<!-- Subscribe form -->
					  		<form action="#" class="form form-subscribe">
					  			<div class="row">
					  				<div class="col-sm-9">
					  					<div class="form-group">
						 					<input name="email-subscribe" id="email-subscribe" type="email" required class="form-control" placeholder="Email">
										</div>
					  				</div>
					  				<div class="col-sm-3">
					  					<input type="submit" value="Subscribe">
					  				</div>
					  			</div>
					  		</form>
					  		<h3 class="box-title mt40">Why subscribe? And don't worry. No spam!</h3>
					  		<p class="contact-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium temporibus laborum nostrum, optio in nisi eius suscipit ad cum, corrupti illo beatae nemo doloremque consequuntur fugit quia dicta, quas! Ipsa!</p>
					 	</div>
					</div>
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
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es-es">
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
					<h1 class="page-title pull-left">Automatrícula</h1>
					<ol class="breadcrumb pull-right">
						<li><a href="./">Inicio</a></li>
						<li class="active">Automatrícula</li>
					</ol>
				</div>
			</div>
		</div>
	</header> <!-- END Page Header -->

	<section class="section large-padding page-contact">
		<div class="container">
			<div class="row">

<!-- Inicio Wizard -->
			    <div id="rootwizard">
				    <div class="navbar">
				    	<div class="navbar-inner">
				    		<div class="container">
				    			<ul>
				    				<li><a href="#tab1" data-toggle="tab">Datos de acceso</a></li>
								    <li><a href="#tab2" data-toggle="tab">Datos personales</a></li>
								    <li><a href="#tab3" data-toggle="tab">Datos de contacto</a></li>
								    <li><a href="#tab4" data-toggle="tab">Selección de curso</a></li>
								    <li><a href="#tab5" data-toggle="tab">Confirmación</a></li>
							    </ul>
						    </div>
				    	</div>
				    </div>
				    <div class="progress">
						<div id="progressBar" class="progress-bar progress-bar-success progress-bar-striped"  >
							<div class="bar">
								<span></span>
							</div>
						</div>
					</div>
				    <form action="./" method="post" name="form-matricula" id="form-matricula" onsubmit="alert('Datos enviados');">
					    <div class="tab-content">
					    	<div class="tab-pane" id="tab1">
					    		<div class="form-group">
  									<label for="email">Correo electrónico</label>
    								<input type="email" class="form-control" id="email" placeholder="Introduce email">
  								</div>
					    		<div class="form-group">
  									<label for="clave">Contraseña</label>
    								<input type="password" class="form-control" id="clave" placeholder="Introduce contraseña">
  								</div>
					    	</div>
						    <div class="tab-pane" id="tab2">
					    		<div class="form-group">
  									<label for="nombre">Nombre</label>
    								<input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre">
  								</div>
					    		<div class="form-group">
  									<label for="apellidos">Apellidos</label>
    								<input type="text" class="form-control" id="apellidos" placeholder="Introduce tus apellidos">
  								</div>
						    </div>
						    <div class="tab-pane" id="tab3">
					    		<div class="form-group">
  									<label for="direccion">Dirección</label>
    								<input type="text" class="form-control" id="direccion" placeholder="Introduce tu dirección">
  								</div>
					    		<div class="form-group">
  									<label for="poblacion">Población</label>
    								<input type="text" class="form-control" id="poblacion" placeholder="Introduce tu población">
  								</div>
					    		<div class="form-group">
  									<label for="provincia">Provincia</label>
    								<input type="text" class="form-control" id="provincia" placeholder="Introduce tu provincia">
  								</div>
					    		<div class="form-group">
  									<label for="telefono">Teléfono</label>
    								<input type="tel" class="form-control" id="telefono" placeholder="Introduce tu teléfono principal">
  								</div>
						    </div>
						    <div class="tab-pane" id="tab4">
								<select class="form-control">
									<option>Selecciona el curso de tu interés</option>
									<option>Curso 1</option>
									<option>Curso 2</option>
									<option>Curso 3</option>
									<option>Curso 4</option>
									<option>Curso 5</option>
								</select>
						    </div>
					    	<div class="tab-pane" id="tab5">
					    		Confirmación
					    	</div>
						    <hr />
							<ul class="pager wizard pull-right">
							<!-- These show as disabled on first tab. Add style="display:none;" to make the First button disappear when first tab.   -->
								<li class="previous">
									<input type='button' class='btn voyo-btn-3 rounded button-previous' name='previous' id="previous" value='Anterior' />
								</li>
								<li class="next">
									<input type='button' class='btn voyo-btn-3 rounded button-next' name='next' id="next" value='Siguiente' />
								</li>
								<li class="submit">
									<input type='submit' class='btn voyo-btn-3 bg-green rounded finish' style="display: none;" name='submit' id="submit" value='Confirmar' />
								</li>
							</ul>	
					    </div>	
					</form>
			    </div>
<!-- Fin Wizard -->

			</div>
		</div>
	</section>

		<!-- Footer Wrapper -->
		<?php include "footer.php"; ?>
		<!-- END Footer -->


		
	</div> <!-- END Global Wrapper -->




		<!-- Javascript files -->
		<?php include "jsfooter.php"; ?>

		<script>
			$(document).ready(function() {

				var $validator = $("#form-matricula").validate();

				var tabvalid = 0;

				$('#rootwizard').bootstrapWizard({
					'nextSelector': '.button-next', 'previousSelector': '.button-previous',

					'onNext': function(tab, navigation, index) {
						var $valid = $("#form-matricula").valid();

						if( !$valid ) {
							$validator.focusInvalid();
							return false;
						} else tabvalid++;

					},

					'onTabShow': function(tab, navigation, index) {
						var tabCount = navigation.find('li').length;
						var current = index+1;
						var percentDone = (current/tabCount) * 100;
						$('#rootwizard').find('#progressBar').css({width:percentDone+'%'});

						if( current == tabCount ) {
							$('#rootwizard').find('.pager .button-next').hide();
							$('#rootwizard').find('.pager .finish').show();

							if(tabvalid != 4) $('#rootwizard').find('.pager .finish').addClass('disabled');
							else $('#rootwizard').find('.pager .finish').removeClass('disabled');
						} else {
							$('#rootwizard').find('.pager .button-next').show();
							$('#rootwizard').find('.pager .finish').hide();							
						}

					},

					'onTabClick': function(tab, navigation, index) {
						return false;
					}

				});
			});

		</script>

	</body>
</html>
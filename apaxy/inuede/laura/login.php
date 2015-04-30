
	<section class="page-login section-4">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
				<div class="well well-6 login-area mb0">
					<h2 class="section-title-2 st-2 mb20">Login</h2>
					<p>Don't you have an account? <a href="page_register.html"> &nbsp; Register</a></p>
					<form class="form form-2" action="page/login" method="post">
	  					<label>
		 					User Name 
		 					<input type="text" name="user" required class="form-control">
		 				</label>
		 				<label>
		 					Password 
		 					<input type="password" name="pass" required class="form-control">
		 				</label>
		 				<a href="page_password.html" class="forgot"><small>¿Has olvidado tu clave?</small></a>
				 		<div>
				 			<button type="submit" class="btn voyo-btn-2 rounded"> Login </button>
				 		</div>
	  				</form>
				</div>
<?php
	if($_POST){
		$conexion = Conectar();
		$isUser = DoLogin( $conexion, $_POST[ 'user' ], $_POST[ 'pass' ]);

		if( !$isUser ){
?>

				<div class="alert alert-2 bg-red alert-dismissable fade in br4 mt20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<i class="fa fa-cubes fa-2x"></i>
						<p>Datos de acceso incorrectos.</p>
				</div>

<?php
		} else {
			$_SESSION['USUARIO'] = array('name' => $_POST[ 'user' ], 'rol' => $isUser);
			// TODO: Redirigir a página de usuarios
?>
				<div class="alert alert-2 bg-blue alert-dismissable fade in br4 mt20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="fa fa-database fa-2x"></i>
					<p> Acceso correcto.</p>
				</div>
				<script>
					setTimeout('window.location = "index"', 3000)
				</script>
<?php
		}


		DesConectar($conexion);
	}
?>
			</div>
		</div>
	</section>


								<h2 class="section-title-2">Nuevo usuario</h2>
								<form action="" role="form" method="post">
									<div class="form-group">
										<label for="b">Usuario <span class="form-required">*</span></label>
										<input type="text" name="user" class="form-control" id="b" placeholder=" Nombre de usuario" required />
									</div>
									<div class="form-group">
										<label for="2">Contraseña <span class="form-required">*</span></label>
										<input type="password" name="pass" class="form-control" id="2" placeholder=" Contraseña" required />
									</div>
									<div class="form-group">
										<label for="p">Rol</label>
										<select name="rol" id="p" class="form-control">
											<option value="5">Editor</option>
											<option value="1">Administrador</option>
										</select>
									</div>
									<div class="mb20"></div>
									<button type="submit" class="btn voyo-btn-2 rounded">Guardar</button>
									<a href="page/lista-usuarios" class="btn voyo-btn-2 rounded" role="button">Cancelar</a>
								</form>
<?php
	if($_POST){
		$conexion = Conectar();

		$values = "null, '" . $_POST['user'] . "', '" . $_POST['pass'] . "', " . $_POST['rol'] . ", FALSE";

		$dato = InsertSimple( $conexion, "inuede_users", $values );

		if( $dato === TRUE ){
?>
				<div class="alert alert-2 bg-blue alert-dismissable fade in br4 mt20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="fa fa-database fa-2x"></i>
					<p> Usuario registrado correctamente. </p>
				</div>
				<script>
						setTimeout('window.location = "page/lista-usuarios"', 3000)
				</script>
<?php
		} else {
?>
				<div class="alert alert-2 bg-red alert-dismissable fade in br4 mt20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<i class="fa fa-cubes fa-2x"></i>
						<p><?php echo $dato ?></p>
				</div>
<?php
		}

		DesConectar($conexion);
	}
?>
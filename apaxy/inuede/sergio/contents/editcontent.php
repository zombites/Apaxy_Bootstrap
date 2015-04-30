<?php
	$url = explode ( "/", $_SERVER[ 'REQUEST_URI' ] );
	$idcontenido = substr( $url[ count($url)-1 ], 17 ); // Se extrae el id de la URL

	$conexion = Conectar();
	$fila = SelectSimple( $conexion, "*", "inuede_content", "id = " . $idcontenido );

?>
								<h2 class="section-title-2">Edición de contenido</h2>
								<form action="" role="form" method="post">
									<div class="form-group">
										<label for="b">Contenido</label>
										<input type="text" name="user" class="form-control" id="b" value=" <?php echo $fila[ 0 ][ 'user' ] ?>" disabled />
									</div>
									<div class="form-group">
										<label for="p">Rol</label>
										<select name="rol" id="p" class="form-control">
											<option value="5" <?php echo ( $fila[ 0 ][ 'rol' ] == 5 ) ? "selected" : "" ?>>Editor</option>
											<option value="1" <?php echo ( $fila[ 0 ][ 'rol' ] == 1 ) ? "selected" : "" ?>>Administrador</option>
										</select>
									</div>
									<div class="mb20"></div>
									<button type="submit" class="btn btn-bg bg-blue rounded" <?php if( $fila === FALSE ) { echo "disabled"; } ?>>Guardar</button>
									<a href="page/lista-usuarios" class="btn btn-bg bg-blue rounded" role="button">Cancelar</a>
									<button type="button" onclick="document.getElementById('form-delete').submit()" class="btn btn-bg bg-red rounded pull-right" <?php if( $fila === FALSE ) { echo "disabled"; } ?>>Eliminar</button>
								</form>
								<form action="" role="form" method="post" id="form-delete">
									<input type="hidden" name="delete" value="TRUE" />
								</form>
<?php if( $fila === FALSE ) { ?>
								<div class="alert alert-2 bg-red alert-dismissable fade in br4 mt20">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<i class="fa fa-cubes fa-2x"></i>
										<p>Usuario no registrado.</p>
								</div>
<?php }

	if($_POST){
		$conexion = Conectar();

		if( isset( $_POST[ 'delete' ] ) && $_POST[ 'delete' ] == "TRUE" )
			$values = "del = 1";
		else
			$values = "rol = " . $_POST['rol'];

		$where = "id = " . $idusuario;

		$dato = UpdateSimple( $conexion, "inuede_users", $values, $where );

		if( $dato === TRUE ){
?>
				<div class="alert alert-2 bg-blue alert-dismissable fade in br4 mt20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="fa fa-database fa-2x"></i>
					<p> Usuario actualizado correctamente. </p>
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
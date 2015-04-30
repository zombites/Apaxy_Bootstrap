<?php

	$enlace = $_GET[ 'link' ];

	$conexion = Conectar();
	$fila = SelectSimple( $conexion, "*", "inuede_content", "enlace = '" . $enlace . "'" );

?>
								<h2 class="section-title-2 mb10">
									<?php 
										echo $fila[ 0 ][ 'titulo' ];
										if( $fila[ 0 ]['del' ] == 1 ){
									?>
									<small class="text-danger">[Inactivo]</small>
									<?php
										}
										if( isset( $_SESSION[ 'USUARIO'] ) ) {
									?>
									<button type="button" class="btn btn-bg bg-green rounded pull-right" data-toggle="modal" data-target="#modal-contenido">Editar contenido</button>
									<?php		
										}
									?>
								</h2>
								<div class="row">
									<div class="col-sm-12 mb20">
										<img src="./verimg.php?id=<?php echo $fila[ 0 ][ 'id' ] ?>" title="<?php echo $fila[ 0 ][ 'img_nombre' ] ?>" alt="">
									</div>
								</div>
								<?php echo $fila[ 0 ][ 'contenido' ]; ?>

								<?php if( isset( $_SESSION[ 'USUARIO'] ) ) { ?>
								<!-- Llamada a CKEditor -->
								<script src="//cdn.ckeditor.com/4.4.7/basic/ckeditor.js"></script>

								<!-- Modal para edición del contenido -->
								<div class="modal fade" id="modal-contenido" tabindex="-1" role="modal" aria-labelledby="modal-label-contenido" aria-hidden="true">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
												<h4 class="modal-title" id="modal-label-contenido">Edición del contenido</h4>
											</div>
											<div class="modal-body">
												<form action="" id="form-contenido" method="post" role="form" enctype="multipart/form-data">
													<div class="form-group">
														<label for="titulo">Título</label>
														<input type="text" name="titulo" class="form-control" id="titulo" value="<?php echo $fila[ 0 ][ 'titulo' ] ?>" />
													</div>
													<div class="form-group">
														<label for="enlace">Enlace</label>
														<input type="text" name="enlace" class="form-control" id="enlace" value="<?php echo $fila[ 0 ][ 'enlace' ] ?>" readonly />
													</div>
													<div class="form-group">
														<label for="cat">Categoría</label>
														<select name="cat" id="cat" class="form-control">
															<option value="c" <?php echo ( $fila[ 0 ][ 'tipo' ] == "c") ? "selected" : ""; ?>>Curso</option>
															<option value="n" <?php echo ( $fila[ 0 ][ 'tipo' ] == "n") ? "selected" : ""; ?>>Noticia</option>
															<option value="g" <?php echo ( $fila[ 0 ][ 'tipo' ] == "g") ? "selected" : ""; ?>>Guía</option>
															<option value="r" <?php echo ( $fila[ 0 ][ 'tipo' ] == "r") ? "selected" : ""; ?>>Recurso</option>
														</select>
													</div>
													<div class="form-group">
														<div class="row">
															<div class="col-sm-12 col-md-8">
																<label for="imagen">Imagen</label>
																<input type="file" name="imagen" id="imagen" />
																<small class="help-block">Tamaño: &lt; 1MB. Formatos: jpg o png. Ancho óptimo: 900px.</small>
															</div>
															<div class="col-sm-12 col-md-4 blockquote-1">
																<label>Imagen actual</label><br />
																<img src="./verimg.php?id=<?php echo $fila[ 0 ][ 'id' ] ?>" title="<?php echo $fila[ 0 ][ 'img_nombre' ] ?>" alt="">
															</div>
														</div>
													</div>
													<div class="form-group">
													    <textarea name="editor1" id="editor1">
											                <?php echo $fila[ 0 ][ 'contenido' ]; ?>
											            </textarea>
											            <script>
											                CKEDITOR.replace( 'editor1' );
											            </script>
											        </div>
												</form>
												<form action="" role="form" method="post" id="form-delete">
													<input type="hidden" name="delete" value="TRUE" />
												</form>
												<form action="" role="form" method="post" id="form-active">
													<input type="hidden" name="active" value="TRUE" />
												</form>
											</div>
											<div class="modal-footer">
											<?php if( $fila[ 0 ][ 'del' ] == 0) { ?>
												<button type="button" onclick="document.getElementById('form-delete').submit()" class="btn btn-bg bg-red rounded pull-left">Eliminar</button>
											<?php } elseif( $fila[ 0 ][ 'del' ] == 1 ) { ?>
												<button type="button" onclick="document.getElementById('form-active').submit()" class="btn btn-bg bg-green rounded pull-left">Activar</button>
											<?php } ?>
												<button type="button" onclick="document.getElementById('form-contenido').submit()" class="btn btn-bg bg-blue rounded">Guardar</button>
												<button type="button" class="btn btn-bg bg-blue rounded" data-dismiss="modal">Cancelar</button>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>

<?php

	if($_POST){
		// Se comprueba el fichero seleccionado
		$img = ControlImagen($_FILES);

		$conexion = Conectar();

		if( isset( $_POST[ 'delete' ] ) && $_POST[ 'delete' ] == "TRUE" )
			$values = "del = 1";

		elseif( isset( $_POST[ 'active' ] ) && $_POST[ 'active' ] == "TRUE" )
			$values = "del = 0";

		else
			$values = "titulo = '" . $_POST[ 'titulo' ] . "', enlace = '" . $_POST[ 'enlace' ] . "', contenido = '" . $_POST[ 'editor1' ] . "', tipo = '" . $_POST[ 'cat' ] . "'";

		if( $img === TRUE ){
			$tmp_name = $_FILES[ 'imagen' ][ 'tmp_name' ];
			$fp = fopen( $tmp_name, "rb" );
			$imagen = fread( $fp, filesize( $tmp_name ) );
			$imagen = addslashes( $imagen );
			fclose( $fp );
			@unlink($tmp_name);

			$values .= ", imagen = '" . $imagen . "', img_nombre = '" . $_FILES[ 'imagen' ][ 'name' ] . "'";
		}

		$values .= ", fecha = CURRENT_TIMESTAMP";


		
		$url = "contenido/" . $_POST[ 'enlace' ];

		$where = "id = '" . $fila[ 0 ][ 'id' ] . "'";

		$dato = UpdateSimple( $conexion, "inuede_content", $values, $where );



		if( $dato === TRUE ){
?>
				<div class="alert alert-2 bg-blue alert-dismissable fade in br4 mt20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="fa fa-database fa-2x"></i>
					<p> Contenido <?php echo ( isset( $_POST[ 'delete' ] ) ) ? "eliminado" : "actualizado"; ?> correctamente. </p>
				</div>
				<script>
					setTimeout('window.location = "<?php echo $url ?>"', 2000);
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
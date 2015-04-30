								<!-- Llamada a CKEditor -->
								<script src="//cdn.ckeditor.com/4.4.7/basic/ckeditor.js"></script>
								<h2 class="section-title-2">Nuevo contenido</h2>
								<form action="" role="form" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="titulo">Título <span class="form-required">*</span></label>
										<input type="text" name="titulo" class="form-control" id="titulo" placeholder=" Título del contenido" required />
									</div>
									<div class="form-group">
										<label for="enlace">Enlace</label>
										<input type="text" name="enlace" class="form-control" id="enlace" placeholder=" Enlace autogenerado" readonly />
									</div>
									<div class="form-group">
										<label for="cat">Categoría <span class="form-required">*</span></label>
										<select name="cat" id="cat" class="form-control" required>
											<option value="">Selecciona una categoría</option>
											<option value="c">Curso</option>
											<option value="n">Noticia</option>
											<option value="g">Guía</option>
											<option value="r">Recurso</option>
										</select>
									</div>
									<div class="form-group">
										<label for="imagen">Imagen</label>
										<input type="file" name="imagen" id="imagen" />
										<small class="help-block">Tamaño: &lt; 1MB. Formatos: jpg o png. Ancho óptimo: 900px.</small>
									</div>
									<div class="form-group">
										<label for="editor1">Contenido</label>
										<textarea name="editor1" id="editor1">
										</textarea>
										<script>
										    CKEDITOR.replace( 'editor1' );
										</script>
									</div>
									<div class="mb20"></div>
									<button type="submit" class="btn voyo-btn-2 rounded">Guardar</button>
									<a href="page/lista-usuarios" class="btn voyo-btn-2 rounded" role="button">Cancelar</a>
								</form>

<?php
	if($_POST){
		// Se comprueba el fichero seleccionado
		$img = ControlImagen($_FILES);

		$conexion = Conectar();

		$values = "null, '" . $_POST[ 'enlace' ] . "','" . $_POST[ 'titulo' ] . "', '" . $_POST[ 'cat' ] . "', '" . $_POST[ 'editor1' ] . "'";

		if( $img === TRUE ){
			$tmp_name = $_FILES[ 'imagen' ][ 'tmp_name' ];
			$fp = fopen( $tmp_name, "rb" );
			$imagen = fread( $fp, filesize( $tmp_name ) );
			$imagen = addslashes( $imagen );
			fclose( $fp );
			@unlink($tmp_name);

			$values .= ", '" . $imagen . "', '" . $_FILES[ 'imagen' ][ 'name' ] . "'";
		}
		else
			$values .= ", '', ''";

		$values .= ", CURRENT_TIMESTAMP, FALSE"; 

		$dato = InsertSimple( $conexion, "inuede_content", $values );

		if( $dato === TRUE ){
?>
				<div class="alert alert-2 bg-blue alert-dismissable fade in br4 mt20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="fa fa-database fa-2x"></i>
					<p> Contenido registrado correctamente. </p>
				</div>
				<script>
						setTimeout('window.location = "contenido/listado"', 3000)
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
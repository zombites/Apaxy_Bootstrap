<?php

	$enlace = $_GET[ 'link' ];

	$conexion = Conectar();
	$fila = SelectSimple( $conexion, "*", "inuede_pages", "enlace = '" . $enlace . "'" );

?>
								<h2 class="section-title-2">
									<?php 
										echo $fila[ 0 ][ 'titulo' ];
										if( isset( $_SESSION[ 'USUARIO'] ) ) {
									?>
									<button type="button" class="btn btn-bg bg-green rounded pull-right" data-toggle="modal" data-target="#modal-contenido">Editar contenido</button>
									<?php		
										}
									?>
								</h2>
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
												<form action="" id="form-contenido" method="post" role="form">
													<div class="form-group">
														<label for="b">Título</label>
														<input type="text" name="titulo" class="form-control" id="b" value="<?php echo $fila[ 0 ][ 'titulo' ] ?>" />
													</div>
													<div class="form-group">
													    <textarea name="editor1" id="editor1" rows="10" cols="80">
											                <?php echo $fila[ 0 ][ 'contenido' ]; ?>
											            </textarea>
											            <script>
											                CKEDITOR.replace( 'editor1' );
											            </script>
											        </div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" onclick="document.getElementById('form-contenido').submit()" class="btn voyo-btn-2 rounded">Guardar</button>
												<button type="button" class="btn voyo-btn-2 rounded" data-dismiss="modal">Cancelar</button>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>

<?php

	if($_POST){

		$conexion = Conectar();

		$values = "titulo = '" . $_POST[ 'titulo' ] . "', contenido = '" . $_POST['editor1'] . "'";

		$where = "enlace = '" . $enlace . "'";

		$dato = UpdateSimple( $conexion, "inuede_pages", $values, $where );

		// Regla para cuando el contenido es concretamente "empleo"
		if( $enlace == "empleo" )
			$url = $enlace;
		else
			$url = $sitio . "/" . $enlace;


		if( $dato === TRUE ){
?>
				<div class="alert alert-2 bg-blue alert-dismissable fade in br4 mt20">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<i class="fa fa-database fa-2x"></i>
					<p> Contenido actualizado correctamente. </p>
				</div>
				<script>
					setTimeout('window.location = "<?php echo $url ?>"', 2000)
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
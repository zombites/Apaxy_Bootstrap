<?php
	$conexion = Conectar();
	$filas = SelectSimple( $conexion, "*", "inuede_content", "1");
?>
						<h2 class="section-title-2">Lista de contenidos</h2>
						<?php 
							if ($filas === FALSE) 
								echo "Todavía no existen contenidos.";
							else {
						?>
						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Título</th>
										<th>Categoría</th>
										<th>Activo</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
										<?php foreach($filas as $fila) { ?>
									<tr>
										<td><?php echo $fila[ 'id'] ?></td>
										<td><?php echo $fila[ 'titulo'] ?></td>
										<td>
											<?php switch( $fila[ 'tipo' ] ) {
												case 'c': // Cursos
													echo "Curso";
													break;
												case 'n': // Noticias
													echo "Noticia";
													break;
												case 'g': // Guías
													echo "Guía";
													break;
												case 'r': // Recursos
													echo "Recurso";
													break;

											} ?>
										</td>
										<td>
											<?php echo ( $fila[ 'del'] == 0) ? "Sí" : "No"; ?>
										</td>
										<td>
											<a class="btn btn-bg bg-blue" href="contenido/<?php echo $fila['enlace'] ?>">
											    <i class="fa fa-css3"></i> Ver
											</a>
									</tr>
								<?php 	} ?>
								</tbody>
							</table>
						</div>
						<?php } ?>

<?php DesConectar($conexion); ?>

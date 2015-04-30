<?php
	$conexion = Conectar();
	$filas = SelectSimple( $conexion, "*", "inuede_users", "1");
?>

						<div class="table-responsive">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Usuario</th>
										<th>Clave</th>
										<th>Rol</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php foreach($filas as $fila) { ?>
									<tr>
										<td><?php echo $fila[ 'id'] ?></td>
										<td><?php echo $fila[ 'user'] ?></td>
										<td><?php echo $fila[ 'pass'] ?></td>
										<td><?php echo $fila[ 'rol'] ?></td>
										<td class="pull-right">
											<a class="btn btn-bg btn-sm bg-red" href="#">
											    <i class="fa fa-css3"></i> Eliminar
											</a>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>

<?php DesConectar($conexion); ?>

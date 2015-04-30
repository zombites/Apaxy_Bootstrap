<?php
	$conexion = Conectar();
	$filas = SelectSimple( $conexion, "*", "inuede_users", "del is not TRUE");
?>
						<h2 class="section-title-2">Lista de usuarios</h2>
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
										<td><?php echo ($_SESSION[ 'USUARIO'][ 'rol' ] == 1) ? $fila[ 'pass' ] : md5( $fila[ 'pass'] ) ?></td>
										<td><?php echo ($fila[ 'rol'] == 1) ? "Administrador" : "Editor" ; ?></td>
										<td>
											<?php if($_SESSION[ 'USUARIO'][ 'rol' ] == 1) { ?>
											<a class="btn btn-bg bg-blue" href="page/editar-usuario-<?php echo $fila['id'] ?>">
											    <i class="fa fa-css3"></i> Editar
											</a>
											<?php } ?>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>

<?php DesConectar($conexion); ?>

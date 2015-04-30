									<div id="portfolio-isotope">
										<div class="portfolio-container">
											<div class="row">
												<div class="portfolio">
<?php 

	// Se define el número de elmentos a mostrar en el listado
	define("NUMREG", 6);
	
	$conexion = Conectar();


	// Se consulta el número total de registros para la paginación
	$total = SelectSimple( $conexion, "count(*) total", "inuede_content", "del = 0" );
	$total = $total[ 0 ][ 'total' ];

	if( isset($_GET[ 'p' ]) && $_GET[ 'p' ] > 0 ) $limite = ($_GET[ 'p' ]-1) * NUMREG;
	else $limite = 0;

	$filas = SelectSimple( $conexion, "*, DATE_FORMAT(fecha,'%d %b %y') as ffecha", "inuede_content", "del = 0", "fecha DESC", $limite . "," . NUMREG );

	if( $filas ){
		foreach( $filas as $fila ){

			switch ($fila[ 'tipo' ]) {
				case 'c': $tipo = "Cursos"; break;
				case 'n': $tipo = "Noticias"; break;
				case 'g': $tipo = "Guías"; break;
				case 'r': $tipo = "Recursos"; break;
			}
	?>
														<div class="col-sm-12 col-md-6 el animated" data-anim="fadeInUp">
															<div class="blog-item">
																<div class="blog-image">
																	<img src="verimg.php?id=<?php echo $fila[ 'id' ]; ?>" title="<?php echo $fila[ 'img_nombre' ]; ?>" alt="">
																</div>
																<div class="blog-caption">
																	<h3 class="post-title"><?php echo $fila[ 'titulo' ]; ?></h3>
																	<div class="sub-post-title">
																		<span class="date"><i class="fa fa-calendar"></i> <?php echo $fila[ 'ffecha' ] ?></span>
																		<span class="category"><i class="fa fa-tag"></i> <?php echo $tipo; ?></span>
																	</div>
																	<?php echo substr($fila[ 'contenido' ], 0, stripos($fila[ 'contenido' ], "</p>" ) ); ?>
																	<p></p>
																	<a href="contenido/<?php echo $fila[ 'enlace' ]; ?>" class="read-more">Leer más</a>
																</div>
															</div>
										                </div> <!-- END Blog Item -->
<?php
		}
?>
									        	</div> <!-- END Portfolio -->
											</div> <!-- END Row -->
										</div> <!-- END portfolio Container -->
									</div> <!-- END Portfolio Isotope -->
<?php 
	$prevclass = $nextclass = "disabled";

	$y = ceil( ( int )$total / NUMREG );

	if( !isset( $_GET[ 'p' ] ) || $_GET[ 'p' ] == 1 ) { 
		$prevhref = "";
		$nextclass = ""; $nexthref = "./contenido/todo/2"; 
		$x = 1;
	}
	elseif( isset( $_GET[ 'p' ] ) && $_GET[ 'p' ] < $y ) { 
		$prevclass = ""; $prevhref = "./contenido/todo/" . ( $_GET[ 'p' ] - 1 ); 
		$nextclass = ""; $nexthref = "./contenido/todo/" . ( $_GET[ 'p' ] + 1 );
		$x = $_GET[ 'p' ]; 
	}
	else {
		$prevclass = ""; $prevhref = "./contenido/todo/" . ( $_GET[ 'p' ] - 1 );
		$nexthref = "";
		$x = $_GET[ 'p' ]; 
	}
?>
	<div class="row">
		<div class="col-sm-12">
				<div class="divider d4 mb20">
					<span><small>Página <?=$x?> de <?=$y?></small></span>
				</div>
				<div class="inline-block">
					<a href="./contenido/todo" class="<?php echo $prevclass; ?> btn voyo-btn br4"><i class="fa fa-chevron-left"></i><i class="fa fa-chevron-left"></i></a>
					<a href="<?php echo $prevhref; ?>" class="<?php echo $prevclass; ?> btn voyo-btn br4"><i class="fa fa-chevron-left"></i><span class="hidden-xs"> Anterior</span></a>
				</div>
				<div class="pull-right">
					<a href="<?php echo $nexthref; ?>" class="<?php echo $nextclass; ?> btn voyo-btn br4"><span class="hidden-xs">Siguiente </span><i class="fa fa-chevron-right"></i></a>
					<a href="./contenido/todo/<?=$y?>" class="<?php echo $nextclass; ?> btn voyo-btn br4"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a>
				</div>
		</div>
	</div>


<?php 
	} else echo "<script>window.location.replace('contenido')</script>";
?>
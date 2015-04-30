							<div class="sidebar-widget">
								<form action="#" role="form">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
										</span>
									</div>
								</form>
							</div>
							<?php if( isset( $_SESSION[ 'USUARIO'] ) ) {

								$url = explode ( "/", $_SERVER[ 'REQUEST_URI' ] ); ?>
							<div class="sidebar-widget">
								<h3 class="sidebar-title text-capitalize">
									<i class="fa fa-user"></i> <?php echo $_SESSION[ 'USUARIO' ][ 'name' ]; ?>
									<small><?php echo ( $_SESSION[ 'USUARIO' ][ 'rol' ] == 1 ) ? "Admin" : "Editor" ?></small>
								</h3>
								<div class="panel-group" id="accordion">
									<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#contenido">Contenido</a>
									      	</h4>
									    </div>
									    <div id="contenido" class="panel-collapse collapse <?php if ( in_array( "contenido", $url ) ) echo "in"; ?>">
										    <div class="page-sitemap panel-body">
										       	<ul>
										       		<li><a href="contenido/todo">Listado público</a></li>
										       		<li><a href="contenido/listado">Adminsitración</a></li>
										       		<li><a href="contenido/nuevo">Añadir nuevo</a></li>
										       	</ul>
										    </div>
									    </div>
									</div>
	  								<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#usuarios">Usuarios</a>
									      	</h4>
									    </div>
									    <div id="usuarios" class="panel-collapse collapse <?php if ( in_array( "page", $url) ) echo "in"; ?>">
										    <div class="page-sitemap panel-body">
										       	<ul>
										       		<li><a href="page/lista-usuarios">Listado completo</a></li>
													<?php if($_SESSION[ 'USUARIO'][ 'rol' ] == 1) { ?>
										       		<li><a href="page/nuevo-usuario">Añadir nuevo</a></li>
													<?php } ?>
										       	</ul>
										    </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading bg-red">
									        <h4 class="panel-title">
									            <a href="page/logout">Salir</a>
									      	</h4>
									    </div>
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="sidebar-widget">
								<h3 class="sidebar-title">Lorem Ipsum</h3>
								<div class="panel-group" id="accordion">
	  								<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#one">Campus Virtual
									            </a>
									      	</h4>
									    </div>
									    <div id="one" class="panel-collapse collapse in">
										    <div class="page-sitemap panel-body">
										       	<ul>
										       		<li><a href="">Presentación</a></li>
										       		<li><a href="">Acceso</a></li>
										       	</ul>
										    </div>
									    </div>
									</div>
	  								<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#two">Administración
									            </a>
									      	</h4>
									    </div>
									    <div id="two" class="panel-collapse collapse">
										    <div class="panel-body">
												<form class="form form-2" action="page/login" method="post">
								  					<label>
									 					User Name 
									 					<input type="text" name="user" required class="form-control">
									 				</label>
									 				<label>
									 					Password 
									 					<input type="password" name="pass" required class="form-control">
									 				</label>
													<!--p><small>Don't you have an account? <a href="page_register.html"> &nbsp; Register</a></small></p-->
											 		<div>
											 			<button type="submit" class="btn btn-sm btn-bg bg-blue btn-block rounded"> Acceder </button>
											 		</div>
								  				</form>
										    </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#three">Matrícula
									            </a>
									      	</h4>
									    </div>
									    <div id="three" class="panel-collapse collapse">
										    <div class="panel-body">
										 		<div>
										 			<a href="automatricula" class="btn btn-sm btn-bg bg-blue btn-block rounded" id="open-wizard"> Automatrícula</a>
										 		</div>
										    </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#four">Elemento N
									            </a>
									      	</h4>
									    </div>
									    <div id="four" class="panel-collapse collapse">
										    <div class="panel-body">
										       	<p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
										    </div>
									    </div>
									</div>
								</div>
							</div>
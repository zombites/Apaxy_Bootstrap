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
							<?php if( isset( $_SESSION[ 'USUARIO'] ) ) { ?>
							<div class="sidebar-widget">
								<h3 class="sidebar-title">Administración</h3>
								<div class="panel-group" id="accordion">
								<?php if($_SESSION[ 'USUARIO'][ 'rol' ] == 1) { ?>
	  								<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#one">Usuarios</a>
									      	</h4>
									    </div>
									    <div id="one" class="panel-collapse collapse in">
										    <div class="page-sitemap panel-body">
										       	<ul>
										       		<li><a href="page/lista-usuarios">Listado completo</a></li>
										       		<li><a hrer="page/nuevo-usuario">Añadir nuevo</a></li>
										       	</ul>
										    </div>
									    </div>
									</div>
								<?php } ?>
									<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a href="page/logout">Salir</a>
									      	</h4>
									    </div>
									</div>
								</div>
							</div>
							<?php } ?>
							<div class="sidebar-widget">
								<h3 class="sidebar-title">Text Widget</h3>
								<p>Lorem ipsum dolor sit amet, consect adipisicing elit. Impedit, recusandae corrupti voluptas atque voluptatibus dignissimos explicabo incidunt minus architecto in!</p>
								<ul class="social-icon with-bg mb10 rounded">
								 	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
								</ul>
							</div>
							<div class="sidebar-widget">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab1" data-toggle="tab">Latest Posts</a></li>
									<li><a href="#tab2" data-toggle="tab">Popular Posts</a></li>
								</ul>
								<div class="tab-content">
								    <div class="tab-pane fade in active" id="tab1">
								    	<ul class="latest-posts">
											<li>
												<div class="image-post">
													<img src="images/demo/p-101.jpg" alt="blog post">
												</div>
												<div class="info-post">
													<h5><a href="blog_single_left.html">About Wordpress</a></h5>
													<span>25 June, 2014 </span>
												</div>
											</li>
											<li>
												<div class="image-post">
													<img src="images/demo/p-102.jpg" alt="blog post">
												</div>
												<div class="info-post">
													<h5><a href="blog_single_left.html">About Joomla</a></h5>
													<span>27 June, 2014 </span>
												</div>
											</li>
											<li>
												<div class="image-post">
													<img src="images/demo/p-103.jpg" alt="blog post">
												</div>
												<div class="info-post">
													<h5><a href="blog_single_left.html">About Drupal</a></h5>
													<span>1 July, 2014 </span>
												</div>
											</li>
										</ul>
								    </div>
								    <div class="tab-pane fade" id="tab2">
								    	<ul class="latest-posts">
											<li>
												<div class="image-post">
													<img src="images/demo/p-104.jpg" alt="blog post">
												</div>
												<div class="info-post">
													<h5><a href="blog_single_left.html">About HTML5</a></h5>
													<span>10 July, 2014 </span>
												</div>
											</li>
											<li>
												<div class="image-post">
													<img src="images/demo/p-105.jpg" alt="blog post">
												</div>
												<div class="info-post">
													<h5><a href="blog_single_left.html">About CSS3</a></h5>
													<span>12 July, 2014 </span>
												</div>
											</li>
											<li>
												<div class="image-post">
													<img src="images/demo/p-106.jpg" alt="blog post">
												</div>
												<div class="info-post">
													<h5><a href="blog_single_left.html">About Javascript</a></h5>
													<span>15 July, 2014 </span>
												</div>
											</li>
										</ul>
								    </div>
								</div>
							</div>
							<div class="sidebar-widget">
								<h3 class="sidebar-title">CMSs</h3>
								<div class="panel-group" id="accordion">
	  								<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#one">Wordpress
									            </a>
									      	</h4>
									    </div>
									    <div id="one" class="panel-collapse collapse in">
										    <div class="panel-body">
										       	<p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
										    </div>
									    </div>
									</div>
	  								<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#two">Joomla
									            </a>
									      	</h4>
									    </div>
									    <div id="two" class="panel-collapse collapse">
										    <div class="panel-body">
										        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
										    </div>
									    </div>
									</div>
	  								<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#three">Drupal
									            </a>
									      	</h4>
									    </div>
									    <div id="three" class="panel-collapse collapse">
										    <div class="panel-body">
										        <p> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Lorem ipsum dolor sit amet.</p>
										    </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading">
									        <h4 class="panel-title">
									            <a data-toggle="collapse" data-parent="#accordion" href="#four">Concrete5
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
							<div class="sidebar-widget">
								<h3 class="sidebar-title">Categories</h3>
								<ul class="categories">
									<li><a href="#"><span>40</span> Web Design</a></li>
									<li><a href="#"><span>12</span> Software Engineering</a></li>
									<li><a href="#"><span>22</span> Web Graphic</a></li>
									<li><a href="#"><span>08</span> Web Programming</a></li>
									<li><a href="#"><span>28</span> Software Design</a></li>
								</ul>
							</div>
							<div class="sidebar-widget">
								<h3 class="sidebar-title">Tags</h3>
								<div class="tags">
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> Wordpress</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> Concrete5</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> Drupal</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> Joomla</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> PHP</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> HTML5</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> CSS3</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> jQuery</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> Java</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> Ruby</a>
									<a href="#" title="10 Topics"><i class="fa fa-tag"></i> Javascript</a>
								</div>
							</div>
							<div class="sidebar-widget">
								<h3 class="sidebar-title">Flickr Photos</h3>
								<div class="footer-widget xs-text-center">
									<!-- FLickr Feed -->
									<ul id="flickr-sidebar" class="flickr-feed footer-projects">
									</ul>
								</div> <!-- END Footer Widget Flickr -->
							</div>
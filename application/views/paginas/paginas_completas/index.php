<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido a Pc-Gamer</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/BS/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/CSS/estilo.css">
</head>
<body>
	<!-- barra de navegacion -->
	<nav role="navigation" class="navbar navbar-default">
		<!-- navbar-fixed-top     para que quede el navbar pegada arriba, pero no anda con la ventana modal :( -->
		<div class="navbar-header">
			<button type="button" data-target="#barra-navegacion" data-toggle="collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img class="navbar-logo" src="<?php echo base_url(); ?>assets/img/pcgamer-logo.png">
		</div>		
		<div id="barra-navegacion" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="index.html">INICIO</a></li>
				<li><a href="index.html#productos">PRODUCTOS</a></li>
				<li><a href="contacto.html">CONTACTO</a></li>
				<li class="dropdown">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">NOSOTROS<b class="caret"></b></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="quienes-somos.html">QUIENES SOMOS</a></li>
						<li><a href="comercializacion.html">COMERCIALIZACION</a></li>
						<li><a href="terminos-y-condiciones.html">TERMINOS Y CONDICIONES</a></li>
					</ul>
				</li>
			</ul>
			
			<button type="button" class="btn btn-primary navbar-btn navbar-right margen-boton-navbar" data-toggle="modal" data-target=#ingresar>Ingresar</button>				    
			<!-- Modal -->
			<div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog modal-sm">
			        <div class="modal-content">
			            <!-- Modal Header -->
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal">
			                       <span aria-hidden="true">&times;</span>
			                       <span class="sr-only">Close</span>
			                </button>
			                <h4 class="modal-title" id="myModalLabel">Pc-Gamer Login</h4>
			            </div>            
			            <!-- Modal Body -->
			            <form class="form-horizontal" role="form">
			            	<div class="modal-body">		               
			                  <div class="form-group col-sm-10">
			                        <input type="email" class="form-control" placeholder="Usuario" required/>
			                  </div>
			                  <div class="form-group col-sm-10">
			                        <input type="password" class="form-control" placeholder="Contraseña" required/>
			                  </div>
			                  <div class="form-group">
			                    <div class="col-sm-10 checkbox">
			                        <label>
			                            <input type="checkbox"/>Recordar mi cuenta
			                        </label>			                      
			                    </div>
			                  </div>			                
				            </div>            
				            <!-- Modal Footer -->
				            <div class="modal-footer form-horizontal">                
				                <button type="submit" class="btn btn-primary">Iniciar Sesion
				                </button>
				                <a href="registracion.html"><button type="button" class="btn btn-default" 	data-dismiss="modal" onclick="javascript:registrar();">Registrarse</button>
				                </a>
				                <!-- permite dirigir al boton registrar hacia la pag del registro -->
				                <script type="text/javascript">
				                	function registrar(){
				                		location.href= "registracion.html"
				                	}
				                </script>
				            </div>
			            </form>
			        </div>
			    </div>
			</div>
			<!-- Buscador -->
			<form role="search" class="navbar-form navbar-right" style="border-style: none">
				<div class="form-group">
					<input type="text" placeholder="Buscar" class="form-control">
				</div>
				<span class="btn btn-default glyphicon glyphicon-search hidden-xs hidde-sm"></span>	
			</form>		
		</div>	
	</nav>

	<!-- principal -->
	<div class="container-fluid fondo-principal">
		<div class="container fondo-1">
			<div class="row">
				<!-- slide -->
				<div class="col-md-10 col-md-push-1 col-lg-10">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
					      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
			  	        <!-- Wrapper for slides -->
					    <div class="carousel-inner" role="listbox">
						    <div class="item active">
						      	<img src="<?php echo base_url(); ?>assets/img/slider-1.jpg" class="img-responsive" alt="">
						      	<div class="carousel-caption">
						      		<h3>Bienvenido a PC-GAMER</h3>
						      		<p>Una empresa Argentina, dedicada a la comercialización de productos de tecnología</p>
						      	</div>
						    </div>
						    <div class="item">
						      <img src="<?php echo base_url(); ?>assets/img/slider-2.jpg" class="img-responsive" alt="">
						      <div class="carousel-caption">
						      		<h3>Bienvenido a PC-GAMER</h3>
						      		<p>Una empresa Argentina, dedicada a la comercialización de productos de tecnología</p>
						      	</div>
						    </div>
						    <div class="item">
						      <img src="<?php echo base_url(); ?>assets/img/slider-3.jpg" class="img-responsive" alt="">
						      <div class="carousel-caption">
						      		<h3>Bienvenido a PC-GAMER</h3>
						      		<p>Una empresa Argentina, dedicada a la comercialización de productos de tecnología</p>
						      	</div>
						    </div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<!-- principal -->
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6 margen-izq">
					<br><br>
					<img src="<?php echo base_url(); ?>assets/img/logo.jpg" class="img-responsive" alt="">
					<br>
				</div>
				<div class="col-xs-10 col-sm-5 col-md-5 col-lg-5">
					<p class="text-justify letra-1 margen-der"><br><br>En <b>Pc-Gamer</b> disponemos de una gama de pcs optimizados para satisfacer a todo tipo usuarios. Desde los que forman parte del mundo gaming más exigente, hasta los que simplemente quieren un ordenador o pc gaming barato para disfrutar de un gran rendimiento en videojuegos. Nuestros equipos están totalmente construidos para obtener un gran rendimiento a un precio ajustado. Sus componentes han sido testeados detenidamente por nuestros expertos para conseguir una óptima configuración y un perfecto funcionamiento.</p>
				</div>
			</div>

			<hr>
			<!-- productos -->	
			<a name="productos" title=""></a>		
			<div class="row">
				<div class="titulo text-center">
					<h2>PRODUCTOS</h2>
				</div>
			</div>
			<br>
			<div class="row">
			<!-- producto 1 -->
				<div class="col-md-6">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<br><img src="<?php echo base_url(); ?>assets/img/pc-bronze-ultra.jpg" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<h3>Pc Bronze Ultra</h3>
							<ul>
								<li>Intel Core i5-7400 3.0GHz</li>
								<li>Corsair Force LS SSD 120GB SATA3</li>
								<li>Seagate BarraCuda 3.5" 1TB SATA3</li>
								<li>MSI GTX 1060 GAMING</li><br>
							</ul>						
						</div>					
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-2 col-sm-4 col-md-4 col-md-offset-1">
							<h3>$8999,99</h3>
						</div>
						<div class="col-xs-10 col-xs-offset-2 col-sm-offset-1 col-sm-4 col-md-6 col-md-offset-1"  style="padding-top: 15px">
							<!-- ese padding es para que quede al mismo nivel -->
							<button type="button" class="btn btn-warning" style="margin-left: -10px">Comprar</button>&nbspCant:
							<select class="custom-select">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">mas</option>					
							</select>
						</div>
					</div>
				</div>
			<!-- producto 2 -->
				<div class="col-md-6">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<img src="<?php echo base_url(); ?>assets/img/pc-bronze.jpg" class="img-responsive">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<h3>Pc Bronze</h3>
							<ul>
								<li>Intel Core i3-6100 3.7GHz</li>
								<li>WD Blue 1TB SATA3</li>
								<li>Asus GeForce GTX 1060 OC Dual 3GB GDDR5</li>
								<li>G.Skill Aegis DDR4 2133 8GB CL15</li><br><br>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-2 col-sm-4 col-md-4 col-md-offset-1">
							<h3>$7999,99</h3>
						</div>
						<div class="col-xs-10 col-xs-offset-2 col-sm-offset-1 col-sm-4 col-md-6 col-md-offset-1"  style="padding-top: 15px">
							<!-- ese padding es para que quede al mismo nivel -->
							<button type="button" class="btn btn-warning" style="margin-left: -10px">Comprar</button>&nbspCant:
							<select class="custom-select">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">mas</option>					
							</select>
						</div>
					</div>				
				</div>	
			</div>
			<br><br>
		
			<hr style="border-color: black">		
			<br>		
			<div class="row">
			<!-- producto 3 -->
				<div class="col-md-6">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<img src="<?php echo base_url(); ?>assets/img/gabinete-naranja.jpg" class="img-responsive" alt="">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
							<h3>Pc RaidMax Viper</h3>
							<ul>
								<li>AMD APU Series A10 7860k</li>
								<li>Gigabyte Chipset A68 - USB3.0</li>
								<li>ATI Radeon Rx 480</li>
								<li>HyperX Fury 8GB DDR3 1866Mhz</li>
								<li>Atx Seasonic S12ii 520w</li><br>
							</ul>
						</div>
						<!-- <div class="visible-xs visible-sm clearfix"></div> -->
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-2 col-sm-4 col-md-4 col-md-offset-1">
							<h3>$9499,99</h3>
						</div>
						<div class="col-xs-10 col-xs-offset-2 col-sm-offset-1 col-sm-4 col-md-6 col-md-offset-1"  style="padding-top: 15px">
							<!-- ese padding es para que quede al mismo nivel -->
							<button type="button" class="btn btn-warning" style="margin-left: -10px">Comprar</button>&nbspCant:
							<select class="custom-select">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">mas</option>					
							</select>
						</div>
					</div>
				</div>
			<!-- producto 4 -->
				<div class="col-md-6">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
						   <img src="<?php echo base_url(); ?>assets/img/gamer-raidmax-cobra-z-black-red.jpg" class="img-responsive" alt="">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6">
								<h3>Pc RaidMaxCobra</h3>
								<ul>
									<li>AMD FX8320e</li>
									<li>Motherboard ASUS M578L-M USB3.0</li>
									<li>ASUS Radeon R9 Fury Strix 4GB</li>
									<li>HyperX Fury 8GB DDR3 1866Mhz</li>
									<li>Sentey Xcp630 630w</li><br>
								</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-2 col-sm-4 col-md-4 col-md-offset-1">
							<h3>$9999,99</h3>
						</div>
						<div class="col-xs-10 col-xs-offset-2 col-sm-offset-1 col-sm-4 col-md-6 col-md-offset-1"  style="padding-top: 15px">
							<!-- ese padding es para que quede al mismo nivel -->
							<button type="button" class="btn btn-warning" style="margin-left: -10px">Comprar</button>&nbspCant:
							<select class="custom-select">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">mas</option>					
							</select>
						</div>
					</div>
				</div>	
			</div>
			<br><br>
		</div>
	</div>	

	<!-- pie -->
	<footer class="pie text-center">
		<div class="hidden-xs">
			<p>© 2017 Juanpi Gallardo Front-End Developer. All rights reserved.</p>
		</div>
		<div class="visible-xs">
			<p class="small">© 2017 Juanpi Gallardo Front-End Developer.</p>
		</div>
	</footer>
	<script src="<?php echo base_url(); ?>assets/BS/js/jquery-3.2.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/BS/js/bootstrap.js"></script>
</body>
</html>
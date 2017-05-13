<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registracion</title>
	<link rel="stylesheet" href="bs/css/bootstrap.css">
	<link rel="stylesheet" href="CSS/estilo.css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="bs/css/bootstrap-social.css">
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
			<img class="navbar-logo" src="img/pcgamer-logo.png">
		</div>		
		<div id="barra-navegacion" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.html">INICIO</a></li>
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
				                <button type="button" class="btn btn-default" data-dismiss="modal">Registrarse
				                </button>
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

	<div class="container-fluid fondo-principal">
		<div class="container fondo-2">
			<div class="row">
				<br>
				<div class="titulo text-center">
					<h2>REGISTRO DE USUARIO</h2>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-center col-xs-6 col-sm-6 col-md-4">
					<img src="img/pcgamer-readers.png" class="img-responsive">
				</div>
			</div>
			<br>
			<div class="row">
				<h4 class="text-center">Registrate y disfruta de todas nuestras promociones</h4>
				<br>
				<form class="form-horizontal">
					<div class="margen-izq col-xs-11 col-sm-5 col-md-5 col-md-push-0 col-lg-5">			
						<div class="form-group">
						  <label class="control-label" for="textinput">Nombre completo:</label>
						  <input id="textinput" name="textinput" type="textinput" class="form-control input-md" required> 
						</div>
						<div class="form-group">
						  <label class="control-label" for="textinput">Apellidos:</label>
						  <input id="textinput" name="textinput" type="textinput" class="form-control input-md" required> 
						</div>
						<div class="form-group">
						  <label class="control-label" for="textinput">DNI:</label>
						  <input id="textinput" name="textinput" type="number" class="form-control input-md" min="1000000" max="90000000" required>						 
						</div>						
						<div class="form-group">
						  <label class="control-label" for="email">E-mail:</label>
						  <input id="email" name="email" type="email" class="form-control input-md" required>
						</div>
						<br><br>
					</div>
					<div class="margen-izq col-xs-11 col-sm-5 col-sm-push-1 col-md-5 col-md-push-1 col-lg-5">  
					  	<div class="form-group">
					 	  <label class="control-label" for="usuario">Nombre de Usuario:</label>
					  	  <input id="usuario" name="usuario" type="textinput" class="form-control input-md" required>
						</div>
						<div class="form-group">
						  <label class="control-label" for="pass1">Contraseña:</label>
						  <input id="pass1" name="pass1" type="password" class="form-control input-md" required>
						</div>
						<div class="form-group">
						  <label class="control-label" for="pass2">Reescriba la contraseña:</label>
						  <input id="pass2" name="pass2" type="password" class="form-control input-md" required>
						</div>
						<div class="form-group">
					 	  <label class="control-label" for="pregsecreta">Nombre de su mascota favorita:</label>
					  	  <input id="pregsecreta" name="pregsecreta" type="textinput" class="form-control input-md" required>
						</div>
						  <div class="form-group">
						  	<label for="robot">No soy un robot&nbsp</label>
							<input type="checkbox" name="robot" required>
						  </div>
						  <div class="form-group">
						  	<label for="promos">Deseo recibir e-mails con ofertas y promociones&nbsp</label>
							<input type="checkbox" name="promos" checked>
						  </div>
						  <div class="form-group">
						    <button type="submit" class="btn btn-primary">Registrar Usuario</button>
							<button type="submit" class="btn btn-primary">Limpiar</button>				
						  </div>					
					</div>
				</form>	
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-12">
					Seguinos en&nbsp
					<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/pcgamermagazine/">
					    <span class="fa fa-facebook"></span>
					</a>
					<a class="btn btn-social-icon btn-twitter" href="https://twitter.com/pcgamer?lang=es">
					    <span class="fa fa-twitter"></span>
					</a>
					<a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/pcgamermagazine/?hl=es">
					    <span class="fa fa-instagram"></span>
					</a>
					<a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/company/pc-gamer">
					    <span class="fa fa-linkedin"></span>
					</a>
				</div>
					<br><br>
			</div>

		  </div>
		</div>
	</div>


	<footer class="pie text-center">
		<div class="hidden-xs">
			<p>© 2017 Juanpi Gallardo Front-End Developer. All rights reserved.</p>
		</div>
		<div class="visible-xs">
			<p class="small">© 2017 Juanpi Gallardo Front-End Developer.</p>
		</div>
	</footer>
	<script src="BS/js/jquery-3.2.0.min.js"></script>
	<script src="BS/js/bootstrap.js"></script>
</body>
</html>
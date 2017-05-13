<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contacto</title>
	<link rel="stylesheet" href="BS/css/bootstrap.css">
	<link rel="stylesheet" href="CSS/estilo.css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="BS/css/bootstrap-social.css">
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
				<li class="active"><a href="contacto.html">CONTACTO</a></li>
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
					<h2>CONTACTO</h2>
				</div>			
				<h4 class="margen-izq">Podes acercarte a nuestro local, estamos ubicados por calle 9 de julio al 1449 entre San lorenzo y Catamarca, al lado del Banco Provincia.</h4>
				<br><br>
				<div class="col-xs-12 col-md-8">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1198.5417689278763!2d-58.83291997306716!3d-27.466908890164824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb92ce3fedb0d7729!2s%C3%81rea+Graduados+-+Ciencias+Exactas+y+Naturales+y+Agrimensura+-+UNNE!5e0!3m2!1ses!2sar!4v1491770714995" width="100%" height="250" frameborder="0" style="border: solid grey 2px; margin-bottom: 20px;" allowfullscreen></iframe>
				</div>
				<div class="margen-izq col-xs-10 col-sm-12 col-md-3 col-md-push-0 col-lg-3">
					<div class="form-horizontal">
						<div class="form-group">
							<p><span class="glyphicon glyphicon-inbox"></span>
							&nbspE-mail: pcgamer@hotmail.com</p>
							<p><span class="glyphicon glyphicon-earphone"></span>
							&nbspTelefonos: (379) 4221129</p>
							<p><span class="glyphicon glyphicon-calendar"></span>
							&nbspLunes a Viernes de 8:30 a 13:00hs y de 17:00 a 21:00hs</p>
							<p><span class="glyphicon glyphicon-time"></span>
							&nbspSabados de 9:00 a 14:00hs</p>
							<p><span class="glyphicon glyphicon-envelope"></span>
							&nbspCP (3400) - Corrientes - Argentina</p>
							<br>
							<p>Visitanos en las redes sociales</p>
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
					</div>
				</div>							
			</div>
			<div class="row">
				<br><h4 class="margen-izq">Podes comunicarte con nosotros telefonicamente o via email por medio del siguiente formulario.</h4><br>
				<form class="form-horizontal">
					<div class="margen-izq col-xs-11 col-sm-5 col-md-5 col-md-push-0 col-lg-5">					
						<div class="form-group">
						  <label class="control-label" for="textinput">Nombre completo: (*)</label>
						  <input id="textinput" name="textinput" type="textinput" class="form-control input-md" required> 
						</div>
						<div class="form-group">
						  <label class="control-label" for="email">E-mail: (*)</label>
						  <input id="email" name="email" type="email" class="form-control input-md" required>
						</div>
						<div class="form-group">
						  <label class="control-label" for="textinput">Telefono:</label>
						  <input id="textinput" name="textinput" type="textinput" class="form-control input-md">						 
						</div>
						<br><br>
					</div>
					<div class="margen-izq col-xs-11 col-sm-5 col-sm-push-1 col-md-5 col-md-push-1 col-lg-5">  
						  <div class="form-group"> 
						   	<label class="control-label" for="textarea">Comentarios:</label>    
						   	<textarea class="form-control" id="textarea" name="textarea">...</textarea>
						  </div>
						  <div class="form-group">
						  	<label for="robot">No soy un robot  </label>
							<input type="checkbox" name="robot" required>
						  </div>
						  <div class="form-group">
							<button type="submit" class="btn btn-primary">Enviar Comentarios</button>
							<button type="submit" class="btn btn-primary">Refrescar</button>						
						  </div>					
					</div>
				</form>				
			</div>			
			<div class="visible-lg">
				<br><br><br><br><br><br>
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
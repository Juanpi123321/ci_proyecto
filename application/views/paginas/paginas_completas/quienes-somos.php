<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quienes Somos</title>
	<link rel="stylesheet" href="BS/css/bootstrap.css">
	<link rel="stylesheet" href="CSS/estilo.css">
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
				<li class="dropdown active">
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
	<!-- principal -->
	<div class="container-fluid fondo-principal">
		<div class="container fondo-2">
			<div class="row">
				<br>
				<div class="titulo text-center">
					<h2>QUIENES SOMOS</h2>
				</div>
				<br>
			</div>
			<div class="row">
				<div class="col-sm-4 col-md-4" style="margin-bottom: 30px;">
					<img src="img/pcgamer-logo-grande.png" alt="" class="img-responsive">
				</div>
				<div class="col-sm-8 col-md-7 col-md-offeset-1">
					<div class="margen-izq text-justify text-grande" style="margin-right: 15px;">
						<p>Hace más de 12 años, cuando la Tecnología se expandía a millones de personas en el mundo, se encendía en nosotros la vocación de brindar productos tecnológicos de calidad y atención personalizada.<br />
						Así nacía: <strong>PCGAMER.</strong></p>
						<p>Todos estos años hemos escuchado a nuestros clientes, sus inquietudes y necesidades, nos hemos capacitado y perfeccionado para ofrecer una experiencia de compra diferente.<br />
						La tecnología evoluciona constantemente, nosotros también. En esa evolución, crecemos, nos adaptamos, nos encendemos.</p>
						<p><strong>Hoy llega &#8220;PCGAMER&#8221;: una empresa Argentina, joven, líder en comercialización de productos y servicios de tecnología.</strong> Somos distribuidores oficiales de productos de primeras marcas, con garantía oficial y precios inmejorables, enviamos a todo el país y a miles de clientes particulares, pymes, instituciones educativas y gubernamentales.</p>
						<p>Creemos en lo que hacemos y agradecemos la confianza, queremos ser parte de tu vida, queremos encender tu pasión por la tecnología.</p>
					</div><br>
				</div>
            </div>
	            <br><br><br><br><br><br><br>        
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